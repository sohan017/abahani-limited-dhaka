<?php

namespace App\Http\Controllers;

use App\BuyTicket;
use App\Discount;
use App\Ticket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Subscriber;
use Auth;

class PaymentController extends Controller
{
    public function ticketbuy(Request $request)
    {
        if(!Auth::guard('subscriber')->check()){
            return redirect()->route("login.subscriber");
        }

        if($request->qty > 5){
            return redirect()->back()->withWarning("You can't buy more then 5 ticket at same time.");
        }

        $ticket = Ticket::findorFail($request->id);
        
        if ($request->type == 'vip') {
            $payable = $ticket->vip_price * $request->qty;
        }elseif ($request->type == 'classic') {
        	$payable = $ticket->classic_price * $request->qty;
        }else{
        	$payable = $ticket->normal_price * $request->qty;
        }

        $discount = 0;
        if ($request->coupon) {
            $discount = Discount::where('match_id',$ticket->match->id)->first();
            if ($discount) {
                if (strtolower(trim($discount->name)) == strtolower(trim($request->coupon))) {
                    $price = $payable * $discount->percent/100;
                } else{
                    return redirect()->back()->withWarning("Discount is not correct.");
                }
            }
        }else{
            $price = $payable;
        }
        	        
        $name = $ticket->match->name;
        $price = $price;
        $plan_id = $ticket->id;
        $success = route('success');
        $fail = route('pricing');
        $cancel = route('pricing');
        $post_data = array();

        $post_data['store_id'] = "easyt5d47c1bdea896";

        $post_data['store_passwd'] = "easyt5d47c1bdea896@ssl";
        $post_data['total_amount'] = $price;
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = now();

        $post_data['success_url'] = $success;
        $post_data['fail_url'] = $fail;
        $post_data['cancel_url'] = $cancel;

		# OPTIONAL PARAMETERS
        $post_data['value_a'] = $plan_id . "|" . Auth::guard("subscriber")->id();
        $post_data['value_b'] = $request->type;
        $post_data['value_c'] = $request->qty;
        $post_data['value_d'] = $discount ? $discount->id : $discount;
        $direct_api_url = "https://sandbox.sslcommerz.com/gwprocess/v3/api.php";
        $handle = curl_init();
        curl_setopt($handle, CURLOPT_URL, $direct_api_url );
        curl_setopt($handle, CURLOPT_TIMEOUT, 30);
        curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($handle, CURLOPT_POST, 1 );
        curl_setopt($handle, CURLOPT_POSTFIELDS, $post_data);
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, FALSE); # KEEP IT FALSE IF YOU RUN FROM LOCAL PC
        $content = curl_exec($handle );
        $code = curl_getinfo($handle, CURLINFO_HTTP_CODE);
        if($code == 200 && !( curl_errno($handle))) {
            curl_close( $handle);
            $sslcommerzResponse = $content;
        } else {
            curl_close( $handle);
            echo "FAILED TO CONNECT WITH SSLCOMMERZ API";
            exit;
        }
		# PARSE THE JSON RESPONSE
        $sslcz = json_decode($sslcommerzResponse, true );
        if(isset($sslcz['GatewayPageURL']) && $sslcz['GatewayPageURL']!="" ) {
            echo "<meta http-equiv='refresh' content='0;url=".$sslcz['GatewayPageURL']."'>";
            exit;
        } else {
            echo "JSON Data parsing error!";
        }

    }

    public function success(Request $request)
    {
        $a_value = explode("|", $request->value_a);
    	$data = New BuyTicket();
        $ticket = Ticket::findorFail($a_value[0]);
    	$data->ticket_id = $ticket->id;
    	$data->subscriber_id = $a_value[1];

    	if ($request->value_b == 'vip') {
            $data->vip_qty = $request->value_c;
            $ticket->vip_qty = $ticket->vip_qty - $request->value_c;
	    	$data->vip_price = $request->amount;
            $data->sub_total_price = $request->value_c * $ticket->vip_price;
    	}elseif ($request->value_b == 'classic') {
	    	$data->classic_qty = $request->value_c;
            $ticket->classic_qty = $ticket->classic_qty - $request->value_c;
	    	$data->classic_price = $request->amount;
            $data->sub_total_price = $request->value_c * $ticket->classic_price;
    	}else{
	    	$data->normal_qty = $request->value_c;
	    	$data->normal_price = $request->amount;
            $ticket->normal_qty = $ticket->normal_qty - $request->value_c;
            $data->sub_total_price = $request->value_c * $ticket->normal_price;
        }
        
        $ticket->save();
    	
        $data->total_price = $request->amount;
        
        if($request->value_d != "0"){
            $data->discount_id = (int) $request->value_d;
        }
        $data->save();
        return redirect()->route("ticket")->withSuccess("Ticket Bought success. Please login and check Order History.");
    }

    public function cencel()
    {
    	return redirect()->route("ticket")->withInfo("Find another match to buy ticket.");
    }
































}

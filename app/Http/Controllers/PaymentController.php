<?php

namespace App\Http\Controllers;

use App\Discount;
use App\Ticket;
use Auth;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function ticketbuy(Request $request)
    {

        $ticket=Ticket::findorFail($request->id);
        if ($request->coupon) {
            $discount = Discount::where('match_id',$ticket->match->id)->first();
        }
        
        if ($request->type == 'vip') {
            $payable = $ticket->vip_price * $request->qty;
            if ($request->coupon) {
                if ($discount) {
                    if ($discount->name == $request->coupon) {
                        $price = $payable * $discount->percent/100;
                    }else{
                        return "Working Coupon";
                    }
                }
            }else{
                $price = $payable;
            }
        	
        }elseif ($request->type == 'classic') {
        	$price = $ticket->classic_price * $request->qty;
        }else{
        	$price = $ticket->normal_price * $request->qty;
        }

        $name=$ticket->match->name;
        $price=$price;
        $plan=$ticket->id;
        $success = route('success');
        $fail = route('pricing');
        $cancel = route('pricing');
        $post_data = array();
        //$post_data['store_id'] = "easyticketbdlive";
        $post_data['store_id'] = "easyt5d47c1bdea896";
        //$post_data['store_passwd'] = "5D6BAD90053ED33455";
        $post_data['store_passwd'] = "easyt5d47c1bdea896@ssl";
        $post_data['total_amount'] = $price;
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = now();
        $post_data['success_url'] = $success;
        $post_data['fail_url'] = $fail;
        $post_data['cancel_url'] = $cancel;
		# OPTIONAL PARAMETERS
        $post_data['value_a'] = $plan;
        $post_data['value_b'] = $request->type;
        $post_data['value_c'] = $request->qty;
        $post_data['value_d'] = 'Okay';
        //$direct_api_url = "https://securepay.sslcommerz.com/gwprocess/v4/api.php";
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
            # THERE ARE MANY WAYS TO REDIRECT - Javascript, Meta Tag or Php Header Redirect or Other
            # echo "<script>window.location.href = '". $sslcz['GatewayPageURL'] ."';</script>";
            echo "<meta http-equiv='refresh' content='0;url=".$sslcz['GatewayPageURL']."'>";
            # header("Location: ". $sslcz['GatewayPageURL']);
            exit;
        } else {
            echo "JSON Data parsing error!";
        }

    }

    public function success(Request $request)
    {
        dd('success');
    	$data = New BuyTicket;
    	$ticket = Ticket::findorFail($request->value_a);
    	$data->ticket_id = $request->value_a;
    	$data->xxxx = 0;

    	if ($request->value_b == 'vip') {
	    	$data->vip_qty = $request->value_c;
	    	$data->vip_price = $ticket->vip_price;
    	}elseif ($request->value_b == 'classic') {
	    	$data->classic_qty = $request->value_c;
	    	$data->classic_price = $ticket->classic_price;
    	}else{
	    	$data->normal_qty = $request->value_c;
	    	$data->normal_price = $ticket->normal_price;
    	}
    	
    	$data->total_price = $request->xxxx;
    	$data->xxxx = $request->xxxx;
    	$data->xxxx = $request->xxxx;
    	$data->xxxx = $request->xxxx;
    	$data->save();
    }

    public function pricing()
    {
    	dd('pricing');
    }
































}

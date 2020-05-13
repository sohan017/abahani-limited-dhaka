<?php 

namespace App\Helper;

use App\BuyTicket;
use Illuminate\Support\Facades\Auth;

class Misc 
{
    public static function is_login()
    {

        if(Auth::guard('bidder')->check()) return true;
        elseif(Auth::guard('physio')->check()) return true;
        elseif(Auth::guard('player')->check()) return true;
        elseif(Auth::guard('subscriber')->check()) return true;
        elseif(Auth::guard('trainee')->check()) return true;
        elseif(Auth::check()) return true;
        
        return false;
    }

    public static function totalTicketSold()
    {
         $total = array(
              "ticket" => 0,
              "price" => 0
         );

         foreach(BuyTicket::latest()->get() as $ticket){
              $total["ticket"] += $ticket->vip_qty;
              $total["ticket"] += $ticket->classic_qty;
              $total["ticket"] += $ticket->normal_qty;
              
              $total["price"] += $ticket->total_price;
         }
         return $total;
    }
}

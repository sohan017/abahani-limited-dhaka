<?php 

namespace App\Helper;

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
}

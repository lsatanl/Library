<?php
use App\Models\User;
(string)$s = User::onlyTrashed()->where('email',$_SESSION['valid'])->get();
if(strlen($s) !== 2 ){
    return [

        /*
        |--------------------------------------------------------------------------
        | Authentication Language Lines
        |--------------------------------------------------------------------------
        |
        | The following language lines are used during authentication for various
        | messages that we need to display to the user. You are free to modify
        | these language lines according to your application's requirements.
        |
        */

        'failed' => 'Your account has been suspended for some reason. Please contact admin for more information.',
        'password' => 'The provided password is incorrect.',
        'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',

    ];
}
else{
    return [

        /*
        |--------------------------------------------------------------------------
        | Authentication Language Lines
        |--------------------------------------------------------------------------
        |
        | The following language lines are used during authentication for various
        | messages that we need to display to the user. You are free to modify
        | these language lines according to your application's requirements.
        |
        */

        'failed' => 'These credentials do not match our records.',
        'password' => 'The provided password is incorrect.',
        'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',

    ];
}



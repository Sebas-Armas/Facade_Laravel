<?php

namespace App\Facades;

Class Student extends \Illuminate\Support\Facades\Facade
{
    public static function getFacadeAccessor(){
        return 'student';
    }
}

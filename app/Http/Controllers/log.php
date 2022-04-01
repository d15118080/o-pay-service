<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class Log extends Controller
{

    public function User($type,$message)
    {
        $now = date('Y-m-d');
        $log = new Logger('User');
        $log->pushHandler(new StreamHandler(storage_path('logs/user/'.$now.'.log'), Logger::INFO));
        $log->$type($message);
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MessageBird\Client;
use MessageBird\Objects\Message;
use Symfony\Component\VarDumper\VarDumper;

class post_sms extends Controller
{
    public function post_sms1($numm,$mesasge_)
    {
        /*require_once 'vendor/autoload.php';*/
        $messagebird = new  Client('81D75ruVyVABub4rpibpuSrR2');
        $message = new Message;
        $message->originator = $numm;
        $message->recipients = [ $numm ];
        $message->body = 'message:'.$mesasge_;
        $response = $messagebird->messages->create($message);
        var_dump($response);
        
    }
}

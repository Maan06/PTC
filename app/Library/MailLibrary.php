<?php

namespace App\Library;
use Mailjet\LaravelMailjet\Facades\Mailjet;
use \Mailjet\Resources;

trait MailLibrary
{
    public function sendMail($email, $subject, $message){
        $MJ_APIKEY_PUBLIC = 'd29008afe302175f89467330774e37e4';
        $MJ_APIKEY_PRIVATE = '230edd2b5b4c140cba3f0f829382e419';

        $mj = new \Mailjet\Client($MJ_APIKEY_PUBLIC, $MJ_APIKEY_PRIVATE,true,['version' => 'v3.1']);
        $emailData = [
                'Messages' => [
                    [
                        'From' => [
                            'Email' => 'info@pilaretradingcompany.com',
                            'Name' => 'Pilare Trading Company, India'
                        ],
                        'To' => [
                            [
                                'Email' => $email,
                            ]
                        ],
                        'Subject' => $subject,
                        'HTMLPart' => $message
                    ]
                ]
            ];

        $response = $mj->post(Resources::$Email, ['body' => $emailData]);
        dd($response);
        if ($response->success()) {
            return true;
        } else {
            return false;
        }
    }
}


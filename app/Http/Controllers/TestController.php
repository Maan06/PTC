<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Mailjet\Client;
use Mailjet\Resources;
use Illuminate\Http\Request;
use App\Models\Appliedcandidate;
use App\Library\Structure;

class TestController extends Controller
{
    use Structure;

    public function index()
    {  
        echo"mamta";exit;
        $mj = app()->make('mailjet');

        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => 'mamtakurahe@gmail.com',
                        'Name' => 'Mamta Maskare'
                    ],
                    'To' => [
                        [
                            'Email' => 'dileepkurahe@gmail.com',
                            'Name' => 'Dileep Kurahe'
                        ]
                    ],
                    'Subject' => 'Test Email',
                    'TextPart' => 'This is a test email from Mailjet.',
                    'HTMLPart' => '<h3>This is a test email from Mailjet.</h3>'
                ]
            ]
        ];

        $response = $mj->post(\Mailjet\Resources::$Email, ['body' => $body]);

        return $response->success();
        
        
    }



}
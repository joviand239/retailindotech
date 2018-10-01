<?php
namespace App\Service;

use Illuminate\Support\Facades\Mail;

class MailerService {


    public static function contact($data){
        $details = [
            'data' => @$data,
        ];

        $emailTo = getSettingAttribute('contactEmail');

        try {
            Mail::send('email.contact', $details,
                function ($message) use ($emailTo) {
                    $message
                        ->to($emailTo)
                        ->from(env('MAIL_FROM_ADDRESS'))
                        ->subject('[Retailindotech] Contact Form');
                });
        }catch(\Exception $msg){
            \Log::error($msg);
        }

    }
}

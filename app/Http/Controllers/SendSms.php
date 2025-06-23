<?php

namespace App\Http\Controllers;


class SendSms extends Controller
{
    public function send()
    {
        // Step 1: Initialize the library with your API key and secret
        $basic  = new \Vonage\Client\Credentials\Basic("b9b74c0a", "ROnCo8nXZWn6cOeY");
        $client = new \Vonage\Client($basic);

        // Step 2: Send the message
        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS("201066365380", "201066365380", "Hello from Vonage SMS API")
        );

        // Step 3: Get the response
        $message = $response->current();

        // Step 4: Handle the response
        if ($message->getStatus() == 0) {
            echo "The message was sent successfully\n";
        } else {
            echo "The message failed with status: " . $message->getStatus() . "\n";
        }
    }
}

<?php

/**
 * Show the profile for a given user.
 * THIS IS A STAND ALONE API TEMPORARLLY PUT HERE [can disregard this api]
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TmpController extends Controller
{
    public $request = [];

    public function __construct(Request $request)
    {
      $this->request = $request;
    }

    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function greet()
    {

        if (empty($this->request['conversation_id']) || empty($this->request['message'])) {
            return [
                'status' => false,
                'message' => "Invalid Format"
            ];
        } else {
            return [
                'status' => true,
                'conversation_id' => $this->request['conversation_id'],
                'message' => $this->determineReturn()
            ];
        }


    }

    public function determineReturn() {

        $message = preg_replace("/[^A-Za-z0-9 ]/", ' ', $this->request['message']);
        $message_arr = explode(" ", $message);

        $messages_data = [
            "goodbye,bye" => "Thank you, see you around.",
            "hello,hi" => "Welcome to StationFive.",
            
        ];

        foreach ($message_arr as $key => $word) {
            

            foreach ($messages_data as $context => $return_message) {

                $context_arr = explode(",",$context);
                if (in_array(strtolower(trim($word)), $context_arr)) {
                    return $return_message;
                }
            }

        }

    }
}
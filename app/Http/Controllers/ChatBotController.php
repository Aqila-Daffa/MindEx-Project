<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;

class ChatBotController extends Controller
{
    public function index(){
        return view('chatbot/chatbot');
    }

    public function handle()
    {
        $botman = app('botman');
        $botman->hears('{message}', function($botman, $message) {
        if ($message == 'list'){
           $this->questionList($botman);
         }else{
           $botman->reply("write 'list' if you want to see the tutorial list!");
         }
      });
      $botman->listen();
    }

      /**
       * Place your BotMan logic here.
      */

    public function questionList($botman)
    {
        $name = auth()->user()->username;
        $botman->ask('Hello '.$name.'!<br><br> The tutorial list:
        <br>1. Profile setting
        <br>2. Mental Health Test
        <br>3. Make Appointment for online consultation <br><br>Type the tutorial number, example "1", if you want to choose it!', function(Answer $answer) {

          if ($answer == '1'){
            $this->say("To set your profile, you can click at your username at the top right, and then you can check your profile and update it if you want to.");
          }
          
          elseif ($answer == '2'){
            $this->ask('The feature list for Mental Health Test:
              <br>1. Do mental health test
              <br>2. Check mental health status <br><br>Type the feature number, example "1", if you want to choose it!', function(Answer $answer) {
                if ($answer == '1'){
                  $this->say("You can go the mental health test feature at the home page, and you can do the test by filling up 42 questions of mental health test");
                }elseif ($answer == '2'){
                  $this->say("In mental health test feature, you can choose the mental health test history to check the records");
                }else{
                  $this->say("write the feature number to get to know more! example '1'");
                }
            });
          }
          
          elseif ($answer == '3'){
            $this->ask('The feature list for Make Appointment for online consultation:
              <br>1. Do appointment for online consultation
              <br>2. Check appointment status <br><br>Type the feature number, example "1", if you want to choose it!', function(Answer $answer) {
                if ($answer == '1'){
                  $this->say("You can go to online consultation feature at the home page, and you can choose make an appointment, but you need to fill up your profile first before book the appointment");
                }elseif ($answer == '2'){
                  $this->say("In online consultation feature, you can choose the appointment history to check the records of your appointment");
                }else{
                  $this->say("write the feature number to get to know more! example '1'");
                }
            });
          }
          
          else{
            $this->say("write the tutorial number to get to know more! example '1'");
          }
      });
    }

}

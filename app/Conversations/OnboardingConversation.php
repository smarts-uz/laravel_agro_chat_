<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;

class OnboardingConversation extends Conversation
{
   
    protected $name;

    protected $age;

    /**
     * Start the conversation.
     *
     * @return mixed
     */
    public function run()
    {
        $this->say('Hello');
        $this->ask('What is your name?', function($answer){
            $this->name = $answer->getText();
            $this->say('Nice,'.$this->name);
                $this->say('My name is BOT');
            $this->askAge();
        });
    }
        protected function askAge()
        {
            $this->ask('What is your age?', function($answer){
                $this->age = $answer->getText();
                $this->say('Your age: '.$this->age);
            });

        }


    }
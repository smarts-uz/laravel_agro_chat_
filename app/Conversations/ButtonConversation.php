<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;

class ButtonConversation extends Conversation
{
    /**
     * Start the conversation.
     *
     * @return mixed
     */
    public function run()
    {
        $question = Question::creat('Qaysi viloyattansiz?')
        ->addButtons([
            Button::creat('Toshken shahar')->value('Toshkent'),
            Button::creat('Toshkent viloyat')->value('Toshkent viloyat'),
            Button::creat('Samarqand')->value('Samarqand'),
        ]);

        $this->ask($question, function($answer){
            $this->say('You selected:'.$answer->getValue());
        });
    }
}

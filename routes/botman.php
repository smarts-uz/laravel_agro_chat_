<?php
use App\Http\Controllers\BotManController;
use App\Conversations\ButtonConversation;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;

$botman = resolve('botman');

$botman->hears('/start|', function ($bot) {
    $bot->startConversation(new ButtonConversation());
});





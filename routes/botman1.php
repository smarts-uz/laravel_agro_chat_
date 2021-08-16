<?php
use App\Http\Controllers\BotManController;
use BotMan\BotMan\Messages\Attachments\Audio;
use BotMan\BotMan\Messages\Attachments\Image;
use BotMan\BotMan\Messages\Attachments\Video;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;
use App\Conversations\OnboardingConversation;  
use App\Conversations\ButtonConversation;


$botman = resolve('botman');

// $botman->hears('/start', function($bot){
     
// //     $message = OutgoingMessage::create('')->withAttachment(
// //         new Image('https://media.giphy.com/media/KiMBUPZUhUg4HRV6PW/giphy.gif')
// //     );
// //    $bot->reply($message);
// //     $bot->reply('I\'m there');
// //     $bot->reply('What is your name?');
//      $bot->startConversation( new OnboardingConversation );
//  });    

$botman->hears('Start conversation', BotManController::class.'@startConversation');

$botman->hears('/help', function($bot){
    $bot->reply('');
})->skipsConversation();
$botman->hears('/back', function($bot) {
    $bot->typesAndWaits(0);
        $bot->reply('');
        $keyboard = [
            ['📩Хабар юбориш.'],
        ];
        $bot->typesAndWaits(0);
    
        $bot->reply("Бўлимни танланг!", ['reply_markup' => json_encode([
            'keyboard' => $keyboard,
            'one_time_keyboard' => true,
            'resize_keyboard' => true
        ])]);
 });//->stopsConversation();
$botman->hears('/bot', ButtonConversation::class.'@startConversation');

$botman->hears('information', function($bot){
    $user = $bot->getUser();

    $bot->reply('ID:'.$user->getId());
    $bot->reply('Firstname:'.$user->getFirstName());
    $bot->reply('Lastname:'.$user->getLastName());
    $bot->reply('Username:'.$user->getUserName());
    $bot->reply('Info:'.print_r($user->getInfo(),true));
});
   
// Bot boshlanishi
$botman->hears('/start', function($bot){
    $keyboard = [
        ['Ўзбекча'],
        ['На русском'],

    ];
    $bot->typesAndWaits(0);
    $bot->reply("Выберите язык|Tilni tanlang:", ['reply_markup' => json_encode([
        'keyboard' => $keyboard,
        'one_time_keyboard' => true,
        'resize_keyboard' => true
    ])]);
    
        
    });



$botman->hears('На русском', function($bot){
        $keyboard = [
            ['📩Хабар юбориш'],
    
        ];
        $bot->typesAndWaits(0);
        $bot->reply("🗣 Хурматли фуқоролар Қишлоқ хўжалиги вазирлиги тизимида коррупцияга дуч келсангиз, бизга хабар беринг.

        🤳Қишлоқ хўжалиги вазирлиги тизимидаги, жумладан, қишлоқ хўжалиги бошқармалари ва бўлимлари,вазирлик тизимидаги корхоналар, ташкилотлар ва таълим муассасаларидаги коррупция ҳолатлари ҳақида маълумотларни телеграмдаги @UzAgroAnticorruptionBot ботига ва  +998 71 206-70-65 вазирликнинг ишонч телефонига хабар қилиш орқали юборишингиз мумкин.
        
        ‼️Юборилган хабарлар белгиланган тартибда кўриб чиқилади ҳамда мурожаат қилувчининг шахси сир сақланиши кафолатланади.", ['reply_markup' => json_encode([
            'keyboard' => $keyboard,
            'one_time_keyboard' => true,
            'resize_keyboard' => true
        ])]);
     });
$botman->hears('.*📩Хабар юбориш.*', function($bot){
        $bot->typesAndWaits(0);
        $bot->reply('');
        if ('notog\'ri') {
            # code...
        } else {
            # code...
        }
        
        $keyboard = [
            ['Вилоятлар'],
            ['Тузилмалар'],
            ['Universitetlar'],
        ];
        $bot->typesAndWaits(0);
    
        $bot->reply("Выберите раздел!", ['reply_markup' => json_encode([
            'keyboard' => $keyboard,
            'one_time_keyboard' => true,
            'resize_keyboard' => true
        ])]);
        // $bot->reply("hello ", ['reply_markup' => json_encode([
        //     'keyboard' => $keyboard,
        //     'one_time_keyboard' => true,
        //     'resize_keyboard' => true
        // ])]);
    });
    
    $botman->hears('Universitetlar', function($bot){
        $bot->typesAndWaits(0);
        $bot->reply('');
        $keyboard = [
            ['Вилоятлар'],
            ['Тузилмалар'],
            ['Universitetlar'],
        ];
        $bot->typesAndWaits(0);
    
        $bot->reply("Выберите раздел! ", ['reply_markup' => json_encode([
            'keyboard' => $keyboard,
            'one_time_keyboard' => true,
            'resize_keyboard' => true
        ])]);
    });
    
    $botman->hears('Вилоятлар', function($bot){
        $bot->typesAndWaits(0);
        $bot->reply('');
        $keyboard = [
            ['Андижон вилояти'],
            ['Бухоро вилояти'],
            ['Жиззах вилояти'],
            ['Қашқадарё вилояти'],
            ['Қорақалпоғистон Республикаси'],
            ['Навоий вилояти'],
            ['Наманган вилояти'],
            ['Самарқанд вилояти'],
            ['Сирдарё вилояти'],
            ['Сурхондарё вилояти'],
            ['Тошкент вилояти'],
            ['Фаргона вилояти'],
            ['Хоразм вилояти'],
        ];
        $bot->typesAndWaits(0);
    
        $bot->reply("Выберите желаемый регион!", ['reply_markup' => json_encode([
            'keyboard' => $keyboard,
            'one_time_keyboard' => true,
            'resize_keyboard' => true
        ])]);
    });

$botman->hears('Тузилмалар', function($bot){
        $bot->typesAndWaits(0);
        $bot->reply('');
        $keyboard = [
            ['Ўзбекистон Республикаси қишлоқ хўжалиги вазирлиги'],
            ['Қорақалпоғистон Республикаси қишлоқ хўжалиги вазирлиги'],
            ['Андижон вилояти қишлоқ хўжалиги бошқармаси'],
            ['Фарғона вилояти қишлоқ хўжалиги бошқармаси'],
            ['Жиззах вилояти қишлоқ хўжалиги бошқармаси'],
            ['Хоразм вилояти қишлоқ хўжалиги бошқармаси'],
            ['Наманган вилояти қишлоқ хўжалиги бошқармаси'],
            ['Навоий вилояти қишлоқ хўжалиги бошқармаси'],
            ['Қашқадарё вилояти қишлоқ хўжалиги бошқармаси'],
            ['Самарқанд вилояти қишлоқ хўжалиги бошқармаси'],
            ['Сирдарё вилояти қишлоқ хўжалиги бошқармаси'],
            ['Сурхондарё вилояти қишлоқ хўжалиги бошқармаси'],
            ['Тошкент вилояти қишлоқ хўжалиги бошқармаси'],
            ['"Ўздаверлойиҳа" илмий-лойиҳалаш институти'],
            ['"Академик М.Мирзаев номидаги боғдорчилик, узумчилик 
            ва виночилик илмий-тадқиқот институти"'],
            ['Боғдорчилик ва иссиқхона хўжалигини ривожлантириш агентлиги'],
            ['Қишлоқ хўжалигида билим ва инновациялар миллий маркази'],
            ['Уруғчиликни ривожлантириш маркази'],
            ['Қишлоқ хўжалиги экинлари навларини синаш маркази'],
            ['Тупроқ таркиби ва репозиторийси, сифати таҳлил маркази'],
            ['Қишлоқ хўжалиги техникаси ва технологияларини сертификатлаш ва синаш давлат маркази'],
            ['Қишлоқ хўжалигини стандартлаштириш маркази'],
            ['Кимёлаштириш ва ўсимликларни ҳимоя қилиш воситаларини синовдан ўтказиш ва рўйхатга олиш бўйича давлат комиссияси Ишчи органи'],
            ['Тошкент давлат аграр университети'],
            ['Андижон қишлоқ хўжалиги ва агротехнологиялар институти'],
            ['Маъмурий-хўжалик хизмати муассасаси'],
            ['Агросаноатни рақамлаштириш маркази'],
        ];
        $bot->typesAndWaits(0);
    
        $bot->reply("Выберите желаемую структуру!", ['reply_markup' => json_encode([
            'keyboard' => $keyboard,
            'one_time_keyboard' => true,
            'resize_keyboard' => true
        ])]);
    });
    $botman->hears('Агросаноатни рақамлаштириш маркази|Маъмурий-хўжалик хизмати муассасаси|Андижон қишлоқ хўжалиги ва агротехнологиялар институти|Тошкент давлат аграр университети|Кимёлаштириш ва ўсимликларни ҳимоя қилиш воситаларини синовдан ўтказиш ва рўйхатга олиш бўйича давлат комиссияси Ишчи органи|Қишлоқ хўжалигини стандартлаштириш маркази|Қишлоқ хўжалиги техникаси ва технологияларини сертификатлаш ва синаш давлат маркази|Тупроқ таркиби ва репозиторийси, сифати таҳлил маркази|Қишлоқ хўжалиги экинлари навларини синаш маркази|Уруғчиликни ривожлантириш маркази|Қишлоқ хўжалигида билим ва инновациялар миллий маркази|Боғдорчилик ва иссиқхона хўжалигини ривожлантириш агентлиги|"Академик М.Мирзаев номидаги боғдорчилик, узумчилик 
    ва виночилик илмий-тадқиқот институти"|"Ўздаверлойиҳа" илмий-лойиҳалаш институти|Тошкент вилояти қишлоқ хўжалиги бошқармаси|Сурхондарё вилояти қишлоқ хўжалиги бошқармаси|Сирдарё вилояти қишлоқ хўжалиги бошқармаси|Самарқанд вилояти қишлоқ хўжалиги бошқармаси|Қашқадарё вилояти қишлоқ хўжалиги бошқармаси|Навоий вилояти қишлоқ хўжалиги бошқармаси|Наманган вилояти қишлоқ хўжалиги бошқармаси|Хоразм вилояти қишлоқ хўжалиги бошқармаси|Жиззах вилояти қишлоқ хўжалиги бошқармаси|Фарғона вилояти қишлоқ хўжалиги бошқармаси|Андижон вилояти қишлоқ хўжалиги бошқармаси|Ўзбекистон Республикаси қишлоқ хўжалиги вазирлиги|Қорақалпоғистон Республикаси қишлоқ хўжалиги вазирлиги', function($bot){
        $bot->typesAndWaits(0);
        $bot->reply('');
        $keyboard = [
            ['Якунлаш'],
        ];
        $bot->typesAndWaits(0);
    
        $bot->reply("Если у вас есть какая-либо информация об этой структуре или разделе (видео /
        аудио / фото / и т. д.), Вы можете прислать её нам!", ['reply_markup' => json_encode([
            'keyboard' => $keyboard,
            'one_time_keyboard' => true,
            'resize_keyboard' => true
        ])]);
    });
    $botman->hears('Хоразм вилояти|Фаргона вилояти|Тошкент вилояти|Сурхондарё вилоятиСирдарё вилояти|Самарқанд вилояти|Наманган вилояти|Андижон вилояти|Бухоро вилояти|Жиззах вилояти|Қашқадарё вилояти|Қорақалпоғистон Республикаси|Навоий вилояти', function($bot){
        $bot->typesAndWaits(0);
        $bot->reply('');
        $keyboard = [
            ['Озиқ-овқат хавсизлиги бўйича'],
            ['Агротехник тадбирларни ўз вақтида ўтказмаслик бўйича'],
            ['Минерал ва органик ўғитлардан фойдаланиш бўйича'],
            ['Қишлоқ хўжалигига мўлжалланган ерлардан фойдаланиш бўйича'],
            ['Мехнат интизоми бўйича'],
            ['Молия-ҳўжалик фаолияти бўйича'],
            ['Давлат харидлари бўйича (товарлар, ишлар ва хизматларни харид қилиш)'],
            ['Мурожатларни кўриб чиқиш ва ижро интизоми бўйича'],
            ['Бошка йуналишларда'],
        ];
        $bot->typesAndWaits(0);
    
        $bot->reply("Выбирайте желаемое направление!", ['reply_markup' => json_encode([
            'keyboard' => $keyboard,
            'one_time_keyboard' => true,
            'resize_keyboard' => true
        ])]);
    });


    $botman->hears('Озиқ-овқат хавсизлиги бўйича', function($bot){
        $bot->typesAndWaits(0);
        $bot->reply('');
        $keyboard = [
            ['Якунлаш'],
        ];
        $bot->typesAndWaits(0);
    
        $bot->reply("Если у вас есть какая-либо информация об этой структуре или разделе (видео /
        аудио / фото / и т. д.), Вы можете прислать её нам!", ['reply_markup' => json_encode([
            'keyboard' => $keyboard,
            'one_time_keyboard' => true,
            'resize_keyboard' => true
        ])]);
    });
    
    $botman->hears('Агротехник тадбирларни ўз вақтида ўтказмаслик бўйича', function($bot){
        $bot->typesAndWaits(0);
        $bot->reply('');
        $keyboard = [
            ['Якунлаш'],
        ];
        $bot->typesAndWaits(0);
    
        $bot->reply("Если у вас есть какая-либо информация об этой структуре или разделе (видео /
        аудио / фото / и т. д.), Вы можете прислать её нам!", ['reply_markup' => json_encode([
            'keyboard' => $keyboard,
            'one_time_keyboard' => true,
            'resize_keyboard' => true
        ])]);
    });

    $botman->hears('Минерал ва органик ўғитлардан фойдаланиш бўйича', function($bot){
        $bot->typesAndWaits(0);
        $bot->reply('');
        $keyboard = [
            ['Якунлаш'],
        ];
        $bot->typesAndWaits(0);
    
        $bot->reply("Если у вас есть какая-либо информация об этой структуре или разделе (видео /
        аудио / фото / и т. д.), Вы можете прислать её нам!", ['reply_markup' => json_encode([
            'keyboard' => $keyboard,
            'one_time_keyboard' => true,
            'resize_keyboard' => true
        ])]);
    });

    $botman->hears('Қишлоқ хўжалигига мўлжалланган ерлардан фойдаланиш бўйича', function($bot){
        $bot->typesAndWaits(0);
        $bot->reply('');
        $keyboard = [
            ['Якунлаш'],
        ];
        $bot->typesAndWaits(0);
    
        $bot->reply("Если у вас есть какая-либо информация об этой структуре или разделе (видео /
        аудио / фото / и т. д.), Вы можете прислать её нам!", ['reply_markup' => json_encode([
            'keyboard' => $keyboard,
            'one_time_keyboard' => true,
            'resize_keyboard' => true
        ])]);
    });

    $botman->hears('Мехнат интизоми бўйича', function($bot){
        $bot->typesAndWaits(0);
        $bot->reply('');
        $keyboard = [
            ['Якунлаш'],
        ];
        $bot->typesAndWaits(0);
    
        $bot->reply("Если у вас есть какая-либо информация об этой структуре или разделе (видео /
        аудио / фото / и т. д.), Вы можете прислать её нам!", ['reply_markup' => json_encode([
            'keyboard' => $keyboard,
            'one_time_keyboard' => true,
            'resize_keyboard' => true
        ])]);
    });

    $botman->hears('Молия-ҳўжалик фаолияти бўйича', function($bot){
        $bot->typesAndWaits(0);
        $bot->reply('');
        $keyboard = [
            ['Якунлаш'],
        ];
        $bot->typesAndWaits(0);
    
        $bot->reply("Если у вас есть какая-либо информация об этой структуре или разделе (видео /
        аудио / фото / и т. д.), Вы можете прислать её нам!", ['reply_markup' => json_encode([
            'keyboard' => $keyboard,
            'one_time_keyboard' => true,
            'resize_keyboard' => true
        ])]);
    });

    $botman->hears('Давлат харидлари бўйича (товарлар, ишлар ва хизматларни харид қилиш)', function($bot){
        $bot->typesAndWaits(0);
        $bot->reply('');
        $keyboard = [
            ['Якунлаш'],
        ];
        $bot->typesAndWaits(0);
    
        $bot->reply("Если у вас есть какая-либо информация об этой структуре или разделе (видео /
        аудио / фото / и т. д.), Вы можете прислать её нам!", ['reply_markup' => json_encode([
            'keyboard' => $keyboard,
            'one_time_keyboard' => true,
            'resize_keyboard' => true
        ])]);
    });

    $botman->hears('Мурожатларни кўриб чиқиш ва ижро интизоми бўйича', function($bot){
        $bot->typesAndWaits(0);
        $bot->reply('');
        $keyboard = [
            ['Якунлаш'],
        ];
        $bot->typesAndWaits(0);
    
        $bot->reply("Если у вас есть какая-либо информация об этой структуре или разделе (видео /
        аудио / фото / и т. д.), Вы можете прислать её нам!", ['reply_markup' => json_encode([
            'keyboard' => $keyboard,
            'one_time_keyboard' => true,
            'resize_keyboard' => true
        ])]);
    });

    $botman->hears('Бошка йуналишларда', function($bot){
        $bot->typesAndWaits(0);
        $bot->reply('');
        $keyboard = [
            ['Якунлаш'],
        ];
        $bot->typesAndWaits(0);
    
        $bot->reply("Если у вас есть какая-либо информация об этой структуре или разделе (видео /
        аудио / фото / и т. д.), Вы можете прислать её нам!", ['reply_markup' => json_encode([
            'keyboard' => $keyboard,
            'one_time_keyboard' => true,
            'resize_keyboard' => true
        ])]);
    });    

    $botman->hears('Якунлаш', function($bot){
        $bot->typesAndWaits(0);
        $bot->reply('');
        $keyboard = [
            ['📩Хабар юбориш.'],
        ];
        $bot->typesAndWaits(0);
    
        $bot->reply("✅Ваше сообщение будет обработано в установленном порядке. Спасибо за
информацию", ['reply_markup' => json_encode([
            'keyboard' => $keyboard,
            'one_time_keyboard' => true,
            'resize_keyboard' => true
        ])]);
    });

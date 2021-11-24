<?php

include __DIR__.'/vendor/autoload.php';

use Discord\Discord;

$discord = new Discord([
    'token' => 'OTEyMjkwNTY2MzkyMzg1NTY2.YZtyzA.7D4l4Fgpbpt-P_SM0daNMC9mHgI',
]);

$discord->on('ready', function ($discord) {
    echo "Bot is ready!", PHP_EOL;

    // Listen for messages.
    $discord->on('message', function ($message, $discord) {
        echo "{$message->author->username}: {$message->content}",PHP_EOL;
    });
});

$discord->run();
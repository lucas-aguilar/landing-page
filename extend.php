<?php

use Flarum\Extend;
use Kyrne\Landing\Listener\LoadSettingsFromDatabase;
use Illuminate\Contracts\Events\Dispatcher;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__.'/js/dist/forum.js'),
    (new Extend\Frontend('admin'))
        ->js(__DIR__.'/js/dist/admin.js'),
    new Extend\Locales(__DIR__.'/locale'),
    function (Dispatcher $events) {
        $events->subscribe(LoadSettingsFromDatabase::class);
    },
];

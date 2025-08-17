<?php

use Illuminate\Support\Facades\Log;


use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/Abyspulsebot', function () {
    // Process the post request here
    $data = request()->all();
    // You can access the Telegram bot token and name from the .env file
    $botToken = env('Telegram_BOT_TOKEN1');
    $botName = env('Telegram_BOT_NAME1');
    // Do something with the data and the bot credentials
    Log::info("Received message for {$botName}: " . json_encode($data));
})->withoutMiddleware([VerifyCsrfToken::class]);
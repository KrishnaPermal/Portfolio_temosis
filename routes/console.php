<?php

use Themosis\Core\HelloDolly;
use Themosis\Core\Support\Facades\Console;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Console::command('hello', function () {
    $this->comment(HelloDolly::lyric());
})->describe('Display a lyric from the Hello, Dolly song sung by Louis Armstrong');

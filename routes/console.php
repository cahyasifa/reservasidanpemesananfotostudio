<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $quote = Inspiring::quote();
    $this->info("✨ " . $quote);
})->describe('Display an inspiring quote');

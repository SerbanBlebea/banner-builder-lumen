<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| HTML5 Banner  Routes
|--------------------------------------------------------------------------
*/
$app->get('/banner-builder', 'Html5Controller@admin');
$app->get('/{product}/{size}/{lang}', 'Html5Controller@index');

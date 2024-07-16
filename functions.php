<?php

use Kdx\Theme;

require __DIR__ . '/vendor/autoload.php';

$kdx_theme = Theme::init();

$kdx_theme->hooks();

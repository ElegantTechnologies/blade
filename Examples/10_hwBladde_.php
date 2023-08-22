<?php
declare(strict_types=1);

namespace Examples;
require_once ('../vendor/autoload.php');

use Jenssegers\Blade\Blade;

$blade = new Blade('blades', './../tests/cache');

print $blade->make('10')->render();

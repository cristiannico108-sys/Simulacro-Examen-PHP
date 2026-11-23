<?php
declare(strict_types=1);

use Core\Router;

define('BASE_PATH', dirname(__DIR__));
define('BASE_URL', '/');

require BASE_PATH . '/autoloader.php';
require BASE_PATH . '/config/routes.php';

Router::dispatch();

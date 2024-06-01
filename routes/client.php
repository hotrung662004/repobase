<?php

use Asus\RepoBase\Controllers\Client\HomeController;

$router->get( '/', HomeController::class . '@index');
<?php

declare(strict_types=1);

use App\Database;
use App\ProductController;
use App\ProductGateway;

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__ ));
$dotenv->load();

header('Content-Type: application/json');

set_error_handler('\App\ErrorHandler::handleError');
set_exception_handler('\App\ErrorHandler::handleException');

$parts = explode('/', $_SERVER['REQUEST_URI']);

if ($parts[1] !== 'products') {
    http_response_code(404);
    exit;
}

$id = $parts[2] ?? null;

$db = new Database();

$gateway = new ProductGateway($db);

$controller = new ProductController($gateway);

$controller->processRequest($_SERVER['REQUEST_METHOD'], $id);
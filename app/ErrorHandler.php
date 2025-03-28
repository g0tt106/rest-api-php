<?php

declare(strict_types=1);

namespace App;

use ErrorException;

class ErrorHandler
{
    public static function handleException(\Throwable $exception): void
    {
        http_response_code(500);

        echo json_encode([
        'message' => $exception->getMessage(),
        'code' => $exception->getCode(),
        'file' => $exception->getFile(),
        'line' => $exception->getLine()
        ]);
    }

    public static function handleError(
        int $errno,
        string $errstr,
        string $errfile,
    int $errline,
    ): bool {
        throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
    }
}
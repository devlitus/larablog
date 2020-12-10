<?php

namespace App\Exceptions;

use App\Traits\ApiResponse;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    use ApiResponse;

    public function report(Throwable  $exception)
    {
        parent::report($exception);
    }
    public function render($request, Throwable $e)
    {
        if(env('APP_ENV') == 'local') {
            return parent::render($request, $e);
        }
        if ($e instanceof NotFoundHttpException) {
            return $this->errorResponse("Página no encontrada", $code = 404, $msj = "Error");
        }
        if ($e instanceof ModelNotFoundException) {
            return $this->errorResponse("Recurso no encontrada", $code = 404, $msj = "Error");
        }
        return parent::render($request, $e);
    }
}

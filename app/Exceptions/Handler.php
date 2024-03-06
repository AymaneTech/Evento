<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
//    public function report(Throwable $exception)
//    {
//        if ($exception instanceof ModelNotFoundException) {
//            Log::error("Model not found: " . $exception->getMessage());
//        } elseif ($exception instanceof QueryException) {
//            Log::error("Query exception: " . $exception->getMessage());
//        } else {
//            Log::error("Exception: " . $exception->getMessage());
//        }
//
//        parent::report($exception);
//    }
//
//    public function render($request, Throwable $exception)
//    {
//        if ($exception instanceof ModelNotFoundException) {
//            return back()->with("error", "Category not found");
//        } elseif ($exception instanceof QueryException) {
//            return back()->with("error", "Error deleting category");
//        } else {
//            return back()->with("error", "Unexpected error occurred");
//        }
//
//        return parent::render($request, $exception);
//    }
}

<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Exceptions\InvalidEntrySlugException;
use Illuminate\Http\Request;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
	)
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->render(function (InvalidEntrySlugException $e, Request $request) {
			return $e->render() /*redirect('/')*/;
		});
			
		/*if ($exceptions instanceof InvalidEntrySlugException) {
			return redirect('/');
		}*/
    })->create();

	

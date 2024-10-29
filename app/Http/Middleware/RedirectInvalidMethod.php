<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectInvalidMethod
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): Response
    {
        $route = $request->route();
        $supportedMethods = $route->methods();

        if (!in_array($request->method(), $supportedMethods)) {
            if ($route->getPrefix() === 'admin') {
                return redirect()->route('admin.login');
            } else {
                return redirect()->route('account.login');
            }
        }

        return $next($request);
    }
}
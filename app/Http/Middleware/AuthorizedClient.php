<?php

namespace App\Http\Middleware;

use App\Client;
use App\Http\Controllers\Api\ApiResponseTrait;
use Closure;

class AuthorizedClient
{
    use ApiResponseTrait;

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $token = request()->header('x-api-key');
        $client = Client::where('api_token', $token)->first();

        if ($client) {
            request()->client = $client;

            return $next($request);
        }

        return $this->ApiResponse(false, [__('site.select_address')], __('site.select_address'), [], 401);
    }
}

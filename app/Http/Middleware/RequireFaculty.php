<?php

namespace App\Http\Middleware;

use App\Models\Faculty;
use Closure;
use Illuminate\Http\Request;

class RequireFaculty
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $khoa_param = $request->route('khoa');
        $khoa = Faculty::where(['slug' => $khoa_param])->first();

        abort_if(!$khoa, 404);

        $request->route()->setParameter('khoa', $khoa);

        return $next($request);
    }
}

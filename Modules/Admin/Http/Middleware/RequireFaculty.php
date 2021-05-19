<?php

namespace Modules\Admin\Http\Middleware;

use App\Models\Faculty;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $auth_user = Auth::user();

        if (!$auth_user['isAdmin']) abort_if($auth_user['faculty_id'] != $khoa['id'], 403);
        else {
            $request->route()->setParameter('faculty_list', Faculty::where([['id', '!=', $khoa['id']]])->get());
        }

        $request->route()->setParameter('khoa', $khoa);

        return $next($request);
    }
}

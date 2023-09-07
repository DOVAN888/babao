<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // return $next($request);homurl =
        $homurl =route('home');
        return redirect($homurl);
        //cong thuc  redirect (đường dẫn trả về);
        //Chunge ta cung co th redirect ve trang trước như sau:
        //return redirect()->back();
        //Ngoài ra, nếu trang trc đó chúng ta có post gì và ko muốn mất các info đã nhập, ta sẽ sử dụng ->withInput()

         //return redirect()->back()->withInput();
    }
}

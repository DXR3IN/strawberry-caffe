<?php

namespace App\Http\Middleware;

use App\Models\CustomerTable;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Customer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $mejaTerpilih = CustomerTable::where('nama_customer', auth()->user()->name)->first();

        if (!$mejaTerpilih) {
            return redirect('/pilih-meja')->with('error', 'Anda harus memilih meja terlebih dahulu.');
        }

        return $next($request);
    }
}

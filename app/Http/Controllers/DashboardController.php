<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perjalanan;

class DashboardController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        // $data = Perjalanan::all();

        return view('pages.dashboard');

        // $data = Perjalanan::all();

        // return view('pages.catatanPerjalanan', ['data' => $data]);

    }

    // public function cariPerjalanan(Request $request){
    //     $cari = $request->cari;
    //     $data = User::join('Perjalanan', 'Perjalanan.id', '=' 'users.id')
    //     ->orWhere(function ($query) use($cari) {
    //         $query->where('users.name', auth()->user()->name)
    //                 ->where('Perjalanan.nama' ,$cari);
    //     })
    //     ->get(['users.name', ,'Perjalanan.*']);
    // if ($data) {
    //     return view('pages.dashboard',['data'=>$data]);
    // }else{
    //     abort(404);
    // }
    //     dd(request('cari'));
    // }
}

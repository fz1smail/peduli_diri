<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Livewire\Admin\AdminComponent;
use App\Models\Perjalanan;
use Livewire\WithFileUploads;
use App\Models\User;
use Dflydev\DotAccessData\Data;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;

class perjalananController extends Controller
{
    
    public $sortColumnName = 'created_at';

    public $sortDirection = 'desc';

    public function catatanPerjalanan(Request $request){

        $search= $request->query('search');

        if(!empty($search)){
            $data = Perjalanan::sortable()
            ->where('perjalanans.lokasi', 'like', '%'.$search.'%')
            ->orWhere('perjalanans.tanggal', 'like', '%'.$search.'%')
            ->orWhere('perjalanans.lokasi', 'like', '%'.$search.'%')
            ->orWhere('perjalanans.suhu', 'like', '%'.$search.'%')
            ->paginate(5)
            ;
        }else{
            $data = Perjalanan::sortable()
            ->paginate(5);
        }

        // $data = Perjalanan::sortable()
        //         ->paginate(5)->fragment('tanggal');

        return view('pages.catatanPerjalanan', ['data' => $data, 'search'=> $search]);
    }

    public function sortBy($columnName)
    {
        if ($this->sortColumnName === $columnName) {
            $this->sortDirection = $this->swapSortDirection();
        } else {
            $this->sortDirection = 'asc';
        }

        $this->sortColumnName = $columnName;
    }

    public function swapSortDirection()
    {
        return $this->sortDirection === 'asc' ? 'desc' : 'asc';
    }

    
    public function simpanPerjalanan(Request $request){

        $data = [
            'user_id'=>$request->user_id,
            'tanggal' =>$request->tanggal,
            'waktu' =>$request->waktu,
            'lokasi' =>$request->lokasi,
            'suhu' =>$request->suhu,
            // 'hobi' =>$request->hobi
        ];

        // dd($data);

        perjalanan::create($data);

        return redirect('/catatanPerjalanan')->with('message', 'Penyimpanan Berhasil');
    }

    public function edit($user_id){

        $prjln = Perjalanan::findorfail($user_id);
        return view('pages.editData', compact('prjln'));
    }


    // public function cariperjalanan(Request $request)
    // {
    //     if(!empty($request->cari)){
    //         $cari = $request->cari;
    //         $data =
    //         User::join('perjalanan', 'perjalanan.user_id', '=', 'users.id')
    //         ->where(function($query) use($cari){
    //             $query->where('users.name', auth()->user()->name)
    //             ->where('perjalanan.ttl', 'like', '%'.$cari.'%');
    //         })->get(['usere.name', 'perjalanan.*']);
    //                     if($data){
    //                         return view('layouts.tableperjalanan', ['data' => $data]);
    //                     }
    //                     abort(404);
    //     }

    // }

    // public function urutperjalanan(Request $request)
    // {
    //     $orderBy = $request->orderBy;
    //     $sortBy = $request->sortBy;

    //     if(auth()->user()) {
    //         $data = DB::table('perjalanans')
    //             ->join('users', 'users.id', '=', 'perjalanans.user_id')
    //             ->select('perjalanans.tanggal', 'perjalanans.waktu', 'perjalanans.lokasi', 'perjalanans.suhu',)
    //             ->where('users.id', '=', auth()->user()->id)
    //             ->orderBy('perjalanans.' . $orderBy, $sortBy)
    //             ->get();

    //         return view('pages.catatanPerjalanan', ['data' => $data]);
    //     }

    //     $data = Perjalanan::all();

    //     return view('pages.catatanPerjalanan', ['data' => $data]);
    // }

    public function carPerjalanan(Request $request)
    {
        $search = Perjalanan::where('lokasi', 'like', "%".$request->search."%")->paginate(5);
        $search = Perjalanan::where('tanggal', 'like', "%".$request->search."%")->paginate(5);
        $search = Perjalanan::where('suhu', 'like', "%".$request->search."%")->paginate(5);
        $search = Perjalanan::where('waktu', 'like', "%".$request->search."%")->paginate(5);
        return view('pages.catatanPerjalanan', ['perjalanan'=>$search]);
    }

    // public function cariPerjalanan(Request $request)
    // {
    //     $data = Perjalanan::where([
    //         ['lokasi'. '!=', Null],
    //         [function ($query) use ($request) {
    //             if (($term = $request->term)) {
    //                 $query->orWhere('lokasi', 'LIKE', '%' . $term . "%")->get(); 
    //             }
    //         }]

    //     ])
    //         ->orderBy("id", "desc")
    //         ->paginate(10);

    //         return view('pages.catatanPerjalanan', compact('perjalanan'))
    //             ->with('i', (request()->input('page', 1) - 1 ) * 5);
    // }



}

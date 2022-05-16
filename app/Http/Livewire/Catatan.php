<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Perjalanan;
use Illuminate\Http\Request;

class Catatan extends Component
{
    public $sortColumnName = 'created_at';

    public $sortDirection = 'desc';

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

    public function catatanPerjalanan(){
        $data = Perjalanan::sortable()
                ->paginate(5);

        return view('pages.tablePerjalanan', ['data' => $data]);
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

}

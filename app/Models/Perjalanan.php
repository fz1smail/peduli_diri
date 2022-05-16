<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Perjalanan extends Model
{
    use HasFactory;
    use Sortable;

    protected $table = 'perjalanans';
    protected $fillable = [
        'user_id',
        'tanggal',
        'waktu',
        'lokasi',
        'suhu',
        
    ];

    public $sortable = [
        'user_id',
        'tanggal',
        'waktu',
        'lokasi',
        'suhu',
    ];

    protected $primaryKey = 'user_id';

    // perjalanan belongs to user
    // public function user()
    // {
    //     return $this->belongsTo(Perjlanan::class);
    // }
    
    // protected $guarded =[];

}

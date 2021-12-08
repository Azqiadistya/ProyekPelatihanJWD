<?php

namespace App;
use Illuminate\Database\Eloquent\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class siswa extends Model
{
    use SoftDeletes;

    protected $table = 'siswa';

    protected $fillable = [
        'nim',
        'nama',
        'kelas'
    ];
    protected $hidden;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_komentar extends Model
{
    use HasFactory;
    protected $table="tb_komentars";
    function status(){
        return $this->belongsTo(tb_status::class, 'id_status', 'id');
    }
}

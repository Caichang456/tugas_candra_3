<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_status extends Model
{
    use HasFactory;
    protected $table="tb_statuses";


    public function komentar(){
        return $this->hasMany(tb_komentar::class, 'id_status', 'id');
    }
}

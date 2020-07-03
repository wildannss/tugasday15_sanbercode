<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = 'table_pertanyaan';

    protected $fillable = ['judul', 'tanggal_buat', 'tanggal_perbarui', 'user_id'];
}

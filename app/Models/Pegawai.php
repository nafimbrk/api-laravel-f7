<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey = 'nip';
    public $incrementing = false;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = ['id', 'nip', 'nama', 'email', 'no_hp'];

}

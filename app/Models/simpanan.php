<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class simpanan extends Model{
    public function allData()
    {
        return DB::table('simpanans')
            ->leftjoin('users', 'nama', '=', 'users.nama')
            ->get();
    }
}
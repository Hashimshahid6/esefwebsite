<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlidersModel extends Model
{
    use HasFactory;
    protected $table = 'movable_sliders';

    static public function getSliders(){
        return self::select('movable_sliders.*', 'users.name as created_by_name')
        ->join('users', 'movable_sliders.created_by', '=', 'users.id')
        ->where('movable_sliders.status', '=', 1)
        ->orderBy('movable_sliders.id', 'desc')
        ->paginate(3);
    }
}

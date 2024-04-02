<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerModel extends Model
{
    use HasFactory;
    protected $table = 'banners';

    static public function getBanners(){
        return self::select('banners.*', 'users.name as created_by_name')
        ->join('users', 'banners.created_by', '=', 'users.id')
        ->where('banners.status', '=', 1)
        ->orderBy('banners.id', 'asc')
        ->paginate(10);
    }
}

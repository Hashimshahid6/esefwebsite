<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryModel extends Model
{
    use HasFactory;
    protected $table = 'gallaries';
    
    static public function getGallery(){
        return self::select('gallaries.*', 'users.name as created_by_name')
        ->join('users', 'gallaries.created_by', '=', 'users.id')
        ->where('gallaries.status', '=', 1)
        ->orderBy('gallaries.id', 'desc')
        ->paginate(3);
    }
}

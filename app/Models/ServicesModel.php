<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesModel extends Model
{
    use HasFactory;
    protected $table = 'services';

    static public function getServices(){
        return self::select('services.*', 'users.name as created_by_name')
        ->join('users', 'services.created_by', '=', 'users.id')
        ->where('services.status', '=', 1)
        ->orderBy('services.id', 'asc')
        ->paginate(10);
    }
}

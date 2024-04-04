<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TendersModel extends Model
{
    use HasFactory;
    protected $table = 'tenders';
    
    static public function getTenders($type = null){
        return self::select('tenders.*', 'users.name as created_by_name')
        ->join('users', 'tenders.created_by', '=', 'users.id')
        ->where('tenders.status', '=', 1)
        ->when($type, function($query, $type){
            return $query->where('tenders.type', $type);
        })
        ->orderBy('tenders.id', 'asc')
        ->get();
    }
}

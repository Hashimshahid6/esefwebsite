<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BODMembersModel extends Model
{
    use HasFactory;
    protected $table = 'bod_members';
    static public function getBODMembers(){
        return self::select('bod_members.*', 'users.name as created_by_name')
        ->join('users', 'bod_members.created_by', '=', 'users.id')
        ->where('bod_members.status', '=', 1)
        ->orderBy('bod_members.picture_sequence', 'asc')
        ->paginate(20);
    }
}

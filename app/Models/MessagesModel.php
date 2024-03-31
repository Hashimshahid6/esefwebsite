<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessagesModel extends Model
{
    use HasFactory;
    protected $table = 'messages';

    static public function getMessages(){
        return self::select('messages.*', 'users.name as created_by_name')
        ->join('users', 'messages.created_by', '=', 'users.id')
        ->where('messages.status', '=', 1)
        ->orderBy('messages.id', 'desc')
        ->paginate(3);
    }
}

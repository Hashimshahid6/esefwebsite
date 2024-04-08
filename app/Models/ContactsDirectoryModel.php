<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactsDirectoryModel extends Model
{
    use HasFactory;

    protected $table = 'telephone_book';

    static public function getContactsDirectory(){
        return self::select('telephone_book.*', 'users.name as created_by_name')
        ->join('users', 'telephone_book.created_by', '=', 'users.id')
        ->where('telephone_book.status', '=', 1)
        ->orderBy('telephone_book.id', 'asc')
        ->get();
    }
}

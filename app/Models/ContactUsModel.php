<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUsModel extends Model
{
    use HasFactory;

    protected $table = 'enquiry';
    protected $fillable = ['name', 'email', 'subject', 'message'];

    static public function getContacts(){
        return self::select('enquiry.*')
        ->where('enquiry.status', '=', 1)
        ->orderBy('enquiry.id', 'asc')
        ->get();
    }
}

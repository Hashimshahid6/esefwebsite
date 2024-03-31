<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsModel extends Model
{
    use HasFactory;
    protected $table = 'news_updates';

    static public function getNews(){
        return self::select('news_updates.*', 'users.name as created_by_name')
        ->join('users', 'news_updates.created_by', '=', 'users.id')
        ->where('news_updates.status', '=', 1)
        ->orderBy('news_updates.id', 'desc')
        ->paginate(3);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuccessStoriesModel extends Model
{
    use HasFactory;

    protected $table = 'success_stories';

    public static function getSuccessStories(){
        return SuccessStoriesModel::where('status','Active')->orderBy('id', 'desc')->limit(5)->get();
    }//
}

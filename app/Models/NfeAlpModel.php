<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NfeAlpModel extends Model
{
    use HasFactory;
    protected $table = 'nfe_alp';
		public function parent(){
			return $this->belongsTo(NfeAlpModel::class, 'parent_id');
		}
		public function childrencats(){
			return $this->hasMany(NfeAlpModel::class, 'parent_id')->whereNull('attachment');			
		} //
		public function children(){
			return $this->hasMany(NfeAlpModel::class, 'parent_id')->whereNotNull('attachment');			
		} //
		public static function siblings($row){
			return self::select()->where('parent_id','=',$row->parent_id)->where('status','=','1')->get();
		}
    public static function getParents(){
        return self::select()->with('childrencats.children','children')
        ->where('parent_id', '=', 0)
        ->where('status', '=', '1')
        ->get();
    } //
		public static function getParentsOnly(){
        return self::select()
        ->where('parent_id', '=', 0)
        ->where('status', '=', '1')
        ->get();
    } //
		public static function getChildrenOnly($parent_id){
        return self::select()
        ->where('parent_id', '=', $parent_id)
        ->where('status', '=', '1')
        ->whereNull('attachment')
        ->get();
    } //
		public static function getChildrenDocs($parent_id){
        return self::select()
        ->where('parent_id', '=', $parent_id)
        ->where('status', '=', '1')
        ->whereNotNull('attachment')
        ->get();
    } //
		public static function getDescriptionRow(){
        return self::select()
        ->where('parent_id', '=', '0')
        ->where('status', '=', '0')
        ->first();
    } //
}

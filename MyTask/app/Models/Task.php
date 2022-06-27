<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Task extends Model
{
    use HasFactory;
    //指定したカラムにのみcreateやupdateメソッドが使えるようになるための記述
    protected $fillable = ['task'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

}

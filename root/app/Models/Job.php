<?php

namespace App\Models;

//Illuminate\Database\Eloquent\はフレームワーク。モデル間の関係を定義
//データベース間のリレーションシップを定義するためのメソッドを提供
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=["name"];
}

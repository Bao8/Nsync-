<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    // use HasFactory;

    //テーブル名
    protected $table = "contents";

    //可変項目
    protected $fillable = 
    [
        "title",
        "season_no",
        "season_title",
        "season_info",
        "raiting",
        "rightsource",
        "category",
        "genre",
        "service",
        "seriescontentscode"

    ];

    public function Episode()
    {
        return $this->hasMany('App\Episode');
    }
}

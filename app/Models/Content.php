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
}

class Contents extends Model
{
    // use HasFactory;

    //テーブル名
    protected $table = "contents-episode";

    //可変項目
    protected $fillable = 
    [
        "contentsid",
        "title",
        "season_no",
        "season_title",
        "season_info",
        "episode_no",
        "episode_title",
        "episode_info",
        "contentstype",
        "contentslength",
        "service",
        "steamingdate",
        "seriescontentscode",
        "contentscode",
        "check_operate",
        "check_edit",
        "check_linking",
        "check_editer",
        "check1_mediainfo",
        "check1_sheet",
        "check1_file",
        "check1_episode",
        "check1_movienoise",
        "check1_editpoint",
        "check1_angleofview",
        "check1_flamerate",
        "check1_submiss",
        "check1_field",
        "check1_audionoise",
        "check1_aoudiomiss",
        "check1_audioasign",
        "check1_language",
        "check1_editer",
        "check2_mediainfo",
        "check2_file",
        "check2_episode",
        "check2_editer",
        "check3_comdate",
        "check2_editer",

    ];
}
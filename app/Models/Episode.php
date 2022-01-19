<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    // use HasFactory;
    //テーブル名
    protected $table = "contentsepisode";

    //可変項目
    protected $fillable = 
    [
        "contentsid",
        "episode_no",
        "episode_title",
        "episode_info",
        "contentstype",
        "contentslength",
        "steamingdate",
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
        "check3_editer",

    ];

    public function content()
    {
        return $this->belongsTo('App\Episode');
    }

}

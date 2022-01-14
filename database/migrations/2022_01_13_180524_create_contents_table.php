<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->dateTime('created_at')->nullable();   /* 作成日時 更新日時 */
            $table->dateTime('updated_at')->nullable();   /* 更新日時 */
            $table->string('title',255);   /* 作品名 */
            $table->integer('season_no')->unsigned();   /* シーズンNo */
            $table->string('season_title',255);   /* シーズンタイトル */
            $table->longtext('season_info',255);   /* シーズン情報 */
            // $table->integer('episode-no')->unsigned();   /* エピソードNo */
            // $table->string('episode-title',255);   /* エピソードタイトル */
            // $table->longtext('episode-info',255);   /* エピソード情報 */
            $table->string('raiting',100);   /* レイティング */
            $table->string('rightsource',100);   /* 権利元 */
            $table->string('category',100);   /* カテゴリ */
            $table->string('genre',100);   /* ジャンル */
            // $table->string('contentstype',100);   /* コンテンツタイプ */
            // $table->integer('contentslength')->unsigned();   /* 長さ（秒） */
            $table->string('service',100);   /* 案件 */
            // $table->date('streamingdate');   /* 配信開始日 */
            $table->char('seriescontentscode',14);   /* シリーズコンテンツコード */
            // $table->char('contentscode',14);   /* コンテンツコード */
            // $table->longText('check-operate');   /* 作業指示 */
            // $table->longText('check-edit');   /* 編集内容 */
            // $table->string('check-linking',100);   /* 紐づけTC */
            // $table->string('check-editer',100);   /* 編集者 */
            // $table->string('check1-mediainfo',100);   /* Mediainfo */
            // $table->string('check1-sheet',100);   /* スプレッドシート解像度 */
            // $table->string('check1-file',100);   /* ファイル名確認 */
            // $table->string('check1-episode',100);   /* 話数確認 */
            // $table->string('check1-movienoize',100);   /* 映像ノイズ */
            // $table->string('check1-editpoint',100);   /* 編集箇所 */
            // $table->string('check1-angleofview',100);   /* 解像度 */
            // $table->string('check1-flamerate',100);   /* フレームレート */
            // $table->string('check1-submiss',100);   /* 字幕ズレ */
            // $table->string('check1-field',100);   /* フィールド */
            // $table->string('check1-audionoize',100);   /* 音声ノイズ */
            // $table->string('check1-audiomiss',100);   /* 音声ズレ */
            // $table->string('check1-audioasign',100);   /* 音声アサイン */
            // $table->string('check1-language',100);   /* 言語 */
            // $table->string('check1-editer',100);   /* 担当者 */
            // $table->string('check2-mediainfo',100);   /* Mediainfo */
            // $table->string('check2-file',100);   /* ファイル名確認 */
            // $table->string('check2-episode',100);   /* 話数確認 */
            // $table->string('check2-editer',100);   /* 担当者 */
            // $table->string('check3-comdate',100);   /* 納品完了日 */
            // $table->string('check3-editer',100);   /* 担当者 */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsEpisodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents-episode', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->bigInteger('contentsid')->unsigned();
            $table->dateTime('created_at')->nullable();   /* 作成日時 更新日時 */
            $table->dateTime('updated_at')->nullable();   /* 更新日時 */
            $table->string('title',255);   /* 作品名 */
            $table->integer('season_no')->unsigned();   /* シーズンNo */
            $table->string('season_title',255);   /* シーズンタイトル */
            $table->longtext('season_info',255);   /* シーズン情報 */
            $table->integer('episode_no')->unsigned();   /* エピソードNo */
            $table->string('episode_title',255);   /* エピソードタイトル */
            $table->longtext('episode_info',255);   /* エピソード情報 */
            $table->string('contentstype',100);   /* コンテンツタイプ */
            $table->integer('contentslength')->unsigned();   /* 長さ（秒） */
            $table->string('service',100);   /* 案件 */
            $table->date('streamingdate');   /* 配信開始日 */
            $table->char('seriescontentscode',14);   /* シリーズコンテンツコード */
            $table->char('contentscode',14);   /* コンテンツコード */
            $table->longText('check_operate');   /* 作業指示 */
            $table->longText('check_edit');   /* 編集内容 */
            $table->string('check_linking',100);   /* 紐づけTC */
            $table->string('check_editer',100);   /* 編集者 */
            $table->string('check1_mediainfo',100);   /* Mediainfo */
            $table->string('check1_sheet',100);   /* スプレッドシート解像度 */
            $table->string('check1_file',100);   /* ファイル名確認 */
            $table->string('check1_episode',100);   /* 話数確認 */
            $table->string('check1_movienoize',100);   /* 映像ノイズ */
            $table->string('check1_editpoint',100);   /* 編集箇所 */
            $table->string('check1_angleofview',100);   /* 解像度 */
            $table->string('check1_flamerate',100);   /* フレームレート */
            $table->string('check1_submiss',100);   /* 字幕ズレ */
            $table->string('check1_field',100);   /* フィールド */
            $table->string('check1_audionoize',100);   /* 音声ノイズ */
            $table->string('check1_audiomiss',100);   /* 音声ズレ */
            $table->string('check1_audioasign',100);   /* 音声アサイン */
            $table->string('check1_language',100);   /* 言語 */
            $table->string('check1_editer',100);   /* 担当者 */
            $table->string('check2_mediainfo',100);   /* Mediainfo */
            $table->string('check2_file',100);   /* ファイル名確認 */
            $table->string('check2_episode',100);   /* 話数確認 */
            $table->string('check2_editer',100);   /* 担当者 */
            $table->string('check3_comdate',100);   /* 納品完了日 */
            $table->string('check3_editer',100);   /* 担当者 */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents-episode');
    }
}

<form class="row g-3">
	<div class="col-md-1">
		<button type="submit" class="btn btn-primary">更新</button>
	</div>
	<div class="col-md-1" style="padding-left:0;">
		<input type="reset" class="btn btn-warning" value="取消">
	</div>	
	<div class="w-100"></div>
	<div class="col-md-6">
		<label for="title" class="form-label">作品名</label>
		<input type="text" class="form-control" id="title" aria-describedby="" value="" name="title">
	</div>
	<div class="col-md-3">
		<label for="contentstype" class="form-label">コンテンツタイプ</label>
		<select id="contentstype" class="form-select" name="contentstype">
			<option value="ORG" selected>本編</option>
			<option value="TR">予告編</option>
			<option value="Pre">プレビュー</option>
			<option value="JPNSub">字幕本編</option>
			<option value="TRSub">字幕予告編</option>
			<option value="PreSub">字幕プレビュー</option>
			<option value="JPNDub">吹替本編</option>
			<option value="TRDub">吹替予告編</option>
			<option value="PreDub">吹替プレビュー</option>
			<option value="Textless">白完パケ</option>
		</select>
	</div>
	<div class="col-md-3">
		<label for="service" class="form-label">案件</label>
		<select id="service" class="form-select" name="service">
			<option selected>案件を選択</option>
			<option value="amazon">amazon</option>
			<option value="atv">ATV</option>
			<option value="hulu">Hulu</option>
			<option value="paravi">Paravi</option>
			<option value="tver">TVer</option>
		</select>
	</div>
	<div class="col-md-6">
		<label for="movie-filename" class="form-label">ファイル名</label>
		<input type="text" class="form-control" id="movie-filename" aria-describedby="" value="" name="movie-filename">
	</div>
	<div class="col-md-6">
    	<label for="movie-format" class="form-label">ファイル形式</label>
    	<select id="movie-format" class="form-select" name="movie-format">
			<option selected>拡張子を選択</option>
			<option value="mov">MOV</option>
			<option value="mp4">MP4</option>
			<option value="avi">AVI</option>
			<option value="mxf">MXF</option>
			<option value="mpeg">MPEG</option>
		</select>
 	</div>
	 <div class="col-md-6">
		<label for="lto-path" class="form-label">パス</label>
		<input type="text" class="form-control" id="lto-path" aria-describedby="" value="" name="lto-path">
	</div>
	<div class="col-md-3">
		<label for="lto-tapenumber" class="form-label">テープ番号</label>
		<input type="number" class="form-control" id="lto-tapenumber" aria-describedby="" value="1" name="lto-tapenumber">
	</div>
	<div class="col-md-3">
		<label for="lto-storage" class="form-label">保管場所</label>
		<input type="text" class="form-control" id="lto-storage" aria-describedby="" value="" name="lto-storage">
	</div>
	<div class="w-100"></div>
	 <div class="col-md-6">
		<label for="totalbitrate" class="form-label">総ビットレート</label>
			<div class="input-group">
				<input type="number" class="form-control" aria-describedby="totalbitrate" value="10000" name="totalbitrate">
				<div class="input-group-append">
					<span class="input-group-text" id="totalbitrate">kbps</span>
				</div>	
			</div>
	</div>
	 <div class="col-md-3">
		<label for="movie-bitrate" class="form-label">映像ビットレート</label>
			<div class="input-group">
				<input type="number" class="form-control" aria-describedby="movie-bitrate" value="10000" name="movie-bitrate">
				<div class="input-group-append">
					<span class="input-group-text" id="movie-bitrate">kbps</span>
				</div>
			</div>
	</div>
	<div class="col-md-3">
		<label for="movie-audiobitrate" class="form-label">音声ビットレート</label>
			<div class="input-group">
				<input type="number" class="form-control" aria-describedby="movie-audiobitrate" value="128" name="movie-audiobitrate">
				<div class="input-group-append">
					<span class="input-group-text" id="movie-audiobitrate">kbps</span>
				</div>
			</div>
	</div>
	 <div class="col-md-6">
		<label for="flamerate" class="form-label">フレームレート</label>
		<select id="flamerate" class="form-select" name="flamerate">
			<option value="1920_1080" selected>1920x1080</option>
			<option value="720_480">720x480</option>
		</select>
	</div>
	<div class="col-md-3">
	   <label for="width_flamerate" class="form-label">フレーム幅</label>
	   <select id="width_flamerate" class="form-select" name="width_flamerate">
		   <option value="1920" selected>1920</option>
		   <option value="720">720</option>
	   </select>
   </div>
	 <div class="col-md-3">
		<label for="high_flamerate" class="form-label">フレーム高</label>
		<select id="high_flamerate" class="form-select" name="high_flamerate">
			<option value="1080" selected>1080</option>
			<option value="480">480</option>
		</select>
	</div>
	<div class="col-md-6">
		<label for="resolution" class="form-label">比率</label>
		<select id="resolution" class="form-select" name="resolution">
			<option value="16_9" selected>16:9</option>
			<option value="4_3">4:3</option>
			<option value="4_3_lb">4:3 LB</option>
			<option value="4_3_sq">4:3 SQ</option>
		</select>
	</div>
	<div class="col-md-3">
		<label for="movie-datasize" class="form-label">データサイズ</label>		
			<div class="input-group">
				<input type="number" class="form-control" aria-describedby="" value="5000000" name="movie-datasize">
				<div class="input-group-append">
					<span class="input-group-text" id="movie-datasize">MB</span>
				</div>
			</div>
	</div>
	<div class="col-md-3">
		<label for="length" class="form-label">長さ</label>		
		<input type="text" class="form-control" id="length" aria-describedby="" value="0:03:29" name="length">		
	</div>
	<div class="w-100"></div>
	<div class="col-md-6">
		<label for="jingle" class="form-label">ジングル</label>
		<input type="text" class="form-control" id="jingle" aria-describedby="" value="" name="jingle">
	</div>
	<div class="col-md-3">
		<label for="telop" class="form-label">テロップ</label>
		<input type="text" class="form-control" id="telop" aria-describedby="" value="" name="telop">
	</div>
	<div class="col-md-3">
		<label for="watermark" class="form-label">透かし</label>
		<div class="">
		<div class="custom-control custom-radio custom-control-inline">
			<input type="radio" class="custom-control-input" name="watermark" id="option1" value="yes">
			<label for="option1" class="custom-control-label">有</label>
		</div>
		<div class="custom-control custom-radio custom-control-inline">
			<input type="radio" class="custom-control-input" name="watermark" id="option2" value="none">
			<label for="option2" class="custom-control-label">無</label>
		</div>
		</div>
	</div>
	<div class="w-100"></div>
	<div class="col-md-6">
    	<label for="restorecomdate" class="form-label">リストア完了希望日</label>
    	<input type="date" class="form-control" id="restorecomdate" aria-describedby="" value="20211201" name="restorecomdate">
 	</div>
	 <div class="col-md-3">
    	<label for="movie-update" class="form-label">更新日時</label>
    	<input type="date" class="form-control" id="movie-update" aria-describedby="" value="20211201" name="movie-update">
 	</div>
	 <div class="col-md-3">
    	<label for="movie-create" class="form-label">作成日時</label>
    	<input type="date" class="form-control" id="movie-create" aria-describedby="" value="20211201" name="movie-create">
 	</div>
	<!-- <div class="col-12">
		<label for="episodetitle" class="form-label">エピソードタイトル</label>
		<input type="text" class="form-control" id="episodetitle" aria-describedby="" value="3分間で、竹製耳かき" name="episodetitle">
	</div> -->
	
</form>
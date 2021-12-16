<form class="row g-3">
	<div class="col-md-2">
		<button type="submit" class="btn btn-primary">更新</button>
	</div>
	<div class="col-md-1" style="padding-left:0;">
		<button type="reset" class="btn btn-warning">取消</button>
	</div>	
	<div class="w-100"></div>
	<div class="col-md-6">
    	<label for="movie-format" class="form-label">フォーマット</label>
    	<select id="movie-format" class="form-select" name="movie-format">
			<option selected>拡張子を選択</option>
			<option value="mov">MOV</option>
			<option value="mp4">MP4</option>
			<option value="avi">AVI</option>
			<option value="mxf">MXF</option>
			<option value="mpeg">MPEG</option>
		</select>
 	</div>
	 <div class="w-100"></div>
	 <div class="col-md-6">
		<label for="movie-angleofview" class="form-label">画角</label>
		<select id="movie-angleofview" class="form-select" name="movie-angleofview">
			<option value="1920_1080" selected>1920x1080</option>
			<option value="720_480">720x480</option>
		</select>
	</div>
	<div class="col-md-6">
		<label for="movie-resolution" class="form-label">比率</label>
		<select id="movie-resolution" class="form-select" name="movie-resolution">
			<option value="16_9" selected>16:9</option>
			<option value="4_3">4:3</option>
			<option value="4_3_lb">4:3 LB</option>
			<option value="4_3_sq">4:3 SQ</option>
		</select>
	</div>
	<div class="col-md-6">
		<label for="movie-nativefps" class="form-label">FPS</label>
		<div class="form-floating mb-3">
			<select id="movie-nativefps" class="form-select" name="movie-nativefps">
				<option value="60">60</option>
				<option value="59.97">59.97</option>
				<option value="30">30</option>
				<option value="29.97" selected>29.97</option>
				<option value="25">25</option>
				<option value="23.976">23.976</option>
			</select>
		</div>
	</div>
	<div class="col-md-6">
		<label for="movie-encodefps" class="form-label">FPS＜エンコード＞</label>
		<select id="movie-encodefps" class="form-select" name="movie-encodefps">
				<option value="60">60</option>
				<option value="59.97">59.97</option>
				<option value="30">30</option>
				<option value="29.97" selected>29.97</option>
				<option value="25">25</option>
				<option value="23.976">23.976</option>
		</select>
	</div>
	<div class="col-md-6">
		<label for="movie-bitrate" class="form-label">映像ビットレート</label>
			<div class="input-group">
				<input type="number" class="form-control" aria-describedby="movie-bitrate" value="10000" name="movie-bitrate">
				<div class="input-group-append">
					<span class="input-group-text" id="movie-bitrate">kbps</span>
				</div>
			</div>
	</div>
	<div class="col-md-6">
		<label for="movie-audiobitrate" class="form-label">音声ビットレート</label>
			<div class="input-group">
				<input type="number" class="form-control" aria-describedby="movie-audiobitrate" value="128" name="movie-audiobitrate">
				<div class="input-group-append">
					<span class="input-group-text" id="audiobitrate">kbps</span>
				</div>	
			</div>
	</div>
	<div class="col-md-6">
		<label for="movie-audiochannel" class="form-label">音声チャンネル</label>
		<select id="movie-audiochannel" class="form-select" name="movie-audiochannel">
			<option value="7.1">7.1ch</option>
			<option value="5.1">5.1ch</option>
			<option value="2" selected>2ch</option>
			<option value="1">1ch</option>
		</select>
	</div>
	<div class="w-100"></div>
	<div class="col-md-6">
		<label for="movie-length" class="form-label">長さ</label>		
		<input type="text" class="form-control" id="movie-length" aria-describedby="" value="0:60:00" name="movie-length">		
	</div>
	<div class="w-100"></div>
	<div class="col-12">
		<label for="movie-filename" class="form-label">ファイル名</label>
		<input type="text" class="form-control" id="movie-filename" aria-describedby="" value="" name="movie-filename">
	</div>
	<div class="col-md-6">
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
	<div class="col-md-6">
		<label for="kanpakeormaster" class="form-label">完パケ or マスター</label>
		<select id="kanpakeormaster" class="form-select" name="kanpakeormaster">
			<option value="kanpake" selected>完パケ</option>
			<option value="master">マスター</option>
		</select>
	</div>
	<div class="col-12">
		<label for="postproduction" class="form-label">作業ポストプロダクション</label>
		<input type="text" class="form-control" id="postproduction" aria-describedby="" value="" name="postproduction">
	</div>
	<div class="col-12">
		<label for="moviespecialnote" class="form-label">特記事項</label>
  		<textarea class="form-control" id="moviespecialnote" rows="3" name="moviespecialnote"></textarea>
 	</div>
</form>
<form class="row g-3">
	<div class="col-md-1">
		<button type="submit" class="btn btn-primary">更新</button>
	</div>
	<div class="col-md-1" style="padding-left:0;">
		<input type="reset" class="btn btn-warning" value="取消">
	</div>	
	<div class="w-100"></div>
	<div class="col-md-6">
    	<label for="movieformat" class="form-label">フォーマット</label>
    	<input type="text" class="form-control" id="movieformat" aria-describedby="" value="mov" name="movieformat">
 	</div>
	 <div class="w-100"></div>
	 <div class="col-md-6">
		<label for="angleofview" class="form-label">画角</label>
		<select id="angleofview" class="form-select" name="angleofview">
			<option value="1920_1080" selected>1920x1080</option>
			<option value="720_480">720x480</option>
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
	<div class="col-md-6">
		<label for="nativefps" class="form-label">FPS</label>
		<div class="form-floating mb-3">
			<select id="nativefps" class="form-select" name="nativefps">
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
		<label for="encodefps" class="form-label">FPS＜エンコード＞</label>
		<select id="encodefps" class="form-select" name="encodefps">
				<option value="60">60</option>
				<option value="59.97">59.97</option>
				<option value="30">30</option>
				<option value="29.97" selected>29.97</option>
				<option value="25">25</option>
				<option value="23.976">23.976</option>
		</select>
	</div>
	<div class="col-md-6">
		<label for="moviebitrate" class="form-label">映像ビットレート</label>
			<div class="input-group">
				<input type="number" class="form-control" aria-describedby="moviebitrate" value="10000" name="moviebitrate">
				<div class="input-group-append">
					<span class="input-group-text" id="moviebitrate">kbps</span>
				</div>
			</div>
	</div>
	<div class="col-md-6">
		<label for="audiobitrate" class="form-label">音声ビットレート</label>
			<div class="input-group">
				<input type="number" class="form-control" aria-describedby="audiobitrate" value="128" name="audiobitrate">
				<div class="input-group-append">
					<span class="input-group-text" id="audiobitrate">kbps</span>
				</div>	
			</div>
	</div>
	<div class="col-md-6">
		<label for="audiochannel" class="form-label">音声チャンネル</label>
		<select id="audiochannel" class="form-select" name="audiochannel">
			<option value="7.1">7.1ch</option>
			<option value="5.1">5.1ch</option>
			<option value="2" selected>2ch</option>
			<option value="1">1ch</option>
		</select>
	</div>
	<div class="w-100"></div>
	<div class="col-md-6">
		<label for="length" class="form-label">長さ</label>		
		<input type="text" class="form-control" id="length" aria-describedby="" value="0:03:29" name="length">		
	</div>
	<div class="w-100"></div>
	<div class="col-12">
		<label for="moviefilename" class="form-label">ファイル名</label>
		<input type="text" class="form-control" id="moviefilename" aria-describedby="" value="" name="moviefilename">
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
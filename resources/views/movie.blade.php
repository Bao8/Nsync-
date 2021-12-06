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
    	<input type="text" class="form-control" id="movieformat" aria-describedby="" value="mov">
 	</div>
	 <div class="w-100"></div>
	 <div class="col-md-6">
		<label for="resolution" class="form-label">画角</label>
		<select id="resolution" class="form-select">
			<option selected>1920x1080</option>
			<option>720x480</option>
		</select>
	</div>
	<div class="col-md-6">
		<label for="resolution" class="form-label">比率</label>
		<select id="resolution" class="form-select">
			<option selected>16:9</option>
			<option>4:3</option>
			<option>4:3 LB</option>
			<option>4:3 SQ</option>
		</select>
	</div>
	<div class="col-md-6">
		<label for="nativefps" class="form-label">FPS</label>
		<div class="form-floating mb-3">
			<select id="nativefps" class="form-select">
				<option>60</option>
				<option>59.97</option>
				<option>30</option>
				<option selected>29.97</option>
				<option>25</option>
				<option>23.976</option>
			</select>
		</div>
	</div>
	<div class="col-md-6">
		<label for="encodefps" class="form-label">FPS＜エンコード＞</label>
		<select id="encodefps" class="form-select">
			<option>60</option>
			<option>59.97</option>
			<option>30</option>
			<option selected>29.97</option>
			<option>25</option>
			<option>23.976</option>
		</select>
	</div>
	<div class="col-md-6">
		<label for="moviebitrate" class="form-label">映像ビットレート</label>
			<div class="input-group">
				<input type="number" class="form-control" aria-describedby="moviebitrate" value="10000">
				<span class="input-group-text" id="moviebitrate">kbps</span>
			</div>
	</div>
	<div class="col-md-6">
		<label for="audiobitrate" class="form-label">音声ビットレート</label>
			<div class="input-group">
				<input type="number" class="form-control" aria-describedby="audiobitrate" value="128">
				<span class="input-group-text" id="audiobitrate">kbps</span>
			</div>
	</div>
	<div class="col-md-6">
		<label for="audiochannel" class="form-label">音声チャンネル</label>
		<select id="audiochannel" class="form-select">
			<option>7.1ch</option>
			<option>5.1ch</option>
			<option selected>2ch</option>
			<option>1ch</option>
		</select>
	</div>
	<div class="w-100"></div>
	<div class="col-md-6">
		<label for="length" class="form-label">長さ</label>		
		<input type="text" class="form-control" id="length" aria-describedby="" value="0:03:29">		
	</div>
	<div class="w-100"></div>
	<div class="col-12">
		<label for="moviefilename" class="form-label">ファイル名</label>
		<input type="text" class="form-control" id="moviefilename" aria-describedby="" value="">
	</div>
	<div class="col-md-6">
		<label for="contentstype" class="form-label">コンテンツタイプ</label>
		<select id="contentstype" class="form-select">
			<option selected>本編</option>
			<option>予告編</option>
		</select>
	</div>
	<div class="col-md-6">
		<label for="kanpakeormaster" class="form-label">完パケ or マスター</label>
		<select id="kanpakeormaster" class="form-select">
			<option selected>完パケ</option>
			<option>マスター</option>
		</select>
	</div>
	<div class="col-12">
		<label for="postproduction" class="form-label">作業ポストプロダクション</label>
		<input type="text" class="form-control" id="postproduction" aria-describedby="" value="">
	</div>
	<div class="col-12">
		<label for="moviespecialnote" class="form-label">特記事項</label>
  		<textarea class="form-control" id="moviespecialnote" rows="3"></textarea>
 	</div>
</form>
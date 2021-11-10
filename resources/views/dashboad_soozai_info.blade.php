<form class="row g-3">
	<div class="col-md-1">
		<button type="submit" class="btn btn-primary">更新</button>
	</div>
	<div class="col-md-1">
		<input type="reset" class="btn btn-warning" value="取消">
	</div>	
	<div class="w-100"></div>
	<div class="col-12">
    	<label for="contentscode" class="form-label">コンテンツコード</label>
    	<input type="text" class="form-control" id="contentscode" aria-describedby="" value="VCJPA10000066899">
 	</div>
	<div class="col-md-3">
		<label for="episodeNo" class="form-label">エピソードNo.</label>		
		<input type="number" class="form-control" id="episodeNo" aria-describedby="" value="1">
	</div>
	<div class="col-12">
		<label for="episodetitle" class="form-label">エピソードタイトル</label>
		<input type="text" class="form-control" id="episodetitle" aria-describedby="" value="3分間で、竹製耳かき">
	</div>
	<div class="col-12">
		<label for="rightsource" class="form-label">権利元</label>
		<input type="text" class="form-control" id="rightsource" aria-describedby="" value="ヴューズ">
	</div>
	<div class="col-md-4">
		<label for="length" class="form-label">長さ</label>		
		<input type="text" class="form-control" id="length" aria-describedby="" value="0:03:29">		
	</div>
	<div class="w-100"></div>
	<div class="col-md-4">
		<label for="contentstype" class="form-label">コンテンツタイプ</label>
		<select id="contentstype" class="form-select">
			<option selected>本編</option>
			<option>予告編</option>
		</select>
	</div>
	<div class="w-100"></div>
	<div class="col-md-4">
		<label for="category" class="form-label">カテゴリ</label>
		<select id="category" class="form-select">
			<option selected>邦画</option>
			<option>洋画</option>
			<option>国内ドラマ</option>
			<option>海外ドラマ</option>
			<option>アニメ</option>
			<option>海外アニメ</option>
		</select>
	</div>
	<div class="w-100"></div>
	<div class="col-md-4">
		<label for="matter" class="form-label">案件</label>
		<select id="matter" class="form-select">
			<option selected>Amazon</option>
			<option>ATV</option>
			<option>Hulu</option>
			<option>Paravi</option>
			<option>TVer</option>
		</select>
	</div>
</form>
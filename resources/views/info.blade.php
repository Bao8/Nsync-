<form class="row g-3">
	<div class="col-md-1">
		<button type="submit" class="btn btn-primary">更新</button>
	</div>
	<div class="col-md-1" style="padding-left:0;">
		<input type="reset" class="btn btn-warning" value="取消">
	</div>	
	<div class="w-100"></div>
	<div class="col-12">
    	<label for="seriescontentscode" class="form-label">シリーズコンテンツコード</label>
    	<input type="text" class="form-control" id="contentscode" aria-describedby="" value="VFJPA10000063894" name="seriescontentscode">
 	</div>
	<div class="col-12">
    	<label for="contentscode" class="form-label">コンテンツコード</label>
    	<input type="text" class="form-control" id="contentscode" aria-describedby="" value="VCJPA10000066899" name="contentscode">
 	</div>
	<div class="col-md-3">
		<label for="episodeNo" class="form-label">エピソードNo.</label>		
		<input type="number" class="form-control" id="episodeNo" aria-describedby="" value="1" name="episodeNo">
	</div>
	<div class="col-12">
		<label for="episodetitle" class="form-label">エピソードタイトル</label>
		<input type="text" class="form-control" id="episodetitle" aria-describedby="" value="3分間で、竹製耳かき" name="episodetitle">
	</div>
	<div class="col-12">
		<label for="seriesinfo" class="form-label">シリーズ情報</label>
		<textarea class="form-control" id="seriesinfo" rows="3" name="seriesinfo"></textarea>
	</div>
	<div class="col-12">
		<label for="rightsource" class="form-label">権利元</label>
		<input type="text" class="form-control" id="rightsource" aria-describedby="" value="ヴューズ" name="rightsource">
	</div>
	<div class="col-md-6">
		<label for="length" class="form-label">長さ</label>		
		<input type="text" class="form-control" id="length" aria-describedby="" value="0:03:29" name="length">		
	</div>
	<div class="w-100"></div>
	<div class="col-md-6">
		<label for="contentstype" class="form-label">コンテンツタイプ</label>
		<select id="contentstype" class="form-select" name="contentstype">
			<option value="Main" selected>本編</option>
			<option value="trailer">予告編</option>
		</select>
	</div>
	<div class="w-100"></div>
	<div class="col-md-6">
		<label for="category" class="form-label">カテゴリ</label>
		<select id="category" class="form-select" name="category">
			<option value="oroginal" selected>邦画</option>
			<option value="youga">洋画</option>
			<option value="kokunaidorama">国内ドラマ</option>
			<option value="kaigaidorama">海外ドラマ</option>
			<option value="anime">アニメ</option>
			<option value="kaigaianime">海外アニメ</option>
		</select>
	</div>
	<div class="col-md-6">
		<label for="genre" class="form-label">ジャンル</label>
		<select id="genre" class="form-select" name="genre">			
			<option value="horror" selected>ホラー</option>
			<option value="comedy">コメディー</option>
			<option value="romance">ロマンス</option>
			<option value="action">アクション</option>
			<option value="fantasy">ファンタジー</option>
		</select>
	</div>
	<div class="w-100"></div>
	<div class="col-md-6">
		<label for="matter" class="form-label">案件</label>
		<select id="matter" class="form-select" name="matter">
			<option value="amazon" selected>Amazon</option>
			<option value="atv">ATV</option>
			<option value="hulu">Hulu</option>
			<option value="paravi">Paravi</option>
			<option value="tver">TVer</option>
		</select>
	</div>
	<div class="col-md-6">
    	<label for="onairdate" class="form-label">配信開始日</label>
    	<input type="date" class="form-control" id="onairdate" aria-describedby="" value="20211201" name="onairdate">
 	</div>
</form>
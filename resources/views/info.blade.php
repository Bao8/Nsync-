<form class="row g-3" method="post" action="">
	<div class="col-md-2">
		<button type="submit" class="btn btn-primary">更新</button>
	</div>
	<div class="w-100"></div>
	<div class="col-12">
    	<label for="seriescontentscode" class="form-label">シリーズコンテンツコード</label>
    	<input type="text" class="form-control" id="contentscode" aria-describedby="" value="JPA10000063894" name="seriescontentscode">
 	</div>
	<div class="col-12">
		 <label for="contentscode" class="form-label">コンテンツコード</label>
		 <input type="text" class="form-control" id="contentscode" aria-describedby="" value="JPA10000063895" name="contentscode">
	</div>
	<div class="col-12">
    	<label for="season-no" class="form-label">シーズンNo.</label>
    	<input type="text" class="form-control" id="season-no" aria-describedby="" value="20" name="season-no">
 	</div>
	<div class="col-12">
    	<label for="season-title" class="form-label">シーズンタイトル</label>
    	<input type="text" class="form-control" id="season-title" aria-describedby="" value="season20" name="season-title">
 	</div>
	<div class="col-md-3">
		<label for="episode-no" class="form-label">エピソードNo.</label>		
		<input type="number" class="form-control" id="episode-no" aria-describedby="" value="1" name="episode-no">
	</div>
	<div class="col-12">
		<label for="episode-title" class="form-label">エピソードタイトル</label>
		<input type="text" class="form-control" id="episode-title" aria-describedby="" value="初回拡大スペシャル第1話『復活～口封じの死』" name="episode-title">
	</div>
	<div class="col-12">
		<label for="episode-info" class="form-label">エピソード情報</label>
		<textarea class="form-control" id="episode-info" rows="3" name="episode-info"></textarea>
	</div>
	<div class="col-12">
		<label for="rightsource" class="form-label">権利元</label>
		<input type="text" class="form-control" id="rightsource" aria-describedby="" value="テレビ朝日" name="rightsource">
	</div>
	<div class="col-md-6">
		<label for="contentslength" class="form-label">長さ</label>		
		<input type="text" class="form-control" id="contentslength" aria-describedby="" value="0:60:00" name="contentslength">		
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
			<option value="variety">バラエティ</option>
		</select>
	</div>
	<div class="col-md-6">
		<label for="genre" class="form-label">ジャンル</label>
		<select id="genre" class="form-select" name="genre">			
			<option selected>ジャンルを選択</option>
			<option value="horror">ホラー</option>
			<option value="comedy">コメディー</option>
			<option value="romance">ロマンス</option>
			<option value="action">アクション</option>
			<option value="fantasy">ファンタジー</option>
		</select>
	</div>
	<div class="col-md-6">
		<label for="service" class="form-label">案件</label>
		<select id="service" class="form-select" name="service">
			<option value="amazon" selected>Amazon</option>
			<option value="atv">ATV</option>
			<option value="hulu">Hulu</option>
			<option value="paravi">Paravi</option>
			<option value="tver">TVer</option>
		</select>
	</div>
	<div class="col-md-6">
    	<label for="raiting" class="form-label">レイティング</label>
    	<select id="raiting" class="form-select" name="raiting">
			<option selected>選択</option>
			<option value="g">G</option>
			<option value="r15">ERIN｜R15</option>
			<option value="r18">ERIN｜R18</option>
		</select>
 	</div>
	<div class="w-100"></div>
	<div class="col-md-6">
    	<label for="streamingdate" class="form-label">配信開始日</label>
    	<input type="date" class="form-control" id="streamingdate" aria-describedby="" value="20211201" name="streamingdate">
 	</div>
	 <div class="w-100"></div>
</form>
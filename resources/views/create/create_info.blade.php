<div class="col-12">
    	<label for="title" class="form-label">作品名</label>
    	<input type="text" class="form-control" id="title" aria-describedby="" value="" name="title">
		<!-- @if ($errors->has('title'))
                    <div class="text-danger">
                        {{ $errors->first('title') }}
                    </div>
                @endif -->
 	</div>
	 <div class="col-12">
		 <label for="season-no" class="form-label">シーズンNo.</label>
		 <input type="text" class="form-control" id="season-no" aria-describedby="" value="" name="season_no">
	  </div>
	 <div class="col-12">
		 <label for="season-title" class="form-label">シーズンタイトル</label>
		 <input type="text" class="form-control" id="season-title" aria-describedby="" value="" name="season_title">
	  </div>
	<div class="col-12">
    	<label for="seriescontentscode" class="form-label">シリーズコンテンツコード</label>
    	<input type="text" class="form-control" id="contentscode" aria-describedby="" value="" name="seriescontentscode">
 	</div>
	<div class="col-12">
		<label for="rightsource" class="form-label">権利元</label>
		<input type="text" class="form-control" id="rightsource" aria-describedby="" value="" name="rightsource">
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
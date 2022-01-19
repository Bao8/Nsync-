<form class="row g-3" method="post" action=" {{route('update')}} " onSubmit="return checkSubmit()">
		@csrf
	<div class="col-md-2">
		<button type="submit" class="btn btn-primary">更新</button>
	</div>
	@if (session("err_msg"))
			<p class="text-danger">{{ session("err_msg") }}</p>
	@endif
	<div class="w-100"></div>
	<div class="col-12">
		<input type="hidden" value="{{ $content->id }}" name="id">
    	<label for="seriescontentscode" class="form-label">シリーズコンテンツコード</label>
    	<input type="text" class="form-control" id="seriescontentscode" aria-describedby="" value="{{ $content->seriescontentscode }}" name="seriescontentscode">
		@if ($errors->has('seriescontentscode'))
			<div class="text-danger">
				{{ $errors->first('seriescontentscode') }}
			</div>
        @endif
	</div>
	<div class="col-12">
		 <label for="contentscode" class="form-label">コンテンツコード</label>
		 <input type="text" class="form-control" id="contentscode" aria-describedby="" value="{{ $content->seriescontentscode }}" name="contentscode">
	</div>
	<div class="col-12">
    	<label for="season-no" class="form-label">シーズンNo.</label>
    	<input type="text" class="form-control" id="season-no" aria-describedby="" value="{{ $content->season_no }}" name="season_no">
 	</div>
	 @if ($errors->has('season_no'))
			<div class="text-danger">
				{{ $errors->first('season_no') }}
			</div>
        @endif
	<div class="col-12">
    	<label for="season-title" class="form-label">シーズンタイトル</label>
    	<input type="text" class="form-control" id="season-title" aria-describedby="" value="{{ $content->season_title }}" name="season_title">
 	</div>
	<div class="col-md-3">
		<label for="episode-no" class="form-label">エピソードNo.</label>		
		<input type="number" class="form-control" id="episode-no" aria-describedby="" value="{{ $content->episode_no }}" name="episode_no">
	</div>
	<!-- @if ($errors->has('episode_no'))
			<div class="text-danger">
				{{ $errors->first('episode_no') }}
			</div>
        @endif -->
	<div class="col-12">
		<label for="episode-title" class="form-label">エピソードタイトル</label>
		<input type="text" class="form-control" id="episode-title" aria-describedby="" value="{{ $content->episode_title}}" name="episode_title">
	</div>
	<div class="col-12">
		<label for="episode-info" class="form-label">エピソード情報</label>
		<textarea class="form-control" id="episode-info" rows="3" name="episode_info">{{ $content->episode_info}}</textarea>
	</div>
	<div class="col-12">
		<label for="rightsource" class="form-label">権利元</label>
		<input type="text" class="form-control" id="rightsource" aria-describedby="" value="{{ $content->rightsource}}" name="rightsource">
	</div>
	<div class="col-md-6">
		<label for="contentslength" class="form-label">長さ</label>		
		<input type="text" class="form-control" id="contentslength" aria-describedby="" value="{{$content->contentslength}}" name="contentslength">		
	</div>
	<div class="w-100"></div>
	<div class="col-md-6">
		<label for="contentstype" class="form-label">コンテンツタイプ</label>
		<select id="contentstype" class="form-select" name="contentstype">
			<option value="本編" selected>本編</option>
			<option value="予告編">予告編</option>
		</select>
	</div>
	<div class="w-100"></div>
	<div class="col-md-6">
		<label for="category" class="form-label">カテゴリ</label>
		<select id="category" class="form-select" name="category">
			<option selected>{{ $content->category}}</option>
			<option value="邦画">邦画</option>
			<option value="洋画">洋画</option>
			<option value="国内ドラマ">国内ドラマ</option>
			<option value="海外ドラマ">海外ドラマ</option>
			<option value="アニメ">アニメ</option>
			<option value="海外アニメ">海外アニメ</option>
			<option value="バラエティ">バラエティ</option>
		</select>
	</div>
	<div class="col-md-6">
		<label for="genre" class="form-label">ジャンル</label>
		<select id="genre" class="form-select" name="genre">			
			<option selected>{{ $content->genre}}</option>
			<option value="ホラー">ホラー</option>
			<option value="コメディー">コメディー</option>
			<option value="ロマンス">ロマンス</option>
			<option value="アクション">アクション</option>
			<option value="ファンタジー">ファンタジー</option>
			<option value="ミステリー">ミステリー</option>
		</select>
	</div>
	<div class="col-md-6">
		<label for="service" class="form-label">案件</label>
		<select id="service" class="form-select" name="service">
			<option selected>{{ $content->service}}</option>
			<option value="Amazon">Amazon</option>
			<option value="ATV">ATV</option>
			<option value="Hulu">Hulu</option>
			<option value="Paravi">Paravi</option>
			<option value="TVer">TVer</option>
		</select>
	</div>
	<div class="col-md-6">
    	<label for="raiting" class="form-label">レイティング</label>
    	<select id="raiting" class="form-select" name="raiting">
			<option selected>{{ $content->raiting}}</option>
			<option value="G">G</option>
			<option value="ERIN｜R15">ERIN｜R15</option>
			<option value="ERIN｜R18">ERIN｜R18</option>
		</select>
 	</div>
	<div class="w-100"></div>
	<div class="col-md-6">
    	<label for="streamingdate" class="form-label">配信開始日</label>
    	<input type="date" class="form-control" id="streamingdate" aria-describedby="" value="{{$content->streamingdate}}" name="streamingdate">
 	</div>
	 <div class="w-100"></div>
</form>
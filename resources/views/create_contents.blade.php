@extends('layouts.app')
@section("title","Nsync-作品追加")
@section('content')
<div class="container mb-2 pt-1">
	<form class="" method="post" action="{{route('store')}}" onSubmit="return checkSubmit()">
		@csrf
		<h2 class="">作品登録</h2>
		<div class="mt-1 mb-2">
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
				<label for="season_no" class="form-label">シーズンNo.</label>
				<input type="text" class="form-control" id="season_no" aria-describedby="" value="" name="season_no">
			</div>
			<div class="col-12">
				<label for="season_title" class="form-label">シーズンタイトル</label>
				<input type="text" class="form-control" id="season_title" aria-describedby="" value="" name="season_title">
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
					<option value="邦画" selected>邦画</option>
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
					<option selected>ジャンルを選択</option>
					<option value="ホラー">ホラー</option>
					<option value="コメディー">コメディー</option>
					<option value="ロマンス">ロマンス</option>
					<option value="アクション">アクション</option>
					<option value="ファンタジー">ファンタジー</option>
				</select>
			</div>
			<div class="col-md-6">
				<label for="service" class="form-label">案件</label>
				<select id="service" class="form-select" name="service">
					<option value="Amazon" selected>Amazon</option>
					<option value="ATV">ATV</option>
					<option value="Hulu">Hulu</option>
					<option value="Paravi">Paravi</option>
					<option value="TVer">TVer</option>
				</select>
			</div>
			<div class="col-md-6">
				<label for="raiting" class="form-label">レイティング</label>
				<select id="raiting" class="form-select" name="raiting">
					<option selected>選択</option>
					<option value="G">G</option>
					<option value="ERIN｜R15">ERIN｜R15</option>
					<option value="ERIN｜R18">ERIN｜R18</option>
				</select>
			</div>
			<div class="col mt-2 ">
				<label for="season_info" class="form-label mb-0 font-weight-bold">備考</label>
				<textarea class="form-control" id="season_info" rows="2" name="season_info"></textarea>
			</div>
		</div>
		<button type="submit" class="btn btn-primary ">追加</button>
	</form>
</div>

@endsection
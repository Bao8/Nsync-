@extends('layouts.app')
@section("title","Nsync")
@section('content')
<div class="container titleinfo mb-2 pt-1">
				<div class="mt-2 row border-bottom pb-0">
				<div class="col-10">

					<h2 class="title m-0 pr-3 d-inline">
						{{ $content->title }}
					</h2>
					<h2 class="season-title m-0 d-inline">
						{{ $content->season_title }}
					</h2>
				</div>
				<!-- <div class="justify-content-end ml-5 p-0">
						<button type="button" class="btn btn-primary"><a href="home" class="text-decoration-none text-reset">戻る</a></button>
					</div> -->
				<!-- <div class="w-100"></div> -->
				</div>
		<div class="row infomation">
			<div class="col-12 flex-coloum">
				
				<div class="row">
					<div class="col-6 mt-2">
						<label for="rightsource" class="form-label m-0 font-weight-bold">権利元</label>
						<input type="text" class="form-control" id="rightsource"  name="rightsource" value="{{ $content->rightsource }}" >
					</div>
					<div class="col-6 mt-2">
						<label for="seriescontentscode" class="form-label m-0 font-weight-bold">シリーズコンテンツコード</label>
						<input type="text" class="form-control" id="seriescontentscode" name="seriescontentscode" value="{{ $content->seriescontentscode }}" >
					</div>
					<div class="col-6 mt-2">
						<label for="category" class="form-label m-0 font-weight-bold">カテゴリ</label>
						<input type="text" class="form-control" id="category"  name="category" value="{{ $content->category }}" >
					</div>
					<div class="col-6 mt-2">
						<label for="genre" class="form-label m-0 font-weight-bold">ジャンル</label>
						<input type="text" class="form-control" id="genre"  name="genre" value="{{ $content->genre }}" >
					</div>
					<div class="col mt-2 ">
						<label for="season-info" class="form-label mb-0 font-weight-bold">備考</label>
						<textarea class="form-control" id="season-info" rows="2" name="season-info" >{{ $content->season_info }}</textarea>
					</div>
				</div>
			</div>
		</div>
	<ul class="nav nav-tabs tab-menu nav-pills" id="myTab" role="tablist">
		<li class="nav-item" role="presentation">
			<a class="nav-link active" id="episode1-tab" data-toggle="tab" href="#episode1" role="tab" aria-controls="episode1" aria-selected="true">Eps1</a>
		</li>
	</ul>
	<div class="tab-content" id="myTabContent">
		<div class="tab-pane fade show active mt-1" id="episode1" role="tabpanel" aria-labelledby="episode1-tab">
			<ul class="nav nav-tabs nav-fill" id="myTab2" role="tablist">
				<li class="nav-item" role="presentation">
					<a class="nav-link active" id="basic-tab" data-toggle="tab" href="#basic" role="tab" aria-controls="basic" aria-selected="true">基本情報</a>
				</li>
				<li class="nav-item" role="presentation">
					<a class="nav-link" id="manage-tab" data-toggle="tab" href="#manage" role="tab" aria-controls="manage" aria-selected="false">納品管理</a>
				</li>
				<li class="nav-item" role="presentation">
					<a class="nav-link" id="progress-tab" data-toggle="tab" href="#progress" role="tab" aria-controls="progress" aria-selected="false">作業進捗</a>
				</li>
				<li class="nav-item" role="presentation">
					<a class="nav-link" id="file-tab" data-toggle="tab" href="#file" role="tab" aria-controls="file" aria-selected="false">動画</a>
				</li>
				<li class="nav-item" role="presentation">
					<a class="nav-link" id="image-tab" data-toggle="tab" href="#image" role="tab" aria-controls="image" aria-selected="false">画像</a>
				</li>
				<li class="nav-item" role="presentation">
					<a class="nav-link" id="meta-tab" data-toggle="tab" href="#meta" role="tab" aria-controls="meta" aria-selected="false">メタ</a>
				</li>
				<li class="nav-item" role="presentation">
					<a class="nav-link" id="lto-tab" data-toggle="tab" href="#lto" role="tab" aria-controls="lto" aria-selected="false">LTO</a>
				</li>
			</ul>
			<div class="tab-content" id="myTab2Content">
				<div class="tab-pane fade show active mt-1" id="basic" role="tabpanel" aria-labelledby="basic-tab">

					@include('info')

				</div>
				<div class="tab-pane fade mt-1" id="manage" role="tabpanel" aria-labelledby="manage-tab">

					@include('delivery')
					
				</div>
				<div class="tab-pane fade mt-1" id="progress" role="tabpanel" aria-labelledby="progress-tab">
				
					@include('progress')

				</div>
				<div class="tab-pane fade mt-1" id="file" role="tabpanel" aria-labelledby="file-tab">
				
					@include('movie')

				</div>
				<div class="tab-pane fade mt-1" id="image" role="tabpanel" aria-labelledby="image-tab">
				
					@include('thumb')

				</div>
				<div class="tab-pane fade mt-1" id="meta" role="tabpanel" aria-labelledby="meta-tab">
				
					@include('meta')

				</div>
				<div class="tab-pane fade mt-1" id="lto" role="tabpanel" aria-labelledby="lto-tab">
				
					@include('LTO')
				
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
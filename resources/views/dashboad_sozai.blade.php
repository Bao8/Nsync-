@extends('layouts.dashboad_layout')

@section('content')
<ul class="nav nav-tabs nav-fill nav-pills bg-success" id="myTab" role="tablist">
	<li class="nav-item" role="presentation">
		<a class="nav-link active" id="series-tab" data-toggle="tab" href="#series" role="tab" aria-controls="series" aria-selected="true">Series<span class="badge bg-danger m-1">6</span></a>
	</li>
</ul>
<div class="tab-content" id="myTabContent">
	<div class="tab-pane fade show active mt-1" id="series" role="tabpanel" aria-labelledby="series-tab">
		<div class="container titleinfo mb-2 pt-1">
					<div class="mt-2">
						<h2 class="title">銀の匙　Silver Spoon</h2>
					</div>
			<div class="row infomation">
				<div class="col-12 flex-coloum">
					
					<div class="row">
						<div class="col-6 mt-2">
							<label for="kenrimoto" class="form-label m-0 font-weight-bold">権利元</label>
							<input type="text" class="form-control" id="kenrimoto" placeholder="" aria-label="権利元">
						</div>
						<div class="col-6 mt-2">
							<label for="kenrimoto" class="form-label m-0 font-weight-bold">コンテンツコード</label>
							<input type="text" class="form-control" id="kenrimoto" placeholder="" aria-label="コンテンツコード">
						</div>
						<div class="col-6 mt-2">
							<label for="janru" class="form-label m-0 font-weight-bold">ジャンル</label>
							<select id="janru" class="form-select">
								<option selected>選択</option>
								<option>ホラー</option>
								<option>コメディー</option>
								<option>ロマンス</option>
								<option>アクション</option>
								<option>ファンタジー</option>
							</select>
						</div>
						<div class="col-6 mt-2">
							<label for="category" class="form-label m-0 font-weight-bold">カテゴリ</label>
							<select id="category" class="form-select">
								<option selected>選択</option>
								<option>邦画</option>
								<option>洋画</option>
								<option>国内ドラマ</option>
								<option>海外ドラマ</option>
								<option>アニメ</option>
								<option>海外アニメ</option>
								<option>バラエティ</option>
							</select>
						</div>
						<div class="col mt-2 ">
							<label for="seriesinfo" class="form-label mb-0 font-weight-bold">備考</label>
							<textarea class="form-control" id="seriesinfo" rows="2"></textarea>
						</div>
					</div>
				</div>
				
				<!-- 一旦消し
				<div class="col-5 pt-2">
					<label for="sintyoku" class="form-label m-0 font-weight-bold">作業進捗度</label>
						<div id="sintyoku">
							<div class="mt-2">
								<label for="jimaku" class="form-label m-0">字幕</label>
								<div class="progress m-1" id="jimaku">
									<div class="shadow text-reset progress-bar progress-bar-animated bg-info progress-bar-striped" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
								</div>
							</div>
							<div class="mt-2">
								<label for="hukikae" class="form-label m-0">吹替</label>
								<div class="progress m-1" id="hukikae">
									<div class="text-reset progress-bar progress-bar-animated bg-info progress-bar-striped" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
								</div>
							</div>
							<div class="mt-2">
								<label for="yokoku" class="form-label m-0">予告</label>
								<div class="progress m-1" id="yokoku">
									<div class="text-reset progress-bar progress-bar-animated bg-info progress-bar-striped" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
								</div>
							</div>
						</div>
				</div>
				-->
			</div>
		</div>
	</div>	
		<ul class="nav nav-tabs tab-menu nav-pills" id="myTab" role="tablist">
			<li class="nav-item" role="presentation">
				<a class="nav-link active" id="episode1-tab" data-toggle="tab" href="#episode1" role="tab" aria-controls="episode1" aria-selected="true">Eps1</a>
			</li>
			<li class="nav-item" role="presentation">
				<a class="nav-link" id="episode2-tab" data-toggle="tab" href="#episode2" role="tab" aria-controls="episode2" aria-selected="false">Eps2</a>
			</li>
			<li class="nav-item" role="presentation">
				<a class="nav-link" id="episode3-tab" data-toggle="tab" href="#episode3" role="tab" aria-controls="episode3" aria-selected="false">Eps3<span class="badge bg-danger m-1">New!</span></a>
				
			</li>
			<li class="nav-item" role="presentation">
				<a class="nav-link" id="sub-tab" data-toggle="tab" href="#sub" role="tab" aria-controls="sub" aria-selected="false">字幕</a>
			</li>
			<li class="nav-item" role="presentation">
				<a class="nav-link" id="dub-tab" data-toggle="tab" href="#dub" role="tab" aria-controls="dub" aria-selected="false">吹替</a>
			</li>
			<li class="nav-item" role="presentation">
				<a class="nav-link" id="trailer-tab" data-toggle="tab" href="#trailer" role="tab" aria-controls="trailer" aria-selected="false">予告</a>
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

						@include('dashboad_soozai_info')
						
					</div>
					<div class="tab-pane fade mt-1" id="manage" role="tabpanel" aria-labelledby="manage-tab">
					
						@include('dashboad_soozai_delivery')

					</div>
					<div class="tab-pane fade mt-1" id="file" role="tabpanel" aria-labelledby="file-tab">
					
						@include('dashboad_soozai_movie')

					</div>
					<div class="tab-pane fade mt-1" id="image" role="tabpanel" aria-labelledby="image-tab">
					
						@include('dashboad_soozai_thumb')

					</div>
					<div class="tab-pane fade mt-1" id="meta" role="tabpanel" aria-labelledby="meta-tab">
					
						@include('dashboad_soozai_LTO')

					</div>
					<div class="tab-pane fade mt-1" id="lto" role="tabpanel" aria-labelledby="lto-tab">
					<?php
					  echo "Hello World6";
					?>
					</div>
				</div>
			</div>
			<div class="tab-pane fade mt-1" id="episode2" role="tabpanel" aria-labelledby="episode2-tab">
				<ul class="nav nav-tabs nav-fill" id="myTab3" role="tablist">
					<li class="nav-item" role="presentation">
						<a class="nav-link active" id="basic2-tab" data-toggle="tab" href="#basic2" role="tab" aria-controls="basic2" aria-selected="true">基本情報</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="manage2-tab" data-toggle="tab" href="#manage2" role="tab" aria-controls="manage2" aria-selected="false">納品管理</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="file2-tab" data-toggle="tab" href="#file2" role="tab" aria-controls="file2" aria-selected="false">動画</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="image2-tab" data-toggle="tab" href="#image2" role="tab" aria-controls="image2" aria-selected="false">画像</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="meta2-tab" data-toggle="tab" href="#meta2" role="tab" aria-controls="meta2" aria-selected="false">メタ</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="lto2-tab" data-toggle="tab" href="#lto2" role="tab" aria-controls="lto2" aria-selected="false">LTO</a>
					</li>
				</ul>
				<div class="tab-content" id="myTab3Content">
					<div class="tab-pane fade show active mt-1" id="basic2" role="tabpanel" aria-labelledby="basic2-tab">
					<?php
					  echo "こんにちは";
					?>
					</div>
					<div class="tab-pane fade mt-1" id="manage2" role="tabpanel" aria-labelledby="manage2-tab">
					<?php
					  echo "こんにちは2";
					?>
					</div>
					<div class="tab-pane fade mt-1" id="file2" role="tabpanel" aria-labelledby="file2-tab">
					<?php
					  echo "こんにちは3";
					?>
					</div>
					<div class="tab-pane fade mt-1" id="image2" role="tabpanel" aria-labelledby="image2-tab">
					<?php
					  echo "こんにちは4";
					?>
					</div>
					<div class="tab-pane fade mt-1" id="meta2" role="tabpanel" aria-labelledby="meta2-tab">
					<?php
					  echo "こんにちは5";
					?>
					</div>
					<div class="tab-pane fade mt-1" id="lto2" role="tabpanel" aria-labelledby="lto2-tab">
					<?php
					  echo "こんにちは6";
					?>
					</div>
				</div>
			</div>
			<div class="tab-pane fade mt-1" id="episode3" role="tabpanel" aria-labelledby="episode3-tab">
				<ul class="nav nav-tabs nav-fill" id="myTab4" role="tablist">
					<li class="nav-item" role="presentation">
						<a class="nav-link active" id="basic3-tab" data-toggle="tab" href="#basic3" role="tab" aria-controls="basic3" aria-selected="true">基本情報</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="manage3-tab" data-toggle="tab" href="#manage3" role="tab" aria-controls="manage3" aria-selected="false">納品管理</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="file3-tab" data-toggle="tab" href="#file3" role="tab" aria-controls="file3" aria-selected="false">動画</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="image3-tab" data-toggle="tab" href="#image3" role="tab" aria-controls="image3" aria-selected="false">画像</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="meta3-tab" data-toggle="tab" href="#meta3" role="tab" aria-controls="meta3" aria-selected="false">メタ</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="lto3-tab" data-toggle="tab" href="#lto3" role="tab" aria-controls="lto3" aria-selected="false">LTO</a>
					</li>
				</ul>
				<div class="tab-content" id="myTab4Content">
					<div class="tab-pane fade show active mt-1" id="basic3" role="tabpanel" aria-labelledby="basic3-tab">
					<?php
					  echo "Good mornning";
					?>
					</div>
					<div class="tab-pane fade mt-1" id="manage3" role="tabpanel" aria-labelledby="manage3-tab">
					<?php
					  echo "Good mornning2";
					?>
					</div>
					<div class="tab-pane fade mt-1" id="file3" role="tabpanel" aria-labelledby="file3-tab">
					<?php
					  echo "Good mornning3";
					?>
					</div>
					<div class="tab-pane fade mt-1" id="image3" role="tabpanel" aria-labelledby="image3-tab">
					<?php
					  echo "Good mornning4";
					?>
					</div>
					<div class="tab-pane fade mt-1" id="meta3" role="tabpanel" aria-labelledby="meta3-tab">
					<?php
					  echo "Good mornning5";
					?>
					</div>
					<div class="tab-pane fade mt-1" id="lto3" role="tabpanel" aria-labelledby="lto3-tab">
					<?php
					  echo "Good mornning6";
					?>
					</div>
				</div>
			</div>
			<div class="tab-pane fade mt-1" id="sub" role="tabpanel" aria-labelledby="sub-tab">
				<ul class="nav nav-tabs nav-fill" id="myTab5" role="tablist">
					<li class="nav-item" role="presentation">
						<a class="nav-link active" id="basic4-tab" data-toggle="tab" href="#basic4" role="tab" aria-controls="basic4" aria-selected="true">基本情報</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="manage4-tab" data-toggle="tab" href="#manage4" role="tab" aria-controls="manage4" aria-selected="false">納品管理</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="file4-tab" data-toggle="tab" href="#file4" role="tab" aria-controls="file4" aria-selected="false">動画</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="image4-tab" data-toggle="tab" href="#image4" role="tab" aria-controls="image4" aria-selected="false">画像</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="meta4-tab" data-toggle="tab" href="#meta4" role="tab" aria-controls="meta4" aria-selected="false">メタ</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="lto4-tab" data-toggle="tab" href="#lto4" role="tab" aria-controls="lto4" aria-selected="false">LTO</a>
					</li>
				</ul>
				<div class="tab-content" id="myTab5Content">
					<div class="tab-pane fade show active mt-1" id="basic4" role="tabpanel" aria-labelledby="basic3-tab">
					<?php
					  echo "Hello World";
					?>
					</div>
					<div class="tab-pane fade mt-1" id="manage4" role="tabpanel" aria-labelledby="manage4-tab">
					<?php
					  echo "Hello World2";
					?>
					</div>
					<div class="tab-pane fade mt-1" id="file4" role="tabpanel" aria-labelledby="file4-tab">
					<?php
					  echo "Hello World3";
					?>
					</div>
					<div class="tab-pane fade mt-1" id="image4" role="tabpanel" aria-labelledby="image4-tab">
					<?php
					  echo "Hello World4";
					?>
					</div>
					<div class="tab-pane fade mt-1" id="meta4" role="tabpanel" aria-labelledby="meta4-tab">
					<?php
					  echo "Hello World5";
					?>
					</div>
					<div class="tab-pane fade mt-1" id="lto4" role="tabpanel" aria-labelledby="lto4-tab">
					<?php
					  echo "Hello World6";
					?>
					</div>
				</div>
			</div>
			<div class="tab-pane fade mt-1" id="dub" role="tabpanel" aria-labelledby="dub-tab">
				<ul class="nav nav-tabs nav-fill" id="myTab6" role="tablist">
					<li class="nav-item" role="presentation">
						<a class="nav-link active" id="basic5-tab" data-toggle="tab" href="#basic5" role="tab" aria-controls="basic5" aria-selected="true">基本情報</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="manage5-tab" data-toggle="tab" href="#manage5" role="tab" aria-controls="manage5" aria-selected="false">納品管理</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="file5-tab" data-toggle="tab" href="#file5" role="tab" aria-controls="file5" aria-selected="false">動画</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="image5-tab" data-toggle="tab" href="#image5" role="tab" aria-controls="image5" aria-selected="false">画像</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="meta5-tab" data-toggle="tab" href="#meta5" role="tab" aria-controls="meta5" aria-selected="false">メタ</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="lto5-tab" data-toggle="tab" href="#lto5" role="tab" aria-controls="lto5" aria-selected="false">LTO</a>
					</li>
				</ul>
				<div class="tab-content" id="myTab6Content">
					<div class="tab-pane fade show active mt-1" id="basic5" role="tabpanel" aria-labelledby="basic5-tab">
					<?php
					  echo "Good luck";
					?>
					</div>
					<div class="tab-pane fade mt-1" id="manage5" role="tabpanel" aria-labelledby="manage5-tab">
					<?php
					  echo "Good luck2";
					?>
					</div>
					<div class="tab-pane fade mt-1" id="file5" role="tabpanel" aria-labelledby="file5-tab">
					<?php
					  echo "Good luck3";
					?>
					</div>
					<div class="tab-pane fade mt-1" id="image5" role="tabpanel" aria-labelledby="image5-tab">
					<?php
					  echo "Good luck4";
					?>
					</div>
					<div class="tab-pane fade mt-1" id="meta5" role="tabpanel" aria-labelledby="meta5-tab">
					<?php
					  echo "Good luck5";
					?>
					</div>
					<div class="tab-pane fade mt-1" id="lto5" role="tabpanel" aria-labelledby="lto5-tab">
					<?php
					  echo "Good luck6";
					?>
					</div>
				</div>
			</div>
			<div class="tab-pane fade mt-1" id="trailer" role="tabpanel" aria-labelledby="trailer-tab">
				<ul class="nav nav-tabs nav-fill" id="myTab7" role="tablist">
					<li class="nav-item" role="presentation">
						<a class="nav-link active" id="basic6-tab" data-toggle="tab" href="#basic6" role="tab" aria-controls="basic6" aria-selected="true">基本情報</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="manage6-tab" data-toggle="tab" href="#manage6" role="tab" aria-controls="manage6" aria-selected="false">納品管理</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="file6-tab" data-toggle="tab" href="#file6" role="tab" aria-controls="file6" aria-selected="false">動画</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="image6-tab" data-toggle="tab" href="#image6" role="tab" aria-controls="image6" aria-selected="false">画像</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="meta6-tab" data-toggle="tab" href="#meta6" role="tab" aria-controls="meta6" aria-selected="false">メタ</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="lto6-tab" data-toggle="tab" href="#lto6" role="tab" aria-controls="lto6" aria-selected="false">LTO</a>
					</li>
				</ul>
				<div class="tab-content" id="myTab7Content">
					<div class="tab-pane fade show active mt-1" id="basic6" role="tabpanel" aria-labelledby="basic6-tab">
					<?php
					  echo "Have a nice day";
					?>
					</div>
					<div class="tab-pane fade mt-1" id="manage6" role="tabpanel" aria-labelledby="manage6-tab">
					<?php
					  echo "Have a nice day2";
					?>
					</div>
					<div class="tab-pane fade mt-1" id="file6" role="tabpanel" aria-labelledby="file6-tab">
					<?php
					  echo "Have a nice day3";
					?>
					</div>
					<div class="tab-pane fade mt-1" id="image6" role="tabpanel" aria-labelledby="image6-tab">
					<?php
					  echo "Have a nice day4";
					?>
					</div>
					<div class="tab-pane fade mt-1" id="meta6" role="tabpanel" aria-labelledby="meta6-tab">
					<?php
					  echo "Have a nice day5";
					?>
					</div>
					<div class="tab-pane fade mt-1" id="lto6" role="tabpanel" aria-labelledby="lto6-tab">
					<?php
					  echo "Have a nice day6";
					?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
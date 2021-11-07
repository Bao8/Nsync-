@extends('layouts.dashboad_layout')

@section('content')
			<ul class="nav nav-tabs tab-menu" role="tablist">
				<li class="nav-item">
				<a class="nav-link active" id="series-tab" data-toggle="tab" href="#series" role="tab" aria-controls="series" aria-selected="true">Series</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" id="epsode-tab" data-toggle="tab" href="#epsode" role="tab" aria-controls="epsode" aria-selected="false">Eps1</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" id="epsode-tab" data-toggle="tab" href="#epsode" role="tab" aria-controls="epsode" aria-selected="false">Eps2</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" id="epsode-tab" data-toggle="tab" href="#epsode" role="tab" aria-controls="epsode" aria-selected="false">Eps3</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" id="epsode-tab" data-toggle="tab" href="#epsode" role="tab" aria-controls="epsode" aria-selected="false">Eps4</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" id="epsode-tab" data-toggle="tab" href="#epsode" role="tab" aria-controls="epsode" aria-selected="false">Eps5</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" id="epsode-tab" data-toggle="tab" href="#epsode" role="tab" aria-controls="epsode" aria-selected="false">Eps6</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" id="epsode-tab" data-toggle="tab" href="#epsode" role="tab" aria-controls="epsode" aria-selected="false">Eps7</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" id="epsode-tab" data-toggle="tab" href="#epsode" role="tab" aria-controls="epsode" aria-selected="false">Eps7</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" id="epsode-tab" data-toggle="tab" href="#epsode" role="tab" aria-controls="epsode" aria-selected="false">Eps8</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" id="epsode-tab" data-toggle="tab" href="#epsode" role="tab" aria-controls="epsode" aria-selected="false">Eps9</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" id="epsode-tab" data-toggle="tab" href="#epsode" role="tab" aria-controls="epsode" aria-selected="false">Eps10</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" id="epsode-tab" data-toggle="tab" href="#epsode" role="tab" aria-controls="epsode" aria-selected="false">Eps11</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" id="epsode-tab" data-toggle="tab" href="#epsode" role="tab" aria-controls="epsode" aria-selected="false">Eps12</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" id="epsode-tab" data-toggle="tab" href="#epsode" role="tab" aria-controls="epsode" aria-selected="false">Eps13</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" id="epsode-tab" data-toggle="tab" href="#epsode" role="tab" aria-controls="epsode" aria-selected="false">Eps14</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" id="epsode-tab" data-toggle="tab" href="#epsode" role="tab" aria-controls="epsode" aria-selected="false">Eps15</a>
				</li>
			</ul>
			<div class="tab-content">
			<div class="tab-pane fade show active mt-1" id="series" role="tabpanel" aria-labelledby="series-tab">
					<div class="titleinfo">
						<h2 class="m-0">作品名</h2>
						<div class="row m-0">
							<div class="photo col-md-6 p-0">
							<p>Sumple</p>
							</div>
							<div class="infomation col-md-6 p-0">
							<p>Sumple</p>
							</div>
						</div>
					</div>
					<ul class="nav nav-tabs" role="tablist">
					  <li class="nav-item">
						<a class="nav-link active" id="basic-tab" data-toggle="tab" href="#basic" role="tab" aria-controls="basic" aria-selected="true">基本情報</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" id="file-tab" data-toggle="tab" href="#file" role="tab" aria-controls="file" aria-selected="false">動画</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" id="image-tab" data-toggle="tab" href="#image" role="tab" aria-controls="image" aria-selected="false">画像</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" id="meta-tab" data-toggle="tab" href="#meta" role="tab" aria-controls="meta" aria-selected="false">メタ</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" id="lto-tab" data-toggle="tab" href="#lto" role="tab" aria-controls="lto" aria-selected="false">LTO</a>
					  </li>
					</ul>
						<div class="tab-content">
							<div class="tab-pane fade show active" id="basic" role="tabpanel" aria-labelledby="basic-tab">
							  <div class="table-responsive">
								<table class="table table-sm table-hover">
								  <thead>
									<tr>
									  <th>タイトル</th>
									  <th>エピソード名</th>
									  <th>権利元</th>
									  <th>コンテンツコード</th>
									  <th>話数</th>
									  <th>カテゴリ</th>
									  <th>尺</th>
									  <th>種類</th>
									  <th>総話数</th>
									  <th>シーズン情報</th>
									  <th>ジャンル</th>
									  <th>案件名</th>
									</tr>
								  </thead>
								  <tbody>
									<tr>
									  <td>1,001</td>
									  <td>Lorem</td>
									  <td>ipsum</td>
									  <td>dolor</td>
									  <td>sit</td>
									  <td>1,001</td>
									  <td>Lorem</td>
									  <td>ipsum</td>
									  <td>dolor</td>
									  <td>sit</td>
									  <td>dolor</td>
									  <td>sit</td>
									</tr>
									<tr>
									  <td>1,001</td>
									  <td>Lorem</td>
									  <td>ipsum</td>
									  <td>dolor</td>
									  <td>sit</td>
									  <td>1,001</td>
									  <td>Lorem</td>
									  <td>ipsum</td>
									  <td>dolor</td>
									  <td>sit</td>
									  <td>dolor</td>
									  <td>sit</td>
									</tr>
									<tr>
									  <td>1,001</td>
									  <td>Lorem</td>
									  <td>ipsum</td>
									  <td>dolor</td>
									  <td>sit</td>
									  <td>1,001</td>
									  <td>Lorem</td>
									  <td>ipsum</td>
									  <td>dolor</td>
									  <td>sit</td>
									  <td>dolor</td>
									  <td>sit</td>
									</tr>
								  </tbody>
								</table>
							  </div>
							</div>
							<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
							<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
						</div>
			</div>
			<div class="tab-pane fade" id="episode" role="tabpanel" aria-labelledby="episode-tab">...</div>
			</div>

@endsection
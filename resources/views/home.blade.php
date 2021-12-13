@extends('layouts.app')

@section('content')

<h2>作品一覧</h2>


<form class="form-inline">
  <input class="form-control form-control-dark mb-2 " type="text" placeholder="Search" aria-label="Search">
  <button class="btn btn-outline-success mb-2 mr-2" type="submit">検索</button>
	<label class="control-label result_count mb-2 mr-1">[検索結果 <span class="total_count">&nbsp;</span>件中 <span class="start_count">&nbsp;</span>-<span class="end_count">&nbsp;</span>件]</label>
	<label class="control-label mb-2">
		<select class="inline select2_default disp_num_table" id="dispNumTableData" name="dispNumTableData"><option value="10">10</option>
			<option selected="selected" value="20">20</option>
			<option value="100">100</option>
			<option value="500">500</option>
			<option value="100000000">全て表示</option>
			</select>
	</label>  	
  <ul class="pagination mb-2 mr-2 ml-2 justify-content-end">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</form>
<table class="text-center table table-striped table-bordered table-hover table-condensed table-sm">
  <thead>
    <tr>
      <th style="width:5%">No</th>
      <th scope="col" style="width:40%">作品名</th>
      <th scope="col" style="width:5%">更新日</th>
      <th scope="col" style="width:10%">カテゴリ</th>
	  <th scope="col" style="width:10%">種類</th>
      <th scope="col" style="width:5%">総話数</th>
	  <th scope="col" style="width:15%">権利元</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><a href="contents" class="text-decoration-none text-reset">銀の匙　Silver Spoon</a></td>
      <td>2021/11/12</td>
      <td>邦画</td>
	  <td>本/予</td>
      <td>-</td>
	  <td>マイシアター</td>
    </tr>
	 <tr>
      <th scope="row">2</th>
      <td><a href="contents" class="text-decoration-none text-reset">眠れる森の美女</a></td>
      <td>2021/11/12</td>
      <td>洋画</td>
	  <td>字/吹/予</td>
      <td>-</td>
	  <td>ミッドシップ</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><a href="contents" class="text-decoration-none text-reset">東京男子図鑑</a></td>
      <td>2021/11/12</td>
      <td>国内ドラマ</td>
	  <td>1シーズン</td>
      <td>10</td>
	  <td>電通</td>
    </tr>
	  <tr>
      <th scope="row">4</th>
      <td><a href="contents" class="text-decoration-none text-reset">ふしぎ駄菓子屋 銭天堂</a></td>
      <td>2021/11/12</td>
      <td>アニメ(見逃し)</td>
	  <td>1シーズン</td>
      <td>30</td>
	  <td>東映アニメーション</td>
    </tr>
	</tr>
	  <tr>
      <th scope="row">5</th>
      <td><a href="contents" class="text-decoration-none text-reset">パ二パ二パイナ！</a></td>
      <td>2021/11/12</td>
      <td>バラエティ</td>
	  <td>5シーズン</td>
      <td>21</td>
	  <td>プランナーズ21SYJ</td>
    </tr>
  </tbody>
</table>

@endsection

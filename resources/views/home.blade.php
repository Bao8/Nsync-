@extends('layouts.app')
@section("title","Nsync-TOP")
@section('content')

<h2>作品一覧</h2>
<!-- @if (session("err_msg"))
			<p class="text-danger">{{ session("err_msg") }}</p>
		@endif -->
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
<table class="text-center table table-bordered table-hover table-condensed table-sm">

  <thead>
    <tr>
      <th style="width:5%">No</th>
      <th scope="col" style="width:40%">作品名</th>
      <th scope="col" style="width:10%">シーズン情報</th>
      <th scope="col" style="width:15%">権利元</th>
      <th scope="col" style="width:10%">カテゴリ</th>
      <th scope="col" style="width:10%">ジャンル</th>
      <th scope="col" style="width:10%">レイティング</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($contents as $content): ?>
    <tr>
      <th scope="row">{{ $content->id  }}</th>
      <td><a href="contents/{{ $content->id  }}" class="text-decoration-none text-reset">{{ $content->title  }}</a></td>
      <td>{{ $content->season_title  }}</td>
      <td>{{ $content->rightsource  }}</td>
      <td>{{ $content->category  }}</td>
	    <td>{{ $content->genre  }}</td>
      <td>{{ $content->raiting  }}</td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>

@endsection

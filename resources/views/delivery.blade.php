<form class="row g-3" action="/contents" enctype="multipart/form-data" method="post">
    @csrf
	<div class="col-md-1">
		<button type="submit" class="btn btn-primary">更新</button>
	</div>
	<div class="col-md-1" style="padding-left:0;">
		<input type="reset" class="btn btn-warning" value="取消">
	</div>	
	<div class="w-100"></div>
	<h1 class="col-12">素材管理</h1>
	<div class="col-md-6">
    	<label for="material-draftdate" class="form-label">入稿日</label>
    	<input type="date" class="form-control" id="material-draftdate" aria-describedby="" value="20211216" name="material-draftdate">
 	</div>
	 <div class="col-md-6">
    	<label for="material-returndate" class="form-label">返却日</label>
    	<input type="date" class="form-control" id="material-returndate" aria-describedby="" value="20211216" name="material-returndate">
 	</div>
	<div class="col-12">
		<label for="material-originalformat" class="form-label">素材種別</label>
		<input type="text" class="form-control" id="material-originalformat" aria-describedby="" value="" name="material-originalformat">
	</div>
	<div class="col-12">
		<label for="material-attached" class="form-label">付属物</label>
		<input type="text" class="form-control" id="material-attached" aria-describedby="" value="" name="material-attached">
	</div>
	<div class="col-12">
		<label for="material-storagelocation" class="form-label">保管場所</label>
		<input type="text" class="form-control" id="material-storagelocation" aria-describedby="" value="" name="material-storagelocation">
	</div>
	<div class="col-12">
		<label for="material-returnaddress" class="form-label">返却先住所</label>
		<input type="text" class="form-control" id="material-returnaddress" aria-describedby="" value="" name="material-returnaddress">
	</div>
	<div class="col-md-6">
		<label for="material-tracking" class="form-label">伝票番号</label>
		<input type="text" class="form-control" id="material-tracking" aria-describedby="" value="" name="material-tracking">
	</div>
	<div class="w-100"></div>
	<div class="col-md-3">
		<label for="" class="form-label">返却書</label>
			<p><a href="">返却書リンク</a></p>
	</div>
	<div class="col-md-4">
		<label for="" class="form-label"></label>
		<input class="row m-1" type="file" name="material-link">	
	</div>
	<div class="col-md-1">
		<label for="" class="form-label"></label>
		<input class="btn btn-success" type="submit" value="送信">
	</div>
	<div class="w-100"></div>
	<div class="w-100"></div>
	<h1 class="col-12">納品管理</h1>
	<div class="col-12">
    	<label for="delivery-filename" class="form-label">納品ファイル名</label>
    	<input type="text" class="form-control" id="delivery-filename" aria-describedby="" value="" name="delivery-filename">
 	</div>
	<div class="col-md-4">
    	<label for="delivery-date" class="form-label">納品日</label>
    	<input type="date" class="form-control" id="delivery-date" aria-describedby="" value="" name="delivery-date">
 	</div>
	 <div class="w-100"></div>
	 <div class="col-12">
    	<label for="delivery-destination" class="form-label">納品先</label>
    	<input type="text" class="form-control" id="delivery-destination" aria-describedby="" value="" name="delivery-destination">
 	</div>
	 <div class="col-12">
    	<label for="delivery-method" class="form-label">納品方法</label>
    	<input type="text" class="form-control" id="delivery-method" aria-describedby="" value="" name="delivery-method">
 	</div>
	<div class="col-md-4">
		<label for="delivery-format" class="form-label">納品形式</label>
		<select id="delivery-format" class="form-select" name="delivery-format">
			<option selected>拡張子を選択</option>
			<option value="mov">MOV</option>
			<option value="mp4">MP4</option>
			<option value="avi">AVI</option>
			<option value="mxf">MXF</option>
			<option value="mpeg">MPEG</option>
		</select>
	</div>
	<div class="col-md-6">
		<label for="delivery-service" class="form-label">案件</label>
		<select id="delivery-service" class="form-select" name="delivery-service">
			<option value="amazon" selected>Amazon</option>
			<option value="atv">ATV</option>
			<option value="hulu">Hulu</option>
			<option value="paravi">Paravi</option>
			<option value="tver">TVer</option>
		</select>
	</div>
	<div class="col-12">
		<label for="delivery-items" class="form-label">納品項目</label>
		<div class="w-100"></div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="checkbox" id="delivery-items-1" name="delivery-items" value="movie">
			<label class="form-check-label" for="delivery-items-1">動画</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="checkbox" id="delivery-items-2" name="delivery-items" value="thumb">
			<label class="form-check-label" for="delivery-items-2">サムネイル</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="checkbox" id="delivery-items-3" name="delivery-items" value="meta">
			<label class="form-check-label" for="delivery-items-3">メタ</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="checkbox" id="delivery-items-4" name="delivery-items" value="aw">
			<label class="form-check-label" for="delivery-items-4">AW</label>
		</div>
	</div>
	<div class="col-md-3">
		<label for="" class="form-label">納品書</label>
			<p><a href="">納品書リンク</a></p>
	</div>
	<div class="col-md-4">
		<label for="" class="form-label"></label>
		<input class="row m-1" type="file" name="delivery-link">	
	</div>
	<div class="col-md-1">
		<label for="" class="form-label"></label>
		<input class="btn btn-success" type="submit" value="送信">
	</div>
	<div class="w-100"></div>
	<div class="col-md-4">
		<label for="delivery-responsibleperson" class="form-label">先方担当者</label>
		<input type="text" class="form-control" id="delivery-responsibleperson" aria-describedby="" value="" name="delivery-responsibleperson">
	</div>
	<div class="col-md-4">
		<label for="delivery-contactnumber" class="form-label">電話番号</label>
		<input type="tel" class="form-control" id="delivery-contactnumber" aria-describedby="" value="" name="delivery-contactnumber">
	</div>
	<div class="col-md-4">
		<label for="delivery-contactemail" class="form-label">E-Mail</label>
		<input type="email" class="form-control" id="delivery-contactemail" aria-describedby="" value="" name="delivery-contactemail">
	</div>
	<div class="col-12">
		<label for="delivery-contactaddress" class="form-label">連絡先住所</label>
		<input type="text" class="form-control" id="delivery-contactaddress" aria-describedby="" value="" name="delivery-contactaddress">
	</div>
	<div class="col-12">
		<label for="delivery-rule" class="form-label">納品先別規定</label>
		<input type="text" class="form-control" id="delivery-rule" aria-describedby="" value="" name="delivery-rule">
 	</div>
	 <div class="col-12">
		<label for="delivery-caution" class="form-label">納品先別注意事項</label>
  		<textarea class="form-control" id="delivery-caution" rows="3" name="delivery-caution"></textarea>
 	</div>
</form>
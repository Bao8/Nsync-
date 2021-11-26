<form class="row g-3">
	<div class="col-md-1">
		<button type="submit" class="btn btn-primary">更新</button>
	</div>
	<div class="col-md-1" style="padding-left:0;">
		<input type="reset" class="btn btn-warning" value="取消">
	</div>	
	<div class="w-100"></div>
	<h1 class="col-12">素材管理</h1>
	<div class="col-md-6">
    	<label for="draftdate" class="form-label">入稿日</label>
    	<input type="date" class="form-control" id="draftdate" aria-describedby="" value="">
 	</div>
	 <div class="col-md-6">
    	<label for="returndate" class="form-label">返却日</label>
    	<input type="date" class="form-control" id="returndate" aria-describedby="" value="">
 	</div>
	<div class="col-12">
		<label for="originalformat" class="form-label">素材種別</label>
		<input type="text" class="form-control" id="originalformat" aria-describedby="" value="">
	</div>
	<div class="col-12">
		<label for="attached" class="form-label">付属物</label>
		<input type="text" class="form-control" id="attached" aria-describedby="" value="">
	</div>
	<div class="col-12">
		<label for="storagelocation" class="form-label">保管場所</label>
		<input type="text" class="form-control" id="storagelocation" aria-describedby="" value="">
	</div>
	<div class="col-12">
		<label for="storagelocation" class="form-label">返却先住所</label>
		<input type="text" class="form-control" id="storagelocation" aria-describedby="" value="">
	</div>
	<div class="col-md-6">
		<label for="tracking" class="form-label">伝票番号</label>
		<input type="text" class="form-control" id="tracking" aria-describedby="" value="">
	</div>
	<div class="w-100"></div>
	<div class="col-12">
		<a href="" class="form-label">返却書リンク</a>
	</div>
	<div class="w-100"></div>
	<h1 class="col-12">納品管理</h1>
	<div class="col-md-4">
    	<label for="deliverydate" class="form-label">納品日</label>
    	<input type="date" class="form-control" id="deliverydate" aria-describedby="" value="">
 	</div>
	 <div class="w-100"></div>
	 <div class="col-12">
    	<label for="deliverydestination" class="form-label">納品先</label>
    	<input type="text" class="form-control" id="deliverydestination" aria-describedby="" value="">
 	</div>
	 <div class="col-12">
    	<label for="deliverydestination" class="form-label">納品方法</label>
    	<input type="text" class="form-control" id="deliverydestination" aria-describedby="" value="">
 	</div>
	<div class="col-md-4">
		<label for="matter" class="form-label">納品形式</label>
		<select id="matter" class="form-select">
			<option selected>mov</option>
			<option>mpeg</option>
		</select>
	</div>
	<div class="col-12">
		<label for="matter" class="form-label">納品項目</label>
		<div class="w-100"></div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="checkbox" id="deliveryitem1">
			<label class="form-check-label" for="deliveryitem1">動画</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="checkbox" id="deliveryitem2">
			<label class="form-check-label" for="deliveryitem2">サムネイル</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="checkbox" id="deliveryitem3">
			<label class="form-check-label" for="deliveryitem3">メタ</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="checkbox" id="deliveryitem4">
			<label class="form-check-label" for="deliveryitem4">AW</label>
		</div>
	</div>
	<div class="col-12">
		<a href="" class="form-label">納品書リンク</a>
	</div>
	<div class="col-md-4">
		<label for="responsibleperson" class="form-label">先方担当者</label>
		<input type="text" class="form-control" id="responsibleperson" aria-describedby="" value="">
	</div>
	<div class="col-md-4">
		<label for="contactnumber" class="form-label">電話番号</label>
		<input type="tel" class="form-control" id="contactnumber" aria-describedby="" value="">
	</div>
	<div class="col-md-4">
		<label for="contactemail" class="form-label">E-Mail</label>
		<input type="email" class="form-control" id="contactemail" aria-describedby="" value="">
	</div>
	<div class="col-12">
		<label for="contactaddress" class="form-label">連絡先住所</label>
		<input type="text" class="form-control" id="contactaddress" aria-describedby="" value="">
	</div>
	<div class="col-12">
		<label for="deliveryrule" class="form-label">納品先別規定</label>
		<input type="text" class="form-control" id="deliveryrule" aria-describedby="" value="">
 	</div>
	 <div class="col-12">
		<label for="deliverycaution" class="form-label">納品先別注意事項</label>
  		<textarea class="form-control" id="deliverycaution" rows="3"></textarea>
 	</div>
</form>
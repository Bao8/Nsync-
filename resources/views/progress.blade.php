<form class="row g-3">
	<div class="col-md-2">
		<button type="submit" class="btn btn-primary">更新</button>
	</div>
	<input type="hidden" value="{{ $content->id }}" name="id">
	<div class="col-md-12">
		<label for="check-operate" class="form-label">作業指示</label>
		<textarea class="form-control" id="check-operate" rows="3" name="check_operate"></textarea>
	</div>
	<div class="w-100"></div>
	<div class="col-md-12">
		<label for="check-edit" class="form-label">編集内容</label>
		<input type="text" class="form-control" id="check-edit" aria-describedby="" value="" name="check_edit">
	</div>
  	<div class="col-md-12">
		<label for="check-linking" class="form-label">紐づけTC</label>
		<input type="text" class="form-control" id="check-linking" aria-describedby="" value="" name="check_linking">
	</div>

	<div class="col-md-12">
		<label for="check-editer" class="form-label">担当者</label>
		<select id="check-editer" class="form-select" name="check_editer">
			<option selected>選択</option>
			<option value="sekine">関根</option>
			<option value="katsunaga">勝永</option>
			<option value="okano">岡野</option>
			<option value="satou">佐藤</option>
			<option value="yagasaki">矢ヶ崎</option>
			<option value="son">孫</option>
			<option value="suzuki">鈴木</option>
			<option value="ishii">石井</option>
			<option value="rin">リン</option>
		</select>
	</div>
	<h4 class="pt-4">チェック1</h4>
	<!-- 例 -->
	<!-- <div class="col-md-12">
		<input type="checkbox" id="anId1" class="wskCheckbox">
		<label class="wskLabel" for="anId1">Check me out</label>
	</div>
	<div class="col-md-12 pt-0">
		<input type="checkbox" id="anId2" class="wskCheckbox" />
		<label class="wskLabel" for="anId2">I look and feel like Google Material</label>
	</div>
	<div class="col-md-12 pt-0">
		<input type="checkbox" id="anId3" class="wskCheckbox" />
		<label class="wskLabel" for="anId3">But I work even in older browsers</label>
	</div> -->
	<div class="col-md-12">
		<label for="check1-mediainfo" class="form-label">Mediainfo</label>
		<input type="text" class="form-control" id="check1-mediainfo" aria-describedby="" value="" name="check1_mediainfo">
	</div>
	<div class="col-md-12">
    	<label for="check1-sheet" class="form-label">スプレッドシート解像度</label>
    	<input type="text" class="form-control" id="check1-sheet" aria-describedby="" value="" name="check1_sheet">
 	</div>
	<div class="col-md-12">
    	<label for="check1-file" class="form-label">ファイル名確認</label>
    	<input type="text" class="form-control" id="check1-file" aria-describedby="" value="" name="check1_file">
 	</div>
	<div class="col-md-12">
    	<label for="check1-episode" class="form-label">話数確認</label>
    	<input type="text" class="form-control" id="check1-episde" aria-describedby="" value="" name="check1_episde">
 	</div>
	<div class="col-md-12">
    	<label for="check1-movienoize" class="form-label">映像ノイズ</label>
    	<input type="text" class="form-control" id="check1-movienoize" aria-describedby="" value="" name="check1_movienoize">
 	</div>
	<div class="col-md-12">
    	<label for="check1-editpoint" class="form-label">編集箇所</label>
    	<input type="text" class="form-control" id="check1-editpoint" aria-describedby="" value="" name="check1_editpoint">
 	</div>
	<div class="col-md-12">
    	<label for="check1-angleofview" class="form-label">解像度</label>
    	<input type="text" class="form-control" id="check1-angleofview" aria-describedby="" value="" name="check1_angleofview">
 	</div>
	<div class="col-md-12">
    	<label for="check1-flamerate" class="form-label">フレームレート</label>
    	<input type="text" class="form-control" id="check-flamerate" aria-describedby="" value="" name="check_flamerate">
 	</div>
	<div class="col-md-12">
    	<label for="check1-submiss" class="form-label">字幕ズレ</label>
    	<input type="text" class="form-control" id="check1-submiss" aria-describedby="" value="" name="check1_submiss">
 	</div>
	<div class="col-md-12">
    	<label for="check1-field" class="form-label">フィールド</label>
    	<input type="text" class="form-control" id="check1-field" aria-describedby="" value="" name="check1_field">
 	</div>
	<div class="col-md-12">
    	<label for="check1-audionoize" class="form-label">音声ノイズ</label>
    	<input type="text" class="form-control" id="check1-audionoize" aria-describedby="" value="" name="check1_audionoize">
 	</div>
	<div class="col-md-12">
    	<label for="check1-audiomiss" class="form-label">音声ズレ</label>
    	<input type="text" class="form-control" id="check1-audiomiss" aria-describedby="" value="" name="check1_audiomiss">
 	</div>
	<div class="col-md-12">
    	<label for="check1-audioasign" class="form-label">音声アサイン</label>
    	<input type="text" class="form-control" id="check1-audioasign" aria-describedby="" value="" name="check1_audioasign">
 	</div>
	<div class="col-md-12">
    	<label for="check1-language" class="form-label">言語</label>
    	<input type="text" class="form-control" id="check1-language" aria-describedby="" value="" name="check1_language">
 	</div>
	 <div class="col-md-12">
		<label for="check1-editer" class="form-label">担当者</label>
		<select id="check1-editer" class="form-select" name="check1-_editer">
			<option selected>{{ $content->check1_editer }}</option>
			<option value="関根">関根</option>
			<option value="勝永">勝永</option>
			<option value="岡野">岡野</option>
			<option value="佐藤">佐藤</option>
			<option value="矢ヶ崎">矢ヶ崎</option>
			<option value="孫">孫</option>
			<option value="鈴木">鈴木</option>
			<option value="石井">石井</option>
		</select>
	</div>
	<h4 class="pt-4">チェック2</h4>
	<div class="col-md-12">
		<label for="check2-mediainfo" class="form-label">Mediainfo</label>
		<input type="text" class="form-control" id="check2-mediainfo" aria-describedby="" value="" name="check2_mediainfo">
	</div>
	<div class="col-md-12">
    	<label for="check2-file" class="form-label">ファイル名確認</label>
    	<input type="text" class="form-control" id="check2-file" aria-describedby="" value="" name="check2_file">
 	</div>
	<div class="col-md-12">
    	<label for="check2-episode" class="form-label">話数確認</label>
    	<input type="text" class="form-control" id="check2-episode" aria-describedby="" value="{{ $content->check2_episode }}" name="check2_episode">
 	</div>
	<div class="col-md-12">
		<label for="check2-editer" class="form-label">担当者</label>
		<select id="check2-editer" class="form-select" name="check2_editer">
		<option selected>{{ $content->check2_editer }}</option>
			<option value="関根">関根</option>
			<option value="勝永">勝永</option>
			<option value="岡野">岡野</option>
			<option value="佐藤">佐藤</option>
			<option value="矢ヶ崎">矢ヶ崎</option>
			<option value="孫">孫</option>
			<option value="鈴木">鈴木</option>
			<option value="石井">石井</option>
		</select>
	</div>
	<h4 class="pt-4">納品</h4>
	<div class="col-md-12">
    	<label for="check3-comdate" class="form-label">納品完了日</label>
    	<input type="date" class="form-control" id="check3-comdate" aria-describedby="" value="{{ $content->check3_comdate }}" name="check3_comdate">
 	</div>
	<div class="col-md-12">
		<label for="check3-editer" class="form-label">担当者</label>
		<select id="check3-editer" class="form-select" name="check3_editer">
		<option selected>{{ $content->check3_editer }}</option>
			<option value="関根">関根</option>
			<option value="勝永">勝永</option>
			<option value="岡野">岡野</option>
			<option value="佐藤">佐藤</option>
			<option value="矢ヶ崎">矢ヶ崎</option>
			<option value="孫">孫</option>
			<option value="鈴木">鈴木</option>
			<option value="石井">石井</option>
		</select>
	</div>
</form>
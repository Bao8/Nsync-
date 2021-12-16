<form class="row g-3" action="/upload" enctype="multipart/form-data" method="post">
    @csrf

    <div class="col-md-2">
		<button type="submit" class="btn btn-primary">更新</button>
	</div>
	<div class="col-md-1" style="padding-left:0;">
		<button type="reset" class="btn btn-warning">取消</button>
	</div>

    <input class="row m-1" type="file" name="image">
    <input class="btn btn-success" type="submit" value="送信">
 
    <div class="w-100"></div>

    <div class="col-md-6">
		<label for="thumb-category" class="form-label">種類</label>
		<select id="thumb-category" class="form-select" name="thumb-category">
			<option value="bamen" selected>場面写</option>
			<option value="logo">ロゴ</option>
			<option value="keyvisual">キービジュアル</option>
		</select>
	</div>    
    <div class="col-md-6">
		<label for="thumb-copyright" class="form-label">コピーライト</label>		
		<input type="text" class="form-control" id="thumb-copyright" aria-describedby="" value="" name="thumb-copyright">		
	</div>
    <div class="col-12">
		<label for="thumb-filename" class="form-label">ファイル名</label>		
		<input type="text" class="form-control" id="thumb-filename" aria-describedby="" value="" name="thumb-filename">		
	</div>
    <div class="col-md-6">
		<label for="thumb-delivery" class="form-label">納品先</label>		
		<input type="text" class="form-control" id="thumb-delivery" aria-describedby="" value="" name="thumb-delivery">		
	</div>
    <div class="col-md-6">
		<label for="thumb-method" class="form-label">使用方法</label>		
		<input type="text" class="form-control" id="thumb-method" aria-describedby="" value="" name="thumb-method">		
	</div>

    <img class="float-md-end col-md-6" src=" {{ asset('storage/thumb/test.png')}}">
    <div class="col-md-6">
		<label for="thumb-resolution" class="form-label">解像度：</label>
		<label for="thumb-resolution" class="form-label">1920 x 1080</label>
        <br>
        <label for="thumb-size" class="form-label">ファイルサイズ：</label>
		<label for="thumb-size" class="form-label">100 kbps</label>
        <br>
        <label for="thumb-size" class="form-label">アスペクト比：</label>
		<label for="thumb-size" class="form-label">16 : 9</label>
	</div>

    <div class="col-md-6">
		<label for="thumb-category" class="form-label">種類</label>
		<select id="thumb-category" class="form-select" name="thumb-category">
			<option value="bamen" selected>場面写</option>
			<option value="logo">ロゴ</option>
			<option value="keyvisual">キービジュアル</option>
		</select>
	</div>    
    <div class="col-md-6">
		<label for="thumb-copyright" class="form-label">コピーライト</label>		
		<input type="text" class="form-control" id="thumb-copyright" aria-describedby="" value="" name="thumb-copyright">		
	</div>
    <div class="col-12">
		<label for="thumb-filename" class="form-label">ファイル名</label>		
		<input type="text" class="form-control" id="thumb-filename" aria-describedby="" value="" name="thumb-filename">		
	</div>
    <div class="col-md-6">
		<label for="thumb-delivery" class="form-label">納品先</label>		
		<input type="text" class="form-control" id="thumb-delivery" aria-describedby="" value="" name="thumb-delivery">		
	</div>
    <div class="col-md-6">
		<label for="thumb-method" class="form-label">使用方法</label>		
		<input type="text" class="form-control" id="thumb-method" aria-describedby="" value="" name="thumb-method">		
	</div>

    <img class="float-md-end col-md-6" src=" {{ asset('storage/thumb/test.png')}}">
    <div class="col-md-6">
		<label for="thumb-resolution" class="form-label">解像度：</label>
		<label for="thumb-resolution" class="form-label">1920 x 1080</label>
        <br>
        <label for="thumb-size" class="form-label">ファイルサイズ：</label>
		<label for="thumb-size" class="form-label">100 kbps</label>
        <br>
        <label for="thumb-size" class="form-label">アスペクト比：</label>
		<label for="thumb-size" class="form-label">16 : 9</label>
	</div>
</form>
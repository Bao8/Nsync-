<form class="row g-3" action="/upload" enctype="multipart/form-data" method="post">
    @csrf
    <input class="m-1" type="file" name="image">
    <input class="btn btn-success" type="submit" value="送信">

	<img class="col-12" src=" {{ asset('storage/thumb/img.jpg')}}">
</form>
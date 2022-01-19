<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="Bootgrid のデモでーす。">
<title>Bootgrid - jQuery Plugin Demo</title>
	  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard-sideber.css') }}">
	<link href="{{ asset('css/jquery.bootgrid.css') }}" rel="stylesheet" />
</head>
<body>
<h1>Bootgrid のデモ。</h1>
 
<table id="grid-basic" class="table table-condensed table-hover table-striped">
<thead>
  <tr>
    <th data-column-id="id" data-type="numeric">ID</th>
    <th data-column-id="namae">名前</th>
    <th data-column-id="received" data-order="desc">メール</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>1</td>
    <td>たろう</td>
    <td>taro@gmail.co</td>
  </tr>
  <tr>
    <td>2</td>
    <td>じろう</td>
    <td>jiro@gmail.co</td>
  </tr>
  <tr>
    <td>3</td>
    <td>さぶろう</td>
    <td>36@gmail.co</td>
  </tr>
  <tr>
    <td>4</td>
    <td>たけし</td>
    <td>take@gmail.co</td>
  </tr>
  <tr>
    <td>5</td>
    <td>佐藤</td>
    <td>suger@icloud.com</td>
  </tr>
  <tr>
    <td>6</td>
    <td>高橋</td>
    <td>taka@gmail.co</td>
  </tr>
  <tr>
    <td>7</td>
    <td>伊藤</td>
    <td>i10@gmail.co</td>
  </tr>
  <tr>
    <td>8</td>
    <td>渡辺</td>
    <td>watanabe@gmail.co</td>
  </tr>
  <tr>
    <td>8</td>
    <td>渡辺</td>
    <td>watanabe@gmail.co</td>
  </tr>
  <tr>
    <td>9</td>
    <td>小林</td>
    <td>koba@gmail.co</td>
  </tr>
  <tr>
    <td>10</td>
    <td>吉田</td>
    <td>yosi@gmail.co</td>
  </tr>
  <tr>
    <td>11</td>
    <td>松本</td>
    <td>mat@gmail.co</td>
  </tr>
  <tr>
    <td>13</td>
    <td>佐々木</td>
    <td>s@gmail.co</td>
  </tr>
</tbody>
</table>
 
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.js"></script>
<script src="{{ asset('js/jquery.bootgrid.js') }}"></script>
<script>
$(function() {
  $("#grid-basic").bootgrid();
});
</script>
</body>
</html>

<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Nsync Beta</title>
	  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  </head>
  <body >
	<nav>
		<div class="row">
		<ul class="menu navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
			<a class="navbar-brand col-sm-3 col-md-2 mr-0 href="#">Nsync Beta</a>
		  <div class="col-md-5 tab p-0">
		  <li><a class="nav-link border" href="#">銀の匙　Silver Spoon</a>
		  </li>
		  <li><a class="nav-link border" href="#">VFJPA10000063894</a>
		  </div>
		  <form class="col-md-3 d-flex">
		    <input class="form-control form-control-dark w-100 mx-2" type="text" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success" type="submit">Search</button>
		  </form>
			<p class="col-md-2 username m-0">ユーザーネーム</p>
		</ul> 
		</div>
		
    </nav>

    <div class="container-fluid">
      <div class="row">
        @extends('layouts.dashboad_sideber_layout')
		<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        @yield('content')
		</main>
      </div>
    </div>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    {{--
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
	  
    </script>
    --}}


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
      window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    {{--
    <script src="/docs/4.3/assets/js/vendor/anchor.min.js"></script>
    <script src="/docs/4.3/assets/js/vendor/clipboard.min.js"></script>
    <script src="/docs/4.3/assets/js/vendor/bs-custom-file-input.min.js"></script>
    <script src="/docs/4.3/assets/js/src/application.js"></script>
    <script src="/docs/4.3/assets/js/src/search.js"></script>
    <script src="/docs/4.3/assets/js/src/ie-emulation-modes-warning.js"></script>
    --}}
  </body>
</html>

<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Nsync Beta</title>
	  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
  </head>
  <body >
	<nav>
		<ul class="menu navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
			<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Nsync Beta</a>
		  <li><a class="nav-link" href="#">Menu A </a>
		  </li>
		  <li><a class="nav-link" href="#">Menu B </a>
		  </li>
		  <li><a class="nav-link" href="#">Menu C </a>
		  </li>
		  <li><a class="nav-link" href="#">Menu D </a>	
		  </li>
		  <li><a class="nav-link" href="#">Menu D </a>	
		  </li>
		  <li><a class="nav-link" href="#">Menu D </a>	
		  </li>
		  <li>
			<a class="nav-link-a" href="#">Use Name</a>
		  </li>
		</ul> 
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="/">
                  <span data-feather="home"></span>
                  ホーム <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="dashboad_restore">
                  <span data-feather="file"></span>
                  リストア依頼
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="dashboad_sozai">
                  <span data-feather="shopping-cart"></span>
                  素材管理
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="dashboad_meta">
                  <span data-feather="users"></span>
                  メタ管理
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="dashboad_others">
                  <span data-feather="bar-chart-2"></span>
                  その他
                </a>
              </li>
            </ul>
          </div>
        </nav>

        @yield('content')
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

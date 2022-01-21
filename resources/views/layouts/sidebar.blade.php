<nav class="col-md-2 d-none d-md-block bg-light sidebar">
	<div class="sidebar-sticky">
	<ul class="nav flex-column">
		<li class="nav-item">
			<a class="nav-link" href="">
				<span data-feather="home"></span>
				CMS
				<span class="sr-only">(current)</span>
			</a>
			<ul class="nav-sub">
			@guest
				<li>
					<a class="nav-link" href="{{ url('/login') }}">トップリスト</a>
				</li>
				<li>
					<a class="nav-link" href="{{ url('/login') }}">今日の納品</a>
				</li>
				<li>
					<a class="nav-link" href="{{ url('/login') }}">詳細検索</a>
				</li>
				<li>
					<a class="nav-link" href="{{ url('/login') }}">作品登録</a>
				</li>
				{{--
				<li>
					<a class="nav-link" href="{{ url('/login') }}">素材管理</a>
				</li>
				<li>
					<a class="nav-link" href="{{ url('/login') }}">メタ管理</a>
				</li>
				<li>
					<a class="nav-link" href="{{ url('/login') }}">資料データ管理</a>
				</li>
				--}}
            @else
			<li>
					<a class="nav-link" href="{{ url('/home') }}">トップリスト</a>
				</li>
				<li>
					<a class="nav-link" href="{{ url('/home') }}">今日の納品</a>
				</li>
				<li>
					<a class="nav-link" href="{{ url('/home') }}">詳細検索</a>
				</li>
				<li>
					<a class="nav-link" href="{{ url('create_contents') }}">作品登録</a>
				</li>
				{{--
				<li>
					<a class="nav-link" href="{{ url('/home') }}">素材管理</a>
				</li>
				<li>
					<a class="nav-link" href="{{ url('/home') }}">メタ管理</a>
				</li>
				<li>
					<a class="nav-link" href="{{ url('/home') }}">資料データ管理</a>
				</li>
				--}}
            @endguest
				
			</ul>
		</li>
		<a class="nav-blank"></a>
		<li class="nav-item">
			<a class="nav-link" href="">
				<span data-feather="home"></span>
				LTO
				<span class="sr-only">(current)</span>
			</a>
			<ul class="nav-sub">
				<li>
					<a class="nav-link" href="home">保存依頼</a>
				</li>
				<li>
					<a class="nav-link" href="home">リストア依頼</a>
				</li>				
			</ul>
		</li>
		<a class="nav-blank"></a>
		<li>
			<a class="nav-link" href="#">
		  	なゆたクラウド<span data-feather="shopping-cart"></span>
			</a>
		</li>
		<li>
			<a class="nav-link" href="#">
			ポータルサイト<span data-feather="users"></span>
			</a>
		</li>
	</ul>
  	</div>
</nav>
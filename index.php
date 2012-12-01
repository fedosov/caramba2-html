<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>CarambaTV</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="/css/normalize.min.css">
	<link rel="stylesheet" href="/css/main.css">
	<link rel="stylesheet" href="/fonts/OpenSans.css">
	<link rel="stylesheet" href="/fonts/OpenSans-Cond.css">

	<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body class="">
	<div class="panel-main">
		<a href="/" class="logo"></a>
		<p style="text-align: center;"><a href="#" id="debug-reflow">REFLOW</a></p>
	</div>

	<div class="header">
		<div class="inner">
			<ul class="menu">
				<li><a href="#">Топ</a></li>
				<li><a href="#">Магазин</a></li>
				<li><a href="#">Ололо</a></li>
				<li><a href="#">Ищем таланты</a></li>
				<li><a href="#">Контакты</a></li>
			</ul>
			<ul class="user">
				<li><a href="#">Войти</a></li>
				<li><a href="#">Зарегистрироваться</a></li>
			</ul>
		</div>
	</div>

	<div class="content">
		<div class="page page-right">
			<div class="page page-left">
				<div class="inner page-left-inner">
					2<br>
					<img src="/i/header-user-d.gif" alt="" width="100px" height="1000px"><br>
					2
				</div>
			</div>
			<div class="banner-header" style="background: #000;"><a href="#" style="background-image: url('/i/~tmp.banner-header.jpg')"></a></div>
			<div class="inner page-right-inner">
				<ul class="items">
					<li class="box size-big">
						<a href="#">
							<img src="/i/~tmp.page-right-item-big.jpg" alt="">
							<span class="play"></span>
							<span class="title">Рэй RWJ — У песика есть суперсила!</span>
							<span class="desc">Кого бы Вы добавили в хит-парад? Может быть знаете то, чего не знают следственные органы? Или знают, но стесняются</span>
						</a>
					</li>
					<?php for ($i = 0; $i < 6; $i++): ?>
					<li class="box size-small">
						<a href="#">
							<img src="/i/~tmp.page-right-item-small.jpg" alt="">
							<span class="play"></span>
							<span class="title">Картавый Adidas</span>
						</a>
					</li>
					<?php endfor; ?>
					<?php for ($i = 0; $i < 20; $i++): ?>
					<li class="box size-medium">
						<a href="#">
							<img src="/i/~tmp.page-right-item-medium.jpg" alt="">
							<span class="play"></span>
							<span class="title">Карамба VS Ларри Кинг – кто кого?</span>
						</a>
					</li>
					<?php endfor; ?>
				</ul>
			</div>
		</div>
	</div>

	<div class="footer">
		<div class="filter">
			<div class="inner">
				<ul class="filter-list filter-type">
					<li class="active"><a href="#">Свежак</a></li>
					<li><a href="#">Популярные</a></li>
					<li><a href="#">Комментарии</a></li>
				</ul>
				<ul class="filter-list filter-when">
					<li class="active"><a href="#">сегодня</a></li>
					<li><a href="#">неделя</a></li>
					<li><a href="#">месяц</a></li>
					<li><a href="#">все время</a></li>
				</ul>
			</div>
		</div>
		<ul class="items">
			<?php for ($i = 0; $i < 30; $i++): ?>
			<li><a href="#"><img src="/i/~tmp.footer-item.jpg" width="228" height="124" alt=""><span class="play"></span><span class="title">Хитрый кот</span></a></li>
			<?php endfor; ?>
		</ul>
	</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.3.min.js"><\/script>')</script>
	<script src="/js/vendor/jquery.masonry.min.js"></script>
	<script src="/js/main.js"></script>
</body>
</html>

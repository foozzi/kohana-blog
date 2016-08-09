<!doctype html>
<html class="no-js" lang="ru">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>default title</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta content="telephone=no" name="format-detection">
        <!-- This make sence for mobile browsers. It means, that content has been optimized for mobile browsers -->
        <meta name="HandheldFriendly" content="true">


        <!--[if (gt IE 9)|!(IE)]><!-->
        <link href='https://fonts.googleapis.com/css?family=Lato:300,300italic,400italic,700,700italic,900,900italic,100,100italic,400' rel='stylesheet' type='text/css'>
        <link href="./assets/css/main.css" rel="stylesheet" type="text/css"><!--<![endif]-->

            <meta property="og:title" content="" />
            <meta property="og:url" content="" />
            <meta property="og:description" content="" />
            <meta property="og:image" content="" />
            <meta property="og:image:type" content="image/jpeg" />
            <meta property="og:image:width" content="500" />
            <meta property="og:image:height" content="300" />
            <meta property="twitter:description" content="" />
            <link rel="image_src" href="" />

        <link rel="icon" type="image/x-icon" href="./favicon.ico">
        <script>
            (function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)
        </script>

    </head>

    <body class="page">


        <!-- <section class="page__wrapper"> -->

            <!-- Include your modules here -->
            <header>
            	<div class="header-top">
            	 	<div class="inner">
            			<div class="contact-phones">
            				<ul>
            					<li><a href="tel:+38 (067) 000-00-00">+38 (067) 000-00-00</a></li>
            					<li><a href="tel:+38 (067) 000-00-00">+38 (067) 000-00-00</a></li>
            				</ul>
            			</div>
            			<div class="language-switcher">
            				<ul>
            					<li><a class="active" href="#!"><img src="./assets/img/general/ukraine.png" alt=""></a></li>
            					<li><a href="#!"><img src="./assets/img/general/russia.png" alt=""></a></li>
            					<li><a href="#!"><img src="./assets/img/general/eng.png" alt=""></a></li>
            				</ul>
            			</div>
            		</div>
            	</div>
            	<div class="header-bottom">
            		<div class="inner">
            			<div class="logo">
            				<a href="#!"><img src="./assets/img/general/logo-main.png" alt="logo"></a>
            			</div>
            			<div class="menu sidenav" id="mySidenav">
            			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            				<nav>
            					<ul>
            						<li><a href="#!">Тендеры</a></li>
            						<li><a href="#!">информация</a></li>
            						<li><a href="#!">о нас</a></li>
            						<li><a href="#!">новости</a></li>
            						<li><a href="#!">Контакты</a></li>
            					</ul>
            				</nav>
            			</div>
            			<span class="openMenu" style="font-size:30px;cursor:pointer" onclick="openNav()">☰ open</span>
            			<div class="cabinet">
            				<div class="btn-cabinet">
            					<a id="auth-button" class="btn-red" href="#!">личный кабинет</a>
            				</div>
            			</div>
            		</div>
            	</div>
            </header>            <div class="breadcrumbs">
            	<div class="inner">
            		<ul>
            			<li><a href="#">Главная /</a></li>
            			<li><a href="#"> Информация</a></li>
            		</ul>
            	</div>
            </div>
            <section class="news">
            	<div class="inner">
            		<div class="news-block">



<?php foreach($posts as $key => $val):?>

            			<div class="simple-news">
            				<div class="news-img">
            					<img src="./assets/img/general/news.jpg" alt="">
            				</div>
            				<div class="news-head">
            					<?=htmlspecialchars($val->title)?>
            				</div>
            				<div class="news-links">
            					<ul>
            						<li><a href="#"><?=htmlspecialchars(ODM::factory('category')->get($val->category_id)->title)?></a></li>
            						<li><a href="#"><?=date('d.m.Y', $val->date)?></a></li>
            						<li><a href="#">0 Комментариев</a></li>
            					</ul>
            					<div class="share">
            						<span>Поделиться:</span>
            						<ul>
            							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            							<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            						</ul>
            					</div>
            				</div>
            				<div class="news-text">
                    <?= htmlspecialchars($val->short_content)?>
                    </div>
            				<div class="news-btn">
            					<a href="#" class="btn-red">читать далее</a>
            				</div>
            			</div>


<?php endforeach; ?>









            			<div class="simple-news" style="display:none;">
            				<div class="news-img">
            					<img src="./assets/img/general/news1.jpg" alt="">
            				</div>
            				<div class="news-head">
            					Несколько подходящих инструментов для успешного тайм-менеджмента
            				</div>
            				<div class="news-links">
            					<ul>
            						<li><a href="#">Коучинг</a></li>
            						<li><a href="#">14 Июня 2016</a></li>
            						<li><a href="#">0 Комментариев</a></li>
            					</ul>
            					<div class="share">
            						<span>Поделиться:</span>
            						<ul>
            							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            							<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            						</ul>
            					</div>
            				</div>
            				<div class="news-text">
            					Менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что
            				</div>
            				<div class="news-btn">
            					<a href="#" class="btn-red">читать далее</a>
            				</div>
            			</div>
            			<div class="simple-news" style="display:none;">
            				<div class="news-img">
            					<img src="./assets/img/general/news2.jpg" alt="">
            				</div>
            				<div class="news-head">
            					Несколько подходящих инструментов для успешного тайм-менеджмента
            				</div>
            				<div class="news-links">
            					<ul>
            						<li><a href="#">Коучинг</a></li>
            						<li><a href="#">14 Июня 2016</a></li>
            						<li><a href="#">0 Комментариев</a></li>
            					</ul>
            					<div class="share">
            						<span>Поделиться:</span>
            						<ul>
            							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            							<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            						</ul>
            					</div>
            				</div>
            				<div class="news-text">
            					Менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что
            				</div>
            				<div class="news-btn">
            					<a href="#" class="btn-red">читать далее</a>
            				</div>
            			</div>
            			<div class="simple-news" style="display:none;">
            				<div class="news-img">
            					<img src="./assets/img/general/news3.jpg" alt="">
            				</div>
            				<div class="news-head">
            					Несколько подходящих инструментов для успешного тайм-менеджмента
            				</div>
            				<div class="news-links">
            					<ul>
            						<li><a href="#">Коучинг</a></li>
            						<li><a href="#">14 Июня 2016</a></li>
            						<li><a href="#">0 Комментариев</a></li>
            					</ul>
            					<div class="share">
            						<span>Поделиться:</span>
            						<ul>
            							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            							<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            						</ul>
            					</div>
            				</div>
            				<div class="news-text">
            					Менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что
            				</div>
            				<div class="news-btn">
            					<a href="#" class="btn-red">читать далее</a>
            				</div>
            			</div>
            			<div class="simple-news" style="display:none;">
            				<div class="news-img">
            					<img src="./assets/img/general/news4.jpg" alt="">
            				</div>
            				<div class="news-head">
            					Несколько подходящих инструментов для успешного тайм-менеджмента
            				</div>
            				<div class="news-links">
            					<ul>
            						<li><a href="#">Коучинг</a></li>
            						<li><a href="#">14 Июня 2016</a></li>
            						<li><a href="#">0 Комментариев</a></li>
            					</ul>
            					<div class="share">
            						<span>Поделиться:</span>
            						<ul>
            							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            							<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            						</ul>
            					</div>
            				</div>
            				<div class="news-text">
            					Менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что
            				</div>
            				<div class="news-btn">
            					<a href="#" class="btn-red">читать далее</a>
            				</div>
            			</div>
            			<div class="simple-news" style="display:none;">
            				<div class="news-img">
            					<img src="./assets/img/general/news5.jpg" alt="">
            				</div>
            				<div class="news-head">
            					Несколько подходящих инструментов для успешного тайм-менеджмента
            				</div>
            				<div class="news-links">
            					<ul>
            						<li><a href="#">Коучинг</a></li>
            						<li><a href="#">14 Июня 2016</a></li>
            						<li><a href="#">0 Комментариев</a></li>
            					</ul>
            					<div class="share">
            						<span>Поделиться:</span>
            						<ul>
            							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            							<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            						</ul>
            					</div>
            				</div>
            				<div class="news-text">
            					Менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что
            				</div>
            				<div class="news-btn">
            					<a href="#" class="btn-red">читать далее</a>
            				</div>
            			</div>
            		</div>
            		<div class="news-sidebar">
            			<div class="news-categories side-block">
            				<h3>категории</h3>
            				<ul class="side-list">
            					<li><a href="#"> Коучинг <span>(3)</span></a></li>
            					<li><a href="#">Команда <span>(7)</span></a></li>
            					<li><a href="#">Наши будни <span>(5)</span></a></li>
            					<li><a href="#">Статьи <span>(46)</span></a></li>
            					<li><a href="#">Карьера <span>(2)</span></a></li>
            					<li><a href="#">Встречи <span>(10)</span></a></li>
            					<li><a href="#">Конференции <span>(8)</span></a></li>
            				</ul>
            			</div>
            			<div class="news-archive side-block">
            			 	<h3>архив</h3>
            				<ul class="side-list">
            					<li><a href="#">Июнь 2016 <span>(3)</span></a></li>
            					<li><a href="#">Май 2016 <span>(7)</span></a></li>
            					<li><a href="#">Апрель 2016 <span>(5)</span></a></li>
            					<li><a href="#">Март 2016 <span>(46)</span></a></li>
            					<li><a href="#">Февраль 2016 <span>(2)</span></a></li>
            					<li><a href="#">Январь 2016 <span>(10)</span></a></li>
            					<li><a href="#">2015 <span>(8)</span></a></li>
            				</ul>
            			</div>
            			<div class="last-news side-block">
            				<h3>Недавнее</h3>
            				<div class="last-simple-news" style="display:none;">
            					<div class="last-text"><a href="#">Недавно в наш коллектив влился еще один программист!</a></div>
            					<div class="last-links">
            						<ul>
            							<li><a href="#">2 Июня 2016</a></li>
            							<li><a href="#">0 Комментариев</a></li>
            						</ul>
            					</div>
            				</div>

            				<div class="last-simple-news">
            					<div class="last-text"><a href="#">Недавно в наш коллектив влился еще один программист!</a></div>
            					<div class="last-links">
            						<ul>
            							<li><a href="#">2 Июня 2016</a></li>
            							<li><a href="#">0 Комментариев</a></li>
            						</ul>
            					</div>
            				</div>









            				<div class="last-simple-news">
            					<div class="last-text"><a href="#">Недавно в наш коллектив влился еще один программист!</a></div>
            					<div class="last-links">
            						<ul>
            							<li><a href="#">2 Июня 2016</a></li>
            							<li><a href="#">0 Комментариев</a></li>
            						</ul>
            					</div>
            				</div>
            				<div class="last-simple-news">
            					<div class="last-text"><a href="#">Недавно в наш коллектив влился еще один программист!</a></div>
            					<div class="last-links">
            						<ul>
            							<li><a href="#">2 Июня 2016</a></li>
            							<li><a href="#">0 Комментариев</a></li>
            						</ul>
            					</div>
            				</div>
            				<div class="last-simple-news">
            					<div class="last-text"><a href="#">Недавно в наш коллектив влился еще один программист!</a></div>
            					<div class="last-links">
            						<ul>
            							<li><a href="#">2 Июня 2016</a></li>
            							<li><a href="#">0 Комментариев</a></li>
            						</ul>
            					</div>
            				</div>
            			</div>
            		</div>
            	</div>
            </section>
            <div class="page__buffer"></div>

        <!-- </section> -->

        <footer class="page__footer">
            <footer>
            	<div class="footer-top">
            		<div class="inner">
            			<div class="footer-menu">
            				<nav>
            					<ul>
            						<li><a href="#">Тендеры</a></li>
            						<li><a href="#">информация</a></li>
            						<li><a href="#">о нас</a></li>
            						<li><a href="#">новости</a></li>
            						<li><a href="#">Контакты</a></li>
            					</ul>
            				</nav>
            			</div>
            			<div class="footer-social">
            				<ul>
            					<li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            					<li><a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            					<li><a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            					<li><a class="google" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            				</ul>
            			</div>
            		</div>
            	</div>
            	<div class="footer-bottom">
            		<div class="inner">
            			<div class="footer-phones">
            				<ul>
            					<li><a href="tel:+38 (044) 000-00-00">+38 (044) 000-00-00</a></li>
            					<li><a href="tel:+38 (044) 000-00-00">+38 (044) 000-00-00</a></li>
            				</ul>
            			</div>
            			<div class="footer-emails">
            				<ul>
            					<li><a href="mailto:apuistudio@gmail.com">apuistudio@gmail.com</a></li>
            					<li><a href="mailto:apuistudio@gmail.com">apuistudio@gmail.com</a></li>
            				</ul>
            			</div>
            			<div class="footer-address">
            				<p>23423, Киев, Украина</p>
            				<p>ул. Жилянская, 101</p>
            			</div>
            		</div>
            	</div>
            	<div class="footer-copyright">
            		<div class="inner">
            			<div class="copyright">Copyright ©2016 EPU. All rights reserved.</div>
            			<div class="developer"><p>Created by</p> <a href="#"><img src="./assets/img/general/logo.png" alt=""></a></div>
            		</div>
            	</div>
            </footer>        </footer>




        <!-- Main scripts. You can replace it, but I recommend you to leave it here     -->
        <script src="/assets/js/main.js"></script>
    </body>

</html>

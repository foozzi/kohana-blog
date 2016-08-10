<?=View::factory('header')?>
            <section class="news">
            	<div class="inner">
            		<div class="news-block">



<?php foreach($posts as $key => $val):?>

            			<div class="simple-news">
            				<div class="news-img">
            						<a href="<?=ODM::factory('blog')->getLink($val)?>"><img src="./assets/img/general/news.jpg" alt=""></a>
            				</div>
            				<div class="news-head">
            					<a href="<?=ODM::factory('blog')->getLink($val)?>"><?=htmlspecialchars($val->title)?></a>
            				</div>
            				<div class="news-links">
            					<ul>
                        <?php $cat = ODM::factory('category')->get($val->category_id);?>
            						<li><a href="#"><?=($cat ? htmlspecialchars($cat->title) : __('Ошибка получения'))?></a></li>
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

<?=$pagination?>

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

<?=View::factory('footer')?>

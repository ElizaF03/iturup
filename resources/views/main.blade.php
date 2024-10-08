<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>На Итуруп!</title>
</head>
<link rel="stylesheet" href={{ asset('css/style.css') }}>

<body>
	<header class="header">
	<div class="header__wrapper">
		<div class="header__container ">
			<div class="header__top">
				<nav class="menu__body container">
					<div class="menu__item-dop  logo"> <a href="#" class="menu__link"><img class="menuClosed"
                                                                                           src="{{ asset('img/logo.svg') }}" alt=""></a>
					</div>
					<ul class="menu__list">
						<li class="menu__item"> <a data-goto=".attractions" href="#"
								class="menu__link menuLinks">Достопримечательности</a> </li>
						<li class="menu__item menu__point_small"> </li>
						<li class="menu__item"> <a data-goto=".tours" href="#" class="menu__link menuLinks">наши туры</a>
						</li>
						<li class="menu__item menu__point_large"> </li>
						<li class="menu__item menu__item_logo logo"> <a href="#" class="menu__logo"><img class="menuClosed"
                                                                                                         src="{{ asset('img/logo.svg') }}" alt=""></a>
						</li>
						<li class="menu__item menu__point_large"> </li>
						<li class="menu__item"> <a data-goto=".request" href="#" class="menu__link menuLinks">Забронировать
								тур</a> </li>
						<li class="menu__item menu__point_small"> </li>
						<li class="menu__item"> <a data-goto=".feedback" href="#" class="menu__link menuLinks">отзывы</a>
						</li>
						<li class="menu__item"> <a data-goto=".gallery" href="#" class="menu__link menuLinks">Галерея</a>
						</li>
						<li class="menu__item"> <a data-goto=".faq" href="#" class="menu__link menuLinks">FAQ</a>
						</li>
						<li class="menu__item"> <a href="/login" class="menu__link menuLinks login">Войти</a>
						</li>
					</ul>
				</nav>
			</div>
			<nav class="mobile-menu__body">
				<ul class="mobile-menu__list">
					<li class="mobile-menu__item"> <a data-goto=".attractions" href="#"
							class="mobile-menu__link menuLinks">Достопримечательности</a>
					</li>
					<li class="mobile-menu__item"> <a data-goto=".tours" href="#" class="mobile-menu__link menuLinks">наши
							туры</a>
					</li>
					<li class="mobile-menu__item"> <a data-goto=".request" href="#"
							class="mobile-menu__link menuLinks">Забронировать
							тур</a> </li>
					<li class="mobile-menu__item"> <a data-goto=".feedback" href="#"
							class="mobile-menu__link menuLinks ">отзывы</a>
					</li>
					<li class="mobile-menu__item"> <a data-goto=".gallery" href="#"
							class="mobile-menu__link menuLinks">Галерея</a>
					</li>
					<li class="mobile-menu__item"> <a data-goto=".faq" href="#" class="mobile-menu__link menuLinks">FAQ</a>
					</li>
					<li class="mobile-menu__item"> <a href="/login" class="mobile-menu__link menuLinks">Войти</a>
					</li>
				</ul>
			</nav>
			<div class="header__main">
				<div class="header__title">
					<h1 class="title-1">на итуруп!</h1>
				</div>
				<div class="header__body container">
					<div class="header__column-left">
						<div class="header__item item-header">
							<div class="item-header__title">погода
							</div>
							<div class="item-header__body weather_body" id="weather">
								<div class="weather__temp">${temp}</div>
								<div class="weather__icon"><img src="../../src/public/img/weather/01d.svg" alt=""></div>
							</div>
						</div>
						<div class="header__item item-header">
							<div class="item-header__title">МЕСТНОЕ ВРЕМЯ
							</div>
							<div class="item-header__body" id="time">
							</div>
						</div>
					</div>
					<div class="header__column-right">
						<picture><source srcset="{{ asset('img/map.webp') }}" type="image/webp"><img src="{{ asset('img/map.png') }}" alt="map Iturup"></picture>
					</div>
				</div>
			</div>
		</div>
		<div class="header__entrance entrance" id="entrance">
			<div class="entrance__body">
				<div class="entrance__content">
					<img class="entrance__close" src="{{ asset('img/icons/plus.svg') }}" alt="">
					<div class="tabs">
						<div class="tabs__nav">
							<button class="tabs__btn  tabs__btn_enter tabs__btn_active">Вход</button>
							<button class="tabs__btn tabs__btn_reg ">Регистрация</button>
						</div>
						<div class="tabs__content">
							<div class="tabs__pane tabs__pane_show tabs__pane_enter">
								<form action="#" id="enter" class="form__enter enter">
									<div class="enter__item">
										<input type="email" class="enter__input input" placeholder="Email" tabindex="1">
									</div>
									<div class="enter__item">
										<input type="password" class="enter__input input" placeholder="Пароль" tabindex="2">
									</div>
									<div class="enter__button">
										<button type="submit" class="btn" tabindex="3">Войти</button>
									</div>
								</form>
								<div class="entrance__back "><a href="#recovery" class="recovery-link ">Забыли пароль?</a></div>
							</div>
							<div class="tabs__pane tabs__pane_reg">
								<form action="#" id="reg" class="form__enter enter">
									<div class="enter__item">
										<input type="text" class="enter__input input" placeholder="Ваше имя" tabindex="1">
									</div>
									<div class="enter__item">
										<input type="email" class="enter__input input" placeholder="Email" tabindex="2">
									</div>
									<div class="enter__item">
										<input type="tel" class="enter__input input" placeholder="Телефон" tabindex="3">
									</div>
									<div class="enter__item">
										<input type="password" class="enter__input input" placeholder="Пароль" tabindex="4">
									</div>
									<div class="enter__item">
										<input type="password" class="enter__input input" placeholder="Подтвердите пароль"
											tabindex="5">
									</div>
									<div class="enter__consent">
										<label for="consent-1"><input class="original__checkbox" type="checkbox" id="consent-1"
												checked required>
											<span class="custom-checkbox"></span>Я даю свое согласие на обработку персональных
											данных
										</label>
									</div>
									<div class="enter__button">
										<button type="submit" class="btn" tabindex="7">Зарегистрироваться</button>
									</div>
								</form>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header__entrance recovery" id="recovery">
		<div class="entrance__body">
			<div class="recovery__content">
				<div class="recovery__title">Восстановление пароля</div>

				<form action="#" id="send" class="form__enter enter">

					<div class="enter__item">
						<input type="email" class="enter__input input" placeholder="Email" tabindex="1">
					</div>
					<div class="enter__button">
						<button type="submit" class="btn" tabindex="2">Отправить ссылку</button>
					</div>

				</form>
				<div class="entrance__back "><a href="#entrance" class="entrance-back">
						Вернуться в форму входа</a></div>
			</div>
		</div>
	</div>
	</div>
</header>
	<main>
		<section class="attractions" id="attractions">
			<div class="attractions__container container">
				<div class="attractions__title">Достопримечательности
					<h2 class="title-2"> Итурупа</h2>
				</div>
				<div class="attractions__body">
					<div class="attractions__row row_1">
						<section class="attractions__item item-attraction">
							<div class="item-attraction">

								<div class="item-attraction__info">
									<div class="item-attraction__image"><picture><source srcset="{{asset('img/attractions//whiteRocks.webp')}}" type="image/webp"><img src="../../src/public/img/attractions/whiteRocks.jpg" alt=""></picture></div>
									<div class="item-attraction__title">
										<h3 class="title-3">Белые скалы</h3>
									</div>
									<div class="item-attraction__text">
										<p>Необычные по форме и цвету скальные образования, которые протянулись вдоль побережья
											Охотского моря. Скалы состоят из мягкой пемзы, образованной после извержения вулкана.
											Насыщенная газами лава пенилась и быстро застывала под водой. После одного из
											землетрясений образовавшиеся скалы поднялись из-под воды над островом. Под воздействием
											ветра и штормов пемза подверглась сильной эрозии, отчего скалы приобрели причудливую
											форму. Особую красоту этому месту придает необычный цвет песка — темно-серый, а местами
											черный.</p>
									</div>
								</div>
							</div>
						</section>
						<section class="attractions__item item-attraction">
							<div class="item-attraction">

								<div class="item-attraction__info">
									<div class="item-attraction__image"><picture><source srcset="{{asset('img/attractions/kasatka.webp')}}" type="image/webp"><img src="{{asset('img/attractions/kasatka.jpg')}}" alt=""></picture></div>
									<div class="item-attraction__title">
										<h3 class="title-3">Залив Касатка</h3>
									</div>
									<div class="item-attraction__text">
										<p>Это место связано со знаковыми событиями Второй мировой войны. На берегу располагалась
											японская военно-морская база, именно от этого берега 26 ноября 1941 года авианосцы
											японского императорского флота выдвинулись в сторону Гавайских островов, где была
											расположена военно-морская база американского флота Перл-Харбор. </p>
									</div>
								</div>
							</div>
						</section>
						<section class="attractions__item item-attraction">
							<div class="item-attraction">

								<div class="item-attraction__info">
									<div class="item-attraction__image"><picture><source srcset="{{asset('img/attractions/cryingRock.webp')}}" type="image/webp"><img src="../../src/public/img/attractions/cryingRock.jpg" alt=""></picture></div>
									<div class="item-attraction__title">
										<h3 class="title-3">Стена водопадов</h3>
									</div>
									<div class="item-attraction__text">
										<p>Задолго до японцев и русских на Курилах жил народ айнов. Долгое время племена айнов
											оказывали сопротивление японской экспансии. Решив поторопить события, японцы заманили
											вождя Сякусяина вместе с другими айнскими военачальниками на переговоры и убили.
											Сопротивление было сломлено. Говорят, что когда погиб Сякусяин из скалы пробились
											родники. А место теперь носит название Плачущие скалы.</p>
									</div>
								</div>
							</div>
						</section>
					</div>
					<div class="attractions__row row_2">
						<section class="attractions__item item-attraction">
							<div class="item-attraction">

								<div class="item-attraction__info">
									<div class="item-attraction__image"><picture><source srcset="{{asset('img/attractions/yankito.webp')}}" type="image/webp"><img src="../../src/public/img/attractions/yankito.jpg" alt=""></picture></div>
									<div class="item-attraction__title">
										<h3 class="title-3">Лавовое плато Янкито</h3>
									</div>
									<div class="item-attraction__text">
										<p>Застывшая вулканическая лава, образовавшаяся на берегу Курильского залива в результате
											извержения вулкана известного в наше время под названием Богдан Хмельницкий. Вулкан
											является одним из 9 действующих вулканов острова. Последнее извержение датируется 1860
											годом.</p>
									</div>
								</div>
							</div>
						</section>
						<section class="attractions__item item-attraction">
							<div class="item-attraction">
								<div class="item-attraction__info">
									<div class="item-attraction__image"><picture><source srcset="{{asset('img/attractions/boilingRiver.webp')}}" type="image/webp"><img src="../../src/public/img/attractions/boilingRiver.jpg" alt=""></picture>
									</div>
									<div class="item-attraction__title">
										<h3 class="title-3">Река Кипящая</h3>
									</div>
									<div class="item-attraction__text">
										<p>Река Кипящая вытекает из Изумрудного ока - небольшого озера на склоне вулкана
											Баранского.
											Вода в этом озере подогревается до 100°C и кипит. По пути к морю река образует
											несколько
											термальных озер разной температуры и цвета. Одно из них - "Голубые глазки" - состоит из
											двух круглых озер синего цвета, окруженных зелеными холмами. Эти озера имеют
											температуру
											около 60°C и содержат минералы, которые придают им синий оттенок.</p>
									</div>
								</div>
							</div>
						</section>
					</div>

					<div class="attractions__row row_3">
						<section class="attractions__item item-attraction">
							<div class="item-attraction">
								<div class="item-attraction__info">
									<div class="item-attraction__image"><picture><source srcset="{{ asset('img/attractions/sento.webp') }}" type="image/webp"><img src="{{ asset('img/attractions/sento.jpg') }}" alt=""></picture></div>
									<div class="item-attraction__title">
										<h3 class="title-3">Термальные источники</h3>
									</div>
									<div class="item-attraction__text">
										<p>Горячие источники Итурупа образовались благодаря вулканической активности, которая
											характерна для этого региона. Вода в источниках нагревается за счет геотермальной
											энергии, которая высвобождается из земли. Вода в горячих источниках Итурупа содержит
											большое количество минералов, которые оказывают благотворное воздействие на кожу и
											организм в целом.</p>
										<p>На острове оборудованы три комплекса: "Ванночки" - находится на берегу Курильского
											залива, Термальные источники вулкана Баранского - на реке Кипящей и комплекс "Жаркие
											воды" на месте бывшей водогрязелечебницы близ Рейдово.</p>
									</div>
								</div>
							</div>
						</section>
						<section data-da=".row_4 ,1279.98, first" class="attractions__item item-attraction">
							<div class="item-attraction">

								<div class="item-attraction__info">
									<div class="item-attraction__image"><picture><source srcset="{{ asset('img/attractions/fox.webp') }}" type="image/webp"><img src="{{ asset('img/attractions/fox.jpg') }}" alt=""></picture></div>
									<div class="item-attraction__title">
										<h3 class="title-3">Животные</h3>
									</div>
									<div class="item-attraction__text">
										<p>Попав на остров вы можете встретить медведей и лисиц, орланов и журавлей. </p>
										<p>
											Неподалеку от берега на салах отдыхают тюлени. Их можно часто наблюдать с берега или с
											лодки. А если повезет, то и сивучей, морских свиней и каланов.
										</p>
									</div>
								</div>
							</div>
						</section>
						<section data-da=".row_4 ,1279.98, last" class="attractions__item item-attraction">
							<div class="item-attraction">

								<div class="item-attraction__info">
									<div class="item-attraction__image"><picture><source srcset="{{ asset('img/attractions/tree.webp') }}" type="image/webp"><img src="../../src/public/img/attractions/tree.jpg" alt=""></picture></div>
									<div class="item-attraction__title">
										<h3 class="title-3">Растительность</h3>
									</div>
									<div class="item-attraction__text">
										<p>Как такового леса на Итурупе нет. Зато есть бамбучник (саза курильская) - это
											вечнозеленое
											растение до 2,5
											м в высоту, произрастает по горным склонам и образует сплошные заросли.</p>
										<p>Есть и березки, только не совсем обычные - береза Эрмана или каменная береза. Невысокая
											с извитым стволом серебристого цвета она возвышается над кустарниками кедрового
											стланика.
										</p>
										<p>
											И, наверное, самое интересное - курильские лиственницы. Под влиянием сильных ветров с
											моря, крона лиственницы приобретает причудливую форму.
										</p>
									</div>
								</div>
							</div>
						</section>
					</div>
					<div class="attractions__row row_4">

					</div>
				</div>
			</div>
		</section>
		<section class="tours" id="tours">
			<div class="tours__container container">
				<div class="tours__title">
					<h2 class="title-2">Наши туры</h2>
				</div>
				<div class="tours__body">
					<div class="tours__column">
						<img src="{{asset('img/cloud.svg')}}" alt="">
						<div class="tours__bookig booking">
							<ul class="booking__wrapper swiper-wrapper">
                                <?php foreach ($tours as $tour): ?>
								<li class="booking__item swiper-slide">
									<div class="booking__info">
										<div class="booking__title">
											<h3 class="title-3 title_dark"><?php echo $tour->name; ?></h3>
										</div>
										<div class="booking__cost">цена: <?php echo $tour->price; ?> рублей</div>
									</div>
									<div class="booking__details ">
										<a href="#" class="booking__details_link <?php echo $tour->id; ?>">Подробнее</a>
									</div>
									<a data-goto=".request" href="#" class="booking__link btn menuLinks"
										id="<?php echo $tour->id; ?>">забронировать</a>
								</li>

                                <?php endforeach; ?>
							</ul>
						</div>

					</div>
					<div class="tours__column_2">
						<div class="tours__info info-tours">
							<ul class="info-tours__wrapper swiper-wrapper">
                                <?php foreach ($tours as $tour): ?>
								<li class="info-tours__item swiper-slide ">
									<div class="info-tours__title">
										<h3 class="title-3 title_dark"><?php echo $tour->name; ?></h3>
									</div>
									<div class="info-tours__text"><?php echo $tour->description; ?></div>
								</li>
                                <?php endforeach; ?>
							</ul>

						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="request" id="request">
			<div class="request__container container">
				<div class="request__title">
					<h3 class="title-3">забронировать тур</h3>
				</div>
				<form method="get" class="request__form form" id="form-request">
					<div class="request__body">
						<div class="request__column">
							<div class="request__item">
								<input type="text" class="request__input input" name="name" value="" id="name"
									placeholder="Ф.И.О." required>
							</div>
							<div class="request__item">
								<input type="tel" class="request__input input" name="tel" value="" id="tel"
									placeholder="Телефон" required pattern="[0-9]{11}" minlength="11" maxlength="11">
							</div>
							<div class="request__item">
								<input type="text" class="request__input input" value="" id="city" name="city"
									placeholder="Город" required>
							</div>
							<div class="request__item request__item_select select__wrapper">
								<select name="tour" id="tour" class="request__input request__select select">
                                    <?php foreach ($tours as $tour): ?>
									<option value="" disabled selected hidden>Выберите тур</option>
									<option value="<?php echo $tour->id; ?>"><?php echo $tour->name; ?></option>
                                    <?php endforeach; ?>
								</select>
							</div>
							<div class="request__item request__item_date" id="calendar">
								<input type="date" name="" id="">
							</div>
						</div>
						<div class="request__column">
							<div class="section-filter__title">Количество человек</div>
							<div class="request__radio">
								<label for="1"><input class="original__radio radio" checked type="radio" id="1"
										name="number" value="1-4"><span class="custom-radio">
									</span>1-4 человекa</label>
								<label for="2"><input class="original__radio" type="radio" id="2" name="number"
										value="5-8"><span class="custom-radio">
									</span>5-8 человек</label>
								<label for="3"><input class="original__radio" type="radio" id="3" name="number" value='9'><span
										class="custom-radio">
									</span>9 человек и более</label>
							</div>
							<div class="request__item">
								<textarea name="comment" id="comment" placeholder="Комментарий" class="textarea"></textarea>
							</div>
						</div>
					</div>
					<div class="request__bottom">
						<div class="request__consent">
							<label for="consent"><input class="original__checkbox" type="checkbox" id="consent" checked
									required>
								<span class="custom-checkbox"></span>Я даю свое согласие на обработку персональных данных
							</label>
						</div>
						<div class="request__button">
							<button type="submit" id="sendRequest" class="btn">отправить заявку</button>
						</div>

					</div>
				</form>
			</div>
		</section>
		<section class="feedback" id="feedback">
			<div class="feedback__container container">
				<div class="feedback__title">
					<h3 class="title-3">впечатления наших туристов</h3>
				</div>
				<div class="feedback__swiper swiper">
					<div class="feedback__wrapper swiper-wrapper ">
						<article class="feedback__item swiper-slide item-feedback">
							<div class="item-feedback__text">Итуруп прекрасен!!! Он просто не может не понравиться!!! Фумаролы,
								кипящее озеро, бамбук и водопады - дикая природа и безумной красоты океан!!! Наисвежайшая рыба,
								гребешок и пр - вкуснее не ела!
							</div>
							<div class="item-feedback__name">
								Анастасия, сентябрь 2022г
							</div>
						</article>
						<article class="feedback__item swiper-slide item-feedback">
							<div class="item-feedback__text">Приезжали на остров в составе организованной группы на 4 дня и
								хоть остров встретил нас не ласково дождями и холодной погодой мы в него влюбились.
								Удивительная дикая и красивая природа. Больше всего впечатлил поход на вулкан Баранского и
								встреча с медведем.</div>
							<div class="item-feedback__name">
								Екатерина, апрель 2022г
							</div>
						</article>
						<article class="feedback__item swiper-slide item-feedback">
							<div class="item-feedback__text">Итуруп - девственная и дикая природа, нехоженые людьми места,
								Тихий океан и Охотское море. И, конечно, вросшие в землю останки былой военной мощи. Добраться
								можно как самолётом, так и паромом.</div>
							<div class="item-feedback__name">
								Николай, июнь 2022г
							</div>
						</article>
						<article class="feedback__item swiper-slide item-feedback">
							<div class="item-feedback__text">Прекрасное место для отдыха подальше от большой земли. Чистый
								морской воздух, природа совсем не похожая на то к чему привык, остров так же интересен с
								исторической точки зрения.
							</div>
							<div class="item-feedback__name">
								Михаил, август 2022г
							</div>
						</article>
						<article class="feedback__item swiper-slide item-feedback">
							<div class="item-feedback__text">Замечательная природа без толп туристов. Чистейший морской воздух,
								свежайшие морепродукты, горячие источники и интересные истории от гидов.
							</div>
							<div class="item-feedback__name">
								Владимир, ноябрь 2022г
							</div>
						</article>
						<article class="feedback__item swiper-slide item-feedback">
							<div class="item-feedback__text">Я ехала с сомнениями и опаской - уж слишком мало было информации,
								а та, что была, пугала: медведи, тайфуны, депрессивные и суровые люди, дикость и
								заброшенность... В реальности же каждая минута пребывания на острове оказалась радостной и
								запоминающейся. Выезжали подножию вулкана Барановского, в Рейдово, к Черным и Белым скалам, на
								плато Янкито и к Ванночкам, в бухту Торная, на Зеркальный пляж и в бухту Парусная. Уезжать не
								хотелось никому. Трудно поверить, что в мире еще остались настолько нехоженые и прекрасные
								места.
							</div>
							<div class="item-feedback__name">
								Марина, сентябрь 2022г
							</div>
						</article>
						<article class="feedback__item swiper-slide item-feedback">
							<div class="item-feedback__text">Было немножко страшно ехать в такую даль, еще и говорили, что
								выбрала не сезон, но все сложилось наилучшим образом. Половина дней были солнечные, вторая
								половина туманы, но и это придавало местной природе свой неповторимый колорит. Я очень рада, что
								рискнула!
							</div>
							<div class="item-feedback__name">
								Надежда, май 2022г
							</div>
						</article>
					</div>
				</div>
				<div class="feedback__bottom">

					<div class="feedback__navigation">
						<div class="feedback__button feedback__button_prev swiper-button-prev"><img
                                src="{{asset('img/icons/arrow.svg')}}" alt=""></div>
						<div class="feedback__button feedback__button_next swiper-button-next"><img
                                src="{{asset('img/icons/arrow.svg')}}" alt="">
						</div>
					</div>
					<div class="feedback__add add-feedback"><a class="addFeedback" href="#"><img src="{{asset('img/icons/plus.svg')}}"
								alt="">
							<span>поделиться
								впечатлениями</span> </a></div>

				</div>
				<div class="add-feedback__wrapper">
					<div class="add-feedback__body">
						<form method="get" class="add-feedback__form form" id="feedbackForm">
							<div class="add-feedback__close">
								<img class="close" src="{{asset('img/icons/plus.svg')}}" alt="">
							</div>
							<div class="add-feedback__name">
								<input type="text" name="name" id="nameForFeedback" class="add-feedback__input input"
									placeholder="Имя" required>
							</div>
							<div class="add-feedback__date">
								<div class="add-feedback__date_title">
									<h3 class=" title_dark">Когда вы были на Итурупе?</h3>
								</div>
								<div class="add-feedback__date_block">
									<div class="select__wrapper">
										<select name="month" id="month" class="add-feedback__select select">
											<option value="01">январь</option>
											<option value="02">февраль</option>
											<option value="03">март</option>
											<option value="04">апрель</option>
											<option value="05">май</option>
											<option value="06">июнь</option>
											<option value="07">июль</option>
											<option value="08">август</option>
											<option value="09">сентябрь</option>
											<option value="10">октябрь</option>
											<option value="11">ноябрь</option>
											<option value="12">декабрь</option>
										</select>
									</div>
									<div class="select__wrapper">
										<select name="year" id="year" class="add-feedback__select select">
											<option value="2021">2021</option>
											<option value="2022">2022</option>
											<option value="2023">2023</option>
											<option value="2023">2023</option>
										</select>
									</div>

								</div>
							</div>
							<div class="add-feedback__feedback">
								<textarea name="textFeedback" id="textFeedback" class="add-feedback__textarea textarea"
									placeholder="Ваши впечатления" required></textarea>
							</div>
							<div class="add-feedback__button">
								<button class="btn send-feedback" type="submit">отправить</button>
							</div>
						</form>
					</div>

				</div>
			</div>
		</section>
		<section class="gallery" id="gallery">
			<div class="gallery__container container">
				<div class="gallery__title">
					<h3 class="title-3">галерея</h3>
				</div>
				<div class="gallery__body grid">
					<div class="grid-sizer"></div>
					<div class="gallery__item grid-item" data-idg="1"><picture><source srcset="../../src/public/img/gallery/gallery1.webp" type="image/webp"><img src="../../src/public/img/gallery/gallery1.jpg" alt=""></picture>
						<div class="gallery__artist">Фотограф: Елизавета Ф.</div>
					</div>
					<div class="gallery__item grid-item" data-idg="2"><picture><source srcset="{{asset('img/gallery/gallery2.webp')}}" type="image/webp"><img src="../../src/public/img/gallery/gallery2.jpg" alt=""></picture>
						<div class="gallery__artist">Фотограф: Елизавета Ф.</div>
					</div>
					<div class="gallery__item grid-item" data-idg="3"><picture><source srcset="../../src/public/img/gallery/gallery3.webp" type="image/webp"><img src="../../src/public/img/gallery/gallery3.jpg" alt=""></picture>
						<div class="gallery__artist">Фотограф: Елизавета Ф.</div>
					</div>
					<div class="gallery__item grid-item" data-idg="4"><picture><source srcset="../../src/public/img/gallery/gallery4.webp" type="image/webp"><img src="../../src/public/img/gallery/gallery4.png" alt=""></picture>
						<div class="gallery__artist">Фотограф: Елизавета Ф.</div>
					</div>
					<div class="gallery__item grid-item" data-idg="5"><picture><source srcset="../../src/public/img/gallery/gallery5.webp" type="image/webp"><img src="../../src/public/img/gallery/gallery5.jpg" alt=""></picture>
						<div class="gallery__artist">Фотограф: Елизавета Ф.</div>
					</div>
					<div class="gallery__item grid-item" data-idg="6"><picture><source srcset="../../src/public/img/gallery/gallery6.webp" type="image/webp"><img src="../../src/public/img/gallery/gallery6.jpg" alt=""></picture>
						<div class="gallery__artist">Фотограф: Елизавета Ф.</div>
					</div>
					<div class="gallery__item grid-item" data-idg="7"><picture><source srcset="../../src/public/img/gallery/gallery7.webp" type="image/webp"><img src="../../src/public/img/gallery/gallery7.png" alt=""></picture>
						<div class="gallery__artist">Фотограф: Елизавета Ф.</div>
					</div>
					<div class="gallery__item grid-item" data-idg="8"><picture><source srcset="../../src/public/img/gallery/gallery8.webp" type="image/webp"><img src="../../src/public/img/gallery/gallery8.jpg" alt=""></picture>
						<div class="gallery__artist">Фотограф: Елизавета Ф.</div>
					</div>
					<div class="gallery__item grid-item" data-idg="9"><picture><source srcset="../../src/public/img/gallery/gallery9.webp" type="image/webp"><img src="../../src/public/img/gallery/gallery9.jpg" alt=""></picture>
						<div class="gallery__artist">Фотограф: Елизавета Ф.</div>
					</div>

				</div>
				<div class="gallery__loading">
					<img src="../../src/public/img/icons/loading.gif" alt="">
				</div>
				<div class="gallery__button">

					<a href="#" type="submit" id="moreFoto" class="btn btn-transparent gallery-btn">смотреть еще</a>
				</div>
			</div>
			</div>
		</section>
		<section class="faq" id="faq">
			<div class="faq__container container">
				<div class="faq__title">
					<h3 class="title-3">часто задаваемые вопросы</h3>
				</div>
				<div class="faq__body">
					<div class="faq__item item-faq">
						<div class="item-faq__top accordion">
							<div class="item-faq__title">правила посещения курильских островов</div>
							<div class="item-faq__btn">
								<a href="#" class="item-faq__link"><img class="item-faq__icon" src="../../src/public/img/icons/plus.svg"
										alt=""></a>
							</div>

						</div>
						<div class="item-faq__body">
							<p>
								В соответствии с законодательством РФ Итуруп вместе с другими островами
								Курильской гряды являются пограничной территорией. Подать документы на получение пропуска
								бесплатно
								можно через портал "Госуслуги". Рекомендуем заказывать пропуск заранее, чтобы он успел прийти к
								вам
								почтой, или указывать в заявке, что вы его получите лично на Сахалине.
							</p>
							<p>Пропуска для российских туристов оформляются в Южно-Сахалинске, в СПУБО (Сахалинское пограничное
								управление береговой охраны ФСБ РФ) по адресу: г. Южно-Сахалинск, пр. Победы, д. 63а
							</p>
							<p>Пропуска для иностранных туристов (при наличии визы или миграционной карты) также оформляет
								Сахалинское пограничное управление ФСБ.
							</p>
							<div class="item-faq__contact">
								тел: <a class="item-faq__email" href="tel:+79244918013">+74242492104</a>, электронная почта: <a
									class="item-faq__email" href="mailto:pubo.sahalin@fsb.ru">pubo.sahalin@fsb.ru</a>
							</div>
						</div>
					</div>
					<div class="faq__item item-faq">
						<div class="item-faq__top accordion">
							<div class="item-faq__title">как добраться до итурупа?</div>
							<div class="item-faq__btn">
								<a href="#" class="item-faq__link"><img class="item-faq__icon" src="../../src/public/img/icons/plus.svg"
										alt=""></a>
							</div>

						</div>
						<div class="item-faq__body">
							<p>
								Добраться до Итурупа с Сахалина можно двумя способами - на самолете авиакомпании «Аврора» и на
								теплоходах "Игорь Фархутдинов", "Павел Леонов", "Адмирал Невельской".
							</p>
							<p>
								Самолет - самый быстрый и удобный способ добраться до Итурупа. Вам потребуется менее 1,5
								часов на перелет. Рейсы осуществляются из города Южно-Сахалинска. Авиакомпания "Аврора"
								предоставляет регулярные рейсы до аэропорта Итурупа.Однако из-за преобладающих сильных ветров в
								районе захода самолета на
								посадку в аэропорт Курильска, а также туманов случаются задержки рейсов.</p>
							<p>
								Паром - это второй способ добраться до острова. Но путь займет гораздо больше времени - около
								2 суток. Паром ходит из города Корсаков на юге Сахалина, есть два варианта рейсов: прямой
								Корсаков-Курильск и с заходом в порты островов Кунашир и Шикотан.
							</p>
							<p>
								Выбор вида транспорта зависит от ваших потребностей и желаний. Если вы хотите быстро и комфортно
								добраться до острова, лучше выбрать самолет. Если же вы предпочитаете морское путешествие и
								готовы
								потратить на это больше времени, то паром - ваш выбор. Кроме того, на пароме вы сможете
								насладиться
								красивыми пейзажами, которые оставят незабываемые впечатления в вашей памяти.
							</p>
						</div>
					</div>
					<div class="faq__item item-faq">
						<div class="item-faq__top accordion">
							<div class="item-faq__title">что брать из одежды?</div>
							<div class="item-faq__btn">
								<a href="#" class="item-faq__link"><img class="item-faq__icon" src="../../src/public/img/icons/plus.svg"
										alt=""></a>
							</div>

						</div>
						<div class="item-faq__body">
							<p>Для комфортного отдыха на острове Итуруп рекомендуем взять следующие вещи:</p>
							<ul>

								<li class="item-faq__section">
									<span></span>
									<div class="item-faq__wrapper">
										Легкую непродуваемую дышащую ветровку, тонкий шерстяной свитер,
										термобелье. Брюки нужны из плотного материала, чтобы их не порвал бамбук. Кроссовки или
										ботинки с толстой, рифленой, хорошо
										цепляющейся за камни подошвой.
									</div>
								</li>
								<li class="item-faq__section">
									<span></span>
									<div class="item-faq__wrapper">
										Длинный дождевик с длинными рукавамию, не пончо - под него
										забивается косой дождь на ветру,
										и не одноразовый — его порвет бамбук. Резиновые сапоги с высоким голенищем.
									</div>
								</li>
								<li class="item-faq__section">
									<span></span>
									<div class="item-faq__wrapper">
										Купальный костюм для посещения горячих источников. Резиновые нескользкие тапки.
									</div>
								</li>
								<li class="item-faq__section">
									<span></span>
									<div class="item-faq__wrapper">
										Головной убор и шейный платок для защиты от ветра.
									</div>
								</li>
								<li class="item-faq__section">
									<span></span>
									<div class="item-faq__wrapper">
										Небольшой рюкзак, чтобы носить в нем запас еды и воды.
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="faq__item item-faq">
						<div class="item-faq__top accordion">
							<div class="item-faq__title">где остановиться?</div>
							<div class="item-faq__btn">
								<a href="#" class="item-faq__link"><img class="item-faq__icon" src="../../src/public/img/icons/plus.svg"
										alt=""></a>
							</div>
						</div>
						<ul class="item-faq__body">
							<li class="item-faq__section">
								<span></span>
								<div class="item-faq__wrapper">
									<div class="item-faq__hotel">
										Гостевой дом "Камелия", Курильск
									</div>
									<div class="item-faq__contacts">
										<a class="item-faq__tel" href="tel:+79244918013">+79244918013</a>
										<a class="item-faq__tel" href="tel:+79146436534">+79146436534</a>
									</div>
								</div>

							</li>
							<li class="item-faq__section">
								<span></span>
								<div class="item-faq__wrapper">
									<div class="item-faq__hotel">
										Гостевой дом "Ласточкино гнездо", Курильск
									</div>
									<div class="item-faq__contacts">
										<a class="item-faq__tel" href="tel:+79244917607">+79244917607</a>
										<a class="item-faq__tel" href="tel:+79140858376">+79140858376</a>
									</div>
								</div>

							</li>
							<li class="item-faq__section">
								<span></span>
								<div class="item-faq__wrapper">
									<div class="item-faq__hotel">
										Гостевой дом "Медведь", Курильск
									</div>
									<div class="item-faq__contacts">
										<a class="item-faq__tel" href="tel:+79147500012">+79147500012</a>
										<a class="item-faq__tel" href="tel:+79248803389">+79248803389</a>
									</div>
								</div>

							</li>
							<li class="item-faq__section">
								<span></span>
								<div class="item-faq__wrapper">
									<div class="item-faq__hotel">
										Гостиница "Остров", Курильск
									</div>
									<div class="item-faq__contacts">
										<a class="item-faq__tel" href="tel:+74245442732">+74245442732</a>
										<a class="item-faq__tel" href="tel:+79841845636">+79841845636</a>
									</div>
								</div>

							</li>
							<li class="item-faq__section">
								<span></span>
								<div class="item-faq__wrapper">
									<div class="item-faq__hotel">

										Гостиница "Итуруп", Курильск
									</div>
									<div class="item-faq__contacts">
										<a class="item-faq__tel" href="tel:+74245442463">+74245442463</a>
									</div>
								</div>

							</li>
							<li class="item-faq__section">
								<span></span>
								<div class="item-faq__wrapper">
									<div class="item-faq__hotel">

										Гостиница в Янкито
									</div>
									<div class="item-faq__contacts">
										<a class="item-faq__tel" href="tel:+79841390384">+79841390384</a>
										<a class="item-faq__tel" href="tel:+74245442440">+74245442440</a>
										<a class="item-faq__tel" href="tel:+79841837752">+79841837752</a>
									</div>
								</div>

							</li>
							<li class="item-faq__section">
								<span></span>
								<div class="item_faq__wrapper">
									<div class="item-faq__hotel">

										Гостевой дом "Жемчужина" в Китовом, 2-х местное проживание 3 км от Курильска
									</div>
									<div class="item-faq__contacts">
										<a class="item-faq__tel" href="tel:+79242840504">+79242840504</a>
									</div>
								</div>

							</li>
							<li class="item-faq__section">
								<span></span>
								<div class="item-faq__wrapper">
									<div class="item-faq__hotel">

										Гостевой дом "Касатка"
									</div>
									<div class="item-faq__contacts">
										<a class="item-faq__tel" href="tel:+79632897786">+79632897786</a>
									</div>
								</div>

							</li>
							<li class="item-faq__section">
								<span></span>
								<div class="item-faq__wrapper">
									<div class="item-faq__hotel">

										Гостевой дом "На краю света"
									</div>
									<div class="item-faq__contacts">
										<a class="item-faq__tel" href="tel:+79147484576">+79147484576</a>
										<a class="item-faq__tel" href="tel:+79004267795">+79004267795</a>
									</div>
								</div>

							</li>
						</ul>
					</div>
					<div class="faq__item item-faq">
						<div class="item-faq__top accordion">
							<div class="item-faq__title">могут ли дети принять участие?</div>
							<div class="item-faq__btn">
								<a href="#" class="item-faq__link"><img class="item-faq__icon" src="../../src/public/img/icons/plus.svg"
										alt=""></a>
							</div>

						</div>
						<div class="item-faq__body">
							НЕТ!!! АХАХАХХАХАХАХАХ)))))
						</div>
					</div>

				</div>
			</div>

		</section>
		<section class="details-booking ">
			<div class="details-booking__info details-booking__info_basic">
				<div class="add-feedback__close">
					<img class="close" src="../../src/public/img/icons/plus.svg" alt="">
				</div>
				<div class="details-booking__title">
					<h2 class="title-2">Базовый тур, 4 дня</h2>
				</div>
				<div class="details-booking__subtitle">
					<h3 class="title-3">Программа тура:</h3>
				</div>
				<div class="details-booking__body">
					<div class="faq__item item-faq">
						<div class="item-faq__top accordion">
							<div class="item-faq__title">1 ДЕНЬ</div>
							<div class="item-faq__btn">
								<a href="#" class="item-faq__link"><img class="item-faq__icon" src="../../src/public/img/icons/plus.svg"
										alt=""></a>
							</div>
						</div>
						<div class="item-faq__body">
							<p>Встреча в аэропорту и проводы в гостиницу.
								Лавовое плато Янкито. Стена водопадов - плачущие скалы в бухте Лососевая.
								Обзорная экскурсия по городу, смотровые, музей. Горячие источники "Ванночки" в Курильске.</p>
						</div>
					</div>
					<div class="faq__item item-faq">
						<div class="item-faq__top accordion">
							<div class="item-faq__title">2 ДЕНЬ</div>
							<div class="item-faq__btn">
								<a href="#" class="item-faq__link"><img class="item-faq__icon" src="../../src/public/img/icons/plus.svg"
										alt=""></a>
							</div>
						</div>
						<div class="item-faq__body">
							<p>Белые скалы, черные скалы.
								Бухта Парусная - водопады, только при отсутствии прижима.
								Горячие источники "Жаркие воды"</p>
						</div>
					</div>
					<div class="faq__item item-faq">
						<div class="item-faq__top accordion">
							<div class="item-faq__title">3 ДЕНЬ</div>
							<div class="item-faq__btn">
								<a href="#" class="item-faq__link"><img class="item-faq__icon" src="../../src/public/img/icons/plus.svg"
										alt=""></a>
							</div>
						</div>
						<div class="item-faq__body">
							<p>Горячие источники вулкана Баранского "Кипящая река". Смотровые, кипящие озера, заброшенная
								геотэс и фумарольное поле. Без восхождения.</p>
						</div>
					</div>
					<div class="faq__item item-faq">
						<div class="item-faq__top accordion">
							<div class="item-faq__title">4 ДЕНЬ</div>
							<div class="item-faq__btn">
								<a href="#" class="item-faq__link"><img class="item-faq__icon" src="../../src/public/img/icons/plus.svg"
										alt=""></a>
							</div>
						</div>
						<div class="item-faq__body">
							<p>Поездка к Тихому океану, залив Касатка, зеркальный пляж, Чертова скала, тоннели. Село Горное.
								Горячие источники "Ванночки" в Курильске.Проводы в аэропорт/порт.</p>
						</div>
					</div>
					<div class="faq__item item-faq">
						<div class="item-faq__top accordion">
							<div class="item-faq__title">5 ДЕНЬ</div>
							<div class="item-faq__btn">
								<a href="#" class="item-faq__link"><img class="item-faq__icon" src="../../src/public/img/icons/plus.svg"
										alt=""></a>
							</div>
						</div>
						<div class="item-faq__body">
							<p>Проводы в аэропорт/порт.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="details-booking__info details-booking__info_sea">
				<div class="add-feedback__close">
					<img class="close" src="../../src/public/img/icons/plus.svg" alt="">
				</div>
				<div class="details-booking__title">
					<h2 class="title-2">Базовый тур с морской прогулкой</h2>
				</div>
				<div class="details-booking__subtitle">
					<h3 class="title-3">Программа тура:</h3>
				</div>
				<div class="details-booking__body">
					<div class="faq__item item-faq">
						<div class="item-faq__top accordion">
							<div class="item-faq__title">1 ДЕНЬ</div>
							<div class="item-faq__btn">
								<a href="#" class="item-faq__link"><img class="item-faq__icon" src="../../src/public/img/icons/plus.svg"
										alt=""></a>
							</div>
						</div>
						<div class="item-faq__body">
							<p>Встреча в аэропорту и проводы в гостиницу.
								Лавовое плато Янкито. Стена водопадов - плачущие скалы в бухте Лососевая.
								Обзорная экскурсия по городу, смотровые, музей. Горячие источники "Ванночки" в Курильске.</p>
						</div>
					</div>
					<div class="faq__item item-faq">
						<div class="item-faq__top accordion">
							<div class="item-faq__title">2 ДЕНЬ</div>
							<div class="item-faq__btn">
								<a href="#" class="item-faq__link"><img class="item-faq__icon" src="../../src/public/img/icons/plus.svg"
										alt=""></a>
							</div>
						</div>
						<div class="item-faq__body">
							<p>Прогулка на резиновой моторной лодке с тремя остановками. Белые скалы, черные скалы.
								Бухта Парусная - водопады, только при отсутствии прижима.Озеро Сопочное - бухта Торная.
								После возвращения посещение горячич источников "Жаркие воды"</p>
						</div>
					</div>
					<div class="faq__item item-faq">
						<div class="item-faq__top accordion">
							<div class="item-faq__title">3 ДЕНЬ</div>
							<div class="item-faq__btn">
								<a href="#" class="item-faq__link"><img class="item-faq__icon" src="../../src/public/img/icons/plus.svg"
										alt=""></a>
							</div>
						</div>
						<div class="item-faq__body">
							<p>Горячие источники вулкана Баранского "Кипящая река". Смотровые, кипящие озера, заброшенная
								геотэс и фумарольное поле. Без восхождения.</p>
						</div>
					</div>
					<div class="faq__item item-faq">
						<div class="item-faq__top accordion">
							<div class="item-faq__title">4 ДЕНЬ</div>
							<div class="item-faq__btn">
								<a href="#" class="item-faq__link"><img class="item-faq__icon" src="../../src/public/img/icons/plus.svg"
										alt=""></a>
							</div>
						</div>
						<div class="item-faq__body">
							<p>Поездка к Тихому океану, залив Касатка, зеркальный пляж, Чертова скала, тоннели. Село Горное.
								Горячие источники "Ванночки" в Курильске.Проводы в аэропорт/порт.</p>
						</div>
					</div>
					<div class="faq__item item-faq">
						<div class="item-faq__top accordion">
							<div class="item-faq__title">5 ДЕНЬ</div>
							<div class="item-faq__btn">
								<a href="#" class="item-faq__link"><img class="item-faq__icon" src="../../src/public/img/icons/plus.svg"
										alt=""></a>
							</div>
						</div>
						<div class="item-faq__body">
							<p>Проводы в аэропорт/порт.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="details-booking__info details-booking__info_volcano">
				<div class="add-feedback__close">
					<img class="close" src="../../src/public/img/icons/plus.svg" alt="">
				</div>
				<div class="details-booking__title">
					<h2 class="title-2">Базовый тур с восхождением на вулкан Баранского</h2>
				</div>
				<div class="details-booking__subtitle">
					<h3 class="title-3">Программа тура:</h3>
				</div>
				<div class="details-booking__body">
					<div class="faq__item item-faq">
						<div class="item-faq__top accordion">
							<div class="item-faq__title">1 ДЕНЬ</div>
							<div class="item-faq__btn">
								<a href="#" class="item-faq__link"><img class="item-faq__icon" src="../../src/public/img/icons/plus.svg"
										alt=""></a>
							</div>
						</div>
						<div class="item-faq__body">
							<p>Встреча в аэропорту и проводы в гостиницу.
								Лавовое плато Янкито. Стена водопадов - плачущие скалы в бухте Лососевая.
								Обзорная экскурсия по городу, смотровые, музей. Горячие источники "Ванночки" в Курильске.</p>
						</div>
					</div>
					<div class="faq__item item-faq">
						<div class="item-faq__top accordion">
							<div class="item-faq__title">2 ДЕНЬ</div>
							<div class="item-faq__btn">
								<a href="#" class="item-faq__link"><img class="item-faq__icon" src="../../src/public/img/icons/plus.svg"
										alt=""></a>
							</div>
						</div>
						<div class="item-faq__body">
							<p>Прогулка на резиновой моторной лодке с тремя остановками. Белые скалы, черные скалы.
								Бухта Парусная - водопады, только при отсутствии прижима.Озеро Сопочное - бухта Торная.
								После возвращения посещение горячич источников "Жаркие воды"</p>
						</div>
					</div>
					<div class="faq__item item-faq">
						<div class="item-faq__top accordion">
							<div class="item-faq__title">3 ДЕНЬ</div>
							<div class="item-faq__btn">
								<a href="#" class="item-faq__link"><img class="item-faq__icon" src="../../src/public/img/icons/plus.svg"
										alt=""></a>
							</div>
						</div>
						<div class="item-faq__body">
							<p>Восхождением на вулкан Баранского (1134 м) - время подъема и спуска около 5-6 часов. Горячие
								источники вулкана Баранского "Кипящая река". Смотровые, кипящие озера, заброшенная
								геотэс и фумарольное поле.</p>
						</div>

					</div>
					<div class="faq__item item-faq">
						<div class="item-faq__top accordion">
							<div class="item-faq__title">4 ДЕНЬ</div>
							<div class="item-faq__btn">
								<a href="#" class="item-faq__link"><img class="item-faq__icon" src="../../src/public/img/icons/plus.svg"
										alt=""></a>
							</div>
						</div>
						<div class="item-faq__body">
							<p>Поездка к Тихому океану, залив Касатка, зеркальный пляж, Чертова скала, тоннели. Село Горное.
								Горячие источники "Ванночки" в Курильске.Проводы в аэропорт/порт.</p>
						</div>
					</div>
					<div class="faq__item item-faq">
						<div class="item-faq__top accordion">
							<div class="item-faq__title">5 ДЕНЬ</div>
							<div class="item-faq__btn">
								<a href="#" class="item-faq__link"><img class="item-faq__icon" src="../../src/public/img/icons/plus.svg"
										alt=""></a>
							</div>
						</div>
						<div class="item-faq__body">
							<p>Проводы в аэропорт/порт.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="details-booking__info details-booking__info_winter">
				<div class="add-feedback__close">
					<img class="close" src="../../src/public/img/icons/plus.svg" alt="">
				</div>
				<div class="details-booking__title">
					<h2 class="title-2">Зимний Итуруп</h2>
				</div>
				<div class="details-booking__subtitle">
					<h3 class="title-3">Программа тура:</h3>
				</div>
				<div class="details-booking__body">
					<div class="faq__item item-faq">
						<div class="item-faq__top accordion">
							<div class="item-faq__title">1 ДЕНЬ</div>
							<div class="item-faq__btn">
								<a href="#" class="item-faq__link"><img class="item-faq__icon" src="../../src/public/img/icons/plus.svg"
										alt=""></a>
							</div>
						</div>
						<div class="item-faq__body">
							<p>Встречаемся в аэропорту. Трансфер из аэропорта в гостевой дом или гостиницу. Отправляемся на
								лавовое плато Янкито, находящееся прямо у берега моря на фоне вулкана Богдан Хмельницкий, и
								заодно искупаемся в знаменитых термальных ваннах “Жаркие воды”.</p>
						</div>
					</div>
					<div class="faq__item item-faq">
						<div class="item-faq__top accordion">
							<div class="item-faq__title">2 ДЕНЬ</div>
							<div class="item-faq__btn">
								<a href="#" class="item-faq__link"><img class="item-faq__icon" src="../../src/public/img/icons/plus.svg"
										alt=""></a>
							</div>
						</div>
						<div class="item-faq__body">
							<p>В этот день мы отправимся на снегоходах к вулкану Баранского, где в круглогодичном целебном
								источнике наберемся сил и здоровья. По пути остановимся на смотровой площадке, а также сварим
								яйца в реке Кипящей!</p>
						</div>
					</div>
					<div class="faq__item item-faq">
						<div class="item-faq__top accordion">
							<div class="item-faq__title">3 ДЕНЬ</div>
							<div class="item-faq__btn">
								<a href="#" class="item-faq__link"><img class="item-faq__icon" src="../../src/public/img/icons/plus.svg"
										alt=""></a>
							</div>
						</div>
						<div class="item-faq__body">
							<p>Сегодня выдвигаемся к Тихому океану в бухту Касатка (история Перл-Харбор). На обратном пути
								посетим заброшенный аэропорт Буревестник, а также искупаемся в “ванночках”. Трансфер в аэропорт.
							</p>
						</div>
					</div>
					<div class="faq__item item-faq">
						<div class="item-faq__top accordion">
							<div class="item-faq__title">4 ДЕНЬ</div>
							<div class="item-faq__btn">
								<a href="#" class="item-faq__link"><img class="item-faq__icon" src="../../src/public/img/icons/plus.svg"
										alt=""></a>
							</div>
						</div>
						<div class="item-faq__body">
							<p>Проводы в аэропорт/порт</p>
						</div>
					</div>
				</div>
			</div>
			<div class="details-booking__info details-booking__info_all">
				<div class="add-feedback__close">
					<img class="close" src="../../src/public/img/icons/plus.svg" alt="">
				</div>
				<div class="details-booking__title">
					<h2 class="title-2">Весь итуруп</h2>
				</div>
				<div class="details-booking__subtitle">
					<h3 class="title-3">Программа тура:</h3>
				</div>
				<div class="details-booking__body">
					<div class="faq__item item-faq">
						<div class="item-faq__top accordion">
							<div class="item-faq__title">1 ДЕНЬ</div>
							<div class="item-faq__btn">
								<a href="#" class="item-faq__link"><img class="item-faq__icon" src="../../src/public/img/icons/plus.svg"
										alt=""></a>
							</div>
						</div>
						<div class="item-faq__body">
							<p>В день прилета вы познакомитесь со столицей острова Итуруп - городом
								Курильск, также являющимся одним из самых маленьких городов России с
								населением около 2000 человек.</p>

						</div>
					</div>
					<div class="faq__item item-faq">
						<div class="item-faq__top accordion">
							<div class="item-faq__title">2 ДЕНЬ</div>
							<div class="item-faq__btn">
								<a href="#" class="item-faq__link"><img class="item-faq__icon" src="../../src/public/img/icons/plus.svg"
										alt=""></a>
							</div>
						</div>
						<div class="item-faq__body">
							<p>Сбор группы, отравление из Курильска на автотранспорте до пос. Рыбаки.
								Прибытие, посадка в моторную лодку. Отправление, общий путь около 100 км
								занимает 4-5 часов в зависимости от погодных условий. По пути горячий
								чай/кофе и перекус и невероятные виды на Итуруп.
								Через бухту Доброе Начало и вдоль берега до входа в потрясающую "Львиную
								Пасть", ее осмотр, фотографии и отправление в залив Одесский к подножию
								вулкана, установка палаточного лагеря, горячий обед и ужин.</p>
						</div>
					</div>
					<div class="faq__item item-faq">
						<div class="item-faq__top accordion">
							<div class="item-faq__title">3 ДЕНЬ </div>
							<div class="item-faq__btn">
								<a href="#" class="item-faq__link"><img class="item-faq__icon" src="../../src/public/img/icons/plus.svg"
										alt=""></a>
							</div>
						</div>
						<div class="item-faq__body">
							<p>Ранний подъем и завтрак, старт нашего интереснейшего похода.
								Общее время в пути туда и обратно около 10 часов, 16-18 километров.</p>
						</div>
					</div>
					<div class="faq__item item-faq">
						<div class="item-faq__top accordion">
							<div class="item-faq__title">4 ДЕНЬ</div>
							<div class="item-faq__btn">
								<a href="#" class="item-faq__link"><img class="item-faq__icon" src="../../src/public/img/icons/plus.svg"
										alt=""></a>
							</div>
						</div>
						<div class="item-faq__body">
							<p>Завтрак. Сбор палаточного лагеря. Отправление в пос. Рыбаки. Прибытие,
								трансфер до турбазы.</p>
						</div>
					</div>
					<div class="faq__item item-faq">
						<div class="item-faq__top accordion">
							<div class="item-faq__title">5 ДЕНЬ </div>
							<div class="item-faq__btn">
								<a href="#" class="item-faq__link"><img class="item-faq__icon" src="../../src/public/img/icons/plus.svg"
										alt=""></a>
							</div>
						</div>
						<div class="item-faq__body">
							<p>Белые скалы – одно из самых потрясающих творений стихии в природе. Это
								уникальные вулканические образования, возникшие из очень легкой и мягкой
								пемзы, расположены в северной части острова Итуруп, растянутые на 28
								километров, уходящие далеко за горизонт. Белоснежные скалы, покрытые ковром
								зелени, представляют собой неповторимые волнистые хребты. А местный
								песчаный пляж удивительно безлюден, что придаёт этому месту космическую
								атмосферу.</p>
						</div>
					</div>
					<div class="faq__item item-faq">
						<div class="item-faq__top accordion">
							<div class="item-faq__title">6 ДЕНЬ</div>
							<div class="item-faq__btn">
								<a href="#" class="item-faq__link"><img class="item-faq__icon" src="../../src/public/img/icons/plus.svg"
										alt=""></a>
							</div>
						</div>
						<div class="item-faq__body">
							<p>Экскурсия к легендарному заливу Касатка, откуда в 1941 году японский
								Тихоокеанский флот вышел для нападения на американские военно-морскую и
								авиабазу Перл-Харбор. Осмотр "Чертовой скалы", в которой японцами в военных
								целях были прорублены туннели и обустроен подземный госпиталь, а также
								бывшего аэродрома Буревестник. По пути - посещение термального комплекса
								"Ванночки".</p>
						</div>
					</div>
					<div class="faq__item item-faq">
						<div class="item-faq__top accordion">
							<div class="item-faq__title">7 ДЕНЬ</div>
							<div class="item-faq__btn">
								<a href="#" class="item-faq__link"><img class="item-faq__icon" src="../../src/public/img/icons/plus.svg"
										alt=""></a>
							</div>
						</div>
						<div class="item-faq__body">
							<p>В этот день отправимся с Вами к вулкану Баранского, искупаемся в горячих
								источниках, увидим кипящие озера и насладимся видами с высоты курильских
								сопок. Вулкан Баранского находится в центральной части острова Итуруп и
								славится изобилием минеральных источников. С Вами мы пересечем остров с
								запада на восток, остановимся на смотровой площадке «Волчки», откуда
								открывается вид на город Курильск и его окрестности. По приезду к вулкану
								окажемся в настоящем оазисе, где непременно нужно будет искупаться в
								знаменитых ванночках вулкана Баранского - природном джакузи с водой
								температуры от +42 до +70 °C.
								Вулкан Баранский - это действующий вулкан на острове Итуруп, склоны
								которого изобилуют грязевыми и минеральными источниками, но одной из
								главных достопримечательностей этих мест является река Кипящая, которая
								поражает своей уникальностью. В ее верховьях температура воды действительно
								близка к точке кипения. Речная долина почти скрыта в облачках белого пара,
								а на склонах - множество фумарол и грязевых котлов с булькающей грязью.
								Река вытекает из крошечного, но изумительно красивого кипящего озера Желтое
								Око (Изумрудное Око), названное так за желтую кайму из окислов серы вдоль
								берега. Вода в озере насыщенного изумрудного цвета, над ней постоянно стоит
								столб пара, температурой воды в нем около 100 градусов. Поэтому после
								прогулки, купаться мы с вами будем в низовье, в специально оборудованном
								месте, где после насыщенного дня, вы сможете расслабиться в полной мере.
							</p>
						</div>
					</div>
					<div class="faq__item item-faq">
						<div class="item-faq__top accordion">
							<div class="item-faq__title">8 ДЕНЬ</div>
							<div class="item-faq__btn">
								<a href="#" class="item-faq__link"><img class="item-faq__icon" src="../../src/public/img/icons/plus.svg"
										alt=""></a>
							</div>
						</div>
						<div class="item-faq__body">
							<p>В бухте Оля водоносный горизонт чистейшей пресной воды находится между
								пластами скальных пород и вытекает наружу, где вода собирается и по
								специальному водоводу поступает на рыбоводный завод.
								Завораживающие виды не оставят равнодушными путешественников.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="arrow-up__container">
			<a href="#
			" class="arrow-up__link"><img src="../../src/public/img/icons/arrowUp.svg" class="arrow-up__icon" alt=""></a>

		</div>
	</main>
	<footer class="footer">
	<div class="footer__container container">
		<div class="footer__top">
			<div class="footer__logo">
				<img src="../../src/public/img/logo.svg" alt="">
			</div>
			<div class="footer__text">
				<p>хотите увидеть что-то уникальное не выезжая за пределы России? </p>
				<p>мы ждем вас на Итурупе.</p>
			</div>
		</div>
		<div class="footer__body">
			<div class="footer__column">
				<ul class="footer__list">
					<li class="footer__item"> <a data-goto=".attractions" href="#"
							class="footer__link  menuLinks">достопримечательности</a> </li>
					<li class="footer__item"> <a data-goto=".tours" href="#" class="footer__link  menuLinks">наши туры</a>
					</li>
					<li class="footer__item"> <a data-goto=".request" href="#" class="footer__link  menuLinks">Забронировать
							тур</a> </li>
				</ul>

			</div>
			<div class="footer__column">
				<ul class="footer__list">
					<li class="footer__item"> <a data-goto=".gallery" href="#" class="footer__link  menuLinks">Галерея</a>
					</li>
					<li class="footer__item"> <a data-goto=".feedback" href="#" class="footer__link  menuLinks">отзывы</a>
					</li>
					<li class="footer__item"> <a data-goto=".faq" href="#" class="footer__link  menuLinks">F.A.Q.</a> </li>
				</ul>

			</div>
			<div class="footer__column mailing">
				<div class="mailing__caption">
					подписаться на рассылку новостей
				</div>
				<form action="get" class="mailing__form form" id="emailForm">
					<input type="email" class="request__input input" name="email" value="" id="email" placeholder="Email"
						required>
					<button type="submit" id="sendEmail" class="btn ">подписаться</button>
				</form>
			</div>
		</div>
		<div class="footer__bottom">
			2023 © “На итуруп!”
		</div>
	</div>
</footer>
	<script type="module" src="{{ asset('js/app.min.js') }}"></script>
</body>

</html>

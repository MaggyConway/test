<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cat</title>

	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Rubik:wght@500;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	<header>
		<div class="wrapper">
			<div class="header__logo"></div>
			<div class="header__menu">
				<nav>
					<ul>
						<li><a href="#">Почему мы?</a></li>
						<li><a href="#">Номера</a></li>
						<li><a href="#">Отзывы</a></li>
						<li><a href="#">Как нас найти</a></li>
					</ul>
				</nav>
			</div>
			<div class="header__mobile_menu">
				<div class="header__mobile_menu__icon"></div>
				<ul>
					<li><a href="#">Почему мы?</a></li>
					<li><a href="#">Номера</a></li>
					<li><a href="#">Отзывы</a></li>
					<li><a href="#">Как нас найти</a></li>
				</ul>
			</div>
		</div>
	</header>

	<div class="wrapper">
		<section class="catalog">

			<div class="catalog__top">
				<h1>Наши номера</h1>
				<div class="catalog__sorting">
					<div class="catalog__sorting__item active">
						<img src="/images/arrow_top.svg" alt="По убыванию" class="arrow">По площади</div>
					<div class="catalog__sorting__item">
						<img src="/images/arrow_down.svg" alt="По возрастанию" class="arrow">По площади</div>
					<div class="catalog__sorting__item">
						<img src="/images/arrow_top.svg" alt="По убыванию" class="arrow">По цене</div>
					<div class="catalog__sorting__item">
						<img src="/images/arrow_down.svg" alt="По возрастанию" class="arrow">По цене</div>
				</div>
			</div>

			<div class="catalog__main">

				<div class="catalog__filter__mobile">
					<div class="catalog__filter__mobile_icon"></div>

					<form action="" id="filter_form_mobile">

						<div class="catalog__filter__block">
							<p class="catalog__filter__title">Цена за сутки, ₽</p>
							
							<div class="priceblock">
								<input type="number" class="catalog__filter__field" placeholder="от 100">
								<input type="number" class="catalog__filter__field" placeholder="до 600">
							</div>
						</div>

						<div class="catalog__filter__block">
							<p class="catalog__filter__title">Площадь</p>

							<label><input type="checkbox">0,63 м2</label>
							<label><input type="checkbox">0,90 м2</label>
							<label><input type="checkbox">1,13 м2</label>
							<label><input type="checkbox">1,56 м2</label>
							<label><input type="checkbox">2,56 м2</label>
							<label><input type="checkbox">2,56 м2</label>
						</div>

						<div class="catalog__filter__block">
							<p class="catalog__filter__title">Оснащение номера</p>

							<label><input type="checkbox">Пустой номер</label>
							<label><input type="checkbox">Лежак</label>
							<label><input type="checkbox">Когтеточка</label>
							<label><input type="checkbox">Игровой-комплекс</label>
							<label><input type="checkbox">Домик</label>
						</div>
						
						<button class="catalog__filter__btn_save">Применить</button>
						<input class="catalog__filter__btn_reset" type="reset" value="Сбросить фильтр">

					</form>
				</div>
				
				<div class="catalog__filter">
					<form action="" id="filter_form">

						<div class="catalog__filter__block">
							<p class="catalog__filter__title">Цена за сутки, ₽</p>
							
							<div class="priceblock">
								<input type="number" class="catalog__filter__field" placeholder="от 100">
								<input type="number" class="catalog__filter__field" placeholder="до 600">
							</div>
						</div>

						<div class="catalog__filter__block">
							<p class="catalog__filter__title">Площадь</p>

							<label><input type="checkbox">0,63 м2</label>
							<label><input type="checkbox">0,90 м2</label>
							<label><input type="checkbox">1,13 м2</label>
							<label><input type="checkbox">1,56 м2</label>
							<label><input type="checkbox">2,56 м2</label>
							<label><input type="checkbox">2,56 м2</label>
						</div>

						<div class="catalog__filter__block">
							<p class="catalog__filter__title">Оснащение номера</p>

							<label><input type="checkbox">Пустой номер</label>
							<label><input type="checkbox">Лежак</label>
							<label><input type="checkbox">Когтеточка</label>
							<label><input type="checkbox">Игровой-комплекс</label>
							<label><input type="checkbox">Домик</label>
						</div>
						
						<button class="catalog__filter__btn_save">Применить</button>
						<input class="catalog__filter__btn_reset" type="reset" value="Сбросить фильтр">

					</form>
				</div>

				<div class="catalog__grid">

					<div class="catalog__grid__item">
						<div class="catalog__grid__item__image"></div>
						<div class="catalog__grid__item__content">
							<div class="catalog__grid__item__title">Эконом</div>
							<div class="catalog__grid__item__props">
								<p>Размеры (ШхГхВ) - 90х70х180 см</p>
								<p>Площадь - 0,63 м2</p>
								<p>Оснащение номера
									<img src="/images/type1.svg" alt="Пустой номер" class="icon">
								</p>
								<p>Цена за сутки:<span class="price">100₽</span></p>
							</div>
							<a href="#" class="catalog__grid__item__btn">Забронировать<span class="btn_logo"></span></a>
						</div>
					</div>

					<div class="catalog__grid__item">
						<div class="catalog__grid__item__image"></div>
						<div class="catalog__grid__item__content">
							<div class="catalog__grid__item__title">Эконом плюс</div>
							<div class="catalog__grid__item__props">
								<p>Размеры (ШхГхВ) - 90х100х180 см</p>
								<p>Площадь - 0,90 м2</p>
								<p>Оснащение номера
									<img src="/images/type2.svg" alt="Лежак" class="icon">
									<img src="/images/type3.svg" alt="Когтеточка" class="icon">
								</p>
								<p>Цена за сутки:<span class="price">200₽</span></p>
							</div>
							<a href="#" class="catalog__grid__item__btn">Забронировать<span class="btn_logo"></span></a>
						</div>
					</div>

					<div class="catalog__grid__item">
						<div class="catalog__grid__item__image"></div>
						<div class="catalog__grid__item__content">
							<div class="catalog__grid__item__title">Комфорт</div>
							<div class="catalog__grid__item__props">
								<p>Размеры (ШхГхВ) - 100х125х180 см</p>
								<p>Площадь - 1,13 м2</p>
								<p>Оснащение номера
									<img src="/images/type2.svg" alt="Лежак" class="icon">
									<img src="/images/type3.svg" alt="Когтеточка" class="icon">
									<img src="/images/type4.svg" alt="Игровой-комплекс" class="icon">
								</p>
								<p>Цена за сутки:<span class="price">250₽</span></p>
							</div>
							<a href="#" class="catalog__grid__item__btn">Забронировать<span class="btn_logo"></span></a>
						</div>
					</div>

					<div class="catalog__grid__item">
						<div class="catalog__grid__item__image"></div>
						<div class="catalog__grid__item__content">
							<div class="catalog__grid__item__title">Сьют</div>
							<div class="catalog__grid__item__props">
								<p>Размеры (ШхГхВ) - 125х125х180 см</p>
								<p>Площадь - 1,56 м2</p>
								<p>Оснащение номера
									<img src="/images/type2.svg" alt="Лежак" class="icon">
									<img src="/images/type3.svg" alt="Когтеточка" class="icon">
									<img src="/images/type4.svg" alt="Игровой-комплекс" class="icon">
								</p>
								<p>Цена за сутки:<span class="price">350₽</span></p>
							</div>
							<a href="#" class="catalog__grid__item__btn">Забронировать<span class="btn_logo"></span></a>
						</div>
					</div>

					<div class="catalog__grid__item">
						<div class="catalog__grid__item__image"></div>
						<div class="catalog__grid__item__content">
							<div class="catalog__grid__item__title">Люкс</div>
							<div class="catalog__grid__item__props">
								<p>Размеры (ШхГхВ) - 160х160х180 см</p>
								<p>Площадь - 2,56 м2</p>
								<p>Оснащение номера
									<img src="/images/type2.svg" alt="Лежак" class="icon">
									<img src="/images/type3.svg" alt="Когтеточка" class="icon">
									<img src="/images/type4.svg" alt="Игровой-комплекс" class="icon">
									<img src="/images/type5.svg" alt="Домик" class="icon">
								</p>
								<p>Цена за сутки:<span class="price">500₽</span></p>
							</div>
							<a href="#" class="catalog__grid__item__btn">Забронировать<span class="btn_logo"></span></a>
						</div>
					</div>

					<div class="catalog__grid__item">
						<div class="catalog__grid__item__image"></div>
						<div class="catalog__grid__item__content">
							<div class="catalog__grid__item__title">Супер-Люкс</div>
							<div class="catalog__grid__item__props">
								<p>Размеры (ШхГхВ) - 180х160х180 см</p>
								<p>Площадь - 2,88 м2</p>
								<p>Оснащение номера
									<img src="/images/type2.svg" alt="Лежак" class="icon">
									<img src="/images/type3.svg" alt="Когтеточка" class="icon">
									<img src="/images/type4.svg" alt="Игровой-комплекс" class="icon">
									<img src="/images/type5.svg" alt="Домик" class="icon">
								</p>
								<p>Цена за сутки:<span class="price">600₽</span></p>
							</div>
							<a href="#" class="catalog__grid__item__btn">Забронировать<span class="btn_logo"></span></a>
						</div>
					</div>

				</div>
			</div>
			


		</section>
	</div>

	<script src="/dist/jquery-3.4.1.min.js"></script>
	<script src="/js/app.js"></script>
</body>
</html>
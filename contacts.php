<?php require_once('includes/header.php'); ?>
<script src="https://api-maps.yandex.ru/2.1/?lang=tr_TR" type="text/javascript"></script>
<script type="text/javascript">
    ymaps.ready(init);
    var myMap, 
        myPlacemark;

    function init(){ 
        myMap = new ymaps.Map("map", {
            center: [55.74017767405946,37.63463460185237],
            zoom: 16,
            controls: []
        },
        {suppressMapOpenBlock: true}); 
        
        myPlacemark = new ymaps.Placemark([55.74017767405946,37.63463460185237], {
            hintContent: 'Озерковский переулок, 11',
            balloonContent: 'Озерковский переулок, 11'
        }, {
          // Опции.
          // Необходимо указать данный тип макета.
          iconLayout: 'default#image',
          // Своё изображение иконки метки.
          iconImageHref: 'img/map-ic.png',
          // Размеры метки.
          iconImageSize: [46, 46],
          // Смещение левого верхнего угла иконки относительно
          // её "ножки" (точки привязки).
          iconImageOffset: [-5, -38]
      }
        );
        myMap.behaviors.disable('scrollZoom');
        myMap.geoObjects.add(myPlacemark);
    }
</script>
<div class="n-wrapper">
	<div class="n-header">
		<?php require_once('includes/header-top.php'); ?>
	</div>
	<div class="n-content">
		<div class="n-content-inner vertical-align">
			<div class="container">
				<div class="row">
					<div class="contacts-inner">
						<div class="breadcrumps-wrap">
							<ul class="breadcrumps">
								<li class="breadcrumps__link breadcrumps__link_home"><a href="/" class="bread_menu__link_bg"></a><i>/</i></li>
								<li class="breadcrumps__link"><a href="#">Цветы в коробках</a><i>/</i></li>
								<li class="breadcrumps__link"><span>Контакты</span></li>
							</ul>
						</div>
						<div class="h1-wrap">
							<h1 class="h1">Контакты</h1>
						</div>
						<div class="contacts-info clearfix">
							<div class="col-sm-3">
								<div class="info info__num">
									<span class="info__title">Телефон</span>
									<span class="info__descr">+7(966)166-61-10</span>
									<div class="socials">
										<a href="#" class="socials-link socials-link_whats"><i class="fa fa-phone" aria-hidden="true"></i></a>
										<a href="#" class="socials-link socials-link_plane"><i class="fa fa-paper-plane " aria-hidden="true"></i></a>
										<a href="#" class="socials-link socials-link_viber"><i class="fa" aria-hidden="true"></i></a> 
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="info info__mail">
									<span class="info__title">E-mail</span>
									<span class="info__descr">info@cveti-i-mechti.ru</span>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="info info_address">
									<span class="info__title">Адрес</span>
									<span class="info__descr">Озерковский пер 11</span>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="info info__soc">
									<span class="info__title">Мы в соцсетях:</span>
									<div class="socials">
										<a href="#" class="socials-link socials-link_fa"><i class="fa fa-vk" aria-hidden="true"></i></a>
										<a href="#" class="socials-link socials-link_inst"><i class="fa fa-instagram" aria-hidden="true"></i></a> 
									</div>
								</div>
							</div>
						</div>
						<div class="contacts-time">
							<span class="time__title">Время работы студии</span>
							<span class="time__info">Понед. - Воскр.: с 10:00 – до 22:00</span>
							<span class="time__info">Праздничные дни: с 7:00 – до 24:00</span>
						</div>
						<div class="contacts-blocks clearfix">
							<div class="col-md-7">
								<div class="mape">
									<div class="map-img" id="map">
									</div>
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-wrap">
									<span class="form__title">Заявка на звонок</span>
									<span class="form__descr">Пожалуйста, заполните форму ниже, отправьте ее нам, и мы Вам перезвоним в ближайшее время.</span>
									<form action="#">
										<div class="input-wrap">
											<span class="input-label">Ваше имя</span>
											<div class="input input_theme_rosa">
												<input type="text" class="input__control" name="uname" required>
											</div> 
										</div>
										<div class="input-wrap">
											<span class="input-label">Номер телефона</span>
											<div class="input input_theme_rosa">
												<input type="tel" class="input__control js-phone" name="phone" required>
											</div> 
										</div>
										<div class="input-wrap">
											<span class="input-label">Цель звонка</span>
											<div class="input input_theme_rosa">
												<select class="form-select input__control" id="type">
													<option label="lorem" value="1"> </option>
													<option label="lorem" value="2">Дом</option>
													<option label="lorem" value="3">Подселение</option>
												</select>
											</div>
										</div>
										<div class="input-wrap">
											<span class="input-label">Номер заказа, если есть</span>
											<div class="input input_theme_rosa">
												<input type="text" class="input__control" name="uname" required>
											</div> 
										</div>
										<div class="input-wrap">
											<div class="checkbox-wrap">
												<label class="checkbox">
													<input class="checkbox__hidden" type="checkbox" name="checkbox-test" checked="checked">
													<span class="checkbox__custom"></span>
													<span class="checkbox__label"> Я согласен на обработку моих <a href="#">персональных данных</a></span>
												</label>
											</div>
											<div class="button-wrap">
												<a href="#" class="button button_main">Отправить</a>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="n-footer">
		<?php require_once('includes/footer_top.php'); ?>
		<?php require_once('includes/footer_bottom.php'); ?>
	</div>
</div>

</body>
</html>

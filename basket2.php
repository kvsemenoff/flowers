<?php require_once('includes/header.php'); ?>
<div class="n-wrapper">
	<div class="n-header">
		<?php require_once('includes/header-top.php'); ?>
	</div>
	<div class="n-content">
		<div class="n-content-inner vertical-align">
			<div class="inner-page">
				<div class="container">
					<div class="row">
						<div class="inner-page-top clearfix">
							<div class="col-md-12">
								<div class="breadcrumps-wrap">
									<ul class="breadcrumps">
										<li class="breadcrumps__link breadcrumps__link_home"><a href="/" class="bread_menu__link_bg"></a><i>/</i></li>
										<li class="breadcrumps__link"><a href="#">Цветы в коробках</a><i>/</i></li>
										<li class="breadcrumps__link"><span>О нас</span></li>
									</ul>
								</div>
								<div class="h1-wrap">
									<h1 class="h1">Оформление заказа</h1>
								</div>
							</div>
						</div>
					</div>
					<div class="busket">
						<div class="busket__nav-wrap clearfix">
							<span class="busket__nav">Корзина</span>
							<span class="busket__nav busket__nav_active">Доставка</span>
							<span class="busket__nav">Ваши контакты</span>
							<span class="busket__nav">Оплата</span>
						</div>
						<div class="busket__tovar-wrap">
							<div class="h4-wrap">
								<h4 class="h4">Доставка</h4>
							</div>
							<div class="registration registration__busket">
								<div class="registration-form">
									<form action="#" id="formregist">
									  <div class="input-wrap clearfix">
									  	<label class="input__label" for="uname">Имя Фамилия получателя <i class="green-star">*</i></label>
									    <input id="uname" class="input__control" type="text" name="uname" required>
									  </div>
									  <div class="input-wrap clearfix">
									  	<label class="input__label" for="phone">Телефон получателя <i class="green-star">*</i></label>
									    <input id="phone" type="tel" class="input__control js-phone" name="phone" required>
									  </div>
									  <div class="input-wrap clearfix">
									  	<label class="input__label" for="date">Дата доставки</label>
									    <input id="date" class="input__control" type="date" name="date" placeholder="21.02.2017">
									  </div>
									  <div class="input-wrap clearfix">
									  	<label class="input__label" for="address">Адрес и примечания <i class="green-star">*</i></label>
									    <textarea name="message" class="message message_theme_rosa input__control" id="address"></textarea>
									  </div>
									  <div class="input-wrap clearfix">
									  	<label class="input__label" for="select">Это адрес </label>
									    <select class="form-select input__control" id="select">
												<option value="1">Домашний</option>
												<option value="2">Рабочий</option>
												<option value="3">Подселение</option>
											</select>
									  </div>
									  <div class="input-wrap input-wrap_button">
									    <label class="checkbox">
												<input class="checkbox__hidden" type="checkbox" name="checkbox-test" checked="checked">
												<span class="checkbox__custom"></span>
												<span class="checkbox__label"> Бесплатная фотография момента доставки <a href="#"></a></span>
											</label>
											<label class="radio">
												<input class="radio__hidden" type="radio" name="checkbox-test" checked="checked">
												<span class="radio__custom"></span>
												<span class="radio__label">Позвонить получателю для уточнения времени и адреса</span>
											</label>
											<label class="radio">
												<input class="radio__hidden" type="radio" name="checkbox-test">
												<span class="radio__custom"></span>
												<span class="radio__label">Везти без звонка в указанный промежуток времени</span>
											</label>
											<span class="form__descr">Поля отмеченные <i class="green-star">* </i>обязательны для заполнения</span>
											<button class="button button_main">Далее</button>
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




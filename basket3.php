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
									<h1 class="h1">Оформить заказ</h1>
								</div>
							</div>
						</div>
					</div>
					<div class="busket">
						<div class="busket__nav-wrap busket__nav-wrap_inner clearfix">
							<span class="busket__nav">Корзина</span>
							<span class="busket__nav">Доставка</span>
							<span class="busket__nav busket__nav_active">Ваши контакты</span>
							<span class="busket__nav">Оплата</span>
						</div>
						<div class="busket__tovar-wrap">
							<div class="h4-wrap">
								<h4 class="h4">Ваши контакты</h4>
							</div>
							<div class="registration registration__busket">
								<div class="registration-form">
									<form action="#" id="formregist">
									  <div class="input-wrap clearfix">
									  	<label class="input__label" for="uname">Имя Фамилия получателя <i class="green-star">*</i></label>
									    <input id="uname" class="input__control" type="text" name="uname" required>
									  </div>
									  <div class="input-wrap clearfix">
									  	<label class="input__label" for="mail">E-mail <i class="green-star">*</i></label>
									    <input id="mail" class="input__control" type="email" name="mail" required>
									  </div>
									  <div class="input-wrap clearfix">
									  	<label class="input__label" for="phone">Телефон <i class="green-star">*</i></label>
									    <input id="phone" type="tel" class="input__control js-phone" name="phone" required>
									  </div>
									  <div class="input-wrap clearfix">
									  	<label class="input__label" for="address">Адрес<i class="green-star">*</i></label>
									    <input id="address" class="input__control" type="text" name="address" required>
									  </div>
									  <div class="input-wrap clearfix">
									  	<label class="input__label" for="wish">Пожелания к заказу </label>
									    <textarea name="wish" class="message message_theme_rosa input__control" id="wish"></textarea>
									  </div>
									  <div class="input-wrap input-wrap_button">
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




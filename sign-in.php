<?php require_once('includes/header.php'); ?>
<div class="n-wrapper">
	<div class="n-header">
		<?php require_once('includes/header-top.php'); ?>
	</div>
	<div class="n-content">
		<div class="n-content-inner vertical-align">
			<div class="container">
				<div class="row">
					<div class="cart-inner">
						<div class="breadcrumps-wrap">
							<ul class="breadcrumps">
								<li class="breadcrumps__link breadcrumps__link_home"><a href="/" class="bread_menu__link_bg"></a><i>/</i></li>
								<li class="breadcrumps__link"><a href="#">Цветы в коробках</a><i>/</i></li>
								<li class="breadcrumps__link"><a href="#">Корзина</a><i>/</i></li>
								<li class="breadcrumps__link"><span>Букет из хризантем</span></li>
							</ul>
						</div>
						<div class="h1-wrap h1-wrap_client">
							<h1 class="h1">Личный кабинет</h1>
						</div>											
						<div class="review-block client-page">
							<div class="client-info clearfix">
								<div class="client__photo">
									<img src="img/avatar-big.png" alt="">
								</div>
								<div class="client__cart">
									<div class="client__name">Ксения</div>
									<div class="client__number">+7 (964) 880-56-74</div>
									<div class="client__mail">kseniaode@mail.ru</div>
									<a href="#" class="client__exit">выйти</a>
								</div>
							</div>
							<div class="tabs-block">
					      <div class="tabs">
					        <div class="tab tab-0 active">История заказов</div>
					        <div class="tab tab-1">Личные данные</div>
					      </div>
					      <div class="tabs-content">
					        <div class="tab-content tab-0 active">
					          <div class="client__order clearfix">
					          	<div class="order__about">
					          		<span class="order__number">Заказ № 123 234</span>
					          		<span class="order__date">от 1 апреля 2014 г</span>
					          	</div>
					          	<div class="order__info clearfix">
					          		<span class="order__kind">Товары в заказе:</span>
					          		<span class="order__name">Букет из семи роз</span>
					          		<span class="order__kind">Общая стоимость:</span>
					          		<span class="order__name">5 200 руб.</span>
					          		<span class="order__kind">Оплата:</span>
					          		<span class="order__name">Наличный расчет</span>
					          		<span class="order__kind">Адрес доставки:</span>
					          		<span class="order__name">ул. Кирова, дом 45</span>
					          		<span class="order__kind">Дата и время доставки:</span>
					          		<span class="order__name">12 апреля 2017 г.</span>
					          	</div>
					          </div>
					          <div class="client__order clearfix">
					          	<div class="order__about">
					          		<span class="order__number">Заказ № 123 234</span>
					          		<span class="order__date">от 1 апреля 2014 г</span>
					          	</div>
					          	<div class="order__info clearfix">
					          		<span class="order__kind">Товары в заказе:</span>
					          		<span class="order__name">Букет из семи роз</span>
					          		<span class="order__kind">Общая стоимость:</span>
					          		<span class="order__name">5 200 руб.</span>
					          		<span class="order__kind">Оплата:</span>
					          		<span class="order__name">Наличный расчет</span>
					          		<span class="order__kind">Адрес доставки:</span>
					          		<span class="order__name">ул. Кирова, дом 45</span>
					          		<span class="order__kind">Дата и время доставки:</span>
					          		<span class="order__name">12 апреля 2017 г.</span>
					          	</div>
					          </div>
					        </div>
					      </div>
					      <div class="tabs-content">
					        <div class="tab-content tab-1">
						        <div class="registration-form registration-form_client clearfix">
											<form action="#" id="formregist">
											  <div class="input-wrap clearfix">
											  	<label class="input__label" for="uname">Имя</label>
											    <input id="uname" class="input__control" type="text" name="uname" required>
											  </div>
											  <div class="input-wrap clearfix">
											  	<label class="input__label" for="second-name">Фамилия</label>
											    <input class="input__control" type="text" name="second-name" id="second-name">
											  </div>
											  <div class="input-wrap clearfix">
											  	<label class="input__label" for="patronymic">Отчество</label>
											    <input class="input__control" type="text" name="patronymic" id="patronymic">
											  </div>
											  <div class="input-wrap clearfix">
											  	<label class="input__label" for="mail">E-mail <i class="green-star">*</i></label>
											    <input class="input__control" type="email" name="mail" id="mail" required>
											  </div>
											  <div class="input-wrap clearfix">
											  	<label class="input__label" for="old_password">Старый пароль</label>
											    <input class="input__control" type="password" name="old_password" id="password" required>
											  </div>
											  <div class="input-wrap clearfix">
											  	<label class="input__label" for="password">Новый пароль</label>
											    <input class="input__control" type="password" name="password" id="password" required>
											  </div>
											  <div class="input-wrap clearfix">
											  	<label class="input__label" for="r_password">Повторите пароль</label>
											    <input class="input__control" type="password" name="r_password" id="r_password" required>
											  </div>
											  <div class="input-wrap input-wrap_button">
													<button class="button button_main">Сохранить изменения</button>
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
		</div>
	</div>
	<div class="n-footer">
		<?php require_once('includes/footer_top.php'); ?>
		<?php require_once('includes/footer_bottom.php'); ?>
	</div>
</div>
</body>
</html>




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
									<h1 class="h1">Регистрация</h1>
								</div>
							</div>
						</div>
					</div>
					<div class="registration">
						<div class="registration__login">
							<div class="login__link">
								<span>Вы уже зарегистрировались?</span>
								<a href="#popup__log-in" data-name="modal">Войти</a>
							</div>
							<div class="login__link">
								<a href="#">Восстановление пароля</a>
							</div>
						</div>
						<div class="registration-form">
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
							  	<label class="input__label" for="mail">E-mail</label>
							    <input class="input__control" type="email" name="mail" id="mail" required>
							  </div>
							  <div class="input-wrap clearfix">
							  	<label class="input__label" for="password">Пароль</label>
							    <input class="input__control" type="password" name="password" id="password" required>
							  </div>
							  <div class="input-wrap clearfix">
							  	<label class="input__label" for="r_password">Повторите пароль</label>
							    <input class="input__control" type="password" name="r_password" id="r_password" required>
							  </div>
							  <div class="input-wrap input-wrap_button">
							    <label class="checkbox">
										<input class="checkbox__hidden" type="checkbox" name="checkbox-test" checked="checked">
										<span class="checkbox__custom"></span>
										<span class="checkbox__label"> Я согласен на использование моих данных и с <a href="#">политикой конфиденциальности</a></span>
									</label>
									<span class="form__descr"><i>* </i>Поля обязательные для заполнения</span>
									<button class="button button_main">Зарегистрироваться</button>
							  </div>
							</form>
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




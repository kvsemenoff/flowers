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
							<span class="busket__nav busket__nav_active">Корзина</span>
							<span class="busket__nav">Доставка</span>
							<span class="busket__nav">Ваши контакты</span>
							<span class="busket__nav">Оплата</span>
						</div>
						<div class="busket__tovar-wrap">
							<div class="h4-wrap">
								<h4 class="h4">Корзина</h4>
							</div>
							<div class="busket__tovar-table">
								<div class="busket__tovar-row">
									<div class="busket__tovar clearfix">
										<div class="tovar__info tovar__info_view">
											<span class="tovar__descr">Товар</span>
											<div class="tovar__cart clearfix">
												<div class="tovar__img">
													<img src="img/flower1.jpg" alt="">
												</div>
												<div class="tovar__title">
													<a href="#" class="tovar__name">Облачная Симфония</a>
													<span class="tovar__kind">Стандартный</span>
												</div>
											</div>
										</div>
										<div class="tovar__info tovar__info_quan">
											<span class="tovar__descr">Количество</span>
											<div class="cart__char__right__number">
												<span class="cart-button cart-button2">-</span>
												<input type="text" value="1" disabled="disabled" id="x">  
												<span class="cart-button cart-button3">+</span>
											</div>
										</div>
										<div class="tovar__info tovar__info_single">
											<span class="tovar__descr">Цена за единицу</span>
											<span class="tovar__price">1 200 руб.</span>
										</div>
										<div class="tovar__info tovar__info_summ">
											<span class="tovar__descr">Сумма</span>
											<span class="tovar__price">2 400 руб.</span>
										</div>
										<div class="tovar__info tovar__info_delete">
											<span class="tovar__descr">/</span>
											<a href="#" class="tovar__delete">Удалить</a>
										</div>
									</div>
								</div>
								<div class="busket__tovar-row">
									<div class="busket__tovar clearfix">
										<div class="tovar__info tovar__info_view">
											<span class="tovar__descr">Товар</span>
											<div class="tovar__cart clearfix">
												<div class="tovar__img">
													<img src="img/flower1.jpg" alt="">
												</div>
												<div class="tovar__title">
													<a href="#" class="tovar__name">Облачная Симфония</a>
													<span class="tovar__kind">Стандартный</span>
												</div>
											</div>
										</div>
										<div class="tovar__info tovar__info_quan">
											<span class="tovar__descr">Количество</span>
											<div class="cart__char__right__number">
												<span class="cart-button cart-button2">-</span>
												<input type="text" value="1" disabled="disabled" id="x">  
												<span class="cart-button cart-button3">+</span>
											</div>
										</div>
										<div class="tovar__info tovar__info_single">
											<span class="tovar__descr">Цена за единицу</span>
											<span class="tovar__price">1 200 руб.</span>
										</div>
										<div class="tovar__info tovar__info_summ">
											<span class="tovar__descr">Сумма</span>
											<span class="tovar__price">2 400 руб.</span>
										</div>
										<div class="tovar__info tovar__info_delete">
											<span class="tovar__descr">/</span>
											<a href="#" class="tovar__delete">Удалить</a>
										</div>
									</div>
								</div>
							</div>
							<div class="busket__order clearfix">
								<div class="order__discount">
									<div class="discount-wrap">
										<span class="discount__title">У вас есть дисконтная карта постоянного покупателя*?</span>
										<div class="input input_theme_rosa">
											<input type="text" class="input__control" name="discount" placeholder="Введите номер вашей карты" required>
										</div> 
									</div>
									<p class="order__discount-info">**Постоянным клиентам выдаются дисконтные карты в салонах, при оформлении заказа.</p>
									<p class="order__discount-info">Этот текст ненастоящий, нужно все подробнее узнать у заказчика</p>
								</div>
								<div class="order__price">
									<p class="order__price-title">Вы сформировали заказ на сумму: <i>4 800 руб.</i></p>
									<div class="button-wrap">
										<a href="#" class="button button_main button_mini">Оформить заказ</a>
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




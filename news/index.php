<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новости");
?><main> <section class="hero">
<div class="container">
	<h1>Новости</h1>
</div>
 </section>
<div class="container">
 <section class="news-section">
	<h2 class="section-title">Последние новости</h2>
	<div class="news-grid">
 <article class="news-card">
		<div class="news-img" style=" background-image: url('https://via.placeholder.com/300x200'); ">
		</div>
		<div class="news-content">
			<div class="news-date">
				 15 мая 2023
			</div>
			<h3 class="news-title">Запуск нового производства</h3>
			<p>
				 Компания Фармэнерго запустила новую линию по производству энергоэффективного оборудования.
			</p>
		</div>
 </article> <article class="news-card">
		<div class="news-img" style=" background-image: url('https://via.placeholder.com/300x200'); ">
		</div>
		<div class="news-content">
			<div class="news-date">
				 10 мая 2023
			</div>
			<h3 class="news-title">Новые стандарты энергоэффективности</h3>
			<p>
				 Наша компания приняла участие в разработке новых отраслевых стандартов.
			</p>
		</div>
 </article> <article class="news-card">
		<div class="news-img" style=" background-image: url('https://via.placeholder.com/300x200'); ">
		</div>
		<div class="news-content">
			<div class="news-date">
				 28 апреля 2023
			</div>
			<h3 class="news-title">Экологическая инициатива</h3>
			<p>
				 Фармэнерго присоединилась к всемирной инициативе по снижению углеродного следа.
			</p>
		</div>
 </article>
	</div>
 </section>
</div>
 </main><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
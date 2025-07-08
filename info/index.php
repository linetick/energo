<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Раскрытие информации");
?>

<section class="hero">
  <div class="container">
    <h1>Раскрытие информации</h1>
    <p>Лицензии, отчётность и другие документы, которые мы публикуем в соответствии с законодательством РФ.</p>
  </div>
</section>

<main class="container info-section">
    <!-- Категория 1 -->
    <details class="info-cat" open>
    <summary>Лицензии и сертификаты</summary>
    <div class="doc-wrap">
        <ul class="doc-list">
        <li><a href="#">Лицензия на осуществление передачи электроэнергии</a></li>
        <li><a href="#">Лицензия на пользование недрами</a></li>
        <li><a href="#">Сертификат соответствия ISO 9001</a></li>
        <li><a href="#">Сертификат соответствия ISO 14001</a></li>
        </ul>
    </div>
    </details>

    <!-- Категория 2 -->
    <details class="info-cat">
    <summary>Передача электроэнергии</summary>
    <div class="doc-wrap">
        <ul class="doc-list">
        <li><a href="#">Тарифная заявка (публикация 2025)</a></li>
        <li><a href="#">Отчёт по надёжности сетей за 2024 год</a></li>
        <li><a href="#">Публичный договор энергоснабжения</a></li>
        </ul>
    </div>
    </details>

    <!-- Категория 3 -->
    <details class="info-cat">
    <summary>Система водоснабжения</summary>
    <div class="doc-wrap">
        <ul class="doc-list">
        <li><a href="#">Баланс водопотребления 2024 г.</a></li>
        <li><a href="#">Программа модернизации скважин 2025–2030</a></li>
        <li><a href="#">Паспорт водозаборного узла «Западный»</a></li>
        </ul>
    </div>
    </details>

    <!-- Категория 4 -->
    <details class="info-cat">
    <summary>Прочие документы</summary>
    <div class="doc-wrap">
        <ul class="doc-list">
        <li><a href="#">Годовой отчёт ПАО «Фармэнерго» за 2024 год</a></li>
        <li><a href="#">Политика обработки персональных данных</a></li>
        <li><a href="#">Экологический отчёт 2024 г.</a></li>
        </ul>
    </div>
    </details>
</main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вакансии");
?>

<main>
    <!-- заголовок страницы -->
    <section class="hero">
    <div class="container">
        <h1>Карьера в «Фармэнерго»</h1>
        <p>Растём вместе с командой профессионалов</p>
    </div>
    </section>

    <!-- короткое вступление, как у kraspharma.ru -->
    <section class="intro">
    <div class="container">
        <p>
        Особая корпоративная культура и продуманная политика «Фармэнерго»
        в отношении сотрудников делают работу в компании престижной и
        перспективной.
        </p>
        <p>
        Мы создаём условия, позволяющие при максимальной самореализации
        добиваться высоких результатов. Взамен гарантируем социальную
        защищённость и достойное материальное вознаграждение.
        </p>
    </div>
    </section>

    <!-- список вакансий -->
    <section class="vacancies-section">
    <div class="container">
        <h2 class="section-title left-align">Актуальные вакансии</h2>

        <div class="vacancies-list">
        <!-- Вакансия 1 -->
        <div class="vacancy-card">
            <div class="vacancy-header">
            <h3>Инженер-энергетик</h3>
            <span class="salary">от 80 000 руб.</span>
            </div>

            <div class="vacancy-info">
            <div class="info-item"><strong>Город:</strong> Красноярск</div>
            <div class="info-item"><strong>Опыт:</strong> 3+ года</div>
            <div class="info-item"><strong>Занятость:</strong> Полная</div>
            </div>

            <div class="vacancy-description">
            <p><strong>Обязанности:</strong></p>
            <ul>
                <li>Эксплуатация и обслуживание энергосистем предприятия;</li>
                <li>Контроль соблюдения энергобезопасности;</li>
                <li>Ведение технической документации;</li>
                <li>Работа с AutoCAD.</li>
            </ul>

            <p><strong>Требования:</strong></p>
            <ul>
                <li>Высшее профильное образование;</li>
                <li>Опыт работы от 3 лет;</li>
                <li>Знание нормативных документов;</li>
                <li>Умение работать с чертежами.</li>
            </ul>
            </div>
        </div>
        <!-- Вакансия 2 -->
        
        <!-- Вакансия 2 -->
        <div class="vacancy-card">
            <div class="vacancy-header">
            <h3>Специалист по закупкам</h3>
            <span class="salary">от 70 000 руб.</span>
            </div>

            <div class="vacancy-info">
            <div class="info-item"><strong>Город:</strong> Красноярск</div>
            <div class="info-item"><strong>Опыт:</strong> 2+ года</div>
            <div class="info-item"><strong>Занятость:</strong> Полная</div>
            </div>

            <div class="vacancy-description">
            <p><strong>Обязанности:</strong></p>
            <ul>
                <li>Планирование закупок;</li>
                <li>Заключение договоров с поставщиками;</li>
                <li>Контроль поставок и качества продукции.</li>
            </ul>

            <p><strong>Требования:</strong></p>
            <ul>
                <li>Высшее образование;</li>
                <li>Опыт работы в закупках от 2 лет;</li>
                <li>Навыки ведения переговоров;</li>
                <li>Знание 44-ФЗ / 223-ФЗ будет плюсом.</li>
            </ul>
            </div>
        </div>

        <!-- Вакансия 3 -->
        <div class="vacancy-card">
        <div class="vacancy-header">
            <h3>Системный администратор</h3>
            <span class="salary">от 85 000 руб.</span>
        </div>

        <div class="vacancy-info">
            <div class="info-item"><strong>Город:</strong> Красноярск</div>
            <div class="info-item"><strong>Опыт:</strong> 3+ года</div>
            <div class="info-item"><strong>Занятость:</strong> Полная</div>
        </div>

        <div class="vacancy-description">
            <p><strong>Обязанности:</strong></p>
            <ul>
            <li>Поддержка серверной инфраструктуры;</li>
            <li>Администрирование сетевого оборудования;</li>
            <li>Резервное копирование и восстановление данных.</li>
            </ul>

            <p><strong>Требования:</strong></p>
            <ul>
            <li>Опыт администрирования Windows и Linux;</li>
            <li>Понимание сетевых протоколов;</li>
            <li>Готовность к дежурствам и командировкам.</li>
            </ul>
        </div>
        </div>
    </div>
    </section>
</main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
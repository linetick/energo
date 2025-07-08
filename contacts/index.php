<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

<main class="contacts-page">
    <div class="container">
    <h2>Контакты</h2>

    <div class="contacts-container">
        <!-- Блок с картой -->
        <div class="map-wrapper">
        <div class="main-map-container" id="map">
            <!-- Здесь будет карта -->
        </div>
        </div>

        <!-- Блок с контактной информацией -->
        <div class="info-wrapper">
        <div class="contacts-info">
            <h3>Контактная информация</h3>
            <p><strong>Адрес:</strong> г. Москва, ул. Промышленная, д. 15</p>
            <p><strong>Телефон:</strong> +7 (495) 123-45-67</p>
            <p><strong>Email:</strong> info@pharmenergo.ru</p>
        </div>

        <div class="working-hours">
            <h3>Режим работы</h3>
            <p><strong>Пн-Пт:</strong> 9:00-18:00</p>
            <p><strong>Сб-Вс:</strong> Выходной</p>
        </div>

        <div class="feedback-form">
            <h3>Форма обратной связи</h3>
            <form>
            <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" id="name" name="name" required />
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required />
            </div>

            <div class="form-group">
                <label for="message">Сообщение</label>
                <textarea id="message" name="message" required></textarea>
            </div>

            <button
                type="button"
                class="submit-btn"
                onclick="alert('Сообщение отправлено!')"
            >
                Отправить
            </button>
            </form>
        </div>
        </div>
    </div>
    </div>
</main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
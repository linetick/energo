<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Главная");
?>

    <!-- Основное содержимое -->
    <main>
      <section class="hero">
        <div class="container">
          <h1>
            <?php $APPLICATION->IncludeComponent(
	            componentName: "bitrix:main.include",
	            componentTemplate: "",
	            arParams: Array(
		            "AREA_FILE_SHOW" => "file",
		            "AREA_FILE_SUFFIX" => "inc",
		            "EDIT_TEMPLATE" => "",
		            "PATH" => "/include/inc_h1.php"
	            )
            );?>
          </h1>
          <p>
            <?php $APPLICATION->IncludeComponent(
	            componentName: "bitrix:main.include",
	            componentTemplate: "",
	            arParams: Array(
		            "AREA_FILE_SHOW" => "file",
		            "AREA_FILE_SUFFIX" => "inc",
		            "EDIT_TEMPLATE" => "",
		            "PATH" => "/include/inc_h1_text.php"
	            )
            );?>
          </p>
        </div>
      </section>
      <section class="about-section">
        <div class="container">
          <!-- Заголовок и кнопка в одной строке -->
          <div class="section-header">
            <h2 class="section-title left-align">
              <?php $APPLICATION->IncludeComponent(
	              componentName: "bitrix:main.include",
	              componentTemplate: "",
	              arParams: Array(
		              "AREA_FILE_SHOW" => "file",
		              "AREA_FILE_SUFFIX" => "inc",
		              "EDIT_TEMPLATE" => "",
		              "PATH" => "/include/inc_h2.php"
	              )
              );?>
            </h2>
              <?php $APPLICATION->IncludeComponent(
	              componentName: "bitrix:main.include",
	              componentTemplate: "",
	              arParams: Array(
		              "AREA_FILE_SHOW" => "file",
		              "AREA_FILE_SUFFIX" => "inc",
		              "EDIT_TEMPLATE" => "",
		              "PATH" => "/include/inc_h2_button.php"
	              )
              );?>
          </div>
          <div class="about-text">
            <p>
              <?php $APPLICATION->IncludeComponent(
	              componentName: "bitrix:main.include",
	              componentTemplate: "",
	              arParams: Array(
		              "AREA_FILE_SHOW" => "file",
		              "AREA_FILE_SUFFIX" => "inc",
		              "EDIT_TEMPLATE" => "",
		              "PATH" => "/include/inc_h2_text.php"
	              )
              );?>
            </p>
          </div>

          <!-- Блок с карточками (остается без изменений) -->
          <div class="features-grid">
            <!-- Карточка 1 -->
            <div class="feature-card">
              <div class="feature-img-container">
                <img
                  src="https://via.placeholder.com/400x250?text=Энергоаудит"
                  alt="Энергетический аудит"
                  class="feature-img"
                />
              </div>
              <div class="feature-content">
                <h3>Энергетический аудит</h3>
                <p>
                  Комплексное обследование предприятий для выявления резервов
                  энергосбережения.
                </p>
                <a href="services.html#audit" class="feature-button"
                  >Подробнее →</a
                >
              </div>
            </div>

            <!-- Карточка 2 -->
            <div class="feature-card">
              <div class="feature-img-container">
                <img
                  src="https://via.placeholder.com/400x250?text=Модернизация"
                  alt="Модернизация оборудования"
                  class="feature-img"
                />
              </div>
              <div class="feature-content">
                <h3>Модернизация оборудования</h3>
                <p>
                  Внедрение современных энергоэффективных технологий на
                  фармпредприятиях.
                </p>
                <a href="services.html#modernization" class="feature-button"
                  >Подробнее →</a
                >
              </div>
            </div>

            <!-- Карточка 3 -->
            <div class="feature-card">
              <div class="feature-img-container">
                <img
                  src="https://via.placeholder.com/400x250?text=Сервис"
                  alt="Техническое обслуживание"
                  class="feature-img"
                />
              </div>
              <div class="feature-content">
                <h3>Техническое обслуживание</h3>
                <p>
                  Гарантийное и постгарантийное обслуживание энергетического
                  оборудования.
                </p>
                <a href="services.html#service" class="feature-button"
                  >Подробнее →</a
                >
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="container">
        <section class="news-section">
          <h2 class="section-title">
            <?php $APPLICATION->IncludeComponent(
	            componentName: "bitrix:main.include",
	            componentTemplate: "",
	            arParams: Array(
		            "AREA_FILE_SHOW" => "file",
		            "AREA_FILE_SUFFIX" => "inc",
		            "EDIT_TEMPLATE" => "",
		            "PATH" => "/include/inc_h3.php"
	            )
            );?>
          </h2>
          <div class="news-grid">
            <?php
              $APPLICATION->IncludeComponent(
              "bitrix:news.list",
             "main_news",
              array(
                "IBLOCK_TYPE" => "news",
                "IBLOCK_ID" => "6", 
                "NEWS_COUNT" => "3",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_ORDER1" => "DESC",
                "FIELD_CODE" => array("ID", "NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE", "DATE_ACTIVE_FROM"),
                "SET_TITLE" => "N",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "3600",
                "DISPLAY_TOP_PAGER" => "N",
                "DISPLAY_BOTTOM_PAGER" => "N"
                )
            );
            ?>
          </div>
        </section>
      </div>

      <!-- Раскрытие информации -->
      <section class="about-section">
        <div class="container">
          <!-- Заголовок и кнопка в одной строке -->
          <div class="section-header">
            <h2 class="section-title left-align">
              <?php $APPLICATION->IncludeComponent(
	              componentName: "bitrix:main.include",
	              componentTemplate: "",
	              arParams: Array(
		              "AREA_FILE_SHOW" => "file",
		              "AREA_FILE_SUFFIX" => "inc",
		              "EDIT_TEMPLATE" => "",
		              "PATH" => "/include/inc_h4.php"
	              )
              );?>
            </h2>
            <?php $APPLICATION->IncludeComponent(
	            componentName: "bitrix:main.include",
	            componentTemplate: "",
	            arParams: Array(
		            "AREA_FILE_SHOW" => "file",
		            "AREA_FILE_SUFFIX" => "inc",
		            "EDIT_TEMPLATE" => "",
		            "PATH" => "/include/inc_h4_button.php"
	            )
            );?>
          </div>

          <div class="about-text">
            <p>
              <?php $APPLICATION->IncludeComponent(
	              componentName: "bitrix:main.include",
	              componentTemplate: "",
	              arParams: Array(
		              "AREA_FILE_SHOW" => "file",
		              "AREA_FILE_SUFFIX" => "inc",
		              "EDIT_TEMPLATE" => "",
		              "PATH" => "/include/inc_h4_text.php"
	              )
              );?>
            </p>
          </div>

          <!-- Блок с карточками (остается без изменений) -->
          <div class="features-grid">
            <!-- Карточка 1 -->
            <div class="feature-card">
              <div class="feature-img-container">
                <img
                  src="https://via.placeholder.com/400x250?text=Энергоаудит"
                  alt="Энергетический аудит"
                  class="feature-img"
                />
              </div>
              <div class="feature-content">
                <h3>Энергетический аудит</h3>
                <p>
                  Комплексное обследование предприятий для выявления резервов
                  энергосбережения.
                </p>
                <a href="services.html#audit" class="feature-button"
                  >Подробнее →</a
                >
              </div>
            </div>

            <!-- Карточка 2 -->
            <div class="feature-card">
              <div class="feature-img-container">
                <img
                  src="https://via.placeholder.com/400x250?text=Модернизация"
                  alt="Модернизация оборудования"
                  class="feature-img"
                />
              </div>
              <div class="feature-content">
                <h3>Модернизация оборудования</h3>
                <p>
                  Внедрение современных энергоэффективных технологий на
                  фармпредприятиях.
                </p>
                <a href="services.html#modernization" class="feature-button"
                  >Подробнее →</a
                >
              </div>
            </div>

            <!-- Карточка 3 -->
            <div class="feature-card">
              <div class="feature-img-container">
                <img
                  src="https://via.placeholder.com/400x250?text=Сервис"
                  alt="Техническое обслуживание"
                  class="feature-img"
                />
              </div>
              <div class="feature-content">
                <h3>Техническое обслуживание</h3>
                <p>
                  Гарантийное и постгарантийное обслуживание энергетического
                  оборудования.
                </p>
                <a href="services.html#service" class="feature-button"
                  >Подробнее →</a
                >
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--Вакансии-->
      <section class="about-section">
        <div class="container">
          <!-- Заголовок и кнопка в одной строке -->
          <div class="section-header">
            <h2 class="section-title left-align">
              <?php $APPLICATION->IncludeComponent(
	              componentName: "bitrix:main.include",
	              componentTemplate: "",
	              arParams: Array(
		              "AREA_FILE_SHOW" => "file",
		              "AREA_FILE_SUFFIX" => "inc",
		              "EDIT_TEMPLATE" => "",
		              "PATH" => "/include/inc_h5.php"
	              )
              );?>
            </h2>
            <?php $APPLICATION->IncludeComponent(
	            componentName: "bitrix:main.include",
	            componentTemplate: "",
	            arParams: Array(
		            "AREA_FILE_SHOW" => "file",
		            "AREA_FILE_SUFFIX" => "inc",
		            "EDIT_TEMPLATE" => "",
		            "PATH" => "/include/inc_h5_button.php"
	            )
            );?>
          </div>

          <div class="about-text">
            <p>
              <?php $APPLICATION->IncludeComponent(
	              componentName: "bitrix:main.include",
	              componentTemplate: "",
	              arParams: Array(
		              "AREA_FILE_SHOW" => "file",
		              "AREA_FILE_SUFFIX" => "inc",
		              "EDIT_TEMPLATE" => "",
		              "PATH" => "/include/inc_h5_text.php"
	              )
              );?>
            </p>
          </div>

          <!-- Блок с карточками (остается без изменений) -->
          <div class="features-grid">
            <!-- Карточка 1 -->
            <div class="feature-card">
              <div class="feature-img-container">
                <img
                  src="https://via.placeholder.com/400x250?text=Энергоаудит"
                  alt="Энергетический аудит"
                  class="feature-img"
                />
              </div>
              <div class="feature-content">
                <h3>Энергетический аудит</h3>
                <p>
                  Комплексное обследование предприятий для выявления резервов
                  энергосбережения.
                </p>
                <a href="services.html#audit" class="feature-button"
                  >Подробнее →</a
                >
              </div>
            </div>

            <!-- Карточка 2 -->
            <div class="feature-card">
              <div class="feature-img-container">
                <img
                  src="https://via.placeholder.com/400x250?text=Модернизация"
                  alt="Модернизация оборудования"
                  class="feature-img"
                />
              </div>
              <div class="feature-content">
                <h3>Модернизация оборудования</h3>
                <p>
                  Внедрение современных энергоэффективных технологий на
                  фармпредприятиях.
                </p>
                <a href="services.html#modernization" class="feature-button"
                  >Подробнее →</a
                >
              </div>
            </div>

            <!-- Карточка 3 -->
            <div class="feature-card">
              <div class="feature-img-container">
                <img
                  src="https://via.placeholder.com/400x250?text=Сервис"
                  alt="Техническое обслуживание"
                  class="feature-img"
                />
              </div>
              <div class="feature-content">
                <h3>Техническое обслуживание</h3>
                <p>
                  Гарантийное и постгарантийное обслуживание энергетического
                  оборудования.
                </p>
                <a href="services.html#service" class="feature-button"
                  >Подробнее →</a
                >
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Контакты-->
      <section class="about-section">
        <div class="container">
          <!-- Заголовок и кнопка в одной строке -->
          <div class="section-header">
            <h2 class="section-title left-align">
              <?php $APPLICATION->IncludeComponent(
	              componentName: "bitrix:main.include",
	              componentTemplate: "",
	              arParams: Array(
		              "AREA_FILE_SHOW" => "file",
		              "AREA_FILE_SUFFIX" => "inc",
		              "EDIT_TEMPLATE" => "",
		              "PATH" => "/include/inc_h6.php"
	              )
              );?>
            </h2>
            <?php $APPLICATION->IncludeComponent(
	            componentName: "bitrix:main.include",
	            componentTemplate: "",
	            arParams: Array(
		            "AREA_FILE_SHOW" => "file",
	              "AREA_FILE_SUFFIX" => "inc",
	              "EDIT_TEMPLATE" => "",
	              "PATH" => "/include/inc_h6_button.php"
              )
             );?>
          </div>

          <div class="about-text">
            <p>
              <?php $APPLICATION->IncludeComponent(
	              componentName: "bitrix:main.include",
	              componentTemplate: "",
	              arParams: Array(
		              "AREA_FILE_SHOW" => "file",
		              "AREA_FILE_SUFFIX" => "inc",
		              "EDIT_TEMPLATE" => "",
		              "PATH" => "/include/inc_h6_text.php"
	              )
              );?>
            </p>
          </div>

          <!-- Блок с карточками (остается без изменений) -->
          <div class="features-grid">
            <!-- Карточка 1 -->
            <div class="feature-card">
              <div class="feature-img-container">
                <img
                  src="https://via.placeholder.com/400x250?text=Энергоаудит"
                  alt="Энергетический аудит"
                  class="feature-img"
                />
              </div>
              <div class="feature-content">
                <h3>Энергетический аудит</h3>
                <p>
                  Комплексное обследование предприятий для выявления резервов
                  энергосбережения.
                </p>
                <a href="services.html#audit" class="feature-button"
                  >Подробнее →</a
                >
              </div>
            </div>

            <!-- Карточка 2 -->
            <div class="feature-card">
              <div class="feature-img-container">
                <img
                  src="https://via.placeholder.com/400x250?text=Модернизация"
                  alt="Модернизация оборудования"
                  class="feature-img"
                />
              </div>
              <div class="feature-content">
                <h3>Модернизация оборудования</h3>
                <p>
                  Внедрение современных энергоэффективных технологий на
                  фармпредприятиях.
                </p>
                <a href="services.html#modernization" class="feature-button"
                  >Подробнее →</a
                >
              </div>
            </div>

            <!-- Карточка 3 -->
            <div class="feature-card">
              <div class="feature-img-container">
                <img
                  src="https://via.placeholder.com/400x250?text=Сервис"
                  alt="Техническое обслуживание"
                  class="feature-img"
                />
              </div>
              <div class="feature-content">
                <h3>Техническое обслуживание</h3>
                <p>
                  Гарантийное и постгарантийное обслуживание энергетического
                  оборудования.
                </p>
                <a href="services.html#service" class="feature-button"
                  >Подробнее →</a
                >
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>

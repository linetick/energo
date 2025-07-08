<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php $APPLICATION->ShowTitle()?></title>
    <?php $APPLICATION->ShowHead(); ?>
    
    <?php
      use Bitrix\Main\Page\Asset;

      $asset = Asset::getInstance();

      $asset->addCss(SITE_TEMPLATE_PATH . '/css/main.css');
      $asset->addCss(SITE_TEMPLATE_PATH . '/css/header.css');
      $asset->addCss(SITE_TEMPLATE_PATH . '/css/footer.css');
      $asset->addCss(SITE_TEMPLATE_PATH . '/css/about.css');
      $asset->addCss(SITE_TEMPLATE_PATH . '/css/contacts.css');
      $asset->addCss(SITE_TEMPLATE_PATH . '/css/news.css');
      $asset->addCss(SITE_TEMPLATE_PATH . '/css/career.css');
      $asset->addCss(SITE_TEMPLATE_PATH . '/css/info.css');

      $asset->addJs("https://api-maps.yandex.ru/2.1/?apikey=ВАШ_API_КЛЮЧ&lang=ru_RU");
      $asset->addJs(SITE_TEMPLATE_PATH . "/script/map.js");
      $asset->addJs("https://kit.fontawesome.com/a076d05399.js");
      $asset->addJs(SITE_TEMPLATE_PATH . '/script/header.js');
      $asset->addJs(SITE_TEMPLATE_PATH . '/script/accordion.js');
    ?>
  </head>
  <body>
    <div id="panel"><?php $APPLICATION->ShowPanel(); ?></div>
    <!-- Шапка сайта -->
    <header>
      <div class="container">
        <!-- Добавляем этот блок для мобильной версии -->
        <div class="mobile-header">
          <button class="menu-toggle" aria-label="Открыть меню">
            <span class="menu-line"></span>
            <span class="menu-line"></span>
            <span class="menu-line"></span>
          </button>
          <a href="/" class="logo-phone">
            <?php $APPLICATION->IncludeComponent(
	            componentName: "bitrix:main.include",
	            componentTemplate: "",
	            arParams: Array(
		            "AREA_FILE_SHOW" => "file",
		            "AREA_FILE_SUFFIX" => "inc",
		            "EDIT_TEMPLATE" => "",
		            "PATH" => "/include/inc_logo.php"
	            )
            );?>
          <span class="logo-text">
            <?php $APPLICATION->IncludeComponent(
	            componentName: "bitrix:main.include",
	            componentTemplate: "",
	            arParams: Array(
		            "AREA_FILE_SHOW" => "file",
		            "AREA_FILE_SUFFIX" => "inc",
		            "EDIT_TEMPLATE" => "",
		            "PATH" => "/include/inc_name.php"
	            )
            );?>
          </span>  
          </a>
        </div>
        <!-- Оставляем ваш существующий header-top, но добавляем класс для модального окна -->
        <div class="header-top mobile-menu">
          <a href="/" class="logo mobile-logo">
            <?php $APPLICATION->IncludeComponent(
	            componentName: "bitrix:main.include",
	            componentTemplate: "",
	            arParams: Array(
		            "AREA_FILE_SHOW" => "file",
		            "AREA_FILE_SUFFIX" => "inc",
		            "EDIT_TEMPLATE" => "",
		            "PATH" => "/include/inc_logo.php"
	            )
            );?>
            <span class="logo-text">
              <?php $APPLICATION->IncludeComponent(
	              componentName: "bitrix:main.include",
	              componentTemplate: "",
	              arParams: Array(
		              "AREA_FILE_SHOW" => "file",
		              "AREA_FILE_SUFFIX" => "inc",
		              "EDIT_TEMPLATE" => "",
		              "PATH" => "/include/inc_name.php"
	              )
              );?>
            </span>
          </a>

          <nav class="main-nav">
            <?$APPLICATION->IncludeComponent("bitrix:menu", "header", Array(
	            "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		          "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		          "DELAY" => "N",	// Откладывать выполнение шаблона меню
		          "MAX_LEVEL" => "1",	// Уровень вложенности меню
		          "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			        0 => "",
		          ),
		          "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		          "MENU_CACHE_TYPE" => "A",	// Тип кеширования
		          "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		          "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		          "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	          ),
	        false
          );?>
          </nav>

          <div class="header-contacts">
            <div class="phone">              
              <?php $APPLICATION->IncludeComponent(
	              componentName: "bitrix:main.include",
	              componentTemplate: "",
	              arParams: Array(
		              "AREA_FILE_SHOW" => "file",
		              "AREA_FILE_SUFFIX" => "inc",
		              "EDIT_TEMPLATE" => "",
		              "PATH" => "/include/inc_phone.php"
	              )
              );?>
            </div>
            <div class="city-select">
              <select>
                <option>Красноярск</option>
                <option>Санкт-Петербург</option>
                <option>Новосибирск</option>
                <option>Екатеринбург</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </header>

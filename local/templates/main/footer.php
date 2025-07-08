<!-- Подвал сайта -->
<footer>
  <div class="container">
    <div class="footer-content">
      <div class="footer-column">
        <h3>Компания</h3>
        <?php
        $APPLICATION->IncludeComponent(
          "bitrix:menu",
          "footer",
          array(
            "ALLOW_MULTI_SELECT" => "N",
            "CHILD_MENU_TYPE" => "left",
            "DELAY" => "N",
            "MAX_LEVEL" => "1",
            "MENU_CACHE_GET_VARS" => array(),
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_TYPE" => "A",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "ROOT_MENU_TYPE" => "top",
            "USE_EXT" => "N"
          ),
          false
        );
        ?>
      </div>

      <div class="footer-column">
        <h3>Контакты</h3>
        <p>
          <?php
          $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            array(
              "AREA_FILE_SHOW" => "file",
              "PATH" => "/include/inc_address.php",
              "EDIT_TEMPLATE" => ""
            ),
            false
          );
          ?>
        </p>
        <p>
          <?php
          $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            array(
              "AREA_FILE_SHOW" => "file",
              "PATH" => "/include/inc_full_phone.php",
              "EDIT_TEMPLATE" => ""
            ),
            false
          );
          ?>
        </p>
        <p>
          <?php
          $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            array(
              "AREA_FILE_SHOW" => "file",
              "PATH" => "/include/inc_email.php",
              "EDIT_TEMPLATE" => ""
            ),
            false
          );
          ?>
        </p>
        <p>
          <?php
          $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            array(
              "AREA_FILE_SHOW" => "file",
              "PATH" => "/include/inc_working_hours.php",
              "EDIT_TEMPLATE" => ""
            ),
            false
          );
          ?>
        </p>
      </div>

      <div class="footer-column">
        <h3>Социальные сети</h3>
        <div class="social-links">
          <a href="#"><i class="fab fa-vk"></i></a>
          <a href="#"><i class="fab fa-telegram"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-linkedin"></i></a>
        </div>
        <?php if ($APPLICATION->GetCurPage(false) !== '/contacts/'): ?>
          <h3>Карта</h3>
          <div class="map-container" id="map">
            <!-- Здесь будет карта -->
          </div>
        <?php endif; ?>
      </div>
    </div>

    <div class="footer-bottom">
      <p>
        <?php
        $APPLICATION->IncludeComponent(
          "bitrix:main.include",
          "",
          array(
            "AREA_FILE_SHOW" => "file",
            "PATH" => "/include/inc_copyright.php",
            "EDIT_TEMPLATE" => ""
          ),
          false
        );
        ?>
      </p>
      <p>
        <?php
        $APPLICATION->IncludeComponent(
          "bitrix:main.include",
          "",
          array(
            "AREA_FILE_SHOW" => "file",
            "PATH" => "/include/inc_legal.php",
            "EDIT_TEMPLATE" => ""
          ),
          false
        );
        ?>
      </p>
    </div>
  </div>
</footer>


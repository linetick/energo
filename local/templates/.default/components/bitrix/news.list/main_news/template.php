<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php foreach ($arResult["ITEMS"] as $arItem): ?>
  <article class="news-card">
    <div
      class="news-img"
      style="background-image: url('<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>');"
    ></div>
    <div class="news-content">
      <div class="news-date"><?= $arItem["DISPLAY_ACTIVE_FROM"] ?></div>
      <h3 class="news-title"><?= $arItem["NAME"] ?></h3>
      <p><?= $arItem["PREVIEW_TEXT"] ?></p>
    </div>
  </article>
<?php endforeach; ?>

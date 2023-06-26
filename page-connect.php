<!DOCTYPE html>
<html lang="ru">

<head>
  <?php wp_head(); ?>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
  <?php
  while (have_posts()) {
    the_post(); ?>

    <header>
      <div class="header__header-connect header-connect">
        <figure class="header__logo logo">
          <img width="110" height="30" src="<?php echo get_theme_file_uri('/assets/images/icons/logo.png'); ?>"
            alt="/assets/images/icons/logo.svg" />
        </figure>
      </div>
      <!-- Accordion dropdown -->
      <div class="header__accordion accordion">
        <div class="accordion__inner">
          <ul class="accordion__accordion-list accordion-list">
            <a href="">
              <li class="accordion-list__item">
                <figure class="accordion-list__icon">
                  <img width="100%" src="./assets/images/tiens-icon.PNG" alt="./assets/images/tiens-icon.PNG" />
                </figure>
                <div class="accordion-list__title">
                  <p>БАД</p>
                </div>
              </li>
            </a>
            <a href="">
              <li class="accordion-list__item">
                <figure class="accordion-list__icon">
                  <img width="100%" src="./assets/images/tiens-icon.PNG" alt="./assets/images/icons/logo.svg" />
                </figure>
                <div class="accordion-list__title">
                  <p>Косметика</p>
                </div>
              </li>
            </a>
            <a href="">
              <li class="accordion-list__item">
                <figure class="accordion-list__icon">
                  <img width="100%" src="./assets/images/tiens-icon.PNG" alt="./assets/images/tiens-icon.PNG" />
                </figure>
                <div class="accordion-list__title">
                  <p>Для здоровья</p>
                </div>
              </li>
            </a>
            <a href="">
              <li class="accordion-list__item">
                <figure class="accordion-list__icon">
                  <img width="100%" src="./assets/images/tiens-icon.PNG" alt="./assets/images/tiens-icon.PNG" />
                </figure>
                <div class="accordion-list__title">
                  <p>По уходу за домом</p>
                </div>
              </li>
            </a>
          </ul>
        </div>
      </div>
    </header>
    <main class="connect-main">
      <section class="main__connect-banner connect-banner">
        <div class="connect-banner__slider">
          <div class="connect-banner__slide">
            <img src="https://tiens-images.object.pscloud.io/577A0149.jpg" alt="Мультивитаминный комплекс" />
          </div>
          <div class="connect-banner__slide">
            <img src="https://tiens-images.object.pscloud.io/577A0062.jpg" alt="Спирулина в капсулах Тяньши" />
          </div>
          <div class="connect-banner__slide">
            <img src="https://tiens-images.object.pscloud.io/577A0088.jpg" alt="Капсулы с цинком Тяньши" />
          </div>
          <div class="connect-banner__slide">
            <img src="https://tiens-images.object.pscloud.io/577A0080.jpg" alt="Капсулы с ресвератролом Тяньши" />
          </div>
          <div class="connect-banner__slide">
            <img src="https://tiens-images.object.pscloud.io/577A0094.jpg" alt="Кальций Тяньши" />
          </div>
          <div class="connect-banner__slide">
            <img src="https://tiens-images.object.pscloud.io/577A0100.jpg" alt="БАД Омега-3" />
          </div>
          <div class="connect-banner__slide">
            <img src="https://tiens-images.object.pscloud.io/577A0114.jpg" alt="Капсулы Тяньши с мицелием кордицепса" />
          </div>
          <div class="connect-banner__slide">
            <img src="https://tiens-images.object.pscloud.io/577A0117.jpg" alt="Капсулы Тяньши с мицелием кордицепса" />
          </div>
          <div class="connect-banner__slide">
            <img src="https://tiens-images.object.pscloud.io/577A0119.jpg" alt="Витамины для глаз Тяньши" />
          </div>
          <div class="connect-banner__slide">
            <img src="https://tiens-images.object.pscloud.io/577A0125.jpg"
              alt="Жевательные таблетки с целлюлозой Тяньши" />
          </div>
          <div class="connect-banner__slide">
            <img src="https://tiens-images.object.pscloud.io/577A0220-min.jpg" alt="Целебные капсулы Тяньши" />
          </div>
          <div class="connect-banner__slide">
            <img src="https://tiens-images.object.pscloud.io/577A0158.jpg" alt="Сироп из фруктозанов" />
          </div>
          <div class="connect-banner__slide">
            <img src="https://tiens-images.object.pscloud.io/577A0164.jpg"
              alt="Концентрированное многофункционльное моющее средство DICHO" />
          </div>
          <div class="connect-banner__slide">
            <img src="https://tiens-images.object.pscloud.io/577A0172.jpg" alt="Женские гигиенические прокладки" />
          </div>
          <div class="connect-banner__slide">
            <img src="https://tiens-images.object.pscloud.io/577A0184-min.jpg" alt="Пребиотик с пищевыми волокнами" />
          </div>
          <div class="connect-banner__slide">
            <img src="https://tiens-images.object.pscloud.io/577A0192-min.jpg" alt="Чай Тяньши" />
          </div>
          <div class="connect-banner__slide">
            <img src="https://tiens-images.object.pscloud.io/577A0196-min.jpg"
              alt="Зубная паста с экстрактами китайских целебных трав" />
          </div>
          <div class="connect-banner__slide">
            <img src="https://tiens-images.object.pscloud.io/577A0202-min.jpg" alt="Чай Тьен Фэн Ча" />
          </div>
          <div class="connect-banner__slide">
            <img src="https://tiens-images.object.pscloud.io/577A0206.jpg" alt="Ишоукан" />
          </div>
          <div class="connect-banner__slide">
            <img src="https://tiens-images.object.pscloud.io/577A0212.jpg" alt="Cilvaris" />
          </div>
          <div class="connect-banner__slide">
            <img src="https://tiens-images.object.pscloud.io/577A0234.jpg" alt="Кальций Тяньши" />
          </div>
          <div class="connect-banner__slide">
            <img src="https://tiens-images.object.pscloud.io/577A0239.jpg" alt="Капсулы с селеном" />
          </div>
          <div class="connect-banner__slide">
            <img src="https://tiens-images.object.pscloud.io/577A0239.jpg" alt="Капсулы с селеном" />
          </div>
          <div class="connect-banner__slide">
            <img src="https://tiens-images.object.pscloud.io/577A0249.jpg" alt="Кальций с высоким содержанием" />
          </div>
          <div class="connect-banner__slide">
            <img src="https://tiens-images.object.pscloud.io/577A0256.jpg" alt="Хитозан" />
          </div>
        </div>
      </section>
      <section class="main__connect-media connect-media">
        <ul class="connect-media__mobile-icons mobile-icons">
          <li>
            <a href="" class="mobile-icons__mobile-yt mobile-yt _mobile_ico">
              <figure class="media-btn__icon-wrapper">
                <i class="fa-brands fa-youtube"></i>
              </figure>
            </a>
          </li>
          <li>
            <a href="http://wa.me/77715588816/" class="mobile-icons__mobile-yt mobile-wa _mobile_ico">
              <figure class="media-btn__icon-wrapper">
                <i class="fa-brands fa-whatsapp"></i>
              </figure>
            </a>
          </li>
          <li>
            <a href="https://instagram.com/tienskz.official?igshid=MzRlODBiNWFlZA==" class="mobile-icons__mobile-yt mobile-insta _mobile_ico">
              <figure class="media-btn__icon-wrapper">
                <i class="fa-brands fa-instagram"></i>
              </figure>
            </a>
          </li>
          <li>
            <a href="https://m-kz.tiens.com/?tpclid=facebook.PAAaYbv7fa3-sJCshVKjukJ7eZpt6ffbTPluctirFw_zZlMStOyepRa2dX2jo_aem_th_AZKZH_fS3deHXodRY-RncWKLW6R-DPtgzhroca_6YdzDPApr9zjh2KoggnZcipLizWY" class="mobile-icons__mobile-yt mobile-desktop _mobile_ico">
              <figure class="media-btn__icon-wrapper">
                <ion-icon name="phone-portrait-outline"></ion-icon>
              </figure>
            </a>
          </li>
        </ul>
        <div class="connect-media__inner">
          <a href="" target="_blank" class="media-btn connect-yt">
            <figure class="media-btn__icon-wrapper">
              <i class="fa-brands fa-youtube"></i>
            </figure>
            <span>Перейти на YouTube канал</span>
          </a>
          <a href="http://wa.me/77715588816/" target="_blank" class="media-btn connect-wa">
            <figure class="media-btn__icon-wrapper">
              <i class="fa-brands fa-whatsapp"></i>
            </figure>
            <span>Связаться по Whatsapp</span>
          </a>
          <a href="https://instagram.com/tienskz.official?igshid=MzRlODBiNWFlZA==" target="_blank"
            class="media-btn connect-insta">
            <figure class="media-btn__icon-wrapper">
              <i class="fa-brands fa-instagram"></i>
            </figure>
            <span>Перейти на Instagram</span>
          </a>
          <a href="https://m-kz.tiens.com/?tpclid=facebook.PAAaYbv7fa3-sJCshVKjukJ7eZpt6ffbTPluctirFw_zZlMStOyepRa2dX2jo_aem_th_AZKZH_fS3deHXodRY-RncWKLW6R-DPtgzhroca_6YdzDPApr9zjh2KoggnZcipLizWY"
            target="_blank" class="media-btn connect-desktop">
            <figure class="media-btn__icon-wrapper">
              <ion-icon name="desktop-outline"></ion-icon>
            </figure>
            <span>Перейти на сайт компании</span>
          </a>
        </div>
      </section>
    </main>





  <?php }
  get_footer();
  ?>
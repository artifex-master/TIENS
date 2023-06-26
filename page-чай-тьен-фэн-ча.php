<?php 
  get_header();

  while(have_posts()) {
    the_post();
  ?>

<div class="main__overlay overlay"></div>
    <div class="main__hero hero hero__fen-cha">
    <div class="containerx1024">
        <div class="hero__main-title main-title">
          <h1>Чай «Тяньши» «Тьен Фэн Ча»</h1>
        </div>
      </div>
      <div class="hero__containerx730 containerx730">
        <div class="hero__outer">
          <div class="hero__inner">
            <div class="hero__main-subtitle main-subtitle">
              <span>Превосходное фитотерапевтическое средство обладает антиоксидантным, противовоспалительным, жаропонижающим и бактерицидным действием</span>
            </div>
            <div class="hero__btn-wrapper">
              <a href="https://web-kz.tiens.com/product/detail/10027609" class="btn">ПЕРЕЙТИ В МАГАЗИН</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="recommendation">
      <div class="containerx730">
        <div class="recommendation__outer">
          <div class="recommendation__inner">
            <div class="recommendation__title">
              <p>БАД РЕКОМЕНДОВАН ДЛЯ:</p>
            </div>
            <ul class="recommendation__recommendation-list recommendation-list">
              <li class="recommendation-list__item">активизации обмена веществ у людей с избыточным весом</li>
              <li class="recommendation-list__item">регуляции работы желудочно-кишечного тракта</li>
              <li class="recommendation-list__item">устранения синдрома хронической усталости</li>
              <li class="recommendation-list__item">детоксикации организма</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="features">
      <div class="features__outer">
        <div class="features__inner">
          <div class="features__title">
            <p>Преимущества</p>
          </div>
          <ul class="features__features-list features-list">
            <li class="features-list__item">
              <figure class="features__img">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/cholesterol.png'); ?>" alt="./assets/images/features-8.jpg" />
              </figure>
              <div class="features__desc">
                <p>снижает уровень холестерина в крови</p>
              </div>
              <div class="features__square-figure"></div>
            </li>
            <li class="features-list__item">
              <figure class="features__img">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/intestine.png'); ?>" alt="./assets/images/features-9.jpg" />
              </figure>
              <div class="features__desc">
                <p>облегчает работу кишечника</p>
              </div>
              <div class="features__square-figure"></div>
            </li>
            <li class="features-list__item">
              <figure class="features__img">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/amino-acids.png'); ?>" alt="./assets/images/features-4.png" />
              </figure>
              <div class="features__desc">
                <p>улучшает выведение токсинов из организма</p>
              </div>
              <div class="features__square-figure"></div>
            </li>
            <li class="features-list__item">
              <figure class="features__img">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/sugar.png'); ?>" alt="./assets/images/features-4.png" />
              </figure>
              <div class="features__desc">
                <p>регулирует уровень сахара в крови</p>
              </div>
              <div class="features__square-figure"></div>
            </li>
            <li class="features-list__item">
              <figure class="features__img">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/metabolism.png'); ?>" alt="./assets/images/features-4.png" />
              </figure>
              <div class="features__desc">
                <p>участвует в нормализации обмена веществ</p>
              </div>
              <div class="features__square-figure"></div>
            </li>
            <li class="features-list__item">
              <figure class="features__img">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/vitamins.png'); ?>" alt="./assets/images/features-4.png" />
              </figure>
              <div class="features__desc">
                <p>эффективен как биостимулятор, витаминный и энергетический напиток</p>
              </div>
              <div class="features__square-figure"></div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="condition tien-fen__condition">
      <div class="containerx850">
        <div class="condition__outer">
          <div class="condition__inner">
            <div class="condition__title">
              <h2>Состав и способ применения</h2>
            </div>
            <div class="condition__info">
              <div class="condition__row">
                <div class="condition__label">
                  <span>СОСТАВ:</span>
                </div>
                <div class="condition__span">
                  <span>-	листья лотоса</span><br>
                  <span>-	семена Кассия тора</span><br>
                  <span>-	чай «Улун»</span><br>
                  <span>-	частуха подорожниковая</span><br>
                  <span>-	чай «Кудин»</span><br>
                  <span>-	ревень</span><br>
                  <span>-	цедра мандарина</span><br>
                </div>
              </div>
              <div class="condition__row">
                <div class="condition__label">
                  <span>ПРИМЕНЕНИЕ:</span>
                </div>
                <div class="condition__span">
                  <span>Взрослым 1-2 пакетика на 200 мл воды, настоять 15 минут. Принимать 2 раза в день во время еды</span>
                </div>
              </div>
              <div class="condition__row">
                <div class="condition__label">
                  <span>ПРОТИВОПОКАЗАНИЯ:</span>
                </div>
                <div class="condition__span">
                  <span>-	индивидуальная непереносимость компонентов</span>
                  <span>-	беременность</span>
                  <span>-	период лактации</span>
                  <span>-	не рекомендуется детям до 12 лет</span>
                </div>
              </div>
              <div class="condition__row">
                <div class="condition__label">
                  <span>НЕ ЯВЛЯЕТСЯ ЛЕКАРСТВЕННЫМ СРЕДСТВОМ</span>
                </div>
              </div>
            </div>
            <div class="condition__btn">
              <a href="https://web-kz.tiens.com/product/detail/10027609" class="btn">ПЕРЕЙТИ В МАГАЗИН</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="desc">
      <div class="containerx850">
        <div class="desc__outer">
          <div class="desc__inner">
            <div class="desc__title desc-title__tien-fen-title">
              <h2>Идеальное средство для снижения веса</h2>
            </div>
            <div class="desc__content">
              <span class="desc__span">Уникальный состав напитка благотворно воздействует на организм человека.</span>
              <span class="desc__span"><span class="fw-700">Листья лотоса</span> благодаря вяжущему свойству оказывают жаропонижающий эффект, активизируют энергию ЦИ, способствуют расширению сосудов, снижению кровяного давления.</span>
              <span class="desc__span"><span class="fw-700">Семена Кассия</span> тора препятствуют повышению уровня холестерина и образованию бляшек. Обладают отличной способностью снижения липидов.</span>            
              <span class="desc__span"><span class="fw-700">Частуха подорожниковая</span> влияет на разложение жиров, уменьшая количество веществ, необходимых для синтеза холестерина.</span>            
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="video">
      <div class="containerx850">
        <div class="video__outer">
          <div class="video__inner">
            <div class="video-wrapper">
              <iframe width="100%" height="100%" src="https://www.youtube.com/embed/oazoA3RGkOg" title="Чай Тяньши Тьен Фэн Ча"></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="feedback">
      <div class="containerx1024">
        <div class="feedback__outer">
          <div class="feedback__inner">
            <div class="feedback__title">
              <h2>Отзывы</h2>
            </div>
            <ul class="feedback__feedback-list feedback-list">
              <li class="feedback-list__item">
                <div class="feedback-list__txt">
                  <p>Пила такой чай года два назад. Пила довольно долго – месяцев 6. Напиток эффективен, особенно, если учесть, что средства вроде «выпил – похудел» редко помогают без изменения системы питания и увеличения физической нагрузки. За полгода я похудела не очень сильно – примерно килограмма на 3, однако приятный бонус в виде хорошего самочувствия и энергичности меня очень порадовал. И это при том, что я не меняла свой режим питания, да и нагрузки не увеличились. Просто появилось столько сил, что я даже после работы успевала переделать много дел и еще силы оставались на «погулять». Другое немаловажное дополнение – у меня перестали отекать ноги после рабочего дня. Побочных эффектов я тоже не заметила.</p>
                </div>
                <div class="feedback-list__feedback-persona feedback-persona">
                  <div class="feedback-persona__name">
                    <p>Алуа, 25 лет</p>
                  </div>
                </div>
              </li>
              <li class="feedback-list__item">
                <div class="feedback-list__txt">
                  <p>У меня был очень низкий гемоглобин. Для того чтобы его поднять, мне сказали, что сначала нужно почистить желудок, так как в основном большинство болезней от загрязнения желудка, и посоветовали чай «Тяньши» «Тьен Фэн Ча». Когда начала его пить, сразу почувствовала изменения. Нормализовался стул, хотя у меня с детства были с этим проблемы. Плюс ко всему начал уходить живот. Я не была толстой, но проблема с животиком ушла. Порадовал приятный запах чая, в отличие от других чаев для похудения. Можно пить целый день, как воду. После очищения я пропила цинк и кальций, и гемоглобин стал равен 126.
                  </p>
                </div>
                <div class="feedback-list__feedback-persona feedback-persona">
                  <div class="feedback-persona__name">
                    <p>Салтанат, 34 года</p>
                  </div>
                </div>
              </li>
              <li class="feedback-list__item">
                <div class="feedback-list__txt">
                  <p>Впервые столкнулась с чаем для похудения «Тьен Фэн Ча» после рождения сына. Набрала порядка 20 кг. Заниматься спортом не было возможности, времени не было даже на сон. В первый же месяц я сбросила 4 кг. При этом чай не вызывает никаких побочных действий. Он содержит в себе так называемый «суперсжигатель жира» (листья Лотоса, семена Кассия тора, частухи, ревеня, кожуру мандарина). То есть он полностью натурален и не содержит химии. Чай желательно пить утром, так как он имеет тонизирующий эффект, заваривать 1 пакетик на литр воды. Он отлично выводит шлаки и следит за холестерином. Пью уже полгода, вес пришел в норму.</p>
                </div>
                <div class="feedback-list__feedback-persona feedback-persona">
                  <div class="feedback-persona__name">
                    <p>Екатерина, 30 лет</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="more-about-product">
      <div class="more-about-product__outer">
        <div class="more-about-product__inner">
          <div class="about-product__title">
            <h2>Больше о продукте</h2>
          </div>
          <ul class="more-about-product__about-product-list about-product-list">
            <li class="about-product-list__item">
              <figure class="about-product-list__img about-product_hover">
                <img width="100%" height="100%" src="<?php echo get_theme_file_uri('/assets/images/tien_fen_cha/1.jpg'); ?>" alt="./assets/images/tien_fen_cha/1.jpg" />
              </figure>
            </li>
            <li class="about-product-list__item">
              <figure class="about-product-list__img about-product_hover">
                <img width="100%" height="100%" src="<?php echo get_theme_file_uri('/assets/images/tien_fen_cha/4.jpg'); ?>" alt="./assets/images/tien_fen_cha/2.jpg" />
              </figure>
            </li>
            <li class="about-product-list__item">
              <figure class="about-product-list__img about-product_hover">
                <img width="100%" height="100%" src="<?php echo get_theme_file_uri('/assets/images/tien_fen_cha/6.jpg'); ?>" alt="./assets/images/tien_fen_cha/3.jpg" />
              </figure>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <!-- <section class="certificates">
      <div class="containerx850">
        <div class="certificates__outer">
          <div class="certificates__inner">
            <div class="certificates__title">
              <h2>Сертификаты</h2>
            </div>
            <div class="certificates__certificates-wrapper certificates-wrapper">
              <figure class="certificates-wrapper__certificate certificate">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/frukt/cert-1.jpg'); ?>" alt="./assets/images/certificate_one.jpg" />
              </figure>
              <figure class="certificates-wrapper__certificate certificate">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/frukt/cert-2.jpg'); ?>" alt="./assets/images/certificate_two.jpg" />
              </figure>
            </div>
          </div>
        </div>
      </div>

    </section> -->





<?php }
  get_footer();
?>

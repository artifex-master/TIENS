<?php 
  get_header();

  while(have_posts()) {
    the_post();
  ?>

<div class="main__overlay overlay"></div>
    <div class="main__hero hero hero__cilvaris">
      <div class="containerx1024">
        <div class="hero__main-title main-title">
          <h1>Косметический прибор<br>«Секрет красоты» CILVARIS «Тяньши»<br>Модель TQ-D27</h1>
        </div>
      </div>
      <div class="hero__containerx730 containerx730">
        <div class="hero__outer">
          <div class="hero__inner">
            <div class="hero__main-subtitle main-subtitle">
              <span>Сохранение красоты, молодости – естественное желание каждой женщины. Для достижения желаемых результатов коже нужен правильный уход</span>
              <span>Инновационный прибор «Секрет красоты» CILVARIS от «Тяньши» разработан с учетом последних достижений в области косметологии</span>
              <span>Комплексно воздействуя на кожный покров, благодаря высокочастотному току, термальная энергия CILVARIS делает кожу гладкой и упругой</span>
            </div>
            <div class="hero__btn-wrapper">
              <a href="https://web-kz.tiens.com/product/detail/10027561" class="btn">ПЕРЕЙТИ В МАГАЗИН</a>
            </div>
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
              <p>Рекомендован для:</p>
            </div>
            <ul class="recommendation__recommendation-list recommendation-list">
              <li class="recommendation-list__item">питания и обогащения кожи</li>
              <li class="recommendation-list__item">более глубокого проникновения питательных веществ при снятии макияжа</li>
              <li class="recommendation-list__item">устранения мелких морщин, пигментных пятен, сухости и шелушения, расширенных пор, комедонов и акне, покраснений и сосудистого рисунка</li>
              <li class="recommendation-list__item">v-моделирования нижней части лица</li>
              <li class="recommendation-list__item">сохранения упругости и эластичности кожи</li>
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
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/skin-aging.png'); ?>" alt="./assets/images/features-8.jpg" />
              </figure>
              <div class="features__desc">
                <p>замедляет процессы старения кожи</p>
              </div>
              <div class="features__square-figure"></div>
            </li>
            <li class="features-list__item">
              <figure class="features__img">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/wrinkle.png'); ?>" alt="./assets/images/features-1.jpg" />
              </figure>
              <div class="features__desc">
                <p>разглаживает мелкие морщины</p>
              </div>
              <div class="features__square-figure"></div>
            </li>
            <li class="features-list__item">
              <figure class="features__img">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/smooth.png'); ?>" alt="./assets/images/features-9.jpg" />
              </figure>
              <div class="features__desc">
                <p>удаляет носогубные складки</p>
              </div>
              <div class="features__square-figure"></div>
            </li>
            <li class="features-list__item">
              <figure class="features__img">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/eye.png'); ?>" alt="./assets/images/features-10.png" />
              </figure>
              <div class="features__desc">
                <p>убирает «мешки» под глазами</p>
              </div>
              <div class="features__square-figure"></div>
            </li>
            <li class="features-list__item">
              <figure class="features__img">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/face.png'); ?>" alt="./assets/images/features-10.png" />
              </figure>
              <div class="features__desc">
                <p>подтягивает контур лица</p>
              </div>
              <div class="features__square-figure"></div>
            </li>
            <li class="features-list__item">
              <figure class="features__img">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/skin.png'); ?>" alt="./assets/images/features-10.png" />
              </figure>
              <div class="features__desc">
                <p>борется с вялостью кожи</p>
              </div>
              <div class="features__square-figure"></div>
            </li>
            <li class="features-list__item">
              <figure class="features__img">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/shield.png'); ?>" alt="./assets/images/features-10.png" />
              </figure>
              <div class="features__desc">
                <p>предотвращает появление акне</p>
              </div>
              <div class="features__square-figure"></div>
            </li>

            <li class="features-list__item">
              <figure class="features__img">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/water-cycle.png'); ?>" alt="./assets/images/features-10.png" />
              </figure>
              <div class="features__desc">
                <p>усиливает циркуляцию крови</p>
              </div>
              <div class="features__square-figure"></div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="condition cilvaris__condition">
      <div class="containerx850">
        <div class="condition__outer">
          <div class="condition__inner">
            <div class="condition__title">
              <h2>Способ применения</h2>
            </div>
            <div class="condition__info">
              <div class="condition__row">
                <div class="condition__label">
                  <span class="fw-700">Очищение лица</span>
                </div>
                <ul class="condition__span">
                  <li>Удалите макияж и очистите лицо с помощью косметического средства или используйте прибор в режиме ультразвука.</li>
                </ul>
              </div>
              <div class="condition__row">
                <div class="condition__label">
                  <span class="fw-700">Нанесение крема, лосьона и других средств</span>
                </div>
                <div class="condition__span">
                  <span>В соответствии с выбранным режимом и индивидуальным типом кожи выберите средство по уходу.</span>
                </div>
              </div>
              <div class="condition__row">
                <div class="condition__span">
                  <span><span class="fw-700">Режим RF</span> – насыщенные средства (эссенция, эмульсия, гель)</span>
                  <span><span class="fw-700">Режим EMS</span> – гель, эмульсия, крем с легкой текстурой для лица, маска</span>
                  <span><span class="fw-700">Режим CV</span> – эмульсия, крем с легкой текстурой для лица (в режиме чистки используйте средство для удаления макияжа)</span>
                  <span><span class="fw-700">Режим АВТО</span> – средство по уходу за кожей с легкой текстурой, маски</span><br>
                  <span><span class="fw-700">Внимание!</span> Не используйте прибор на сухой коже, обязательно наносите косметическое средство перед использованием. Не задерживайтесь аппаратом на одном участке кожи дольше 2 секунд. Имеются противопоказания. Внимательно ознакомьтесь с инструкцией перед использованием.</span>
                </div><br>
                <div class="condition__row">
                  <div class="condition__label">
                    <span class="fw-700">Не использовать прибор при наличии:</span>
                  </div>
                  <div class="condition__span">
                  <span>- кардиостимуляторов</span>
                  <span>- подключенных электрокардиографов и других приборов</span>
                  <span>- металлических предметов в теле</span>
                </div>
                </div><br>
                <div class="condition__row">
                  <div class="condition__label">
                    <span class="fw-700">Во избежание несчастных случаев и травм не использовать прибор:</span>
                  </div>
                  <div class="condition__span">
                  <span>- в области установки ортодонтических зубных скоб</span>
                  <span>- рядом с участками, где были проведены пластические операции</span>
                  <span>- в зонах ресниц, бровей и глазного яблока</span>
                  <span>- в местах порезов</span>
                </div>
                </div><br>
              </div>
            </div>
            <div class="condition__btn">
              <a href="https://web-kz.tiens.com/product/detail/10027561" class="btn">ПЕРЕЙТИ В МАГАЗИН</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="desc">
      <div class="containerx850">
        <div class="desc__outer">
          <div class="desc__inner">
            <div class="desc__title desc-title__sirop">
              <h2>Качественная забота о молодости кожи</h2>
            </div>
            <div class="desc__content">
              <span class="desc__span">Одна из главных особенностей CILVARIS – возможность его применения в сочетании с косметическими средствами. Используйте прибор вместе с линией средств с экстрактами морских водорослей и дрожжей серии CELLES TIANE и получайте неповторимый результат уже после первых процедур.</span>
              <span class="desc__span"><span class="fw-700">Прибор сочетает в себе 4 уникальных методики для стимуляции кожи:</span></span>
              <span class="desc__span"><span class="fw-700">Высокочастотный режим (RF)</span> – активизирует кожные фибробласты, способствует увеличению содержания коллагена в тканях.</span>
              <span class="desc__span"><span class="fw-700">Режим микротоков (EMS)</span> – легко проникает в кожную структуру, эффективно стимулируя мышцы и нервные окончания.</span>
              <span class="desc__span"><span class="fw-700">Ультразвуковой режим (CV)</span> – способствует глубокому проникновению питательных веществ, дает эффект микромассажа оболочки клеток, приводит в движение цитоплазму, эффективно восполняет недостаток влаги.</span>
              <span class="desc__span"><span class="fw-700">Комбинированный режим (АВТО)</span> – способствует удалению токсинов, сужению пор, общему омоложению кожи, увеличению количества коллагена в тканях.</span>

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
              <iframe width="100%" height="100%" src="https://www.youtube.com/embed/9kZGQkfIg2U" title="Cilvaris"></iframe>
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
                  <p>Косметический прибор CILVARIS от «Тяньши» мне подарил брат на день рождения. Согласно инструкции, устройство предназначено для ухода за кожей лица, шеи. Меня привлек набор из нескольких функций для улучшения качества кожи, включая радиочастотный режим, режим СV (ультразвуковые волны) и другие. Я применяю все режимы, активно начала использовать год назад. И довольна результатом! Мелкие морщины ушли, тон кожи стал ровнее.</p>
                </div>
                <div class="feedback-list__feedback-persona feedback-persona">
                  <div class="feedback-persona__name">
                    <p>Гульмира, 30 лет</p>
                  </div>
                </div>
              </li>
              <li class="feedback-list__item">
                <div class="feedback-list__txt">
                  <p>CILVARIS от «Тяньши», действительно, работает. Главное, использовать его регулярно. При правильном выборе режима и косметического средства прибор помогает улучшить состояние кожи, уменьшает морщины, улучшает тон и текстуру кожи. Также он участвует в борьбе с прыщами и другими проблемами. Используем с мамой по очереди – очень удобно, что не нужно ехать к косметологу, тратить дополнительные средства.  
                  </p>
                </div>
                <div class="feedback-list__feedback-persona feedback-persona">
                  <div class="feedback-persona__name">
                    <p>Мария, 43 года</p>
                  </div>
                </div>
              </li>
              <li class="feedback-list__item">
                <div class="feedback-list__txt">
                  <p>С продукцией «Тяньши» знакома давно. Часто пропиваю курсами БАДы для женщин, в межсезонье дети пьют кальций. Мужу и папе заказываю омегу, цинк, кальций. Но вот с приборами компании знакома не была. Подруга приобрела косметический прибор CILVARIS и заинтересовала меня. Взяла у нее для тестирования. Аппарат достоин похвалы. Я использую его второй месяц и могу сказать, что результаты есть, но они не появились мгновенно. Лишь спустя полтора месяца регулярного использования я заметила положительные изменения в своей коже. Она стала более упругой и эластичной, мелкие мимические морщины сократились. Учитывая, что мне 36 лет, могу смело утверждать, что это то, что мне сейчас нужно. </p>
                </div>
                <div class="feedback-list__feedback-persona feedback-persona">
                  <div class="feedback-persona__name">
                    <p>Виолетта, 36 года</p>
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
                <img width="100%" height="100%" src="<?php echo get_theme_file_uri('/assets/images/cilvaris/1.jpg'); ?>" alt="./assets/images/about-product-img-1.jpeg" />
              </figure>
            </li>
            <li class="about-product-list__item">
              <figure class="about-product-list__img about-product_hover">
                <img width="100%" height="100%" src="<?php echo get_theme_file_uri('/assets/images/cilvaris/2.jpg'); ?>" alt="./assets/images/flier_2.png" />
              </figure>
            </li>
            <li class="about-product-list__item">
              <figure class="about-product-list__img about-product_hover">
                <img width="100%" height="100%" src="<?php echo get_theme_file_uri('/assets/images/cilvaris/3.jpg'); ?>" alt="./assets/images/flier_4.png" />
              </figure>
            </li>
            <li class="about-product-list__item">
              <figure class="about-product-list__img about-product_hover">
                <img width="100%" height="100%" src="<?php echo get_theme_file_uri('/assets/images/cilvaris/4.jpg'); ?>" alt="./assets/images/flier_5.png" />
              </figure>
            </li>
            <li class="about-product-list__item">
              <figure class="about-product-list__img about-product_hover">
                <img width="100%" height="100%" src="<?php echo get_theme_file_uri('/assets/images/cilvaris/5.jpg'); ?>" alt="./assets/images/flier_5.png" />
              </figure>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="certificates">
      <div class="containerx850">
        <div class="certificates__outer">
          <div class="certificates__inner">
            <div class="certificates__title">
              <h2>Сертификаты</h2>
            </div>
            <div class="certificates__certificates-wrapper certificates-wrapper">
              <figure class="certificates-wrapper__certificate certificate">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/sirop_iz_finikov/cert-1.jpg'); ?>" alt="./assets/images/certificate_one.jpg" />
              </figure>
              <figure class="certificates-wrapper__certificate certificate">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/sirop_iz_finikov/cert-2.jpg'); ?>" alt="./assets/images/certificate_two.jpg" />
              </figure>
            </div>
          </div>
        </div>
      </div>

    </section>


<?php }
  get_footer();
?>

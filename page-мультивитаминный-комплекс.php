<?php 
  get_header();

  while(have_posts()) {
    the_post();
  ?>

<div class="main__overlay overlay"></div>
    <div class="main__hero hero hero__multi">
    <div class="containerx1024">
        <div class="hero__main-title main-title multi_title">
          <h1>Мультивитаминный комплекс «Тяньши»</h1>
        </div>
      </div>
      <div class="hero__containerx730 containerx730">
        <div class="hero__outer">
          <div class="hero__inner">
            <div class="hero__main-subtitle main-subtitle">
              <span>Сбалансированное соотношение 10 ключевых витаминов для заботы о здоровье всей семьи<br><br>Набор минералов, витаминов, аминокислот и других полезных веществ подобран с учетом суточных норм<br><br>Идеально дополнит рацион при несбалансированном питании, а также придаст силы и энергию ребенку для полноценного роста и развития<br></span>
            </div>
            <div class="hero__btn-wrapper">
              <a href="" class="btn">ПЕРЕЙТИ В МАГАЗИН</a>
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
              <p>БАД рекомендован при:</p>
            </div>
            <ul class="recommendation__recommendation-list recommendation-list">
              <li class="recommendation-list__item">повышенных физических и умственных нагрузках </li>
              <li class="recommendation-list__item">несбалансированном питании</li>
              <li class="recommendation-list__item">простудных заболеваниях</li>
              <li class="recommendation-list__item">ослабленном иммунитете</li>
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
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/vitamin-a.png'); ?>" alt="./assets/images/features-8.jpg" />
              </figure>
              <div class="features__desc">
                <p>дополнительный источник витаминов минералов, аминокислот</p>
              </div>
              <div class="features__square-figure"></div>
            </li>
            <li class="features-list__item">
              <figure class="features__img">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/shield.png'); ?>" alt="./assets/images/features-1.jpg" />
              </figure>
              <div class="features__desc">
                <p>стимулирует все звенья иммунной системы</p>
              </div>
              <div class="features__square-figure"></div>
            </li>
            <li class="features-list__item">
              <figure class="features__img">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/shield.png'); ?>" alt="./assets/images/features-9.jpg" />
              </figure>
              <div class="features__desc">
                <p>выступает барьером от негативных факторов </p>
              </div>
              <div class="features__square-figure"></div>
            </li>
            <li class="features-list__item">
              <figure class="features__img">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/molecule.png'); ?>" alt="./assets/images/features-4.png" />
              </figure>
              <div class="features__desc">
                <p>гармонично сочетает нутриенты, необходимые для роста и развития ребенка</p>
              </div>
              <div class="features__square-figure"></div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="condition multi__condition">
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
                  <span>Витаминный премикс (мальтодекстрин, аскорбиновая кислота, ниацинамид, витамин Е, пиридоксина гидрохлорид, ретинол ацетат, фолиевая кислота, витамин К1, биотин, витамин D3, витамин В12), лимонная кислота, глицерин (влагоудерживающий агент), краситель натуральный «Кармин», ароматизатор натуральный «Клубника», глазирователь (масло подсолнечное, воск пчелиный, воск карнаубский), сахар, глюкозный сироп, вода, желатин.</span>
                </div>
              </div>
              <div class="condition__row">
                <div class="condition__label">
                  <span>ПРИМЕНЕНИЕ:</span>
                </div>
                <div class="condition__span">
                  <span>Взрослым и детям старше 3 лет по 1 пастилке 1 раз в день</span>
                </div>
              </div>
              <div class="condition__row">
                <div class="condition__label">
                  <span>ПРОТИВОПОКАЗАНИЯ:</span>
                </div>
                <div class="condition__span">
                  <span>-	беременность</span>
                  <span>-	кормление грудью</span>
                  <span>-	нарушения углеводного обмена</span>

                </div>
              </div>
              <div class="condition__row">
                <div class="condition__label">
                  <span>НЕ ЯВЛЯЕТСЯ ЛЕКАРСТВЕННЫМ СРЕДСТВОМ</span>
                </div>
              </div>
            </div>
            <div class="condition__btn">
              <a href="" class="btn">ПЕРЕЙТИ В МАГАЗИН</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="desc">
      <div class="containerx850">
        <div class="desc__outer">
          <div class="desc__inner">
            <div class="desc__title desc-title__multi-title">
              <h2>Дополнительный источник витаминов А, D3, Е, В3, В6, В9, В12, С, К и биотина</h2>
            </div>
            <div class="desc__content">
              <span class="desc__span"><span class="fw-700">Витамин А</span> необходим для поддержания метаболизма.</span>
              <span class="desc__span"><span class="fw-700">Витамин Д3</span> способствует укреплению костей и зубов, благотворно влияет на усвоение кальция и фосфора.</span>
              <span class="desc__span"><span class="fw-700">Витамин Е</span> обладает выраженным антиоксидантным свойством – тормозит процессы окисления, предупреждает повреждение здоровых клеток продуктами распада.</span>
            
              <span class="desc__span"><span class="fw-700">Витамин В3</span> защищает нервную систему, помогает при тяжелых умственных и физических нагрузках.</span>
              <span class="desc__span"><span class="fw-700">Витамин В6</span> необходим для здоровья кожи, нервной системы и зрения.</span>
              <span class="desc__span"><span class="fw-700">Витамин В9</span> способствует улучшению работы иммунной и кровеносной систем, помогает предупредить развитие анемии, препятствует тромбообразованию и атеросклерозу.</span>

              <span class="desc__span"><span class="fw-700">Витамин В12</span> благотворно влияет на процессы кроветворения, функции памяти и концентрации внимания, улучшает состояние нервной системы.</span>
              <span class="desc__span"><span class="fw-700">Витамин С</span> помогает иммунной системе справиться с инфекциями, усиливает защитные функции организма.</span>
              <span class="desc__span"><span class="fw-700">Витамин К</span> играет значительную роль в обмене веществ в мышцах и в соединительной ткани, а также в здоровой работе почек.</span>

              <span class="desc__span"><span class="fw-700">Биотин</span> регулирует состояние нервной системы, снижает мышечные боли, важен для метаболизма, благотворно влияет на кожу и волосы.</span>

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
              <iframe width="100%" height="100%" src="https://www.youtube.com/embed/uu-RTERoMi4" title="БАД Мультивитамины"></iframe>
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
                  <p>Как только в «Тяньши» появились таблетки с витаминами группы В, я сразу же приобрела, так как о их важности для здоровья мне известно давно. В составе, действительно, вся группа витаминов В: В1, В2, В6, В12, ниацинамид, пантотенат кальция, фолиевая кислота. Именно в группе витамины хорошо усваиваются и дополняют друг друга. При приеме таблеток я стала гораздо спокойнее, улучшился сон, ушла раздражительность.</p>
                </div>
                <div class="feedback-list__feedback-persona feedback-persona">
                  <div class="feedback-persona__name">
                    <p>Дария, 28 лет</p>
                  </div>
                </div>
              </li>
              <li class="feedback-list__item">
                <div class="feedback-list__txt">
                  <p>Мой ребенок (8 лет) активно занимается спортом – каждый день, помимо школы, посещает одну из секций. Долго подбирала витамины для его быстрорастущего организма. Искала именно комплекс мультивитаминов, который легко и правильно усваивается, без каких-либо побочных действий. Мультивитаминный комплекс «Тяньши» подошел нам идеально – ребенок бодрый, веселый, активный каждый день. Болеем, соответственно, тоже реже. Отдельно хотела бы отметить приятный вкус клубники и необычную форму пастилок в виде мишек.
                  </p>
                </div>
                <div class="feedback-list__feedback-persona feedback-persona">
                  <div class="feedback-persona__name">
                    <p>Айгуль, 33 года</p>
                  </div>
                </div>
              </li>
              <li class="feedback-list__item">
                <div class="feedback-list__txt">
                  <p>Приобрела мультивитаминный комплекс «Тяньши» маме с папой в качестве профилактического средства. Меня привлекло то, что препарат содержит все необходимые организму компоненты для поддержания здоровья. Пропивают два раза в год – в сезон обострения простуд и хронических заболеваний. Не могу отметить какой-то яркий результат, его, наверное, и не должно быть. Для меня эффект заключается в том, что за зиму они ни разу не болели.</p>
                </div>
                <div class="feedback-list__feedback-persona feedback-persona">
                  <div class="feedback-persona__name">
                    <p>Нургуль, 21 год</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- <section class="more-about-product">
      <div class="more-about-product__outer">
        <div class="more-about-product__inner">
          <div class="about-product__title">
            <h2>Больше о продукте</h2>
          </div>
          <ul class="more-about-product__about-product-list about-product-list">
            <li class="about-product-list__item">
              <figure class="about-product-list__img about-product_hover">
                <img width="100%" height="100%" src="<?php echo get_theme_file_uri('/assets/images/multi/1.jpg'); ?>" alt="./assets/images/multi/multi_flier1.jpg" />
              </figure>
            </li>
            <li class="about-product-list__item">
              <figure class="about-product-list__img about-product_hover">
                <img width="100%" height="100%" src="<?php echo get_theme_file_uri('/assets/images/multi/2.jpg'); ?>" alt="./assets/images/multi/multi_flier2.jpg" />
              </figure>
            </li>
            <li class="about-product-list__item">
              <figure class="about-product-list__img about-product_hover">
                <img width="100%" height="100%" src="<?php echo get_theme_file_uri('/assets/images/multi/2.jpg'); ?>" alt="./assets/images/multi/multi_flier2.jpg" />
              </figure>
            </li>
            <li class="about-product-list__item">
              <figure class="about-product-list__img about-product_hover">
                <img width="100%" height="100%" src="<?php echo get_theme_file_uri('/assets/images/multi/2.jpg'); ?>" alt="./assets/images/multi/multi_flier2.jpg" />
              </figure>
            </li>
          </ul>
        </div>
      </div>
    </section> -->
    <!-- <section class="certificates">
      <div class="containerx850">
        <div class="certificates__outer">
          <div class="certificates__inner">
            <div class="certificates__title">
              <h2>Сертификаты</h2>
            </div>
            <div class="certificates__certificates-wrapper certificates-wrapper">
              <figure class="certificates-wrapper__certificate certificate">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/vitaminy_dlya_glaz/cert-1.jpg'); ?>" alt="./assets/images/certificate_one.jpg" />
              </figure>
              <figure class="certificates-wrapper__certificate certificate">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/vitaminy_dlya_glaz/cert-2.jpg'); ?>" alt="./assets/images/certificate_two.jpg" />
              </figure>
            </div>
          </div>
        </div>
      </div>

    </section> -->





<?php }
  get_footer();
?>

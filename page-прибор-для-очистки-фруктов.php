<?php 
  get_header();
  while(have_posts()) {
    the_post();
  ?>
<div class="main__overlay overlay"></div>
    <div class="main__hero hero hero__veg_fruits">
    <div class="containerx1024">
        <div class="hero__main-title main-title">
          <h1>Прибор для очистки<br> овощей и фруктов «Тяньши»</h1>
        </div>
      </div>
      <div class="hero__containerx730 containerx730">
        <div class="hero__outer">
          <div class="hero__inner">
            <div class="hero__main-subtitle main-subtitle">
              <span>Современный интеллектуальный прибор, призванный улучшать полезные свойства любимых продуктов через их очищение от вредных микробов, гормонов и пестицидов на все 100%</span>
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
              <p>Рекомендован для очистки фруктов, овощей, мяса, рыбы, морепродуктов, круп и злаков</p>
            </div>
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
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/antibacterial.png'); ?>" alt="./assets/images/features-8.jpg" />
              </figure>
              <div class="features__desc">
                <p>удаляет остатки пестицидов, химических удобрений, стимуляторов роста, микробы и бактерии, вирусы и грибки с поверхности пищевых продуктов</p>
              </div>
              <div class="features__square-figure"></div>
            </li>
            <li class="features-list__item">
              <figure class="features__img">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/bacteria.png'); ?>" alt="./assets/images/features-4.png" />
              </figure>
              <div class="features__desc">
                <p>ликвидирует специфический запах, уничтожает бактерии на рыбе, креветках, моллюсках и других морепродуктах</p>
              </div>
              <div class="features__square-figure"></div>
            </li>
            <li class="features-list__item">
              <figure class="features__img">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/amino-acids.png'); ?>" alt="./assets/images/features-9.jpg" />
              </figure>
              <div class="features__desc">
                <p>расщепляет гормоны и добавки в мясных изделиях</p>
              </div>
              <div class="features__square-figure"></div>
            </li>
            <li class="features-list__item">
              <figure class="features__img">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/oxygen.png'); ?>" alt="./assets/images/features-4.png" />
              </figure>
              <div class="features__desc">
                <p>очищает воду, насыщая ее кислородом</p>
              </div>
              <div class="features__square-figure"></div>
            </li>
            <li class="features-list__item">
              <figure class="features__img">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/timer.png'); ?>" alt="./assets/images/features-4.png" />
              </figure>
              <div class="features__desc">
                <p>увеличивает срок хранения скоропортящихся продуктов</p>
              </div>
              <div class="features__square-figure"></div>
            </li>
            <li class="features-list__item">
              <figure class="features__img">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/dishes.png'); ?>" alt="./assets/images/features-4.png" />
              </figure>
              <div class="features__desc">
                <p>эффективен при стерилизации посуды, детских бутылочек, зубных щеток и других предметов ежедневного использования</p>
              </div>
              <div class="features__square-figure"></div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="condition pribor__condition">
      <div class="containerx850">
        <div class="condition__outer">
          <div class="condition__inner">
            <div class="condition__title">
              <h2>Способ применения</h2>
            </div>
            <div class="condition__info">
              <div class="condition__row">
                <div class="condition__label">
                  <span>Опустить насадку прибора в емкость с продуктом, погруженным в чистую воду.</span>
                </div>
                <div class="condition__span">
                  <span><span class="fw-700">Важно! Запрещено подключать устройство к сети без погружения основного элемента (генератора электролиза) в воду.</span></span>
                </div>
              </div>
              <div class="condition__row">
                <div class="condition__span">
                  <span><span class="fw-700">Габариты 283 х 151 х 67 мм.<br><br> Номинальная мощность 45 Вт.</span></span>
                </div><br>
                <div class="condition__label">
                  <span>Перед применением ознакомьтесь с инструкцией.</span>
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
            <div class="desc__title desc-title__pribor-title">
              <h2>Инновационная технология очистки пищевых продуктов</h2>
            </div>
            <div class="desc__content">
              <span class="desc__span">Уникальность устройства заключается в использовании окислительных свойств озона – элемента, уничтожающего бактерии и вирусы. Электролитный генератор воздействует на воду через образование большого количества гидроксильных групп. Действуя локально на микроорганизмы, он повреждает клеточную мембрану, не позволяя им таким образом размножаться.</span>
              <span class="desc__span">Прибор идеально обрабатывает поверхность фруктов, овощей, круп и других пищевых продуктов, уничтожая остатки химических веществ и иных загрязнений посредством реакции окисления, без возможности вторичного загрязнения.</span>
              <span class="desc__span">Эффективный процесс микропузырьковой очистки безопасен для здоровья человека и не наносит вреда продуктам. </span>            
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
              <iframe width="100%" height="100%" src="https://www.youtube.com/embed/YTkvFkKxKyY" title="Прибор для чистки овощей и фруктов"></iframe>
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
                  <p>Прибор для очистки овощей и фруктов «Тяньши» появился в моем доме очень давно и служит верой и правдой уже несколько лет. Поначалу на него смотрели с опаской мои подруги, а потом стояли в очереди, чтобы использовать. Как я лично использую устройство? «Чищу» крупы и мясо с рыбой – он уничтожает все вредные добавки, с помощью которых «растили» мясо. Грязь собирается в виде пены на поверхности и, удалив ее, мы получаем экологически чистый продукт. Крупы озонирую в среднем 10 минут. Особенно это касается гречки. Мясо озонирую по-разному: курицу – 15 минут, говядину, свинину – 30 минут.</p>
                </div>
                <div class="feedback-list__feedback-persona feedback-persona">
                  <div class="feedback-persona__name">
                    <p>Людмила, 45 лет</p>
                  </div>
                </div>
              </li>
              <li class="feedback-list__item">
                <div class="feedback-list__txt">
                  <p>Это, действительно, удивительное устройство, которое помогает мне сохранять фрукты, овощи и другие продукты свежими и безопасными для употребления. Я помещаю их в контейнер и включаю прибор на несколько минут. За это время озон генерируется и удаляет все бактерии и вредоносные вещества с поверхности продуктов. Озонировать все очень просто: берем емкость, заливаем туда любую воду, добавляем то, что будем озонировать, запускаем в емкость шланг с насадкой, включаем прибор, выставляем таймер и ждем. Таймер сработает, устройство выключится. Я принимаю во внимание тот факт, что прибор «Тяньши» безопасен в использовании.
                  </p>
                </div>
                <div class="feedback-list__feedback-persona feedback-persona">
                  <div class="feedback-persona__name">
                    <p>Фахрух, 39 лет</p>
                  </div>
                </div>
              </li>
              <li class="feedback-list__item">
                <div class="feedback-list__txt">
                  <p>Для меня это – чудо-прибор. Приобрела 3 года назад. Возникла в нем острая необходимость из-за ребенка. Так как он у меня аллергик и у нас прописан гипоаллергенный быт, то мне нужно было и воздух очищать, и кормить чем-то. Многие продукты, в частности, мясо куриное, ребенок не мог есть только из-за того, что его высыпало. При этом по аллерготестам все было чисто. А высыпало его на то, чем эта курочка питалась и чем ее кололи – на гормоны роста, антибиотики и прочую ерунду. Прибор меня выручает на все 100%. Теперь я им очищаю мясо, рыбу, овощи, воду. Пользуюсь практически ежедневно и с разными назначениями.</p>
                </div>
                <div class="feedback-list__feedback-persona feedback-persona">
                  <div class="feedback-persona__name">
                    <p>Алма, 57 лет</p>
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
                <img width="100%" height="100%" src="<?php echo get_theme_file_uri('/assets/images/pribor/1.jpg'); ?>" alt="./assets/images/tien_fen_cha/1.jpg" />
              </figure>
            </li>
            <li class="about-product-list__item">
              <figure class="about-product-list__img about-product_hover">
                <img width="100%" height="100%" src="<?php echo get_theme_file_uri('/assets/images/pribor/2.jpg'); ?>" alt="./assets/images/tien_fen_cha/2.jpg" />
              </figure>
            </li>
            <li class="about-product-list__item">
              <figure class="about-product-list__img about-product_hover">
                <img width="100%" height="100%" src="<?php echo get_theme_file_uri('/assets/images/pribor/3.jpg'); ?>" alt="./assets/images/tien_fen_cha/3.jpg" />
              </figure>
            </li>
            <li class="about-product-list__item">
              <figure class="about-product-list__img about-product_hover">
                <img width="100%" height="100%" src="<?php echo get_theme_file_uri('/assets/images/pribor/4.jpg'); ?>" alt="./assets/images/tien_fen_cha/3.jpg" />
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
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/zelebnye_capsuly/cert-1.jpg'); ?>" alt="./assets/images/certificate_one.jpg" />
              </figure>
              <figure class="certificates-wrapper__certificate certificate">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/zelebnye_capsuly/cert-2.jpg'); ?>" alt="./assets/images/certificate_two.jpg" />
              </figure>
            </div>
          </div>
        </div>
      </div>
    </section> -->
<?php }
  get_footer();
?>

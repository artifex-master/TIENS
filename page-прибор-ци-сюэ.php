<?php 
  get_header();
  while(have_posts()) {
    the_post();
  ?>
<div class="main__overlay overlay"></div>
    <div class="main__hero hero hero__sue">
    <div class="containerx1024">
        <div class="hero__main-title main-title">
          <h1>Электроприбор «Тяньши»<br> «Ци Сюэ»<br> (модель TQ-D30)</h1>
        </div>
      </div>
      <div class="hero__containerx730 containerx730">
        <div class="hero__outer">
          <div class="hero__inner">
            <div class="hero__main-subtitle main-subtitle">
              <span>Инновационная разработка китайских ученых</span><br>
              <span>Электробытовой прибор действует благодаря высокочастотной силе вибрации, которая массирует рефлекторные зоны и акупунктурные точки, стимулируя тем самым соответствующие органы</span>
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
              <p>Рекомендован для:</p>
            </div>
            <ul class="recommendation__recommendation-list recommendation-list">
              <li class="recommendation-list__item">активизации энергетических каналов</li>
              <li class="recommendation-list__item">стимуляции кровообращения</li>
              <li class="recommendation-list__item">улучшения процессов обмена веществ в организме</li>
              <li class="recommendation-list__item">укрепления иммунной системы</li>
              <li class="recommendation-list__item">повышения жизненного тонуса</li>
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
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/water-cycle.png'); ?>" alt="./assets/images/features-8.jpg" />
              </figure>
              <div class="features__desc">
                <p>улучшает циркуляцию крови</p>
              </div>
              <div class="features__square-figure"></div>
            </li>
            <li class="features-list__item">
              <figure class="features__img">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/anatomy.png'); ?>" alt="./assets/images/features-4.png" />
              </figure>
              <div class="features__desc">
                <p>восстанавливает баланс нервной системы</p>
              </div>
              <div class="features__square-figure"></div>
            </li>
            <li class="features-list__item">
              <figure class="features__img">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/veins.png'); ?>" alt="./assets/images/features-4.png" />
              </figure>
              <div class="features__desc">
                <p>очищает кровеносные сосуды</p>
              </div>
              <div class="features__square-figure"></div>
            </li>
            <li class="features-list__item">
              <figure class="features__img">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/oxygen.png'); ?>" alt="./assets/images/features-4.png" />
              </figure>
              <div class="features__desc">
                <p>насыщает организм кислородом</p>
              </div>
              <div class="features__square-figure"></div>
            </li>
            <li class="features-list__item">
              <figure class="features__img">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/digestion.png'); ?>" alt="./assets/images/features-4.png" />
              </figure>
              <div class="features__desc">
                <p>нормализует функции пищеварения</p>
              </div>
              <div class="features__square-figure"></div>
            </li>
            <li class="features-list__item">
              <figure class="features__img">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/flash.png'); ?>" alt="./assets/images/features-4.png" />
              </figure>
              <div class="features__desc">
                <p>снимает стресс</p>
              </div>
              <div class="features__square-figure"></div>
            </li>
            <li class="features-list__item">
              <figure class="features__img">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/insomnia.png'); ?>" alt="./assets/images/features-4.png" />
              </figure>
              <div class="features__desc">
                <p>устраняет бессонницу</p>
              </div>
              <div class="features__square-figure"></div>
            </li>
            <li class="features-list__item">
              <figure class="features__img">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/smooth.png'); ?>" alt="./assets/images/features-4.png" />
              </figure>
              <div class="features__desc">
                <p>борется с жировыми отложениями</p>
              </div>
              <div class="features__square-figure"></div>
            </li>
            <li class="features-list__item">
              <figure class="features__img">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/skin.png'); ?>" alt="./assets/images/features-4.png" />
              </figure>
              <div class="features__desc">
                <p>делает кожу здоровой и красивой</p>
              </div>
              <div class="features__square-figure"></div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="condition sue__condition">
      <div class="containerx850">
        <div class="condition__outer _sue_outer">
          <div class="condition__inner">
            <div class="condition__title">
              <h2>Способ применения</h2>
            </div>
            <div class="condition__info">
              <div class="condition__row">
                <div class="condition__span">
                  <span>– Перед началом сеанса обеспечьте устойчивое горизонтальное положение прибора.</span>
                </div>
                <div class="condition__span">
                  <span>– Придерживайтесь рекомендованной последовательности упражнений – сидя, лежа и лишь потом, стоя.</span>
                </div>
                <div class="condition__span">
                  <span>– Продолжительность сеанса необходимо увеличивать постепенно.</span>
                </div>
                <div class="condition__span">
                  <span>– Время для использования – спустя час после еды.</span>
                </div>
                <div class="condition__span">
                  <span>– Водные процедуры – не ранее, чем через 20-30 минут после окончания сеанса.</span>
                </div>
                <div class="condition__span">
                  <span>– После каждого сеанса нужно выпивать 300-500 мл воды или чая «Тяньши».</span>
                </div>
                <div class="condition__span">
                  <span>– Пациенты с хроническими заболеваниями не должны прекращать прием или самостоятельно уменьшать дозы лекарственных препаратов.</span>
                </div>
                <div class="condition__span">
                  <span>– При работе прибора в течение часа, следует прервать его работу на 10 минут.</span>
                </div>
                <div class="condition__span">
                  <span>– Важно защищать прибор от попадания пыли, воды и воздействия посторонних предметов.</span>
                </div>
              </div>
              <div class="condition__row">
                <div class="condition__span">
                  <span><span class="fw-700">Перед применением внимательно ознакомьтесь с инструкцией</span></span>
                </div><br>
              </div>
              <div class="condition__row">
                <div class="condition__span">
                  <span><span class="fw-700">Противопоказания:</span></span>
                </div><br>
                <div class="condition__span">
                  <span>– гипертония</span>
                </div>
                <div class="condition__span">
                  <span>– болезни с геморрагическими симптомами </span>
                </div>
                <div class="condition__span">
                  <span>– беременность</span>
                </div>
                <div class="condition__span">
                  <span>– активная стадия туберкулёза</span>
                </div>
                <div class="condition__span">
                  <span>– заболевания, связанные с нарушениями работы сердца</span>
                </div>
                <div class="condition__span">
                  <span>– заболевания, требующие хирургического вмешательства</span>
                </div>
                <div class="condition__span">
                  <span>– функциональные истощения сердца, печени, лёгких, почек</span>
                </div>
                <div class="condition__span">
                  <span>– острые отравления</span>
                </div>
                <div class="condition__span">
                  <span>– инфекционные заболевания</span>
                </div>
                <div class="condition__span">
                  <span>– глаукома, отслойка сетчатки</span>
                </div>
                <div class="condition__span">
                  <span>– СПИД</span>
                </div>
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
            <div class="desc__title desc-title__sue-title">
              <h2>С заботой о всей семье</h2>
            </div>
            <div class="desc__content">
              <span class="desc__span">Уникальный прибор объединил в себе современный дизайн, последние достижения новейших технологий и ценные знания китайской медицины.</span>
              <span class="desc__span">Согласно учениям древней медицины Китая, сквозь тело человека проходят непрерывные потоки энергии. Электроприбор «Ци Сюэ» благодаря высокочастотной вращательной вибрации, направленной по часовой стрелке, нормализует движение энергии, что, в свою очередь, улучшает обмен веществ, усиливает кровообращение, выводит токсины. Точечный массаж способствует сохранению молодости лица и стройности тела.</span>
              <span class="desc__span">Кроме того, оставаясь неподвижным, в ходе процедуры пользователь получает результат, схожий с выполнением спортивных упражнений. Благодаря работе электромассажера, обогащающей организм кислородом, формируется эффект физической нагрузки.<br>Всего 15 минут на приборе заменяют 5 км пробежки!</span>            
              <span class="desc__span">Мобильность «Ци Сюэ» позволяет использовать его, когда (утром, днем или вечером) и где удобно (на работе или дома).</span>            
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
              <iframe width="100%" height="100%" src="" title="Прибор для чистки овощей и фруктов"></iframe>
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
                  <p>Не так давно приобрел себе и родителям прибор «Ци Сюэ», позволяющий предотвратить многие заболевания. Как только я его включил, сидя на стуле, положив ноги на мягкую резиновую поверхность, от кончиков пальцев ног и по всему телу прошла легкая приятная вибрация и дрожь. Очень удобный прибор для людей, которые ведут сидячий образ жизни. Из-за того, что вы, к примеру, работаете в офисе или стоите за прилавком целый день, кровь застаивается в ногах и к вечеру они начинают болеть. Процедуры на «Ци Сюэ» дают «толчок» вашей крови, разгоняя ее. Поверхность из резины отображает подошвы для ног, однако упражнения можно делать и для ягодиц, колен, живота, голеней.</p>
                </div>
                <div class="feedback-list__feedback-persona feedback-persona">
                  <div class="feedback-persona__name">
                    <p>Сауле, 65 лет</p>
                  </div>
                </div>
              </li>
              <li class="feedback-list__item">
                <div class="feedback-list__txt">
                  <p>Циркуляция крови в организме человека – важный этап, отвечающий за работоспособность всех органов. Китайцы называют этот процесс жизненной энергией Ци. К чему я это? Основной принцип действия «Ци Сюэ» – метод высокочастотной вибрации в рефлекторных зонах стоп. Пользуюсь массажером более двух лет и могу оставить только положительные рекомендации. Я много хожу пешком, ноги часто устают, к концу дня обычно «отваливаются». Также меня беспокоит варикоз. Каждый день по 15 минут на «Ци Сюэ» творят чудеса. Заметил, что мышцы напрягаются, а утомления нет. Спустя 2 месяца использования мой варикоз прошел. В брошюре к прибору есть множество вариантов по его применению – оздоровлению собственного организма. Смело рекомендую!
                  </p>
                </div>
                <div class="feedback-list__feedback-persona feedback-persona">
                  <div class="feedback-persona__name">
                    <p>Татьяна, 73 года</p>
                  </div>
                </div>
              </li>
              <li class="feedback-list__item">
                <div class="feedback-list__txt">
                  <p>Массажер «Ци Сюэ» можно без преувеличения назвать «домашним доктором». Я его приобрел в компании «Тяньши» около трех лет назад. Практически вся моя семья его использует каждый день. Утро начинается с «Ци Сюэ». Он точечно заботится о здоровье, в полном смысле этого слова. 5 минут массажа достаточно, чтобы почувствовать себя другим человеком. Прибор очень хорошо влияет на работу практически всех органов. Если болят суставы, скачет давление, хотите похудеть, сделать более эластичными кровеносные сосуды – он просто незаменим. За все время работы прибор ни разу не вышел из строя. Весит около 16 кг и занимает очень мало места. Лично я его использую, когда смотрю телевизор.</p>
                </div>
                <div class="feedback-list__feedback-persona feedback-persona">
                  <div class="feedback-persona__name">
                    <p>Галина, 58 лет</p>
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
                <img width="100%" height="100%" src="<?php echo get_theme_file_uri('/assets/images/zelebnye_capsuly/1.jpg'); ?>" alt="./assets/images/tien_fen_cha/1.jpg" />
              </figure>
            </li>
            <li class="about-product-list__item">
              <figure class="about-product-list__img about-product_hover">
                <img width="100%" height="100%" src="<?php echo get_theme_file_uri('/assets/images/zelebnye_capsuly/2.jpg'); ?>" alt="./assets/images/tien_fen_cha/2.jpg" />
              </figure>
            </li>
            <li class="about-product-list__item">
              <figure class="about-product-list__img about-product_hover">
                <img width="100%" height="100%" src="<?php echo get_theme_file_uri('/assets/images/zelebnye_capsuly/3.jpg'); ?>" alt="./assets/images/tien_fen_cha/3.jpg" />
              </figure>
            </li>
            <li class="about-product-list__item">
              <figure class="about-product-list__img about-product_hover">
                <img width="100%" height="100%" src="<?php echo get_theme_file_uri('/assets/images/zelebnye_capsuly/4.jpg'); ?>" alt="./assets/images/tien_fen_cha/3.jpg" />
              </figure>
            </li>
            <li class="about-product-list__item">
              <figure class="about-product-list__img about-product_hover">
                <img width="100%" height="100%" src="<?php echo get_theme_file_uri('/assets/images/zelebnye_capsuly/5.jpg'); ?>" alt="./assets/images/tien_fen_cha/3.jpg" />
              </figure>
            </li>
            <li class="about-product-list__item">
              <figure class="about-product-list__img about-product_hover">
                <img width="100%" height="100%" src="<?php echo get_theme_file_uri('/assets/images/zelebnye_capsuly/6.jpg'); ?>" alt="./assets/images/tien_fen_cha/3.jpg" />
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

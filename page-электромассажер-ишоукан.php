<?php 
  get_header();
  while(have_posts()) {
    the_post();
  ?>
<div class="main__overlay overlay"></div>
    <div class="main__hero hero hero__ishoukan">
      <div class="hero__containerx730 containerx730">
        <div class="hero__outer">
          <div class="hero__inner">
            <div class="hero__main-title main-title ishoukan_title">
              <h1>Электромассажер «Ишоукан»</h1>
            </div>
            <div class="hero__main-subtitle main-subtitle">
              <span>Уникальный многофункциональный прибор для комплексного оздоровления всей семьи</span>
              <span>Эффективный электромассажер размером с ладонь подарит приятное чувство комфорта и расслабленности</span>
              <span>Используя электрические импульсы для стимуляции мышц, «Ишоукан» подходит для кожи головы, лица и всего тела</span>
            </div>
            <div class="hero__btn-wrapper">
              <a href="https://web-kz.tiens.com/product/detail/10027478" class="btn">ПЕРЕЙТИ В МАГАЗИН</a>
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
              <p>Рекомендован при:</p>
            </div>
            <ul class="recommendation__recommendation-list recommendation-list">
              <li class="recommendation-list__item">резких перепадах артериального давления</li>
              <li class="recommendation-list__item">предболезненном состоянии</li>
              <li class="recommendation-list__item">подавленном настроении</li>
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
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/tired.png'); ?>" alt="./assets/images/features-8.jpg" />
              </figure>
              <div class="features__desc">
                <p>снимает усталость</p>
              </div>
              <div class="features__square-figure"></div>
            </li>
            <li class="features-list__item">
              <figure class="features__img">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/oxygen.png'); ?>" alt="./assets/images/features-9.jpg" />
              </figure>
              <div class="features__desc">
                <p>восполняет нехватку кислорода и питательных веществ в тканях и клетках</p>
              </div>
              <div class="features__square-figure"></div>
            </li>
            <li class="features-list__item">
              <figure class="features__img">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/yoga.png'); ?>" alt="./assets/images/features-4.png" />
              </figure>
              <div class="features__desc">
                <p>нормализует сон</p>
              </div>
              <div class="features__square-figure"></div>
            </li>
            <li class="features-list__item">
              <figure class="features__img">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/thinking.png'); ?>" alt="./assets/images/features-10.png" />
              </figure>
              <div class="features__desc">
                <p>улучшает кровоснабжение и деятельность мозга</p>
              </div>
              <div class="features__square-figure"></div>
            </li>
            <li class="features-list__item">
              <figure class="features__img">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/hair.png'); ?>" alt="./assets/images/features-10.png" />
              </figure>
              <div class="features__desc">
                <p>предотвращает облысение</p>
              </div>
              <div class="features__square-figure"></div>
            </li>
            <li class="features-list__item">
              <figure class="features__img">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/collagen.png'); ?>" alt="./assets/images/features-10.png" />
              </figure>
              <div class="features__desc">
                <p>способствует выработке коллагена</p>
              </div>
              <div class="features__square-figure"></div>
            </li>
            <li class="features-list__item">
              <figure class="features__img">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/skin.png'); ?>" alt="./assets/images/features-10.png" />
              </figure>
              <div class="features__desc">
                <p>улучшает текстуру кожи, сокращает поры</p>
              </div>
              <div class="features__square-figure"></div>
            </li>
            <li class="features-list__item">
              <figure class="features__img">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/wrinkle.png'); ?>" alt="./assets/images/features-10.png" />
              </figure>
              <div class="features__desc">
                <p>замедляет процессы старения</p>
              </div>
              <div class="features__square-figure"></div>
            </li>
            <li class="features-list__item">
              <figure class="features__img">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/veins.png'); ?>" alt="./assets/images/features-10.png" />
              </figure>
              <div class="features__desc">
                <p>эффективен при профилактике варикозного расширения вен</p>
              </div>
              <div class="features__square-figure"></div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="condition ishoukan__condition">
      <div class="containerx850">
        <div class="condition__outer">
          <div class="condition__inner">
            <div class="condition__title">
              <h2>Cпособ применения</h2>
            </div>
            <div class="condition__info">
              <div class="condition__row">
                <div class="condition__label">
                  <span>Массажные зубчики электромассажера расположены в соответствии с «Пятью основными элементами природы» согласно древнему китайскому учению – металл, дерево, вода, огонь, земля. Поэтому использовать прибор необходимо без особого применения силы – это комфортный, регулируемый массаж, учитывающий все особенности организма.</span>
                </div>
              </div>
              <div class="condition__row">
                <div class="condition__label">
                  <span>ПРОТИВОПОКАЗАНИЯ:</span>
                </div>
                <div class="condition__span">
                  <span>–	беременность</span><br>
                  <span>– заболевания крови (в том числе нарушение свертываемости)</span><br>
                  <span>– активная форма туберкулеза</span><br>
                  <span>– наличие кардиостимулятора, тяжелых сердечно-сосудистых заболеваний</span><br>
                  <span>– гнойные открытые воспалительные процессы</span><br>
                  <span>– опухоли различной природы</span><br>
                  <span>– инфекционные заболевания в период обострения</span><br>
                </div>
              </div>
            </div>
            <div class="condition__btn">
              <a href="https://web-kz.tiens.com/product/detail/10027478" class="btn">ПЕРЕЙТИ В МАГАЗИН</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="desc">
      <div class="containerx850">
        <div class="desc__outer">
          <div class="desc__inner">
            <div class="desc__title desc-title__ishoukan">
              <h2>Комплексное оздоровление всей семьи</h2>
            </div>
            <div class="desc__content">
              <span class="desc__span">Новая усовершенствованная и абсолютно безопасная модель, созданная с использованием знаний современной биомедицины и учения китайской медицины о каналах и меридианах, имеет два принципиальных отличия от старой – лазер-полупроводник и вибромассажный эффект, которые дополняют друг друга, повышая эффективность процедуры.</span>
              <span class="desc__span">Функция вибрационного массажа представлена в двух вариантах – непрерывной и прерывистой вибрации. Первый вариант рекомендован для массажа тела, второй – для массажа головы.</span>
              <span class="desc__span">В «Ишоукане» используется система управления, основанная на интеллектуальной микросхеме SCM (Supply Chain Management).</span>
              <span class="desc__span">Прибор имеет несколько режимов работы и уровней интенсивности, что позволяет пользователю выбрать наиболее подходящий. Он компактен, легок и удобен для домашнего использования.</span>
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
              <iframe width="100%" height="100%" src="https://www.youtube.com/embed/KFBoHi4ir5Y" title="Электромассажер Ишоукан Тяньши для ухода за головой   обзор товара"></iframe>
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
                  <p>«Ишоукан» – невероятно удобный и эффективный электромассажер. Обычно я использую его после тяжелого рабочего дня, когда мышцы максимально напряжены. Массажер не только расслабляет, но и стимулирует кровообращение, улучшает качество кожи, дарит приятные ощущения. Один из моих любимых режимов массажа – это режим непрерывной вибрации, который прекрасно работает на ногах и спине. Также я использую «Ишоукан» для массажа шеи и плеч. Мне нравится легкость и компактность прибора, я могу использовать его в любое время, в любом месте – дома, в офисе, во время поездок. Кроме того, массажер очень прост в использовании – я могу выбрать нужный режим и интенсивность.</p>
                </div>
                <div class="feedback-list__feedback-persona feedback-persona">
                  <div class="feedback-persona__name">
                    <p>Светлана, 63 года</p>
                  </div>
                </div>
              </li>
              <li class="feedback-list__item">
                <div class="feedback-list__txt">
                  <p>Прибором можно пользоваться как расческой, но не более определенного времени. Он способен ускорить рост волос, избавить от головной боли и мигрени, стабилизировать артериальное давление. Также массаж помогает успокоиться и расслабиться нашему мозгу. Можно им массировать и больные места, например, если вы где-то потянули мышцу или у вас болит спина, или начались менструальные боли, места ушибов.    
                  </p>
                </div>
                <div class="feedback-list__feedback-persona feedback-persona">
                  <div class="feedback-persona__name">
                    <p>Галина, 72 года</p>
                  </div>
                </div>
              </li>
              <li class="feedback-list__item">
                <div class="feedback-list__txt">
                  <p>Хочу рассказать о нашем домашнем помощнике на все случаи жизни. У мамы скачет давление, она расчесывала голову в течение 10-15 минут, головную боль как рукой сняло. Сын, осваивая очередные высоты, сильно стукнулся подбородком, и образовался синяк. Я, озадаченная этим происшествием, решила приложить расческу к синяку. Через два дня от ушиба ничего не осталось. У отца – варикозное расширение вен, и вот настал такой момент, когда вены стали опухать и дико болеть. Чем только не мазали ногу, боль не утихала, решили попробовать прибор. Просто прикладываю «Ишоукан» на вены, боль немного стала отступать, теперь этот прибор всегда рядом с ним. Как видите, массажером довольна вся семья, он нас выручает.</p>
                </div>
                <div class="feedback-list__feedback-persona feedback-persona">
                  <div class="feedback-persona__name">
                    <p>Айнур, 48 лет</p>
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
                <img width="100%" height="100%" src="<?php echo get_theme_file_uri('/assets/images/ishoukan/1.jpg'); ?>" alt="./assets/images/about-product-img-1.jpeg" />
              </figure>
            </li>
            <li class="about-product-list__item">
              <figure class="about-product-list__img about-product_hover">
                <img width="100%" height="100%" src="<?php echo get_theme_file_uri('/assets/images/ishoukan/2.jpg'); ?>" alt="./assets/images/flier_2.png" />
              </figure>
            </li>
            <li class="about-product-list__item">
              <figure class="about-product-list__img about-product_hover">
                <img width="100%" height="100%" src="<?php echo get_theme_file_uri('/assets/images/ishoukan/3.jpg'); ?>" alt="./assets/images/flier_4.png" />
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
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/ishoukan/cert-1.jpg'); ?>" alt="./assets/images/certificate_one.jpg" />
              </figure>
              <figure class="certificates-wrapper__certificate certificate">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/ishoukan/cert-2.jpg'); ?>" alt="./assets/images/certificate_two.jpg" />
              </figure>
            </div>
          </div>
        </div>
      </div>

    </section>
<?php }
  get_footer();
?>

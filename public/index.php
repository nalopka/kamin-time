<?
	if (count($_POST)!=0) {
		$msg = 'Новая заявка с лендинга Kamintime #1<br>';
		if (isset($_POST['phone'])) {
			$msg .= 'Телефон: '.$_POST['phone'].'<br>';
		}
		if (isset($_POST['email'])) {
			$msg .= 'E-mail: '.$_POST['email'].'<br>';
		}
		if (isset($_POST['message'])) {
			$msg .= 'Хочу: '.$_POST['message'].'<br>';
		}
		$title = 'Заявка с лендинга Kamintime #1';
		if (!empty($_POST['msg'])) $msg .= '<br>'.$_POST['msg'];
    $to = 'shantishanti@bk.ru,7791166@mail.ru,purecoffee@yandex.ru';
		$header = 'MIME-Version: 1.0' . "\n" .
			'Content-type: text/html; charset=UTF-8'. "\n" .
			"From: Kamintime <hi@kamin-time.ru>\n";
    if (@mail($to, $title, $msg, $header))
    	die('1');
	}
	if (count($_POST)!=0) die('0');
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="«Kamintime» - пришло время установить камин в вашем доме!">
    <meta name="keywords" content="Kamintime, камины, москва">
    <meta name="viewport" content="width=device-width">
    <meta property="og:title" content="Kamintime">
    <meta property="og:description" content="«Kamintime» - пришло время установить камин в вашем доме!">
    <meta property="og:image" content="http://kamin-time.ru/img/social/social-banner.jpg">
    <meta property="og:url" content="http://kamin-time.ru">
    <title>KaminTime</title>
    <link rel="stylesheet" href="main.css">
    <link rel="icon" href="img/social/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="img/social/apple-icon.png">
  </head>
  <body>
    <nav class="navigation">
      <div class="navigation-items">
        <h1 class="logo"></h1><a href="#about-company">О нас</a><a href="#firewood">Камины</a><a href="#footer">Контакты</a><a href="#callback">Для бизнеса</a><a href="#reviews">Отзывы</a>
      </div>
      <div class="navigation-phones"><a href="tel:+79851149222">+7 985 114 9222</a><a href="tel:+79852119645">+7 985 211 9645</a></div>
    </nav>
    <header id="header" class="header">
      <div class="time-has-come">
        <div class="text">
          <h2>Пришло время установить&nbsp;камин в&nbsp;вашем доме?</h2>
          <p>Вы на правильном пути! Обеспечим полный цикл по&nbsp;монтажу каминов и&nbsp;печей.</p>
          <div class="button-block">
            <button class="modal-button">Заказать</button><small>При заказе камина аксессуары в&nbsp;подарок</small>
          </div>
        </div>
        <div class="image">
          <div class="information">
            <div class="logo">KaminTime</div><a href="tel:+79851149222">+7 985 114 9222</a><a href="tel:+79852119645">+7 985 211 9645</a>
          </div>
        </div>
      </div>
      <div class="our-fireplaces">
        <div class="image"></div>
        <div class="text">
          <h2>Наши камины — украшение вашего дома</h2>
          <p>Широкий выбор каминных топок и&nbsp;печей от&nbsp;ведущих производителей. Только высококлассные комплектующие материалы.</p>
        </div>
      </div>
    </header>
    <section id="about-company" class="about-company">
      <div class="about">
        <h2>Более 20 лет успешной работы</h2>
        <p>Наше неоспоримое преимущество — своя&nbsp;собственная база по&nbsp;камнеобработке, которая обеспечивает индивидуальный подход к&nbsp;каждому клиенту.</p>
        <p>Высокая квалификация наших специалистов позволит воплотить самые смелые идеи.</p>
      </div>
    </section>
    <section id="advantages" class="advantages">
      <h2>Преимущества</h2>
      <div class="advantages-list"> 
        <div class="item">
          <div class="count">1</div>
          <h3>От а&nbsp;до&nbsp;я</h3>
          <p>Полный спектр работ по&nbsp;монтажу каминов и&nbsp;печей. Выезд на&nbsp;замер — бонус.</p>
        </div>
        <div class="item">
          <div class="count">2</div>
          <h3>Индивидуальный подход</h3>
          <p>Собственное производство по&nbsp;камнеобработке.</p>
        </div>
        <div class="item">
          <div class="count">3</div>
          <h3>100% Гарантия</h3>
          <p>Гарантия один год, после-гарантийное обслуживание, лицензия МЧС.</p>
        </div>
      </div>
    </section>
    <div class="fireplaces">
      <div data-expandable class="firewood">
        <section id="firewood" class="intro">
          <h2>Дровяные камины</h2>
          <p>Имеем широкий модельный ряд каминных топок. Наше долгосрочное и&nbsp;стабильное сотрудничество с&nbsp;ведущими европейскими и&nbsp;российскими производителями гарантирует только лучшее качество.</p>
          <button data-expandable-toggle class="show-models">Смотреть модели</button>
        </section>
        <div data-expandable-block class="models-container">
          <div class="models-wrapper">
                <div class="model"><img alt="Топка с прямым стеклом" data-src="img/fireplaces_items/wood/01.jpg" src="img/giphy.gif">
                  <noscript><img src="img/fireplaces_items/wood/01.jpg"></noscript>
                  <h3>Топка с прямым стеклом</h3>
                  <p>Такие топки можно сделать в&nbsp;квадратном виде, горизонтальном и вертикальном.</p>
                  <button class="modal-button">Заказать</button>
                </div>
                <div class="model"><img alt="Топка пристенно-угловая" data-src="img/fireplaces_items/wood/02.jpg" src="img/giphy.gif">
                  <noscript><img src="img/fireplaces_items/wood/02.jpg"></noscript>
                  <h3>Топка пристенно-угловая</h3>
                  <p>Такая форма стекла увеличивает обзор топочной части, позволяя наслаждаться игрой пламени.</p>
                  <button class="modal-button">Заказать</button>
                </div>
                <div class="model"><img alt="Топка трёхсторонняя" data-src="img/fireplaces_items/wood/03.jpg" src="img/giphy.gif">
                  <noscript><img src="img/fireplaces_items/wood/03.jpg"></noscript>
                  <h3>Топка трёхсторонняя</h3>
                  <p>Такой вид топки обеспечивает максимальный обзор пламени.</p>
                  <button class="modal-button">Заказать</button>
                </div>
                <div class="model"><img alt="Топка с панорамным и призматическим стеклом" data-src="img/fireplaces_items/wood/04.jpg" src="img/giphy.gif">
                  <noscript><img src="img/fireplaces_items/wood/04.jpg"></noscript>
                  <h3>Топка с панорамным и призматическим стеклом</h3>
                  <p>Конфигурация стекла позволяет наблюдать за&nbsp;пламенем в&nbsp;широком диапазоне.</p>
                  <button class="modal-button">Заказать</button>
                </div>
                <div class="model"><img alt="Туннельные топки" data-src="img/fireplaces_items/wood/05.jpg" src="img/giphy.gif">
                  <noscript><img src="img/fireplaces_items/wood/05.jpg"></noscript>
                  <h3>Туннельные топки</h3>
                  <p>Данный вид топок позволяет наблюдать за&nbsp;пламенем из&nbsp;двух помещений.</p>
                  <button class="modal-button">Заказать</button>
                </div>
                <div class="model"><img alt="Островные камины" data-src="img/fireplaces_items/wood/06.jpg" src="img/giphy.gif">
                  <noscript><img src="img/fireplaces_items/wood/06.jpg"></noscript>
                  <h3>Островные камины</h3>
                  <p>Островок релакса и неспешной беседы в&nbsp;кругу друзей и&nbsp;близких.</p>
                  <button class="modal-button">Заказать</button>
                </div>
                <div class="model"><img alt="В стиле Hi-Tech" data-src="img/fireplaces_items/wood/07.jpg" src="img/giphy.gif">
                  <noscript><img src="img/fireplaces_items/wood/07.jpg"></noscript>
                  <h3>В стиле Hi-Tech</h3>
                  <p>Брутальный вид каминов никого не оставляет равнодушным.</p>
                  <button class="modal-button">Заказать</button>
                </div>
          </div>
        </div>
      </div>
      <div data-expandable class="stove-fireplace">
        <div class="intro">
          <h2>Печи-камины</h2>
          <p>Основное отличие печей от&nbsp;каминов в&nbsp;том, что печи накапливают тепло. И,&nbsp;даже после того, как угас последний уголек, печь продолжает ласково делиться своим теплом с&nbsp;вами.</p>
          <button data-expandable-toggle class="show-models">Смотреть модели</button>
        </div>
        <div data-expandable-block class="models-container">
          <div class="models-wrapper">
                <div class="model"><img alt="Кафельные печи" data-src="img/fireplaces_items/stove/08.jpg" src="img/giphy.gif">
                  <noscript><img src="img/fireplaces_items/stove/08.jpg"></noscript>
                  <h3>Кафельные печи</h3>
                  <p>Это не&nbsp;просто отопительная система, это,&nbsp;пожалуй, главное украшение любого интерьера.</p>
                  <button class="modal-button">Заказать</button>
                </div>
                <div class="model"><img alt="Буржуйки" data-src="img/fireplaces_items/stove/09.jpg" src="img/giphy.gif">
                  <noscript><img src="img/fireplaces_items/stove/09.jpg"></noscript>
                  <h3>Буржуйки</h3>
                  <p>Самые востребованные печи на&nbsp;сегодняшний день — от&nbsp;одного взгляда на&nbsp;них&nbsp;становится тепло.</p>
                  <button class="modal-button">Заказать</button>
                </div>
                <div class="model"><img alt="Стальные печи" data-src="img/fireplaces_items/stove/10.jpg" src="img/giphy.gif">
                  <noscript><img src="img/fireplaces_items/stove/10.jpg"></noscript>
                  <h3>Стальные печи</h3>
                  <p>Эти печи великолепно вписываются в&nbsp;современные интерьеры Hi-Tec и Loft, образуя уголок домашнего уюта.</p>
                  <button class="modal-button">Заказать</button>
                </div>
                <div class="model"><img alt="Отопительно-варочные печи" data-src="img/fireplaces_items/stove/11.jpg" src="img/giphy.gif">
                  <noscript><img src="img/fireplaces_items/stove/11.jpg"></noscript>
                  <h3>Отопительно-варочные печи</h3>
                  <p>Эти печи позволят вам любоваться игрой огня и&nbsp;получать тепло, пока на&nbsp;плите готовится вкусный обед или ужин.</p>
                  <button class="modal-button">Заказать</button>
                </div>
          </div>
        </div>
      </div>
      <div data-expandable class="bio-fireplace">
        <section class="intro">
          <h2>Биокамины</h2>
          <p>Камины, которые работают на&nbsp;биотопливе, не&nbsp;имеют продуктов сгорания, при&nbsp;этом вы&nbsp;любуетесь живым пламенем. Их можно устанавливать в&nbsp;квартирах, ресторанах, отелях, офисах.</p>
          <div class="novelty"><span>Новинки!</span>
            <p>Биотопливо с&nbsp;ароматом ванили и&nbsp;цитруса.</p>
          </div>
          <button data-expandable-toggle class="show-models">Смотреть модели</button>
        </section>
        <div data-expandable-block class="models-container">
          <div class="models-wrapper">
                <div class="model"><img alt="Классические" data-src="img/fireplaces_items/bio/12.jpg" src="img/giphy.gif">
                  <noscript><img src="img/fireplaces_items/bio/12.jpg"></noscript>
                  <h3>Классические</h3>
                  <p>Для любителей классики. Встроенные в&nbsp;классические порталы из&nbsp;мрамора или&nbsp;дерева. Изготовление биовставок по&nbsp;индивидуальным проектам.</p>
                  <button class="modal-button">Заказать</button>
                </div>
                <div class="model"><img alt="Современные" data-src="img/fireplaces_items/bio/13.jpg" src="img/giphy.gif">
                  <noscript><img src="img/fireplaces_items/bio/13.jpg"></noscript>
                  <h3>Современные</h3>
                  <p>Сейчас пользуются особой популярностью. Большой выбор напольных и&nbsp;настенных моделей.</p>
                  <button class="modal-button">Заказать</button>
                </div>
          </div>
        </div>
      </div>
      <div data-expandable class="electric-fireplace">
        <section class="intro">
          <h2>Электрокамины</h2>
          <p>Пользуются большим спросом: не&nbsp;требуют дополнительных хлопот, создают уют и&nbsp;комфорт . Их&nbsp;можно встраивать в&nbsp;любые порталы, ниши, размещать настенно, устанавливать автономно.</p>
          <button data-expandable-toggle class="show-models">Смотреть модели</button>
        </section>
        <div data-expandable-block class="models-container">
          <div class="models-wrapper">
                <div class="model"><img alt="С использованием голографического эффекта" data-src="img/fireplaces_items/electro/14.jpg" src="img/giphy.gif">
                  <noscript><img src="img/fireplaces_items/electro/14.jpg"></noscript>
                  <h3>С использованием голографического эффекта</h3>
                  <p>Прекрасная имитация пламени с&nbsp;опцией обогрева.</p>
                  <button class="modal-button">Заказать</button>
                </div>
                <div class="model"><img alt="С эффектом 3D" data-src="img/fireplaces_items/electro/15.jpg" src="img/giphy.gif">
                  <noscript><img src="img/fireplaces_items/electro/15.jpg"></noscript>
                  <h3>С эффектом 3D</h3>
                  <p>Реалистичная имитация живого пламени с&nbsp;помощью пара, подсвеченного особым образом.</p>
                  <button class="modal-button">Заказать</button>
                </div>
                <div class="model"><img alt="С эффектом 5D" data-src="img/fireplaces_items/electro/16.jpg" src="img/giphy.gif">
                  <noscript><img src="img/fireplaces_items/electro/16.jpg"></noscript>
                  <h3>С эффектом 5D</h3>
                  <p>Имитация натурального пламени с&nbsp;использованием LED-технологии.</p>
                  <button class="modal-button">Заказать</button>
                </div>
          </div>
        </div>
      </div>
      <div data-expandable class="marble">
        <section class="intro">
          <h2>Порталы из натурального камня</h2>
          <p>Природа создает неповторимый и&nbsp;уникальный рисунок в&nbsp;камне, мы&nbsp;придаем камню неповторимые и&nbsp;уникальные формы. Используем элементы бронзового литья и&nbsp;скульптурной резьбы по&nbsp;камню.</p>
          <button data-expandable-toggle class="show-models">Смотреть модели</button>
        </section>
        <div data-expandable-block class="models-container">
          <div class="models-wrapper">
            <div class="model"> 
              <div marble-carousel class="swiper-container">
                <div class="swiper-button-prev swiper-button"></div>
                <div class="swiper-button-next swiper-button"></div>
                <div class="swiper-wrapper">
                  <div class="swiper-slide"><img alt="Классические мраморные камины" data-src="img/fireplaces_items/marble/17.jpg" src="img/giphy.gif" class="swiper-lazy">
                    <noscript><img src="img/fireplaces_items/marble/17.jpg"></noscript>
                  </div>
                  <div class="swiper-slide"><img alt="Классические мраморные камины" data-src="img/fireplaces_items/marble/18.jpg" src="img/giphy.gif" class="swiper-lazy">
                    <noscript><img src="img/fireplaces_items/marble/18.jpg"></noscript>
                  </div>
                  <div class="swiper-slide"><img alt="Классические мраморные камины" data-src="img/fireplaces_items/marble/19.jpg" src="img/giphy.gif" class="swiper-lazy">
                    <noscript><img src="img/fireplaces_items/marble/19.jpg"></noscript>
                  </div>
                  <div class="swiper-slide"><img alt="Классические мраморные камины" data-src="img/fireplaces_items/marble/20.jpg" src="img/giphy.gif" class="swiper-lazy">
                    <noscript><img src="img/fireplaces_items/marble/20.jpg"></noscript>
                  </div>
                  <div class="swiper-slide"><img alt="Классические мраморные камины" data-src="img/fireplaces_items/marble/21.jpg" src="img/giphy.gif" class="swiper-lazy">
                    <noscript><img src="img/fireplaces_items/marble/21.jpg"></noscript>
                  </div>
                  <div class="swiper-slide"><img alt="Классические мраморные камины" data-src="img/fireplaces_items/marble/22.jpg" src="img/giphy.gif" class="swiper-lazy">
                    <noscript><img src="img/fireplaces_items/marble/22.jpg"></noscript>
                  </div>
                  <div class="swiper-slide"><img alt="Классические мраморные камины" data-src="img/fireplaces_items/marble/23.jpg" src="img/giphy.gif" class="swiper-lazy">
                    <noscript><img src="img/fireplaces_items/marble/23.jpg"></noscript>
                  </div>
                  <div class="swiper-slide"><img alt="Классические мраморные камины" data-src="img/fireplaces_items/marble/24.jpg" src="img/giphy.gif" class="swiper-lazy">
                    <noscript><img src="img/fireplaces_items/marble/24.jpg"></noscript>
                  </div>
                  <div class="swiper-slide"><img alt="Классические мраморные камины" data-src="img/fireplaces_items/marble/25.jpg" src="img/giphy.gif" class="swiper-lazy">
                    <noscript><img src="img/fireplaces_items/marble/25.jpg"></noscript>
                  </div>
                  <div class="swiper-slide"><img alt="Классические мраморные камины" data-src="img/fireplaces_items/marble/26.jpg" src="img/giphy.gif" class="swiper-lazy">
                    <noscript><img src="img/fireplaces_items/marble/26.jpg"></noscript>
                  </div>
                  <div class="swiper-slide"><img alt="Классические мраморные камины" data-src="img/fireplaces_items/marble/27.jpg" src="img/giphy.gif" class="swiper-lazy">
                    <noscript><img src="img/fireplaces_items/marble/27.jpg"></noscript>
                  </div>
                  <div class="swiper-slide"><img alt="Классические мраморные камины" data-src="img/fireplaces_items/marble/28.jpg" src="img/giphy.gif" class="swiper-lazy">
                    <noscript><img src="img/fireplaces_items/marble/28.jpg"></noscript>
                  </div>
                </div>
              </div>
              <h3>Мраморные порталы</h3>
              <p>Собственная база по&nbsp;камнеобработке позволит воплотить даже самые смелые идеи. Индивидуальный дизайн под&nbsp;ваши требования и&nbsp;предпочтения.</p>
              <button class="modal-button">Заказать</button>
            </div>
                <div class="model"><img alt="Рустикальный стиль" data-src="img/fireplaces_items/rustic/29.jpg" src="img/giphy.gif">
                  <noscript><img src="img/fireplaces_items/rustic/29.jpg"></noscript>
                  <h3>Рустикальный стиль</h3>
                  <p>Дополнит интерьер, выполненный в&nbsp;стиле «прованс» или&nbsp;«шале». Используем природный камень: мрамор, песчаник, доломит, известняк, ракушечник</p>
                  <button class="modal-button">Заказать</button>
                </div>
          </div>
        </div>
      </div>
    </div>
    <section id="reviews" class="reviews">
      <div class="wrapper">
        <div class="about">
          <h2>Клиенты о&nbsp;нас</h2>
        </div>
        <div class="swiper-container">
          <div class="swiper-button-prev swiper-button"></div>
          <div class="swiper-button-next swiper-button"></div>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <p>Приобретала у&nbsp;фирмы топку, дымоход и&nbsp;комплект всех материалов. Монтаж производила бригада мастеров «КаминТайм». Порадовала высокая квалификация.</p>
              <p>Невероятной красоты мраморный портал с&nbsp;надстройкой и&nbsp;элементами из&nbsp;бронзы стал основным украшением в&nbsp;нашем доме. Я&nbsp;долго была в&nbsp;поисках и&nbsp;нашла, наконец, то, что хотелось, именно в&nbsp;«КаминТайм».</p>
              <p>Выражаю искреннюю благодарность всем, кто создавал эту красоту. Рекомендую.</p><span>Ирченко Наталья</span><small>Бизнес-леди</small>
            </div>
            <div class="swiper-slide">
              <p>Моя квартира выполнена в&nbsp;минималистическом стиле. Всё меня устраивало, пока не&nbsp;увидел у друзей биокамин в&nbsp;стиле hi-tec и&nbsp;понял, чего не&nbsp;достает в&nbsp;моем интерьере.</p>
              <p>Друзья подсказали, где&nbsp;я&nbsp;могу приобрести такой камин,  и&nbsp;я&nbsp;воспользовался советом.</p>
              <p>Так что теперь друзья собираются у моего камина. Спасибо огромное КаминТайм за участие. Охотно рекомендую.</p><span>Эдгар Шабанов</span><small>Генеральный директор Clarins</small>
            </div>
            <div class="swiper-slide">
              <p>Очень хотелось иметь камин в&nbsp;квартире, но&nbsp;нет дымохода. Поэтому три года назад приобрел у&nbsp;КаминТайм биокамин.</p>
              <p>Получил грамотную консультацию по&nbsp;эксплуатации и&nbsp;уходу. До сих пор не&nbsp;возникло никаких проблем. Радует созерцание живого огня, а&nbsp;биотопливо с&nbsp;различными ароматическими добавками помогает расслабиться после трудового дня.</p>
              <p>Отдельное спасибо директору Фроловой Жанне за высокий профессионализм.</p><span>Дмитрий Оленин</span><small>Теле-радио ведущий, «Русское радио»</small>
            </div>
            <div class="swiper-slide">
              <p>Заказал полный комплекс услуг по&nbsp;установке камина, дымохода и&nbsp;мраморного портала. На месте получил грамотную консультацию, понял, что могу доверять этой фирме. Многолетний опыт и&nbsp;лицензия МЧС для меня имеют значение. Ребята сработали отлично. Без проволочек. Все мои пожелания учли. Портал сделали очень красивый.</p>
              <p>Спасибо большое.</p><span>Стахеев Игорь</span><small>Предприниматель</small>
            </div>
            <div class="swiper-slide">
              <p>Приобрели здесь электрический камин с&nbsp;эффектом Opti-Myst (с паром) и&nbsp;заказали деревянный портал по&nbsp;индивидуальному проекту. Портал по&nbsp;цвету подобрали идеально под мебель, сроки все были соблюдены.</p>
              <p>Спасибо огромное, с&nbsp;вами приятно иметь дело. В&nbsp;будущем откроем заказ на настоящий камин  и,&nbsp;конечно,&nbsp;только у вас. Будет вдохновлять меня на&nbsp;творчество.</p><span>Ольга Кормухина</span><small>Автор и исполнитель песен</small>
            </div>
            <div class="swiper-slide">
              <p>Никто не&nbsp;сумел сделать мне столь выгодное предложение по&nbsp;камину, как «КаминТайм». Не&nbsp;раздумывая стал с&nbsp;ними сотрудничать&nbsp;и&nbsp;не пожалел.</p>
              <p>Камин подвесной, нестандартный,&nbsp;от французского производителя «Борделет» под заказ. Все пришло даже раньше, чем ожидал,&nbsp;и&nbsp;все соответствовало моим пожеланиям. Могу смело всем рекомендовать эту фирму.</p>
              <p>Желаю процветания «КаминТайм».</p><span>Валерий Чудновец</span><small>Бизнесмен</small>
            </div>
            <div class="swiper-slide">
              <p>Приобрел у «КаминТайм» комплект: портал «Кардинал» из травертина и биовставку. Такой портал я больше не видел ни у одного из производителей. Подобрали все аксессуары и комплект для биокамина.</p>
              <p>Позже заказал биовставку по индивидуальному размеру — все изготовили быстро и качественно.</p>
              <p>Особенно признателен за рекомендации по стилю и дизайнерскому решению. Спасибо большое.</p><span>Григорий Кареев</span><small>Предприниматель</small>
            </div>
            <div class="swiper-slide">
              <p>Я&nbsp;сначала и&nbsp;подходить не хотела — думала всё очень дорого. Но&nbsp;девушка мне любезно рассказала о&nbsp;печках и&nbsp;помогла выбрать небольшую буржуйку для дачи.</p>
              <p>Мы очень довольны ценой и&nbsp;качеством. Спасибо за то,&nbsp;что&nbsp;внимательно относитесь к посетителям.</p><span>Никитина Вера Павловна</span><small>Пенсионерка</small>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="callback" class="callback">
      <div data-callback-state="button" class="callback-form">
        <h2>Сотрудничаем с&nbsp;компаниями</h2>
        <p>Предлагаем особые условия для&nbsp;дизайнеров и&nbsp;архитекторов.</p>
        <button class="modal-button">Обратный звонок</button>
      </div>
    </section>
    <section id="location" class="location">
      <div class="about">
        <h2>Знаем подход</h2>
        <p>Вы можете позвонить нам и&nbsp;заранее договориться о встрече в&nbsp;удобное для вас время.</p>
        <p>Если вы&nbsp;еще не&nbsp;решили как должен выглядеть ваш камин, за чашечкой кофе  мы поможем подобрать модель c&nbsp; учетом общего интерьера.</p>
        <p>Наш офис расположен в&nbsp;удобном месте со&nbsp;своей парковкой.</p><a href="img/plan.jpg">Схема проезда</a>
      </div>
    </section>
    <footer id="footer" class="footer">
      <div class="footer-wrapper">
        <div class="footer-address">
          <address>Нахимовский проспект,&nbsp;24, Центр дизайна и&nbsp;интерьера «EXPOSTROY», павильон 6,&nbsp;офис 6-16</address><a href="privacy-policy.html">Политика конфиденциальности </a>
        </div><a href="mailto:7791166@mail.ru">7791166@mail.ru</a><span><a href="https://api.whatsapp.com/send?phone=79851149222">Whatsapp</a> (+7 985 114 9222)</span>
        <div class="footer-phones"><a href="tel:+79851149222">+7 985 114 9222</a><a href="tel:+79852119645">+7 985 211 9645</a></div>
      </div>
    </footer>
    <div class="modal-overlay">
      <div class="modal"><a class="close-modal">
          <svg viewbox="0 0 20 20">
            <path fill="#000000" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
          </svg></a>
        <div class="modal-content">
          <h2>Мы вам перезвоним!</h2>
          <form action="" method="post" data-callback-form>
            <div class="text-input">
              <input type="tel" placeholder="Телефон" name="phone">
            </div>
            <button type="submit">Отправить</button>
          </form>
        </div>
      </div>
    </div>
    <script src="script/main.min.js"></script>
  </body>
</html>
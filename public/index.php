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
    $to = 'shantishanti@bk.ru';
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
    <link rel="stylesheet" href="swiper/css/swiper.min.css">
    <link rel="stylesheet" href="main.css">
    <meta name="viewport" content="width=device-width">
    <title>KaminTime</title>
  </head>
  <body>
    <header id="header" class="header">
      <nav class="navigation"><a href="/index.html"> 
          <h1 class="logo"></h1></a>
        <ul><a href="#about-company">О нас</a><a href="#firewood">Камины</a><a href="#footer">Контакты</a><a href="#callback">Для бизнеса</a><a href="#reviews">Отзывы</a></ul><a href="tel:+79852119645">+7 985 211 9645</a>
      </nav>
      <section class="wrapper">
        <div class="present">
          <h2>Пришло время установить&nbsp;камин в&nbsp;вашем доме?</h2>
          <p>Вы на правильном пути! Обеспечим полный цикл по монтажу каминов и печей.</p>
          <div class="button-block">
            <button class="modal-button">Заказать</button><small>При заказе камина аксессуары в подарок</small>
          </div>
        </div>
        <div class="present-image"></div>
      </section>
      <section class="wrapper">
        <div class="about-image"></div>
        <div class="about">
          <h2>Наши камины — украшение вашего дома</h2>
          <p>Широкий выбор каминных топок и печей от ведущих производителей. Только высококлассные комплектующие материалы.</p>
        </div>
      </section>
    </header>
    <section id="about-company" class="about-company">
      <div class="about">
        <h2>Более 20 лет успешной работы</h2>
        <p>Наше неоспоримое преимущество — своя собственная база по камнеобработке, которая обеспечивает индивидуальный подход к каждому клиенту.</p>
        <p>Высокая квалификация наших специалистов позволит воплотить самые смелые идеи.</p>
      </div>
    </section>
    <section id="advantages" class="advantages">
      <h2>Преимущества</h2>
      <div class="advantages-list"> 
        <div class="item">
          <div class="count">1</div>
          <h3>От а до я</h3>
          <p>Полный спектр работ по монтажу каминов и печей. Выезд на замер — бонус.</p>
        </div>
        <div class="item">
          <div class="count">2</div>
          <h3>Индивидуальный подход</h3>
          <p>Собственное производство по камнеобработке.</p>
        </div>
        <div class="item">
          <div class="count">3</div>
          <h3>100% Гарантия</h3>
          <p>Гарантия один год, после-гарантийное обслуживание, лицензия МЧС.</p>
        </div>
      </div>
    </section>
    <div class="fireplaces-container">
      <section id="firewood" class="firewood">
        <h2>Дровяные камины</h2>
        <p>Имеем широкий модельный ряд каминных топок. Нашие долгосрочное и стабильное сотрудничество с ведущими европейскими и российскими производителями гарантирует только лучшее качество.</p>
        <button class="show-models">Смотреть модели</button>
      </section>
      <div class="models-container">
        <div class="models-wrapper">
          <div class="model"><img src="img/fireplaces_items/wood/01.jpg" alt="Топка с прямым стеклом">
            <h3>Топка с прямым стеклом</h3>
            <p>Такие топки можно сделать в квадратном виде, горизонтальном и вертикальном.</p>
            <button class="modal-button">Заказать</button>
          </div>
          <div class="model"><img src="img/fireplaces_items/wood/02.jpg" alt="Топка пристенно-угловая">
            <h3>Топка пристенно-угловая</h3>
            <p>Такая форма стекла увеличивает обзор топочной части, позволяя наслаждаться игрой пламени.</p>
            <button class="modal-button">Заказать</button>
          </div>
          <div class="model"><img src="img/fireplaces_items/wood/03.jpg" alt="Топка трёхсторонняя">
            <h3>Топка трёхсторонняя</h3>
            <p>Такой вид топки обеспечивает максимальный обзор пламени.</p>
            <button class="modal-button">Заказать</button>
          </div>
          <div class="model"><img src="img/fireplaces_items/wood/04.jpg" alt="Топка с панорамным и призматическим стеклом">
            <h3>Топка с панорамным и призматическим стеклом</h3>
            <p>Конфигурация стекла позволяет наблюдать за пламенем в широком диапазоне.</p>
            <button class="modal-button">Заказать</button>
          </div>
          <div class="model"><img src="img/fireplaces_items/wood/05.jpg" alt="Туннельные топки">
            <h3>Туннельные топки</h3>
            <p>Данный вид топок позволяет наблюдать за пламенем из двух помещений.</p>
            <button class="modal-button">Заказать</button>
          </div>
          <div class="model"><img src="img/fireplaces_items/wood/06.jpg" alt="Островные камины">
            <h3>Островные камины</h3>
            <p>Островок релакса и неспешной беседы в кругу друзей и близких.</p>
            <button class="modal-button">Заказать</button>
          </div>
          <div class="model"><img src="img/fireplaces_items/wood/07.jpg" alt="В стиле Hi-Tech">
            <h3>В стиле Hi-Tech</h3>
            <p>Брутальный вид каминов никого не оставляет равнодушным.</p>
            <button class="modal-button">Заказать</button>
          </div>
        </div>
      </div>
    </div>
    <div class="fireplaces-container">
      <div class="stove-fireplace">
        <h2>Печи-камины</h2>
        <p>Основное отличие печей от каминов в том, что печи накапливают тепло. И, даже после того, как угас последний уголек, печь продолжает ласково делиться своим теплом с вами.</p>
        <button class="show-models">Смотреть модели</button>
      </div>
      <div class="models-container">
        <div class="models-wrapper">
          <div class="model"><img src="img/fireplaces_items/stove/08.jpg" alt="Кафельные печи">
            <h3>Кафельные печи</h3>
            <p>Это не просто отопительная система, это, пожалуй, главное украшение любого интерьера.</p>
            <button class="modal-button">Заказать</button>
          </div>
          <div class="model"><img src="img/fireplaces_items/stove/09.jpg" alt="Буржуйки">
            <h3>Буржуйки</h3>
            <p>Самые востребованные  печи на сегодняшний день — от одного взгляда на них  становится тепло.</p>
            <button class="modal-button">Заказать</button>
          </div>
          <div class="model"><img src="img/fireplaces_items/stove/10.jpg" alt="Стальные печи">
            <h3>Стальные печи</h3>
            <p>Эти печи великолепно вписываются в современные интерьеры Hi-Tec и  Loft, образуя уголок домашнего уюта.</p>
            <button class="modal-button">Заказать</button>
          </div>
          <div class="model"><img src="img/fireplaces_items/stove/11.jpg" alt="Отопительно-варочные печи">
            <h3>Отопительно-варочные печи</h3>
            <p>Эти печи позволят вам любоваться игрой огня и получать тепло, пока на плите готовится вкусный обед или ужин.</p>
            <button class="modal-button">Заказать</button>
          </div>
        </div>
      </div>
    </div>
    <div class="fireplaces-container">
      <section class="bio-fireplace">
        <h2>Биокамины</h2>
        <p>Камины, которые работают на биотопливе, не имеют продуктов сгорания, при этом вы любуетесь живым пламенем. Их можно устанавливать в квартирах, ресторанах, отелях, офисах.</p>
        <button class="show-models">Смотреть модели</button>
        <div class="novelty"><span>Новинки!</span>
          <p>Биотопливо с ароматом ванили и цитруса.</p>
        </div>
      </section>
      <div class="models-container">
        <div class="models-wrapper">
          <div class="model"><img alt="Классические" data-src="img/fireplaces_items/bio/12.jpg" class="lozad">
            <h3>Классические</h3>
            <p>Прекрасная имитация пламени с опцией обогрева.</p>
            <button class="modal-button">Заказать</button>
          </div>
          <div class="model"><img data-src="img/fireplaces_items/bio/13.jpg" alt="Современные" class="lozad">
            <h3>Современные</h3>
            <p>Реалистичная имитация живого пламени с помощью пара, подсвеченного особым образом. </p>
            <button class="modal-button">Заказать</button>
          </div>
        </div>
      </div>
    </div>
    <div class="fireplaces-container">
      <section class="electric-fireplace">
        <h2>Электрокамины</h2>
        <p>Пользуются большим спросом: не требуют дополнительных хлопот, создают уют и комфорт . Их можно встраивать в любые порталы, ниши, размещать настенно, устанавливать автономно.</p>
        <button class="show-models">Смотреть модели</button>
      </section>
      <div class="models-container">
        <div class="models-wrapper">
          <div class="model"><img src="img/fireplaces_items/electro/14.jpg" alt="С использованием гелографического эффекта" width="342" height="350">
            <h3>С использованием гелографического эффекта</h3>
            <p>Прекрасная имитация пламени с опцией обогрева.</p>
            <button class="modal-button">Заказать</button>
          </div>
          <div class="model"><img src="img/fireplaces_items/electro/15.jpg" alt="С эффектом 3D">
            <h3>С эффектом 3D</h3>
            <p>Реалистичная имитация живого пламени с помощью пара, подсвеченного особым образом. </p>
            <button class="modal-button">Заказать</button>
          </div>
          <div class="model"><img src="img/fireplaces_items/electro/16.jpg" alt="С эффектом 5D">
            <h3>С эффектом 5D</h3>
            <p>Имитация натурального пламени с использованием LED-технологии.</p>
            <button class="modal-button">Заказать</button>
          </div>
        </div>
      </div>
    </div>
    <div class="fireplaces-container">
      <section class="marble">
        <h2>Мраморные порталы</h2>
        <p>Природа создает неповторимый и уникальный рисунок в камне, мы придаем камню неповторимые и уникальные формы. Используем элементы бронзового литья и скульптурной резьбы по камню.</p>
        <button class="show-models">Смотреть модели</button>
      </section>
      <div class="models-container">
        <div class="models-wrapper">
          <div data-marble class="model"><img src="img/fireplaces_items/marble/17.jpg" alt="Мраморный камин">
          </div>
          <div data-marble class="model"><img src="img/fireplaces_items/marble/18.jpg" alt="Мраморный камин">
          </div>
          <div data-marble class="model"><img src="img/fireplaces_items/marble/19.jpg" alt="Мраморный камин">
          </div>
          <div data-marble class="model"><img src="img/fireplaces_items/marble/20.jpg" alt="Мраморный камин">
          </div>
          <div data-marble class="model"><img src="img/fireplaces_items/marble/21.jpg" alt="Мраморный камин">
          </div>
          <div data-marble class="model"><img src="img/fireplaces_items/marble/22.jpg" alt="Мраморный камин">
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
              <p>Моя квартира выполнена в минималистическом стиле. Всё меня устраивало, пока не увидел у друзей биокамин в стиле hi-tec и понял, чего не достает в моем интерьре.</p>
              <p>Друзья подсказали где я могу приобрести такой камин,  и я воспользовался советом .</p>
              <p>Так что теперь друзья собираются у моего камина. Спасибо огромное КаминТайм за участие. Охотно рекомендую.</p><span>Эдгар Шабанов</span><small>Генеральный директор Clarins</small>
            </div>
            <div class="swiper-slide">
              <p>Очень хотелось иметь камин в квартире, но нет дымохода. Поэтому три года назад приобрел у КаминТайм биокамин.</p>
              <p>Получил грамотную консультацию по эксплуатации и уходу. До сих пор не возникло никаких проблем. Радует созерцание живого огня, а биотопливо с различными ароматическими добавками помогает расслабиться после трудового дня.</p>
              <p>Отдельное спасибо директору Фроловой Жанне за высокий профессионализм.</p><span>Дмитрий Оленин</span><small>Теле-радио ведущий, «Русское радио»</small>
            </div>
            <div class="swiper-slide">
              <p>Заказал полный комплекс услуг по установке камина, дымохода и мраморного портала. На месте получил грамотную консультацию, понял, что могу доверять этой фирме. Многолетний опыт и лицензия МЧС для меня имеют значение. Ребята сработали отлично. Без проволочек. Все мои пожелания учли. Портал сделали очень красивый.</p>
              <p>Спасибо большое.</p><span>Стахеев Игорь</span><small>Предприниматель</small>
            </div>
            <div class="swiper-slide">
              <p>Приобрели здесь электрический камин с эффектом Opti-Myst (с паром) и заказали деревянный портал по индивидуальному проекту. Портал по цвету подобрали идеально под мебель, сроки все были соблюдены.</p>
              <p>Спасибо огромное, с вами приятно иметь дело. В будущем откроем заказ на настоящий камин  и, конечно, только у вас. Будет вдохновлять меня на творчество.</p><span>Ольга Кормухина</span><small>Автор и исполнитель песен</small>
            </div>
            <div class="swiper-slide">
              <p>Никто не сумел сделать мне столь выгодное предложение по камину, как «КаминТайм». Не раздумывая стал с ними сотрудничать и не пожалел.</p>
              <p>Камин подвесной, нестандартный, от французского производителя «»Борделет» под заказ. Все пришло даже раньше, чем ожидал, и все соответствовало моим пожеланиям. Могу смело всем рекомендовать эту фирму.</p>
              <p>Желаю процветания «КаминТайм».</p><span>Валерий Чудновец</span><small>Бизнесмен</small>
            </div>
            <div class="swiper-slide">
              <p>Приобрел у «КаминТайм» комплект: портал «Кардинал» из травертина и биовставку. Такой портал я больше не видел ни у одного производителей. Подобрали все аксессуары и комплект для биокамина.</p>
              <p>Позже заказал биовставку по индивидуальному размеру — все изготовили быстро и качественно.</p>
              <p>Особенно признателен за рекомендации по стилю и дизайнерскому решению. Спасибо большое.</p><span>Григорий Кареев</span><small>Предприниматель</small>
            </div>
            <div class="swiper-slide">
              <p>Я сначала и подходить не хотела — думала всё очень дорого. Но девушка мне любезно рассказала о печках и помогла выбрать небольшую буржуйку для дачи.</p>
              <p>Мы очень довольны ценой и качеством. Спасибо за то, что внимательно относитесь к посетителям.</p><span>Никитина Вера Павловна</span><small>Пенсионерка</small>
            </div>
            <div class="swiper-slide">
              <p>Приобретала у фирмы топку, дымоход и комплект всех материалов. Монтаж производила бригада мастеров «КаминТайм». Порадовала высокая квалификация.</p>
              <p>Невероятной красоты мраморный портал с надстройкой и элементами из бронзы стал основным украшением в нашем доме. Я долго была в поисках и нашла, наконец, то, что хотелось, именно в «КаминТайм».</p>
              <p>Выражаю искреннюю благодарность всем, кто создавал эту красоту. Рекомендую.</p><span>Ирченко Наталья</span><small>Бизнес-леди</small>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="callback" class="callback">
      <div data-callback-state="button" class="callback-form">
        <h2>Сотрудничаем с&nbsp;компаниями</h2>
        <p>Если вы представляете отель, ресторан, торговый комплекс — у нас для вас специальные условия.</p>
        <button class="modal-button">Обратный звонок</button>
      </div>
    </section>
    <section id="location" class="location">
      <div class="about">
        <h2>Знаем подход</h2>
        <p>Вы можете позвонить нам и заранее договориться о встрече  в удобное для вас время.</p>
        <p>Если вы еще не решили как должен выглядеть ваш камин, за чашечкой кофе  мы поможем подобрать модель с учетом общего интерьера.</p>
        <p>Наш офис расположен в удобном месте со своей парковкой.</p><a href="img/plan.jpg">Схема проезда</a>
      </div>
    </section>
    <footer id="footer" class="footer"><a href="#header" class="logo"></a>
      <address>Нахимовский проспект, 24, Центр дизайна и интерьера «EXPOSTROY», павильон 6, офис 6-16</address>
      <ul><a href="mailto:7791166@mail.ru">7791166@mail.ru</a><a href="privacy-policy.html">Политика конфиденциальности  </a></ul><a href="tel:+79852119645">+7 985 211 9645</a>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="swiper/js/swiper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
    <script src="main.min.js"></script>
  </body>
</html>
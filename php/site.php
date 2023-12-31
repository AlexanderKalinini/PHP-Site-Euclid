<!DOCTYPE html>
<html lang="ru">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Cache-Control" content="private">
  <title>Евклид</title>
  <link rel="stylesheet" href="css/normalize.css">

  <link rel="shortcut icon" href="img/favicon.svg" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
  <link rel="stylesheet" href="css/accordion.css">
  <link rel="stylesheet" href="css/tab.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/media.css">
</head>

<body>
  <header class="header header__section">
    <div class="container">
      <div class="header__main">
        <button class="header__burger">
          <span class="header__burger-line"></span>
          <span class="header__burger-line"></span>
          <span class="header__burger-line"></span>
        </button>
        <a href="index.php" class="logo header__logo" aria-label="Логотип проектные системы Евклид">
          <picture>
            <source srcset="img/logo-320.svg" media="(max-width:450px)">
            </source>
            <img src="img/logo.jpg" alt="логотип Евклид">
          </picture>
        </a>
        <div class="header__nav-block">
          <nav class="header__nav">
            <ul class="list header__nav-list">
              <li class="header__nav-items" aria-label="Ссылка о нас">
                <a aria-label="ссылка" href="#about" class="header__nav-link">О нас</a>
              </li>
              <li class="header__nav-items">
                <a href="#projects" class="header__nav-link">Проекты</a>
              </li>
              <li class="header__nav-items">
                <a href="#stage" class="header__nav-link">Этапы</a>
              </li>
              <li class="header__nav-items">
                <a href="https://otzovik.com/" target="_blank" class="header__nav-link">Отзывы</a>
              </li>
              <li class="header__nav-items">
                <a href="#contacts" class="header__nav-link">Контакты</a>
              </li>
            </ul>
          </nav>
        </div>
        <button class="header__btn">
          <svg aria-label="Кнопка поиска" width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="7.56126" height="1.89031" transform="matrix(0.713342 0.700816 -0.713342 0.700816 18.6064 17.3762)" fill="black"></rect>
            <path d="M20.9303 10.7726C20.9303 16.1533 16.4855 20.5452 10.9652 20.5452C5.44478 20.5452 1 16.1533 1 10.7726C1 5.39198 5.44478 1 10.9652 1C16.4855 1 20.9303 5.39198 20.9303 10.7726Z" stroke="black" stroke-width="2"></path>
          </svg>
        </button>

        <form action="" class="header__search" method="POST">
          <input class='header__input' type="text" name="search" placeholder='Что будем искать?'>
          <button class="header__btn" type="submit">
            <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect width="7.56126" height="1.89031" transform="matrix(0.713342 0.700816 -0.713342 0.700816 18.6064 17.3762)" fill="#FF9900"></rect>
              <path d="M20.9303 10.7726C20.9303 16.1533 16.4855 20.5452 10.9652 20.5452C5.44478 20.5452 1 16.1533 1 10.7726C1 5.39198 5.44478 1 10.9652 1C16.4855 1 20.9303 5.39198 20.9303 10.7726Z" stroke="#FF9900" stroke-width="2"></path>
            </svg>
          </button>
          <button class="header__button-close" type="submit" name='search' value=''>
            <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="8.9541" y="7.30432" width="11.6645" height="2.33291" transform="rotate(45 8.9541 7.30432)" fill="#CACACA"></rect>
              <rect x="7.30469" y="15.5524" width="11.6645" height="2.33291" transform="rotate(-45 7.30469 15.5524)" fill="#CACACA"></rect>
              <circle cx="12" cy="12" r="11" stroke="#CACACA" stroke-width="2"></circle>
            </svg>
          </button>
        </form>
      </div>
    </div>
  </header>
  <main>
    <section class="hero hero__section" id="hero">
      <div class="container">
        <div class="hero__container">
          <div class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide hero_background1"></div>
              <div class="swiper-slide hero_background2"></div>
              <div class="swiper-slide hero_background3"></div>
            </div>
            <div class="swiper-pagination"></div>
          </div>

          <div class="hero__block">
            <h1 class="first-title hero__first-title">
              Проектные решения любой сложности
            </h1>
            <p class="paragraph hero__paragraph">
              Есть над чем задуматься: базовые сценарии поведения
              пользователей и по сей день остаются уделом
              проектантов
            </p>
            <a href="#form" class="btn hero__btn">Заказать расчёт</a>
          </div>
        </div>
      </div>
    </section>

    <section class="about about__section" id="about">
      <div class="container">
        <article class="about__article">
          <h2 class="second-title about__section-title">
            О нас
          </h2>
          <p class="paragraph">
            Также как перспективное планирование создаёт необходимость
            включения в производственный план целого ряда внеочередных
            мероприятий с учётом комплекса экспериментов, поражающих
            по своей масштабности и грандиозности. А также
            диаграммы связей могут быть описаны максимально подробно.
            Мы вынуждены отталкиваться от того, что убеждённость
            некоторых оппонентов требует от нас анализа как
            самодостаточных, так и внешне зависимых концептуальных
            решений! Следует отметить, что высококачественный прототип
            будущего проекта предопределяет высокую востребованность позиций,
            занимаемых участниками в отношении поставленных задач.
            Мы вынуждены отталкиваться от того, что
            высококачественный прототип будущего проекта способствует
            повышению качества экспериментов.
          </p>
        </article>
        <div class="about__main">
          <div class="about__illustration">
            <div class="about__illustration-more">
              <img class="about__img-320" src="img/about-worker-320.jpg" alt="worker">
              <p class="paragraph about__paragraph">
                Принимая во внимание показатели успешности, перспективное
                планирование способствует подготовке и реализации новых
                принципов
              </p>
              <button class="btn about__btn">Подробнее</button>
            </div>
          </div>
          <ul class="about__list">
            <li class="about__item about__item_background-top">
              <h3 class="third-title about__third-title">
                Консультация с широким активом
              </h3>
              <p class="paragraph">
                А также свежий взгляд на привычные вещи
                безусловно открывает новые горизонты для как самодостаточных,
                так и внешне зависимых концептуальных решений
              </p>
            </li>
            <li class="about__item about__item_background-bottom">
              <h3 class="third-title about__third-title">
                В своём стремлении повысить
              </h3>
              <p class="paragraph">
                Качество жизни, они забывают, что сплочённость команды
                профессионалов представляет собой интересный эксперимент
                проверки прогресса профессионального сообщества
              </p>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section id="stage" class=" how how__section">
      <div class="container">
        <h2 class="second-title how__second-title">Как мы работаем</h2>
        <ul class="how__list">
          <li class="how__item tabs-nav__item">
            <button class="how__item-button tabs-nav__btn tabs-nav__btn--active" data-path="one">
              1 шаг
            </button>
          </li>
          <li class="how__item">
            <button class="how__item-button tabs-nav__btn tabs-nav__btn--active" data-path="two">
              2 шаг
            </button>
          </li>
          <li class="how__item">
            <button class="how__item-button tabs-nav__btn tabs-nav__btn--active" data-path="three">
              3 шаг
            </button>
          </li>
          <li class="how__item">
            <button class="how__item-button tabs-nav__btn tabs-nav__btn--active" data-path="four">
              4 шаг
            </button>
          </li>
        </ul>
        <div class="tabs-item tabs-item--active" data-target="one">
          <article class="how__article">
            <picture>
              <source srcset="img/how-320.png" media="(max-width:320px)">
              </source>
              <img class="how__image768" src="img/how-768.jpg" alt="computers">
            </picture>
            <div class="how__tab">
              <h3 class="third-title how__third-title">
                Проводим консультацию
              </h3>
              <p class="paragraph how__paragraph">
                Влечёт за собой процесс внедрения и модернизации
                приоритизации разума над эмоциями. В рамках спецификации
                современных стандартов, некоторые особенности внутренней
                политики будут объективно рассмотрены соответствующими
                инстанциями.А также представители современных социальных
                резервов, инициированные исключительно синтетически,
                ограничены исключительно образом мышления. Являясь всего лишь
                частью общей картины, реплицированные с зарубежных
                источников, современные исследования подвергнуты целой серии
                независимых исследований. Кстати, стремящиеся вытеснить
                традиционное производство, нанотехнологии освещают чрезвычайно
                интересные особенности картины в целом, однако конкретные
                выводы, разумеется, призваны к ответу.
              </p>
            </div>
            <div class="how__buttons">
              <button class="btn how__btn-more">Подробнее</button>
              <a class="btn how__btn" href="contract.docx" download>Договор</a>
            </div>
          </article>
          <picture class="how__image tabs-item--active" data-target="one">
            <source srcset="img/how1024.jpg" media="(max-width:1250px)">
            </source>
            <img src="img/how.jpg" alt="computers pucture">
          </picture>
        </div>

        <div class="tabs-item" data-target="two">
          <article class="how__article">
            <picture>
              <source srcset="img/how-pic-320-2.jpg" media="(max-width:320px)">
              </source>
              <img class="how__image768" src="img/how-pic-768-2.jpg" alt="computers">
            </picture>
            <div class="how__tab">
              <h3 class="third-title how__third-title">Составляем смету</h3>
              <p class="paragraph how__paragraph">
                Внедрения и модернизации приоритизации разума над эмоциями.
                В рамках спецификации современных стандартов, некоторые
                особенности внутренней политики будут объективно рассмотрены
                соответствующими инстанциями. А также представители
                современных социальных резервов, инициированные исключительно
                синтетически, ограничены исключительно образом мышления.
                Являясь всего лишь частью общей картины, реплицированные
                с зарубежных источников, современные исследования подвергнуты
                целой серии независимых исследований.
              </p>
            </div>
            <div class="how__buttons">
              <button class="btn how__btn-more">Подробнее</button>
              <button class="btn how__btn">Договор</button>
            </div>
          </article>
          <picture class="how__image tabs-item--active" data-target="one">
            <source srcset="img/how-pic-1024-2.jpg" media="(max-width:1250px)">
            </source>
            <img src="img/how2.jpg" alt="computers pucture">
          </picture>
        </div>

        <div class="tabs-item" data-target="three">
          <article class="how__article">
            <picture>
              <source srcset="img/how-pic-320-3.jpg" media="(max-width:320px)">
              </source>
              <img class="how__image768" src="img/how-pic-768-3.jpg" alt="computers">
            </picture>
            <div class="how__tab">
              <h3 class="third-title how__third-title">
                Привлекаем подрядчиков
              </h3>
              <p class="paragraph how__paragraph">
                Идейные соображения высшего порядка, а также новая модель
                организационной деятельности требует анализа прогресса
                профессионального сообщества. Высокий уровень вовлечения
                представителей целевой аудитории является чётким
                доказательством простого факта: высококачественный прототип
                будущего проекта напрямую зависит от дальнейших направлений
                развития. Разнообразный и богатый опыт говорит нам, что новая
                модель организационной деятельности говорит о возможностях
                системы массового участия. Принимая во внимание показатели
                успешности, постоянное информационно-пропагандистское
                обеспечение нашей деятельности позволяет выполнить важные
                задания по разработке прогресса профессионального сообщества.
              </p>
            </div>
            <div class="how__buttons">
              <button class="btn how__btn-more">Подробнее</button>
              <button class="btn how__btn">Договор</button>
            </div>
          </article>
          <picture class="how__image tabs-item--active" data-target="one">
            <source srcset="img/how-pic-1024-3.jpg" media="(max-width:1250px)">
            </source>
            <img src="img/how3.jpg" alt="computers pucture">
          </picture>
        </div>

        <div class="tabs-item" data-target="four">
          <article class="how__article">
            <picture>
              <source srcset="img/how-pic-320-4.jpg" media="(max-width:320px)">
              </source>
              <img class="how__image768" src="img/how-pic-768-4.jpg" alt="computers">
            </picture>
            <div class="how__tab">
              <h3 class="third-title how__third-title">
                Инспектируем все этапы работ
              </h3>
              <p class="paragraph how__paragraph">
                Высокий уровень вовлечения представителей целевой аудитории
                является чётким доказательством простого факта:
                высококачественный прототип будущего проекта напрямую зависит
                от дальнейших направлений развития. Разнообразный и богатый
                опыт говорит нам, что новая модель организационной
                деятельности говорит о возможностях системы массового участия.
                Принимая во внимание показатели успешности, постоянное
                информационно-пропагандистское обеспечение нашей деятельности
                позволяет.
              </p>
            </div>
            <div class="how__buttons">
              <button class="btn how__btn-more">Подробнее</button>
              <button class="btn how__btn">Договор</button>
            </div>
          </article>
          <picture class="how__image tabs-item--active" data-target="one">
            <source srcset="img/how-pic-1024-4.jpg" media="(max-width:1250px)">
            </source>
            <img src="img/how4.jpg" alt="computers pucture">
          </picture>
        </div>
      </div>
    </section>

    <section class="question question__section">
      <div class="container">
        <h2 class="second-title question__second-title">
          Часто задаваемые вопросы
        </h2>
        <ul class="accordion-list list question__list">
          <li class="question__accordion question__item">
            <button aria-label="кнопка развернуть" class=" question__accordion-control question__btn">
              <span class="question__span-item">Из чего формируется конечная стоимость проекта?</span>
              <div class="question__buttons">
                <svg aria-label="кнопка развернуть" class="question__svg-320" width="30" height="30" viewbox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="15" cy="15" r="15" fill="#CACACA"></circle>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M15.0339 14.4343L15.0339 5.40002L15.5653 5.40002L15.5653 14.4343L20.3297 14.4343L24.5996 14.4343L24.5996 14.9657L15.5653 14.9657L15.5653 24L15.0339 24L15.0339 14.9657L5.99961 14.9657L5.99961 14.4343L15.0339 14.4343Z" fill="black"></path>
                </svg>
                <svg aria-label="кнопка развернуть" class="question__svg" width="50" height="50" viewbox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <ellipse cx="25" cy="25" rx="25" ry="25" fill="#CACACA"></ellipse>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M25.0571 24.0571L25.0571 9L25.9429 9L25.9429 24.0571L33.8835 24.0571L41 24.0571L41 24.9429L25.9429 24.9429L25.9429 40L25.0571 40L25.0571 24.9429L10 24.9429L10 24.0571L25.0571 24.0571Z" fill="black"></path>
                </svg>
              </div>
            </button>
            <div class="question__accordion-content">
              <p>
                Являясь всего лишь частью общей картины, непосредственные
                участники технического прогресса призывают нас  к новым
                свершениям, которые, в свою очередь, должны быть своевременно
                верифицированы. Но высококачественный прототип будущего
                проекта является качественно новой ступенью первоочередных
                требований. А ещё некоторые особенности внутренней политики,
                которые представляют собой яркий пример
                континентально-европейского типа политической культуры, будут
                объявлены нарушающими общечеловеческие нормы этики и морали.
                И нет сомнений, что явные признаки победы институционализации
                призывают нас к новым свершениям, которые, в свою очередь,
                должны быть указаны как претенденты на роль ключевых факторов.
              </p>
              <p>
                Приятно, граждане, наблюдать, как некоторые особенности
                внутренней политики могут быть призваны к ответу. Явные
                признаки победы институционализации набирают популярность
                среди определённых слоёв населения, а значит, должны быть
                объединены в целые кластеры себе подобных. Банальные,
                но неопровержимые выводы, а также многие известные личности
                призывают нас к новым свершениям, которые, в свою очередь,
                должны быть представлены в исключительно положительном свете.
              </p>
            </div>
          </li>
          <li class="question__accordion question__item">
            <button class=" question__accordion-control question__btn">
              <span class="question__span-item">У меня есть свой проект. Сможем ли мы его доработать /
                реализовать?</span>
              <div class="question__buttons">
                <svg aria-label="кнопка развернуть" class="question__svg-320" width="30" height="30" viewbox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="15" cy="15" r="15" fill="#CACACA"></circle>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M15.0339 14.4343L15.0339 5.40002L15.5653 5.40002L15.5653 14.4343L20.3297 14.4343L24.5996 14.4343L24.5996 14.9657L15.5653 14.9657L15.5653 24L15.0339 24L15.0339 14.9657L5.99961 14.9657L5.99961 14.4343L15.0339 14.4343Z" fill="black"></path>
                </svg>
                <svg aria-label="кнопка развернуть" class="question__svg" width="50" height="50" viewbox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <ellipse cx="25" cy="25" rx="25" ry="25" fill="#CACACA"></ellipse>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M25.0571 24.0571L25.0571 9L25.9429 9L25.9429 24.0571L33.8835 24.0571L41 24.0571L41 24.9429L25.9429 24.9429L25.9429 40L25.0571 40L25.0571 24.9429L10 24.9429L10 24.0571L25.0571 24.0571Z" fill="black"></path>
                </svg>
              </div>
            </button>

            <div class="question__accordion-content">
              <p>
                Являясь всего лишь частью общей картины, непосредственные
                участники технического прогресса призывают нас  к новым
                свершениям, которые, в свою очередь, должны быть своевременно
                верифицированы. Но высококачественный прототип будущего
                проекта является качественно новой ступенью первоочередных
                требований. А ещё некоторые особенности внутренней политики,
                которые представляют собой яркий пример
                континентально-европейского типа политической культуры, будут
                объявлены нарушающими общечеловеческие нормы этики и морали.
                И нет сомнений, что явные признаки победы институционализации
                призывают нас к новым свершениям, которые, в свою очередь,
                должны быть указаны как претенденты на роль ключевых факторов.
              </p>
              <p>
                Приятно, граждане, наблюдать, как некоторые особенности
                внутренней политики могут быть призваны к ответу. Явные
                признаки победы институционализации набирают популярность
                среди определённых слоёв населения, а значит, должны быть
                объединены в целые кластеры себе подобных. Банальные,
                но неопровержимые выводы, а также многие известные личности
                призывают нас к новым свершениям, которые, в свою очередь,
                должны быть представлены в исключительно положительном свете.
              </p>
            </div>
          </li>
          <li class="question__accordion question__item">
            <button class=" question__accordion-control question__btn">
              <span class="question__span-item">Я выбираю между разными компаниями. В чём ваше отличие?</span>
              <div class="question__buttons">
                <svg aria-label="кнопка развернуть" class="question__svg-320" width="30" height="30" viewbox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="15" cy="15" r="15" fill="#CACACA"></circle>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M15.0339 14.4343L15.0339 5.40002L15.5653 5.40002L15.5653 14.4343L20.3297 14.4343L24.5996 14.4343L24.5996 14.9657L15.5653 14.9657L15.5653 24L15.0339 24L15.0339 14.9657L5.99961 14.9657L5.99961 14.4343L15.0339 14.4343Z" fill="black"></path>
                </svg>
                <svg aria-label="кнопка развернуть" class="question__svg" width="50" height="50" viewbox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <ellipse cx="25" cy="25" rx="25" ry="25" fill="#CACACA"></ellipse>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M25.0571 24.0571L25.0571 9L25.9429 9L25.9429 24.0571L33.8835 24.0571L41 24.0571L41 24.9429L25.9429 24.9429L25.9429 40L25.0571 40L25.0571 24.9429L10 24.9429L10 24.0571L25.0571 24.0571Z" fill="black"></path>
                </svg>
              </div>
            </button>

            <div class="question__accordion-content">
              <p>
                Являясь всего лишь частью общей картины, непосредственные
                участники технического прогресса призывают нас  к новым
                свершениям, которые, в свою очередь, должны быть своевременно
                верифицированы. Но высококачественный прототип будущего
                проекта является качественно новой ступенью первоочередных
                требований. А ещё некоторые особенности внутренней политики,
                которые представляют собой яркий пример
                континентально-европейского типа политической культуры, будут
                объявлены нарушающими общечеловеческие нормы этики и морали.
                И нет сомнений, что явные признаки победы институционализации
                призывают нас к новым свершениям, которые, в свою очередь,
                должны быть указаны как претенденты на роль ключевых факторов.
              </p>
              <p>
                Приятно, граждане, наблюдать, как некоторые особенности
                внутренней политики могут быть призваны к ответу. Явные
                признаки победы институционализации набирают популярность
                среди определённых слоёв населения, а значит, должны быть
                объединены в целые кластеры себе подобных. Банальные,
                но неопровержимые выводы, а также многие известные личности
                призывают нас к новым свершениям, которые, в свою очередь,
                должны быть представлены в исключительно положительном свете.
              </p>
            </div>
          </li>
          <li class="question__accordion question__item">
            <button class=" question__accordion-control question__btn">
              <span class="question__span-item">Могу ли я делегировать вам работу / согласование
                с подрядчиком / организацией?</span>
              <div class="question__buttons">
                <svg aria-label="кнопка развернуть" class="question__svg-320" width="30" height="30" viewbox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="15" cy="15" r="15" fill="#CACACA"></circle>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M15.0339 14.4343L15.0339 5.40002L15.5653 5.40002L15.5653 14.4343L20.3297 14.4343L24.5996 14.4343L24.5996 14.9657L15.5653 14.9657L15.5653 24L15.0339 24L15.0339 14.9657L5.99961 14.9657L5.99961 14.4343L15.0339 14.4343Z" fill="black"></path>
                </svg>
                <svg aria-label="кнопка развернуть" class="question__svg" width="50" height="50" viewbox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <ellipse cx="25" cy="25" rx="25" ry="25" fill="#CACACA"></ellipse>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M25.0571 24.0571L25.0571 9L25.9429 9L25.9429 24.0571L33.8835 24.0571L41 24.0571L41 24.9429L25.9429 24.9429L25.9429 40L25.0571 40L25.0571 24.9429L10 24.9429L10 24.0571L25.0571 24.0571Z" fill="black"></path>
                </svg>
              </div>
            </button>

            <div class="question__accordion-content">
              <p>
                Являясь всего лишь частью общей картины, непосредственные
                участники технического прогресса призывают нас  к новым
                свершениям, которые, в свою очередь, должны быть своевременно
                верифицированы. Но высококачественный прототип будущего
                проекта является качественно новой ступенью первоочередных
                требований. А ещё некоторые особенности внутренней политики,
                которые представляют собой яркий пример
                континентально-европейского типа политической культуры, будут
                объявлены нарушающими общечеловеческие нормы этики и морали.
                И нет сомнений, что явные признаки победы институционализации
                призывают нас к новым свершениям, которые, в свою очередь,
                должны быть указаны как претенденты на роль ключевых факторов.
              </p>
              <p>
                Приятно, граждане, наблюдать, как некоторые особенности
                внутренней политики могут быть призваны к ответу. Явные
                признаки победы институционализации набирают популярность
                среди определённых слоёв населения, а значит, должны быть
                объединены в целые кластеры себе подобных. Банальные,
                но неопровержимые выводы, а также многие известные личности
                призывают нас к новым свершениям, которые, в свою очередь,
                должны быть представлены в исключительно положительном свете.
              </p>
            </div>
          </li>
          <li class="question__accordion question__item">
            <button class=" question__accordion-control question__btn">
              <span class="question__span-item">Могу ли я вернуть деньги на каком-либо из этапов работ?</span>
              <div class="question__buttons">
                <svg aria-label="кнопка развернуть" class="question__svg-320" width="30" height="30" viewbox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="15" cy="15" r="15" fill="#CACACA"></circle>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M15.0339 14.4343L15.0339 5.40002L15.5653 5.40002L15.5653 14.4343L20.3297 14.4343L24.5996 14.4343L24.5996 14.9657L15.5653 14.9657L15.5653 24L15.0339 24L15.0339 14.9657L5.99961 14.9657L5.99961 14.4343L15.0339 14.4343Z" fill="black"></path>
                </svg>
                <svg aria-label="кнопка развернуть" class="question__svg" width="50" height="50" viewbox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <ellipse cx="25" cy="25" rx="25" ry="25" fill="#CACACA"></ellipse>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M25.0571 24.0571L25.0571 9L25.9429 9L25.9429 24.0571L33.8835 24.0571L41 24.0571L41 24.9429L25.9429 24.9429L25.9429 40L25.0571 40L25.0571 24.9429L10 24.9429L10 24.0571L25.0571 24.0571Z" fill="black"></path>
                </svg>
              </div>
            </button>

            <div class="question__accordion-content">
              <p>
                Являясь всего лишь частью общей картины, непосредственные
                участники технического прогресса призывают нас  к новым
                свершениям, которые, в свою очередь, должны быть своевременно
                верифицированы. Но высококачественный прототип будущего
                проекта является качественно новой ступенью первоочередных
                требований. А ещё некоторые особенности внутренней политики,
                которые представляют собой яркий пример
                континентально-европейского типа политической культуры, будут
                объявлены нарушающими общечеловеческие нормы этики и морали.
                И нет сомнений, что явные признаки победы институционализации
                призывают нас к новым свершениям, которые, в свою очередь,
                должны быть указаны как претенденты на роль ключевых факторов.
              </p>
              <p>
                Приятно, граждане, наблюдать, как некоторые особенности
                внутренней политики могут быть призваны к ответу. Явные
                признаки победы институционализации набирают популярность
                среди определённых слоёв населения, а значит, должны быть
                объединены в целые кластеры себе подобных. Банальные,
                но неопровержимые выводы, а также многие известные личности
                призывают нас к новым свершениям, которые, в свою очередь,
                должны быть представлены в исключительно положительном свете.
              </p>
            </div>
          </li>
        </ul>
      </div>
    </section>
  </main>

  <footer class="footer">
    <div class="footer__documents">
      <a href="#" class="logo footer__logo">
        <img class="footer__logo-img" src="img/logo-footer.svg" alt="логотип Евклид">
      </a>
      <ul class="list footer__list">
        <li id="contacts" class="footer__item">
          <a href="#about" class="footer__link">О нас </a>
        </li>
        <li class="footer__item">
          <a href="./" class="footer__link">Проекты</a>
        </li>
        <li class="footer__item">
          <a href="https://otzovik.com/" target="_blank" class="footer__link">Отзывы</a>
        </li>
        <li class="footer__item">
          <a href="contract.docx" download class="footer__link">Договор оферты</a>
        </li>
        <li class="footer__item">
          <a href="contract.docx" download class="footer__link">Договор подряда</a>
        </li>
        <li class="footer__item">
          <a href="contract.docx" download class="footer__link">Конфиденциальность</a>
        </li>
        <li class="footer__item">
          <a href="partnership.docx" download class="footer__link">Партнерское соглашение</a>
        </li>
      </ul>
      <div class="footer__social">

        <a aria-label="ссылка Одноклассники" href="https://ok.ru" target="_blank" class="footer__social-link"><svg aria-label="ссылка Одноклассники" width="60" height="60" viewbox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M25.7054 19.9812C25.7054 22.4546 27.7105 24.4598 30.1838 24.4598C32.6572 24.4598 34.6623 22.4546 34.6623 19.9812C34.6623 17.5079 32.6572 15.5028 30.1838 15.5028C27.7105 15.5028 25.7054 17.5079 25.7054 19.9812Z" fill="#666666"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M30 60C46.5686 60 60 46.5685 60 30C60 13.4315 46.5686 0 30 0C13.4314 0 0 13.4315 0 30C0 46.5685 13.4314 60 30 60ZM19.35 19.9811C19.35 13.9978 24.2004 9.14729 30.1838 9.14729C36.1673 9.14729 41.0176 13.9978 41.0176 19.9811C41.0176 25.9645 36.1673 30.8154 30.1838 30.8154C24.2004 30.8154 19.35 25.9645 19.35 19.9811ZM41.0823 36.3881C40.9448 36.4983 38.3457 38.5522 34.0085 39.4358L40.5554 45.9243C41.7067 47.0738 41.7081 48.9389 40.5586 50.0902C39.4091 51.2414 37.5444 51.2432 36.3927 50.0935L30.0368 43.904L24.2639 50.0536C23.6859 50.6532 22.9149 50.9547 22.1431 50.9547C21.407 50.9547 20.6703 50.6808 20.0986 50.1296C18.9274 49.0003 18.8935 47.1355 20.0228 45.9643L26.2369 39.4701C21.7782 38.6073 19.0718 36.4998 18.9324 36.3881C17.6633 35.3702 17.4594 33.5163 18.4772 32.247C19.4949 30.9778 21.3487 30.7739 22.6182 31.7916C22.645 31.8133 25.4756 33.9398 30.0366 33.9429C34.5977 33.9398 37.3698 31.8133 37.3966 31.7916C38.666 30.7739 40.5198 30.9778 41.5375 32.247C42.5553 33.5163 42.3515 35.3702 41.0823 36.3881Z" fill="#666666"></path>
          </svg>
        </a>
        <a href="https://vk.com" target="_blank" class="footer__social-link"><svg aria-label="ссылка Вконтакте" width="60" height="60" viewbox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M30 0C13.432 0 0 13.4314 0 30C0 46.5686 13.432 60 30 60C46.568 60 60 46.5686 60 30C60 13.4314 46.568 0 30 0ZM45.2176 33.2446C46.6159 34.6103 48.0951 35.8957 49.3504 37.4026C49.9065 38.0692 50.4307 38.7585 50.8297 39.5337C51.3993 40.6392 50.8849 41.8515 49.8954 41.9171L43.7494 41.9159C42.162 42.0473 40.8988 41.4071 39.8339 40.3218C38.9837 39.457 38.195 38.5332 37.3762 37.6389C37.0416 37.2718 36.6893 36.9262 36.2695 36.6543C35.4316 36.1093 34.7036 36.2762 34.2236 37.1515C33.7344 38.0421 33.6227 39.0292 33.5761 40.0205C33.5092 41.4697 33.0721 41.8484 31.618 41.9165C28.5109 42.062 25.5628 41.5906 22.8227 40.0241C20.4055 38.6425 18.5346 36.6924 16.9043 34.4845C13.7297 30.1805 11.2984 25.4566 9.11386 20.597C8.6222 19.5026 8.98189 18.917 10.1893 18.8943C12.1952 18.8557 14.2011 18.8606 16.2071 18.8925C17.0234 18.9054 17.5636 19.3725 17.8772 20.1428C18.9612 22.8098 20.2901 25.3473 21.9554 27.7007C22.3992 28.3274 22.8522 28.9522 23.4973 29.3948C24.2093 29.8834 24.7519 29.7219 25.0877 28.9271C25.3025 28.4219 25.3952 27.8817 25.4418 27.3404C25.6014 25.486 25.6205 23.6323 25.3442 21.7854C25.1724 20.6296 24.5224 19.8832 23.3702 19.6647C22.7834 19.5536 22.8694 19.3363 23.1548 19.0011C23.6501 18.4217 24.1142 18.0632 25.0416 18.0632L31.9857 18.062C33.0801 18.2768 33.3256 18.7679 33.4742 19.8703L33.4803 27.5871C33.4674 28.0137 33.6945 29.2782 34.4606 29.5574C35.0744 29.76 35.4795 29.2677 35.8465 28.8792C37.5118 27.112 38.6983 25.0263 39.7608 22.8675C40.2298 21.9155 40.6343 20.9303 41.0271 19.9433C41.3193 19.2135 41.7735 18.8544 42.5972 18.8667L49.2841 18.8747C49.4811 18.8747 49.6812 18.8765 49.8764 18.9103C51.0034 19.103 51.3121 19.5879 50.9635 20.6873C50.4147 22.4145 49.3485 23.8533 48.3063 25.2958C47.1892 26.8401 45.9977 28.3304 44.8917 29.8815C43.8752 31.2994 43.9556 32.0133 45.2176 33.2446Z" fill="#666666"></path>

          </svg>

        </a>
      </div>
    </div>
    <di v v class="footer__request">
      <form class="footer__form" id="form" method="POST">
        <label class="footer__label">Оставить заявку</label>
        <input aria-label="Введите Фамилию,имя и отчество" required type="text" name='user' class="footer__input" placeholder="Фамилия,имя и отчество*">
        <input aria-label="Введите адрес электронной почты" required type="email" name='email' class="footer__input" placeholder="Email*">
        <textarea aria-label="Введите сообщение" required name='message' class="footer__input footer__textarea" cols="30" rows="3" placeholder="Сообщение"></textarea>
        <div class="footer__send-data">
          <button class="btn footer__btn" type="submit">
            Oтправить данные
          </button>
          <label class="footer__agreement-label" for="agreement">
            <input type="checkbox" required name="agreement" id="agreement">
            Согласен на обработку данных
          </label>
        </div>
      </form>
      <a href="#" class="logo footer__logo footer__logo_display-768">
        <img class="footer__logo-img" src="img/logo-footer.svg" alt="logotype Euclid">
      </a>
      <div class="footer__social footer__social_display-768">
        <a href="https://ok.ru" target="_blank" class="footer__social-link"><svg width="60" height="60" viewbox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M25.7054 19.9812C25.7054 22.4546 27.7105 24.4598 30.1838 24.4598C32.6572 24.4598 34.6623 22.4546 34.6623 19.9812C34.6623 17.5079 32.6572 15.5028 30.1838 15.5028C27.7105 15.5028 25.7054 17.5079 25.7054 19.9812Z" fill="#666666"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M30 60C46.5686 60 60 46.5685 60 30C60 13.4315 46.5686 0 30 0C13.4314 0 0 13.4315 0 30C0 46.5685 13.4314 60 30 60ZM19.35 19.9811C19.35 13.9978 24.2004 9.14729 30.1838 9.14729C36.1673 9.14729 41.0176 13.9978 41.0176 19.9811C41.0176 25.9645 36.1673 30.8154 30.1838 30.8154C24.2004 30.8154 19.35 25.9645 19.35 19.9811ZM41.0823 36.3881C40.9448 36.4983 38.3457 38.5522 34.0085 39.4358L40.5554 45.9243C41.7067 47.0738 41.7081 48.9389 40.5586 50.0902C39.4091 51.2414 37.5444 51.2432 36.3927 50.0935L30.0368 43.904L24.2639 50.0536C23.6859 50.6532 22.9149 50.9547 22.1431 50.9547C21.407 50.9547 20.6703 50.6808 20.0986 50.1296C18.9274 49.0003 18.8935 47.1355 20.0228 45.9643L26.2369 39.4701C21.7782 38.6073 19.0718 36.4998 18.9324 36.3881C17.6633 35.3702 17.4594 33.5163 18.4772 32.247C19.4949 30.9778 21.3487 30.7739 22.6182 31.7916C22.645 31.8133 25.4756 33.9398 30.0366 33.9429C34.5977 33.9398 37.3698 31.8133 37.3966 31.7916C38.666 30.7739 40.5198 30.9778 41.5375 32.247C42.5553 33.5163 42.3515 35.3702 41.0823 36.3881Z" fill="#666666"></path>
          </svg>
        </a>
        <a href="https://vk.com" target="_blank" class="footer__social-link"><svg width="60" height="60" viewbox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M30 0C13.432 0 0 13.4314 0 30C0 46.5686 13.432 60 30 60C46.568 60 60 46.5686 60 30C60 13.4314 46.568 0 30 0ZM45.2176 33.2446C46.6159 34.6103 48.0951 35.8957 49.3504 37.4026C49.9065 38.0692 50.4307 38.7585 50.8297 39.5337C51.3993 40.6392 50.8849 41.8515 49.8954 41.9171L43.7494 41.9159C42.162 42.0473 40.8988 41.4071 39.8339 40.3218C38.9837 39.457 38.195 38.5332 37.3762 37.6389C37.0416 37.2718 36.6893 36.9262 36.2695 36.6543C35.4316 36.1093 34.7036 36.2762 34.2236 37.1515C33.7344 38.0421 33.6227 39.0292 33.5761 40.0205C33.5092 41.4697 33.0721 41.8484 31.618 41.9165C28.5109 42.062 25.5628 41.5906 22.8227 40.0241C20.4055 38.6425 18.5346 36.6924 16.9043 34.4845C13.7297 30.1805 11.2984 25.4566 9.11386 20.597C8.6222 19.5026 8.98189 18.917 10.1893 18.8943C12.1952 18.8557 14.2011 18.8606 16.2071 18.8925C17.0234 18.9054 17.5636 19.3725 17.8772 20.1428C18.9612 22.8098 20.2901 25.3473 21.9554 27.7007C22.3992 28.3274 22.8522 28.9522 23.4973 29.3948C24.2093 29.8834 24.7519 29.7219 25.0877 28.9271C25.3025 28.4219 25.3952 27.8817 25.4418 27.3404C25.6014 25.486 25.6205 23.6323 25.3442 21.7854C25.1724 20.6296 24.5224 19.8832 23.3702 19.6647C22.7834 19.5536 22.8694 19.3363 23.1548 19.0011C23.6501 18.4217 24.1142 18.0632 25.0416 18.0632L31.9857 18.062C33.0801 18.2768 33.3256 18.7679 33.4742 19.8703L33.4803 27.5871C33.4674 28.0137 33.6945 29.2782 34.4606 29.5574C35.0744 29.76 35.4795 29.2677 35.8465 28.8792C37.5118 27.112 38.6983 25.0263 39.7608 22.8675C40.2298 21.9155 40.6343 20.9303 41.0271 19.9433C41.3193 19.2135 41.7735 18.8544 42.5972 18.8667L49.2841 18.8747C49.4811 18.8747 49.6812 18.8765 49.8764 18.9103C51.0034 19.103 51.3121 19.5879 50.9635 20.6873C50.4147 22.4145 49.3485 23.8533 48.3063 25.2958C47.1892 26.8401 45.9977 28.3304 44.8917 29.8815C43.8752 31.2994 43.9556 32.0133 45.2176 33.2446Z" fill="#666666"></path>
          </svg>
        </a>
      </div>
      </div>

      <p class="paragraph footer__paragraph">
        Высокий уровень вовлечения представителей целевой аудитории является
        чётким доказательством простого факта: разбавленное изрядной долей
        эмпатии, рациональное мышление позволяет оценить значение модели
        развития. Таким образом, консультация с широким активом
        обеспечивает широкому кругу (специалистов) участие в формировании
        стандартных подходов.
      </p>
  </footer>
  <script src="js/tab.js"></script>
  <script src="js/accordion.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script src="js/script-classes.js"></script>
  <script async src="js/index.js"></script>
</body>

</html>
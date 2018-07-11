<?php
require_once './mix.php';
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="<?php echo mix('assets/css/app.css') ?>">

    <title>Mossebo.ICO</title>
</head>
<body>
<div id="app">
    <a id="top"></a>
    <header class="header">
        <div class="fixed-nav" id="js-fixed-nav">
            <div class="container">
                <div class="row align-items-center">
                    <div class="mobile-nav-item">
                        <a href="#" class="mobile-nav js-mobile-nav">
                            <svg class="symbol-icon symbol-menu">
                                <use xlink:href="assets/images/icons.svg#symbol-menu"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="logo-item">
                        <a href="#top" class="logo js-smooth-scroll">
                            <svg class="symbol-icon symbol-logo">
                                <use xlink:href="assets/images/icons.svg#symbol-logo"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="menu-item">
                        <ul class="nav">
                            <li class="nav__item">
                                <a href="#whitepaper" class="js-smooth-scroll">Whitepaper</a>
                            </li>
                            <li class="nav__item">
                                <a href="#roadmap" class="js-smooth-scroll">RoadMap</a>
                            </li>
                            <li class="nav__item">
                                <a href="https://mossebo.market/" target="_blank">Mossebo.Market</a>
                            </li>
                        </ul>
                    </div>
                    <div class="link-item">
                        <a href="#top" class="button button-primary js-smooth-scroll">Стать инвестором</a>
                    </div>
                    <div class="lang-item">
                        <a href="" class="lang-item__flag symbol-flag-ru"></a>
                        <a href="" class="lang-item__flag symbol-flag-en"></a>
                        <a href="" class="lang-item__flag symbol-flag-jp"></a>
                        <a href="" class="lang-item__flag symbol-flag-zh"></a>
                        <a href="" class="lang-item__flag symbol-flag-es"></a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="utp-main">
        <div class="container">
            <div class="circle-primary-box">
                <div class="circle-primary circle-primary__1">
                    <div class="circle-primary circle-primary__2">
                        <div class="circle-primary circle-primary__3"></div>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-2">
                    <div class="utp-main__content">
                        <div class="h1">Криптомаркетплейс для b2b и b2c</div>
                        <p>Международная компания Mossebo расширяет проект mossebo.market для крипторынка</p>
                        <strong>Принять участие в проекте</strong>
                    </div>
                    <div class="subscribe">
                        <form class="subscribe__form">
                            <input
                                type="text"
                                placeholder="Введите ваш E-mail"
                                class="subscribe__input"
                            >
                            <button class="subscribe__button">
                                <svg class="symbol-icon symbol-arrow-right">
                                    <use xlink:href="assets/images/icons.svg#symbol-arrow-right"></use>
                                </svg>
                            </button>
                        </form>
                        <a href="http://t.me/mosseboio_bot" target="_blank" class="subscribe__icon">
                            <svg class="symbol-icon direct-tg">
                                <use xlink:href="assets/images/icons.svg#direct-tg"></use>
                            </svg>
                        </a>
                        <a href="#" target="_blank" class="subscribe__icon">
                            <svg class="symbol-icon direct-fb">
                                <use xlink:href="assets/images/icons.svg#direct-fb"></use>
                            </svg>
                        </a>
                        <a href="#" target="_blank" class="subscribe__icon">
                            <svg class="symbol-icon direct-wechat">
                                <use xlink:href="assets/images/icons.svg#direct-wechat"></use>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-2">
                    <youtube
                        video-id="SuSW65jBqBQ"
                        video-thumb="assets/images/video_prewiev.png"
                    >
                    </youtube>
                </div>
            </div>
        </div>
    </div>

    <div class="container we-best">
        <div class="row align-items-center">
            <div class="col-3">
                <div class="we-best__item">
                    <div class="we-best__head">
                        <div class="we-best__icon"
                             style="background-image: url(assets/images/we-best/1.png);"
                        >
                        </div>
                        <div class="we-best__subtitle">Защита авторских прав потребителей</div>
                    </div>
                    <div class="we-best__body">
                        Блокчейн платформа автоматически следит за лицензионными выплатами авторам
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="we-best__item">
                    <div class="we-best__head">
                        <div class="we-best__icon" style="background-image: url(assets/images/we-best/2.png);"
                        >
                        </div>
                        <div class="we-best__subtitle">B2B и B2C крипторасчеты</div>
                    </div>
                    <div class="we-best__body">
                        Поставщики mossebo.market оплачивают контракты друг с другом
                        на единой криптоплатформе
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="we-best__item">
                    <div class="we-best__head">
                        <div class="we-best__icon" style="background-image: url(assets/images/we-best/3.png);"
                        >
                        </div>
                        <div class="we-best__subtitle">Инвестиции в токены производителей</div>
                    </div>
                    <div class="we-best__body">
                        Пользователи платформы могут инвестировать в производителей реального сектора экономики
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container about">
        <div class="about__title">
            <div class="h2">Лидер в сфере дизайна интерьера и крупнейший маркетплейс товаров для дома</div>
        </div>
        <div class="row align-items-center">
            <div class="col-2 about__slider">
                <div class="slider-fade">
                    <div class="slider-fade__image"
                         style="background-image: url(assets/images/photos/6.jpg);">
                    </div>
                    <div class="slider-fade__image"
                         style="background-image: url(assets/images/photos/2.jpg);">
                    </div>
                    <div class="slider-fade__image"
                         style="background-image: url(assets/images/photos/1.jpg);">
                    </div>
                    <div class="slider-fade__image"
                         style="background-image: url(assets/images/photos/3.jpg);">
                    </div>
                    <div class="slider-fade__image"
                         style="background-image: url(assets/images/photos/4.jpg);">
                    </div>
                    <div class="slider-fade__image"
                         style="background-image: url(assets/images/photos/5.jpg);">
                    </div>
                    <div class="slider-fade__image"
                         style="background-image: url(assets/images/photos/7.jpg);">
                    </div>
                    <div class="slider-fade__image"
                         style="background-image: url(assets/images/photos/8.jpg);">
                    </div>
                    <div class="slider-fade__image"
                         style="background-image: url(assets/images/photos/9.jpg);">
                    </div>
                    <div class="slider-fade__image"
                         style="background-image: url(assets/images/photos/10.jpg);">
                    </div>
                </div>
            </div>
            <div class="col-2 about__description">
                <div class="h3">
                    Mossebo – лидер рынка дизайна интерьера
                    с 40 студиями в 7 странах
                </div>
                <p>Дизайнеры Mossebo создают сотни проектов интерьера в месяц
                    и комплектует их мебелью и предметами декора через площадку mossebo.market.</p>
                <p>Mossebo собрала в единую базу 11 000 производителей мебели
                    и декора со всего мира.</p>
            </div>
        </div>
        <div class="d-p-4">
            <div class="h2">Лидер в сфере дизайна интерьера и крупнейший маркетплейс товаров для дома</div>
            <p>Mossebo – лидер рынка дизайна интерьера
                с 40 студиями в 7 странах</p>
            <p>Дизайнеры Mossebo создают сотни проектов интерьера в месяц
                и комплектует их мебелью и предметами декора через площадку mossebo.market.</p>
            <p>Mossebo собрала в единую базу 11 000 производителей мебели
                и декора со всего мира.</p>
        </div>
        <a id="whitepaper"></a>
    </div>

    <div class="container whitepaper">
        <div class="whitepaper__title">
            <div class="h2">Whitepaper</div>
        </div>
        <div class="download">
            <a href="#" class="download__item">
                <span class="download__button">
                        <svg class="symbol-icon symbol-arrow-down">
                            <use xlink:href="assets/images/icons.svg#symbol-arrow-down"></use>
                        </svg>
                </span>
                English
            </a>
            <a href="#" class="download__item">
                <span class="download__button">
                        <svg class="symbol-icon symbol-arrow-down">
                            <use xlink:href="assets/images/icons.svg#symbol-arrow-down"></use>
                        </svg>
                </span>
                Español
            </a>
            <a href="#" class="download__item">
                <span class="download__button">
                        <svg class="symbol-icon symbol-arrow-down">
                            <use xlink:href="assets/images/icons.svg#symbol-arrow-down"></use>
                        </svg>
                </span>
                Русский
            </a>
            <a href="#" class="download__item">
                <span class="download__button">
                        <svg class="symbol-icon symbol-arrow-down">
                            <use xlink:href="assets/images/icons.svg#symbol-arrow-down"></use>
                        </svg>
                </span>
                中国
            </a>
            <a href="#" class="download__item">
                <span class="download__button">
                        <svg class="symbol-icon symbol-arrow-down">
                            <use xlink:href="assets/images/icons.svg#symbol-arrow-down"></use>
                        </svg>
                </span>
                日本
            </a>
        </div>
        <div class="row">
            <div class="col-2 faq">
                <accordion-list></accordion-list>
            </div>
            <div class="col-2">
                <youtube
                    video-id="SuSW65jBqBQ"
                    video-thumb="assets/images/video-whitepaper.png"
                >
                </youtube>
            </div>
        </div>
    </div>


    <div class="slider">
        <div class="container">
            <sticky-slider></sticky-slider>
        </div>
    </div>


    <div class="target">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-2">
                    <div class="circle-third-box circle-third-left">
                        <div class="circle-item circle-item-1">
                            <div class="circle-item__icon">
                                <svg class="symbol-icon symbol-target-1">
                                    <use xlink:href="assets/images/icons.svg#symbol-target-1"></use>
                                </svg>
                            </div>
                            <div class="circle-item__text">Скидки</div>
                        </div>
                        <div class="circle-item circle-item-2">
                            <div class="circle-item__icon">
                                <svg class="symbol-icon symbol-target-2">
                                    <use xlink:href="assets/images/icons.svg#symbol-target-2"></use>
                                </svg>
                            </div>
                            <div class="circle-item__text">Доставка</div>
                        </div>
                        <div class="circle-item circle-item-3">
                            <div class="circle-item__icon">
                                <svg class="symbol-icon symbol-target-3">
                                    <use xlink:href="assets/images/icons.svg#symbol-target-3"></use>
                                </svg>
                            </div>
                            <div class="circle-item__text">Безопасная сделка</div>
                        </div>
                        <div class="circle-third circle-third__1">
                            <div class="circle-third circle-third__2">
                                <div class="circle-third circle-third__3"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="h2">Mossebo.Market упростит покупку товаров для дома</div>
                    <p>Оплата любой криптовалютой и доставка товаров по всему миру.</p>
                    <p>Скидка каждому клиенту при оплате криптовалютой от 3% до 70%.</p>
                    <p>Блокчейн технология гарантирует доступную цену и защищает ее от махинаций со стороны
                        продавцов.</p>
                </div>
                <div class="col-2">
                    <div class="h2">Mossebo.Market поможет производителям товаров для дома</div>
                    <p>Производители, поставщики материалов, логистические службы оплачивают счета друг друга на единой
                        b2b криптоплатформе.</p>
                    <p>Доступ к открытой статистике по спросу на товар в разных регионах мира.</p>
                    <p>Возможность сбора инвестиций для роста компании напрямую
                        от клиентов.</p>
                </div>
                <div class="col-2">
                    <div class="circle-third-box circle-third-right">
                        <div class="circle-item circle-item-1">
                            <div class="circle-item__icon">
                                <svg class="symbol-icon symbol-target-4">
                                    <use xlink:href="assets/images/icons.svg#symbol-target-4"></use>
                                </svg>
                            </div>
                            <div class="circle-item__text">Мгновенный платеж</div>
                        </div>
                        <div class="circle-item circle-item-2">
                            <div class="circle-item__icon">
                                <svg class="symbol-icon symbol-target-5">
                                    <use xlink:href="assets/images/icons.svg#symbol-target-5"></use>
                                </svg>
                            </div>
                            <div class="circle-item__text">Безопасность данных</div>
                        </div>
                        <div class="circle-item circle-item-3">
                            <div class="circle-item__icon">
                                <svg class="symbol-icon symbol-target-6">
                                    <use xlink:href="assets/images/icons.svg#symbol-target-6"></use>
                                </svg>
                            </div>
                            <div class="circle-item__text">В любой стране</div>
                        </div>
                        <div class="circle-third circle-third__1">
                            <div class="circle-third circle-third__2">
                                <div class="circle-third circle-third__3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="start-sell">
        <div class="container">
            <div class="row align-items-center">
                <div class="start-sell__body">
                    <div class="h2">Закрытая продажа токенов МSB уже началась</div>
                    <div class="h-sub">Особые условия для первых инвесторов, гарантия выкупа токенов, прямое общение с
                        командой проекта
                    </div>
                    <strong>Собранные средства</strong>

                    <progress-bar
                        :current="100"
                        :max="750000"
                    >
                    </progress-bar>

                    <a href="" class="button button-primary">Подробнее</a>
                </div>
                <div class="start-sell__logo">
                    <img src="assets/images/msb_logo.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="target">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-2">
                    <div class="circle-third-box circle-third-left">
                        <div class="circle-item circle-item-1">
                            <div class="circle-item__icon">
                                <svg class="symbol-icon symbol-target-7">
                                    <use xlink:href="assets/images/icons.svg#symbol-target-7"></use>
                                </svg>
                            </div>
                            <div class="circle-item__text">Передача прав</div>
                        </div>
                        <div class="circle-item circle-item-2">
                            <div class="circle-item__icon">
                                <svg class="symbol-icon symbol-target-8">
                                    <use xlink:href="assets/images/icons.svg#symbol-target-8"></use>
                                </svg>
                            </div>
                            <div class="circle-item__text">Поиск идей</div>
                        </div>
                        <div class="circle-item circle-item-3">
                            <div class="circle-item__icon">
                                <svg class="symbol-icon symbol-target-9">
                                    <use xlink:href="assets/images/icons.svg#symbol-target-9"></use>
                                </svg>
                            </div>
                            <div class="circle-item__text">Лицензированные выплаты</div>
                        </div>
                        <div class="circle-third circle-third__1">
                            <div class="circle-third circle-third__2">
                                <div class="circle-third circle-third__3"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="h2">Mossebo.Market защитит авторские права всех дизайнеров</div>
                    <p>Удобная площадка для продажи идей и моделей. </p>
                    <p>Передавайте полное или частичное права производителям.</p>
                    <p>Получайте лицензионные отчисления с кажой продажи.</p>
                </div>
                <div class="col-2">
                    <div class="h2">Mossebo.Market защищает окружающую среду и развивает малый и средний бизнес</div>
                    <p>Статистика и данные от блокчейн платформы позволят экономить ресурсы при производстве и
                        транспортировки товаров.</p>
                    <p>Честные компании получают доступ к бесплатной рекламе и инвестициям для роста бизнеса.</p>
                    <p>Стремление к доступным ценам делает обустройство дома доступным всем. </p>
                </div>
                <div class="col-2">
                    <div class="circle-third-box circle-third-right">
                        <div class="circle-item circle-item-1">
                            <div class="circle-item__icon">
                                <svg class="symbol-icon symbol-target-10">
                                    <use xlink:href="assets/images/icons.svg#symbol-target-10"></use>
                                </svg>
                            </div>
                            <div class="circle-item__text">Инвестиции в производителей</div>
                        </div>
                        <div class="circle-item circle-item-2">
                            <div class="circle-item__icon">
                                <svg class="symbol-icon symbol-target-11">
                                    <use xlink:href="assets/images/icons.svg#symbol-target-11"></use>
                                </svg>
                            </div>
                            <div class="circle-item__text">Сохранение ресурсов</div>
                        </div>
                        <div class="circle-item circle-item-3">
                            <div class="circle-item__icon">
                                <svg class="symbol-icon symbol-target-12">
                                    <use xlink:href="assets/images/icons.svg#symbol-target-12"></use>
                                </svg>
                            </div>
                            <div class="circle-item__text">Прозрачная цена</div>
                        </div>
                        <div class="circle-third circle-third__1">
                            <div class="circle-third circle-third__2">
                                <div class="circle-third circle-third__3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="economy">
        <div class="container">
            <div class="h2">Основа роста Mossebo.Market</div>
            <div class="h-sub">Общий рост мировой электронной коммерции</div>

            <div class="row align-items-center">
                <div class="col-2">
                    <chartjs-line
                        :labels="economyLabels"
                        :datasets="economyData"
                        :option="economyOption"
                    >
                    </chartjs-line>
                </div>
                <div class="col-2">
                    <div class="circle-secondary-box">
                        <div class="circle-secondary circle-secondary__1">
                            <div class="circle-secondary circle-secondary__2">
                                <div class="circle-secondary circle-secondary__3"></div>
                            </div>
                        </div>
                    </div>
                    <ul class="economy__list">
                        <li><span></span> Азиатско-Тихоокеанский регион</li>
                        <li><span></span> Северная Америка</li>
                        <li><span></span> Западная Европа</li>
                        <li><span></span> Латинская Америка</li>
                        <li><span></span> Африка и Ближний Восток</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="currency-division">
        <div class="container">
            <div class="h2">Порядок размещения токенов</div>
            <div class="h-sub">В первом раунде размещения эмитируются 20% токенов МSB.
                80% зарезервированы для выхода платформы в новые регионы.
            </div>
            <div class="row align-items-center">
                <div class="col-2">
                    <img src="assets/images/currency.png" alt="" class="currency-division__diagram">
                </div>
                <div class="col-2">
                    <div class="circle-secondary-box">
                        <div class="circle-secondary circle-secondary__1">
                            <div class="circle-secondary circle-secondary__2">
                                <div class="circle-secondary circle-secondary__3"></div>
                            </div>
                        </div>
                    </div>
                    <ul class="currency-division__list">
                        <li><span>50.00 %</span> ICO</li>
                        <li><span>25.00 %</span> Команда</li>
                        <li><span>10.00 %</span> Бонусы для инвесторов</li>
                        <li><span>8.25 %</span> Советники</li>
                        <li><span>3.75 %</span> Pre-Sale</li>
                        <li><span>2.50 %</span> Баунти</li>
                        <li><span>0.50 %</span> Private Pre-Sale</li>
                    </ul>
                </div>
            </div>
        </div>
        <a id="roadmap"></a>
    </div>

    <div class="roadmap">
        <div class="container">
            <div class="h2">Roadmap</div>
            <road-map></road-map>
        </div>
    </div>

    <div class="work-timeline">
        <div class="container">
            <div class="h2">Мы не стартуем с нуля</div>
            <div class="h-sub">Платформа mossebo.market уже функционирует и органически растет</div>

            <div class="row status-1">
                <div class="col-4">
                    <div class="work-timeline__item">
                        <div class="work-timeline__name">
                            MVP Интернет-маркетплейс
                            с полным функционалом
                            для пользователя
                        </div>
                        <div class="work-timeline__icon">
                            Сделано
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="work-timeline__item">
                        <div class="work-timeline__name">
                            Скидочная программа
                        </div>
                        <div class="work-timeline__icon">
                            Сделано
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="work-timeline__item">
                        <div class="work-timeline__name">
                            Платежная система
                        </div>
                        <div class="work-timeline__icon">
                            Сделано
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="work-timeline__item">
                        <div class="work-timeline__name">
                            Личные кабинеты
                            пользователей
                        </div>
                        <div class="work-timeline__icon">
                            Сделано
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="work-timeline__item">
                        <div class="work-timeline__name">
                            Авторизация из
                            социальных сетей
                        </div>
                        <div class="work-timeline__icon">
                            Сделано
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="work-timeline__item">
                        <div class="work-timeline__name">
                            Инфраструктура с учетом
                            роста платформы
                        </div>
                        <div class="work-timeline__icon">
                            Сделано
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="work-timeline__item">
                        <div class="work-timeline__name">
                            Административная панель
                        </div>
                        <div class="work-timeline__icon">
                            Сделано
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="work-timeline__item">
                        <div class="work-timeline__name">
                            Дизайн модулей для
                            внедрения криптоплатежей
                        </div>
                        <div class="work-timeline__icon">
                            Сделано
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    <div class="row status-2">
                        <div class="col-2">
                            <div class="work-timeline__item">
                                <div class="work-timeline__name">
                                    Оплата криптовалютой
                                </div>
                                <div class="work-timeline__icon">
                                    В процессе
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="work-timeline__item">
                                <div class="work-timeline__name">
                                    MVP Система статистики
                                    реального спроса
                                </div>
                                <div class="work-timeline__icon">
                                    В процессе
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="work-timeline__item">
                                <div class="work-timeline__name">
                                    Автоматическая выгрузка товаров для новых компаний
                                </div>
                                <div class="work-timeline__icon">
                                    В процессе
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="work-timeline__item">
                                <div class="work-timeline__name">
                                    Безопасность платежей 2.0
                                </div>
                                <div class="work-timeline__icon">
                                    В процессе
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="work-timeline__item">
                                <div class="work-timeline__name">
                                    Бонусная система при
                                    оплате криптовалютой
                                </div>
                                <div class="work-timeline__icon">
                                    В процессе
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="row status-3">
                        <div class="col-2">
                            <div class="work-timeline__item">
                                <div class="work-timeline__name">
                                    Криптозащита авторских прав
                                </div>
                                <div class="work-timeline__icon">
                                    В плане
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="work-timeline__item">
                                <div class="work-timeline__name">
                                    Партнерская платформа
                                    и рефереальная программа
                                </div>
                                <div class="work-timeline__icon">
                                    В плане
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="work-timeline__item">
                                <div class="work-timeline__name">
                                    Платформа b2b платежей
                                </div>
                                <div class="work-timeline__icon">
                                    В плане
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="work-timeline__item">
                                <div class="work-timeline__name">
                                    MVP Глубокая безопасная
                                    сделка
                                </div>
                                <div class="work-timeline__icon">
                                    В плане
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="work-timeline__item">
                                <div class="work-timeline__name">
                                    MVP Платформа инвестирования
                                    в производителей
                                </div>
                                <div class="work-timeline__icon">
                                    В плане
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container team-members">
        <div class="h2">Основатели Mossebo</div>

        <div class="row">
            <div class="col-3">
                <div class="team-members__item">
                    <div class="team-members__avatar avatar-owner"
                         style="background-image: url(assets/images/members/1.jpg);"
                    >
                    </div>
                    <div class="team-members__socials">
                        <a href="#" class="team-members__link">
                            <svg class="symbol-icon social-embed-fb">
                                <use xlink:href="assets/images/icons.svg#social-embed-fb"></use>
                            </svg>
                        </a>
                        <a href="#" class="team-members__link">
                            <svg class="symbol-icon social-embed-in">
                                <use xlink:href="assets/images/icons.svg#social-embed-in"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="team-members__name">
                        Владислав Туржанский <br> сооснователь компании Mossebo
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="team-members__item">
                    <div class="team-members__avatar avatar-owner"
                         style="background-image: url(assets/images/members/2.jpg);"
                    >
                    </div>
                    <div class="team-members__socials">
                        <a href="#" class="team-members__link">
                            <svg class="symbol-icon social-embed-fb">
                                <use xlink:href="assets/images/icons.svg#social-embed-fb"></use>
                            </svg>
                        </a>
                        <a href="#" class="team-members__link">
                            <svg class="symbol-icon social-embed-in">
                                <use xlink:href="assets/images/icons.svg#social-embed-in"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="team-members__name">
                        Юрий Еремин <br> сооснователь компании Mossebo
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="team-members__item">
                    <div class="team-members__avatar avatar-owner"
                         style="background-image: url(assets/images/members/3.jpg);"
                    >
                    </div>
                    <div class="team-members__socials">
                        <a href="#" class="team-members__link">
                            <svg class="symbol-icon social-embed-fb">
                                <use xlink:href="assets/images/icons.svg#social-embed-fb"></use>
                            </svg>
                        </a>
                        <a href="#" class="team-members__link">
                            <svg class="symbol-icon social-embed-in">
                                <use xlink:href="assets/images/icons.svg#social-embed-in"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="team-members__name">
                        Марк Еремин <br> сооснователь компании Mossebo
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container team-members" style="display: none;">
        <div class="h2">Аdvisers</div>

        <div class="row">
            <div class="col-3">
                <div class="team-members__item">
                    <div class="team-members__avatar avatar-advisers"
                         style="background-image: url();"
                    >
                    </div>
                    <div class="team-members__socials">
                        <a href="#" class="team-members__link">
                            <svg class="symbol-icon social-embed-fb">
                                <use xlink:href="assets/images/icons.svg#social-embed-fb"></use>
                            </svg>
                        </a>
                        <a href="#" class="team-members__link">
                            <svg class="symbol-icon social-embed-in">
                                <use xlink:href="assets/images/icons.svg#social-embed-in"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="team-members__name">
                        Владислав Туржанский <br> сооснователь компании Mossebo
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="team-members__item">
                    <div class="team-members__avatar avatar-advisers"
                         style="background-image: url();"
                    >
                    </div>
                    <div class="team-members__socials">
                        <a href="#" class="team-members__link">
                            <svg class="symbol-icon social-embed-fb">
                                <use xlink:href="assets/images/icons.svg#social-embed-fb"></use>
                            </svg>
                        </a>
                        <a href="#" class="team-members__link">
                            <svg class="symbol-icon social-embed-in">
                                <use xlink:href="assets/images/icons.svg#social-embed-in"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="team-members__name">
                        Юрий Еремин <br> сооснователь компании Mossebo
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="team-members__item">
                    <div class="team-members__avatar avatar-advisers"
                         style="background-image: url();"
                    >
                    </div>
                    <div class="team-members__socials">
                        <a href="#" class="team-members__link">
                            <svg class="symbol-icon social-embed-fb">
                                <use xlink:href="assets/images/icons.svg#social-embed-fb"></use>
                            </svg>
                        </a>
                        <a href="#" class="team-members__link">
                            <svg class="symbol-icon social-embed-in">
                                <use xlink:href="assets/images/icons.svg#social-embed-in"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="team-members__name">
                        Марк Еремин <br> сооснователь компании Mossebo
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container team-members">
        <div class="h2">Команда проекта</div>

        <div class="row">
            <div class="col-3">
                <div class="team-members__item">
                    <div class="team-members__avatar avatar-team"
                         style="background-image: url();"
                    >
                    </div>
                    <div class="team-members__socials">
                        <a href="#" class="team-members__link">
                            <svg class="symbol-icon social-embed-fb">
                                <use xlink:href="assets/images/icons.svg#social-embed-fb"></use>
                            </svg>
                        </a>
                        <a href="#" class="team-members__link">
                            <svg class="symbol-icon social-embed-in">
                                <use xlink:href="assets/images/icons.svg#social-embed-in"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="team-members__name">
                        Владислав Туржанский <br> сооснователь компании Mossebo
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="team-members__item">
                    <div class="team-members__avatar avatar-team"
                         style="background-image: url();"
                    >
                    </div>
                    <div class="team-members__socials">
                        <a href="#" class="team-members__link">
                            <svg class="symbol-icon social-embed-fb">
                                <use xlink:href="assets/images/icons.svg#social-embed-fb"></use>
                            </svg>
                        </a>
                        <a href="#" class="team-members__link">
                            <svg class="symbol-icon social-embed-in">
                                <use xlink:href="assets/images/icons.svg#social-embed-in"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="team-members__name">
                        Юрий Еремин <br> сооснователь компании Mossebo
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="team-members__item">
                    <div class="team-members__avatar avatar-team"
                         style="background-image: url();"
                    >
                    </div>
                    <div class="team-members__socials">
                        <a href="#" class="team-members__link">
                            <svg class="symbol-icon social-embed-fb">
                                <use xlink:href="assets/images/icons.svg#social-embed-fb"></use>
                            </svg>
                        </a>
                        <a href="#" class="team-members__link">
                            <svg class="symbol-icon social-embed-in">
                                <use xlink:href="assets/images/icons.svg#social-embed-in"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="team-members__name">
                        Марк Еремин <br> сооснователь компании Mossebo
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="team-members__item">
                    <div class="team-members__avatar avatar-team"
                         style="background-image: url();"
                    >
                    </div>
                    <div class="team-members__socials">
                        <a href="#" class="team-members__link">
                            <svg class="symbol-icon social-embed-fb">
                                <use xlink:href="assets/images/icons.svg#social-embed-fb"></use>
                            </svg>
                        </a>
                        <a href="#" class="team-members__link">
                            <svg class="symbol-icon social-embed-in">
                                <use xlink:href="assets/images/icons.svg#social-embed-in"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="team-members__name">
                        Владислав Туржанский <br> сооснователь компании Mossebo
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="team-members__item">
                    <div class="team-members__avatar avatar-team"
                         style="background-image: url();"
                    >
                    </div>
                    <div class="team-members__socials">
                        <a href="#" class="team-members__link">
                            <svg class="symbol-icon social-embed-fb">
                                <use xlink:href="assets/images/icons.svg#social-embed-fb"></use>
                            </svg>
                        </a>
                        <a href="#" class="team-members__link">
                            <svg class="symbol-icon social-embed-in">
                                <use xlink:href="assets/images/icons.svg#social-embed-in"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="team-members__name">
                        Юрий Еремин <br> сооснователь компании Mossebo
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="team-members__item">
                    <div class="team-members__avatar avatar-team"
                         style="background-image: url();"
                    >
                    </div>
                    <div class="team-members__socials">
                        <a href="#" class="team-members__link">
                            <svg class="symbol-icon social-embed-fb">
                                <use xlink:href="assets/images/icons.svg#social-embed-fb"></use>
                            </svg>
                        </a>
                        <a href="#" class="team-members__link">
                            <svg class="symbol-icon social-embed-in">
                                <use xlink:href="assets/images/icons.svg#social-embed-in"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="team-members__name">
                        Марк Еремин <br> сооснователь компании Mossebo
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="team-members__item">
                    <div class="team-members__avatar avatar-team"
                         style="background-image: url();"
                    >
                    </div>
                    <div class="team-members__socials">
                        <a href="#" class="team-members__link">
                            <svg class="symbol-icon social-embed-fb">
                                <use xlink:href="assets/images/icons.svg#social-embed-fb"></use>
                            </svg>
                        </a>
                        <a href="#" class="team-members__link">
                            <svg class="symbol-icon social-embed-in">
                                <use xlink:href="assets/images/icons.svg#social-embed-in"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="team-members__name">
                        Владислав Туржанский <br> сооснователь компании Mossebo
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="team-members__item">
                    <div class="team-members__avatar avatar-team"
                         style="background-image: url();"
                    >
                    </div>
                    <div class="team-members__socials">
                        <a href="#" class="team-members__link">
                            <svg class="symbol-icon social-embed-fb">
                                <use xlink:href="assets/images/icons.svg#social-embed-fb"></use>
                            </svg>
                        </a>
                        <a href="#" class="team-members__link">
                            <svg class="symbol-icon social-embed-in">
                                <use xlink:href="assets/images/icons.svg#social-embed-in"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="team-members__name">
                        Юрий Еремин <br> сооснователь компании Mossebo
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="team-members__item">
                    <div class="team-members__avatar avatar-team"
                         style="background-image: url();"
                    >
                    </div>
                    <div class="team-members__socials">
                        <a href="#" class="team-members__link">
                            <svg class="symbol-icon social-embed-fb">
                                <use xlink:href="assets/images/icons.svg#social-embed-fb"></use>
                            </svg>
                        </a>
                        <a href="#" class="team-members__link">
                            <svg class="symbol-icon social-embed-in">
                                <use xlink:href="assets/images/icons.svg#social-embed-in"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="team-members__name">
                        Марк Еремин <br> сооснователь компании Mossebo
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="media-project">
        <div class="container">
            <div class="h2">Медиа-проекты Mossebo</div>
            <div class="h-sub">Моssebo.Market получает до 15 000 000 человек дополнительного охвата от наших проектов на
                Youtube и Instagram
            </div>
        </div>
        <div id="productionmedia">
            <carousel-3d
                :controls-visible="true"
                :controls-prev-html="'&#10092;'"
                :controls-next-html="'&#10093;'"
                :perspective="35"
                :space="400"
                :display="3"
                :border="0"
                :autoplay="true"
                :autoplay-timeout="6000"
                :autoplay-hover-pause="true"
                width="900px"
                height="800px"
            >
                <slide :index="0">
                    <div class="slide-block"></div>
                    <img src="assets/images/media-1.jpg" class="slide-image">
                </slide>
                <slide :index="1">
                    <div class="slide-block"></div>
                    <img src="assets/images/media-2.jpg" class="slide-image">
                </slide>
                <slide :index="2">
                    <div class="slide-block"></div>
                    <img src="assets/images/media-3.jpg" class="slide-image">
                </slide>
            </carousel-3d>
        </div>
        <div class="channel-link">
            <a href="#" class="button button-primary">Перейти на канал</a>
        </div>
    </div>

    <div class="inst-person">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <img src="assets/images/inst_y.png" alt="">
                    <a href="https://www.instagram.com/yuriereminv/" class="button button-primary">Перейти в профиль</a>
                </div>
                <div class="col-3">
                    <img src="assets/images/inst_v.png" alt="">
                    <a href="https://www.instagram.com/turjanskii/" class="button button-primary">Перейти в профиль</a>
                </div>
                <div class="col-3">
                    <img src="assets/images/inst_m.png" alt="">
                    <a href="https://www.instagram.com/markeremin/" class="button button-primary">Перейти в профиль</a>
                </div>
            </div>
        </div>
    </div>

    <div class="start-sell">
        <div class="container">
            <div class="row align-items-center">
                <div class="start-sell__body">
                    <div class="h2">Закрытая продажа токенов МSB уже началась</div>
                    <div class="h-sub">Самый выгодный курс и гарантия выкупа монет для инвесторов первого этапа</div>
                    <strong>Принять участие в проекте</strong>
                    <div class="subscribe">
                        <form class="subscribe__form">
                            <input
                                type="text"
                                placeholder="Введите ваш E-mail"
                                class="subscribe__input"
                            >
                            <button class="subscribe__button">
                                <svg class="symbol-icon symbol-arrow-right">
                                    <use xlink:href="assets/images/icons.svg#symbol-arrow-right"></use>
                                </svg>
                            </button>
                        </form>
                        <a href="http://t.me/mosseboio_bot" target="_blank" class="subscribe__icon">
                            <svg class="symbol-icon direct-tg">
                                <use xlink:href="assets/images/icons.svg#direct-tg"></use>
                            </svg>
                        </a>
                        <a href="" target="_blank" class="subscribe__icon">
                            <svg class="symbol-icon direct-fb">
                                <use xlink:href="assets/images/icons.svg#direct-fb"></use>
                            </svg>
                        </a>
                        <a href="" target="_blank" class="subscribe__icon">
                            <svg class="symbol-icon direct-wechat">
                                <use xlink:href="assets/images/icons.svg#direct-wechat"></use>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="start-sell__logo">
                    <img src="assets/images/msb_logo.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-4">
                    <a href="#" class="logo">
                        <svg class="symbol-icon symbol-logo">
                            <use xlink:href="assets/images/icons.svg#symbol-logo"></use>
                        </svg>
                    </a>
                    <div class="copy">Copyright © 2018 MOSSEBO</div>
                </div>
                <div class="col-4">
                    <ul class="footer__nav">
                        <li>
                            <a href="#whitepaper" class="js-smooth-scroll">Whitepaper</a>
                        </li>
                        <li>
                            <a href="#roadmap" class="js-smooth-scroll">Roadmap</a>
                        </li>
                        <li>
                            <a href="https://mossebo.market/" target="_blank">Mossebo.Market</a>
                        </li>
                        <li>
                            <a href="https://mossebo.studio/" target="_blank">Mossebo.Studio</a>
                        </li>
                    </ul>
                </div>
                <div class="col-4">
                    <p style="display: none;">Санкт-Петербург Обводного канала наб., 118а, литера Х</p>
                    <p style="display: none;">8 (800) 707-83-47</p>
                    <p>start@mossebo.io</p>
                </div>
                <div class="col-4">
                    <div class="social-links">
                        <a href="https://www.instagram.com/remont.design/" class="social-links__item" target="_blank">
                            <svg class="symbol-icon social-in">
                                <use xlink:href="assets/images/icons.svg#social-in"></use>
                            </svg>
                        </a>
                        <a href="https://vk.com/design_mossebo" class="social-links__item" target="_blank">
                            <svg class="symbol-icon social-vk">
                                <use xlink:href="assets/images/icons.svg#social-vk"></use>
                            </svg>
                        </a>
                        <a href="https://www.facebook.com/mossebodesign/" class="social-links__item" target="_blank">
                            <svg class="symbol-icon social-fb">
                                <use xlink:href="assets/images/icons.svg#social-fb"></use>
                            </svg>
                        </a>
                        <a href="https://www.youtube.com/channel/UCmoIMunKnQwi0ui_G9W0Wmw"
                           class="social-links__item d-none d-sm-inline-block d-md-inline-block d-lg-inline-block d-xl-inline-block"
                           target="_blank">
                            <svg class="symbol-icon social-you">
                                <use xlink:href="assets/images/icons.svg#social-you"></use>
                            </svg>
                        </a>
                    </div>
                    <ul class="footer__nav">
                        <li>
                            <a href="#">Публичная оферта</a>
                        </li>
                        <li>
                            <a href="#">Политика конфиденциальности</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


</div>

<script>
    window.faqList = [
        {
            title: 'Анализ рынка',
            msg: 'Команда проекта собрала и оценила как открытую, так и внутреннюю статистику продаж и методы взаимодействия производителей в сфере дизайна интерьера в 7 странах.',
        },
        {
            title: 'Опыт компании Mossebo',
            msg: 'Мы представили выжимку из 5 лет роста компании Mossebo на конкурентном рынке и  принципы работы нашего холдинга.',
        },
        {
            title: 'План проекта',
            msg: 'Проект рассчитан на бурный рост и экспансию в каждый регион, и все этапы роста смоделированы опытной командой Mossebo.',
        },
        {
            title: 'Технические детали проекта',
            msg: 'Раскрываем вопросы безопасности платежей и инвестирования в проект, а также применение blockchain технологии для разных частей платформы mossebo.market',
        },
        {
            title: 'Правила Private Presale',
            msg: 'Особые правила Private Presale и pre-ICO с гарантиями выкупа токенов у инвесторов.',
        },
    ]
</script>

<script src="<?php echo mix('assets/js/manifest.js') ?>" defer></script>
<script src="<?php echo mix('assets/js/vendor.js') ?>" defer></script>
<script src="<?php echo mix('assets/js/app.js') ?>" defer></script>


</body>
</html>

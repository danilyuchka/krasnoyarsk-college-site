<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Красноярский техникум социальных технологий</title>

    <!-- Добавлен favicon -->
    <link rel="icon" type="image/png" href="logo.png">

    <style>
         /* Общие стили */
         * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
            transition: all 0.3s ease;
        }

        /* Стили для слабовидящих */
        body.accessibility-mode {
            background-color: #000 !important;
            color: #fff !important;
        }

        body.accessibility-mode * {
            background-color: #000 !important;
            color: #fff !important;
            border-color: #fff !important;
        }

        body.accessibility-mode .hero {
            background: #000 !important;
        }

        body.large-font {
            font-size: 1.2rem;
        }

        body.large-font h1 {
            font-size: 2.2rem;
        }

        body.large-font h2 {
            font-size: 2rem;
        }

        body.large-font h3 {
            font-size: 1.8rem;
        }

        body.large-font .nav-link, 
        body.large-font .top-links a,
        body.large-font button {
            font-size: 1.1rem;
        }

        body.letter-spacing {
            letter-spacing: 1.5px;
        }

        body.letter-spacing h1,
        body.letter-spacing h2,
        body.letter-spacing h3 {
            letter-spacing: 2px;
        }

        /* Панель для слабовидящих */
        .accessibility-panel {
            position: fixed;
            top: 50%;
            right: 0;
            transform: translateY(-50%);
            background: #3078a9;
            border-radius: 8px 0 0 8px;
            padding: 15px 10px;
            z-index: 9999;
            box-shadow: -2px 0 10px rgba(0,0,0,0.2);
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .accessibility-btn {
            background: white;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            transition: all 0.3s;
            color: #3078a9;
        }

        .accessibility-btn:hover {
            transform: scale(1.1);
            background: #f0f0f0;
        }

        .accessibility-btn.active {
            background: #2c3e50;
            color: white;
        }

        .accessibility-tooltip {
            position: absolute;
            right: 100%;
            top: 50%;
            transform: translateY(-50%);
            background: #2c3e50;
            color: white;
            padding: 8px 12px;
            border-radius: 4px;
            font-size: 14px;
            white-space: nowrap;
            margin-right: 10px;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s;
        }

        .accessibility-btn:hover .accessibility-tooltip {
            opacity: 1;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        /* Верхняя панель */
        .top-bar {
            background-color: #3078a9;
            color: white;
            padding: 10px 0;
            font-size: 0.9rem;
        }

        .top-bar-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .top-contacts {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .top-links {
            display: flex;
            gap: 15px;
        }

        .top-links a {
            color: white;
            text-decoration: none;
        }

        .top-links a:hover {
            text-decoration: underline;
        }

        /* Шапка */
        header {
            background-color: #fff;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }
        
        .logo-section {
            display: flex;
            align-items: center;
            flex: 1;
            min-width: 600px;
        }
        
        .logo-img {
            height: 70px;
            width: auto;
            margin-right: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        
        .logo h1 {
            font-size: 25px;
            color: #2c3e50;
            line-height: 1.3;
            margin-bottom: 5px;
        }
        
        .logo p {
            font-size: 14px;
            color: #7f8c8d;
            font-style: italic;
        }
        
        nav {
            margin: 0 20px;
        }
        
        nav ul {
            display: flex;
            list-style: none;
            flex-wrap: wrap;
        }
        
        nav li {
            margin: 0 10px;
        }
        
        .nav-link {
            text-decoration: none;
            color: #34495e;
            font-weight: 500;
            padding: 8px 5px;
            transition: color 0.3s;
            white-space: nowrap;
            display: block;
        }
        
        .nav-link:hover {
            color: #3498db;
        }
        
        .auth-buttons {
            display: flex;
            gap: 12px;
        }
        
        .auth-buttons button {
            padding: 8px 18px;
            border-radius: 4px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            border: none;
            font-size: 14px;
        }
        
        #login-btn {
            background-color: transparent;
            color: #3498db;
            border: 1px solid #3498db;
        }
        
        #login-btn:hover {
            background-color: #3498db;
            color: white;
        }
        
        #register-btn {
            background-color: #3498db;
            color: white;
            border: 1px solid #3498db;
        }
        
        #register-btn:hover {
            background-color: #2980b9;
            border-color: #2980b9;
        }

        /* Стили для профиля пользователя */
        #user-profile {
            margin-left: 15px;
        }

        #profile-btn {
            background: none;
            border: 1px solid #3498db;
            color: #3498db;
            padding: 8px 15px;
            border-radius: 4px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s;
            font-weight: 500;
        }

        #profile-btn:hover {
            background-color: #3498db;
            color: white;
        }

        @media (max-width: 768px) {
            #user-profile {
                margin-left: 0;
                margin-top: 10px;
            }
        }

        /* Главный баннер */
        .hero {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('back.jpg') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 102px 0;
            text-align: center;
            margin-bottom: 0;
        }

        .hero h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            animation: fadeIn 1.5s;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Кнопка "Узнать больше" */
        .learn-more-btn {
            background-color: #3498db;
            color: white;
            border: 1px solid #3498db;
            padding: 12px 25px;
            border-radius: 4px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
            font-weight: 500;
        }

        .learn-more-btn:hover {
            background-color: #2980b9;
            border-color: #2980b9;
            transform: translateY(-2px);
        }

        /* Бегущая строка */
        .ticker-news {
            background: linear-gradient(90deg, #1a5276, #2980b9, #1a5276);
            color: white;
            padding: 15px 0;
            overflow: hidden;
            position: relative;
            margin: 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .ticker-wrapper {
            display: flex;
            width: max-content;
            animation: ticker-news 30s linear infinite;
        }

        .ticker-item {
            white-space: nowrap;
            padding: 0 30px;
            font-weight: 600;
            font-size: 1.2rem;
            letter-spacing: 1px;
        }

        @keyframes ticker-news {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }

        /* Секции */
        section {
            padding: 50px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 40px;
            color: #2c3e50;
            font-size: 2rem;
        }

        /* Новости */
        .news-container {
            display: flex;
            overflow-x: auto;
            padding: 20px 0;
            gap: 20px;
            scrollbar-width: thin;
            scrollbar-color: #3498db #f1f1f1;
        }

        .news-container::-webkit-scrollbar {
            height: 8px;
        }

        .news-container::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        .news-container::-webkit-scrollbar-thumb {
            background: #3498db;
            border-radius: 10px;
        }

        .news-item {
            min-width: 300px;
            background-color: white;
            border-radius: 8px;
            padding: 0 0 20px 0;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .news-item:hover {
            transform: translateY(-5px);
        }

        .news-item h3 {
            color: #2c3e50;
            margin-bottom: 10px;
            padding: 0 20px;
        }

        .news-item p {
            color: #666;
            margin-bottom: 15px;
            flex-grow: 1;
            padding: 0 20px;
        }

        .news-item .btn-details {
            margin: 0 20px;
        }
        .news-item:hover {
            transform: translateY(-5px);
        }


        /* Кнопки подробнее */
        .btn-details {
            background: linear-gradient(135deg, #3498db, #2980b9);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
            align-self: flex-start;
            margin-top: auto;
        }

        .btn-details:hover {
            background: linear-gradient(135deg, #2980b9, #1a5276);
            transform: translateY(-2px);
            box-shadow: 0 7px 14px rgba(50, 50, 93, 0.1), 0 3px 6px rgba(0, 0, 0, 0.08);
        }

        /* Специальности */
        .specialties-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }

        .specialty-item {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s;
            display: flex;
            flex-direction: column;
        }

        .specialty-item:hover {
            transform: translateY(-5px);
        }

        .specialty-item h3 {
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .specialty-item p {
            color: #666;
            margin-bottom: 15px;
            flex-grow: 1;
        }

        /* Подвал */
        footer {
            background-color: #2c3e50;
            color: white;
            padding: 40px 0 20px;
            margin-top: 50px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 30px;
        }

        .footer-section h3 {
            margin-bottom: 15px;
            font-size: 1.2rem;
        }

        .footer-section p, .footer-section a {
            color: #bbb;
            margin-bottom: 10px;
            display: block;
            text-decoration: none;
        }

        .footer-section a:hover {
            color: white;
        }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #444;
            color: #bbb;
            font-size: 0.9rem;
        }
        
        /* Ссылки */
        a, .nav-link, .top-links a, .btn-details, .footer-section a {
            text-decoration: none !important;
        }

        /* Модальные окна */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: white;
            border-radius: 8px;
            padding: 30px;
            width: 90%;
            max-width: 800px;
            max-height: 90vh;
            overflow-y: auto;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            animation: modalFadeIn 0.3s;
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }

        .modal-header h2 {
            color: #2c3e50;
            margin: 0;
        }

        .close-button {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: #666;
        }

        .close-button:hover {
            color: #333;
        }

        /* Стили для информации в модальных окнах */
        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-bottom: 20px;
        }

        .info-item {
            margin-bottom: 10px;
        }

        .info-label {
            font-weight: bold;
            color: #2c3e50;
        }

        .activities-list {
            margin-top: 15px;
        }

        .activities-list h4 {
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .activities-list ul {
            list-style-type: none;
            padding-left: 0;
        }

        .activities-list li {
            padding: 5px 0;
            border-bottom: 1px solid #eee;
            position: relative;
            padding-left: 20px;
        }

        .activities-list li:before {
            content: "•";
            color: #3498db;
            font-size: 1.2rem;
            position: absolute;
            left: 0;
            top: 3px;
        }

        .medical-warning {
            background-color: #fff3cd;
            border: 1px solid #ffeaa7;
            border-radius: 5px;
            padding: 15px;
            margin-top: 15px;
        }

        .medical-warning h4 {
            color: #856404;
            margin-bottom: 10px;
        }

        /* Формы */
        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #2c3e50;
            font-weight: 500;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
        }

        .form-group input:focus {
            border-color: #3498db;
            outline: none;
        }

        .form-button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s;
        }

        .form-button:hover {
            background-color: #2980b9;
        }

        .form-links {
            text-align: center;
            margin-top: 20px;
        }

        .form-links a {
            color: #3498db;
            text-decoration: none;
        }

        .form-links a:hover {
            text-decoration: underline;
        }
        

        /* Анимации */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes modalFadeIn {
            from { opacity: 0; transform: translateY(-50px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Адаптивность */
        @media (max-width: 992px) {
            .header-content {
                flex-direction: column;
                text-align: center;
            }
            
            .logo-section {
                margin-bottom: 15px;
                justify-content: center;
            }
            
            nav {
                margin: 15px 0;
            }
            
            nav ul {
                justify-content: center;
            }
        }
                /* Стили для изображений новостей */
                .news-image-container {
            width: 100%;
            height: 180px;
            overflow: hidden;
            border-radius: 6px 6px 0 0;
            margin-bottom: 15px;
        }

        .news-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .news-item:hover .news-image {
            transform: scale(1.05);
        }
        
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                text-align: center;
            }

            nav ul {
                margin-top: 15px;
                flex-wrap: wrap;
                justify-content: center;
            }

            nav ul li {
                margin: 5px 10px;
            }

            .auth-buttons {
                margin-top: 15px;
            }

            .hero h2 {
                font-size: 2rem;
            }

            .section-title {
                font-size: 1.5rem;
            }
            
            .top-bar-content {
                flex-direction: column;
                gap: 10px;
            }
            
            .ticker-item {
                font-size: 1rem;
                padding: 0 20px;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .modal-content {
                padding: 20px;
                width: 95%;
            }
        }
        
        @media (max-width: 576px) {
            nav ul {
                flex-direction: column;
                align-items: center;
            }
            
            nav li {
                margin: 5px 0;
            }
            
            .auth-buttons {
                flex-direction: column;
                width: 100%;
                max-width: 200px;
                margin: 10px auto;
            }
            
            .auth-buttons button {
                width: 100%;
            }
        }
    </style>
</head>
<body>
<div class="top-bar">
        <div class="container">
            <div class="top-bar-content">
                <div class="top-contacts">
                    <span>660046 г. Красноярск, ул. Автомобилистов, 70</span>
                    <span>+7 (991) 266-8991</span>
                    <span>kst_priemnaya@mail.ru</span>
                </div>
                <div class="top-links">
                    <a href="#" id="accessibility-link">Версия для слабовидящих</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Панель для слабовидящих -->
    <div class="accessibility-panel" id="accessibility-panel" style="display: none;">
        <button class="accessibility-btn" id="contrast-btn" title="Высокая контрастность">
            ◐
            <span class="accessibility-tooltip">Высокая контрастность</span>
        </button>
        <button class="accessibility-btn" id="font-size-btn" title="Увеличить шрифт">
            A+
            <span class="accessibility-tooltip">Увеличить шрифт</span>
        </button>
        <button class="accessibility-btn" id="letter-spacing-btn" title="Увеличить межбуквенный интервал">
            A↔A
            <span class="accessibility-tooltip">Увеличить интервал</span>
        </button>
        <button class="accessibility-btn" id="reset-accessibility-btn" title="Сбросить настройки">
            ↺
            <span class="accessibility-tooltip">Сбросить настройки</span>
        </button>
    </div>


    <!-- Шапка -->
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo-section">
                    <img src="logo.png" alt="Логотип техникума" class="logo-img">
                    <div class="logo">
                        <h1>КГБПОУ "Красноярский техникум социальных технологий"</h1>
                        <p>Качественное образование для успешного будущего</p>
                    </div>
                </div>
                <nav>
                    <ul>
                        <li><a href="index.php" class="nav-link">Главная</a></li>
                        <li><a href="tex.html" class="nav-link">О техникуме</a></li>
                        <li><a href="abiturient.html" class="nav-link">Абитуриентам</a></li>
                        <li><a href="special.html" class="nav-link">Специальности</a></li>
                        <li><a href="contact.html" class="nav-link">Контакты</a></li>
                    </ul>
                </nav>
                <div class="auth-buttons">
                    <button id="login-btn">Войти</button>
                    <button id="register-btn">Регистрация</button>
                </div>
                <!-- Блок профиля пользователя -->
                <div id="user-profile" style="display: none;">
                    <button id="profile-btn" style="background: none; border: 1px solid #3498db; color: #3498db; padding: 8px 15px; border-radius: 4px; cursor: pointer; display: flex; align-items: center; gap: 8px;">
                        <span id="profile-name">Пользователь</span>
                        <span>▼</span>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Главная страница -->
    <main id="home-page" class="page">
        <!-- Главный баннер -->
        <section class="hero">
            <div class="container">
                <h2>КГБПОУ Красноярский техникум социальных технологий</h2>
                <p>Абитуриентам. Приемная кампания 2025-2026</p>
                <a href="abiturient.html" class="learn-more-btn">Узнать больше</a>
            </div>
        </section>

        <!-- Бегущая строка -->
        <div class="ticker-news">
            <div class="ticker-wrapper">
                <div class="ticker-item">Построй свое будущее в КТСТ</div>
                <div class="ticker-item">Построй свое будущее в КТСТ</div>
                <div class="ticker-item">Построй свое будущее в КТСТ</div>
                <div class="ticker-item">Построй свое будущее в КТСТ</div>
                <div class="ticker-item">Построй свое будущее в КТСТ</div>
                <div class="ticker-item">Построй свое будущее в КТСТ</div>
                <div class="ticker-item">Построй свое будущее в КТСТ</div>
                <div class="ticker-item">Построй свое будущее в КТСТ</div>
                <div class="ticker-item">Построй свое будущее в КТСТ</div>
                <div class="ticker-item">Построй свое будущее в КТСТ</div>
            </div>
        </div>

                <!-- Новости -->
                <section>
            <div class="container">
                <h2 class="section-title">ПОСЛЕДНИЕ НОВОСТИ</h2>
                <div class="news-container">
                    <div class="news-item">
                        <div class="news-image-container">
                            <img src="new12.jpg" alt="Приемная кампания 2025-2026" class="news-image">
                        </div>
                        <h3>Приемная кампания 2025-2026</h3>
                        <p>С 1 сентября начинается приемная кампания на 2025-2026 учебный год. Списки рекомендованных к зачислению будут опубликованы на сайте.</p>
                        <button class="btn-details news-details-btn">Подробнее</button>
                    </div>
                    <div class="news-item">
                        <div class="news-image-container">
                            <img src="new21.jpg" alt="Правила приема" class="news-image">
                        </div>
                        <h3>Правила приема</h3>
                        <p>Ознакомьтесь с правилами приема в техникум. Узнайте о документах, необходимых для поступления.</p>
                        <button class="btn-details news-details-btn">Подробнее</button>
                    </div>
                    <div class="news-item">
                        <div class="news-image-container">
                            <img src="new3.jpg" alt="День открытых дверей" class="news-image">
                        </div>
                        <h3>День открытых дверей</h3>
                        <p>Приглашаем абитуриентов на день открытых дверей, который состоится 15 ноября.</p>
                        <button class="btn-details news-details-btn">Подробнее</button>
                    </div>
                    <div class="news-item">
                        <div class="news-image-container">
                            <img src="new42.jpg" alt="Целевое обучение" class="news-image">
                        </div>
                        <h3>Целевое обучение</h3>
                        <p>Памятка об организации целевого обучения для абитуриентов. Для лиц с ограниченными возможностями здоровья.</p>
                        <button class="btn-details news-details-btn">Подробнее</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Специальности и профессии -->
        <section style="background-color: #f9f9f9;">
            <div class="container">
                <h2 class="section-title">Перечень профессий и специальностей</h2>
                
                <h3 style="margin: 30px 0 20px; color: #2c3e50;">СПЕЦИАЛЬНОСТИ</h3>
                <div class="specialties-grid">
                    <div class="specialty-item">
                        <h3>Информационные системы и программирование</h3>
                        <p>Код: 09.02.07</p>
                        <button class="btn-details specialty-details-btn" data-code="09.02.07">Подробнее</button>
                    </div>
                    <div class="specialty-item">
                        <h3>Товароведение и экспертиза качества потребительских товаров</h3>
                        <p>Код: 38.02.05</p>
                        <button class="btn-details specialty-details-btn" data-code="38.02.05">Подробнее</button>
                    </div>
                    <div class="specialty-item">
                        <h3>Поварское и кондитерское дело</h3>
                        <p>Код: 43.02.15</p>
                        <button class="btn-details specialty-details-btn" data-code="43.02.15">Подробнее</button>
                    </div>
                </div>
                
                <h3 style="margin: 40px 0 20px; color: #2c3e50;">ПРОФЕССИИ</h3>
                <div class="specialties-grid">
                    <div class="specialty-item">
                        <h3>Мастер общестроительных работ</h3>
                        <p>Код: 08.01.27</p>
                        <button class="btn-details specialty-details-btn" data-code="08.01.27">Подробнее</button>
                    </div>
                    <div class="specialty-item">
                        <h3>Мастер отделочных строительных и декоративных работ</h3>
                        <p>Код: 08.01.28</p>
                        <button class="btn-details specialty-details-btn" data-code="08.01.28">Подробнее</button>
                    </div>
                    <div class="specialty-item">
                        <h3>Оператор почтовой связи</h3>
                        <p>Код: 11.01.08</p>
                        <button class="btn-details specialty-details-btn" data-code="11.01.08">Подробнее</button>
                    </div>
                    <div class="specialty-item">
                        <h3>Сварщик (ручной и частично механизированной сварки)</h3>
                        <p>Код: 15.01.05</p>
                        <button class="btn-details specialty-details-btn" data-code="15.01.05">Подробнее</button>
                    </div>
                    <div class="specialty-item">
                        <h3>Повар, кондитер</h3>
                        <p>Код: 43.01.09</p>
                        <button class="btn-details specialty-details-btn" data-code="43.01.09">Подробнее</button>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Модальное окно деталей -->
    <div id="details-modal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 id="details-title">Детали</h2>
                <button class="close-button">&times;</button>
            </div>
            <div id="details-content">
                <p>Здесь будет информация о выбранном элементе.</p>
            </div>
        </div>
    </div>

    <!-- Модальное окно регистрации -->
    <div id="register-modal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Регистрация</h2>
                <button class="close-button">&times;</button>
            </div>
            <form id="register-form">
                <div class="form-group">
                    <label for="reg-name">ФИО</label>
                    <input type="text" id="reg-name" required>
                </div>
                <div class="form-group">
                    <label for="reg-email">Email</label>
                    <input type="email" id="reg-email" required>
                </div>
                <div class="form-group">
                    <label for="reg-phone">Телефон</label>
                    <input type="tel" id="reg-phone" required>
                </div>
                <div class="form-group">
                    <label for="reg-password">Пароль</label>
                    <input type="password" id="reg-password" required>
                </div>
                <div class="form-group">
                    <label for="reg-confirm-password">Подтвердите пароль</label>
                    <input type="password" id="reg-confirm-password" required>
                </div>
                <button type="submit" class="form-button">Зарегистрироваться</button>
                <div class="form-links">
                    <a href="#" id="show-login">Уже есть аккаунт? Войдите</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Модальное окно авторизации -->
    <div id="login-modal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Вход</h2>
                <button class="close-button">&times;</button>
            </div>
            <form id="login-form">
                <div class="form-group">
                    <label for="login-email">Email</label>
                    <input type="email" id="login-email" required>
                </div>
                <div class="form-group">
                    <label for="login-password">Пароль</label>
                    <input type="password" id="login-password" required>
                </div>
                <button type="submit" class="form-button">Войти</button>
                <div class="form-links">
                    <a href="#" id="show-register">Нет аккаунта? Зарегистрируйтесь</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Модальное окно профиля -->
    <div id="profile-modal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Профиль пользователя</h2>
                <button class="close-button">&times;</button>
            </div>
            <div id="profile-content">
                <div class="info-grid">
                    <div class="info-item">
                        <span class="info-label">Имя:</span>
                        <span id="profile-firstname">-</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Фамилия:</span>
                        <span id="profile-lastname">-</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Email:</span>
                        <span id="profile-email">-</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Логин:</span>
                        <span id="profile-login">-</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Дата регистрации:</span>
                        <span id="profile-regdate">-</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Последний вход:</span>
                        <span id="profile-lastlogin">-</span>
                    </div>
                </div>
                <button id="logout-btn" style="margin-top: 20px; padding: 10px 20px; background-color: #e74c3c; color: white; border: none; border-radius: 4px; cursor: pointer; width: 100%;">Выйти</button>
            </div>
        </div>
    </div>

    <!-- Подвал -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>КГБПОУ "Красноярский техникум социальных технологий"</h3>
                    <p>660046 г. Красноярск, ул. Автомобилистов, 70</p>
                    <p>+7 (991) 266-8991</p>
                    <p>kst_priemnaya@mail.ru</p>
                </div>
                <div class="footer-section">
                    <h3>Разделы</h3>
                    <a href="index.php">Главная</a>
                    <a href="tex.html">О техникуме</a>
                    <a href="abiturient.html">Абитуриентам</a>
                    <a href="special.html">Специальности</a>
                </div>
                <div class="footer-section">
                    <h3>Дополнительно</h3>
                    <a href="tex.html">Сведения об образовательной организации</a>
                    <a href="https://vk.com/club223650628?from=search">Медиацентр</a>
                    <a href="https://krsocteh.tmweb.ru/upload/medialibrary/c5b/12%20Перечень%20мер%20по%20предупреждению%20коррупции.pdf">Противодействие коррупции</a>
                    <a href="obsh.html">Общежитие</a>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2018 КГБПОУ "Красноярский техникум социальных технологий"</p>
            </div>
        </div>
    </footer>

    <script>

        // Добавляем активный класс для текущей страницы в навигации
const currentPage = window.location.pathname.split('/').pop() || 'index.html';
const navLinks = document.querySelectorAll('.nav-link');

navLinks.forEach(link => {
    const linkPage = link.getAttribute('href');
    if (linkPage === currentPage) {
        link.style.color = '#3498db';
        link.style.fontWeight = 'bold';  // ← Эта строка делает шрифт жирным
    }
});
         // Функционал для слабовидящих
         const accessibilityLink = document.getElementById('accessibility-link');
        const accessibilityPanel = document.getElementById('accessibility-panel');
        const contrastBtn = document.getElementById('contrast-btn');
        const fontSizeBtn = document.getElementById('font-size-btn');
        const letterSpacingBtn = document.getElementById('letter-spacing-btn');
        const resetAccessibilityBtn = document.getElementById('reset-accessibility-btn');

        // Проверяем сохраненные настройки
        if (localStorage.getItem('accessibilityContrast') === 'enabled') {
            document.body.classList.add('accessibility-mode');
            contrastBtn.classList.add('active');
        }

        if (localStorage.getItem('accessibilityFontSize') === 'enabled') {
            document.body.classList.add('large-font');
            fontSizeBtn.classList.add('active');
        }

        if (localStorage.getItem('accessibilityLetterSpacing') === 'enabled') {
            document.body.classList.add('letter-spacing');
            letterSpacingBtn.classList.add('active');
        }

        // Показ/скрытие панели
        if (accessibilityLink) {
            accessibilityLink.addEventListener('click', (e) => {
                e.preventDefault();
                if (accessibilityPanel.style.display === 'none') {
                    accessibilityPanel.style.display = 'flex';
                } else {
                    accessibilityPanel.style.display = 'none';
                }
            });
        }

        // Высокая контрастность
        if (contrastBtn) {
            contrastBtn.addEventListener('click', () => {
                document.body.classList.toggle('accessibility-mode');
                contrastBtn.classList.toggle('active');
                
                if (document.body.classList.contains('accessibility-mode')) {
                    localStorage.setItem('accessibilityContrast', 'enabled');
                } else {
                    localStorage.setItem('accessibilityContrast', 'disabled');
                }
            });
        }

        // Увеличение шрифта
        if (fontSizeBtn) {
            fontSizeBtn.addEventListener('click', () => {
                document.body.classList.toggle('large-font');
                fontSizeBtn.classList.toggle('active');
                
                if (document.body.classList.contains('large-font')) {
                    localStorage.setItem('accessibilityFontSize', 'enabled');
                } else {
                    localStorage.setItem('accessibilityFontSize', 'disabled');
                }
            });
        }

        // Увеличение межбуквенного интервала
        if (letterSpacingBtn) {
            letterSpacingBtn.addEventListener('click', () => {
                document.body.classList.toggle('letter-spacing');
                letterSpacingBtn.classList.toggle('active');
                
                if (document.body.classList.contains('letter-spacing')) {
                    localStorage.setItem('accessibilityLetterSpacing', 'enabled');
                } else {
                    localStorage.setItem('accessibilityLetterSpacing', 'disabled');
                }
            });
        }

        // Сброс настроек
        if (resetAccessibilityBtn) {
            resetAccessibilityBtn.addEventListener('click', () => {
                document.body.classList.remove('accessibility-mode', 'large-font', 'letter-spacing');
                contrastBtn.classList.remove('active');
                fontSizeBtn.classList.remove('active');
                letterSpacingBtn.classList.remove('active');
                
                localStorage.setItem('accessibilityContrast', 'disabled');
                localStorage.setItem('accessibilityFontSize', 'disabled');
                localStorage.setItem('accessibilityLetterSpacing', 'disabled');
            });
        }

        // Закрытие панели при клике вне ее
        document.addEventListener('click', (e) => {
            if (!accessibilityPanel.contains(e.target) && 
                !accessibilityLink.contains(e.target) && 
                accessibilityPanel.style.display === 'flex') {
                accessibilityPanel.style.display = 'none';
            }
        });

        // Модальные окна
        const registerModal = document.getElementById('register-modal');
        const loginModal = document.getElementById('login-modal');
        const detailsModal = document.getElementById('details-modal');
        const profileModal = document.getElementById('profile-modal');
        const registerBtn = document.getElementById('register-btn');
        const loginBtn = document.getElementById('login-btn');
        const topLoginBtn = document.getElementById('top-login-btn');
        const showLogin = document.getElementById('show-login');
        const showRegister = document.getElementById('show-register');
        const closeButtons = document.querySelectorAll('.close-button');
        const userProfile = document.getElementById('user-profile');
        const profileBtn = document.getElementById('profile-btn');
        const logoutBtn = document.getElementById('logout-btn');

        // Открытие модальных окон
        if (registerBtn) {
            registerBtn.addEventListener('click', () => {
                if (registerModal) registerModal.style.display = 'flex';
            });
        }

        if (loginBtn) {
            loginBtn.addEventListener('click', () => {
                if (loginModal) loginModal.style.display = 'flex';
            });
        }

        if (topLoginBtn) {
            topLoginBtn.addEventListener('click', (e) => {
                e.preventDefault();
                if (loginModal) loginModal.style.display = 'flex';
            });
        }

        if (showLogin) {
            showLogin.addEventListener('click', (e) => {
                e.preventDefault();
                if (registerModal) registerModal.style.display = 'none';
                if (loginModal) loginModal.style.display = 'flex';
            });
        }

        if (showRegister) {
            showRegister.addEventListener('click', (e) => {
                e.preventDefault();
                if (loginModal) loginModal.style.display = 'none';
                if (registerModal) registerModal.style.display = 'flex';
            });
        }

        // Открытие модального окна профиля
        if (profileBtn) {
            profileBtn.addEventListener('click', () => {
                if (profileModal) profileModal.style.display = 'flex';
            });
        }

        // Закрытие модальных окон
        closeButtons.forEach(button => {
            button.addEventListener('click', () => {
                if (registerModal) registerModal.style.display = 'none';
                if (loginModal) loginModal.style.display = 'none';
                if (detailsModal) detailsModal.style.display = 'none';
                if (profileModal) profileModal.style.display = 'none';
            });
        });

        // Закрытие модальных окон при клике вне их
        window.addEventListener('click', (e) => {
            if (e.target === registerModal) {
                registerModal.style.display = 'none';
            }
            if (e.target === loginModal) {
                loginModal.style.display = 'none';
            }
            if (e.target === detailsModal) {
                detailsModal.style.display = 'none';
            }
            if (e.target === profileModal) {
                profileModal.style.display = 'none';
            }
        });

        // Обработка формы регистрации
        const registerForm = document.getElementById('register-form');
        if (registerForm) {
            registerForm.addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Регистрация успешно завершена!');
                if (registerModal) registerModal.style.display = 'none';
                this.reset();
            });
        }

        // Обработка формы входа
        const loginForm = document.getElementById('login-form');
        if (loginForm) {
            loginForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const email = document.getElementById('login-email').value;
                
                // Имитация успешной авторизации
                const userData = {
                    firstname: "Кристина",
                    lastname: "Данилюк",
                    email: email,
                    login: "da_kristina",
                    regDate: new Date().toLocaleDateString('ru-RU'),
                    lastLogin: new Date().toLocaleString('ru-RU')
                };
                
                // Сохраняем данные пользователя
                localStorage.setItem('currentUser', JSON.stringify(userData));
                
                // Показываем профиль
                showUserProfile(userData);
                
                alert('Вход выполнен успешно!');
                if (loginModal) loginModal.style.display = 'none';
                this.reset();
            });
        }

        // Функция показа профиля пользователя
        function showUserProfile(userData) {
            if (userProfile && profileBtn) {
                // Показываем блок профиля
                userProfile.style.display = 'block';
                
                // Устанавливаем имя в кнопке профиля
                document.getElementById('profile-name').textContent = userData.firstname;
                
                // Заполняем данные в модальном окне профиля
                document.getElementById('profile-firstname').textContent = userData.firstname;
                document.getElementById('profile-lastname').textContent = userData.lastname;
                document.getElementById('profile-email').textContent = userData.email;
                document.getElementById('profile-login').textContent = userData.login;
                document.getElementById('profile-regdate').textContent = userData.regDate;
                document.getElementById('profile-lastlogin').textContent = userData.lastLogin;
                
                // Скрываем кнопки входа/регистрации
                if (loginBtn) loginBtn.style.display = 'none';
                if (registerBtn) registerBtn.style.display = 'none';
            }
        }

        // Функция выхода
        function logoutUser() {
            localStorage.removeItem('currentUser');
            if (userProfile) userProfile.style.display = 'none';
            if (loginBtn) loginBtn.style.display = 'inline-block';
            if (registerBtn) registerBtn.style.display = 'inline-block';
            if (profileModal) profileModal.style.display = 'none';
            alert('Вы вышли из системы');
        }

        // Обработчик кнопки выхода
        if (logoutBtn) {
            logoutBtn.addEventListener('click', logoutUser);
        }

        // Проверка авторизации при загрузке страницы
        document.addEventListener('DOMContentLoaded', function() {
            const savedUser = localStorage.getItem('currentUser');
            if (savedUser) {
                const userData = JSON.parse(savedUser);
                showUserProfile(userData);
            }
        });

        // Кнопки "Подробнее" для новостей
        document.querySelectorAll('.news-details-btn').forEach(button => {
            button.addEventListener('click', function() {
                const newsItem = this.closest('.news-item');
                const title = newsItem.querySelector('h3').textContent;
                const content = newsItem.querySelector('p').textContent;
                
                showDetailsModal(title, `<p>${content}</p><p>Для получения дополнительной информации свяжитесь с приемной комиссией по телефону +7 (991) 266-8991.</p>`);
            });
        });

        // Данные для специальностей и профессий
        const specialtiesData = {
            "09.02.07": {
                title: "Информационные системы и программирование",
                code: "09.02.07",
                specialty: "Информационные системы и программирование",
                qualification: "Программист, разработчик веб и мультимедийных приложений",
                form: "Очная",
                level: "Основное общее образование (9 классов)",
                duration: "3 г. 10 мес.",
                budget: "50",
                contract: "50",
                activities: [
                    "Разработка модулей программного обеспечения для компьютерных систем.",
                    "Осуществление интеграции программных модулей.",
                    "Сопровождение и обслуживание программного обеспечения компьютерных систем.",
                    "Проектирование и разработка информационных систем.",
                    "Разработка дизайна веб-приложений.",
                    "Проектирование, разработка и оптимизация веб-приложений.",
                    "Разработка, администрирование и защита баз данных."
                ]
            },
            "38.02.05": {
                title: "Товароведение и экспертиза качества потребительских товаров",
                code: "38.02.05",
                specialty: "Товароведение и экспертиза качества потребительских товаров",
                qualification: "Товаровед-эксперт",
                form: "Очная",
                level: "Основное общее образование (9 классов)",
                duration: "2 г. 10 мес.",
                budget: "25",
                contract: "",
                activities: [
                    "Управление ассортиментом товаров. Основы управления ассортиментом товаров.",
                    "Организация и проведение экспертизы и оценка качества товаров. Оценка качества товаров и основы экспертизы.",
                    "Организация работ в подразделении организации. Управление структурным подразделением организации.",
                    "Выполнение работ по профессии 17351 Продавец непродовольственных товаров/ 17353 Продавец продовольственных товаров. Розничная торговля непродовольственными товарами. Розничная торговля продовольственными товарами."
                ]
            },
            "43.02.15": {
                title: "Поварское и кондитерское дело",
                code: "43.02.15",
                specialty: "Поварское и кондитерское дело",
                qualification: "Специалист по поварскому и кондитерскому делу",
                form: "Очная",
                level: "Основное общее образование (9 классов)",
                duration: "2 г. 10 мес.",
                budget: "50",
                contract: "-",
                activities: [
                    "Организация и ведение процессов приготовления и подготовки к реализации полуфабрикатов для блюд, кулинарных изделий сложного ассортимента.",
                    "Организация и ведение процессов приготовления, оформления и подготовки к реализации горячих блюд, кулинарных изделий, закусок сложного ассортимента с учетом потребностей различных категорий потребителей, видов и форм обслуживания.",
                    "Организация и ведение процессов приготовления, оформления и подготовки к реализации холодных блюд, кулинарных изделий, закусок сложного ассортимента с учетом потребностей различных категорий потребителей, видов и форм обслуживания.",
                    "Организация и ведение процессов приготовления, оформления и подготовки к реализации холодных и горячих десертов, напитков сложного ассортимента с учетом потребностей различных категорий потребителей, видов и форм обслуживания.",
                    "Организация и ведение процессов приготовления, оформления и подготовки к реализации хлебобулочных, мучных кондитерских изделий сложного ассортимента с учетом потребностей различных категорий потребителей, видов и форм обслуживания.",
                    "Организация и контроль текущей деятельности подчиненного персонала.",
                    "Выполнение работ по профессии 16675 Повар.",
                    "Выполнение работ по профессии 12901 Кондитер.",
                    "Организация технологических процессов по компетенции Поварское дело."
                ]
            },
            "08.01.27": {
                title: "Мастер общестроительных работ",
                code: "08.01.27",
                form: "Очная (бюджетная), на базе 9 классов",
                duration: "1 год 10 месяцев",
                purpose: "Мастер общестроительных работ - это квалифицированный рабочий, выполняющий арматурные, бетонные, каменные, монтажные, печные, стропальные работы при возведении, ремонте и реконструкции зданий и сооружений всех типов из сборных железобетонных и металлических конструкций.",
                sphere: "Профессиональные навыки позволяют трудиться в таких сферах, как строительство, промышленность, производственные предприятия, жилищно-коммунальное хозяйство— это далеко не полный перечень мест, где так необходимы квалифицированные мастера общестроительных работ.",
                medicalContraindications: "сердечно-сосудистые заболевания; заболевания дыхательных органов; нарушения в работе опорно-двигательного аппарата (радикулит, остеохондроз); психические недуги и расстройства нервной системы; раздражительность; аллергические заболевания; выраженные дефекты зрения и слуха."
            },
            "08.01.28": {
                title: "Мастер отделочных строительных и декоративных работ",
                code: "08.01.28",
                form: "Очная (бюджетная), на базе 9 классов",
                duration: "1 год 10 месяцев",
                purpose: "Выполнение наружных и внутренних штукатурных, малярных, облицовочных работ, устройство ограждающих конструкций при производстве, ремонте и реконструкции зданий и сооружений.",
                sphere: "поверхности зданий, сооружений и участков, прилегающих к ним; материалы для отделочных строительных работ; технологии отделочных строительных работ; ручной и механизированный инструмент, приспособления и механизмы для отделочных строительных работ, леса и подмости.",
                medicalContraindications: "сердечно-сосудистые заболевания; заболевания дыхательных органов; нарушения в работе опорно-двигательного аппарата (радикулит, остеохондроз); психические недуги и расстройства нервной системы; раздражительность; аллергические заболевания; выраженные дефекты зрения и слуха."
            },
            "11.01.08": {
                title: "Оператор почтовой связи",
                code: "11.01.08",
                description: "Оператор представляет собой лицо почты, по его работе судят о работе почтовой связи. Требования к современному оператору почтовой связи очень высокие: это и прекрасное знание компьютера, и умение работать с людьми, и знание языков.",
                activities: [
                    "предоставление клиентам услуг связи;",
                    "прием и сортировка почтовых отправлений, посылок, бандеролей;",
                    "работа на персональном компьютере;",
                    "оформление не розданных почтовых отправлений;",
                    "учет, группировка и систематизация документов в производственных архивах предприятий связи;",
                    "обработка, отправка и выдача посылок, ценных писем;",
                    "ведение архива, первичный учет документов;",
                    "обслуживание автомата, сортирующего письма по почтовому индексу."
                ]
            },
            "15.01.05": {
                title: "Сварщик (ручной и частично механизированной сварки)",
                code: "15.01.05",
                form: "Очная (бюджетная), на базе 9 классов",
                duration: "1 год 10 месяцев",
                purpose: "В первую очередь подготовка материала для работы. Нередко на данном этапе рабочий должен уметь читать чертежи. Деятельность сварщиков заключается в соединении материалов без специальных крепёжных приспособлений. Такую задачу они осуществляют при помощи специальной сварочной техники. В связи с этим появилась масса видов сварщиков. Критерий его качества — ровный, крепкий шов.",
                sphere: "Их профессиональные навыки позволяют трудиться в таких сферах, как строительство, промышленность, энергетика, нефтедобывающая промышленность, машиностроение, кораблестроение, производственные предприятия, лаборатории по новым разработкам — это далеко не полный перечень мест, где так необходимы квалифицированные сварщики.",
                medicalContraindications: "сердечно-сосудистые заболевания; заболевания дыхательных органов; нарушения в работе опорно-двигательного аппарата (радикулит, остеохондроз); психические недуги и расстройства нервной системы; раздражительность; аллергические заболевания; выраженные дефекты зрения и слуха."
            },
            "43.01.09": {
                title: "Повар, кондитер",
                code: "43.01.09",
                specialty: "ТОП-50 Повар, кондитер",
                qualification: "Повар, кондитер",
                form: "Очная",
                level: "Основное общее образование (9 классов)",
                duration: "2 г. 10 мес.",
                budget: "25",
                contract: "–",
                activities: [
                    "Приготовление и подготовка к реализации полуфабрикатов для блюд, кулинарных изделий разнообразного ассортимента.",
                    "Приготовление, оформление и подготовка к реализации горячих блюд, кулинарных изделий, закусок разнообразного ассортимента.",
                    "Приготовление, оформление и подготовка к реализации холодных блюд, кулинарных изделий, закусок разнообразного ассортимента.",
                    "Приготовление, оформление и подготовка к реализации холодных и горячих сладких блюд, десертов, напитков разнообразного ассортимента.",
                    "Приготовление, оформление и подготовка к реализации хлебобулочных, мучных кондитерских изделий разнообразного ассортимента.",
                    "Приготовление, оформление и подготовка к реализации изделий и скульптур из шоколада и карамели."
                ]
            }
        };

        // Кнопки "Подробнее" для специальностей и профессий
        document.querySelectorAll('.specialty-details-btn').forEach(button => {
            button.addEventListener('click', function() {
                const code = this.getAttribute('data-code');
                const data = specialtiesData[code];
                
                if (data) {
                    showSpecialtyDetails(data);
                }
            });
        });

        // Функция для показа модального окна с деталями специальности/профессии
        function showSpecialtyDetails(data) {
            if (detailsModal) {
                const detailsTitle = document.getElementById('details-title');
                const detailsContent = document.getElementById('details-content');
                
                if (detailsTitle) detailsTitle.textContent = data.title;
                
                let content = '';
                
                // Для специальностей (имеют qualification)
                if (data.qualification) {
                    content = `
                        <div class="info-grid">
                            <div class="info-item">
                                <span class="info-label">Код:</span> ${data.code}
                            </div>
                            <div class="info-item">
                                <span class="info-label">Специальность:</span> ${data.specialty}
                            </div>
                            <div class="info-item">
                                <span class="info-label">Квалификация:</span> ${data.qualification}
                            </div>
                            <div class="info-item">
                                <span class="info-label">Форма обучения:</span> ${data.form}
                            </div>
                            <div class="info-item">
                                <span class="info-label">Уровень обучения:</span> ${data.level}
                            </div>
                            <div class="info-item">
                                <span class="info-label">Срок обучения:</span> ${data.duration}
                            </div>
                            <div class="info-item">
                                <span class="info-label">Бюджетные места:</span> ${data.budget}
                            </div>
                            <div class="info-item">
                                <span class="info-label">Договорные места:</span> ${data.contract}
                            </div>
                        </div>
                    `;
                    
                    if (data.activities && data.activities.length > 0) {
                        content += `
                            <div class="activities-list">
                                <h4>Виды деятельности:</h4>
                                <ul>
                                    ${data.activities.map(activity => `<li>${activity}</li>`).join('')}
                                </ul>
                            </div>
                        `;
                    }
                } 
                // Для профессий (не имеют qualification)
                else {
                    content = `
                        <div class="info-grid">
                            <div class="info-item">
                                <span class="info-label">Код профессии:</span> ${data.code}
                            </div>
                            <div class="info-item">
                                <span class="info-label">Форма обучения:</span> ${data.form}
                            </div>
                            <div class="info-item">
                                <span class="info-label">Продолжительность обучения:</span> ${data.duration}
                            </div>
                        </div>
                    `;
                    
                    if (data.purpose) {
                        content += `
                            <div class="info-item">
                                <p><span class="info-label">Назначение профессии:</span> ${data.purpose}</p>
                            </div>
                        `;
                    }
                    
                    if (data.sphere) {
                        content += `
                            <div class="info-item">
                                <p><span class="info-label">Сфера профессиональной деятельности:</span> ${data.sphere}</p>
                            </div>
                        `;
                    }
                    
                    if (data.description) {
                        content += `
                            <div class="info-item">
                                <p>${data.description}</p>
                            </div>
                        `;
                    }
                    
                    if (data.activities && data.activities.length > 0) {
                        content += `
                            <div class="activities-list">
                                <h4>Обязанности:</h4>
                                <ul>
                                    ${data.activities.map(activity => `<li>${activity}</li>`).join('')}
                                </ul>
                            </div>
                        `;
                    }
                    
                    if (data.medicalContraindications) {
                        content += `
                            <div class="medical-warning">
                                <h4>Медицинские противопоказания:</h4>
                                <p>${data.medicalContraindications}</p>
                            </div>
                        `;
                    }
                }
                
                if (detailsContent) detailsContent.innerHTML = content;
                detailsModal.style.display = 'flex';
            }
        }

        // Функция для показа модального окна с деталями
        function showDetailsModal(title, content) {
            if (detailsModal) {
                const detailsTitle = document.getElementById('details-title');
                const detailsContent = document.getElementById('details-content');
                
                if (detailsTitle) detailsTitle.textContent = title;
                if (detailsContent) detailsContent.innerHTML = content;
                
                detailsModal.style.display = 'flex';
            }
        }
    </script>
</body>
</html>
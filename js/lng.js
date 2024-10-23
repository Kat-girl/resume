const languages = {
        'contacts': {
            'en': 'contacts',
            'ru': 'контакты'
        },
        'phone': {
            'en': 'C:',
            'ru': 'Т:'
        },
        'tech-skills': {
            'en': 'tech skills',
            'ru': 'технические навыки'
        },
        'soft-skills': {
            'en': 'soft skills',
            'ru': 'социальные навыки'
        },
        'hard-working': {
            'en': 'Hard-working',
            'ru': 'Трудолюбие'
        },
        'fast-learning': {
            'en': 'Fast learning',
            'ru': 'Быстрая обучаемость'
        },
        'time-keeping': {
            'en': 'Time-keeping',
            'ru': 'Пунктуальность'
        },
        'teamwork': {
            'en': 'Teamwork',
            'ru': 'Командная работа'
        },
        'other-skills': {
            'en': 'other skills',
            'ru': 'Другие навыки'
        },
        'english': {
            'en': 'Fluent in English',
            'ru': 'Свободное владение английским языком'
        },
        'profession': {
            'en': 'Front-End Developer',
            'ru': 'Front-End разработчик'
        },
        'name': {
            'en': 'Kateryna Podkopaieva',
            'ru': 'Екатерина Подкопаева'
        },
        'description': {
            'en': 'Results-driven developer, seeking to use HTML5, CSS3, JavaScript skills to deliver coding excellence. Have developed a few responsive layouts. I also strive to continuously develop and learn new technologies. Ready to join the team and contribute to the creation of high-quality and dynamic projects',
            'ru': 'Начинающий фронтенд разработчик, ориентирована на результат, обладаю знаниями в области HTML5, CSS3, JavaScript. Разработала несколько адаптивных страниц. Также стремлюсь постоянно развиваться и изучать новые технологии. Готова присоединиться к команде и внести свой вклад в создание качественных и функциональных проектов'
        },
        'projects': {
            'en': 'Projects',
            'ru': 'Проекты'
        },
        'keksobooking': {
            'en': 'Javascript: uploading, editing pictures, form validation, leaflet map, accomodation types filtration',
            'ru': 'Javascript: загрузка, редактирование фото, валидация формы, катра Leaflet, фильтрация типов жилья'
        },
        'kekstagram': {
            'en': 'Javascript: uploading, editing pictures, img preview, img filtration, form validation',
            'ru': 'Javascript: загрузка, редактирование фото, предпросмотр, фильтрация фото, валидация формы'
        },
        'berries': {
            'en': 'HTML5, CSS3, Flexbox, Grid. Responsive Layout',
            'ru': 'HTML5, CSS3, Flexbox, Grid. Адапривная верстка'
        },
        'accordion': {
            'en': 'Javascript: accordion',
            'ru': 'Javascript: аккордеон'
        },
        'work-experience': {
            'en': 'Work Experience',
            'ru': 'Опыт работы'
        },
        'online-teacher': {
            'en': 'Online English Teacher',
            'ru': 'Онлайн-преподаватель английского языка'
        },
        'teacher-time': {
            'en': 'November 2021 - until now',
            'ru': 'ноябрь 2021г. по настоящее время'
        },
        'teacher-item-1': {
            'en': 'Teach relevant English lessons to children.',
            'ru': 'Преподавание английского детям, согласно их уровню.'
        },
        'teacher-item-2': {
            'en': 'Develop reading, writing, speaking and listening skills in students.',
            'ru': 'Развитие у студентов навыков чтения, письма, говорения и аудирования.'
        },
        'teacher-item-3': {
            'en': 'Prepare students for exams and tests.',
            'ru': 'Подготовка к тестам и экзаменам.'
        },
        'html-coder': {
            'en': 'HTML, CSS Coder (remote)',
            'ru': 'HTML/CSS верстальщик (удаленно)'
        },
        'coder-time': {
            'en': 'August 2020 - July 2021',
            'ru': 'август 2020г. - июль 2021г.'
        },
        'coder-item-1': {
            'en': 'Performed jobs related to publishing websites on various resources such as wix, amazon, sitebuilder, etc.',
            'ru': 'Публикация сайтов на различных ресурсах (wix, amazon, sitebuilder и т.п.)'
        },
        'coder-item-2': {
            'en': 'Edited websites before publication (add js-code, change text, replace pictures, etc.)',
            'ru': 'Редактирование сайтов перед публикацией (добавление js-кода, изменение текста, замена картинок)'
        },
        'coder-item-3': {
            'en': 'Worked with HTML/CSS.',
            'ru': 'Работа с HTML, CSS.'
        },
        'esl-teacher': {
            'en': 'Online ESL Teacher',
            'ru': 'Онлайн-преподаватель английского языка'
        },
        'esl-time': {
            'en': 'July 2018 - November 2020',
            'ru': 'июль 2018г. - ноябрь 2020г.'
        },
        'esl-item-1': {
            'en': 'Taught relevant English lessons focusing on building fluency.',
            'ru': 'Обучение английскому языку студентов разного возраста.'
        },
        'esl-item-2': {
            'en': 'Developed reading, writing, speaking and listening skills in students of different ages.',
            'ru': 'Развитие у студентов навыков чтения, письма, говорения и аудирования.'
        },
        'esl-item-3': {
            'en': 'Prepared students for exams and oral presentations in their English classes.',
            'ru': 'Подготовка к тестам и экзаменам, устным презентациям.'
        },
        'waitress': {
            'en': 'Waitress on cruise ships',
            'ru': 'Официант на круизных лайнерах'
        },
        'waitress-time': {
            'en': 'September 2012 - August 2017',
            'ru': 'сентябрь 2012г. - август 2017г.'
        },
        'waitress-item-1': {
            'en': 'Served food and beverages including speciality dishes to passengers of cruise ships in reastaurants and buffets.',
            'ru': 'Обслуживание пассажиров круизных лайнеров в ресторане и буфете.'
        },
        'waitress-item-2': {
            'en': 'Answered questions and provided suggestions on food and beverage options.',
            'ru': 'Общение с пассажирами, рекомендации по заказу еды и напитков.'
        },
        'waitress-item-3': {
            'en': 'Welcomed and seated guests, presented menus.',
            'ru': 'Размещение гостей в зале, прием заказов, подача блюд.'
        },
        'hr': {
            'en': 'HR Specialist',
            'ru': 'Инспектор по кадрам'
        },
        'hr-company': {
            'en': 'Social Services Center',
            'ru': 'Территориальный центр социального обслуживания, г. Симферополь'
        },
        'hr-time': {
            'en': 'March 2010 - August 2012',
            'ru': 'март 2010г. - август 2012г.'
        },
        'hr-item-1': {
            'en': 'Assisted hiring managers in the recruitment and selection of qualified candidates for open positions at assigned dealerships.',
            'ru': 'Прием, перевод, увольнение сотрудников.'
        },       
        'hr-item-2': {
            'en': 'Conducted periodic reviews and audits of personnel files.',
            'ru': 'Ведение кадрового делопроизводства.'
        },
        'hr-item-3': {
            'en': 'Prepared and compiled data for monthly departmental reports.',
            'ru': 'Составление графика отпусков, табеля учета времени, предоставление отчетности.'
        },
        'education': {
            'en': 'Education',
            'ru': 'Образование'
        },
        'html-academy': {
            'en': 'Сurrently taking the Frontend-Developer course',
            'ru': 'В настоящее время прохожу курс по фронтенд-разработке'
        },
        'html-academy-time': {
            'en': 'started in June 2023',
            'ru': 'начала в июне 2023г.'
        },
        'university': {
            'en': 'Tavrida National V.I.Vernadskiy University, Simferopol',
            'ru': 'Таврический национальный университет им. В.И.Вернадского, г.Симферополь'
        },
        'university-speciality': {
            'en': 'Master degree in Oriental Languages',
            'ru': 'диплом магистра восточной филологии'
        },
        'university-time': {
            'en': 'Septermber 2003 - June 2008',
            'ru': 'сентябрь 2003г. - июнь 2008г.'
        },
    };

export {languages};
# Веб-сайт для ООО «Ремзавод»

![remzavod](https://github.com/user-attachments/assets/c9a841b6-13f7-4ec6-acc0-b9ed498a68d7)

## Описание
Веб-сайт для ООО «Ремзавод» предназначен для представления услуг и продукции компании, улучшения взаимодействия с клиентами и повышения видимости в интернете.

## Основные функции
- **Главная страница:** Приветственное сообщение, краткая информация о компании и оказываемых услугах, навигация по сайту.
- **Продукция:** Каталог продукции с актуальной информацией.
- **Работы:** Примеры работ, выполненных компанией, с детальной информацией.
- **О компании:** Подробная информация о истории, профиле деятельности и ценностях компании.
- **Контакты:** Контактная информация, форма обратной связи и карта местоположения филиалов компании.


## Технологии
- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP
- **База данных:** MySQL
- **Управление версиями:** Git

## Установка и запуск
### 1. Клонируйте репозиторий: ###
    git clone https://github.com/AlexBond266/remzavod-website.git

### 2. Импортируйте базу данных на хостинг ###

В панели управления Вашего хостинга откройте ISP Manager, перейдите в раздел "Базы данных", создайте новую базу данных, перейдите в PHPMyAdmin, выполните импорт файла "remzavodstankovdb.xml".
Настройте базу данных и заполните необходимой информацией.

_Т.к. целевая организация обладала небольшим количеством едениц продукции - хранение фото продукции происходит следующим образом:_
_В БД хранится текстовая информация о продукции. Фотографии, соответствующие конкретному экземпляру, расположены в папках по принципу "id == 7  -->  .../img/products/7/"_


### 3. Пропишите данные для подключения веб-сайта к БД ###

В файле .../php/database.php заполните данные для подключения к БД.
Пример:

    $servername = "localhost";
    $username = "remzavodstankovdb";
    $password = "12345";
    $dbname = "remzavodstankovdb";

### 4. Настройте отправку данных из формы обратной связи на целевой mail ###

Для отправки данных используется _[PHPMailer](https://github.com/PHPMailer/PHPMailer)_.
Настройте файл .../php/mail.php под собственные нужды, основываясь на инструкции в репозитории библиотеки.

Узнайте у специалистов службы поддержки корректный абсолютный путь до Ваших файлов в файловом пространстве сервера.
Подкорректируйте данные об абсолютном пути на основе полученной информации в файлах mail.php и getProductsImg.php.
Пример:

    require_once('/var/www/data/www/remzavodstankov.ru/php/phpmailer/PHPMailerAutoload.php');

## Лицензия
Этот проект лицензирован на условиях MIT License - см. файл [LICENSE](LICENSE) для подробностей.
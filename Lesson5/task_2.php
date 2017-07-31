<?php
/*
Задача 2
Создайте функцию MainMenu() с двумя аргументами.
Первый аргумент $menu - в него будет передаваться массив, содержащий структуру меню
Второй аргумент $type со значением по умолчанию равным true. 
Данный параметр указывает, каким образом будет отрисовано меню -
вертикально или горизонтально.
Измените код таким образом, чтобы меню отрисовывалось в зависимости от 
входящего параметра $type - либо вертикально, либо горизонтально
Отрисуйте оба таких меню.
*/
?>
<?php
header('content-type:text/html;charset=utf-8');
?>
<?php
$data = 'a:11:{i:1;O:8:"stdClass":11:{s:2:"id";s:1:"1";s:3:"url";s:0:"";s:7:"menu_id";s:1:"1";s:8:"position";s:1:"1";s:7:"visible";s:1:"1";s:11:"last_modify";s:19:"2016-06-16 07:08:09";s:4:"name";s:14:"Главная";s:10:"meta_title";s:21:"Хиты продаж";s:13:"meta_keywords";s:21:"Хиты продаж";s:16:"meta_description";s:273:"Этот магазин является демонстрацией скрипта интернет-магазина  Okay . Все материалы на этом сайте присутствуют исключительно в демострационных целях.";s:11:"description";s:312:"<p>Этот магазин является демонстрацией скрипта интернет-магазина <a href="http://okay-cms.com">Okay</a>. Все материалы на этом сайте присутствуют исключительно в демострационных целях.</p>";}i:4;O:8:"stdClass":11:{s:2:"id";s:1:"4";s:3:"url";s:4:"blog";s:7:"menu_id";s:1:"1";s:8:"position";s:1:"2";s:7:"visible";s:1:"1";s:11:"last_modify";s:19:"2016-06-16 07:08:09";s:4:"name";s:8:"Блог";s:10:"meta_title";s:8:"Блог";s:13:"meta_keywords";s:8:"Блог";s:16:"meta_description";s:0:"";s:11:"description";s:0:"";}i:3;O:8:"stdClass":11:{s:2:"id";s:1:"3";s:3:"url";s:8:"dostavka";s:7:"menu_id";s:1:"1";s:8:"position";s:1:"3";s:7:"visible";s:1:"1";s:11:"last_modify";s:19:"2016-06-16 07:08:09";s:4:"name";s:16:"Доставка";s:10:"meta_title";s:16:"Доставка";s:13:"meta_keywords";s:16:"Доставка";s:16:"meta_description";s:16:"Доставка";s:11:"description";s:3602:"<h2>Курьерская доставка по&nbsp;Москве</h2><p>Курьерская доставка осуществляется на следующий день после оформления заказа<span style="margin-right: -0.2em;">,</span><span style="margin-left: 0.2em;"> </span>если товар есть в&nbsp;наличии. Курьерская доставка осуществляется в&nbsp;пределах Томска и&nbsp;Северска ежедневно с&nbsp;10.00 до&nbsp;21.00. Заказ на&nbsp;сумму свыше 300 рублей доставляется бесплатно. <br /><br />Стоимость бесплатной доставки раcсчитывается от&nbsp;суммы заказа с&nbsp;учтенной скидкой. В&nbsp;случае если сумма заказа после применения скидки менее 300р<span style="margin-right: -0.2em;">,</span><span style="margin-left: 0.2em;"> </span>осуществляется платная доставка. <br /><br />При сумме заказа менее 300 рублей стоимость доставки составляет от 50 рублей.</p><h2>Самовывоз</h2><p>Удобный<span style="margin-right: -0.2em;">,</span><span style="margin-left: 0.2em;"> </span>бесплатный и быстрый способ получения заказа.<br />Адрес офиса: Москва<span style="margin-right: -0.2em;">,</span><span style="margin-left: 0.2em;"> </span>ул. Арбат<span style="margin-right: -0.2em;">,</span><span style="margin-left: 0.2em;"> </span>1/3<span style="margin-right: -0.2em;">,</span><span style="margin-left: 0.2em;"> </span>офис 419.</p><h2>Доставка с&nbsp;помощью предприятия<span style="margin-right: 0.44em;"> </span><span style="margin-left: -0.44em;">&laquo;</span>Автотрейдинг&raquo;</h2><p>Удобный и быстрый способ доставки в крупные города России. Посылка доставляется в офис<span style="margin-right: 0.44em;"> </span><span style="margin-left: -0.44em;">&laquo;</span>Автотрейдинг&raquo; в&nbsp;Вашем городе. Для получения необходимо предъявить паспорт и&nbsp;номер грузовой декларации<span style="margin-right: 0.3em;"> </span><span style="margin-left: -0.3em;">(</span>сообщит наш менеджер после отправки). Посылку желательно получить в&nbsp;течение 24 часов с&nbsp;момента прихода груза<span style="margin-right: -0.2em;">,</span><span style="margin-left: 0.2em;"> </span>иначе компания<span style="margin-right: 0.44em;"> </span><span style="margin-left: -0.44em;">&laquo;</span>Автотрейдинг&raquo; может взыскать с Вас дополнительную оплату за хранение. Срок доставки и стоимость Вы можете рассчитать на сайте компании.</p><h2>Наложенным платежом</h2><p>При доставке заказа наложенным платежом с помощью<span style="margin-right: 0.44em;"> </span><span style="margin-left: -0.44em;">&laquo;</span>Почты России&raquo;, вы&nbsp;сможете оплатить заказ непосредственно в&nbsp;момент получения товаров.</p>";}i:2;O:8:"stdClass":11:{s:2:"id";s:1:"2";s:3:"url";s:6:"oplata";s:7:"menu_id";s:1:"1";s:8:"position";s:1:"4";s:7:"visible";s:1:"1";s:11:"last_modify";s:19:"2016-06-16 07:08:09";s:4:"name";s:12:"Оплата";s:10:"meta_title";s:12:"Оплата";s:13:"meta_keywords";s:12:"Оплата";s:16:"meta_description";s:12:"Оплата";s:11:"description";s:4298:"<h2><span>Наличными курьеру</span></h2><p>Вы можете оплатить заказ курьеру в рублях непосредственно в момент доставки. Курьерская доставка осуществляется по Москве на следующий день после принятия заказа.</p><h2>Яндекс.Деньги</h2><p><span>Яндекс</span><span>.</span><span>Деньги</span><span>&nbsp;&mdash; доступный и безопасный способ платить за товары и услуги через интернет</span>.</p><h2>Банковская карта</h2><p><span>Оплата банковской картой Visa или MasterCard через систему Яндекс.Деньги.</span></p><h2>Через терминал</h2><p><span>Оплатите наличными через многочисленные терминалы в любом городе России. Можно заплатить и с банковской карты через многие банкоматы. Для этого найдите в меню терминала или банкомата логотип Яндекса и укажите код платежа.</span></p><h2>Со счета мобильного телефона</h2><p><span>Оплата со&nbsp;счета мобильного телефона&nbsp;через систему Яндекс.Деньги.</span></p><h2>Webmoney</h2><p>После оформления заказа вы сможете перейти на сайт webmoney для оплаты заказа, где сможете оплатить заказ в автоматическом режиме, а так же проверить наш сертификат продавца.</p><h2>Квитанция</h2><p><span>Вы можете распечатать квитанцию и оплатить её в любом отделении банка.</span></p><h2>Робокасса</h2><p><span>ROBOKASSA &ndash; сервис для организации приема платежей на сайте, интернет магазине и социальных сетях. Прием платежей осуществляется при минимальных комиссиях.</span></p><h2>PayPal</h2><p><span>Совершайте покупки безопасно, без раскрытия информации о своей кредитной карте. PayPal защитит вас, если возникнут проблемы с покупкой.</span></p><h2>Оплата через Интеркассу</h2><p><span>Это удобный в использовании сервис, подключение к которому позволит Интернет-магазинам, веб-сайтам и прочим торговым площадкам принимать все возможные формы оплаты в максимально короткие сроки.</span></p><h2>Оплата картой через Liqpay.com</h2><p><span>Благодаря своей открытости и универсальности LiqPAY стремительно интегрируется со многими платежными системами и платформами и становится стандартом платежных операций.</span></p><h2>Оплата через Pay2Pay</h2><p><span>Универсальный платежный сервис Pay2Pay призван облегчить и максимально упростить процесс приема электронных платежей на Вашем сайте. Мы открыты для всего нового и сверхсовременного.</span></p><h2>Оплатить через QIWI</h2><p><span>QIWI &mdash; удобный сервис для оплаты повседневных услуг.</span></p><h2><span style="font-size: 20px;">Наличными в офисе Автолюкса</span></h2><p>При доставке заказа системой Автолюкс, вы сможете оплатить заказ в их офисе непосредственно в момент получения товаров.</p>";}i:5;O:8:"stdClass":11:{s:2:"id";s:1:"5";s:3:"url";s:3:"404";s:7:"menu_id";s:1:"2";s:8:"position";s:1:"5";s:7:"visible";s:1:"1";s:11:"last_modify";s:19:"2016-06-27 11:05:14";s:4:"name";s:36:"Страница не найдена";s:10:"meta_title";s:36:"Страница не найдена";s:13:"meta_keywords";s:36:"Страница не найдена";s:16:"meta_description";s:211:"404  
  Страница не найдена  
 
 
  Попробуйте посмотреть еще:  
   Главная   
   Блог   
   Оплата   
   Доставка   
   Контакты";s:11:"description";s:1036:"<div class="col-sm-12 col-md-6 text-center">
<div><span style="color: #56b9ff; font-size: 150px;">404</span></div>
<div><span style="font-size: 36pt;">Страница не найдена</span></div>
</div>
<div class="col-sm-12 col-md-6">
<div style="text-align: center;"><span style="font-size: 18pt;">Попробуйте посмотреть еще:</span></div>
<div style="text-align: center;"><span style="font-size: 24pt;"><a href="../">Главная</a></span></div>
<div style="text-align: center;"><span style="font-size: 24pt;"><a href="../blog">Блог</a></span></div>
<div style="text-align: center;"><span style="font-size: 24pt;"><a href="oplata">Оплата</a></span></div>
<div style="text-align: center;"><span style="font-size: 24pt;"><a href="../dostavka">Доставка</a></span></div>
<div style="text-align: center;"><span style="font-size: 24pt;"><a href="../contact">Контакты</a></span></div>
<div style="text-align: center;">&nbsp;</div>
</div>
<div class="clearfix">&nbsp;</div>";}i:8;O:8:"stdClass":11:{s:2:"id";s:1:"8";s:3:"url";s:6:"brands";s:7:"menu_id";s:1:"1";s:8:"position";s:1:"6";s:7:"visible";s:1:"1";s:11:"last_modify";s:19:"2016-06-16 07:08:09";s:4:"name";s:12:"Бренды";s:10:"meta_title";s:12:"Бренды";s:13:"meta_keywords";s:12:"Бренды";s:16:"meta_description";s:0:"";s:11:"description";s:0:"";}i:7;O:8:"stdClass":11:{s:2:"id";s:1:"7";s:3:"url";s:12:"all-products";s:7:"menu_id";s:1:"2";s:8:"position";s:1:"7";s:7:"visible";s:1:"1";s:11:"last_modify";s:19:"2015-11-18 08:32:22";s:4:"name";s:19:"Все товары";s:10:"meta_title";s:19:"Все товары";s:13:"meta_keywords";s:19:"Все товары";s:16:"meta_description";s:0:"";s:11:"description";s:0:"";}i:6;O:8:"stdClass":11:{s:2:"id";s:1:"6";s:3:"url";s:7:"contact";s:7:"menu_id";s:1:"1";s:8:"position";s:1:"8";s:7:"visible";s:1:"1";s:11:"last_modify";s:19:"2017-05-31 09:46:59";s:4:"name";s:16:"Контакты";s:10:"meta_title";s:16:"Контакты";s:13:"meta_keywords";s:16:"Контакты";s:16:"meta_description";s:16:"Контакты";s:11:"description";s:99:"<p>Москва, ул. Космонавта Волкова 14.</p>
<p>Телефон 777-15-51</p>";}i:10;O:8:"stdClass":11:{s:2:"id";s:2:"10";s:3:"url";s:10:"discounted";s:7:"menu_id";s:1:"2";s:8:"position";s:2:"10";s:7:"visible";s:1:"1";s:11:"last_modify";s:19:"2016-07-12 14:11:51";s:4:"name";s:31:"Акционные товары";s:10:"meta_title";s:31:"Акционные товары";s:13:"meta_keywords";s:31:"Акционные товары";s:16:"meta_description";s:0:"";s:11:"description";s:0:"";}i:11;O:8:"stdClass":11:{s:2:"id";s:2:"11";s:3:"url";s:11:"bestsellers";s:7:"menu_id";s:1:"2";s:8:"position";s:2:"11";s:7:"visible";s:1:"1";s:11:"last_modify";s:19:"2016-07-12 14:10:22";s:4:"name";s:21:"Хиты продаж";s:10:"meta_title";s:21:"Хиты продаж";s:13:"meta_keywords";s:21:"Хиты продаж";s:16:"meta_description";s:0:"";s:11:"description";s:0:"";}i:12;O:8:"stdClass":11:{s:2:"id";s:2:"12";s:3:"url";s:4:"news";s:7:"menu_id";s:1:"1";s:8:"position";s:2:"12";s:7:"visible";s:1:"1";s:11:"last_modify";s:19:"2017-05-15 13:33:35";s:4:"name";s:14:"Новости";s:10:"meta_title";s:14:"Новости";s:13:"meta_keywords";s:14:"Новости";s:16:"meta_description";s:0:"";s:11:"description";s:0:"";}}';

$menu = unserialize($data);

?>

<?php
function mainMenu($menu, $type = true) {
    if ($type) {
        echo "<ul class='true'>";
        foreach ($menu as $value) {
            echo "<li class='trueHorisontal'>" . "<a class='button button-primary' >" . $value->name . "</a>" . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<ul class='false'>";
        foreach ($menu as $value) {
            echo "<li class='falseVertical'>" . "<a class='button button-primary' >" . $value->name .  "</a>" . "</li>";
        }
        echo "<ul>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>OkaY</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FONT
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

    <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/normalize.css">


</head>
<body>

<!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<header>
    <div class="container">
        <div class="row">
            <?php
                mainMenu($menu);
                mainMenu($menu, false);
            ?>
        </div>
    </div>
</header>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>


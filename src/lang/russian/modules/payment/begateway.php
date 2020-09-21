<?php
/* -----------------------------------------------------------------------------------------
   VaM Shop - open source ecommerce solution
   http://vamshop.ru
   http://vamshop.com

   Copyright (c) 2007 VaM Shop
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(moneyorder.php,v 1.8 2003/02/16); www.oscommerce.com
   (c) 2003	 nextcommerce (moneyorder.php,v 1.4 2003/08/13); www.nextcommerce.org
   (c) 2004	 xt:Commerce (webmoney.php,v 1.4 2003/08/13); xt-commerce.com

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

define('MODULE_PAYMENT_BEGATEWAY_TEXT_TITLE', 'BeGateway');
define('MODULE_PAYMENT_BEGATEWAY_TEXT_PUBLIC_TITLE', 'Оплата онлайн');
define('MODULE_PAYMENT_BEGATEWAY_TEXT_ADMIN_DESCRIPTION', 'Модуль оплаты BeGateway.');
define('MODULE_PAYMENT_BEGATEWAY_TEXT_DESCRIPTION', 'После нажатия кнопки Подтвердить заказ Вы перейдёте на сайт платёжной системы для оплаты заказа, после оплаты Ваш заказ будет выполнен.');

define('MODULE_PAYMENT_BEGATEWAY_STATUS_TITLE' , 'Разрешить модуль BeGateway');
define('MODULE_PAYMENT_BEGATEWAY_STATUS_DESC' , 'Вы хотите разрешить использование модуля при оформлении заказов?');
define('MODULE_PAYMENT_BEGATEWAY_ALLOWED_TITLE' , 'Разрешённые страны');
define('MODULE_PAYMENT_BEGATEWAY_ALLOWED_DESC' , 'Укажите коды стран, для которых будет доступен данный модуль (например RU,DE (оставьте поле пустым, если хотите что б модуль был доступен покупателям из любых стран))');
define('MODULE_PAYMENT_BEGATEWAY_ID_TITLE' , 'ID магазина');
define('MODULE_PAYMENT_BEGATEWAY_ID_DESC' , 'Укажите идентификационныый номер магазина, указанный в настройках на сайте вашего провайдера платежей.');
define('MODULE_PAYMENT_BEGATEWAY_SORT_ORDER_TITLE' , 'Порядок сортировки');
define('MODULE_PAYMENT_BEGATEWAY_SORT_ORDER_DESC' , 'Порядок сортировки модуля.');
define('MODULE_PAYMENT_BEGATEWAY_ZONE_TITLE' , 'Зона');
define('MODULE_PAYMENT_BEGATEWAY_ZONE_DESC' , 'Если выбрана зона, то данный модуль оплаты будет виден только покупателям из выбранной зоны.');
define('MODULE_PAYMENT_BEGATEWAY_SECRET_KEY_TITLE' , 'Секретный ключ магазина');
define('MODULE_PAYMENT_BEGATEWAY_SECRET_KEY_DESC' , 'В данной опции укажите секретный ключ магазина, указанный в настройках на сайте вашего провайдера платежей.');
define('MODULE_PAYMENT_BEGATEWAY_ORDER_STATUS_ID_TITLE' , 'Укажите оплаченный статус заказа');
define('MODULE_PAYMENT_BEGATEWAY_ORDER_STATUS_ID_DESC' , 'Укажите оплаченный статус заказа.');
define('MODULE_PAYMENT_BEGATEWAY_TEST_MODE_DESC' , 'Укажите режим работы модуля.');
define('MODULE_PAYMENT_BEGATEWAY_TEST_MODE_TITLE' , 'Если выбрано значение True, то возможна оплата только тестовыми данными.');
define('MODULE_PAYMENT_BEGATEWAY_CHECKOUT_URL_DESC' , 'Укажите домен платежной страницы.');
define('MODULE_PAYMENT_BEGATEWAY_CHECKOUT_URL_TITLE' , 'В данной опции укажите домен платежной старницы вашего провайдера платежей.');
define('MODULE_PAYMENT_BEGATEWAY_TRANSACTION_TYPE_DESC' , 'Использовать тип опреации Авторизация.');
define('MODULE_PAYMENT_BEGATEWAY_TRANSACTION_TYPE_TITLE' , 'Если выбрано значение True, то деньги у плательщика будут только блокироваться, но не списываться на расчетный счёт.');
define('MODULE_PAYMENT_BEGATEWAY_ORDER_DESC' , 'Заказ');

?>

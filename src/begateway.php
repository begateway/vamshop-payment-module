<?php
/*------------------------------------------------------------------------------
   VaM Shop - open source ecommerce solution
   http://vamshop.ru
   http://vamshop.com

   Copyright (c) 2007 VaM Shop
  -----------------------------------------------------------------------------
   based on:
   (c) 2005 Vetal (robox.php,v 1.48 2003/05/27); metashop.ru

  Released under the GNU General Public License
------------------------------------------------------------------------------*/
require('includes/application_top.php');
require (DIR_WS_CLASSES.'order.php');
require_once (DIR_FS_INC.'vam_send_answer_template.inc.php');
include_once(DIR_FS_CATALOG . 'includes/external/begateway-api-php/lib/BeGateway.php');

// logging

//$fp = fopen('begateway.log', 'a+');
//$str=date('Y-m-d H:i:s').' - ';
//foreach ($_REQUEST as $vn=>$vv) {
//  $str.=$vn.'='.$vv.';';
//}

//fwrite($fp, $str."\n");
//fclose($fp);

// variables prepearing

$webhook = new \BeGateway\Webhook();
\BeGateway\Settings::$shopId = MODULE_PAYMENT_BEGATEWAY_ID;
\BeGateway\Settings::$shopKey = MODULE_PAYMENT_BEGATEWAY_SECRET_KEY;

if (!$webhook->isAuthorized()) {
  die('NOT AUTHORIZED');
}

$order_id = $webhook->getResponse()->transaction->tracking_id;
$order = new order($order_id);

if (!isset($order)) {
  die('ERROR TO LOAD ORDER');
}

// checking and handling
if ($webhook->isSuccess()) {
  $order_sum = number_format($order->info['total'],2,'.','');
  $curr_check = vam_db_query("select currency from " . TABLE_ORDERS . " where orders_id = '" . (int)$order_id . "'");
  $curr = vam_db_fetch_array($curr_check);

  $money = new \BeGateway\Money;
  $money->setCurrency($curr['currency']);
  $money->setAmount($order_sum);

  if ($webhook->getResponse()->transaction->currency == $money->getCurrency() &&
      $webhook->getResponse()->transaction->amount == $money->getCents() ) {


    $sql_data_array = array('orders_status' => MODULE_PAYMENT_BEGATEWAY_ORDER_STATUS_ID);
    vam_db_perform('orders', $sql_data_array, 'update', "orders_id='".$order_id."'");

    $comment = 'Payment accepted for this order. UID: ' . $webhook->getUid() . '.';
    if ($webhook->isTest()) {
      $comment = '*** Test mode *** ' . $comment;
    }

    $sql_data_arrax = array('orders_id' => $order_id,
                            'orders_status_id' => MODULE_PAYMENT_BEGATEWAY_ORDER_STATUS_ID,
                            'date_added' => 'now()',
                            'customer_notified' => '0',
                            'comments' => $comment );
    vam_db_perform('orders_status_history', $sql_data_arrax);

    echo 'OK'.$order_id;

  	//Send answer template
  	vam_send_answer_template($xml->order_id,MODULE_PAYMENT_BEGATEWAY_ORDER_STATUS_ID,'on','on');

  }
}
?>

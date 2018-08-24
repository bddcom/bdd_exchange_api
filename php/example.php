<?php

include 'common.php';

$base_url = 'http://api.patinfo.cn';

//$result = http_get_data($base_url . '/public/server-time');
//$result = http_get_data($base_url . '/public/currencies');
//$result = http_get_data($base_url . '/public/markets');

#market.deals
//$data = array(
//    'market'=>'ETHUSDT',
//    'before' => 0,
//    'limit' => 20,
//);
//$result = http_get_data($base_url . '/market/deals', $data);

#market.ticker
//$data = array(
//    'market'=>'ETHUSDT',
//);
//$result = http_get_data($base_url . '/market/ticker', $data);

#market.depth
//$data = array(
//    'market'=>'ETHUSDT',
//    'level' => 'L20',
//    'merge' => '0.01'
//);
//$result = http_get_data($base_url . '/market/depth', $data);

$appkey = 'd9da98eace514a408460de2309c36174';
$appsecret = '76fa6ebc2bdb4cacbc8d37d066cec3ee';

#account.balance
//$data = array(
//    'time' => 1533020283,//time(),
//    'appkey' => $appkey,
//);
//$signature = gen_sign($data, $appsecret);
//$result = http_get_data($base_url . '/account/balance', $data, $signature);


#order.create_order->limit
//$data = array(
//    'time'      => time(),
//    'appkey'    => $appkey,
//    'market'    => 'ETHUSDT',
//    'side'      => 'buy',
//    'type'      => 'limit', 
//    'price'     => '32.00',
//    'amount'    => '1'
//);  
//$signature = gen_sign($data, $appsecret);
//$result = http_get_data($base_url . '/orders/create_order', $data, $signature);

#order.create_order->market
//$data = array(
//    'time'      => time(),
//    'appkey'    => $appkey,
//    'market'    => 'ETHUSDT',
//    'side'      => 'sell',
//    'type'      => 'market', 
//    'amount'    => '1'
//);  
//$signature = gen_sign($data, $appsecret);
//$result = http_get_data($base_url . '/orders/create_order', $data, $signature);

#order.list
//$data = array(
//    'time'      => time(),
//    'appkey'    => $appkey,
//    'market'    => 'ETHUSDT',
//    'states'     => 'submitted',
//);  
//$signature = gen_sign($data, $appsecret);
//$result = http_get_data($base_url . '/orders/list', $data, $signature);

#order.cancel
//$data = array(
//    'time'      => time(),
//    'appkey'    => $appkey,
//    'market'    => 'ETHUSDT',
//    'order_id'     => 259,
//);  
//$signature = gen_sign($data, $appsecret);
//$result = http_get_data($base_url . '/orders/cancel', $data, $signature);

#order_detail
$data = array(
    'time'      => time(),
    'appkey'    => $appkey,
    'market'    => 'ETHUSDT',
    'order_id'     => 11,
);  
$signature = gen_sign($data, $appsecret);
$result = http_get_data($base_url . '/orders/order_detail', $data, $signature);

var_dump($result);
//echo '<pre>';
//print_r(json_decode($result, true));

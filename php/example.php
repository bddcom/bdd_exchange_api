<?php

include 'common.php';

$base_url = 'http://api.patinfo.cn/';

//$result = http_get_data($base_url . 'public.php', array('action' => 'server-time'));
//$result = http_get_data($base_url . 'public.php', array('action' => 'currencies'));
//$result = http_get_data($base_url . 'public.php', array('action' => 'markets'));

#market.trades
//$data = array(
//    'action'=>'trades',
//    'market'=>'ETHUSDT',
//    'before' => 0,
//    'limit' => 20,
//);
//$result = http_get_data($base_url . 'market.php', $data);

#market ticker
//$data = array(
//    'action'=>'ticker',
//    'market'=>'ETHUSDT',
//);
//$result = http_get_data($base_url . 'market.php', $data);

//$data = array(
//    'action'=>'depth',
//    'market'=>'ETHUSDT',
//    'level' => 'L20'
//);
//$result = http_get_data($base_url . 'market.php', $data);


$appkey = 'd9da98eace514a408460de2309c36174';
//$appkey = 'd9da98eace514a408460de2309c36175';
$appsecret = '76fa6ebc2bdb4cacbc8d37d066cec3ee';

# balance
$data = array(
    'time' => 1533020283,//time(),
    'appkey' => $appkey,
    'action' => 'balance',
);
echo '<pre>';
$data['signature'] = gen_sign($data, $appsecret);
print_r($data);
$result = http_get_data($base_url . 'accounts.php', $data);

#create_order
//$data = array(
//    'time'      => time(),
//    'appkey'    => $appkey,
//    'action'    => 'create_order',
//    'market'    => 'ETHUSDT',
//    'side'      => 'buy',
//    'type'      => 'limit', 
//    'price'     => '32.00',
//    'amount'    => '1'
//);  
//$data['signature'] = gen_sign($data, $appsecret);
//$result = http_get_data($base_url . 'orders.php', $data);

//$data = array(
//    'time'      => time(),
//    'appkey'    => $appkey,
//    'action'    => 'create_order',
//    'market'    => 'ETHUSDT',
//    'side'      => 'sell',
//    'type'      => 'market', 
//    'price'     => '30.00',
//    'amount'    => '1'
//);  
//$data['signature'] = gen_sign($data, $appsecret);
//$result = http_get_data($base_url . 'orders.php', $data);

#orders
//$data = array(
//    'time'      => time(),
//    'appkey'    => $appkey,
//    'action'    => 'list',
//    'market'    => 'ETHUSDT',
//    'states'     => 'submitted',
//);  
//$data['signature'] = gen_sign($data, $appsecret);
//$result = http_get_data($base_url . 'orders.php', $data);
////

////
#cancel order
//$data = array(
//    'time'      => time(),
//    'appkey'    => $appkey,
//    'action'    => 'order_cancel',
//    'market'    => 'ETHUSDT',
//    'order_id'     => 11,
//);  
//$data['signature'] = gen_sign($data, $appsecret);
//$result = http_get_data($base_url . 'orders.php', $data);

////#order_detail
//$data = array(
//    'time'      => time(),
//    'appkey'    => $appkey,
//    'action'    => 'order_detail',
//    'market'    => 'ETHUSDT',
//    'order_id'     => 11,
//);  
//$data['signature'] = gen_sign($data, $appsecret);
//$result = http_get_data($base_url . 'orders.php', $data);

#order_finished_detail
//$data = array(
//    'time'      => time(),
//    'appkey'    => $appkey,
//    'action'    => 'finished_detail',
//    'market'    => 'ETHUSDT',
//    'order_id'  => 1,
//);  
//$data['signature'] = gen_sign($data, $appsecret);
//$result = http_get_data($base_url . 'orders.php', $data);


var_dump($result);
echo '<pre>';
print_r(json_decode($result, true));

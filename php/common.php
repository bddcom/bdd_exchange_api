<?php

#-----------------------function list ---------------------------------------

function http_post_data($url, $data_string = array(), $authorization = '') {
    $ch = curl_init();
    $headers = array('Content-Type: application/json');
    if ($authorization != '') {
        $headers[] = 'Authorization: ' . $authorization;
    }
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    ob_start();
    curl_exec($ch);
    $return_content = ob_get_contents();
    ob_end_clean();
    return $return_content;
}

function http_get_data($url, $arr = array(), $authorization = '') {
    $curl = curl_init();
    $headers = array();
    if ($authorization != '') {
        $headers[] = 'Authorization: ' . $authorization;
    }
    curl_setopt($curl, CURLOPT_URL, $url . '?' . http_build_query($arr));
    curl_setopt($curl, CURLOPT_HEADER, 0);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $data = curl_exec($curl);
    curl_close($curl);
    return $data;
}

/**
 * 生成签名
 * @param array params 签名数据
 * @param string app_key 签名秘钥
 * @return string 签名串
 */
function gen_sign($params, $app_key) {
    ksort($params);
    $str = '';
    foreach ($params as $k => $v) {
        $str .= $k . '=' . $v . '&';
    }
    $str .= 'appsecret=' . $app_key;
    $signature = md5($str);
    return $signature;
}

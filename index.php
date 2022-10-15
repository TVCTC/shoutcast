<?php
//
// example url for testing: https://livestreamserver.000webhostapp.com/shoutcast/?headers_from_stream=http://shoutcast.pondi.hr:8000/
//
$url = $_GET['headers_from_stream'];
$options = array('http' =>
    array(
        'method' => 'GET',
        'user_agent' => 'The Best User Agent Ever',
        'header' => 'Icy-MetaData: 1'
        )
    );
$context = stream_context_create($options);
$headers = get_headers($url, true, $context);
$json = json_encode($headers);
echo $json;
/**
$index = 0;
foreach ($headers as $header => $value) {
    echo $index . ' = ' . trim($header) . ' : ' . trim($value) . '<br/>';
    $index++;
}
*/
?>

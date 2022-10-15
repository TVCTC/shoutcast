<?php
$url = $_GET['get_headers_from_stream'];
$options = array('http' =>
    array(
        'method' => 'GET',
        'user_agent' => 'The Best User Agent Ever',
        'header' => 'Icy-MetaData: 1'
        )
    );
$context = stream_context_create($options);
$headers = get_headers($url, true, $context);
$index = 0;
foreach ($headers as $header => $value) {
    echo $index . ' = ' . trim($header) . ' : ' . trim($value) . '<br/>';
    $index++;
}
$json = json_encode($headers);
?>

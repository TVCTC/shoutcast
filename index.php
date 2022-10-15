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
$headers = get_headers($url, false, $context);
$json = json_encode($headers);
echo $json;
?>

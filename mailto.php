<?php

$secrets = file_get_contents('secrets.json');
$secrets = json_decode($secrets, true);

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($curl, CURLOPT_HEADER, 0);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($curl, CURLOPT_POST, 1);

$post_data = 
[
    'secret' => $secrets['recaptcha-secret-key'],
    'response' => $_POST['response']
];

curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);

$resp = json_decode(curl_exec($curl));

curl_close($curl);

if ($resp->success) {
    echo $secrets['mailto'];
} else {
    echo null;
}
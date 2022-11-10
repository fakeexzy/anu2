<?php
error_reporting(0);
$res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";
$HITAM="\033[40m";
$MERAH="\033[41m";
$HIJAU="\033[42m";
$KUNING="\033[43m";
$BIRU="\033[44m";
$UNGU="\033[45m";
$CYAN="\033[46m";
$PUTIH="\033[47m";
$Off="\033[0m";
system ("clear");

function vpn(){
error_reporting(0);
  $vpn = array(
    "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
    "Accept-Language: en-US,en;q=0.9",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Host: google.com",
    "User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36"
  );

$url = curl_init();
curl_setopt($url, CURLOPT_URL, "https://google.com");
curl_setopt($url, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($url, CURLOPT_HTTPHEADER, $vpn);
curl_setopt($url, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($url, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($url, CURLOPT_SSL_VERIFYHOST, 1);
$result = curl_exec($url);

$json = json_decode($result, true);

$vp = array(
"user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36",
);

if($result ==true){

}else{
global $red;

echo $red."connection error!\n";
die();
}

}

function fetch_value($str,$find_start) {
        $start = @strpos($str,$find_start);
        if ($start === false) {
                return "";
        }
        $length = strlen($find_start);
        $end = strpos(substr($str,$start +$length));
        return trim(substr($str,$start +$length));
}

function url($url){
$headers = array();
$headers[] = "Mozilla/5.0 (Linux; Android 7.1.2; Neffos Y5s) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Mobile Safari/537.36";
$ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      $res = curl_exec($ch);
return $res;
}

error_reporting(0);

$res = url("https://pastebin.com/NzV5Mz3m");
$l1 = explode('Link: ',$res);
$l2 = explode(' ',$l1[1]);
$pw1 = explode('Pass: ',$res);
$pw = explode(' ',$pw1[1]);

$pass = $pw[0];
$read = file_get_contents("pass");

if($pass == "up"){

sleep(1);
//banner
echo $red."
█┼█ ███ ███ ┼┼ ███ ███ █┼█ ██▄ ███ ███
█▄█  ██ █┼█ ┼┼ █▄▄ ┼█┼ █┼█ █┼█ ┼█┼ █┼█
\033[0;37m█┼█ ███ █▄█ ┼┼ ▄▄█ ┼█┼ ███ ███ ▄█▄ █▄█ OFFICIAL";
echo $putih2."\n▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬";
echo $putih2."\n▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬".$yellow."[".date('d-m-Y')."]".$putih2."▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬";
echo $putih2."\n▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬";
echo $green."\n[-] Message  :".$putih." Selamat Datang Tuyulers";
echo $green."\n[!] Server   :".$putih." Online";
echo $green."\n[!] Creator  :".$putih." H20 STUDIO";
echo $green."\n[-] Youtube  :".$putih." H20 STUDIO";
echo $green."\n[-] Whatsapp :".$putih." 085724875555";
echo $green."\n[-] Group    :".$putih." https://bit.ly/3rLuwSe";
echo $putih2."\n▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬";
echo $red2."\n[!] WARNING..!!!";
echo $yellow."\n[-] Ini adalah program ilegal";
echo $yellow."\n[-] Resiko sepenuhnya ditanggung pengguna";
echo $yellow."\n[-] Tidak ada jaminan langsung kaya";
echo $putih2."\n▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";

sleep(1);
echo $putih."silahkan update script ke versi terbaru\n\n";
sleep(1);
echo $putih."link script terbaru: ".$green.$l2[0]."\n\n";
sleep(1);
exit;
}

if ($pass == 'off'){


sleep(1);
//banner
echo $red."
█┼█ ███ ███ ┼┼ ███ ███ █┼█ ██▄ ███ ███
█▄█  ██ █┼█ ┼┼ █▄▄ ┼█┼ █┼█ █┼█ ┼█┼ █┼█
\033[0;37m█┼█ ███ █▄█ ┼┼ ▄▄█ ┼█┼ ███ ███ ▄█▄ █▄█ OFFICIAL";
echo $putih2."\n▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬";
echo $putih2."\n▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬".$yellow."[".date('d-m-Y')."]".$putih2."▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬";
echo $putih2."\n▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬";
echo $green."\n[-] Message  :".$putih." Selamat Tinggal Tuyulers";
echo $green."\n[!] Server   :".$putih." Offline";
echo $green."\n[!] Creator  :".$putih." H20 STUDIO";
echo $green."\n[-] Youtube  :".$putih." H20 STUDIO";
echo $green."\n[-] Whatsapp :".$putih." 085724875555";
echo $green."\n[-] Group    :".$putih." https://bit.ly/3rLuwSe";
echo $putih2."\n▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬";
echo $red2."\n[!] WARNING..!!!";
echo $yellow."\n[-] Ini adalah program ilegal";
echo $yellow."\n[-] Resiko sepenuhnya ditanggung pengguna";
echo $yellow."\n[-] Tidak ada jaminan langsung kaya";
echo $putih2."\n▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";

sleep(1);
echo $putih."Maaf script ini sudah di offkan\n\n";
sleep(1);
exit;
}else{
if($read == $pass){

}else{
$save = fopen("pass", "w");

echo $putih2." WELCOME TO MY SCRIPT
 \033[1;31m░█─░█ █▀█ █▀▀█ 　 ░█▀▀▀█ ▀▀█▀▀ ░█─░█ ░█▀▀▄ ▀█▀ ░█▀▀▀█ 
 ░█▀▀█ ─▄▀ █▄▀█ 　 ─▀▀▀▄▄ ─░█── ░█─░█ ░█─░█ ░█─ ░█──░█ 
 \033[1;37m░█─░█ █▄▄ █▄▄█ 　 ░█▄▄▄█ ─░█── ─▀▄▄▀ ░█▄▄▀ ▄█▄ ░█▄▄▄█\n\n";
sleep(1);
echo $putih2." ▶ Copy link ke browser untuk mengambil password\n";
sleep(1);
echo $putih2." ▶ Link Password: ".$green.$l2[0]."\n\n";

sleep(2);
echo $putih2." ▶ Input Password: ".$hitam;
$psw = trim(fgets(STDIN));

if($psw == $pass){
fwrite($save, $psw);
sleep(2);
echo $green2." ▶ Login Sukses";
fclose($save);
sleep(3);
system("clear");
}else{
sleep(2);
echo $yellow." ▶ login gagal\n\n";
sleep(1);
exit;
}
}
}

echo $red2."◼".$green2." SUBSCRIBE ".$putih2."&".$green2." LIKE ".$putih2."DULU CHANNEL GW TOD\n\n\n";
sleep(2);
system("xdg-open https://www.youtube.com/c/HendarOfficial1");
sleep(6);
echo $red2."◼".$putih2." Silahkan Klik \033[1;32mENTER \033[1;37mUntuk Melanjutkan ";
$kkk = trim(fgets(STDIN));

include "cfg.php";
system ("clear");

//banner
echo $green."
\033[0;31m█┼█ ███ ███ ┼┼ ███ ███ █┼█ ██▄ ███ ███
█▄█  ██ █┼█ ┼┼ █▄▄ ┼█┼ █┼█ █┼█ ┼█┼ █┼█
\033[0;37m█┼█ ███ █▄█ ┼┼ ▄▄█ ┼█┼ ███ ███ ▄█▄ █▄█ \033[0;31mOFFICIAL";
echo $putih2."\n▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬";
echo $putih2."\n▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬".$yellow2."[".date('d-m-Y')."]\033[1;37m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬";
echo $putih2."\n▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬";
echo $green."\n[-] Message  :".$putih." Selamat Datang Tuyulers";
echo $green."\n[!] Server   :".$putih." Online";
echo $green."\n[?] Script   :".$putih." mLike (FB,TIKTOK,IG,YT)";
echo $green."\n[-] Versi    :".$putih." 1.0";
echo $putih2."\n▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬";
echo $green."\n[-] Youtube  :".$putih." H20 STUDIO";
echo $green."\n[-] Whatsapp :".$putih." 085724875555";
echo $green."\n[-] Group    :".$putih." https://bit.ly/3rLuwSe";
echo $putih2."\n▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬";
echo $red2."\n[!] WARNING..!!!";
echo $yellow."\n[-] Ini adalah program ilegal";
echo $yellow."\n[-] Resiko sepenuhnya ditanggung pengguna";
echo $yellow."\n[-] Lebih dari satu sesi dibanned";
echo $putih2."\n▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬";

function timer($tmr)
    {
        $timr = time() + $tmr;
        while (true):
            echo "\r                       \r";
            $res = $timr - time();
            if ($res < 1)
            {
                break;
           }                                                                                        echo $putih2."├─[".$yellow2."!".$putih2."]".$green2." Wait \033[1;37m" . date('H:i:s', $res);
            sleep(1);
        endwhile;
    }

function eco($str){
foreach(str_split($str) as $ne){
echo $ne;
usleep(20000);
}
echo "\n";
}


function ex($awal,$akhir,$inti,$res){
$a=explode($awal,$res);
$b=explode($akhir,$a[$inti]);

return $b[0];
}

$ua = array(
"User-Agent: Dart/2.10 (dart:io)",
"Host: mlikeapiv21.yosarete.com:8092",
"content-type: application/x-www-form-urlencoded; charset=utf-8",
);

$data77 = "country_code=%2B62".$country."&phone=".$nomor."&platform=android";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://mlikeapiv21.yosarete.com:8092/api/user/create");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data77);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$r= curl_exec($ch);


echo "\n";

$data77 = "client_id=2&client_secret=LNY5G0PPCZChAORDV9bNcYwYFNfoBJlWY4hz6jVv&grant_type=password&username=".$nomor."&password=mLikeUser0O%2A%2A";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://mlikeapiv21.yosarete.com:8092/oauth/token");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data77);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$r= curl_exec($ch);
$r = json_decode($r);
$auth = $r->access_token;
$ua = array(
"User-Agent: Dart/2.10 (dart:io)",
"Host: mlikeapiv21.yosarete.com:8092",
"authorization: Bearer ".$auth,
);
$data77 = "";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://mlikeapiv21.yosarete.com:8092/api/user/credit/get/all");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data77);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$r= curl_exec($ch);
$r = json_decode($r);
$poin = $r->credit;

eco($putih2."╭─[".$yellow2."•".$putih2."]──────────────────────────────────────────");
eco($putih2."├─[".$yellow2."!".$putih2."] ".$green2."Account: ".$putih2.$nomor);
eco($putih2."├─[".$yellow2."!".$putih2."] ".$green2."Balance: ".$putih2.$poin);
eco($putih2."├─[".$yellow2."•".$putih2."]──────────────────────────────────────────");


while(true){
$data77 = "";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://mlikeapiv21.yosarete.com:8092/api/user/credit/set/ads");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data77);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$r= curl_exec($ch);
$r = json_decode($r);
$poin1 = $r->credit;

$data77 = "";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://mlikeapiv21.yosarete.com:8092/api/user/credit/get/all");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data77);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$r= curl_exec($ch);
$r = json_decode($r);
$poin = $r->credit;

eco($putih2."├─[".$green2."✓".$putih2."] ".$green2."Claim  : ".$putih2.$poin1);
eco($putih2."├─[".$yellow2."!".$putih2."] ".$green2."Balance: ".$putih2.$poin);
eco($putih2."├─[".$yellow2."•".$putih2."]──────────────────────────────────────────");

if ($poin1==""){
for ($time=3600; $time>0; $time--){
echo "\r                                \r";
echo $putih2."├─[".$yellow2."+".$putih2."]".$green2." Tunggu ".$putih."$time".$green2." detik";
sleep(1);
}
echo "\r                                \r";

}

for ($time=60; $time>0; $time--){
echo "\r                                \r";
echo $putih2."├─[".$yellow2."+".$putih2."]".$green2." Tunggu ".$putih."$time".$green2." detik";
sleep(1);
}
echo "\r                                \r";

}

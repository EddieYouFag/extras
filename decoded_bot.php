if (strpos($i1i, "Obfuscation provided by Unknowndevice64 - Free Online PHP Obfuscator") == false) {
header("Location: http://ud64.com/"); die(); } $ijo = "\e[1;32m";
$kuning = "\e[1;33m";
$merah = "\e[1;31m";
$cyan = "\e[1;36m";
$cyanbg = "\e[0;30;46m";
$merahbg = "\e[0;31;41m";
$color = "\e[0m";
$clear = "\e[H\e[J";
function login($mail, $password) {
	$body = 'email='.$mail.'&password='.$password.'&signin=';
	$ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://my.crypto.ad/login");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $headers = array();
              $headers[] = "user-agent: Mozilla/5.0 (Linux; Android 5.1; B75 Build/LMY47D) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.126 Mobile Safari/537.36";
              $headers[] = "content-type: application/x-www-form-urlencoded";
              $headers[] = "cookie: lang=en";
              $headers[] = "cookie: REMEMBER=";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_COOKIEJAR, 'Cookies');
        curl_setopt($ch, CURLOPT_COOKIEFILE, 'Cookies');
        $result = curl_exec($ch);
        $GLOBALS['logincode'] = curl_getinfo($ch, CURLINFO_HTTP_CODE);
     return $body;
}
function surf() {
	$ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://crypto.ad/surf-ads");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $headers = array();
              $headers[] = "x-requested-with: XMLHttpRequest";
              $headers[] = "user-agent: Mozilla/5.0 (Linux; Android 5.1; B75 Build/LMY47D) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.126 Mobile Safari/537.36";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_COOKIEJAR, 'Cookies');
        curl_setopt($ch, CURLOPT_COOKIEFILE, 'Cookies');
        $result = curl_exec($ch);
        $GLOBALS['surfcode'] = curl_getinfo($ch, CURLINFO_HTTP_CODE);
     return $result;
}
function start() {
	$body = 'task=startVisit';
	$ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://crypto.ad/surf-ads");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $headers = array();
              $headers[] = "x-requested-with: XMLHttpRequest";
              $headers[] = "user-agent: Mozilla/5.0 (Linux; Android 5.1; B75 Build/LMY47D) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.126 Mobile Safari/537.36";
              $headers[] = "content-type: application/x-www-form-urlencoded; charset=UTF-8";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_COOKIEJAR, 'Cookies');
        curl_setopt($ch, CURLOPT_COOKIEFILE, 'Cookies');
        $result = curl_exec($ch);
        $GLOBALS['startcode'] = curl_getinfo($ch, CURLINFO_HTTP_CODE);
     return $result;
}
function visit($a) {
	$ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $a);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $headers = array();
              $headers[] = "x-requested-with: XMLHttpRequest";
              $headers[] = "user-agent: Mozilla/5.0 (Linux; Android 5.1; B75 Build/LMY47D) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.126 Mobile Safari/537.36";
              $headers[] = "content-type: application/x-www-form-urlencoded; charset=UTF-8";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_COOKIEJAR, 'Cookies');
        curl_setopt($ch, CURLOPT_COOKIEFILE, 'Cookies');
        $result = curl_exec($ch);
        $GLOBALS['visitcode'] = curl_getinfo($ch, CURLINFO_HTTP_CODE);
     return $result;
}
function finish() {
	$body = 'task=finishVisit';
	$ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://crypto.ad/surf-ads");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $headers = array();
              $headers[] = "x-requested-with: XMLHttpRequest";
              $headers[] = "user-agent: Mozilla/5.0 (Linux; Android 5.1; B75 Build/LMY47D) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.126 Mobile Safari/537.36";
              $headers[] = "content-type: application/x-www-form-urlencoded; charset=UTF-8";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_COOKIEJAR, 'Cookies');
        curl_setopt($ch, CURLOPT_COOKIEFILE, 'Cookies');
        $result = curl_exec($ch);
        $GLOBALS['finishcode'] = curl_getinfo($ch, CURLINFO_HTTP_CODE);
     return $result;
}
function input() {
	global $ijo;
	global $color;
	global $merahbg;
	echo $ijo."Masukkan email     : ".$color;
	$GLOBALS['rawmail'] = trim(fgets(STDIN));
	echo $ijo."Masukkan password  : ".$color;
	echo $merahbg;
	$GLOBALS['pass'] = trim(fgets(STDIN));
	echo $color."\n";
}

echo "°•°•°•°•°•°•°•°•°•°•°•°•°•°•°•°•°•°•°•°•°•°•°•°•°•°•°•°•°•°\n";
echo $cyan."Script Bot Crypto.ad\n".$color;
echo $kuning."Pemilik       : ".$color."b4dut_1nt3rn3t\n";
echo $kuning."Subscribe     : ".$color."Channel Youtube ".$cyanbg."b4dut 1nt3rn3t\n".$color;
echo $merah."Segala bentuk resiko yang terjadi ditanggung pengguna.\n".$color;
echo "°•°•°•°•°•°•°•°•°•°•°•°•°•°•°•°•°•°•°•°•°•°•°•°•°•°•°•°•°•°\n\n\n";
echo $ijo."Crypto.ad Account Login\n\n".$color;
input();
$email = urlencode($rawmail);
$passwd = urlencode($pass);
exec('rm -rf Cookies');
echo $ijo."Login...\n".$color;
login($email, $passwd);
if ($logincode == 301) {
	echo $kuning."Login berhasil 😆\n\n".$color;
	echo $kuning."📟Bot mulai berjalan...\n\n".$color;
	do {
       surf();
       if ($surfcode == 200) {
       	$start = start();
           $start = json_decode($start, true);
           $status = $start['success'];
           if ($status == true) {
           	$rawurl = $start['url'];
               $url = str_replace('\\', '', $rawurl);
               $sec = $start['seconds'];
               $visit = visit($url);
               echo "[".gmdate('H:i:s', time() + (60 * 60 * 7))."]".$ijo."Visit website selama $sec detik.\n".$color;
               sleep($sec);
               $hasil = finish();
               $hasil = json_decode($hasil, true);
               $statusfinish = $hasil['success'];
               $reward = $hasil['reward'];
               if ($statusfinish == true) {
               	echo "[".gmdate('H:i:s', time() + (60 * 60 * 7))."]".$kuning."😆Success! Kamu dapat $reward coin.\n\n".$color;
               } else {
                   echo "[".gmdate('H:i:s', time() + (60 * 60 * 7))."]".$merah."😩Failed! Kamu gagal dapat reward.\n\n".$color;
               }
           } else {
           	echo $merah."⚠Error!⚠\n".$color;
               echo $cyan."Sebab  : • Gagal bypass captcha\n".$color;
               echo $cyan."         • Limit harian\n".$color;
               echo $cyan."Solusi : ".$color.$kuning."• Login akun menggunakan browser\n".$color;
               echo $kuning."         • Jika ada captcha, selesaikan captcha\n".$color;
               echo $kuning."         • Jika captcha selesai, jalankan script lagi\n".$color;
               echo $kuning."         • Jika tidak ada captcha, cek limit surf-ads\n".$color;
               echo $kuning."         • Jika sudah limit, coba lagi besok\n\n".$color;
               echo $cyan."SCRIPT INI AKAN SEGERA DIUPDATE UNTUK BYPASS CAPTCHA\nSUBSCRIBE CHANNEL ".$color.$cyanbg."b4dut 1nt3rn3t".$color.$cyan." AGAR TIDAK KETINGGALAN UPDATE\n".$color;
               exit(0);
           }
       } else {
       	echo $merah."⛔Koneksi gagal!⛔\n".$color;
           echo $cyan."📴Mungkin jaringan internetmu error📴\n".$color;
           exit(0);
       }
    } while ($status == true);
} else {
	echo $merah."Login gagal!\n".$color;
	echo $cyan."❌Mungkin kamu salah email atau password.❌\n".$color;
	echo $cyan."📴Atau mungkin jaringan internetmu error📴\n".$color;
	exec('rm -rf Cookies');
	exit(0);
}

## I Removed Banner Beacuse color code was with auto execution

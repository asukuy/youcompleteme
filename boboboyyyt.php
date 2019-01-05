<?php
set_time_limit(100);
error_reporting(0);
ignore_user_abort(1);
session_start();
require_once('fungsi.php');
$TimeZone="+7";
$_time=gmdate("H", time() + ($TimeZone * 60 * 60));


$give00 = array('cookies' => 'ds_user=giveaway_followers2019;shbid=5680;shbts=1546477190.8116298;rur=PRN;mid=XC1ehQABAAGXBfn2dDENDG3ad_XF;ds_user_id=4086217582;urlgen="{\"182.1.70.41\": 23693}:1gerMU:p0ZL9pboc_nIDIpOWX8c_l_xUNM";sessionid=IGSCa7e353212ebbd68b05ff4365f85a42a9d1920fb8e0ef4b2f59fee95e6b730027%3AN4VrlJufG9Yy7XMDWJQKrjdTIDBlx132%3A%7B%22_auth_user_id%22%3A4086217582%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%224086217582%3AwlzCtVBgrrqO0sbWn1PWryneWWeyVdsy%3A689b5c53f2bbeacf199ceea1e3fe3463066672aac39af66bd30c848dfe33a345%22%2C%22last_refreshed%22%3A1546477190.8196716309%7D;mcd=3;csrftoken=2Uxqdy1yzgtplI1S1Zyc1d1tEwfzsJfT;', 'useragent' => 'Instagram 6.22.0 Android (11/2.4.2; 160; 1280x720; samsung; GT-I9100; GT-I9100; smdkc210; en_US)', 'device_id' => 'android-ed57844fa5e051809ead5aa7e3e1d5557', 'username' => 'giveaway_followers2019', 'id' => '4086217582');

$give001 =  array('cookies' => 'ds_user=giveawayfolls001;shbid=2541;shbts=1546334553.133984;rur=FTW;mid=XCsxWAABAAHFWeYJpqt9XKiQWdsN;ds_user_id=5412567458;urlgen="{\"182.0.199.150\": 23693}:1geGFt:QCv90POpPvX0p-nMflPg7m7IsB4";sessionid=IGSC4bd6b93a4035a0c028a1f0ccd3eb0638d7103883789ced62fbba553919fc3ecc%3AehYlqev702l4mJtKVSgH1F9jMrlxYl8y%3A%7B%22_auth_user_id%22%3A5412567458%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%225412567458%3A9zwi3WoV6v3IKm4ZB4bVvXMZfh0mpeS0%3A87096c875e46c9fc1f5a2a0015c7ad66546a1a4b5deb4ce765d6fe1caa91b681%22%2C%22last_refreshed%22%3A1546334553.146402359%7D;mcd=3;csrftoken=JAgPJEZkYtRAonPe33WuJCVeNouUksHN;', 'useragent' => 'Instagram 6.22.0 Android (10/1.3.2; 320; 1280x720; samsung; GT-N7000; GT-N7000; smdkc210; en_US)', 'device_id' => 'android-63c17d596f401acb520efe4a2a7a01ee4', 'username' => 'giveawayfolls001', 'id' => '5412567458');

$give002 = array('cookies' => 'ds_user=giveawayfolls002;rur=FTW;mid=XCsxiQABAAGN3tuARL1siP6p_37h;ds_user_id=5791387103;urlgen="{\"182.0.199.150\": 23693}:1geGGf:d8RANeb5kDiTjxqEkezVf_08xg4";sessionid=IGSC025d24a5cd77856c65c011aae7c44eaccf05c897d76b3bff0bca62efaa9f8212%3AvyMXpu78uGiNjS2Dn1C32LkMMdtTMTIu%3A%7B%22_auth_user_id%22%3A5791387103%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%225791387103%3ApYdr6OsaRY9VUkm222lFthpYsSkeZ5yX%3Ab13bdef54c6e4ef09829e2b9463fe0cc6ecdfb377bd9f19531b2496879fba224%22%2C%22last_refreshed%22%3A1546334601.8954234123%7D;mcd=3;csrftoken=7JUW6jNzzRwRm44tK9PLkpteV8aqrM4F;', 'useragent' => 'Instagram 6.22.0 Android (10/2.3.5; 160; 1080x1920; samsung; GT-N7000; GT-N7000; smdkc210; en_US)', 'device_id' => 'android-f0bf4a2da952528910047c31b6c2e9516', 'username' => 'giveawayfolls002', 'id' => '5791387103');


$give003 = array('cookies' => 'ds_user=giveawayfolls003;shbid=11987;shbts=1546334638.264781;rur=FRC;mid=XCsxrQABAAGhr3F1k9yM0vGbnx2L;ds_user_id=5400704946;urlgen="{\"182.0.211.234\": 23693}:1geGHG:j272rWuSsR0GZU8IEDf_SXoABtE";sessionid=IGSCf86ca20df402e17a477a315711ce8d5d85b7d6e2a96942af57347ba819878cbb%3AUSIuFnj4bNRIVkGASATd8ajpw49ftUYp%3A%7B%22_auth_user_id%22%3A5400704946%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%225400704946%3AgsNC7RydrGX3q6t7tYRXVF30rUl8bcjG%3A6f3e136de3926c6feb83fc38c94b117d98c68100eea74a56a71db40ea8ad2d03%22%2C%22last_refreshed%22%3A1546334638.2730226517%7D;mcd=3;csrftoken=kRkrOMrd5n4jfyUPxcToBvIktq7WTuN8;', 'useragent' => 'Instagram 6.22.0 Android (11/2.4.5; 320; 1024x768; samsung; SM-N9000; SM-N9000; smdkc210; en_US)', 'device_id' => 'android-00430c0c1fae276c9713ab5f211678825', 'username' => 'giveawayfolls003', 'id' => '5400704946');

$give004 = array('cookies' => 'ds_user=giveawayfolls004;shbid=7956;shbts=1546334706.0513833;rur=FTW;mid=XCsx8QABAAEubit31WThMLpuT7iN;ds_user_id=3230620628;urlgen="{\"182.0.199.150\": 23693}:1geGIM:JjKG33o_SLOPahQNk4OLho_PLY4";sessionid=IGSC82f39cf7a8eeb4c3419c38f131757c9401e057b90c6ff84eed87b8848df5624d%3AvdKs9jQ9K59hxz9EV0VhCgmUB8h3w0cu%3A%7B%22_auth_user_id%22%3A3230620628%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%223230620628%3A125NVG8vonpwVCYkqttGLmakqa04MgEj%3A609f546159fedcfaac68207d2360dc869c24d45c5b4f63b1ef50c6a47cfd7ad8%22%2C%22last_refreshed%22%3A1546334706.0634410381%7D;mcd=3;csrftoken=55HoZDwUD2Q3X8q6IcmbJAwU6prkZbVe;', 'useragent' => 'Instagram 6.22.0 Android (11/1.5.3; 160; 1080x1776; samsung; SM-N9000; SM-N9000; smdkc210; en_US)', 'device_id' => 'android-e44e875c12109e4fa3716c05008048b29', 'username' => 'giveawayfolls004', 'id' => '3230620628');


$cookies = array($give001,$give002,$give003,$give004);



foreach($cookies as $ses){

		if($_time > 6 ){
			echo "ok";
	  $jumlah= "200";
	  $_POST['tipe'] = "followers";
	  $target = "342582658";
		$data_session = $ses;
		$getinfo = proccess(1, $data_session['useragent'], 'users/'.$target.'/info/',$data_session['cookies']);
		$getinfo = json_decode($getinfo[1]);
		if($_POST['tipe']=='followers'):
			if(!is_numeric($jumlah))
				$limit = 1;
			elseif($jumlah>($getinfo->user->follower_count-1))
				$limit = $getinfo->user->follower_count-1;
			else
				$limit = $jumlah-1;
			$tipe = 'followers';
		else:
			if(!is_numeric($jumlah))
				$limit = 1;
			elseif($jumlah>($getinfo->user->follower_count-1))
				$limit = $getinfo->user->follower_count-1;
			else
				$limit = $jumlah-1;
			$tipe = 'followers';
		endif;
		$c = 0;
		$listids = array();
		do{
			$parameters = ($c>0) ? '?max_id='.$c : '';
			$req = proccess(1, $data_session['useragent'], 'friendships/'.$target.'/'.$tipe.'/'.$parameters, $data_session['cookies']);
			$req = json_decode($req[1]);
			for($i=0;$i<count($req->users);$i++):
				if(count($listids)<=$limit)
					$listids[count($listids)] = $req->users[$i]->pk;
			endfor;
			$c = (isset($req->next_max_id)) ? $req->next_max_id : 0;
		}while(count($listids)<=$limit);
		for($i=0;$i<count($listids);$i++):
				$cross = proccess(1, $data_session['useragent'], 'friendships/create/'.$listids[$i].'/', $data_session['cookies'], hook('{"user_id":"'.$listids[$i].'"}'));
				$cross = json_decode($cross[1]);
				print_r($cross);
				print $xx++.'. <b>@'.$data_session['username'].' Follow => '.$listids[$i]." ".$cross->status.PHP_EOL;
				flush();
				sleep(10);
	     
		endfor;
		 sleep(600);
}
else
{
  $jumlah= "200";
  $_POST['tipe'] = "following";
	$target = $_SESSION['data']['id'];
	$data_session = $_SESSION['data'];
	$getinfo = proccess(1, $data_session['useragent'], 'users/'.$target.'/info/',$data_session['cookies']);
	$getinfo = json_decode($getinfo[1]);
	if($_POST['tipe']=='following'):
		if(!is_numeric($jumlah))
			$limit = 1;
		elseif($jumlah>($getinfo->user->following_count-1))
			$limit = $getinfo->user->following_count-1;
		else
			$limit = $jumlah-1;
		$tipe = 'following';
	else:
		if(!is_numeric($jumlah))
			$limit = 1;
		elseif($jumlah>($getinfo->user->follower_count-1))
			$limit = $getinfo->user->follower_count-1;
		else
			$limit = $jumlah-1;
		$tipe = 'followers';
	endif;
	$c = 0;
	$listids = array();
	do{
		$parameters = ($c>0) ? '?max_id='.$c : '';
		$req = proccess(1, $data_session['useragent'], 'friendships/'.$target.'/'.$tipe.'/'.$parameters, $data_session['cookies']);
		$req = json_decode($req[1]);
		for($i=0;$i<count($req->users);$i++):
			if(count($listids)<=$limit)
				$listids[count($listids)] = $req->users[$i]->pk;
		endfor;
		$c = (isset($req->next_max_id)) ? $req->next_max_id : 0;
	}while(count($listids)<=$limit);
	for($i=0;$i<count($listids);$i++):
			$cross = proccess(1, $data_session['useragent'], 'friendships/destroy/'.$listids[$i].'/', $data_session['cookies'], hook('{"user_id":"'.$listids[$i].'"}'));
			$cross = json_decode($cross[1]);
			print $i.'. <b>@'.$data_session['username'].' UnFollow => '.$listids[$i].PHP_EOL;
			flush();
			sleep(10);
	endfor;
}
}



	
	
	

?>

id
facebook id - id
first name - first_name
gender - gender
last name - last_name
link - link
name - name
email


https://apps.facebook.com/vinswaiterapp/waiterprofile/

venkatesh.g  - 1471675183079904
sowmiya akka - 302883896556339
maha - 1432620313629617



[id] => 1471675183079904
[first_name] => Venky
[gender] => male
[last_name] => Lnam
[link] => https://www.facebook.com/app_scoped_user_id/1471675183079904/
[locale] => en_US
[name] => Venky Lnam
[timezone] => 5.5
[updated_time] => 2014-07-09T06:10:41+0000
[verified] => 1


<?php 
	require '../src/facebook.php';
	//include_once '../include/loader.php';

	function getUserFriendList($facebook, $uid){
		try {
			$param  =   array(
					'method'  => 'friends.get',
					'uid'     => $uid,
					'flid'    => '',
					'callback'=> ''
			);
			$friends   =   $facebook->api($param);
			return $friends;
		}
		catch(Exception $o) {
			d($o);
		}
		return '';
	}

	$facebook = new Facebook(array(
		'appId'  => '312399092262041',
		'secret' => 'c3a1ea67d120c8628ea6ea4ef86f97b0',
	));
	if(($facebook->getUser())==0) {
		echo "i am not connected";
	} else {
		$accounts_list = $facebook->api('/me');
		$friends = getUserFriendList($facebook,$facebook->getUser());
		echo "i am connected";
		echo "<pre>accounts_list";
		echo print_r($accounts_list);
		echo "</pre>";
		echo "<pre>friends";
		echo print_r($friends);
		echo "</pre>";

		echo 'test';
		$perms = $facebook->api(array(
			"method" => "fql.query",
			"query" => "SELECT read_stream,offline_access,publish_stream FROM permissions WHERE uid=me()"
		));
		echo "<pre>perms";
		echo print_r($perms);
		echo "</pre>";
		echo "<ul>";
		foreach ($perms[0] as $k => $v) {
			echo "<li>";
			if ($v === "1") {
				echo "<strong>$k</strong> permission is granted.";
			} else {
				echo "<strong>$k</strong> permission is not granted.";
			}
			echo "</li>";
		}
	}
?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div class="fb-login-button" data-max-rows="1" data-size="large" data-show-faces="false" data-auto-logout-link="false"></div>



try{
	$fql    =   "select name, hometown_location, sex, pic_square from user where uid=" . $user;
	$param  =   array(
		'method'    => 'fql.query',
		'query'     => $fql,
		'callback'  => ''
	);
	$fqlResult   =   $facebook->api($param);
}
catch(Exception $o){
	d($o);
}

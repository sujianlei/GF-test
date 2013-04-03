<?php
set_include_path('./library');
require 'Zend/Oauth/Token/Access.php';
require 'Zend/Service/Twitter.php';

$consumerKey    = 'rzjhuwBJbTl9Hb75zaOQoQ';
$consumerSecret = 'ymSGRxAWkc49RXWuQhBGBxr7U7jtbSQZn7V36sDTF0';


        // create an OAuth Access Token
$token = new Zend_Oauth_Token_Access();
$token->setToken('190375311-rzfogVE80aX0jyj06czDAfVORJykpf5jdaVmlJ16');
$token->setTokenSecret('mrdwLzQ1XeXPUg5OnFG2RThO6uLssmZ1IqjZLadnt8');

$twitter  = new Zend_Service_Twitter( array(
            'username'       => 'damingsu',
            'accessToken'    => $token,
            'consumerKey'    => $consumerKey,
            'consumerSecret' => $consumerSecret,
) );

$response = $twitter->account->verifyCredentials();
var_dump($response);


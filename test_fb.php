
<?php
require_once __DIR__ . '/vendor/autoload.php';

section_start();
$fb = new Facebook\Facebook([
  'app_id' => '{1716206565276671}',
  'app_secret' => '{7789502950aaba2c4849970e73556199}',
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email', 'user_likes']; // optional
$loginUrl = $helper->getLoginUrl('http://{your-website}/login-callback.php', $permissions);

echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';

?>
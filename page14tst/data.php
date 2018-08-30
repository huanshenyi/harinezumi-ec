<?php
require_once('drink.php');
require_once('food.php');
require_once('review.php');
require_once('user.php');

$kanzen = new Drink('完全栄養食', 700, 'https://image.yodobashi.com/product/100/000/001/003/498/767/100000001003498767_10204.jpg', '300g');
$main = new Drink('メインフード', 600, 'https://image.yodobashi.com/product/100/000/001/002/778/709/100000001002778709_10204.jpg', '300g');
$sere = new Drink('セレクトフード', 1000, 'https://image.yodobashi.com/product/100/000/001/003/455/015/100000001003455015_10204_001.jpg', '1.2kg');
$natural = new Drink('ナチュラルフーズ', 400, 'https://image.yodobashi.com/product/100/000/001/003/634/141/100000001003634141_10204.jpg', '200g');
//test



$menus = array($kanzen, $main, $sere, $natural,);

$user1 = new User('ハリネズミ1', 'male');
$user2 = new User('ハリネズミ2', 'female');
$user3 = new User('ハリネズミ３', 'female');
$user4 = new User('ハリネズミ4', 'male');

$users = array($user1, $user2, $user3, $user4);


$review1 = new Review($kanzen->getName(), $user1->getId(), '美味しいよ');
$review2 = new Review($sere->getName(), $user1->getId(), '虫の味がきいていてとてもおいしいです');
$review3 = new Review($main->getName(), $user2->getId(), '香りがいいです');
$review4 = new Review($natural->getName(), $user2->getId(), '絶品です。また食べたい。');
$review5 = new Review($kanzen->getName(), $user3->getId(), '普通のハリご飯');
$review6 = new Review($sere->getName(), $user3->getId(), '値段の割においしいだと思いました');
$review7 = new Review($main->getName(), $user4->getId(), '苦味がちょうどよくて、おすすめです');
$review8 = new Review($natural->getName(), $user4->getId(), '材料にこだわりを感じました。');

$reviews = array($review1, $review2, $review3, $review4, $review5, $review6, $review7, $review8);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/style.css">
    <title>hilfe</title>
</head>
<body>

<h1 class="banner"> Nutrition</h1>
<div class="container">
    <div class="box2">

<?php
require './YouTubeVideo.php';
require './VimeoVideo.php';

$ytv1 = new YouTubeVideo("Foodie 1", "https://www.youtube.com/embed/krIgKr3IC7s");
$ytv2 = new YouTubeVideo("Foodie 2", "https://www.youtube.com/embed/Gmh_xMMJ2Pw");
$ytv3 = new YouTubeVideo("Foodie 3", "https://www.youtube.com/embed/c06dTj0v0sM");
$ytv4 = new YouTubeVideo("Foodie 4", "https://www.youtube.com/embed/Urr-MKKs8zc");
$ytv5 = new YouTubeVideo("Foodie 5", "https://www.youtube.com/embed/dN7c2JniR8U");

$vv1 = new VimeoVideo("Fake Foodie 1", "https://player.vimeo.com/video/64981602");
$vv2 = new VimeoVideo("Fake Foodie 2", "https://player.vimeo.com/video/27138679");
$vv3 = new VimeoVideo("Fake Foodie 3", "https://player.vimeo.com/video/79898890");
$vv4 = new VimeoVideo("Fake Foodie 4", "https://player.vimeo.com/video/8063633");
$vv5 = new VimeoVideo("Fake Foodie 5", "https://player.vimeo.com/video/466933445");

echo '<h1>'.$ytv1->getName().'</h1>';
echo $ytv1 ->getEmbededCode();
echo <<< 'HTML'
</div>
<div class="box2">
HTML;
echo '<h1>'.$ytv2->getName().'</h1>';
echo $ytv2 ->getEmbededCode();
echo <<< 'HTML'
</div>
<div class="box2">
HTML;
echo '<h1>'.$ytv3->getName().'</h1>';
echo $ytv3 ->getEmbededCode();
echo <<< 'HTML'
</div>
<div class="box2">
HTML;
echo '<h1>'.$ytv4->getName().'</h1>';
echo $ytv4 ->getEmbededCode();
echo <<< 'HTML'
</div>
<div class="box2">
HTML;
echo '<h1>'.$ytv5->getName().'</h1>';
echo $ytv5 ->getEmbededCode();
echo <<< 'HTML'
</div>
<div class="box2">
HTML;

echo '<h1>'.$vv1->getName().'</h1>';
echo $vv1 ->getEmbededCode();
echo <<< 'HTML'
</div>
<div class="box2">
HTML;
echo '<h1>'.$vv2->getName().'</h1>';
echo $vv2 ->getEmbededCode();
echo <<< 'HTML'
</div>
<div class="box2">
HTML;
echo '<h1>'.$vv3->getName().'</h1>';
echo $vv3 ->getEmbededCode();
echo <<< 'HTML'
</div>
<div class="box2">
HTML;
echo '<h1>'.$vv4->getName().'</h1>';
echo $vv4 ->getEmbededCode();
echo <<< 'HTML'
</div>
<div class="box2">
HTML;
echo '<h1>'.$vv5->getName().'</h1>';
echo $vv5 ->getEmbededCode();
echo <<< 'HTML'
</div>
<div class="box2">
HTML;
?>

</body>


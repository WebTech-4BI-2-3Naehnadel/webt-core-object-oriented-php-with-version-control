<?php
namespace Naehnadeln\ObjectOrientedPhpWithVersionControl;

require  'vendor/autoload.php';

$ytv1 = new YouTubeVideo("Explore the Six Key Nutrients", "https://www.youtube.com/embed/FmpWnmqYVLk?si=GHux_QI9gQ65_Mfv");
$ytv2 = new YouTubeVideo("How to create a healthy Plate", "https://www.youtube.com/embed/Gmh_xMMJ2Pw");
$ytv3 = new YouTubeVideo("Nutrition for a Healthy Life", "https://www.youtube.com/embed/c06dTj0v0sM");
$ytv4 = new YouTubeVideo("Nutrition: Importance of the Five Food Groups", "https://www.youtube.com/embed/47k0VUE6aZU?si=Gaf_JbHIwQY1zRVJ");
$ytv5 = new YouTubeVideo("GCSE Biology -What are Nutrients?", "https://www.youtube.com/embed/dN7c2JniR8U");

$vv1 = new VimeoVideo("Healthy Food, Healthy Digital Marketing", "https://player.vimeo.com/video/584555961");
$vv2 = new VimeoVideo("Bringing Healthy Food to Food Deserts", "https://player.vimeo.com/video/33784977");
$vv3 = new VimeoVideo("Healthy Food Transisition", "https://player.vimeo.com/video/79898890");
$vv4 = new VimeoVideo("Healthy Food, Healthy Body, Healthy Mind", "https://player.vimeo.com/video/8063633");
$vv5 = new VimeoVideo("Healthy Food Healthy Planet - Retail", "https://player.vimeo.com/video/862921737");

$header = <<<HEADER
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="favicon.png">
    <title>Nutrition</title>
</head>


HEADER;
echo $header;

$body = <<<BODY
<body>
<h1 class="banner"> Nutrition</h1>
<div class="container">
{$ytv1->getEmbededCode()}
{$ytv2->getEmbededCode()}
{$ytv3->getEmbededCode()}
{$ytv4->getEmbededCode()}
{$ytv5->getEmbededCode()}

{$vv1->getEmbededCode()}
{$vv2->getEmbededCode()}
{$vv3->getEmbededCode()}
{$vv4->getEmbededCode()}
{$vv5->getEmbededCode()}
</div>
</body>
</html>
BODY;
echo $body;






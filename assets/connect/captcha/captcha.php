<?php
    session_start();
    $string = "";
    for ($i = 0; $i < 3; $i++) {
        $string .= chr(rand(97, 122));
    }

    $_SESSION['Captcha'] = $string;

    $dir = "fonts/";

    $image = imagecreatetruecolor(200, 30);
    $black = imagecolorallocate($image, 0, 0, 0);
    $color = imagecolorallocate($image, 200, 100, 90);
    $white = imagecolorallocate($image, 255, 255, 255);

    imagefilledrectangle($image,0,0,399,99,$white);
    imagettftext ($image, 15, 0, 30, 20, $color, $dir."verdana.ttf", $_SESSION['Captcha']);

    header("Content-type: image/png");
    imagepng($image);

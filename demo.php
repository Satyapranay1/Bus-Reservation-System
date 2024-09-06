<?php
session_start();

echo $random_string;
$_SESSION['captcha'] = $random_string;
$image = imagecreatetruecolor(100, 30);
$background_color = imagecolorallocate($image, 255, 255, 255);
$text_color = imagecolorallocate($image, 0, 0, 0);
imagestring($image, 5, 20, 10, $random_string, $text_color);
header('Content-type: image/png');
imagepng($image);
imagedestroy($image);
?>
<form method="post" action="process-form.php">
  <label for="captcha">Enter the characters you see in the image:</label>
  <input type="text" name="captcha" id="captcha">
  <img src="captcha.php" alt="CAPTCHA">
  <input type="submit" value="Submit">
</form>








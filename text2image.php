<?php
@header('Content-Type: image/png');
$text=$_POST['txt1'];
$text1=$_POST['txt2'];
$text2=$_POST['txt3'];


$width=450;
$height=100;
$bg=$_POST['bg'];
list($r, $g, $b) = sscanf($bg, "#%02x%02x%02x");
$fc=$_POST['fg'];
list($r1, $g1, $b1) = sscanf($fc, "#%02x%02x%02x");
$txtsz=4;
$imgtyp="png";



$im =imagecreate($width,$height)
or die("Cannot Initialize new GD image stream");



$background_color = imagecolorallocate($im, $r, $g, $b);
$text_color = imagecolorallocate($im, $r1, $g1, $b1);
imagestring($im,  $txtsz, 10, 10, $text, $text_color);
imagestring($im,  $txtsz, 10, 30, $text1, $text_color);
imagestring($im,  $txtsz, 10, 50, $text2, $text_color);

$file="image.png";
imagepng($im, $file);

if (file_exists($file)) {
    @header('Content-Description: File Transfer');
    @header('Content-Type: application/octet-stream');
    @header('Content-Disposition: attachment; filename="'.basename($file).'"');
    @header('Expires: 0');
    @header('Cache-Control: must-revalidate');
    @header('Pragma: public');
    @header('Content-Length: ' . filesize($file));
    readfile($file);
unlink($file);
    
exit;
}
imagedestroy($im);
?>



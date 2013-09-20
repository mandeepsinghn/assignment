<?php
class ConvertImage{
public function Convert($pdfName,$imageName,$format)
{
$img = new imagick($pdfName);
 
//set new format
$img->setImageFormat($format);
 
//save image file
$img->writeImage($imageName.'.'.$format);
}
}

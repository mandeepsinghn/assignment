<?php
class CreateZip{

function addToZip($arrayOfFiles,$zipName)
{
$zip = new ZipArchive();
if ($zip->open($zipName,ZipArchive::CREATE) === TRUE) {
	foreach($arrayOfFiles as $file){    
	$zip->addFile($file);
	}
    $zip->close();
    
} else {
    throw new Exception('Enable To create zip file.');
}
}

}

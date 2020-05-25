<?php
// In Visual Studio Code create target directory "file_uploads" where you are going to save your files

// put path to this directory into variable $targetDir

// validate if $_FILES has file you upload ( value from form name attribute)

// extract in variable $ext - uploaded file extension using pathinfo from the file - for example if you have file MyImage.jpeg - you should get only this part ".jpeg"

// TO Create unique file name which will allow us to avoid filename conflicts in our WEB app we will use next approach

// extract the file name $filename (only name of the file) -  - for example if you have file MyImage.jpeg - you should get only this part "MyImage"

// using hash funciton md5() to create a hash string in $hashFilename from the $filename 

// create a new path using $targetDir, $hashFilename and $ext, use DIRECTORY_SEPARATOR if needed

// Using function move_uploaded_file move file from temp location to the path you created. Filename should be hashed string

// Inform user that he   uploaded file successfully 


$targetDir="file_uploads";

if(isset($_FILES['fileWeUpload']) && !empty($_FILES['fileWeUpload']['name'])){

    $path_parts=pathinfo($_FILES['fileWeUpload']['name']);
    $filename=$path_parts['filename'];
    $ext =$path_parts['extension'];
    $hashFilename=md5($filename);
    $doc_name=$hashFilename. ".".$ext;
    $targetDir=implode(DIRECTORY_SEPARATOR,array($targetDir,$doc_name));

   if( move_uploaded_file($_FILES['fileWeUpload']["tmp_name"],$targetDir)){

    echo "File " . $_FILES['fileWeUpload']['name'] . " has successfuly been uploaded to location: " . $targetDir;

   }    

}

 


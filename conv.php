<?php
error_reporting(0);
if (true)
  {
  if ($_FILES["file"]["error"] > 0)
    {
    //echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    //echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    //echo "Type: " . $_FILES["file"]["type"] . "<br />";
    //echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    //echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    }

    if (!function_exists('gzdecode')) {      
      function gzdecode ($data) {      
          $flags = ord(substr($data, 3, 1));      
          $headerlen = 10;      
          $extralen = 0;      
          $filenamelen = 0;      
          if ($flags & 4) {      
              $extralen = unpack('v' ,substr($data, 10, 2));      
              $extralen = $extralen[1];      
              $headerlen += 2 + $extralen;      
          }      
          if ($flags & 8) // Filename      
              $headerlen = strpos($data, chr(0), $headerlen) + 1;      
          if ($flags & 16) // Comment      
              $headerlen = strpos($data, chr(0), $headerlen) + 1;      
          if ($flags & 2) // CRC at end of file      
              $headerlen += 2;      
          $unpacked = @gzinflate(substr($data, $headerlen));      
          if ($unpacked === FALSE)      
                $unpacked = $data;      
          return $unpacked;      
       }      
    }
    

    $myfile = fopen($_FILES["file"]["tmp_name"], "r") or die("Unable to open file!");
    $prproj = gzdecode(fread($myfile,filesize($_FILES["file"]["tmp_name"])));
    fclose($myfile);
    $begin = "<Project ObjectID";
    $end = "<Node Version";
    $b = mb_strpos($prproj,$begin) + mb_strlen($begin);
    $e = mb_strpos($prproj,$end) - $b;
    $substr = mb_substr($prproj,$b,$e);
    $substr = strstr($substr,'Version=');
    $begin = '"';
    $end = '">';
    $b = mb_strpos($substr,$begin) + mb_strlen($begin);
    $e = mb_strpos($substr,$end) - $b;
    $substr1 = mb_substr($substr,$b,$e);
    $substr1 = 'Version="' . $substr1 . '"';
    $substr2 = 'Version="25"';
    $prproj = str_replace($substr1,$substr2,$prproj);
    //echo $prproj;

    if($_POST['ifcompressoutput'] == "on"){
      $prproj = gzencode($prproj,9);
    }
    

    $downfile = "down/" . time() . "-" . $_FILES["file"]["name"];
    $myfile = fopen($downfile, "w") or die("Unable to open file!");
    fwrite($myfile, $prproj);
    fclose($myfile);

    echo $downfile;
  }
else
  {
  echo "Invalid file";
  }
?>
<?php
include "../assets/class/picture.database.class.php";
$ok=false;
$tmp_file_name = $_FILES['Filedata']['tmp_name'];
$allowedExts = array("JPEG", "JPG", "PNG");
$temp = explode(".", $_FILES["Filedata"]["name"]);
$extension = end($temp);
if ((($_FILES["Filedata"]["type"] == "image/jpeg")
|| ($_FILES["Filedata"]["type"] == "image/jpg")
|| ($_FILES["Filedata"]["type"] == "image/pjpeg")
|| ($_FILES["Filedata"]["type"] == "image/x-png")
|| ($_FILES["Filedata"]["type"] == "image/png"))
&& ($_FILES["Filedata"]["size"] < 1048717)
&& in_array(strtoupper($extension), $allowedExts))
  {
  if ($_FILES["logo"]["error"] > 0)
    {
    }
  else

    {
		$ok = move_uploaded_file($tmp_file_name, '../product_photos/'.$_FILES['Filedata']['name']);
	}
} 

if($ok){
	echo "{ 'id':'".$picture->_add($_FILES['Filedata']['name'])."','title':'".$_FILES['Filedata']['name']."'}";
} else {
	echo "error";
}
?>
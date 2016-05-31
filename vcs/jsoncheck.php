 <?php
//$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url = 'http://localhost/ultimate.php';

//ignore_user_abort(1);
//$op=file_get_contents($actual_link);

//file_put_contents("array1.json",json_encode($op));
//view json

//$arr2 = json_decode(file_get_contents('array.json'), true);
//echo $arr2;

$handle = file_get_contents($url);
$f=@fopen("dump.txt","a");
fwrite($f,$handle);
fclose($f);

?>

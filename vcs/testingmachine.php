<?php
$i=0; $j=0;
$url='https://en.wikipedia.org/wiki/Router_(computing)';
$arr[]=file_get_contents($url);
//echo $arr[$i];


$str=implode("",$arr);
for($i=3;$i<strlen($str);$i++)
{//if($str[$i-3]!='<'&&$str[$i-2]!='h'&&$str[$i-1]!='2'&&$str[$i]!='>')
$str2[$i]=$str[$i-3];}
$strx=implode("",$str2);
echo $strx;
//$str1=strip_tags($str);
//$arr2=explode("",$str1);
//$str=preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', "", $str1);

/*
for($i=0;$i<strlen($str);$i++)
{
	if($i%2==0)
	{?><font face="Hashi"><b><font size="+1"><?php echo $str[$i];
}
    else{?><font face="Times New Roman"><?php echo $str[$i];
		
}}*/

//$file='C:/wamp/www/file.html';
//file_put_contents($file,$str);
echo "done";
?>

	
</b></font></font>


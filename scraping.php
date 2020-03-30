<?php

$url = "https://indianexpress.com/section/sports/";
//$preg="<time>(.*?)<\/time>";

$preg="data-event-id=\"\">(.*)<\/a><\/h3><h4 class=\"m-article-landing__excerpt\">(.*)<\/h4>";

$pregi="<img class=\"lazyload\" data-src=\"(.*)?w=310&#038;h=175&#038;imflag=true\"><\/picture><\/a>";

$pregt="class=\"m-article-landing__date\">(.*)<\/time><\/div>";
// $preg="src=(.*) onerror=\"this.parentNode.remove()\" class=\"\"><\/a><div class=\"latest-right\"><h2><a class=\"open-section\" href=(.*)>(.*)<\/a>\n<\/h2>\n<p>(.*)";

$curl=curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$result=curl_exec($curl);
preg_match_all('!'.$preg.'!',$result,$match);
//$detail['addressl1']=$match[0];
$detail['address']=$match[1];
$detail['addres']=$match[2];
//$address=(($detail['addressl1'][0]));

preg_match_all('!'.$pregi.'!',$result,$matc);
$detail['addre']=$matc[1];

preg_match_all('!'.$pregt.'!',$result,$mat);
$detail['add']=$mat[1];

echo "[";

for($i=3;$i<count($detail['addre']);$i++)
{

$iname=addslashes(($detail['addre'][$i]));
$tit=addslashes(($detail['address'][$i-3]));
$txt=addslashes(($detail['addres'][$i-3]));
$ttm=addslashes(($detail['add'][$i-3]));

echo "{\"newsimg\":\"".$iname."\",\"newstitle\":\"".$tit."\",\"newstime\":\"".$ttm."\",\"newsdetails\":\"".$txt."\"";

if($i==count($detail['addre'])-1)
{
echo "}";
}
 else
{ 
echo "},";
}
 }

echo "]";
 
 ?>
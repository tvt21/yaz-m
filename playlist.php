<?php
$XML = simplexml_load_file("https://egoldstudio.com/eal/7/settings.xml");
$signed = $XML->setting[3];
header("Content-Type: audio/x-mpequrl");
header('Content-disposition: attachment;filename="playlist.m3u"');
$file24 = file_get_contents('http://vjackson.info/live/index?output=m3u&vavoo_auth='.$signed);
$array = explode("\n", $file24);
echo "#EXTM3U";
for($i=1;$i<count($array);$i++){if (strpos( $array[$i],"Turkey") !== false) {
echo "\n";
echo $array[$i];
echo "
#EXTVLCOPT:http-user-agent=VAVOO/1.51\n".$array[$i+1]."?rRGRG=1&b=5&vavoo_auth=".$signed;

echo "|User-Agent=VAVOO/1.51''\n";
}
}
?>
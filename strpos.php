<?php
function curl_download($Url){
 if (!function_exists('curl_init')){
 die('cURL is not installed. Install and try again.');
 }
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, $Url);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 $output = curl_exec($ch);
 curl_close($ch);
$start = strpos($output, '<h2 id="books-last1">Top 100 EBooks yesterday</h2>');
$end = strpos($output, '<p>', $start);
$length = $end-$start;
$output = substr($output, $start, $length);
 return $output;
}
print curl_download('https://www.example.com');
?>

<?php
$url = 'https://www.example.com';
function curl_download($Url){
 if (!function_exists('curl_init')){
 die('cURL is not installed. Install and try again.');
 }
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, $Url);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 $output = curl_exec($ch);
 curl_close($ch);
$start = strpos($output, '$');
$end = strpos($output, '</h3>', $start);
$length = $end-$start;
$output = substr($output, $start, $length);
 return $output;
}
print curl_download($url);
?>

<?php
$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, "https://www.example.com");
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 ); 
$result = curl_exec($ch);
curl_close($ch);
$text = $result;
if (stripos($text, "11.500") !== false)
	echo "true";
else
	echo "false";
echo $result;
      $kaynak= "<div>Birinci Bölüm</div> <div>İkinci Bölüm</div> <div>Üçüncü Bölüm</div> <div>Dördüncü Bölüm</div>";
      $aranan = "/<div>(.*?)</[^>]+>/i";
      preg_match($aranan, $kaynak, $sonuc);
      print_r($sonuc);
      ?>

<?php
if (stripos($text, "11.500") !== false)
	echo "true";
else
	echo "false";
echo $result;
?>

<?php
$url = 'https://www.example.com';
function curl_download($Url){
 if (!function_exists('curl_init')){
 die('cURL is not installed. Install and try again.');
 }
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, $Url);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 $output = curl_exec($ch);
 curl_close($ch);
$start = strpos($output, '$');
$end = strpos($output, '</h3>', $start);
$length = $end-$start;
$output = substr($output, $start, $length);
 return $output;
}
print curl_download($url);
?>

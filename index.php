<?php
  require_once("./phpQuery-onefile.php");
  echo "札幌の今日と明日の天気";
  echo "<br>";
  echo "<br>";
  $html = file_get_contents("https://weather.yahoo.co.jp/weather/jp/1b/1400.html");
  echo "今日の天気";
  echo "<br>";
  echo phpQuery::newDocument($html)->find(".temp:eq(0)")->find("li")->text();
  echo "<br>";
  echo "<br>";
  echo "明日の天気";
  echo "<br>";
  echo phpQuery::newDocument($html)->find(".temp:eq(1)")->find("li")->text();
  echo "<br>";
?>

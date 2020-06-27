<?php
require 'simple_html_dom.php';

$html = file_get_html('https://www.gov.sg/article/covid-19-public-places-visited-by-cases-in-the-community-during-infectious-period');
$title = $html->find('title', 0);
$image = $html->find('img', 0);

echo $title->plaintext."<br>\n";
echo $image->src;
?>
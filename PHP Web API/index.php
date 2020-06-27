<?php

require('simple_html_dom.php');

$opts = array(
    'http'=>array(
    // 'method'=>"GET",
    'header'=>"User-Agent:Mozilla/5.0 (iPhone; CPU iPhone OS 7_0 like Mac OS X; en-us) AppleWebKit/537.51.1 (KHTML, like Gecko) Version/7.0 Mobile/11A465 Safari/9537.53\r\n"
    )
);
$context = stream_context_create($opts);
$html = file_get_html('http://www.gov.sg/article/covid-19-public-places-visited-by-cases-in-the-community-during-infectious-period', false, $context);

$table = $html->find('table', 0);
$rowData = array();

foreach($table->find('tr') as $row) {
    // initialize array to store the cell data from each row
    $cases = array();
    foreach($row->find('td') as $cell) {
        // push the cell's text to the array
        $cases[] = $cell->plaintext;
    }
    $rowData[] = $cases;
}

echo '<table>';
foreach ($rowData as $row => $tr) {
    echo '<tr>'; 
    foreach ($tr as $td)
        echo '<td>' . $td .'</td>';
    echo '</tr>';
}
echo '</table>';

?>
<?php
// This file contains code and functions that will be used on most pages

function SetSessionVariables () : void  {
    if (!(isset($_SESSION['list_title']))) {
        // These session variables will become redundant when the database is created
        $_SESSION['listTitle'] = "Largest Empires in History";
        $_SESSION['listDescription'] = "This is a list of the largest empires throughout world history. The figures given are estimates, and may not be 100% accurate. All data is taken from the Wikipedia article \"List of largest empires\".";
        $_SESSION['columnNames'] = array("name"=>"Name", "value"=>"Area (million km^2)", "field1"=>"Year", "field2"=>Null, "field3"=>Null, "field4"=>Null, "field5"=>Null, "description"=>Null, "thumbnail"=>true);
    }
}


$listDataJSON = file_get_contents('Protected/tempListData.json');
$listData = json_decode($listDataJSON, true);

$listOrdered = array();

if ($listData != null) {
    // If the JSON file is not empty

    foreach ($listData as $key => $value) {
        $listOrdered[$key] = $listData[$key]["value"];
    }
    unset($key, $value);

    arsort($listOrdered);
}
?>
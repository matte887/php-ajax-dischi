<?php 
require __DIR__ . "/../../common-files/database.php";
if(empty($_GET["genre"])) {
    $discs_json = json_encode($database);
} else {
    $genre = $_GET["genre"];
    $selected_genre = [];
    foreach($database as $item) {
        if($item["genre"] === $genre) {
            $selected_genre[] = $item;
        }
    }
    $discs_json = json_encode($selected_genre); 
}
header("Content-Type: application/json");
echo $discs_json;
?>
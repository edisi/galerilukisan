<?php
require("../../../functions/koneksi.php");
$updateRecordsArray = $_POST['recordsArray'];
$Tabel = $_POST['tabel'];
$sortir = $_POST['sortir'];
$id = $_POST['id'];

$listingCounter = 1;
foreach ($updateRecordsArray as $recordIDValue) {    
    execSQL("UPDATE menu SET sortir = ? WHERE id = ?", array("ii", $listingCounter, $recordIDValue), true);
    $listingCounter = $listingCounter + 1;
}
?>
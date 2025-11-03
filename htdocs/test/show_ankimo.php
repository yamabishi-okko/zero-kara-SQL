<?php
include "ankimo_part.php";

foreach ($ankimo as $menber => $detail) {
    echo $menber."は".$detail["from"]."の出身で担当パートは".$detail["part"]."です。<br>";
}

function showTest() {
    echo "<br>🌙 includeできてます！";
}

showTest();
?>
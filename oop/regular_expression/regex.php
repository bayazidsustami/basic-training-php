<?php

$matches = [];
$result = (bool)preg_match_all("/eko|awan|edy/i", "Eko kurniawan Khannedy", $matches);

$result1 = preg_replace("/anjing|bangsat/i", "***", "dasar lu anjing, bangsat");

$result2 = preg_split("/[\s, -]/", "Eko Kurniawan khannedy programmer zaman-now");

var_dump($result2);
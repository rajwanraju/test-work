<?php

$ch = curl_init("https://bootsnipp.com/tags/4.1.1");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
$content = curl_exec($ch);

echo $content;
curl_close($ch);

?>
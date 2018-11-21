<?php

include('simple_html_dom.php');
$url = "https://bootsnipp.com/tags/4.1.1";
$html = file_get_html('https://bootsnipp.com/tags/4.1.1');


$doc = new DOMDocument;

// We don't want to bother with white spaces
$doc->preserveWhiteSpace = false;

// Most HTML Developers are chimps and produce invalid markup...
$doc->strictErrorChecking = false;
$doc->recover = true;

$doc->loadHTML('https://bootsnipp.com/tags/4.1.1');

$xpath = new DOMXPath($doc);

$query = "//div[@class='bootsnipp-thumb']";

$entries = $xpath->query($query);
// var_dump($entries->item(0)->textContent);
print_r($xpath->document->documentElement);







//  $data = file_get_contents("https://bootsnipp.com/tags/4.1.1");
// $html_encoded = htmlentities($data);
//    print_r( $html_encoded);











// $dom = new DomDocument();
// $dom->load($url);
// $finder = new DomXPath($dom);
// $classname="bootsnipp-thumb";
// $nodes = $finder->query("//*[contains(concat(' ', normalize-space(@class), ' '), ' $classname ')]");

// $tmp_dom = new DOMDocument(); 
// foreach ($nodes as $node) 
//     {
//     $tmp_dom->appendChild($tmp_dom->importNode($node,true));
//     print_r( $tmp_dom->appendChild($tmp_dom->importNode($node,true)));
//     }
// $innerHTML.=trim($tmp_dom->saveHTML()); 


// $xpath = new DOMXPath($dom);



// foreach ($html->find('div[class=thumbnail bootsnipp-thumb]') as $postDiv) {
//     foreach ($postDiv->find('a') as $a) {
//         echo $a->attr['href'].'</br>';
//     }
// }

// $tags = $xpath->query('//div[@class="thumbnail"]|//div[@class="bootsnipp-thumb"]//p|//div[@class="lead"]//p|//div[@class="snipp-title"]//a');
// foreach ($tags as $iTag) {
//     // var_dump(trim($iTag->nodeValue));
//     print_r($iTag);
// }


// foreach( $xpath->query('//div[@class="thumbnail"]/text()') as $category ) { 

//   $i = $i + 1;
//   echo "Category: " . $category->nodeValue . "\n";      
//   foreach ( $xpath->query('//div[@class="thumbnail"][' . $i . ']/following-sibling::div[1][@class="snipp-title"]/a/div/h3/text()') as $subcategory) {
//     echo "  Subcategory: " . $subcategory->nodeValue . "\n";
//   }
// }




//   foreach($dom->getElementsByTagName('span') as $span){
//      // echo $span->innertext;
     
//         // print_r($span->nodeValue);
//     // $tag = $span->nodeValue .'<br>';
//      echo htmlentities($span);
//     // echo $tag;
// }

?>
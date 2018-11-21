<?php

require_once 'vendor/autoload.php';

include('simple_html_dom.php');
$info = new App\classes\Login();
$addImage = new App\classes\Login();
 $addTag = new App\classes\Login();
 $addTitle = new App\classes\Login();

//  $url = "https://bootsnipp.com/tags/4.1.1";

//  $html = file_get_html($url);

//  // echo $html;

// $urldata = array();
// if(!empty($html)){

// foreach ($html->find('div') as $postDiv) {
//     foreach ($postDiv->find('a') as $a) {
//         echo $a->attr['href'];
//     }
// }

// }


// $find = $html->find(".thumbnail ");
// $ret = array();
// foreach ($find as $element) {
//     if (strpos($element->class, 'bootsnipp-thumb') !== false) {
//         $ret[] = $element;
//     }
// }
// $find = $ret;





// foreach($html->find('a') as $e) 
//     echo $e->href . '<br>';
//   if(!empty($html)){

// foreach($html->find('img') as $e)
//     echo $e->src . '<br>';

// }
// // foreach($html->find('img') as $e)
// //     echo $e->outertext . '<br>';

// $html->find("div[class=thumbnail bootsnipp-thumb]");

// echo "dfdf";

// foreach($html->find('div.bootsnipp-thumb') as $e)
//     echo $e->innertext . '<br>';


// // foreach($html->find('span.myClass') as $e)
// //     echo $e->outertext . '<br>';


// // foreach($html->find('td[align=center]') as $e)
// //     echo $e->innertext . '<br>';
    

// // echo $html->find('td[align="center"]', 1)->plaintext.'<br><hr>';



$url = "https://bootsnipp.com/tags/4.1.1";
$ch = curl_init();
$timeout = 5;
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$html = curl_exec($ch);
curl_close($ch);
 $message ="";
libxml_use_internal_errors (true);
$dom = new DOMDocument();


@$dom->loadHTML($html);


// foreach($dom->getElementsByTagName('a') as $link) {
      



//      // $message = $info->addData($link->getAttribute('href'));
//         $data = $link->getAttribute('href');
//       echo  $info = htmlentities($data);

//         echo "<br />";
// }


// $images = $dom->getElementsByTagName('img');
// foreach($images as $image){
//         $img = $image->getAttribute('src');
//      // $image = $addImage->addImage($image->getAttribute('src'));
//         echo $img."</br>";
// }


//  $content = file_get_contents('https://bootsnipp.com/tags/4.1.1');

// preg_match_all('/(\d+\.\d+\.\d+\.\d+(:\d+)?)/', $content, $matches);

// print_r($matches[1]);


// $title = $dom->getElementsByTagName('span');
// foreach($dom->getElementsByTagName('span') as $span){
//      // echo $span->innertext;
     
//         // print_r($span->nodeValue);
//     // $tag = $span->nodeValue .'<br>';
//      $tag = $addTag->addTag($span->nodeValue .'</br>');
//     // echo $tag;
// }

foreach($dom->getElementsByTagName('span') as $span){
     // echo $span->innertext;
     
        // print_r($span->nodeValue);
    // $tag = $span->nodeValue .'<br>';
     $tag = $addTag->addTag($span->nodeValue .'</br>');
    // echo $tag;
}



foreach($dom->getElementsByTagName('div') as $divTag){
     // echo $span->innertext;
     
         $data = $divTag->textContent .'</br>';
          print_r( $divTag->textContent .'</br>');
         // print_r($span->nodeValue);
    // $tag = $span->nodeValue .'<br>';
     $title = $addTitle->addTitle($divTag->nodeValue .'</br>');
    // echo $tag;
}



// foreach($url->find('div[trip]') as $detailLinks) 
//    echo $detailLinks;














?>

<!-- <h3 style="text-align: center;  color: green;"><?php  echo $message ?></h3> -->




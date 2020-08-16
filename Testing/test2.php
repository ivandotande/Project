<?php
include '../php_dom_parser/simple_html_dom.php';
$url = 'https://www.lazada.com.my/products/intel-core-i7-9700k-processor-12m-cache-up-to-490-ghz-i7-9700k-i683572183-s1480878185.html?spm=a2o4k.searchlist.list.3.6e446ce1f79tjv&search=1/';
$url1 = 'https://shopee.com.my/Intel%C2%AE-Core-I7-9700K-Processor-12M-Cache-Up-To-4.90-GHz--i.105136036.2041308402';
$html = file_get_html($url);
try{
    if(dirname($url) == 'https://www.lazada.com.my/products'){
        foreach($html->find('span.breadcrumb_item_anchor') as $productname) {
            echo 'Product Name : ',$productname;
        }
        // foreach($html->find('span') as $productprice) {
        //     echo $productprice, '<br>';
        // }
        foreach($html->find('script') as $script) {
            echo '<br>'; 
            //$obj = json_decode($script);
            $json_a = json_decode($script,true); 
            var_dump($json_a);
            echo $json_a['pdt_price'];
            echo'<br>';
        }
    }
    elseif(dirname($url) == 'https://shopee.com.my' ){
        foreach($html->find('div') as $productname) {
            //echo 'Product Name : ';
            echo $productname;
        }
    }
    
}catch(Exception $e){
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}


?>
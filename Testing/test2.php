<?php
include '../php_dom_parser/simple_html_dom.php';
$html = file_get_html('https://www.lazada.com.my/products/intel-core-i7-9700k-processor-12m-cache-up-to-490-ghz-i7-9700k-i683572183-s1480878185.html?spm=a2o4k.searchlist.list.3.6e446ce1f79tjv&search=1/');

try{
    foreach($html->find('span.breadcrumb_item_anchor') as $productname) {
        //echo 'Product Name : ',$productname;
    }
    foreach($html->find('span.pdp-price pdp-price_type_normal pdp-price_color_orange pdp-price_size_xl') as $productprice) {
        echo "Product Price : ";
        var_dump($productprice);
    }
}catch(Exception $e){
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}


?>
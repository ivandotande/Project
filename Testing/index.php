<?php
use Goutte\Client;

$url = 'https://www.lazada.com.my/products/intel-core-i7-9700k-processor-12m-cache-up-to-490-ghz-i7-9700k-i683572183-s1480878185.html?spm=a2o4k.searchlist.list.3.6e446ce1f79tjv&search=1 ';
$crawler = $client->request('GET', $url);
echo "url: $url <br>";
$pilihan= parse_url($url, PHP_URL_HOST);
$gambar=array();
$i=0;

$DOM = new DOMDocument;
libxml_use_internal_errors(true);
if (!$DOM->loadHTML($page))
 {
 $errors="";
 foreach (libxml_get_errors() as $error)
    {
        $errors.=$error->message."<br/>";
        }
        libxml_clear_errors();
        print "libxml errors:<br>$errors";
        return;
    }
    $xpath = new DOMXPath($DOM);
    $case1 = $xpath->query('//*[@id="case1"]')->item(0);
    $query = 'div[not (@class="ads")]/span[2]';
    $entries = $xpath->query($query, $case1);
    foreach ($entries as $entry) {
    echo " {$entry->firstChild->nodeValue} <br />
";
}
?>
<?php
if($pilihan=='www.lazada.com'){
    $crawler->filter('span.pdp-mod-product-badge-title')->each(function ($node){
       echo "Nama : ".$node->text()."<br>";
   });
   $crawler->filter('span.pdp-price')->each(function ($node) {
       echo "Harga : ".$node->text()."<br>"."<br>";
   });
   $crawler->filter('div.pdp-product-desc')->each(function ($node) {
       echo "Deskripsi : ".$node->html()."<br>";
   });
}
?>
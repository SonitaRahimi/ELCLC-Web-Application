include '../data/class.post_curd.php';
$po = new post_curd();
$pos = $po->list_posts();
//print_r($pos);
$xml = new DOMDocument();
$xml->formatOutput =TRUE;
$url = $_GET['url'];
$file = file_get_contents($url);
header("content-disposition: attachment; filename="". basename($url). """);
echo $file;
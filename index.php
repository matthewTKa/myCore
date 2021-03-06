<?php
include $_SERVER['DOCUMENT_ROOT'] . '/header.php';

$file = $_SERVER['DOCUMENT_ROOT'] . '/file.php';
if(file_exists($file)){
    include $file;
}
else{
    echo 'Файла не существует';
}

$dir = scandir($_SERVER['DOCUMENT_ROOT'] . '/pages/');
$dir = array_values(array_diff($dir, ['.', '..']));

?>
<main>
<?php
if(isset($_GET['page'])){
    $page = $_GET['page'];
    include $_SERVER['DOCUMENT_ROOT'] . '/pages/'.$page.'.php';
}
?>
</main>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php';

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/header.php';
if (isset($_GET['page'])) {

    $page = $_SERVER['DOCUMENT_ROOT'] . '/pages/' . $_GET['page'] . '.php';

    if (file_exists($page)) {
        $content = file_get_contents($page);
    } else {
        $content = 'Файла не существует';
    }
}

?>
<main>
    <?= $content; ?>
</main>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php';

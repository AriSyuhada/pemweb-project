<?php
$id = $_GET['id'];
$booksID = $_GET['booksID'];
$db = $_GET['db'];
header("Location: dataTransaksi.php?db=$db&delete=1&id=$id&booksID=$booksID");
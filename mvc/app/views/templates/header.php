<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>Halaman <?=isset($data["title"]) ? $data["title"] : "Home" ?></title>
        <link href="<?=BASE_URL;?>/css/bootstrap.css" rel="stylesheet" >
    </head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container-fluid">
            <a class="navbar-brand" href="<?= BASE_URL?>">PHP MVC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="<?= BASE_URL?>">Home</a>
                    <a class="nav-link" href="<?= BASE_URL?>/About">About</a>
                </div>
            </div>
        </div>
</nav>
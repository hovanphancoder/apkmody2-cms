<!DOCTYPE html>
<html lang="<?= lang_code() ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    echo $meta ?? '';
    echo $schema ?? '';
    echo $append ?? '';
    ?>
    <?= \System\Libraries\Render::renderAsset('head', 'frontend') ?>
</head>
<body>
    <header id="header">
        this is header
    </header>


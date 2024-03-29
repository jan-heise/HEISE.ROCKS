<!DOCTYPE html>
<html lang="<?= $kirby->language()->code() ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php snippet(name: 'meta_information') ?>
    <?php snippet(name: 'robots') ?>
    <?= css(url: 'assets/css/app.css') ?>
</head>

<body>
    <main>
        <?= $slot ?>
    </main>

    <?= js(url: 'assets/js/app.js') ?>
</body>

</html>
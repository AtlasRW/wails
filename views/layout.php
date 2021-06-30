<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title><?= ($TITLE) ? "${TITLE} | NEW WAILS APP" : "NEW WAILS APP" ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <? $ASSET::style('main') ?>
    <? $ASSET::script('main') ?>

</head>

<body>

<? $VIEW::yield() ?>

</body>

</html>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL_BASE . 'assets/css/estilo.css' ?>">
    <title>Sistema</title>
</head>
<body>

    <div>
        <?php include "app/View/menu.php"; ?>
    </div>

    <br>

    <div class="corpo">
        <?php $this->load($view, $viewData); ?>
    </div>

</body>
</html>
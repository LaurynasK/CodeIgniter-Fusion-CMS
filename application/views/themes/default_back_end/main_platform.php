<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= $title ?></title>
    <?php foreach ($css as $css_file): ?>
        <link rel='stylesheet' type='text/css' href="<?= $css_file ?>">
    <?php endforeach ?>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script>
        var base_url = "<?= base_url() ?>" + "index.php" ; 
    </script>
    
</head>
<body>
<div id="wrapper">
    <?= $menu ?>
    <?= $current_page; ?>
</div>
    <?php foreach ($js as $js_file): ?>
        <script type='text/javascript' src="<?= $js_file ?>" ></script>
    <?php endforeach ?>
<div id="footer">
    <?php if(isset($footer)): ?>
        <?= $footer; ?>
    <?php endif; ?>
</div>

</body>
</html>


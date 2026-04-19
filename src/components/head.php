<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
            if(isset($titulo_pagina)) {
                echo "LANDGG - " . $titulo_pagina;
            } else {
                echo "LANDGG Technology";
            }
        ?>
    </title>
    <link rel="icon" type="image/png" href="src/public/img/logo.jpg">
    <link rel="stylesheet" href="src/public/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <?php if(isset($css_especifico)): ?>
        <link rel="stylesheet" href="src/public/css/<?php echo $css_especifico; ?>">
    <?php endif; ?>
</head>
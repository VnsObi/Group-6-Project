<?php
echo <<<EOT
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8">
                
                <link href="main.css" rel="stylesheet" type="text/css">
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
            </head>
            <body>
                <header>
                    <div class="content-wrapper">
                        <h1>Healthy Dip N Slice</h1>
                        <nav>
                            <a href="index.php">Home</a>
                            <a href="index.php?page=products">Products</a>
                        </nav>
                        <div class="link-icons">
                            <a href="index.php?page=cart">
                                <i class="fas fa-shopping-cart"></i>
                               
                            </a>
                        </div>
                    </div>
                </header>
        EOT;
?>
<?php
$year = date('Y');
echo <<<EOT
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8">
            
            <link href="main.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        </head>
        <body>
        <footer>
                <div class="content-wrapper">
                    <p>&copy; $year, Healthy Dip N Slice</p>
                </div>
            </footer>
EOT;
?>
<?php
$html = <<<EOS
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Work Flow Program</title>
            <link rel="stylesheet" type="text/css" href="styles.css">
        </head>
        <body>
            <nav id="navigation" class="site-navigation" role="navigation">
                <ul class="menu">
                    <li class="menu-item"><a href="#">Операции</a>
                        <ul class="dropdown">
                            <li class="menu-item sub-menu"><a href="#">Приходи</a></li>
                            <li class="menu-item sub-menu"><a href="#">Разходи</a></li>
                        </ul>
                    </li>
                    <li class="menu-item"><a href="#">Арендатори</a>
                        <ul class="dropdown">
                            <li class="menu-item sub-menu"><a href="#">Данни</a></li>
                            <li class="menu-item sub-menu"><a href="#">Срещи</a></li>
                        </ul> 
                    </li>
                </ul>
            </nav>
        </body>
    </html>
EOS;
echo $html;
?>
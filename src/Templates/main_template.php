<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/style.css">
    <title>Сайт-визитка</title>
</head>
<body>
<header class="header"> 
        <div class="wrapper" style="background: url('<?=$params[1]?>') no-repeat;">
            <div class="header__wrapper">
                <div class="header__logo">
                    <a href="/" class="header__logo_link">
                        <img src="./public/img/svg/coffee-beans.svg" alt="Logo Coffee house" class="header__logo_pic">
                    </a>
                </div>
                <nav class="header__nav">
                    <ul class="header__list">
                        <li class="header__item">
                            <a href="/" class="<?='menu__link ' . $params[3][0]?>" style="color:white">Coffee house</a>
                        </li>
                        <li class="header__item">
                            <a href="/about" class="<?='menu__link ' . $params[3][1]?>" style="color:white">Our coffee</a>
                        </li>
                        <li class="header__item">
                            <a href="/contact" class="<?='menu__link ' . $params[3][2]?>" style="color:white">For your pleasure</a>
                        </li>
                    </ul>
                </nav>
            </div>
	    <div class="header__logo_text">
                <?=$params[2]?>
            </div>
        </div>
    </header>
    <?php include $contentName; ?>
</body>
</html>
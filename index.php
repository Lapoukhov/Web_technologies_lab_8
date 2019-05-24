<?php  
	if(isset($_GET['lang']))
	{
		$_SESSION['lang'] = trim(strip_tags($_GET['lang']));
		$date = time() + 30*24*60*60;
		setcookie('lang',trim(strip_tags($_GET['lang'])),$date);
	}
	else if (isset($_COOKIE['lang'])) {
		$_SESSION['lang'] = $_COOKIE['lang'];
		}
		else {
			preg_match_all('/([a-z]{1,8}(?:-[a-z]{1,8})?)(?:;q=([0-9.]+))?/', strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"]), $matches);
			$langs = array_combine($matches[1], $matches[2]);
			foreach ($langs as $n => $v)
			$langs[$n] = $v ? $v : 1;
			arsort($langs);	
			$default_lang = key($langs);
			$_SESSION['lang'] = $default_lang;
		}
		
	$dict = parse_ini_file($_SESSION['lang'].'.ini');
?>
<!DOCTYPE html>
<html>	
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="Tesla,Тесла,Model S,Model X,Model 3,Roadster,Электромобиль,Электрокар,Электроавтомобиль">
        <meta name="description" content="Официальный сайт Tesla в Беларуси. Вся информация о моделях и технологиях. Tesla Model S, Tesla Model X, Tesla Model 3, Roadster.">
        <title>Tesla</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="menu.css">
        <link rel="stylesheet" href="footer.css">
        <link rel="shortcut icon" href="img/tesla_icon.png" type="image/png">
    </head>
    <body>
        <header>
            <nav>
				<div class="lang">
					<div class="tag"><?=$dict['LANGUAGE']?>: <a href="?lang=en-us">English</a>|<a href="?lang=ru-ru">Русский</a></div>
				</div>
                <div class="logo">
                    <img src="img/tesla_icon.png" alt="Логотип Тесла">
                    <h1>Tesla</h1>
                    <div class="button-menu">
                        <img src="img/menu_1.png" alt="Меню">
                    </div>
                </div>
                <ul id="navigation-menu">
                    <li class="menu"><a href="index.php"><?=$dict['HOME']?></a></li>
                    <li class="menu"><a href="Model S.php">MODEL S</a></li>
                    <li class="menu"><a href="Model X.php">MODEL X</a></li>
                    <li class="menu"><a href="Model 3.php">MODEL 3</a></li>
                    <li class="menu"><a href="Roadster.php">ROADSTER</a></li>
                </ul>            
            </nav>
        </header>
        <div class="banner-head">
            <img src="img/tesla_4.jpeg" alt="Главный баннер">
            <div class="banner-head-text">
                <h2>Tesla - <?=$dict['SLOGAN']?></h2>
            </div>
        </div>
		<div class="cars">
            <h3><?=$dict['LINEUP']?></h3>
            <div>
                <a href="Model S.php"><img src="img/model_s.png" alt="MODEL S"></a>
                <p><a href="Model S.php">MODEL S</a></p>
                <p><?=$dict['BOOST']?> <?=$dict['KM/H']?>: 2,7 <?=$dict['SECOND']?></p>
                <p><?=$dict['MAX SPEED']?>: 250 <?=$dict['KM/H']?></p>
                <p><?=$dict['POVER RESERVE']?>: 613 <?=$dict['KM']?></p>
            </div>
            <div>
                <a href="Model X.php"><img src="img/model_x.png" alt="MODEL X"></a>
                <p><a href="Model X.php">MODEL X</a></p>
                <p><?=$dict['BOOST']?> <?=$dict['KM/H']?>: 3,1 <?=$dict['SECOND']?></p>
                <p><?=$dict['MAX SPEED']?>: 250 <?=$dict['KM/H']?></p>
                <p><?=$dict['POVER RESERVE']?>: 542 <?=$dict['KM']?></p>
            </div>
            <div>
                <a href="Model 3.php"><img src="img/model_3.png" alt="MODEL 3"></a>
                <p><a href="Model 3.php">MODEL 3</a></p>
                <p><?=$dict['BOOST']?> <?=$dict['KM/H']?>: 3,5 <?=$dict['SECOND']?></p>
                <p><?=$dict['MAX SPEED']?>: 250 <?=$dict['KM/H']?></p>
                <p><?=$dict['POVER RESERVE']?>: 499 <?=$dict['KM']?></p>
            </div>
            <div>
                <a href="Roadster.php"><img src="img/roadster.jpg" alt="ROADSTER"></a>
                <p><a href="Roadster.php">ROADSTER</a></p>
                <p><?=$dict['BOOST']?> <?=$dict['KM/H']?>: 1.9 <?=$dict['SECOND']?></p>
                <p><?=$dict['MAX SPEED']?>: 402 <?=$dict['KM/H']?></p>
                <p><?=$dict['POVER RESERVE']?>: 998 <?=$dict['KM']?></p>
            </div>
        </div>
		<footer>
            <table class="model">
                <th colspan="2"><?=$dict['LINEUP']?> Tesla</th>
                <tr>
                    <td><a href="Model S.php">- MODEL S</a></td>
                </tr>
                <tr>
                    <td><a href="Model X.php">- MODEL X</a></td>
                </tr>
                <tr>
                    <td><a href="Model 3.php">- MODEL 3</a></td>
                </tr>
                <tr>
                    <td><a href="Roadster.php">- ROADSTER</a></td>
                </tr>
            </table>
            <table>
                <th colspan="2">Tesla <?=$dict['NETWORKS']?></th>
                <tr>
                    <td><a class="instagram" href="https://www.instagram.com/teslamotors/?hl=ru"><img src="img/instagram.png"></a></td>
                    <td><a class="instagram" href="https://www.instagram.com/teslamotors/?hl=ru">Tesla <?=$dict['IN']?> instagram</a></td>
                </tr>
                <tr>
                    <td><a class="facebook" href="https://www.facebook.com/TeslaMoto/"><img src="img/facebook.png"></a></td>
                    <td><a class="facebook" href="https://www.facebook.com/TeslaMoto/">Tesla <?=$dict['IN']?> facebook</a></td>
                </tr>
                <tr>
                    <td><a class="youtube" href="https://www.youtube.com/user/TeslaMotors"><img src="img/youtube.png"></a></td>
                    <td><a class="youtube" href="https://www.youtube.com/user/TeslaMotors">Tesla <?=$dict['IN']?> youtube</a></td>
                </tr>
                <tr>
                    <td><a class="twitter" href="https://twitter.com/tesla"><img src="img/twitter.png"></a></td>
                    <td><a class="twitter" href="https://twitter.com/tesla">Tesla <?=$dict['IN']?> twitter</a></td>
                </tr>
            </table>
            <hr>
            <p>© Tesla 2019. <?=$dict['RIGHTS']?></p>
        </footer>
	</body>
</html>
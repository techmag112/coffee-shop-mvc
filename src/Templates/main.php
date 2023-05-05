<?php

?>
<header class="header"> 
        <div class="wrapper" style="background: url('./public/img/Main_bg.jpg') no-repeat;">
            <div class="header__wrapper">
                <div class="header__logo">
                    <a href="/" class="header__logo_link">
                        <img src="./public/img/svg/coffee-beans.svg" alt="Logo Coffee house" class="header__logo_pic">
                    </a>
                </div>
                <nav class="header__nav">
                    <ul class="header__list">
                        <li class="header__item">
                            <a href="/" class="menu__link active" style="color:white">Coffee house</a>
                        </li>
                        <li class="header__item">
                            <a href="/about" class="menu__link" style="color:white">Our coffee</a>
                        </li>
                        <li class="header__item">
                            <a href="/pleasure" class="menu__link" style="color:white">For your pleasure</a>
                        </li>
                    </ul>
                </nav>
            </div>
	    <div class="header__logo_text">
                Everything You Love About Coffee
            </div>
        </div>
    </header>
    <section>
       <div class="wrapper__section" style="margin-top: 30px;">
        <div class="title_section">
            About Us
        </div>
        <div class="logo_section">
            <img src="./public/img/svg/Beans_logo_black.svg" alt="Logo Coffee Bean Black" class="bean__logo_pic2">
        </div>
        <div class="body_section">
            Extremity sweetness difficult behaviour he of. On disposal of as landlord horrible.
            Afraid at highly months do things on at. Situation recommend objection do intention
            so questions. As greatly removed calling pleased improve an. Last ask him cold feel
            met spot shy want. Children me laughing we prospect answered followed. At it went
            is song that held help face.<br />
            Now residence dashwoods she excellent you. Shade being under his bed her, Much
            read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant
            horrible but confined day end marriage. Eagerness furniture set preserved far
            recommend. Did even but nor are most gave hope. Secure active living depend son
            repair day ladies now.
        </div>
       </div>
    </section>
    <footer>
        <div class="wrapper__footer" style="height: 550px; margin-top: 100px;">
            <div class="footer_ext">
                <div class="footer_ext_title">
                    Our best
                </div>
                <div class="footer_ext_best_list">
                    <?php foreach($params as $item): ?>
                        <div class="footer_ext_best_card">
                            <img src="./public/img/best01.jpg" alt="Best Coffee 1" class="best_coffee_pic">
                            <div class="coffee_name">Solimo Coffee Beans 2 kg</div>
                            <div class="coffee_price">10.73$</div>
                        </div>
                    <?php endforeach ?>
                    <div class="footer_ext_best_card">
                        <img src="./public/img/best02.jpg" alt="Best Coffee 2" class="best_coffee_pic">
                        <div class="coffee_name">Presto Coffee Beans 1 kg</div>
                        <div class="coffee_price">15.99$</div>
                    </div>
                    <div class="footer_ext_best_card">
                        <img src="./public/img/best03.jpg" alt="Best Coffee 3" class="best_coffee_pic">
                        <div class="coffee_name">AROMISTICO Coffee 1 kg</div>
                        <div class="coffee_price">6.99$</div>
                    </div>
                </div>
            </div> 
            <div class="footer_main">
                <div class="footer_bottom"> 
                    <nav class="footer__nav">
                        <ul class="footer__list">
                            <li class="footer__logo">
                                <img src="./public/img/svg/coffee-beans_black.svg" alt="Logo Coffee house" class="footer__logo_pic">    
                            </li>
                            <li class="footer__item">
                                <a href="/" class="menu__link active" style="color:black, marginTop:40px">Coffee house</a>
                            </li>
                            <li class="footer__item">
                                <a href="/about" class="menu__link" style="color:black, marginTop:40px">Our coffee</a>
                            </li>
                            <li class="footer__item">
                                <a href="/pleasure" class="menu__link" style="color:black, marginTop:40px">For your pleasure</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="footer_logo_bottom">
                        <img src="./public/img/svg/Beans_logo_bottom.svg" alt="Logo Coffee house Bottom" class="footer__logo_pic2">
                   </div>
                </div>
            </div>
        </div>
    </footer>   
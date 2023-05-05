    <section>
        <div class="wrapper_main"  style="margin-left:200px">
            <div class="section_photo">
                <img src="./public/img/map.jpg" alt="Coffee Cap" class="section_girl">
            </div>
            <div class="wrapper__section">
                <div class="title_section">
                    Our contacts
                </div>
                <div class="logo_section">
                    <img src="./public/img/svg/Beans_logo_black.svg" alt="Logo Coffee Bean Black" class="bean__logo_pic2">
                </div>
                <div class="body_section">
                        602 9th Ave, New York, NY 10036, USA,
                        +1 646-755-8073
                </div>
            </div>
        </div>
    </section>
    <section>    
    <div class="coffee_shop">
	
        <div class="shop_list">
            <div class="shop_list_row"  style="margin-left:660px">
                <img src="./public/img/svg/Line.svg" alt="Line" class="coffee_line">
            </div>
            <div class="wrapper_filter">
                Today in our sale:
           </div>               
            <div class="shop_list_row">
                <?php foreach($params[0] as $item): ?>
                    <div class="shop_card">
                        <img src="<?= './public/img/' . $item["urlimg"] ?>" alt="Best Coffee 1" class="coffee_pic">
                        <div class="coffee_name"><?= $item["kind"] ?></div>
                        <div class="coffee_price"><?= $item["country"] ?></div>
                        <div class="coffee_price"><?= $item["price"] ?></div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>    
    </section>
    <footer>
        <div class="wrapper__footer">
            <div class="footer_main">
                <div class="footer_bottom">
                <nav class="footer__nav">
                        <ul class="footer__list">
                            <li class="footer__logo">
                                <img src="./public/img/svg/coffee-beans_black.svg" alt="Logo Coffee house" class="footer__logo_pic">    
                            </li>
                            <li class="footer__item">
                                <a href="/" class="menu__link" style="color:black, marginTop:40px">Coffee house</a>
                            </li>
                            <li class="footer__item">
                                <a href="/about" class="menu__link" style="color:black, marginTop:40px">Our coffee</a>
                            </li>
                            <li class="footer__item">
                                <a href="/contact" class="menu__link active" style="color:black, marginTop:40px">For your pleasure</a>
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
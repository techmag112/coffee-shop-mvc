<?php
$logoImg = `${pathImg}./img/svg/coffee-beans.svg`;
$textStyle = {color: 'white'};
?>
<div className="header__wrapper">
    <div className="header__logo">
            <img src={logoImg} alt="Logo Coffee house" className="header__logo_pic"/>
    </div>
    <nav className="header__nav">
        <ul className="header__list">
            <li className="header__item">
                <NavLink to="/" 
                        className={({ isActive }) =>(isActive ? 'menu__link active' : 'menu__link')}
                        style={textStyle}>
                            Coffee house
                </NavLink>  
            </li>
            <li className="header__item">
                <NavLink to="/about" 
                        className={({ isActive }) =>(isActive ? 'menu__link active' : 'menu__link')}
                        style={textStyle}>
                            Our coffee
                </NavLink>  
            </li>
            <li className="header__item">
                <NavLink to="/pleasure" 
                        className={({ isActive }) =>(isActive ? 'menu__link active' : 'menu__link')}
                        style={textStyle}>
                            For your pleasure
                </NavLink>  
            </li>
        </ul>
    </nav>
</div>
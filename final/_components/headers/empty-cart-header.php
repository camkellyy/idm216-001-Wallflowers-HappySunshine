<?php
include_once __DIR__ . '/_components/header.php';
?>

<div class="headers">
    <header class="flip-flop tablet-header">
        <a href="<?php echo site_url()?>/index.php" class="logo-link"><img src="dist/images/preeti-img/background-elements/happy-sunshine-desktop-logo.png" alt="" class="desktop-logo"></a>
        <ul class="desktop-menu">
            <li class="menu-item-desktop">
                    <a href="<?php echo site_url()?>/index.php" class="desktop-link">
                        <svg viewbox="0 0 21.33 26.67" class="menu-icon">
                            <defs><style>.menu-svg-tablet{fill:#361e10;stroke:#90C5D3;stroke-width:.4px;}</style></defs>
                            <path class="menu-svg-tablet" d="m7.47,12.13c-.21.21-.5.33-.8.33s-.59-.12-.8-.33c-.21-.21-.33-.5-.33-.8s.12-.59.33-.8c.21-.21.5-.33.8-.33s.59.12.8.33c.21.21.33.5.33.8s-.12.59-.33.8Zm2.07-.8c0-.3.12-.59.33-.8.21-.21.5-.33.8-.33h4c.3,0,.59.12.8.33.21.21.33.5.33.8s-.12.59-.33.8c-.21.21-.5.33-.8.33h-4c-.3,0-.59-.12-.8-.33-.21-.21-.33-.5-.33-.8Zm.33,3.2c.21-.21.5-.33.8-.33h4c.3,0,.59.12.8.33.21.21.33.5.33.8s-.12.59-.33.8c-.21.21-.5.33-.8.33h-4c-.3,0-.59-.12-.8-.33-.21-.21-.33-.5-.33-.8s.12-.59.33-.8Zm0,4c.21-.21.5-.33.8-.33h4c.3,0,.59.12.8.33s.33.5.33.8-.12.59-.33.8c-.21.21-.5.33-.8.33h-4c-.3,0-.59-.12-.8-.33-.21-.21-.33-.5-.33-.8s.12-.59.33-.8Zm-2.07-3.2c0,.3-.12.59-.33.8-.21.21-.5.33-.8.33s-.59-.12-.8-.33c-.21-.21-.33-.5-.33-.8s.12-.59.33-.8c.21-.21.5-.33.8-.33s.59.12.8.33c.21.21.33.5.33.8Zm-.33,4.8c-.21.21-.5.33-.8.33s-.59-.12-.8-.33c-.21-.21-.33-.5-.33-.8s.12-.59.33-.8c.21-.21.5-.33.8-.33s.59.12.8.33c.21.21.33.5.33.8s-.12.59-.33.8Z"/>
                            <path class="menu-svg-tablet" d="m5.33,1.53h.2v-.2c0-.3.12-.59.33-.8.21-.21.5-.33.8-.33h8c.3,0,.59.12.8.33.21.21.33.5.33.8v.2h2.87c.65,0,1.28.26,1.74.72.46.46.72,1.09.72,1.74v20c0,.65-.26,1.28-.72,1.74-.46.46-1.09.72-1.74.72H2.67c-.65,0-1.28-.26-1.74-.72-.46-.46-.72-1.09-.72-1.74V4c0-.65.26-1.28.72-1.74.46-.46,1.09-.72,1.74-.72h2.67Zm10.67,2.27h-.2v1.53c0,.3-.12.59-.33.8-.21.21-.5.33-.8.33H6.67c-.3,0-.59-.12-.8-.33-.21-.21-.33-.5-.33-.8v-1.53h-3.07v20.4h16.4V3.8h-2.87Zm-8.2.2v.2h5.73v-1.73h-5.73v1.53Z"/>
                        </svg>
                    </a>
            </li>
            <li class="flip-flop menu-item-desktop">
                <a href="<?php echo site_url()?>/rewards.php" class="desktop-link">
                    <svg viewbox="0 0 25.5 25" class="rewards-icon">
                        <defs><style>.star-svg-tablet{fill:none;stroke:#361e10;stroke-linejoin:round;stroke-width:1.75px;}</style></defs>
                        <path class="star-svg-tablet" d="m9,8.5l3.5-7.5,4,7.5,8,1.5-6,6,1.5,8-7.5-3.5-7.5,3.5,1.5-8L1,10l8-1.5Z"/>
                    </svg>
                </a>
            </li>
            <li class="menu-item-desktop">
                <a href="<?php echo site_url()?>/profile.php" class="desktop-link">
                    <svg viewbox="0 0 24 26.67" class="profile-icon">
                        <defs><style>.profile-svg-tablet{fill:#361e10;stroke:#90C5D3;stroke-width:.4px;}</style></defs>
                        <path class="profile-svg-tablet" d="m12,2.47c-1.47,0-2.87.58-3.91,1.62-1.04,1.04-1.62,2.45-1.62,3.91s.58,2.87,1.62,3.91c1.04,1.04,2.45,1.62,3.91,1.62s2.88-.58,3.91-1.62c1.04-1.04,1.62-2.45,1.62-3.91s-.58-2.87-1.62-3.91c-1.04-1.04-2.45-1.62-3.91-1.62Zm-7.8,5.53c0-2.07.82-4.05,2.28-5.52C7.95,1.02,9.93.2,12,.2s4.05.82,5.52,2.28c1.46,1.46,2.28,3.45,2.28,5.52s-.82,4.05-2.28,5.52c-1.46,1.46-3.45,2.28-5.52,2.28s-4.05-.82-5.52-2.28c-1.46-1.46-2.28-3.45-2.28-5.52Zm2.47,13.13c-1.11,0-2.18.44-2.97,1.23-.79.79-1.23,1.86-1.23,2.97,0,.3-.12.59-.33.8-.21.21-.5.33-.8.33s-.59-.12-.8-.33c-.21-.21-.33-.5-.33-.8,0-1.72.68-3.36,1.89-4.57,1.21-1.21,2.86-1.89,4.57-1.89h10.67c1.72,0,3.36.68,4.57,1.89,1.21,1.21,1.89,2.86,1.89,4.57,0,.3-.12.59-.33.8-.21.21-.5.33-.8.33s-.59-.12-.8-.33c-.21-.21-.33-.5-.33-.8,0-1.11-.44-2.18-1.23-2.97s-1.86-1.23-2.97-1.23H6.67Z"/>
                    </svg>
                </a>
            </li>
            <li class="menu-item-desktop">
                <a href="<?php echo site_url()?>/cart.php" class="desktop-link">
                    <svg class="desktop-cart-icon shopping-bag" viewbox="0 0 34.96 39.96"><defs>
                        <style>.stroke{stroke-linecap:round;}.stroke,.fill{fill:none;stroke:#FFFBF4;stroke-width:3.02px;}</style></defs>
                        <path class="fill" d="m2.68,16.71c.12-1.37.19-2.05.64-2.47.45-.41,1.14-.41,2.52-.41h23.29c1.38,0,2.06,0,2.52.41.45.41.52,1.1.64,2.47l.72,7.91c.59,6.47.88,9.7-1,11.77-1.89,2.07-5.13,2.07-11.63,2.07h-5.78c-6.5,0-9.74,0-11.63-2.07-1.89-2.07-1.59-5.3-1-11.77l.72-7.91Z"/>
                        <path class="fill" d="m9.58,10.04v-.63c0-4.36,3.53-7.9,7.9-7.9h0c4.36,0,7.9,3.54,7.9,7.9v.63"/>
                        <path class="stroke" d="m9.58,21.4v-2.84"/>
                        <path class="stroke" d="m25.37,21.4v-2.84"/>
                    </svg>
                </a>
            </li>
        </ul>
    </header>
    <header class="flip-flop desktop-header">
        <a href="<?php echo site_url()?>/index.php" class="logo-link"><img src="dist/images/preeti-img/background-elements/happy-sunshine-desktop-logo.png" alt="" class="desktop-logo"></a>
        <ul class="desktop-menu">
            <li class="menu-item-desktop">
                    <a href="<?php echo site_url()?>/index.php" class="desktop-link"><h3 class="desktop-menu-link-item">MENU</h3></a>
            </li>
            <li class="menu-item-desktop">
                <a href="<?php echo site_url()?>/rewards.php" class="desktop-link"><h3 class="desktop-menu-link-item">REWARDS</h3></a>
            </li>
            <li class="menu-item-desktop">
                <a href="<?php echo site_url()?>/profile.php" class="desktop-link"><h3 class="desktop-menu-link-item">PROFILE</h3></a>
            </li>
            <li class="menu-item-desktop">
                <a href="<?php echo site_url()?>/cart.php" class="desktop-link">
                    <svg class="desktop-cart-icon shopping-bag" viewbox="0 0 34.96 39.96"><defs>
                        <style>.stroke{stroke-linecap:round;}.stroke,.fill{fill:none;stroke:#FFFBF4;stroke-width:3.02px;}</style></defs>
                        <path class="fill" d="m2.68,16.71c.12-1.37.19-2.05.64-2.47.45-.41,1.14-.41,2.52-.41h23.29c1.38,0,2.06,0,2.52.41.45.41.52,1.1.64,2.47l.72,7.91c.59,6.47.88,9.7-1,11.77-1.89,2.07-5.13,2.07-11.63,2.07h-5.78c-6.5,0-9.74,0-11.63-2.07-1.89-2.07-1.59-5.3-1-11.77l.72-7.91Z"/>
                        <path class="fill" d="m9.58,10.04v-.63c0-4.36,3.53-7.9,7.9-7.9h0c4.36,0,7.9,3.54,7.9,7.9v.63"/>
                        <path class="stroke" d="m9.58,21.4v-2.84"/>
                        <path class="stroke" d="m25.37,21.4v-2.84"/>
                    </svg>
                </a>
            </li>
        </ul>
    </header>

</div>

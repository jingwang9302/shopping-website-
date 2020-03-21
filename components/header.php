<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Search model -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- Header Section Begin -->
<header class="header-section">
    <div class="container-fluid">
        <div class="inner-header">
            <div class="logo">
                <a href="./index.php"><img src="img/logo.png" alt=""></a>
            </div>
            <div class="header-right">
                <img src="img/icons/search.png" alt="" class="search-trigger">
                <img src="img/icons/man.png" alt="">
                <a href="#">
                    <img src="img/icons/bag.png" alt="">
                    <span>2</span>
                </a>
            </div>
            <div class="user-access">
                <a href="#">Register</a>
                <a href="./admin.php" class="in">Admin</a>
            </div>
            <nav class="main-menu mobile-menu">
                <ul>
                    <li><a <?php if ($title == "Home") {
                                echo 'class="active"';
                            } ?> href="./index.php">Home</a></li>
                    <li><a <?php if ($title == "About") {
                                echo 'class="active"';
                            } ?> href="./about.php">About</a></li>
                    <li><a <?php if ($title == "Product") {
                                echo 'class="active"';
                            } ?> href="./product-page.php">Shop</a></li>
                    <li><a <?php if ($title == "News") {
                                echo 'class="active"';
                            } ?> href="./news.php">News</a></li>
                    <li><a <?php if ($title == "Contact") {
                                echo 'class="active"';
                            } ?> href="./contact.php">Contacts</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- Header Info Begin -->
<div class="header-info">
</div>
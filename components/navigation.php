<?php
$currentPage = basename($_SERVER['PHP_SELF'], ".php")
?>
<nav class="navbar navbar-default mb-0">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-nav">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/" class="navbar-brand">m2015we</a>
        </div>
        <div class="collapse navbar-collapse" id="collapse-nav">
            <ul class="nav navbar-nav">
                <li <?php echo ($currentPage == 'index') ? 'class="active"':''; ?>>
                    <a href="/">Home</a>
                </li>
                <li <?php echo ($currentPage == 'contact') ? 'class="active"':''; ?>>
                    <a href="/contact">Contact</a>
                </li>
                <li <?php echo ($currentPage == 'about-us') ? 'class="active"':''; ?>>
                    <a href="/about-us">About Us</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <a href="/auth/sign-in" class="btn btn-success <?php echo ($currentPage == 'sign-in') ? 'disabled':''; ?> mt-1 ml-1">Login</a>
                <a href="/auth/sign-up" class="btn btn-primary <?php echo ($currentPage == 'sign-up') ? 'disabled':''; ?> mt-1 ml-1">Sign Up</a>
            </ul>
        </div>
    </div>
</nav>
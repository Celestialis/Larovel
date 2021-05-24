<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
<div class="blank">
<header class="header">
    <div class="container headerInside">
        <a href="#"><div class="logo"> LARA<span>VEL</span> </div></a>
        <form class="searchWrap">
        <div class="searchBrowse"> Browse <i class="fas fa-caret-down"></i> </div>
        <input placeholder="Search for Item..." type="text">
        <button> <i class="fas fa-search"></i> </button>
        </form> <img class="headerCart" src="images/cart.png" alt="">
        <button class="accountBtn"> My Account <i class="fas fa-caret-down"></i> </button>
    </div>
</header>
<div class="NavContent">
<nav class="Navigation">
    <a href="/"><div class="logo"> LARA<span>VEL</span> </div></a>
    <a href="/news"><div class="logo"> NEW<span>S</span> </div></a>
    <a href="/categories"><div class="logo"> CATEGORI<span>ES</span> </div></a>
    <a href="/about"><div class="logo"> A<span>BOUT</span> </div></a>
</nav>
<div class='content'>
<h1>Get new with id  . <?=$id; ?></h1>
</div>
</div>
</div>
<footer>
<div class="copyrights">
        <div class="container copyrightsWrap">
            <div class="copyrightsLeft"> &copy; 2021 Laravel Melanism Project. </div>
            <div class="copyrightsRight"> <a href=""><i class="fab fa-facebook-f"></i></a> <a href=""><i class="fab fa-twitter"></i></a> <a href=""><i class="fab fa-linkedin-in"></i></a> <a href=""><i class="fab fa-pinterest-p"></i></a> <a href=""><i class="fab fa-google-plus-g"></i></a> </div>
        </div>
    </div>
</footer>
</body>
</html>

<style>

.blank {
    height: 400px;
    margin: 0 25px;
}
.header {
    height: 100px;
    border-bottom: 1px solid #ececec;
}
.headerInside {
    height: inherit;
    display: flex;
    flex-direction: row;
    align-items: center;
}

.headerInside .logo {
    color: #222;
    width: 165px;
    line-height: 51px;
    background: url(../images/logo.png) no-repeat;
    font-size: 27px;
    font-weight: 300;
    padding-left: 60px;
}
.headerInside .logo span {
    color: #f16d7f;
    font-weight: 400;
}

.headerInside a {
    text-decoration: none;
}

.searchWrap {
    display: flex;
    align-items: center;
    height: 40px;
    border: 1px solid #e6e6e6;
    border-radius: 3px;
    overflow: hidden;
}

.searchWrap input {
    height: inherit;
    padding: 0 3px;
    border: none;
    outline: none;
}

.searchWrap button {
    height: inherit;
    padding: 0 8px;
    border: 0;
    background: none;
    border-left: 1px solid #e6e6e6;
}

.searchBrowse {
    height: inherit;
    padding: 12px;
    font-size: 14px;
    color: #222222;
    background-color: #f9f9f9;
    box-sizing: border-box;
    border-right: 1px solid #e6e6e6;
}

.headerCart {
    margin-left: auto;
    margin-right: 25px;
}

.accountBtn {
    padding: 15px;
    background-color: #f16d7f;
    color: white;
    border: none;
}

.NavContent {
    display: flex;
    justify-content: space-between;
    align-items: top;
}

.nav {
    display: flex;
    width: 200px;
    height: 320px; 
}

.Navigation .logo {
    color: #222;
    font-weight: 300;
}

.Navigation .logo span {
    color: #f16d7f;
    font-weight: 400;
}

.Navigation a {
    text-decoration: none;
}

.content {
    margin-top: 10px;
    width: 1100px;
    height: 320px; 
}

.copyrights {
    height: 80px;
    background: #e6e6e6;
}

.copyrightsWrap {
    color: #7a7a7a;
    height: inherit;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.copyrightsRight {
    margin-right: 5px;
    display: flex;
    width: 200px;
    justify-content: space-between;
}

.copyrightsLeft {
    margin-left: 5px;
}

.copyrightsRight a {
    text-decoration: none;
    color: inherit;
}

.copyrightsRight i {
    width: 32px;
    height: 32px;
    background: white;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.copyrightsRight i:hover {
    color: white;
    background: #f16d7f;
}
</style>

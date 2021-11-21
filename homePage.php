<!DOCTYPE html>
<html>

<head>
    <title>Online BookStore</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/homePage_style.css">
    <link rel="stylesheet" href="CSS/bookDetails_style.css">
    <link rel="stylesheet" href="CSS/cart_style.css">
    <link rel="stylesheet" href="CSS/wishList_style.css">
    <script src="JS/jquery-3.6.0.js"></script>
    <script src="JS/homePage_script.js"></script>
</head>

<body>
    <div class="container">
        <div id="left-side-bar">
            <div class="logo"></div>
            <div class="user_nav">
                <div class='user_btn' id='user_cart' onclick="getUserCart()"> Shopping Cart</div>
                <div class='user_btn' id='user_wishList'
                onclick="getUserWishList()">WishList</div>
            </div>
            <div class='lineBreak'></div>
            <div id="ctg_AllBook" onclick="getAllBooks()">All Books</div>
            <div class="txtCategories">
                <h4>Categories</h4>
            </div>
            <div class="categories">
                <div class="category">Category 2</div>
                <div class="category">Category 3</div>
                <div class="category">Category 4</div>
                <div class="category">Category 5</div>
                <div class="category">Category 6</div>
                <div class="category">Category 7</div>
                <div class="category">Category 8</div>
                <div class="category">Category 9</div>
                <div class="category">Category 10</div>
                <div class="category">Category 11</div>
                <div class="category">Category 12</div>
                <div class="category">Category 13</div>
            </div>
        </div>

        <div id="main-display">
            <?php include('booksDisplay.php') ?>
        </div>

        <div id="messages-bar"></div>
    </div>
</body>

</html>
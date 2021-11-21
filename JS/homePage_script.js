function getBookDetails(ISBN) {
    defaultAllButton()
    var xhrBookDetials = new XMLHttpRequest();

    xhrBookDetials.onreadystatechange = () => {
        if (xhrBookDetials.readyState == 4 && xhrBookDetials.status == 200) {
            document.getElementById("main-display").innerHTML = xhrBookDetials.responseText;
        }
    };

    xhrBookDetials.open("GET", "php/getBookDetails.php?ISBN=" + ISBN, true);
    xhrBookDetials.send();
}


function getAllBooks() {
    defaultAllButton()
    $("#ctg_AllBook").css("background-color", "white");
    $("#ctg_AllBook").css("color", "black");
    var xhrBookDetials = new XMLHttpRequest();

    xhrBookDetials.onreadystatechange = () => {
        if (xhrBookDetials.readyState == 4 && xhrBookDetials.status == 200) {
            document.getElementById("main-display").innerHTML = xhrBookDetials.responseText;
        }
    };

    xhrBookDetials.open("GET", "booksDisplay.php", true);
    xhrBookDetials.send();
}

function getUserCart() {
    defaultAllButton()
    $("#user_cart").css("background-color", "white");
    $("#user_cart").css("color", "black");
    var xhrUserCart = new XMLHttpRequest();

    xhrUserCart.onreadystatechange = () => {
        if (xhrUserCart.readyState == 4 && xhrUserCart.status == 200) {
            document.getElementById("main-display").innerHTML = xhrUserCart.responseText;
        }
    };

    xhrUserCart.open("GET", "cart.php", true);
    xhrUserCart.send();
}

function getUserWishList() {
    defaultAllButton()
    $("#user_wishList").css("background-color", "white");
    $("#user_wishList").css("color", "black");
    var xhrUserWishList = new XMLHttpRequest();

    xhrUserWishList.onreadystatechange = () => {
        if (xhrUserWishList.readyState == 4 && xhrUserWishList.status == 200) {
            document.getElementById("main-display").innerHTML = xhrUserWishList.responseText;
        }
    };

    xhrUserWishList.open("GET", "wishList.php", true);
    xhrUserWishList.send();
}

function defaultAllButton() {
    $("#ctg_AllBook").css("background-color", "black");
    $("#ctg_AllBook").css("color", "white");
    $(".user_btn").css("background-color", "black");
    $(".user_btn").css("color", "white");
    $(".category").css("background-color", "black");
    $(".category").css("color", "white");
}

<?php include('books_header.php');?>
<?php
echo '<div id="booksCont">';
$xml = new DOMDocument("1.0");
$xml->load("XMLs/books.xml");
$books = $xml->getElementsByTagName("book");

foreach ($books as $book) {
    $ISBN = $book->getAttribute("ISBN");
    $title = $book->getElementsByTagName("title")->item(0)->nodeValue;
    $author = $book->getElementsByTagName("author")->item(0)->nodeValue;
    $imagePath = $book->getElementsByTagName("imagePath")->item(0)->nodeValue;
    $price = $book->getElementsByTagName("price")->item(0)->nodeValue;


    echo <<<_BOOK
                    <div class='theBook' onclick='getBookDetails($ISBN)'>
                        <img class='book-image' src='$imagePath'>
                        <p class="book-title">$title</p>
                        <p class='book-author'>$author</p>
                        <div class='book-price'>PHP $price</div>
                    </div>
                 _BOOK;
}


echo'</div>';

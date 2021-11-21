
<?php
include('../books_header.php');

$bookISBN = $_GET["ISBN"];
$xml = new DOMDocument("1.0");
$xml->load("../XMLs/books.xml");
$books = $xml->getElementsByTagName("book");

foreach ($books as $book) {
    $ISBN = $book->getAttribute("ISBN");
    if ($ISBN == $bookISBN) {
        $title = $book->getElementsByTagName("title")->item(0)->nodeValue;
        $author = $book->getElementsByTagName("author")->item(0)->nodeValue;
        $publisher = $book->getElementsByTagName("publisher")->item(0)->nodeValue;
        $publishedDate = $book->getElementsByTagName("publishedDate")->item(0)->nodeValue;
        $format = $book->getElementsByTagName("format")->item(0)->nodeValue;
        $price = $book->getElementsByTagName("price")->item(0)->nodeValue;
        $description = $book->getElementsByTagName("description")->item(0)->nodeValue;

        $imagePath = $book->getElementsByTagName("imagePath")->item(0)->nodeValue;

        //for genres

        $genres = $book->getElementsByTagName("genre");
        $str = "";
        for ($i = 0; $i < count($genres); $i++) {
            $genre = $book->getElementsByTagName("genre")->item($i)->nodeValue;
            $str = $str . $genre . ", ";
        }
        $newBookGenres = substr($str, 0, -2);
        echo <<<_BOOK
                <div class='book_Details'>
                    <div class='book-leftPArt'>
                        <img src="$imagePath">
                    </div>
                    <div class='book-rightPArt'>  
                        <table>
                            <tr>
                                <td class='book_title'>
                                <strong>Title:</strong>
                                <label>$title</label>
                                </td>
                            </tr>
                            <tr>
                                <td class='book_author'>
                                <strong>Author:</strong>
                                <label>$author</label>
                                </td>

                            </tr>
                            </tr>
                            <tr>
                                <td class='book_genre'>
                                <strong>Genre:</strong>
                                <label>$newBookGenres</label>
                                </td>

                            </tr>
                            <tr>
                                <td class='book_publisher'>
                                <strong>Publisher:</strong>
                                <label>$publisher</label>
                                </td>
                            </tr>
                            <tr>
                                <td class='book_publishedDAte'>
                                <strong>Published Date:</strong>
                                <label>$publishedDate</label>
                                </td>
                            </tr>
                            <tr>
                                <td class='book_ISBN'>
                                <strong>ISBN-13:</strong>
                                <label>$ISBN</label>
                                </td>
                            </tr>
                            <tr>
                                <td class='book_format'>
                                <strong>Format:</strong>
                                <label>$format</label>
                                </td>
                            </tr>
                            <tr>
                                <td class='book_description'>
                                <strong>Description:</strong>
                                <label>$description</label>
                                </td>
                            </tr>
                        </table>
                        <div class='order_cont'>
                            <button id='btnCart'>ADD TO CART</button>
                        </div>   
                    </div>
                </div>
            _BOOK;
        break;
    }
}

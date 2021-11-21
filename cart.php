<?php include('books_header.php'); ?>

<div class="cart_cont">
    <h1>Shopping Cart</h1>
    <div class="cart_Display">
        <div class="cart-leftPart">
            <div class="cart_AllItems">
                <p class="select_all">Select all Items</p>
            </div>
            <div class="cart_heading">
                <p class="cart_heading_item">Item</p>
                <p class="cart_heading_subtotal">Subtotal</p>
            </div>
            <div class="cart_items">
                <div class="cart_item">
                    <div class="item_left">
                        <img src="Images/The_Da_Vinci_Code.jpg">
                    </div>
                    <div class="item_right">
                        <p class="item_bookTitle">Title</p>
                        <p class="item_bookAuthor">Author</p>
                        <p class="item_bookFormat">Format</p>
                        <p class="item_bookPrice">PHP XXX.XX</p>
                        <div class="item_qty">
                            <p>sample</p>
                        </div>
                    </div>
                    <div class="item_SubTotal">
                        <p id="itemSubTotal">PHP XXXX</p>
                    </div>
                </div>
                <div class="cart_item">
                    <div class="item_left">
                        <img src="Images/The_Da_Vinci_Code.jpg">
                    </div>
                    <div class="item_right">
                        <p class="item_bookTitle">Title</p>
                        <p class="item_bookAuthor">Author</p>
                        <p class="item_bookFormat">Format</p>
                        <p class="item_bookPrice">PHP XXX.XX</p>
                        <div class="item_qty">
                            <p>sample</p>
                        </div>
                    </div>
                    <div class="item_SubTotal">
                        <p id="itemSubTotal">PHP XXXX</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="cart-rightPart">
            <p class="header">Order Summary</p>
            <div class="order_label">
                <div class='order_right'>
                    <p>Subtotal</p>
                    <p>Shipping Fee</p>
                </div>

                <div class='order_left'>
                    <p id="subTotal">PHP XXXXX</p>
                    <p id="shippingFee">PHP XXXXX</p>
                </div>
            </div>
            <div class="order_total">
                <div class='total_right'>
                    <p>Order Total</p>
                </div>

                <div class='total_left'>
                    <p id="Total">PHP XXXXX</p>
                </div>
            </div>
            <button id="btnCheckOut">CHECKOUT</button>
        </div>
    </div>

</div>
</div>
<?php

ob_start();
// php
$title = "Product Details";

$products = glob('images/products/*.jpg');

$content_php = ob_get_clean();


ob_start(); ?>

<?php ob_start();  ?>


<style>
    .img-zoom-container {
        position: relative;
    }

    .img-zoom-lens {
        position: absolute;
        border: 1px solid #d4d4d4;
        /*set the size of the lens:*/
        width: 40px;
        height: 40px;
    }

    .img-zoom-result {
        display: none;
        border: 1px solid #d4d4d4;
        /*set the size of the result div:*/
        width: 300px;
        height: 300px;
    }
</style>
<?php $content_css = ob_get_clean();  ?>





<h1>Product Details Page</h1>




<div class="row">
    <div class="col">
        <!-- <img src="images/1.jpg" alt="" height="500"> -->

        <div class="img-zoom-container">
            <img id="myimage" onmouseover="get_result()" onMouseOut="hide_result()" src="images/products/_1_0_10000452246-1k.jpg" alt="">
            <div id="myresult" class="img-zoom-result"></div>
        </div>
    </div>

    <div class="col">
        <h3>Product 1</h3>
        <div class="text-warning">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta dignissimos reiciendis perspiciatis
            tenetur architecto id dolore! Molestiae debitis eius animi tempora ipsum, ullam libero. Doloremque
            rerum quas amet delectus facere?
        </p>

        <form>
            <div class="row mb-3">
                <div class="col">
                    <div class="form-group">
                        <label for="">Quantity:</label>
                        <input type="number" min placeholder="Quantity:" class="form-control" value="1">
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="">Couleurs:</label>
                        <select class="form-control">
                            <option value="r">Rouge</option>
                            <option value="bl">Bleu</option>
                            <option value="b">Blanc</option>
                            <option value="n">Noir</option>
                        </select>
                    </div>
                </div>
            </div>
        </form>


        <div class="h3 mb-3">
            <b>$50.00</b>
            <del class="text-danger">$75.00</del>
        </div>

        <a href="cart" class="btn bg-kitea text-white">
            <i class="fas fa-shopping-cart"></i>
            Add to cart
        </a>

    </div>
</div>





<?php $content_html = ob_get_clean(); ?>

<?php ob_start();  ?>

<script>
    var result = document.getElementById("myresult");

    function get_result() {
        console.log("ok")
        result.style.display = "block";
    }

    function hide_result() {
        console.log("ok 2")
        result.style.display = "none";
    }





    function imageZoom(imgID, resultID) {
        var img, lens, result, cx, cy;
        img = document.getElementById(imgID);
        result = document.getElementById(resultID);
        /* Create lens: */
        lens = document.createElement("DIV");
        lens.setAttribute("class", "img-zoom-lens");
        /* Insert lens: */
        img.parentElement.insertBefore(lens, img);
        /* Calculate the ratio between result DIV and lens: */
        cx = result.offsetWidth / lens.offsetWidth;
        cy = result.offsetHeight / lens.offsetHeight;
        /* Set background properties for the result DIV */
        result.style.backgroundImage = "url('" + img.src + "')";
        result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
        /* Execute a function when someone moves the cursor over the image, or the lens: */
        lens.addEventListener("mousemove", moveLens);
        img.addEventListener("mousemove", moveLens);
        /* And also for touch screens: */
        lens.addEventListener("touchmove", moveLens);
        img.addEventListener("touchmove", moveLens);



        function moveLens(e) {





            var pos, x, y;
            /* Prevent any other actions that may occur when moving over the image */
            e.preventDefault();
            /* Get the cursor's x and y positions: */
            pos = getCursorPos(e);
            /* Calculate the position of the lens: */
            x = pos.x - (lens.offsetWidth / 2);
            y = pos.y - (lens.offsetHeight / 2);
            /* Prevent the lens from being positioned outside the image: */
            if (x > img.width - lens.offsetWidth) {
                x = img.width - lens.offsetWidth;
            }
            if (x < 0) {
                x = 0;
            }
            if (y > img.height - lens.offsetHeight) {
                y = img.height - lens.offsetHeight;
            }
            if (y < 0) {
                y = 0;
            }
            /* Set the position of the lens: */
            lens.style.left = x + "px";
            lens.style.top = y + "px";
            /* Display what the lens "sees": */
            result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
            // if (moveLens) {
            // result.style.display = "block";
            // } else {
            //     result.style.display = "none";
            // }
        }

        function getCursorPos(e) {
            var a, x = 0,
                y = 0;
            e = e || window.event;
            /* Get the x and y positions of the image: */
            a = img.getBoundingClientRect();
            /* Calculate the cursor's x and y coordinates, relative to the image: */
            x = e.pageX - a.left;
            y = e.pageY - a.top;
            /* Consider any page scrolling: */
            x = x - window.pageXOffset;
            y = y - window.pageYOffset;
            return {
                x: x,
                y: y
            };
        }
    }
</script>

<script>
    imageZoom("myimage", "myresult");
</script>
<?php $content_js = ob_get_clean();  ?>
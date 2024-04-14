<?php include("milk.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<style>
    /* products*/
.categories .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(26rem, 1fr));
    gap:1.5rem;
}

.categories .box-container .box{
    padding:3rem 2rem;
    border-radius: .5rem;
    background:#fff;
    box-shadow: var(--box-shadow);
    outline:var(--outline);
    outline-offset: -1rem;
    text-align: center; 
}

.categories .box-container .box:hover{
    outline:var(--outline-hover);
    outline-offset: 0rem;
}

.categories .box-container .box img{
    margin:1rem 0;
    height:15rem;
}

.categories .box-container .box h3{
   font-size: 2rem;
   color:var(--black);
   line-height: 1.8;
}

.categories .box-container .box p{
    font-size: 1.7rem;
    color:var(--light-color);
    line-height: 1.8;
    padding:1rem 0;
}
</style>
<body>
    <!-- products-->
<section class="categories" id="categories">

<h1 class="heading"> Milk<span>Product</span> </h1>z

<div class="box-container">

    <div class="box">
        <a href="milk .html">
        <img src="image/verka gold.jpg" alt="">
        <h3>Verka Gold</h3>
        <p>upto 45% off</p>
        <a href="#" class="btn">Add to cart</a></a>
    </div>

    <div class="box">
        <a href="Freshproduct.html">
        <img src="image/verka shakti.jpg" alt="">
        <h3>Verka Shakti</h3>
        <p>upto 45% off</p>
        <a href="#" class="btn">Add to cart</a></a>
    </div>

    <div class="box">
        <a href="beeverages.html">
        <img src="image/cow milk.png" alt="">
        <h3>Cow milk</h3>
        <p>upto 45% off</p>
        <a href="#" class="btn">Add to cart</a></a>
    </div>

    <div class="box">
        <a href="freshicecream.html">
        <img src="image/verka slimmer.jpg" alt="">
        <h3>Verla slimmer</h3>
        <p>upto 45% off</p>
        <a href="#" class="btn">Add to cart</a></a>
    </div>

    <div class="box">
        <a href="sweets.html">
        <img src="image/verka taaza.jpg" alt="">
        <h3>Verka taaza</h3>
        <p>upto 45% off</p>
        <a href="#" class="btn">Add to cart</a></a>
    </div>

    <div class="box">
        <a href="cattlefeed.html">
        <img src="image/verka lite.jpg" alt="">
        <h3>Verka lite</h3>
        <p>upto 45% off</p>
        <a href="#" class="btn">Add to cart</a></a>
    </div>
    

</div>

</section>
    
</body>
</html>
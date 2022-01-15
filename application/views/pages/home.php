<!-- -------------------
Name: Hope Watson
Coding 07
Purpose: Body content page to include in templating home page
------------------- -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin=""/>
<div class = "home-wrapper">
    <h1 class = "title"><?= $homeTitle ?></h1>
    <h4>The best plant based recipes in the world! Click a flag on the map to explore food from that country or go to the 
        <a id="categories-link" href="#categories">categories</a>
    </h4>
    <div id="map"></div>
    <h2 id="categories"><?= $homeSubTitle ?></h2>
        <div class = "main-home-wrapper">
            <div class = "category-wrapper">
                <img src = "/assets/images/palakpaneer.jpg" alt = "indian inspired">
                <h3><?= $homeCategory1 ?></h3>
                <p><?= $imgSubTitle ?><a href = "https://minimalistbaker.com/vegan-palak-paneer-with-curried-tofu/">Minimalist Baker</a></p>
            </div>
            <div class = "category-wrapper">
                <img src = "/assets/images/africanpeanutstew.jpg" alt = "soups and stews">
                <h3><?= $homeCategory2 ?></h3>
                <p><?= $imgSubTitle ?><a href = "https://www.budgetbytes.com/african-peanut-stew-vegan/">Budget Bytes</a></p>
            </div>
            <div class = "category-wrapper">
                <img src = "/assets/images/kitsuneudon.jpg" alt = "japanese inspired">
                <h3><?= $homeCategory3 ?></h3>
                <p><?= $imgSubTitle ?><a href = "https://www.chopstickchronicles.com/kitsune-udon/">Chopstic Chronicles</a></p>                
            </div>
            <div class = "category-wrapper">
                <img src = "/assets/images/cider.jpg" alt = "sandwiches and wraps">
                <h3><?= $homeCategory4 ?></h3>
                <p><?= $imgSubTitle ?><a href = "https://www.veganricha.com/instant-pot-apple-cider-recipe/">Vegan Richa</a></p>                
            </div>
            <div class = "category-wrapper">
                <img src = "/assets/images/pancakes.jpg" alt = "breakfast">
                <h3><?= $homeCategory5 ?></h3>
                <p><?= $imgSubTitle ?><a href = "https://www.connoisseurusveg.com/vegan-pancakes/">Connoisseurusveg</a></p>                
            </div>
            <div class = "category-wrapper">
                <img src = "/assets/images/burrito.jpg" alt = "mexican inspired">
                <h3><?= $homeCategory6 ?></h3>
                <p><?= $imgSubTitle ?><a href = "https://minimalistbaker.com/vegan-blt-sandwich/">Pick Up Limes</a></p>                
            </div>
            <div class = "category-wrapper">
                <img src = "/assets/images/chocolatecake.jpg" alt = "desserts">
                <h3><?= $homeCategory7 ?></h3>
                <p><?= $imgSubTitle ?><a href = "https://www.budgetbytes.com/chocolate-depression-cake/">Budget Bytes</a></p>                
            </div>
            <div class = "category-wrapper">
                <img src = "/assets/images/blt.jpg" alt = "drinks">
                <h3><?= $homeCategory8 ?></h3>
                <p><?= $imgSubTitle ?><a href = "https://minimalistbaker.com/vegan-blt-sandwich/">Minimalist Baker</a></p>                
            </div>                
            </div>
        </div>


        <script type="text/javascript" src="assets/js/map.js"></script>
</div>
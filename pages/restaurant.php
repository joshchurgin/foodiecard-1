<?php include_once("../layouts/partials/header.php"); ?>
<main class="content" id="restaurantPage">
    <div class="container">
        <section class="restaurant-main">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/pages/our-restaurants.php">Our Restaurants</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Restaurant Name</li>
                </ol>
            </nav>

            <header class="restaurant-header">
                <h1>Restaurant Name Here</h1>
                <address>404 N Country Rd, Saint James, NY 11787</address>
            </header>

            <div class="restaurant-info">
                <span class="restaurant-cost">   
                    <svg class="icon active">
                        <use xlink:href="/node_modules/feather-icons/dist/feather-sprite.svg#dollar-sign"/>
                    </svg>  
                    <svg class="icon active">
                        <use xlink:href="/node_modules/feather-icons/dist/feather-sprite.svg#dollar-sign"/>
                    </svg>  
                    <svg class="icon">
                        <use xlink:href="/node_modules/feather-icons/dist/feather-sprite.svg#dollar-sign"/>
                    </svg>
                </span>

                <span class="restaurant-type badge badge-dark">Italian Cuisine</span>

                <div class="restaurant-tags">
                    Tags: <span class="badge badge-secondary badge-pill">Tag name 1</span> <span class="badge badge-secondary badge-pill">Tag name 2</span> <span class="badge badge-secondary badge-pill">Tag name 3</span>
                </div>

                <div class="restaurant-description">
                    <p>New York City restaurateurs Pietro and Kelly Molendini took over the classic St. James farmhouse turned restaurant. The former co-owners of Vite Vinosteria in Astoria, Queens, who had moved from the city to Centerport, spent the summer renovating the dining room to a modern, clean look with neutral tones and contemporary artwork from Pietro Molendini's native Rome. They also expanded panded the bar from about four to 11 seats.</p>
                </div>

                <div class="restaurant-contact">

                    <div class="restaurant-phone"> 
                        <div class="icon-container">
                            <svg class="icon">
                                <use xlink:href="/node_modules/feather-icons/dist/feather-sprite.svg#phone"/>
                            </svg>
                        </div>

                        <a href="tel:6318626129">631.862.6129</a>
                    </div>

                    <div class="restaurant-website"> 
                        <div class="icon-container">
                            <svg class="icon">
                                <use xlink:href="/node_modules/feather-icons/dist/feather-sprite.svg#globe"/>
                            </svg>
                        </div>

                        <a href="http:/www.pietro631.com">www.pietro631.com</a>
                    </div>

                    <div class="restaurant-email"> 
                        <div class="icon-container">
                            <svg class="icon">
                                <use xlink:href="/node_modules/feather-icons/dist/feather-sprite.svg#mail"/>
                            </svg>
                        </div>

                        <a href="mailto:eat@pietro631.com">eat@pietro631.com</a>
                    </div>
                </div>

                <div class="restaurant-location">
                    <div class="google-map">ADD GOOGLE MAP HERE</div>
                    <address>
                        <svg class="icon">
                            <use xlink:href="/node_modules/feather-icons/dist/feather-sprite.svg#map-pin"/>
                        </svg>
                        404 N Country Rd, Saint James, NY 11787
                    </address>
                </div>
            
            </div>

            <div class="restaurant-related">
                <h2>Other Restaurants Nearby</h2>

                <div class="restaurants-container">
                
                    <div class="restaurant card">
                        <a href="" title="check out {restaurant name here}">
                        <div class="card-image">
                            <img class="card-img-top" src="/images/Photo 2.jpg" alt="Card image cap">
                        </div>
                        <header class="card-title">Dirty Burger</header>
                        <div class="card-body">
                            <address class="card-text">
                                12 Manetto Hill Rd,<br />
                                Plainview,<br />
                                New York
                            </address>
                        </div>
                        </a>
                    </div>
                
                    <div class="restaurant card">
                        <a href="" title="check out {restaurant name here}">
                        <div class="card-image">
                            <img class="card-img-top" src="/images/Photo 2.jpg" alt="Card image cap">
                        </div>
                        <header class="card-title">Dirty Burger</header>
                        <div class="card-body">
                            <address class="card-text">
                                12 Manetto Hill Rd,<br />
                                Plainview,<br />
                                New York
                            </address>
                        </div>
                        </a>
                    </div>
                
                    <div class="restaurant card">
                        <a href="" title="check out {restaurant name here}">
                        <div class="card-image">
                            <img class="card-img-top" src="/images/Photo 2.jpg" alt="Card image cap">
                        </div>
                        <header class="card-title">Dirty Burger</header>
                        <div class="card-body">
                            <address class="card-text">
                                12 Manetto Hill Rd,<br />
                                Plainview,<br />
                                New York
                            </address>
                        </div>
                        </a>
                    </div>
                </div>

                <a href="">Show all</a>
            </div>
        </section>

        <aside class="restaurant-side">
            <div class="fixed">
                <div class="buy-now">
                    <h4>Interested in saving 10%?</h4>

                    <svg class="icon active">
                        <use xlink:href="/node_modules/feather-icons/dist/feather-sprite.svg#chevron-down"/>
                    </svg>  

                    <a href="/pages/purchase.php" class="btn btn-primary btn-block">Buy a Foodie Card</a>
                </div>

                <hr />

                <div class="become-partner">
                    <h4>Are you a restaurant owner?</h4>

                    <svg class="icon active">
                        <use xlink:href="/node_modules/feather-icons/dist/feather-sprite.svg#chevron-down"/>
                    </svg>  

                    <a href="/pages/purchase.php" class="btn btn-dark btn-block">Become a partner</a>
                </div>
            </div>
        
        </aside>
    </div>

    <?php include_once("../layouts/mailing-list.php"); ?>
</main>


<?php include_once("../layouts/partials/footer.php"); ?>
<?php include_once("../layouts/partials/header.php"); ?>
<main class="content">
    <section id="mapContainer">
        <div class="container">
            <form class="restaurant-search">
                <fieldset>
                    <legend class="h4">Restaurant Search</legend>

                    <div class="form-group">
                        <label for="cusineType" class="sr-only">What type of quisine do you like?</label>
                        <select id="cusineType" name="cusineType" class="form-control">
                            <option value="all" selected>All types of cusine</option>
                            <option value="american">American</option>
                            <option value="indian">Chinese</option>
                            <option value="indian">Indian</option>
                            <option value="italian">Italian</option>
                            <option value="mexican">Mexican</option>
                            <option value="thai">Thai</option>
                            <option value="">etc. etc.</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="restaurantCity" class="sr-only">Select the city you want to search in</label>
                        <select id="restaurantCity" name="restaurantCity"  class="custom-select">
                            <option value="all" selected>All cities</option>
                            <option value="city1">city name 1</option>
                            <option value="city2">city name 2</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="restaurantZip" class="sr-only">Select the zip code you want to search in</label>
                        <select id="restaurantZip" name="restaurantZip" class="custom-select">
                            <option value="all" selected>All Zip codes</option>
                            <option value="city1">zip code 1</option>
                            <option value="city2">zip code 2</option>
                        </select>
                    </div>

                    <div class="form-group searchDistance-container">
                        <label for="searchDistance">Distance from my location</label>
                        <div class="input">
                            <svg class="icon">
                                <use xlink:href="/node_modules/feather-icons/dist/feather-sprite.svg#compass"/>
                            </svg>
                            <input id="searchDistance" name="searchDistance" type="range" min="0" max="100" value="10" oninput="selectedDistance.value = searchDistance.value" />
                            <output for="searchDistance" name="selectedDistance" id="selectedDistance">10</output> &nbsp;miles
                        </div>
                    </div>
                </fieldset>

                <button type="submit" class="btn btn-primary btn-block">Search</button>
            </form>
        </div>
        <div class="google-map">
            ADD GOOGLE MAP HERE
        </div>
    </section>

    <div class="container">
        <section id="ourRestaurantsIntro">
            <h1>List of participating restaurants</h1>

            <form id="restaurantNameSearch" class="form-inline">
                <div class="form-group">
                    <label for="nameSearch" class="sr-only">Filter restaurants by name</label>
                    <input type="search" id="nameSearch" name="nameSearch" placeholder="Enter restaurant name" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="sortBy" class="sr-only">Sort results by</label>

                    <select id="sortBy" name="sortBy" class="custom-select">
                            <option value="name-asc" label="Sort by name A-Z">Name A-Z</option>
                            <option value="name-desc" label="Sort by name Z-A">Name Z-A</option>
                            <option value="">other option</option>
                            <option value="">other option</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-dark">Filter Restaurants</button>
            </form>

            <div id="restaurantsContainer">
                <!-- Are these supposed to link to restaurant pages at all? -->
                <article class="restaurant">
                    <h1 class="h5">Restaurant Name</h1>
                    <address>104 West 75th Street, New York, NY 10023</address>
                    <a href="">Visit website</a>
                </article>
                <article class="restaurant">
                    <h1 class="h5">Restaurant Name</h1>
                    <address>104 West 75th Street, New York, NY 10023</address>
                    <a href="">Visit website</a>
                </article>

                <article class="restaurant">
                    <h1 class="h5">Restaurant Name</h1>
                    <address>104 West 75th Street, New York, NY 10023</address>
                    <a href="">Visit website</a>
                </article>

                <article class="restaurant">
                    <h1 class="h5">Restaurant Name</h1>
                    <address>104 West 75th Street, New York, NY 10023</address>
                    <a href="">Visit website</a>
                </article>

                <article class="restaurant">
                    <h1 class="h5">Restaurant Name</h1>
                    <address>104 West 75th Street, New York, NY 10023</address>
                    <a href="">Visit website</a>
                </article>

                <article class="restaurant">
                    <h1 class="h5">Restaurant Name</h1>
                    <address>104 West 75th Street, New York, NY 10023</address>
                    <a href="">Visit website</a>
                </article>

                <article class="restaurant">
                    <h1 class="h5">Restaurant Name</h1>
                    <address>104 West 75th Street, New York, NY 10023</address>
                    <a href="">Visit website</a>
                </article>

                <article class="restaurant">
                    <h1 class="h5">Restaurant Name</h1>
                    <address>104 West 75th Street, New York, NY 10023</address>
                    <a href="">Visit website</a>
                </article>

                <article class="restaurant">
                    <h1 class="h5">Restaurant Name</h1>
                    <address>104 West 75th Street, New York, NY 10023</address>
                    <a href="">Visit website</a>
                </article>

            </div>
        </section>

        <section id="resturantOwner" class="bg-full-primary">
            <div class="centered-text-block">
                <h2>Are you a Restaurant?</h2>
                <p class="lead">
                    Are you a restaurant owner and want to participate in our program?<br />
                    Get in touch with us and let's make that happen.
                </p>

                <a href="/pages/become-partner.php" class="btn btn-outline-light">Contact Us</a>
            </div>
        </section>
        
    </div>

    <section id="joinFoodieCard" class="bg-full-image black-overlay">
        <div class="container centered-text-block">
            <h2>Join Foodie Card</h2>
            <p class="lead">For just $29.99 a year, Foodie Card members will get 10% off their dine-in bill at participating restaurants, and with each card purchased, a meal will be donated to charity.</p>

            <a href="" class="btn btn-primary">Buy Foodie Card</a>
        </div>
        <img class="image-bg" src="/images/joinFoodieCard.jpg" /> 
    </section>

    <?php include_once("../layouts/mailing-list.php"); ?>
</main>


<?php include_once("../layouts/partials/footer.php"); ?>
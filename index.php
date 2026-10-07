<?php
$pageTitle = 'Home';
$currentPage = 'home';
include 'includes/header.php';
?>

<div class="hero-wrap">
    <section class="hero">
        <svg class="swoosh" viewBox="0 0 1200 640" preserveAspectRatio="none" aria-hidden="true">
            <path d="M-40 560 C 200 470, 330 430, 420 470 C 520 515, 500 600, 430 590 C 350 578, 330 470, 450 420 C 640 340, 980 330, 1240 120"/>
        </svg>
        <h1 data-i18n="home.title">Discover the Vaal</h1>
        <div class="hero-text">
            <p data-i18n="home.intro">Sunset cruises, a meteor crater older than life on land, and stories that shaped South Africa, all within an hour of Johannesburg.</p>
            <div class="hero-actions">
                <a href="tours.php" class="btn" data-i18n="home.cta1">Explore our tours</a>
                <a href="contact.php" class="btn btn-outline" data-i18n="home.cta2">Book now</a>
            </div>
        </div>
    </section>
</div>

<section class="section">
    <div class="container">
        <div class="section-title">
            <div>
                <span class="eyebrow" data-i18n="home.eyebrow">The Vaal River</span>
                <h2 data-i18n="home.beautyTitle">The unmatched beauty of the Vaal Triangle</h2>
            </div>
            <p data-i18n="home.whyText">The Vaal River is one of the biggest rivers in South Africa and a favourite weekend escape for people from Gauteng. It offers water sports, nature, history and great food in one place.</p>
        </div>

        <div class="bento">
            <a class="bento-card bento-map" href="https://www.google.com/maps/search/?api=1&amp;query=Vaal+River+Vanderbijlpark" target="_blank" rel="noopener">
                <span class="corner"><i class="fa-solid fa-up-right-from-square" aria-hidden="true"></i></span>
                <span class="map-pin" style="top: 30%; left: 18%;"><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Vanderbijlpark</span>
                <span class="map-pin" style="top: 46%; left: 40%;"><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Sharpeville</span>
                <span class="map-pin" style="top: 60%; left: 12%;"><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Parys</span>
                <p data-i18n="home.mapCard">See us on the map</p>
            </a>

            <div class="bento-card bento-weather">
                <span class="corner"><i class="fa-solid fa-sun" aria-hidden="true"></i></span>
                <span class="big">28&deg;</span>
                <p data-i18n="home.weatherCard">Sunny summer days</p>
            </div>

            <div class="bento-card bento-rating">
                <div class="avatars" aria-hidden="true">
                    <span style="background:#0e7c86">TM</span>
                    <span style="background:#c9733a">JW</span>
                    <span style="background:#5b4a8a">LK</span>
                    <span style="background:#2f6d3f">SN</span>
                </div>
                <div>
                    <div class="rating"><i class="fa-solid fa-star" aria-hidden="true"></i> 4.8</div>
                    <p data-i18n="home.ratingCard">Rated by more than 10 000 happy visitors</p>
                </div>
            </div>

            <div class="bento-card slider" aria-roledescription="carousel" aria-label="Vaal River highlights">
                <div class="slide active" style="background-image:url('images/gallery/sunset-over-the-vaal.jpg')" data-caption="Golden sunsets over the Vaal River"></div>
                <div class="slide" style="background-image:url('images/gallery/parys-river-rapids.jpg')" data-caption="River rapids near Parys"></div>
                <div class="slide" style="background-image:url('images/gallery/tour-boat-at-jetty.jpg')" data-caption="Our tour boat at the Riverside jetty"></div>
                <div class="slider-footer">
                    <p class="slide-caption" aria-live="polite">Golden sunsets over the Vaal River</p>
                    <div class="slider-buttons">
                        <button type="button" class="slide-prev" aria-label="Previous photo"><i class="fa-solid fa-chevron-left"></i></button>
                        <button type="button" class="slide-next" aria-label="Next photo"><i class="fa-solid fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-title">
            <h2 data-i18n="home.featured">Where we will take you</h2>
            <p data-i18n="home.featuredText">Choose from three guided experiences, each led by a local guide who knows the Vaal.</p>
        </div>
        <div class="dest-grid">
            <a class="dest-card" href="tours.php#river-cruises">
                <img src="images/river-cruise-boat.jpg" alt="Tour boat cruising on the Vaal River at sunset" width="800" height="1000">
                <h3 data-i18n="nav.cruises">River Cruises</h3>
                <p data-i18n="home.card1">Relax on a two-hour sunset cruise with snacks, birdlife and live music on board.</p>
            </a>
            <a class="dest-card" href="tours.php#vredefort-dome">
                <img src="images/vredefort-dome-hills.jpg" alt="Rolling hills of the Vredefort Dome crater" width="800" height="1000">
                <h3 data-i18n="nav.dome">Vredefort Dome</h3>
                <p data-i18n="home.card2">Hike the world's oldest and largest visible meteor crater, a UNESCO World Heritage Site.</p>
            </a>
            <a class="dest-card" href="tours.php#heritage-tours">
                <img src="images/heritage-sharpeville.jpg" alt="Memorial garden at the Sharpeville heritage site" width="800" height="1000">
                <h3 data-i18n="home.sharpeville">Sharpeville</h3>
                <p data-i18n="home.card3">Walk through the history of Sharpeville and the Vaal Triangle with a local storyteller.</p>
            </a>
            <a class="dest-card" href="tours.php#vredefort-dome">
                <img src="images/parys-town-river.jpg" alt="The river town of Parys with trees along the water" width="800" height="1000">
                <h3>Parys</h3>
                <p data-i18n="home.card4">A charming river town with cafes, art shops and lunch on our Dome day trip.</p>
            </a>
        </div>
    </div>
</section>

<section class="section">
    <div class="container dark-panel">
        <h2 data-i18n="home.ctaTitle">Visit the Vaal with us</h2>
        <p data-i18n="home.ctaText">Book a tour for yourself, your family or your school group and see the river the way locals do.</p>
        <div class="pill-group">
            <a href="contact.php" class="btn btn-light" data-i18n="home.cta2">Book now</a>
            <span><span data-i18n="tours.from">From</span> R250</span>
        </div>
        <div class="circles" aria-hidden="true">
            <img class="c1" src="images/gallery/sunset-over-the-vaal.jpg" alt="">
            <img class="c2" src="images/gallery/tour-boat-at-jetty.jpg" alt="">
            <img class="c3" src="images/river-islands-aerial.jpg" alt="">
            <img class="c4" src="images/gallery/fish-eagle-in-flight.jpg" alt="">
            <img class="c5" src="images/kayaking-vaal.jpg" alt="">
            <img class="c6" src="images/gallery/parys-river-rapids.jpg" alt="">
            <img class="c7" src="images/gallery/night-sky-camp.jpg" alt="">
            <img class="c8" src="images/gallery/dome-hiking-trail.jpg" alt="">
        </div>
    </div>
</section>

<section class="section">
    <div class="container overlap">
        <svg class="swoosh" viewBox="0 0 1200 500" preserveAspectRatio="none" aria-hidden="true">
            <path d="M-40 260 C 200 160, 360 140, 460 200 C 560 260, 520 330, 460 310 C 380 285, 420 190, 560 170 C 760 140, 1000 120, 1240 40"/>
        </svg>
        <div>
            <h2 data-i18n="home.priceTitle">The best price for a day on the river</h2>
            <p class="muted" data-i18n="home.priceText">Cruises start at R350 per adult and children under 12 pay about half. Groups of 15 or more get 10% off.</p>
            <a href="tours.php" class="btn" data-i18n="home.seePrices">See prices</a>
        </div>
        <div class="overlap-photos">
            <img class="o1" src="images/vaal-river-morning.jpg" alt="Calm Vaal River in the morning">
            <img class="o2" src="images/kayaking-vaal.jpg" alt="Kayakers paddling on the Vaal River">
            <img class="o3" src="images/watersports-jetski.jpg" alt="Jet ski riding on the Vaal River">
        </div>
    </div>
</section>

<section class="section">
    <div class="container split">
        <div>
            <h2 data-i18n="home.whyTitle">Why visit the Vaal?</h2>
            <ul class="check-list">
                <li data-i18n="home.why1">Less than one hour from Johannesburg</li>
                <li data-i18n="home.why2">Qualified and friendly local guides</li>
                <li data-i18n="home.why3">Tours for families, schools and groups</li>
                <li data-i18n="home.why4">Safe boats with life jackets for everyone</li>
            </ul>
        </div>
        <figure>
            <video controls preload="metadata" poster="images/river-cruise-boat.jpg" width="800" height="450">
                <source src="videos/vaal-river-cruise.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <figcaption data-i18n="home.videoCaption">A short look at our sunset river cruise.</figcaption>
        </figure>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-title">
            <h2 data-i18n="home.reviews">What our visitors say</h2>
        </div>
        <div class="card-grid">
            <blockquote>
                <p data-i18n="home.review1">"The sunset cruise was the highlight of our trip. The guide knew every bird by name!"</p>
                <cite>Thandi M., Soweto</cite>
            </blockquote>
            <blockquote>
                <p data-i18n="home.review2">"I never knew a meteor crater was so close to home. The Vredefort tour was amazing."</p>
                <cite>Johan van W., Pretoria</cite>
            </blockquote>
            <blockquote>
                <p data-i18n="home.review3">"The heritage tour was moving and very well explained. Every South African should go."</p>
                <cite>Lerato K., Sebokeng</cite>
            </blockquote>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

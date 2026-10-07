<?php
$pageTitle = 'About Us';
$currentPage = 'about';
include 'includes/header.php';
?>

<section class="page-banner" style="background-image: linear-gradient(rgba(7,54,72,.65), rgba(7,54,72,.65)), url('images/vaal-river-morning.jpg');">
    <div class="container">
        <h1 data-i18n="about.title">About Vaal River Adventures</h1>
        <p data-i18n="about.intro">A local, family-run tour company sharing the best of the Vaal Triangle.</p>
    </div>
</section>

<section class="section">
    <div class="container split">
        <div>
            <h2 data-i18n="about.storyTitle">Our story</h2>
            <p data-i18n="about.story1">Vaal River Adventures started in 2016 with one small boat and a big love for the river. Our founder grew up in Vanderbijlpark and wanted visitors to see the Vaal the way locals do.</p>
            <p data-i18n="about.story2">Today we run river cruises, day trips to the Vredefort Dome and heritage tours in Sharpeville. We work with local guides, restaurants and craft sellers so that tourism money stays in our community.</p>
        </div>
        <figure>
            <img src="images/vaal-river-morning.jpg" alt="Calm Vaal River in the early morning" width="800" height="500">
            <figcaption data-i18n="about.caption">The Vaal River near Vanderbijlpark.</figcaption>
        </figure>
    </div>
</section>

<section class="section section-alt">
    <div class="container">
        <div class="section-title">
            <h2 data-i18n="about.valuesTitle">What we stand for</h2>
        </div>
        <div class="card-grid">
            <div class="card"><div class="card-body">
                <h3><i class="fa-solid fa-shield-heart" aria-hidden="true"></i> <span data-i18n="about.v1">Safety first</span></h3>
                <p data-i18n="about.v1Text">All boats are inspected and every guest gets a life jacket. Our skippers hold valid licences.</p>
            </div></div>
            <div class="card"><div class="card-body">
                <h3><i class="fa-solid fa-leaf" aria-hidden="true"></i> <span data-i18n="about.v2">Respect for nature</span></h3>
                <p data-i18n="about.v2Text">We keep groups small, take all litter home and support river clean-up days.</p>
            </div></div>
            <div class="card"><div class="card-body">
                <h3><i class="fa-solid fa-people-group" aria-hidden="true"></i> <span data-i18n="about.v3">Local community</span></h3>
                <p data-i18n="about.v3Text">Our guides come from the Vaal Triangle and we buy from local businesses.</p>
            </div></div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-title">
            <h2 data-i18n="about.teamTitle">Meet the team</h2>
        </div>
        <div class="table-wrap">
            <table>
                <caption data-i18n="about.teamCaption">Our guides and their specialities</caption>
                <thead>
                    <tr>
                        <th data-i18n="about.thName">Name</th>
                        <th data-i18n="about.thRole">Role</th>
                        <th data-i18n="about.thLang">Languages</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>Sipho Dlamini</td><td data-i18n="about.r1">Founder and skipper</td><td>English, isiZulu, Sesotho</td></tr>
                    <tr><td>Palesa Mokoena</td><td data-i18n="about.r2">Heritage guide</td><td>English, Sesotho, Setswana</td></tr>
                    <tr><td>Anika Botha</td><td data-i18n="about.r3">Geology and hiking guide</td><td>English, Afrikaans</td></tr>
                    <tr><td>Kabelo Nkosi</td><td data-i18n="about.r4">Bookings and customer care</td><td>English, Sesotho, isiZulu</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container">
        <div class="section-title">
            <h2 data-i18n="about.partnersTitle">Learn more about the region</h2>
        </div>
        <ul class="check-list">
            <li><a href="https://whc.unesco.org/en/list/1162/" target="_blank" rel="noopener">UNESCO: Vredefort Dome</a></li>
            <li><a href="https://www.sahistory.org.za/" target="_blank" rel="noopener">South African History Online</a></li>
            <li><a href="https://www.sanparks.org/" target="_blank" rel="noopener">South African National Parks</a></li>
            <li><a href="https://www.dws.gov.za/" target="_blank" rel="noopener">Department of Water and Sanitation</a></li>
        </ul>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

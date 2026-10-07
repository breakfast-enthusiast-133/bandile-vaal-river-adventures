<?php
$pageTitle = 'Tours';
$currentPage = 'tours';
include 'includes/header.php';

include 'includes/tours-data.php';
?>

<section class="page-banner" style="background-image: linear-gradient(rgba(7,54,72,.65), rgba(7,54,72,.65)), url('images/river-cruise-boat.jpg');">
    <div class="container">
        <h1 data-i18n="tours.title">Our tours</h1>
        <p data-i18n="tours.intro">Three ways to experience the Vaal: on the water, in the hills and through its history.</p>
    </div>
</section>

<div class="container">

    <section id="river-cruises" class="tour">
        <div class="split">
            <div>
                <h2 data-i18n="nav.cruises">River Cruises</h2>
                <div class="tour-meta">
                    <span><i class="fa-regular fa-clock" aria-hidden="true"></i> <span data-i18n="tours.twoHours">2 hours</span></span>
                    <span><i class="fa-solid fa-users" aria-hidden="true"></i> <span data-i18n="tours.max30">Up to 30 guests</span></span>
                </div>
                <p data-i18n="tours.cruiseText">Board our covered tour boat at the Riverside jetty and cruise past islands, weeping willows and riverside lodges. Watch fish eagles and kingfishers while the sun sets over the water.</p>
                <h3 data-i18n="tours.included">What is included</h3>
                <ul class="check-list">
                    <li data-i18n="tours.c1">Welcome drink and snack platter</li>
                    <li data-i18n="tours.c2">Life jackets and safety briefing</li>
                    <li data-i18n="tours.c3">Guide commentary on birds and history</li>
                    <li data-i18n="tours.c4">Live acoustic music on Saturdays</li>
                </ul>
            </div>
            <img src="images/river-cruise-boat.jpg" alt="Tour boat on the Vaal River" width="800" height="500">
        </div>
    </section>

    <section id="vredefort-dome" class="tour">
        <div class="split reverse">
            <div>
                <h2 data-i18n="nav.dome">Vredefort Dome</h2>
                <div class="tour-meta">
                    <span><i class="fa-regular fa-clock" aria-hidden="true"></i> <span data-i18n="tours.fullDay">Full day (8 hours)</span></span>
                    <span><i class="fa-solid fa-person-hiking" aria-hidden="true"></i> <span data-i18n="tours.moderate">Moderate hike</span></span>
                </div>
                <p data-i18n="tours.domeText">About two billion years ago a huge meteorite hit the earth near the town of Parys. The crater it left is the oldest and largest one visible on Earth. Our geology guide will show you the rocks and hills that tell this story.</p>
                <h3 data-i18n="tours.included">What is included</h3>
                <ul class="check-list">
                    <li data-i18n="tours.d1">Return transport from Vanderbijlpark</li>
                    <li data-i18n="tours.d2">Guided hike with a geology guide</li>
                    <li data-i18n="tours.d3">Lunch in Parys</li>
                    <li data-i18n="tours.d4">Entrance fees</li>
                </ul>
                <p><a href="https://whc.unesco.org/en/list/1162/" target="_blank" rel="noopener" data-i18n="tours.unesco">Read about the Vredefort Dome on the UNESCO website</a></p>
            </div>
            <img src="images/vredefort-dome-hills.jpg" alt="Hills of the Vredefort Dome" width="800" height="500">
        </div>
    </section>

    <section id="heritage-tours" class="tour">
        <div class="split">
            <div>
                <h2 data-i18n="nav.heritage">Heritage Tours</h2>
                <div class="tour-meta">
                    <span><i class="fa-regular fa-clock" aria-hidden="true"></i> <span data-i18n="tours.threeHours">3 hours</span></span>
                    <span><i class="fa-solid fa-landmark" aria-hidden="true"></i> <span data-i18n="tours.walking">Walking tour</span></span>
                </div>
                <p data-i18n="tours.heritageText">On 21 March 1960 police opened fire on people protesting against pass laws in Sharpeville. South Africa now remembers this day as Human Rights Day. Our heritage guide takes you to the memorial and museum and shares the stories of the community.</p>
                <h3 data-i18n="tours.included">What is included</h3>
                <ul class="check-list">
                    <li data-i18n="tours.h1">Visit to the Sharpeville memorial and exhibition centre</li>
                    <li data-i18n="tours.h2">Local guide from the community</li>
                    <li data-i18n="tours.h3">Traditional lunch at a local restaurant</li>
                </ul>
                <p><a href="https://www.sahistory.org.za/" target="_blank" rel="noopener" data-i18n="tours.sahistory">Learn more on South African History Online</a></p>
            </div>
            <img src="images/heritage-sharpeville.jpg" alt="Sharpeville memorial garden" width="800" height="500">
        </div>
    </section>

    <section class="section">
        <div class="table-wrap">
            <table>
                <caption data-i18n="tours.tableCaption">Tour prices and times (2026)</caption>
                <thead>
                    <tr>
                        <th data-i18n="tours.thTour">Tour</th>
                        <th data-i18n="tours.thDays">Days</th>
                        <th data-i18n="tours.thTime">Departure</th>
                        <th data-i18n="tours.thAdult">Adult</th>
                        <th data-i18n="tours.thChild">Child (under 12)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-i18n="nav.cruises">River Cruises</td>
                        <td data-i18n="tours.daysCruise">Wednesday to Sunday</td>
                        <td>17:00</td>
                        <td>R<?php echo $tours['river-cruises']['adult']; ?></td>
                        <td>R<?php echo $tours['river-cruises']['child']; ?></td>
                    </tr>
                    <tr>
                        <td data-i18n="nav.dome">Vredefort Dome</td>
                        <td data-i18n="tours.daysDome">Saturday</td>
                        <td>07:30</td>
                        <td>R<?php echo $tours['vredefort-dome']['adult']; ?></td>
                        <td>R<?php echo $tours['vredefort-dome']['child']; ?></td>
                    </tr>
                    <tr>
                        <td data-i18n="nav.heritage">Heritage Tours</td>
                        <td data-i18n="tours.daysHeritage">Tuesday to Saturday</td>
                        <td>10:00</td>
                        <td>R<?php echo $tours['heritage-tours']['adult']; ?></td>
                        <td>R<?php echo $tours['heritage-tours']['child']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="section">
        <div class="calculator">
            <h2 data-i18n="tours.calcTitle">Price calculator</h2>
            <div class="calc-grid">
                <div>
                    <label for="calc-tour" data-i18n="tours.thTour">Tour</label>
                    <select id="calc-tour">
                        <?php foreach ($tours as $id => $tour): ?>
                            <option value="<?php echo $id; ?>" data-adult="<?php echo $tour['adult']; ?>" data-child="<?php echo $tour['child']; ?>"><?php echo $tour['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <label for="calc-adults" data-i18n="tours.adults">Adults</label>
                    <input type="number" id="calc-adults" min="0" max="30" value="2">
                </div>
                <div>
                    <label for="calc-children" data-i18n="tours.children">Children</label>
                    <input type="number" id="calc-children" min="0" max="30" value="0">
                </div>
            </div>
            <p><span data-i18n="tours.total">Total:</span> <span class="calc-total" id="calc-total" aria-live="polite">R700</span></p>
            <a href="contact.php" class="btn" data-i18n="home.cta2">Book now</a>
        </div>
    </section>

</div>

<?php include 'includes/footer.php'; ?>

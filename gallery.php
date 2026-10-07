<?php
$pageTitle = 'Gallery';
$currentPage = 'gallery';
include 'includes/header.php';

// Gallery photos: file name => caption. Add a photo by dropping it in images/gallery/ and adding a line here.
$photos = [
    'sunset-over-the-vaal.jpg'   => 'Sunset over the Vaal River',
    'tour-boat-at-jetty.jpg'     => 'Our tour boat at the Riverside jetty',
    'fish-eagle-in-flight.jpg'   => 'A fish eagle near the islands',
    'dome-hiking-trail.jpg'      => 'Hiking trail in the Vredefort Dome',
    'parys-river-rapids.jpg'     => 'River rapids near Parys',
    'sharpeville-memorial.jpg'   => 'Sharpeville memorial garden',
    'riverside-picnic.jpg'       => 'Riverside picnic after a cruise',
    'night-sky-camp.jpg'         => 'Stars over a riverside camp',
];
?>

<section class="page-banner" style="background-image: linear-gradient(rgba(7,54,72,.65), rgba(7,54,72,.65)), url('images/gallery/sunset-over-the-vaal.jpg');">
    <div class="container">
        <h1 data-i18n="gallery.title">Photo and video gallery</h1>
        <p data-i18n="gallery.intro">Moments from our tours. Click a photo to see it bigger.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2 data-i18n="gallery.photos">Photos</h2>
        <div class="gallery-grid">
            <?php foreach ($photos as $file => $caption): ?>
                <button type="button" data-full="images/gallery/<?php echo $file; ?>" data-caption="<?php echo htmlspecialchars($caption); ?>">
                    <img src="images/gallery/<?php echo $file; ?>" alt="<?php echo htmlspecialchars($caption); ?>" loading="lazy" width="600" height="400">
                </button>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container">
        <h2 data-i18n="gallery.videos">Videos</h2>
        <div class="video-grid">
            <figure>
                <video controls preload="metadata" poster="images/river-cruise-boat.jpg" width="800" height="450">
                    <source src="videos/vaal-river-cruise.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <figcaption data-i18n="gallery.video1">Sunset river cruise</figcaption>
            </figure>
            <figure>
                <video controls preload="metadata" poster="images/vredefort-dome-hills.jpg" width="800" height="450">
                    <source src="videos/vredefort-dome-tour.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <figcaption data-i18n="gallery.video2">Vredefort Dome day trip</figcaption>
            </figure>
        </div>
    </div>
</section>

<div class="lightbox" role="dialog" aria-modal="true" aria-label="Photo viewer">
    <button type="button" class="lb-close" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
    <button type="button" class="lb-prev" aria-label="Previous photo"><i class="fa-solid fa-chevron-left"></i></button>
    <img src="" alt="">
    <p></p>
    <button type="button" class="lb-next" aria-label="Next photo"><i class="fa-solid fa-chevron-right"></i></button>
</div>

<?php include 'includes/footer.php'; ?>

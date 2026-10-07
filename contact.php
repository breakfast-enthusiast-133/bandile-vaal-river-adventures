<?php
$pageTitle = 'Contact & Book';
$currentPage = 'contact';
include 'includes/tours-data.php';

// ---------- Handle the booking form ----------
$errors = [];
$success = false;
$form = ['name' => '', 'email' => '', 'phone' => '', 'tour' => '', 'date' => '', 'adults' => '2', 'children' => '0', 'message' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($form as $field => $default) {
        $form[$field] = isset($_POST[$field]) ? trim($_POST[$field]) : '';
    }

    if ($form['name'] === '') {
        $errors['name'] = 'Please enter your name.';
    }
    if (!filter_var($form['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Please enter a valid email address.';
    }
    if (!preg_match('/^[0-9 +()-]{10,15}$/', $form['phone'])) {
        $errors['phone'] = 'Please enter a valid phone number.';
    }
    if (!isset($tours[$form['tour']])) {
        $errors['tour'] = 'Please choose a tour.';
    }
    if ($form['date'] === '' || $form['date'] < date('Y-m-d')) {
        $errors['date'] = 'Please choose a date from today onwards.';
    }
    if (!ctype_digit($form['adults']) || $form['adults'] < 1 || $form['adults'] > 30) {
        $errors['adults'] = 'Adults must be between 1 and 30.';
    }
    if (!ctype_digit($form['children']) || $form['children'] > 30) {
        $errors['children'] = 'Children must be between 0 and 30.';
    }

    if (!$errors) {
        $tour = $tours[$form['tour']];
        $total = $form['adults'] * $tour['adult'] + $form['children'] * $tour['child'];

        // Save the booking request. The data folder is blocked from the web by data/.htaccess.
        // Vercel's disk is read-only, so there it goes to the temp folder (wiped between visits).
        $bookingsFile = getenv('VERCEL') ? sys_get_temp_dir() . '/bookings.csv' : __DIR__ . '/data/bookings.csv';
        $file = fopen($bookingsFile, 'a');
        if ($file && flock($file, LOCK_EX)) {
            fputcsv($file, [date('Y-m-d H:i'), $form['name'], $form['email'], $form['phone'], $tour['name'], $form['date'], $form['adults'], $form['children'], $total, $form['message']]);
            flock($file, LOCK_UN);
            fclose($file);
            $success = true;
        } else {
            $errors['form'] = 'Sorry, we could not save your booking. Please call us on 016 933 1234.';
        }
    }
}

// Escape a value before printing it in the page.
function e($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function fieldError($errors, $field) {
    return isset($errors[$field]) ? '<span class="field-error">' . e($errors[$field]) . '</span>' : '<span class="field-error"></span>';
}

include 'includes/header.php';
?>

<section class="page-banner">
    <div class="container">
        <h1 data-i18n="contact.title">Contact us and book a tour</h1>
        <p data-i18n="contact.intro">Send us a booking request and we will confirm your spot within one working day.</p>
    </div>
</section>

<section class="section">
    <div class="container contact-grid">

        <div class="form-card">
            <?php if ($success): ?>
                <div class="alert alert-success" role="status">
                    <strong>Thank you, <?php echo e($form['name']); ?>!</strong><br>
                    We received your request for the <?php echo e($tours[$form['tour']]['name']); ?> on <?php echo e($form['date']); ?>.
                    Estimated total: <strong>R<?php echo $total; ?></strong>. We will email <?php echo e($form['email']); ?> to confirm.
                </div>
            <?php else: ?>
                <?php if ($errors): ?>
                    <div class="alert alert-error" role="alert">
                        <?php echo isset($errors['form']) ? e($errors['form']) : 'Please fix the fields marked below.'; ?>
                    </div>
                <?php endif; ?>

                <h2 data-i18n="contact.formTitle">Booking request</h2>
                <form id="booking-form" action="contact.php" method="post" novalidate>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name" data-i18n="contact.name">Full name</label>
                            <input type="text" id="name" name="name" value="<?php echo e($form['name']); ?>" required autocomplete="name">
                            <?php echo fieldError($errors, 'name'); ?>
                        </div>
                        <div class="form-group">
                            <label for="email" data-i18n="contact.email">Email</label>
                            <input type="email" id="email" name="email" value="<?php echo e($form['email']); ?>" required autocomplete="email">
                            <?php echo fieldError($errors, 'email'); ?>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone" data-i18n="contact.phone">Phone number</label>
                            <input type="tel" id="phone" name="phone" value="<?php echo e($form['phone']); ?>" required autocomplete="tel" placeholder="071 234 5678">
                            <?php echo fieldError($errors, 'phone'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tour" data-i18n="tours.thTour">Tour</label>
                            <select id="tour" name="tour" required>
                                <option value="" data-i18n="contact.choose">Choose a tour</option>
                                <?php foreach ($tours as $id => $tour): ?>
                                    <option value="<?php echo $id; ?>"<?php echo $form['tour'] === $id ? ' selected' : ''; ?>><?php echo e($tour['name']); ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php echo fieldError($errors, 'tour'); ?>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="date" data-i18n="contact.date">Date</label>
                            <input type="date" id="date" name="date" value="<?php echo e($form['date']); ?>" min="<?php echo date('Y-m-d'); ?>" required>
                            <?php echo fieldError($errors, 'date'); ?>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="adults" data-i18n="tours.adults">Adults</label>
                                <input type="number" id="adults" name="adults" min="1" max="30" value="<?php echo e($form['adults']); ?>" required>
                                <?php echo fieldError($errors, 'adults'); ?>
                            </div>
                            <div class="form-group">
                                <label for="children" data-i18n="tours.children">Children</label>
                                <input type="number" id="children" name="children" min="0" max="30" value="<?php echo e($form['children']); ?>">
                                <?php echo fieldError($errors, 'children'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message" data-i18n="contact.message">Message (optional)</label>
                        <textarea id="message" name="message" rows="4"><?php echo e($form['message']); ?></textarea>
                    </div>

                    <button type="submit" class="btn" data-i18n="contact.send">Send request</button>
                </form>
            <?php endif; ?>
        </div>

        <aside>
            <h2 data-i18n="contact.findUs">Find us</h2>
            <address>
                <strong>Vaal Adventures</strong><br>
                12 Riverside Drive, Vanderbijlpark, 1911<br>
                <a href="tel:+27169331234">016 933 1234</a><br>
                <a href="mailto:info@vaaladventures.co.za">info@vaaladventures.co.za</a>
            </address>

            <div class="table-wrap" style="margin: 1.5rem 0;">
                <table>
                    <caption data-i18n="contact.hours">Office hours</caption>
                    <tbody>
                        <tr><th scope="row" data-i18n="contact.weekdays">Monday to Friday</th><td>08:00 to 17:00</td></tr>
                        <tr><th scope="row" data-i18n="contact.saturday">Saturday</th><td>08:00 to 14:00</td></tr>
                        <tr><th scope="row" data-i18n="contact.sunday">Sunday and public holidays</th><td data-i18n="contact.closed">Closed (tours still run)</td></tr>
                    </tbody>
                </table>
            </div>

            <div class="map">
                <iframe src="https://www.google.com/maps?q=Vanderbijlpark,+South+Africa&amp;output=embed" title="Map of Vanderbijlpark" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <p><a href="https://www.google.com/maps/search/?api=1&amp;query=Vanderbijlpark" target="_blank" rel="noopener" data-i18n="contact.directions">Get directions on Google Maps</a></p>
        </aside>
    </div>
</section>

<section class="section section-alt">
    <div class="container">
        <h2 data-i18n="contact.faqTitle">Frequently asked questions</h2>
        <details>
            <summary data-i18n="contact.q1">What should I bring?</summary>
            <p data-i18n="contact.a1">Bring a hat, sunscreen, water and comfortable shoes. For the river cruise, bring a light jacket for the evening.</p>
        </details>
        <details>
            <summary data-i18n="contact.q2">Can I cancel my booking?</summary>
            <p data-i18n="contact.a2">Yes. Cancel at least 48 hours before the tour and you will get a full refund.</p>
        </details>
        <details>
            <summary data-i18n="contact.q3">Do you offer school and group discounts?</summary>
            <p data-i18n="contact.a3">Yes. Groups of 15 or more get 10% off. Contact us for school tour packages.</p>
        </details>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

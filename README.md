# Vaal River Adventures (Web Development 3.2 final project)

A tourism website for a made-up tour company in Vanderbijlpark, built with HTML, CSS, PHP and JavaScript.

## Run it locally
1. Install XAMPP and start Apache.
2. Copy the `vaal-river-adventures` folder into `C:\xampp\htdocs\`.
3. Open http://localhost/vaal-river-adventures/ in your browser.

The pages are `.php` files, so double-clicking them will not work. They need Apache or another PHP server.

## Upload with FTP
Use FileZilla to upload the whole folder to your host's `public_html` (or `htdocs`) folder. Make sure `data/` can be written to, because booking requests are saved in `data/bookings.csv`.

## Folder structure
```
index.php, about.php, tours.php, gallery.php, contact.php   the five pages
includes/header.php, footer.php   logo, menu and footer shared by every page
includes/tours-data.php           tour names and prices, used in one place
css/style.css                     all styles; the style guide is at the top
js/main.js                        all JavaScript features
js/lang-st.js                     Sesotho translations
images/, images/gallery/          pictures (lowercase, hyphenated names)
videos/                           MP4 videos
data/                             saved booking requests (blocked from the web)
```

## Rubric checklist
| Requirement | Where |
|---|---|
| Clickable logo, menu with hover states, full footer | `includes/header.php`, `includes/footer.php` |
| Dropdown menu | Tours item in the menu |
| h1, dominant image, secondary content | Every page banner; home page hero |
| Tables and lists | Tour prices, team table, office hours; "what is included" lists |
| Images and videos | Cards, gallery, two videos |
| Two languages | Sesotho button in the menu |
| JavaScript (7 features) | Mobile menu, language switch, lightbox, price calculator, form validation, back-to-top button, home page photo slider |
| PHP | Shared includes, tour data loop, booking form with server-side validation |
| External links | Footer, About page, Tours page, Contact map |
| Other resources | Google Fonts, Font Awesome icons, Google Maps embed, HTML5 video |
| Extra HTML tags | `figure`, `figcaption`, `blockquote`, `address`, `details`/`summary`, `video`, `iframe`, `caption` |
| Responsive | Media queries at 960px, 820px and 520px |

## Still to do as a group
- **Replace the placeholder pictures** using the prompts in `image-prompts.md` (or real photos). Keep the same file names.
- **Ask a Sesotho speaker to proofread** `js/lang-st.js`. The rubric marks down spelling and grammar errors.
- Change the business details (address, phone, social links) if you want a different company.
- Write the project report: design process, challenges and solutions.

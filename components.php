<?php

function html_attributes(array $attributes): string {
    $pairs = [];
    foreach ($attributes as $key => $value) {
        if ($value === true) {
            $pairs[] = $key;
        } elseif ($value !== false && $value !== null) {
            $pairs[] = sprintf('%s="%s"', $key, $value);
        }
    }
    return implode(' ', $pairs);
}

// --- Head ---
function generate_head(string $page_title, string $favicon_url): void {
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="icon" type="image/png" href="<?= $favicon_url ?>">
    <?php
}

// --- Header and Navigation ---
function generate_header_and_nav(string $logo_url, string $logo_alt, string $home_link, array $nav_items, array $cta_button): void {
    ?>
    <header>
        <div class="row-1">
            <div class="nav">
                <div class="logo">
                    <a href="<?= $home_link ?>">
                        <img src="<?= $logo_url ?>" alt="<?= $logo_alt ?>" style="width: 100px; height: 100px;">
                    </a>
                </div>
                <nav class="navigation">
                    <ul>
                        <?php foreach ($nav_items as $item): ?>
                            <li><a href="<?= $item['url'] ?>"><?= $item['text'] ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </div>
            <div class="button head-button">
                <a href="<?= $cta_button['url'] ?>"><?= $cta_button['text'] ?></a>
            </div>
        </div>
    </header>
    <div name="responsive-menu">
        <div class="bars"><i class="fa-solid fa-bars"></i></div>
        <div class="x hide"><i class="fa-solid fa-x"></i></div>
        <nav id="responsive" class="hide" style="top: -1000px;">
            <div>
                <ul>
                    <?php foreach ($nav_items as $item): ?>
                        <li><a href="<?= $item['url'] ?>"><?= $item['text'] ?></a></li>
                    <?php endforeach; ?>
                </ul>
                <div class="button">
                    <a href="<?= $cta_button['url'] ?>"><?= $cta_button['text'] ?></a>
                </div>
            </div>
        </nav>
    </div>
    <?php
}
// --- Intro Section ---
function generate_intro_section(array $data): void {
    ?>
    <article class="intro">
        <main class="content-main">
            <div class="content">
                <div class="content-text">
                    <div>
                        <h5><?= $data['greeting'] ?></h5>
                        <h1 class="content-title">
                            <?= nl2br($data['headline']) ?>
                        </h1>
                        <div class="scroll-down">
                            <a href="#<?= $data['scroll_target_id'] ?>" class="smoothscroll">
                                <i class="fa-solid fa-arrow-down"></i>
                                <span class="scroll-text"><?= $data['scroll_text'] ?></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="photo-monica">
                    <img src="<?= $data['main_image_url'] ?>" alt="<?= $data['main_image_alt'] ?>">
                    <div class="lines">
                        <span></span>
                    </div>
                </div>
            </div>
        </main>
        <div>
            <img class="back-img" src="<?= $data['background_image_url'] ?>" alt="<?= $data['background_image_alt'] ?>">
        </div>
    <?php
}

// --- About Section ---
function generate_about_section(array $data): void {
    ?>
    <article class="about-article" id="about">
        <div class="about-art">
            <div class="about-content">
                <div>
                    <div class="about">
                        <span><?= $data['pre_title'] ?></span>
                        <h2>
                            <?= nl2br($data['title']) ?>
                        </h2>
                    </div>
                </div>
                <div class="about-more">
                    <a href="<?= $data['more_about_me_link_url'] ?>"><?= $data['more_about_me_link_text'] ?></a>
                </div>
                <div class="referals">
                    <?php foreach ($data['social_links'] as $link): ?>
                        <a href="<?= $link['url'] ?>"><i class="<?= $link['icon_class'] ?>"></i></a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="text">
                <?php foreach ($data['paragraphs'] as $paragraph): ?>
                    <p><?= $paragraph ?></p>
                <?php endforeach; ?>
            </div>
        </div>
    </article>
    <?php
}

// --- Expertise Section ---
function generate_expertise_section(array $data): void {
    ?>
    <article class="container" id="services"> 
        <div class="expertise">
            <div class="row main">
                <span class="pretitle"><?= $data['pre_title'] ?></span>
                <h2 class="title"><?= $data['title'] ?></h2>
                <p class="main-text">
                    <?= $data['main_text'] ?>
                </p>
                <a href="<?= $data['view_all_link_url'] ?>"><?= $data['view_all_link_text'] ?></a>
            </div>
            <div class="row box">
                <?php foreach ($data['items'] as $index => $item): ?>
                    <div class="col col<?= $index + 1 ?>">
                        <h4><?= $item['title'] ?></h4>
                        <p><?= $item['text'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </article>
    <?php
}

// --- Clients Section ---
function generate_clients_section(array $data): void {
    ?>
    <article>
        <div class="client">
            <div class="client-div">
                <section class="main-client">
                    <div class="texti0">
                        <span class="clients"><?= $data['pre_title'] ?></span>
                        <h2>
                            <?= nl2br($data['title']) ?>
                        </h2>
                    </div>
                    <div class="texti1">
                        <?php if (isset($data['paragraphs'][0])): ?>
                        <div class="texti2">
                            <p><?= $data['paragraphs'][0] ?></p>
                        </div>
                        <?php endif; ?>
                        <?php if (isset($data['paragraphs'][1])): ?>
                        <div class="texti3">
                            <p><?= $data['paragraphs'][1] ?></p>
                        </div>
                        <?php endif; ?>
                    </div>
                </section>
                <div class="image-pack">
                    <?php foreach ($data['logos'] as $logo): ?>
                    <div class="clients-list">
                        <a href="<?= $logo['url'] ?>">
                            <img src="<?= $logo['src'] ?>" alt="<?= $logo['alt'] ?>">
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </article>
    <?php
}

// --- Testimonials Section ---
function generate_testimonials_section(array $testimonials): void {
    $classes = ['left', 'middle1', 'middle2', 'right'];
    ?>
    <article class="prof">
        <div class="main-prof">
            <?php foreach ($testimonials as $index => $testimonial): ?>
            <div class="<?= $classes[$index % count($classes)] ?>">
                <p>
                    <?= $testimonial['text'] ?>
                </p>
                <div class="name">
                    <div class="img"> 
             
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </article>
    <?php
}

// --- Get Started Section ---
function generate_get_started_section(array $data): void {
    ?>
    <article class="get-started" id="contact-form"> 
        <div class="main-txt-gs">
            <h2><?= $data['title'] ?></h2>
            <p><?= $data['text'] ?></p>
        </div>
        <div class="button gs-button">
            <a href="<?= $data['button_url'] ?>"><?= $data['button_text'] ?></a>
        </div>
    </article>
    <?php
}

// --- Recent Articles Section ---
function generate_recent_articles_section(array $data): void {
    ?>
    <article class="RA-article" id="journal"> 
        <div class="main-RA">
            <div class="RA-text">
                <span class="RA"><?= $data['pre_title'] ?></span>
                <h2><?= $data['title'] ?></h2>
            </div>
            <div class="RA-blogs">
                <?php foreach ($data['articles'] as $article): ?>
                <div>
                    <a href="<?= $article['tag_link'] ?>"><span><?= $article['tag'] ?></span></a>
                    <a href="<?= $article['title_link'] ?>">
                        <h6>
                            <?= nl2br($article['title']) ?>
                        </h6>
                    </a>
                    <p>
                        <?= $article['content_html']  ?>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </article>
    <?php
}

// --- Footer ---
function generate_footer(array $data): void {
    ?>
    <footer id="contact"> 
        <article class="main-footer">
            <div class="wrapper">
                <div class="about-footer">
                    <h3><?= $data['about_monica_title'] ?></h3>
                    <p><?= $data['about_monica_text'] ?></p>
                </div>
                <div class="links-footer">
                    <h3><?= $data['site_links_title'] ?></h3>
                    <ul>
                        <?php foreach ($data['site_links'] as $link): ?>
                            <li><a href="<?= $link['url'] ?>"><?= $link['text'] ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="newsletter-footer">
                    <h3><?= $data['newsletter_title'] ?></h3>
                    <p><?= $data['newsletter_text'] ?></p>
                    <input type="email" placeholder="Your Email Address">
                    <a href="#">Subscribe</a>
                </div>
            </div>
            <div class="referals-nl">
                <div class="footer-links">
                    <?php foreach ($data['social_links'] as $link): ?>
                        <a href="<?= $link['url'] ?>"><i class="<?= $link['icon_class'] ?>"></i></a>
                    <?php endforeach; ?>
                </div>
                <div class="copy">
                    <span class="copyright"><?= $data['copyright_text'] ?></span>
                    <span><?= $data['design_by_html'] ?> Distribution By <?= $data['distribution_by_html'] ?></span>
                </div>
                <div class="scroll-up">
                    <a href="#"><i class="fa-solid fa-arrow-up"></i></a>
                </div>
            </div>
        </article>
    </footer>
    <?php
}

// --- responsive menu ---
function generate_page_scripts(): void {
    ?>
    <script>
        let bars = document.querySelector(".bars");
        let x = document.querySelector(".x");
        let nav = document.querySelector("#responsive");
        let header = document.querySelector('header'); 
        
        if (bars) bars.addEventListener('click', function () {
            nav.style.top = "0";
            x.style.display = "block";
            bars.style.display = "none";
        });

        if (x) x.addEventListener('click', function () {
            nav.style.top = "-1000px";
            bars.style.display = "block";
            x.style.display = "none";
        });
    </script>
    
<?php
}
?>


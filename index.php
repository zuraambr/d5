<?php
include 'data.php';
include 'components.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php generate_head($page_config['title'], $page_config['favicon_url']); ?>
</head>
<body>
    <?php generate_header_and_nav($page_config['logo_url'], $page_config['logo_alt'], $page_config['home_link'], $nav_items, $cta_button); ?>
    <?php generate_intro_section($intro_section_data); ?>
    <?php generate_about_section($about_section_data); ?>
    <?php generate_expertise_section($expertise_section_data); ?>
    <?php generate_clients_section($clients_section_data); ?>
    <?php generate_testimonials_section($testimonials_data); ?>
    <?php generate_get_started_section($get_started_section_data); ?>
    <?php generate_recent_articles_section($recent_articles_section_data); ?>
    <?php generate_footer($footer_data); ?>
    <?php generate_page_scripts(); ?>

  <?php render_register_button(); ?>
  <?php render_register_form(); ?>

  

</body>
</html>
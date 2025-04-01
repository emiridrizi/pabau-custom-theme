<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <h1 class="logo"><a href="<?php echo home_url(); ?>">Imaginary Co.</a></h1>
            <nav>
                <ul>
                    <li><a href="<?php echo get_permalink(get_page_by_path('lead-capture-form')); ?>">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>
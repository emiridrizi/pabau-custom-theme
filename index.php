<?php get_header(); ?>

<main>
    <section class="hero">
        <h1>Welcome to Our Imaginary Company</h1>
        <p>Simplifying your business with innovative solutions.</p>
        <a href="<?php echo get_permalink(get_page_by_path('lead-capture-form')); ?>" class="cta-button">Get Started</a>
    </section>
</main>

<?php get_footer(); ?>
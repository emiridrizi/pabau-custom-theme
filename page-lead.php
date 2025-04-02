<?php
/*
Template Name: Lead Form
*/
get_header();
?>

<main class="content-wrapper">
    <div class="lead-form-container">
        <h2>Submit Your Details</h2>
        <form id="leadForm">
            <label>First Name*</label>
            <input type="text" name="Fname" placeholder="John" required>

            <label>Last Name*</label>
            <input type="text" name="Lname" placeholder="Doe" required>

            <label>Email</label>
            <input type="email" name="email" placeholder="example@example.com">

            <label>Phone</label>
            <input type="tel" name="telephone" placeholder="+389 70 123 456">

            <label>City</label>
            <input type="text" name="city" placeholder="Skopje">

            <label>How did you hear about us?</label>
            <input type="text" name="how_heard" placeholder="e.g., Social Media, Website, Friend">

            <label>Message</label>
            <textarea name="message" placeholder="Your message here..."></textarea>

            <button type="submit">Submit</button>
        </form>
        <p id="responseMessage"></p>
    </div>

    <!-- Bootstrap-style Modal for Success Message -->
    <div id="thankYouModal" class="modal">
        <div class="modal-content">
            <h2 class="modal-heading">Thank You!</h2>
            <p class="modal-message">Lead submitted successfully!</p>
        </div>
    </div>
</main>

<?php get_footer(); ?>
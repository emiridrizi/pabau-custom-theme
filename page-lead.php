<?php
/*
Template Name: Lead Form
*/
get_header();
?>

<div class="lead-form-container">
    <h2>Submit Your Details</h2>
    <form id="leadForm">
        <label>First Name*</label>
        <input type="text" name="first_name" required>

        <label>Last Name*</label>
        <input type="text" name="last_name" required>

        <label>Email</label>
        <input type="email" name="email" placeholder="example@example.com">

        <label>Phone</label>
        <input type="tel" name="phone" value="+389">

        <label>City</label>
        <input type="text" name="city" placeholder="City">

        <label>How did you hear about us?</label>
        <input type="text" name="how_heard">

        <label>Message</label>
        <textarea name="message"></textarea>

        <button type="submit">Submit</button>
    </form>
    <p id="responseMessage"></p>
</div>

<?php get_footer(); ?>
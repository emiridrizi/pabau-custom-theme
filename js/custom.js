jQuery(document).ready(function($) {
    $('#thankYouModal').hide();

    $('#leadForm').on('submit', function(e) {
        e.preventDefault();

        let formData = $(this).serialize();

        // AJAX request
        $.ajax({
            url: '/wp-content/themes/pabau-custom-theme/proxy.php',
            type: 'POST',
            data: formData,
            success: function(response) {
                handleLeadSubmission(response);
            },
            error: function(xhr, status, error) {
                $('.modal-heading').text("Submission Failed!").css("color", "red");
                $('.modal-message').text("Something went wrong. Please try again.");

                $('#thankYouModal').fadeIn();

                setTimeout(function() {
                    $('#thankYouModal').fadeOut();
                }, 10000); // Timeout: 10 seconds
            }
        });
    });

    // Function to handle both successful and failed lead submissions
    function handleLeadSubmission(response) {
        let message = "Lead submitted successfully!";
        let heading = "Thank You!";
        let color = "green";

        if (typeof response === "string") {
            const leadIdMatch = response.match(/Lead id: (\d+)/i);
            const alreadyCreated = response.includes("already created");
            const errorMatch = response.match(/Error: (.+)/i);

            if (leadIdMatch && leadIdMatch[1]) {
                message = `Lead submitted successfully with ID: ${leadIdMatch[1]}`;
            } else if (alreadyCreated) {
                message = "Lead with this name was already created!";
                heading = "Oops!";
                color = "red";
            } else if (errorMatch && errorMatch[1]) {
                message = errorMatch[1];
                heading = "Oops!";
                color = "red";
            } else {
                message = "Something went wrong. Please try again.";
                heading = "Submission Failed!";
                color = "red";
            }
        } else {
            message = "Something went wrong. Please try again.";
            heading = "Submission Failed!";
            color = "red";
        }

        $('.modal-heading').text(heading).css("color", color);
        $('.modal-message').text(message);

        $('#thankYouModal').fadeIn();

        setTimeout(function() {
            $('#thankYouModal').fadeOut();
            if (color === "green") window.location.href = '/';
        }, 10000);  // Timeout: 10 seconds
    }
});
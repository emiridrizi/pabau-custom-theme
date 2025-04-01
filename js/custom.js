jQuery(document).ready(function($) {
    $('#leadForm').on('submit', function(e) {
        e.preventDefault();
        let formData = $(this).serialize();

        $.ajax({
            url: 'xxx', // Pabau API URL
            type: 'POST',
            data: formData,
            headers: {
                'Authorization': 'xxx', // API Key
            },
            success: function(response) {
                $('#responseMessage').text('Lead submitted successfully!').css('color', 'green');
            },
            error: function(xhr) {
                $('#responseMessage').text('Error submitting lead.').css('color', 'red');
            }
        });
    });
});
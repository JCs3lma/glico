$(document).ready(function () {
    // Initially, load the product information page
    loadContent('product-information');
    // Add the active class to the first navigation item
    $('.nav-item').first().find('.page-indicator').addClass('active');

    // Handle click events on navigation items
    $('.nav-item').click(function () {
        var tab = $(this).data('tab');
        $('.page-indicator').removeClass('active');
        $(this).find('.page-indicator').addClass('active');
        loadContent(tab);
    });

    // Handle click events on content cards
    $('#content-list-display').on('click', '.content-list-card .card-container', function () {
        // Redirect to the content details page
        window.location.href = 'content-details.php';
    });

    function loadContent(tab) {
        // Use AJAX to load the content from the respective PHP file
        $.ajax({
            type: 'GET',
            url: tab + '.php',
            success: function (data) {
                $('#content-list-display').html(data);
            },
            error: function () {
                $('#content-list-display').html('No content found!');
            }
        });
    }
});
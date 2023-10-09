$(document).ready(function () {
    // Initially, load the available coupons page
    loadContent('available-coupons');
    // Add the active class to the first navigation item
    $('.nav-item').first().find('.page-indicator').addClass('active');

    // Handle click events on navigation items
    $('.nav-item').click(function () {
        var tab = $(this).data('tab');
        
        $('.page-indicator').removeClass('active');

        $(this).find('.page-indicator').addClass('active');
        
        loadContent(tab);
    });

    function loadContent(tab) {
        // Use AJAX to load the content from the respective PHP file
        $.ajax({
            type: 'GET',
            url: tab + '.php',
            success: function (data) {
                $('#coupon-content').html(data);
            },
            error: function () {
                console.log('Error loading content!');
            }
        });
    }
});
jQuery(document).ready(function ($) {
    $('.nav-links .video-load-more').on('click', function (event) {
        event.preventDefault();
        var page = $(this).attr('page');
        var total_pages = $(this).attr('total-pages');
        $('.video-load-more').attr('page', parseInt(page) + 1);
        if(page <= total_pages){
            $.ajax({
                url: ajaxpagination.ajaxurl,
                type: 'post',
                data: {
                    action: 'ajax_pagination',
                    query_vars: ajaxpagination.query_vars,
                    page: page
                },

                success: function (html) {
                    $('#videos').append(html);
                }
            })
        }
        if(total_pages === page){
            $('.nav-links').hide(0);
        }
    });
});


jQuery(document).ready(function ($) {
    /*
    Pagination for videos section
     */
    $('.nav-links .video-load-more').on('click', function (event) {
        event.preventDefault();
        var data_type = $(this).attr('data-type');
        var page = $(this).attr('page');
        var total_pages = $(this).attr('total-pages');
        $('.video-load-more').attr('page', parseInt(page) + 1);
        if (page <= total_pages) {
            $.ajax({
                url: ajaxpagination.ajaxurl,
                type: 'post',
                data: {
                    action: 'ajax_pagination',
                    query_vars: ajaxpagination.query_vars,
                    page: page,
                    data_type: data_type
                },

                success: function (html) {
                    $('#videos').append(html);
                }
            })
        }
        if (total_pages === page) {
            $('.nav-links .video-load-more').hide(0);
        }
    });
    /*
    Pagination for articles section
     */
    $('.nav-links .articles-load-more').on('click', function (event) {
        event.preventDefault();
        var data_type = $(this).attr('data-type');
        var page = $(this).attr('page');
        var total_pages = $(this).attr('total-pages');
        $('.articles-load-more').attr('page', parseInt(page) + 1);
        if (page <= total_pages) {
            $.ajax({
                url: ajaxpagination.ajaxurl,
                type: 'post',
                data: {
                    action: 'ajax_pagination',
                    query_vars: ajaxpagination.query_vars,
                    page: page,
                    data_type: data_type
                },

                success: function (html) {
                    $('#articles').append(html);
                }
            })
        }
        if (total_pages === page) {
            $('.nav-links .articles-load-more').hide(0);
        }
    });
    $('.video-link').on('click', function (e) {
        e.preventDefault();
        var width = $(window).width();
        var height = $(window).height();
        var left = (screen.width / 2) - (width / 2);
        var top = (screen.height / 2) - (height / 2);
        window.open(this.href, '', ' scrollbars=yes,menubar=no,width=' + width + ',height=' + height + ',resizable=yes,toolbar=no,location=no,status=no,top=' + top + ', left=' + left);
    });

});

jQuery(document).ready(function ($) {
    $('.nav-links .video-load-more').on('click', function (event) {
        event.preventDefault();
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
                    page: page
                },

                success: function (html) {
                    $('#videos').append(html);
                }
            })
        }
        if (total_pages === page) {
            $('.nav-links').hide(0);
        }
    });
    /**
     * fires when social sharing icons are clicked
     * this function opens a popup to share content to social media
     */
    $('a.resp-sharing-button__link').on('click', function (e) {
        e.preventDefault();
        var width = $(window).width() / 2;
        var height = $(window).height() / 2;
        var left = (screen.width / 2) - (width / 2);
        var top = (screen.height / 2) - (height / 2);
        window.open(this.href, '', ' scrollbars=yes,menubar=no,width=' + width + ',height=' + height + ',resizable=yes,toolbar=no,location=no,status=no,top=' + top + ', left=' + left);
    });
});

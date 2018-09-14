const YTPlayer = require('yt-player');

// Keep using this variable
let lastPlayer = null;

$('#pool-buying-video-modal,#become-dealer-video').on('show.bs.modal', function (e) {
  $(".lazy-preloader").addClass('d-block');
  $(".close").removeClass('d-block').addClass('d-none');
  var youtubeId = $(e.relatedTarget).data('id');

  lastPlayer = new YTPlayer($(this).find('.yt-player')[0], {
    related: false,
    autoplay: true,
    modestBranding: true,
    annotations: false,
    info: false
  });
  lastPlayer.load(youtubeId);
  lastPlayer.play();

  lastPlayer.on('unstarted', () => {
    // $(this).find('.yt-loader').hide(0);
    $(".lazy-preloader").removeClass('d-block');
    $(".close").removeClass('d-none').addClass('d-block');
  });
}).on('hidden.bs.modal', function (e) {
  lastPlayer && lastPlayer.destroy();
  lastPlayer = null;
  $(this).find('.yt-loader').show(0);
});
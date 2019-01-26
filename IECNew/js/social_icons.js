var share_url = 'https://codepen.io/';

// Center sidebar vertically in window
var el_height = $('.social-share').height();
$('.social-share').css('margin-top', - ( el_height / 2 ));

// Trigger hide button event
$('.social-share li.hide-button a').click(function(){
  $('.social-share').toggleClass('hidden2');
});

// Get Facebook share count
$.get(
  'https://graph.facebook.com/?id=' + share_url,
  function (msg) {
    $('.facebook a span').text(msg.shares);
  }, 
  'jsonp'
);

// Get Twitter share count
$.get(
  'https://cdn.api.twitter.com/1/urls/count.json?url=' + share_url,
  function (msg) {
    $('.twitter a span').text(msg.count);
  }, 
  'jsonp'
);

// Get Pinterest share count
$.get(
  'https://api.pinterest.com/v1/urls/count.json?url=' + share_url,
  function (msg) {
    $('.pinterest a span').text(msg.count);
  }, 
  'jsonp'
);

// Get LinkedIn share count
$.get(
  'https://www.linkedin.com/countserv/count/share?url=' + share_url,
  function (msg) {
    $('.linkedin a span').text(msg.count);
  }, 
  'jsonp'
);

// Get Google+ share count


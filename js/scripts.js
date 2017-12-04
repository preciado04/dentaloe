$(document).ready(function() {
  // when page is loaded, remove the loading
  $('#page-loader').addClass('loaded');

  /* Hamburger button */
  $('.rd-navbar-toggle').click(function(){
    $(this).toggleClass('active');
    $('.rd-navbar-fixed .rd-navbar-nav-wrap').toggleClass('active');
    $('.rd-navbar-search-wrap').toggleClass('active');
  });

  /* Menu dropdowns*/
  $('.rd-navbar-submenu-toggle').click(function() {
    $(this).parent().toggleClass('opened');
  });

  /* Arrow animations */
  $('.navbar-dentaloe .menu-list .arrow').click(function() {
    if ($(this).hasClass('up')) {
      $(this).removeClass('up');
    } else {
      $(this).addClass('up');
    }
  });

  /* Info Box */
  $('.rd-navbar-aside__toggle').click(function () {
    if ($(this).hasClass('active')) {
      $(this).removeClass('active');
      $('.rd-navbar-aside').removeClass('active');
    } else {
      $(this).addClass('active');
      $('.rd-navbar-aside').addClass('active');
    }
  });

  /* Scroll animation */
  if ($('#back-to-top').length) {
    var scrollTrigger = 100, // px
      backToTop = function () {
        var scrollTop = $(window).scrollTop();
        if (scrollTop > scrollTrigger) {
          $('#back-to-top').addClass('show-button');
        } else {
          $('#back-to-top').removeClass('show-button');
        }
      };
    backToTop();
    $(window).on('scroll', function () {
      backToTop();
    });
    $('#back-to-top').on('click', function (e) {
      e.preventDefault();
      $('html,body').animate({
        scrollTop: 0
      }, 700);
    });
  }

  /* LightBox for Images */
  $(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
  });

  /* Pagination Blog */
  $('.blog #pagination').twbsPagination({
    totalPages: 4,
    onPageClick: function (event, page) {
      var tPages = 4;
      $('li.page-item').css('display','none');
      switch (true) {
        case page == 1:
          $("li.page-item:contains('1')").css('display','inline').addClass('first-item');
          $("li.page-item:contains('2')").css('display','inline');
          $('li.page-item.next').css('display','inline');
          $('li.page-item.last').css('display','inline').addClass('last-item');
          break;
        case page == 2:
          $('li.page-item.prev').css('display','inline').addClass('first-item');
          $("li.page-item:contains('1')").css('display','inline');
          $("li.page-item:contains('2')").css('display','inline');
          $("li.page-item:contains('3')").css('display','inline');
          $('li.page-item.next').css('display','inline');
          $('li.page-item.last').css('display','inline').addClass('last-item');
          break;
        case page > 2 && page < tPages:
          pageBefore = page - 1;
          pageAfter = page + 1;
          $('li.page-item.first').css('display','inline').addClass('first-item');
          $('li.page-item.prev').css('display','inline');
          $("li.page-item:contains('"+pageBefore+"')").css('display','inline');
          $("li.page-item:contains('"+page+"')").css('display','inline');
          $("li.page-item:contains('"+pageAfter+"')").css('display','inline');
          $('li.page-item.next').css('display','inline').addClass('last-item');
          break;
        case page == tPages:
          pageBefore = page - 1;
          $('li.page-item.first').css('display','inline').addClass('first-item');
          $('li.page-item.prev').css('display','inline');
          $("li.page-item:contains('"+pageBefore+"')").css('display','inline');
          $("li.page-item:contains('"+page+"')").css('display','inline').addClass('last-item');
          break;
        default:
          alert('Nobody Wins!');
      }
      $('div[id^="page-"]').css('display','none');
      var id = "page-" + page;
      $('#'+id).css('display','block');
      $('html,body').animate({
        scrollTop: 0
      }, 0);
    }
  });

  /* Pagination Services */
  $('.services #pagination').twbsPagination({
    totalPages: 4,
    onPageClick: function (event, page) {
      var tPages = 4;
      $('li.page-item').css('display','none');
      $("li.page-item:contains('1')").css('display','inline').addClass('first-item');
      $("li.page-item:contains('2')").css('display','inline').addClass('last-item');
      $('div[id^="page-"]').css('display','none');
      var id = "page-" + page;
      $('#'+id).css('display','block');
      $('html,body').animate({
        scrollTop: 0
      }, 0);
    }
  });


  /* Video player controls */

  //return a jQuery object
  var video = $('#jp_video_0');

  $('.jp-video-play').on('click', function() {
    $("#jp_poster_0").css("display","none");
    video.css({'width': '100%','height': '100%'});
    $(this).css('display','none');
    if(video[0].paused) {
      video[0].play();
    }
    else {
      video[0].pause();
    }
    return false;
  });

  $('.video-wrap .jp-play').on('click', function() {
    $("#jp_poster_0").css("display","none");
    video.css({'width': '100%','height': '100%'});
    $('.jp-video-play').css('opacity','0');
    if(video[0].paused) {
      video[0].play();
    }
    else {
      video[0].pause();
    }
    return false;
  });

  $('.video-wrap .jp-stop').on('click', function() {
    video[0].pause();
    video[0].currentTime = 0;
  });

  /* Audio player controls */
  var audio = $('#jp_audio_1');
  $('.audio-wrap .jp-play').on('click', function() {
    if(audio[0].paused) {
      audio[0].play();
    }
    else {
      audio[0].pause();
    }
    return false;
  });

  $('.audio-wrap .jp-stop').on('click', function() {
    audio[0].pause();
    audio[0].currentTime = 0;
  });

  /* Hide label in search input */
  $("#rd-navbar-search-form-input").on({
    keydown: function() {
      $(".form-label.rd-input-label").hide();
    },
    keyup: function() {
      if($("#rd-navbar-search-form-input").val() == "") {
        $(".form-label.rd-input-label").show();
      }
    }
  });

  $('.rd-navbar--has-dropdown').hover(function () {
     //There'll be requests
     $('rd-navbar-dropdown').addClass('active');
   });
});








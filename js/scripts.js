$(document).ready(function() {
  // when page is loaded, remove the loading
  $('#page-loader').addClass('loaded');

  /* Hamburger button */
  $('.rd-navbar-toggle').click(function(){
    $(this).toggleClass('active');
    $('.rd-navbar-fixed .rd-navbar-nav-wrap').toggleClass('active');
    $('.rd-navbar-search-wrap').toggleClass('active');
  });

  $(document).keyup(function(event){
    if(event.which==27) {
      //Hamburger
      $('.rd-navbar-toggle').removeClass('active');
      $('.rd-navbar-fixed .rd-navbar-nav-wrap').removeClass('active');
      //Info Box
      $('.rd-navbar-aside__toggle').removeClass('active');
      $('.rd-navbar-aside').removeClass('active');
    }
  });

  $("html").click(function() {
    $('.rd-navbar-toggle').removeClass('active');
    $('.rd-navbar-fixed .rd-navbar-nav-wrap').removeClass('active');
  });
  $('.rd-navbar-toggle').click(function (e) {
    e.stopPropagation();
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
    $(this).toggleClass('active');
    $('.rd-navbar-aside').toggleClass('active');
  });

  $("html").click(function() {
    $('.rd-navbar-aside__toggle').removeClass('active');
    $('.rd-navbar-aside').removeClass('active');
  });
  $('.rd-navbar-aside__toggle').click(function (e) {
    e.stopPropagation();
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
      $('.video-wrap .jp-play').removeClass('jp-play').addClass('jp-pause');
    }
    else {
      video[0].pause();
      $('.video-wrap .jp-pause').removeClass('jp-pause').addClass('jp-play');
    }
    return false;
  });
 
  $('.video-wrap .jp-play').on('click', function() {
    playButton= $('.video-wrap .jp-play');
    $("#jp_poster_0").css("display","none");
    video.css({'width': '100%','height': '100%'});
    $('.video-wrap .jp-video-play').css('opacity','0');
    if(video[0].paused) {
      video[0].play();
      $('.video-wrap .jp-play').removeClass('jp-play').addClass('jp-pause');
    }
    else {
      video[0].pause();
      $('.video-wrap .jp-pause').removeClass('jp-pause').addClass('jp-play');
    }
    return false;
  });
  // Stop Funcionality
  $('.video-wrap .jp-stop').on('click', function() {
    video[0].pause();
    video[0].currentTime = 0;
    if($('.video-wrap .jp-pause').length > 0) {
      $('.video-wrap .jp-pause').removeClass('jp-pause').addClass('jp-play');
    }
    return false;
  });
  //get HTML5 video time duration
  video.on('loadedmetadata', function() {
    $('.video-wrap .duration').text(video[0].duration);
  });
  
  //update HTML5 video current play time
  video.on('timeupdate', function() {
  var currentPos = video[0].currentTime; //Get currenttime
  var maxduration = video[0].duration; //Get video duration
  var percentage = 100 * currentPos / maxduration; //in %
  $('.video-wrap .jp-play-bar').css('width', percentage+'%');
  //update HTML5 video current play time text
  $('.video-wrap .current').text(video[0].currentTime);
  });

  var timeDrag = false;   /* Drag status */
    $('.video-wrap .jp-play-bar').mousedown(function(e) {
      timeDrag = true;
      updatebar(e.pageX);
    });
  $(document).mouseup(function(e) {
    if(timeDrag) {
      timeDrag = false;
      updatebar(e.pageX);
    }
  });
  $(document).mousemove(function(e) {
    if(timeDrag) {
      updatebar(e.pageX);
    }
  });
 
  //update Progress Bar control
  var updatebar = function(x) {
    var progress = $('.video-wrap .jp-play-bar');
    var maxduration = video[0].duration; //Video duraiton
    var position = x - progress.offset().left; //Click pos
    var percentage = 100 * position / progress.width();
 
    //Check within range
    if(percentage > 100) {
        percentage = 100;
    }
    if(percentage < 0) {
        percentage = 0;
    }
 
    //Update progress bar and video currenttime
    $('.video-wrap .jp-play-bar').css('width', percentage+'%');
    video[0].currentTime = maxduration * percentage / 100;
  };
  
  //Mute/Unmute control clicked
  
  $('.video-wrap .jp-mute').on('click', function() {
    video[0].muted = !video[0].muted;
    if(video[0].muted){
      $('.video-wrap .jp-mute').removeClass('jp-mute').addClass('jp-unmute');
    }
    if(!video[0].muted){
      $('.video-wrap .jp-unmute').removeClass('jp-unmute').addClass('jp-mute');
    }
    return false;
  })
 
  //Volume control clicked
  $('.video-wrap .jp-volume-bar-value').on('mousedown', function(e) {
    var volume = $('.video-wrap .jp-volume-bar-value');
    var position = e.pageX - volume.offset().left;
    var percentage = 100 * position / volume.width();
    $('.video-wrap .jp-volume-bar-value').css('width', percentage+'%');
    video[0].volume = percentage / 100;
  });
  
/*
  //Fast forward control
  $('.video-wrap .jp-next').on('click', function() {
    video[0].playbackRate = 3;
    return false;
  });
 
  //Rewind control
  $('.video-wrap .jp-previous').on('click', function() {
    video[0].playbackRate = -3;
    return false;
  });
*/ 

  /* Audio player controls */
/*
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
*/

/*
  $('.audio-wrap .jp-stop').on('click', function() {
    audio[0].pause();
    audio[0].currentTime = 0;
  });
*/

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
  
  /* Audio player controls */
//return a jQuery object
  var audio = $('#jp_audio_1');

  $('.jp-audio-play').on('click', function() {
    $("#jp_audio_1").css("display","none");
    $(this).css('display','none');
    if(audio[0].paused) {
      audio[0].play();
      $('.audio-wrap .jp-play').removeClass('jp-play').addClass('jp-pause');
    }
    else {
      audio[0].pause();
      $('.audio-wrap .jp-pause').removeClass('jp-pause').addClass('jp-play');
    }
    return false;
  });
 
  $('.audio-wrap .jp-play').on('click', function() {
    playButton= $('.audio-wrap .jp-play');
    $('.audio-wrap .jp-audio-play').css('opacity','0');
    if(audio[0].paused) {
      audio[0].play();
      $('.audio-wrap .jp-play').removeClass('jp-play').addClass('jp-pause');
    }
    else {
      audio[0].pause();
      $('.audio-wrap .jp-pause').removeClass('jp-pause').addClass('jp-play');
    }
    return false;
  });
  // Stop Funcionality
  $('.audio-wrap .jp-stop').on('click', function() {
    audio[0].pause();
    audio[0].currentTime = 0;
    if($('.audio-wrap .jp-pause').length > 0) {
      $('.audio-wrap .jp-pause').removeClass('jp-pause').addClass('jp-play');
    }
    return false;
  });
  //get HTML5 video time duration
  audio.on('loadedmetadata', function() {
    $('.audio-wrap .duration').text(audio[0].duration);
  });
  
  //update HTML5 video current play time
  audio.on('timeupdate', function() {
  var currentPos = audio[0].currentTime; //Get currenttime
  var maxduration = audio[0].duration; //Get audio duration
  var percentage = 100 * currentPos / maxduration; //in %
  $('.audio-wrap .jp-play-bar').css('width', percentage+'%');
  //update HTML5 video current play time text
  $('.audio-wrap .current').text(audio[0].currentTime);
  });

  var timeDrag = false;   /* Drag status */
    $('.audio-wrap .jp-play-bar').mousedown(function(e) {
      timeDrag = true;
      updatebar(e.pageX);
    });
  $(document).mouseup(function(e) {
    if(timeDrag) {
      timeDrag = false;
      updatebar(e.pageX);
    }
  });
  $(document).mousemove(function(e) {
    if(timeDrag) {
      updatebar(e.pageX);
    }
  });
 
  //update Progress Bar control
  var updatebar = function(x) {
    var progress = $('.audio-wrap .jp-play-bar');
    var maxduration = audio[0].duration; //Video duraiton
    var position = x - progress.offset().left; //Click pos
    var percentage = 100 * position / progress.width();
 
    //Check within range
    if(percentage > 100) {
        percentage = 100;
    }
    if(percentage < 0) {
        percentage = 0;
    }
 
    //Update progress bar and video currenttime
    $('.audio-wrap .jp-play-bar').css('width', percentage+'%');
    audio[0].currentTime = maxduration * percentage / 100;
  };
  
  //Mute/Unmute control clicked
  
  $('.audio-wrap .jp-mute').on('click', function() {
    audio[0].muted = !audio[0].muted;
    if(audio[0].muted){
      $('.audio-wrap .jp-mute').removeClass('jp-mute').addClass('jp-unmute');
    }
    if(!audio[0].muted){
      $('.audio-wrap .jp-unmute').removeClass('jp-unmute').addClass('jp-mute');
    }
    return false;
  })
 
  //Volume control clicked
  $('.audio-wrap .jp-volume-bar-value').on('mousedown', function(e) {
    var volume = $('.video-wrap .jp-volume-bar-value');
    var position = e.pageX - volume.offset().left;
    var percentage = 100 * position / volume.width();
    $('.audio-wrap .jp-volume-bar-value').css('width', percentage+'%');
    audio[0].volume = percentage / 100;
  });
  
});

/*$('.rd-navbar--has-dropdown').hover(function () {
  //There'll be requests
  $(this).children('ul').addClass('active');
  /*alert('el selector funciona');*//*
});*/

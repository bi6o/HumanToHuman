  $(document).ready(function() {
      (function() {
          var nav = document.getElementById('nav');
              var nav2 = document.getElementById('nav2');
                  var nav3 = document.getElementById('nav3');

                      anchor = nav.getElementsByTagName('a');
                      anchor2 = nav2.getElementsByTagName('a');
                      anchor3 = nav3.getElementsByTagName('a');
                      current = window.location.pathname.split('/')[4];
          for (var i = 0; i < anchor.length; i++) {
              var href = anchor[i].href;
              var parts = href.split('/');
              var answer = parts[parts.length - 1];

              var href2 = anchor2[i].href;
              var parts2 = href2.split('/');
              var answer2 = parts2[parts.length - 1];

              var href3 = anchor3[i].href;
              var parts3 = href3.split('/');
              var answer3 = parts3[parts.length - 1];

              if (answer == current) {
                  anchor[i].className = "active";

              }
              else if (answer2 == current) {
                  anchor2[i].className = "active";

              }
              else if (answer3 == current) {
                  anchor3[i].className = "active";

              }

          }

      })();

       $('.active img').animate({ 'width' : '+=10%' },2000);
      if ($("#homepage-flag").length == 0) {
          $('html, body').animate({
              scrollTop: $(".main-container").offset().top - 200
          }, 2000);
      }
        $('.zoom-in').hover(function() {
          $('.zoom-in').animate({width : '+=0.3%'});
      }, function() {
          $('.zoom-in').animate({width : '-=0.3%'});
      });
        $('.zoom-out').hover(function() {
          $('.zoom-out').animate({width : '-=0.3%'});
      }, function() {
          $('.zoom-out').animate({width : '+=0.3%'});
      });
      $('.artlogo').hover(function() {
          this.src = '../includes/uploads/art-logo-h.png';
      }, function() {
          this.src = '../includes/uploads/art-logo.png';
      });
      $('.profilelogo').hover(function() {
          this.src = '../includes/uploads/profile-logo-h.png';
      }, function() {
          this.src = '../includes/uploads/profile-logo.png';
      });
      $('.litlogo').hover(function() {
          this.src = '../includes/uploads/lit-logo-h.png';
      }, function() {
          this.src = '../includes/uploads/lit-logo.png';
      });
      $('.video').hover(function() {
          this.src = '../includes/uploads/video-logo-h.png';
      }, function() {
          this.src = '../includes/uploads/video-logo.png';
      });
      $('.graphics').hover(function() {
          this.src = '../includes/uploads/graphic-logo-h.png';
      }, function() {
          this.src = '../includes/uploads/graphic-logo.png';
      });
      $('.comic').hover(function() {
          this.src = '../includes/uploads/comic-logo-h.png';
      }, function() {
          this.src = '../includes/uploads/comic-logo.png';
      });
      $('.poster').hover(function() {
          this.src = '../includes/uploads/poster-logo-h.png';
      }, function() {
          this.src = '../includes/uploads/poster-logo.png';
      });
      $('.ph').hover(function() {
          this.src = '../includes/uploads/ph-logo-h.png';
      }, function() {
          this.src = '../includes/uploads/ph-logo.png';
      });
      $('.musicians').hover(function() {
          this.src = '../includes/uploads/musicians-logo-h.png';
      }, function() {
          this.src = '../includes/uploads/musicians-logo.png';
      });
      $('.designers').hover(function() {
          this.src = '../includes/uploads/designers-logo-h.png';
      }, function() {
          this.src = '../includes/uploads/designers-logo.png';
      });
      $('.sculptors').hover(function() {
          this.src = '../includes/uploads/sculptors-logo-h.png';
      }, function() {
          this.src = '../includes/uploads/sculptors-logo.png';
      });
      $('.cameramen').hover(function() {
          this.src = '../includes/uploads/cameramen-logo-h.png';
      }, function() {
          this.src = '../includes/uploads/cameramen-logo.png';
      });
      $('.painters').hover(function() {
          this.src = '../includes/uploads/painters-logo-h.png';
      }, function() {
          this.src = '../includes/uploads/painters-logo.png';
      });
      $('.para').hover(function() {
          this.src = '../includes/uploads/para-logo-h.png';
      }, function() {
          this.src = '../includes/uploads/para-logo.png';
      });

      $('.translations').hover(function() {
          this.src = '../includes/uploads/translation-logo-h.png';
      }, function() {
          this.src = '../includes/uploads/translation-logo.png';
      });
      $('.subjects').hover(function() {
          this.src = '../includes/uploads/threads-logo-h.png';
      }, function() {
          this.src = '../includes/uploads/threads-logo.png';
      });
      $('.library').hover(function() {
          this.src = '../includes/uploads/library-logo-h.png';
      }, function() {
          this.src = '../includes/uploads/library-logo.png';
      });
      $('.scripts').hover(function() {
          this.src = '../includes/uploads/scripts-logo-h.png';
      }, function() {
          this.src = '../includes/uploads/scripts-logo.png';
      });
      $('.para').hover(function() {
          this.src = '../includes/uploads/para-logo-h.png';
      }, function() {
          this.src = '../includes/uploads/para-logo.png';
      });
      //$('.main-container').children().show(2000);
      //$('.mainVideoContainer').fadeToggle(2000);

      /* Every time the window is scrolled ... */
      $(window).scroll(function() {

          /* Check the location of each desired element */
          $('.hideme').each(function(i) {

              var bottom_of_object = $(this).offset().top + $(this).outerHeight();
              var bottom_of_window = $(window).scrollTop() + $(window).height() + 200;

              /* If the object is completely visible in the window, fade it it */
              if (bottom_of_window > bottom_of_object) {

                  $(this).animate({
                      'opacity': '1'
                  }, 1000, 'easeInCubic');



              }

          });


          //show element second type of animation
          $('.hideme2').each(function(i) {

              var bottom_of_object = $(this).offset().top + $(this).outerHeight();
              var bottom_of_window = $(window).scrollTop() + $(window).height() + 5400;

              /* If the object is completely visible in the window, fade it it */
              if (bottom_of_window > bottom_of_object) {

                  $(this).animate({
                      'opacity': '1',
                      'left': '5%'
                  }, 2000, 'easeInSine');



              }


          });
          $('.hideme-transparent').each(function(i) {

              var bottom_of_object = $(this).offset().top + $(this).outerHeight();
              var bottom_of_window = $(window).scrollTop() + $(window).height() + 5400;

              /* If the object is completely visible in the window, fade it it */
              if (bottom_of_window > bottom_of_object) {

                  $(this).animate({
                      'opacity': '0.7',
                      'left': '5%'
                  }, 2000, 'easeInSine');



              }


          });

          $('.hideme3').each(function(i) {

              var bottom_of_object = $(this).offset().top + $(this).outerHeight();
              var bottom_of_window = $(window).scrollTop() + $(window).height() + 200;

              /* If the object is completely visible in the window, fade it it */
              if (bottom_of_window > bottom_of_object) {

                  $(this).animate({
                      'opacity': '1',
                      'left': '2%'
                  }, 2000, 'easeInSine');



              }


          });



      });
      var targetOffset = $(".underline").offset().top - 600;

      var $w = $(window).scroll(function() {
          if ($w.scrollTop() > targetOffset) {
              $('.hideme4').animate({
                  'opacity': '1',
                  'left': '2%'
              }, 2000, 'easeInSine');

          } else {
              // ...
          }
      });
      var targetOffset = $(".underline").offset().top - 600;

      var $w = $(window).scroll(function() {
          if ($w.scrollTop() > targetOffset) {
              $('.hideme5').animate({
                  'opacity': '1'
              }, 2000, 'easeInSine');

          } else {
              // ...
          }
      });
      //show profiles links
      $(".show-profiles").click(function() {

          $('.H2Hlogo').animate({
              top: '270px',
              left: '-3%'
          }, 1000, 'swing');
          $('.artlogo').animate({
              top: '300px',
              left: '22%'
          }, 1000, 'easeInSine');
          $('.litlogo').animate({
              top: '300px',
              left: '-51%'
          }, 1000, 'easeInSine');
          $('.profilelogo').animate({
              top: '300px',
              left: '-27%'
          }, 1000, 'easeInSine');
          $('.profile-sections, .container-fluid, .orbitlogo').animate({
              marginTop: '-280px'
          }, 1000, 'swing');
          $(".profile-sections , .flip-sections").css({
              "opacity": "0",
              "display": "block",
          }).show().animate({
              opacity: 1
          }, 500, 'easeInSine')

      });
      //show literature links 
      $(".show-lit").click(function() {

          $('.H2Hlogo').animate({
              top: '270px',
              left: '-3%'
          }, 1000, 'swing');
          $('.artlogo').animate({
              top: '300px',
              left: '22%'
          }, 1000, 'easeInSine');
          $('.litlogo').animate({
              top: '300px',
              left: '-51%'
          }, 1000, 'easeInSine');
          $('.profilelogo').animate({
              top: '300px',
              left: '-27%'
          }, 1000, 'easeInSine');
          $('.lit-sections, .container-fluid, .orbitlogo').animate({
              marginTop: '-280px'
          }, 1000, 'swing');
          $(".lit-sections , .flip-sections").css({
              "opacity": "0",
              "display": "block",
          }).show().animate({
              opacity: 1
          }, 500, 'easeInSine')

      });

      //show artworks links
      $(".show-art").click(function() {

          $('.H2Hlogo').animate({
              top: '270px',
              left: '-3%'
          }, 1000);
          $('.artlogo').animate({
              top: '300px',
              left: '22%'
          }, 1000, 'easeInSine');
          $('.litlogo').animate({
              top: '300px',
              left: '-51%'
          }, 1000, 'easeInSine');
          $('.profilelogo').animate({
              top: '300px',
              left: '-27%'
          }, 1000, 'easeInSine');
          $('.art-sections, .container-fluid, .orbitlogo').animate({
              marginTop: '-280px'
          }, 1000, 'swing');
          $(".art-sections").css({
              "opacity": "0",
              "display": "block",
          }).show().animate({
              opacity: 1
          }, 1000, 'easeInSine')
          $('.art-sections, .container-fluid, .orbitlogo').animate({
              marginTop: '-280px'
          }, 1000, 'swing');
          $(".art-sections , .flip-sections").css({
              "opacity": "0",
              "display": "block",
          }).show().animate({
              opacity: 1
          }, 500, 'easeInSine')

      });

      $(".returnHeader").click(function() {
          if (!$(".art-sections , .profile-sections , .lit-sections").is(':animated')) {
              $(".art-sections , .profile-sections , .lit-sections , .flip-sections").hide(500);
              $('.art-sections, .container-fluid, .orbitlogo').animate({
                  marginTop: '0px'
              }, 1000, 'swing');
              $('.H2Hlogo').animate({
                  top: '0px',
                  left: '-3%px'
              }, 1000);
              $('.artlogo').animate({
                  top: '210px',
                  left: '-140px'
              }, 1000, 'easeInSine');
              $('.litlogo').animate({
                  top: '130px',
                  left: '-250px'
              }, 1000, 'easeInSine');
              $('.profilelogo').animate({
                  top: '315px',
                  left: '-390px'
              }, 1000, 'easeInSine');
          }
          //easeInExpo 
      });
      $(".next-sections").click(function() {

          if ($(".art-sections").is(":visible")) {
              $(".art-sections").fadeOut(700);
              $(".profile-sections").css({
                  marginTop: '-280px',
              });
              $(".profile-sections").fadeIn(700);
          } else if ($(".profile-sections").is(":visible")) {
              $(".profile-sections").fadeOut(700);
              $(".lit-sections").css({
                  marginTop: '-280px',
              });
              $(".lit-sections").fadeIn(700);
          } else if ($(".lit-sections").is(":visible")) {
              $(".lit-sections").fadeOut(700);
              $(".art-sections").css({
                  marginTop: '-280px',
              });
              $(".art-sections").fadeIn(700);
          }

      });
      $(".prev-sections").click(function() {

          if ($(".art-sections").is(":visible")) {
              $(".art-sections").fadeOut(700);
              $(".lit-sections").css({
                  marginTop: '-280px',
              });
              $(".lit-sections").fadeIn(700);
          } else if ($(".lit-sections").is(":visible")) {
              $(".lit-sections").fadeOut(700);
              $(".profile-sections").css({
                  marginTop: '-280px',
              });
              $(".profile-sections").fadeIn(700);
          } else if ($(".profile-sections").is(":visible")) {
              $(".profile-sections").fadeOut(700);
              $(".art-sections").css({
                  marginTop: '-280px',
              });
              $(".art-sections").fadeIn(700);
          }

      });
      // zoom in for the lit sections
      $(".zoom-in").click(function() {
          var fontSize = parseInt($(".lit-wrap p").css("font-size"));

          if (fontSize < '30') {
              fontSize = fontSize + 2 + "px";

              $('.lit-wrap p').css({
                  fontSize: fontSize
              });
          }
      });
      //zoom out ...
      $(".zoom-out").click(function() {
          var fontSize = parseInt($(".lit-wrap p").css("font-size"));

          if (fontSize > '20') {
              fontSize = fontSize - 2 + "px";

              $('.lit-wrap p').css({
                  fontSize: fontSize
              });
          }
      });

      $('.page-wrapper').click(function() {
          $('body').css('cursor', '-webkit-grabbing');
          $(this).css('cursor', '-webkit-grabbing');
      });
  });
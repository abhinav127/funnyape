 <script src="{{url('/')}}/js/jquery-3.js" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="{{url('/')}}/js/nextools.js" type="text/javascript"></script>
    <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
    <script type="text/javascript" src="{{url('/')}}/js/jquery.js"></script>
    <script>
      //Change SAVE20NOW to whatever coupon or text you want to be copied
      $('input#coup-field').val('0x35b2353a78758441F0C78C9fd357E41E5B67e4A3');
      $("input#coup-field").prop('readOnly', true);
      $('input#coup-field').css('cursor', 'text');

      $(document).ready(function() {
        $('#copy-btn').CopyToClipboard();
        $('.copy-btn-2').click(function() {
          //The values "Copied!" and #9ccd65 below are what the button will change to for 2 seconds
          $('.copy-btn-2').html('Copied!');
          $('.copy-btn-2').css('background-color', '#6893ff');
          //The values "Copy" and #ec4609 below are what it will change back to
          setTimeout(function() {
            $('.copy-btn-2').html('Copy')
            $('.copy-btn-2').css('background-color', '#2761f3')
          }, 2000);
        });
        start();
      });
    </script>

    <script>
      //Пример 2
      $('.example-2-btn .tn-atom').attr('onclick', 'copytext2(".example-2-txt .tn-atom")');

      function copytext2(el) {
        var $tmp = $("<textarea>");
        $("body").append($tmp);
        $tmp.val($(el).text()).select();
        document.execCommand("copy");
        $tmp.remove();
      }
    </script>

    <script>
      $(document).ready(function() {
        $('.lbody.lb2').hide(0)
        $('.lbody.lb1').show(0)
      })
      $('.lhead.lh1').click(function() {
        $('lhead.lh1').addClass('active');
        $('lhead.lh2').removeClass('active');
        $(this).parent().find('.lbody.lb1').slideToggle(280);
        $('.legal-wrap.lw2').find('.lbody.lb2').slideToggle(280);
      });
      $('.lhead.lh2').click(function() {
        $('lhead.lh1').removeClass('active');
        $('lhead.lh2').addClass('active');
        $('.legal-wrap.lw1').find('.lbody.lb1').slideToggle(280);
        $(this).parent().find('.lbody.lb2').slideToggle(280);
      });

      $('#legal').click(function() {
        $('.legal-pop').css('display', 'flex');
      });
      $('#legal-close').click(function() {
        $('.legal-pop').css('display', 'none');
      });

      $('.lhead.lh1').click(function() {
        $('lhead.lh1').addClass('active');
        $('lhead.lh2').removeClass('active');
        $(this).parent().find('.lbody.lb1').slideToggle(280);
        $('.legal-wrap.lw2').find('.lbody.lb2').slideToggle(280);
      });

     
    </script>


    <!--<script>
$('.sub-btn').click(function(){
  $('.sub-body').addClass('active')
});
 </script>-->

    <script src="{{url('/')}}/js/anime.js"></script>

    <script type="text/javascript" src="{{url('/')}}/js/bodyScrollLock.js"></script>
    <script>
      $(document).ready(function() {
        $('body-ape').addClass('disable');
      });

      $('.open-mob-menu').on('click', function() {
        bodyScrollLock.disableBodyScroll(document.querySelector('.mob-menu'));
        $('body-ape').addClass('disable');
      });
      $('.close-mob-menu').on('click', function() {
        bodyScrollLock.enableBodyScroll(document.querySelector('.mob-menu'));
        $('body-ape').removeClass('disable');
      });
    </script>


    <script>
      $('.box').hover(function() {
        $('.box').toggleClass('box-op')
        $(this).removeClass('box-op')
      });

      $('.open-mob-menu').click(function() {
        $('.mob-menu').toggleClass('active');
      });

      $('.close-mob-menu').click(function() {
        $('.mob-menu').toggleClass('active');
      });
    </script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.fog.min.js"></script>

    <script>
      VANTA.FOG({
        el: "#vantafog",
        mouseControls: true,
        touchControls: true,
        gyroControls: false,
        minHeight: 200.00,
        minWidth: 200.00,
        highlightColor: 0xb4b5bb,
        midtoneColor: 0x8a909d,
        lowlightColor: 0x7a7f93,
        baseColor: 0xffffff,
        blurFactor: 0.21,
        speed: 0.23,
        zoom: 0.07
      })
    </script>

    <script>
      var timer;
      // CURRENT DATE AND TIME
      var now = new Date()
      // OFFSET FOR Greenwich Meantime Time from UTC - this will need to be adjusted to whatever timezone you are posting the dates in - fore example, US Eastern Time would be -240
      var offset = now.getTimezoneOffset() + 60;
      // SET DATE TO SPECIFIC DAY IN THE FUTURE
      // MONTHS go from 0 to 11: January is 0, February is 1, and so on
      var then = new Date(2022, 00, 24, 09, 00, 0, 0);
      // COUNT DOWN TO 3 DAYS IN THE FUTURE (259,200,000 = 1000 * 60 * 60 * 24 * 3)
      // var then = now.getTime() + 259200000;


      var compareDate = new Date(then) - now.getDate() - (offset * 60 * 1000);
      timer = setInterval(function() {
        timeBetweenDates(compareDate);
      }, 1000);

      function timeBetweenDates(toDate) {
        var dateEntered = new Date(toDate);
        var now = new Date();
        var difference = dateEntered.getTime() - now.getTime();

        if (difference <= 0) {

          $("#days").text("0");
          $("#hours").text("0");
          $("#minutes").text("0");
          $("#seconds").text("0");

        } else {

          var seconds = Math.floor(difference / 1000);
          var minutes = Math.floor(seconds / 60);
          var hours = Math.floor(minutes / 60);
          var days = Math.floor(hours / 24);

          hours %= 24;
          minutes %= 60;
          seconds %= 60;

          $("#days").text(days);
          $("#hours").text(hours);
          $("#minutes").text(minutes);
          $("#seconds").text(seconds);
        }
      }
    </script>


    
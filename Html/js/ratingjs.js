
             var slideIndex = 1;
          showSlides(slideIndex);
          
          // Next/previous controls
          function plusSlides(n) {
            showSlides(slideIndex += n);
          }
          
          // Thumbnail image controls
          function currentSlide(n) {
            showSlides(slideIndex = n);
          }
          
          function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1} 
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none"; 
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block"; 
            dots[slideIndex-1].className += " active";
          } 
          // Script for side navigation
          function w3_open() {
            var x = document.getElementById("mySidebar");
            x.style.width = "300px";
            x.style.paddingTop = "10%";
            x.style.display = "block";
          }
          
          // Close side navigation
          function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
          }
          
          // Used to toggle the menu on smaller screens when clicking on the menu button
          function openNav() {
            var x = document.getElementById("navDemo");
            if (x.className.indexOf("w3-show") == -1) {
              x.className += " w3-show";
            } else { 
              x.className = x.className.replace(" w3-show", "");
            }
          }
         
          
  
        $(document).ready(function() {
            $("#myModal").modal('show');
            $("#give_feedback,#arr3").click(function() {
                $("#page2").show();
                $("#page3").hide();
                $("#page4").hide();
                $("#main_popup").hide();
            });

        });
        $("#ok,#arr2").click(function() {
            $("#page2").hide();
            $("#page3").show();
            $("#page4").hide();
            $("#main_popup").hide();
        });
        $("#ok2,#arr4").click(function() {
            $("#page2").hide();
            $("#page3").hide();
            $("#page4").show();
            $("#main_popup").hide();
        });
        $("#arr1").click(function() {
            $("#page2").hide();
            $("#page3").hide();
            $("#page4").hide();
            $("#main_popup").show();
        });
    
        new WOW().init();
    
        $(function() {
            $('.mat-input-outer label').click(function() {
                $(this).prev('input').focus();
            });
            $('.mat-input-outer input').focusin(function() {
                $(this).next('label').addClass('active');
            });
            $('.mat-input-outer input').focusout(function() {
                if (!$(this).val()) {
                    $(this).next('label').removeClass('active');
                } else {
                    $(this).next('label').addClass('active');
                }
            });
        });
   
        $(document).ready(function() {
            $('.rating').magicRatingInit({
                success: function(magicRatingWidget, rating) {
                    alert(rating);
                },
                iconGood: "fa-bicycle",
                iconBad: "fa-car",
            });
            $(".rating2").magicRatingInit({
                success: function(magicRatingWidget, rating) {
                    alert(rating);
                }
            })
        });
    
   
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
        
  
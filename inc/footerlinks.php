<!-- Jquery JS-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<!-- Jquery JS -->
<!-- Bootstrap CDN -->
<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>





<!-- Bootstrap CDN -->
<!-- wow js -->
<script src="js/wow.min.js"></script>
<!-- wow js  -->
<!-- Slick Slider CDN -->
<!-- <script type="text/javascript" src="slick/slick.min.js"></script> -->
<!-- Slick Slider CDN -->
<script>
    // $(document).ready(function () {
    //     $(window).on('load', function(){
    //         $("#preloader").fadeOut(1000);
    //     });
    // })
    // Mobile Nav


    $('document').ready(function() {
        $('.canvas-icon i').click(function() {
            $(".mobile-header").addClass('showheader');
        });

        $(' .mobile-header .cancel').click(function() {
            $(".mobile-header").removeClass('showheader');
        });
    });
    // Mobile Nav
    $(document).ready(function() {
        $(window).on('load', function() {
            $("#preloader").fadeOut(1000);
        });
    });
</script>
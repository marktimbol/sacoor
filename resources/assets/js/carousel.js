$(document).ready(function() {
      $("#quotes").owlCarousel({
            navigation : false, // Show next and prev buttons
            slideSpeed : 1000,
            pagination: false,
            paginationSpeed : 400,
            singleItem: true,
            autoPlay: true,
            touchDrag: false,
            mouseDrag: false,
            transitionStyle: 'fade',
      });
});
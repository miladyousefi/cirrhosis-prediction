$(document).ready(function() {
    $('#toggleSidebar').on('click', function() {
      $('.sidebar').toggleClass('active');
      $('.main-content').toggleClass('active');
      $('#toggle-cross').addClass('d-block');
      if ($('.sidebar').hasClass('active')) {
        $('.sidebar').css({
          'display': 'flex', // Show the sidebar
          'width': '100%', // Set width to 100%
          'z-index': '1000' // Set z-index to 1000
        });
        $('.main-content').hide(); // Hide the main content

      } else {
        $('.sidebar').css({
          'display': 'none', // Hide the sidebar
          'width': '', // Reset width
          'z-index': '' // Reset z-index
        });
        $('.main-content').show(); // Show the main content

      }
    });


    $('#toggle-cross').on('click', function(e) {
      e.stopPropagation(); // Prevent the click event from bubbling up
      $('#toggleSidebar').click(); // Trigger the sidebar toggle when clicking the cross button
    });
  });

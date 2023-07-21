<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tyro Dev</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/front/img/tyro.png') }}" rel="icon">
  <link href="{{ asset('assets/front/img/tyro.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
@include('front.layouts.css')


</head>

<body>

  <!-- ======= Header ======= -->
  <!-- End Header -->
@include('front.layouts.header')
  <!-- ======= Hero Section ======= -->

@yield('content')
  <!-- ======= Footer ======= -->
  <!-- End Footer -->
@include('front.layouts.footer')
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


</body>
@include('front.layouts.js')
<script>
    $(document).ready(function() {
      // Listen for the form submission
      $("#contact-form").submit(function(event) {

        // Prevent the default form submission behavior
        event.preventDefault();

        // Serialize the form data
        var formData = $(this).serialize();

        // Make the AJAX request to the Laravel controller
        $.ajax({
          type: "POST",
          url: $(this).attr("action"),
          data: formData,
          dataType: "json",
          success: function(data) {
              $(".loading").hide();
              $(".sent-message").show();
              $("#contact-form")[0].reset();

          },
          error: function() {
            // If the AJAX request encounters an error
            $(".loading").hide();
            $(".error-message").text("An error occurred while processing your request.").show();
          },
          beforeSend: function() {
            // Show loading message before the request is sent
            $(".loading").show();
            $(".sent-message").hide();
            $(".error-message").hide();
          },
        });
      });
    });
  </script>
</html>

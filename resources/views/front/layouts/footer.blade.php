<footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>For More Update</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Tyro Devs</h3>
            <p>
              {{ $contacts->address ?? ''}}<br>
              <strong>Phone:</strong> {{ $contacts->phone ?? ''}}<br>
              <strong>Email:</strong> {{ $contacts->email ?? ''}}<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
                @foreach ($servicess as $data)
              <li><i class="bx bx-chevron-right"></i> <a href="#">{{ $data->title }}</a></li>
              @endforeach
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Please Visit To Our Socal Network</p>
            <div class="social-links mt-3">
              <a href="{{ $footer->fb_link ?? ''}}" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="{{ $footer->insta_link ?? ''}}" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="{{ $footer->skype_link ?? ''}}" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="{{ $footer->linkedin_link ?? ''}}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Tyro Devs</span></strong>. All Rights Reserved
      </div>

      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="">Tryo Devs</a>
      </div>
    </div>
  </footer>

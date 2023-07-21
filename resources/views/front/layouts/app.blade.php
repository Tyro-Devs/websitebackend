@extends('front.layouts.index')
@section('content')
<section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>{{ $topSection->top_heading }}</h1>
          <h2>{{ $topSection->top_about }}</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#contact" class="btn-get-started scrollto">Get Started</a>
            <a href="{{ $topSection->top_video_link }}" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{ asset('assets/front/img/hero-img.png') }}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">
           @foreach ($tools as $tool)
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" >
            <img src="{{ asset($tool->image) }}" class="img-fluid" alt="">
          </div>
          @endforeach

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              {{ $about->part1 }}
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> {{ $about->list1 }}</li>
              <li><i class="ri-check-double-line"></i> {{ $about->list2 }}</li>
              <li><i class="ri-check-double-line"></i> {{ $about->list3 }}</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
             {{ $about->Part2 }}
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>{{ $why_us->title }}</h3>
              <p>
                {{ $why_us->why_us_about }}
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                @foreach ($why_us_accs as $why_us_acc)


                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-{{ $loop->index+1 }}"><span>{{ $loop->index+1 }}</span> {{ $why_us_acc->title }} <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-{{ $loop->index }}" class="collapse @if(($loop->index+1) == 1) show @endif" data-bs-parent=".accordion-list">
                    <p>
                      {{ $why_us_acc->desc }}
                    </p>
                  </div>
                </li>
                @endforeach
              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/front/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Skills Section ======= -->
    <!-- <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/skills.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>

            <div class="skills-content">

              <div class="progress">
                <span class="skill">HTML <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">CSS <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">JavaScript <i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Photoshop <i class="val">55%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>
    </section>End Skills Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services ">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>{{ $service->desc }}</p>
        </div>

        <div class="row">
            @foreach ($services as $servicedetail)
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-{{ $servicedetail->logo }}"></i></div>
              <h4><a href="">{{ $servicedetail->title }}</a></h4>
              <p>{{ $servicedetail->short_desc }}</p>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Call To Action</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#contact">Call To Action</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <li data-filter="*" class="filter-active">All</li>
        @foreach ($types as $type)


          <li data-filter=".filter-{{ $type->name }}">{{ $type->name }}</li>
          @endforeach
        </ul>


        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            @foreach ($portfolios as $port)
          <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $port->type->name }}">
            <div class="portfolio-img"><img src="{{ asset($port->image) }}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>{{ $port->title }}</h4>
              <p>{{ $port->type->name }}</p>
              <a href="{{ asset($port->image) }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{ $port->title }}"><i class="bx bx-plus"></i></a>
              <a href="{{ route('portfolio', $port->id) }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          @endforeach


        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>{{ $topSection->team_desc }}</p>
        </div>

        <div class="row">
           @foreach ($teams as $team)
          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset($team->image) }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>{{ $team->name }}</h4>
                <span>{{ $team->designation }}</span>
                <p>{{ $team->member_desc }}</p>
                <div class="social">

                  <a href="{{ $team->fb_link }}"><i class="ri-facebook-fill"></i></a>
                  <a href="{{ $team->insta_link }}"><i class="ri-instagram-fill"></i></a>
                  <a href="{{ $team->linkedin_link }}"> <i class="ri-linkedin-box-fill"></i> </a>
                  <a href="{{ $team->portfolio_link }}"> <i class="ri-github-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>{{ $faq->desc }}</p>
        </div>

        <div class="faq-list">
          <ul>
            @foreach ($faq_accs as $faq_acc)
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-{{ $loop->index+1 }}">{{ $faq_acc->title }} <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-{{ $loop->index+1 }}" class="collapse @if(($loop->index+1) == 1) show @endif" data-bs-parent=".faq-list">
                <p>
                  {{ $faq_acc->desc }}
                </p>
              </div>
            </li>
            @endforeach
          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>{{ $contact->desc }}</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>{{ $contact->address }}</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>{{ $contact->email }}</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>{{ $contact->phone }}</p>
              </div>

              <iframe src="{{ $contact->map }}" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="{{ route('sendMail') }}" method="post" role="form" class="php-email-form" id="contact-form">
                @csrf
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection

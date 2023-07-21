
@extends('front.layouts.index')
@section('content')
<main id="main">
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>{{ $portfolio->title }}</li>
        </ol>
        <h2>{{ $portfolio->title }}</h2>
      </div>
    </section><!-- End Breadcrumbs -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide">
                  <img src="{{ asset($portfolio->image) }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: {{ $portfolio->type->name }}</li>
                <li><strong>Client</strong>: {{ $portfolio->client }}</li>
                <li><strong>Project URL</strong>: <a href="{{ $portfolio->live_link }}">{{ $portfolio->live_link }}</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>This is portfolio detail</h2>
              <p>
               {{ $portfolio->desc }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
@endsection

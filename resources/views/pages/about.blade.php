@extends('layouts.app')

@section('content')




<div   class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('{{ asset('assets/images/hero_5.jpg') }}');">
    <div class="container">
        <div class="row same-height justify-content-center">
            <div class="col-md-6">
                <div class="text-center post-entry">
                    <h1 class="mb-4">About Us</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-0 section sec-halfs">
    <div class="container">
        <div class="half-content d-lg-flex align-items-stretch">
            <div class="img" style="background-image: url('{{ asset('assets/images/hero_1.jpg') }}')" data-aos="fade-in" data-aos-delay="100">

            </div>
            <div class="text">
                <h2 class="mb-3 heading text-primary">Resources for makers and creatives</h2>
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <p><a href="#" class="py-2 btn btn-outline-primary">Read more</a></p>
            </div>
        </div>

        <div class="half-content d-lg-flex align-items-stretch">
            <div class="img order-md-2" style="background-image: url('{{ asset('assets/images/hero_2.jpg') }}')" data-aos="fade-in">

            </div>
            <div class="text">
                <h2 class="mb-3 heading text-primary">We are trusted by more than 5,000 clients</h2>
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <p><a href="#" class="py-2 btn btn-outline-primary">Read more</a></p>
            </div>
        </div>
    </div>

</div>

<div class="section sec-features">
    <div class="container">
        <div class="row g-5">
            <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                <div class="feature d-flex">
                    <span class="bi-bag-check-fill"></span>
                    <div>
                        <h3>Building your blog</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature d-flex">
                    <span class="bi-wallet-fill"></span>
                    <div>
                        <h3>Resources and insights</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature d-flex">
                    <span class="bi-pie-chart-fill"></span>
                    <div>
                        <h3>Blog just for you</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="section">
    <div class="container">

        <div class="mb-5 row">
            <div class="mx-auto text-center col-lg-5" data-aos="fade-up">
                <h2 class="heading text-primary">Our Team</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            </div>
        </div>

        <div class="row">
            <div class="mb-4 text-center col-lg-4" data-aos="fade-up" data-aos-delay="0">
                <img src="{{ asset('assets/images/person_1.jpg') }}" alt="Image" class="mb-3 img-fluid w-50 rounded-circle">
                <h5 class="text-black">James Griffin</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            </div>
            <div class="mb-4 text-center col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('assets/images/person_2.jpg') }}" alt="Image" class="mb-3 img-fluid w-50 rounded-circle">
                <h5 class="text-black">Claire Smith</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            </div>
            <div class="mb-4 text-center col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('assets/images/person_3.jpg') }}" alt="Image" class="mb-3 img-fluid w-50 rounded-circle">
                <h5 class="text-black">Jessica Wilson</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            </div>

            <div class="mb-4 text-center col-lg-4" data-aos="fade-up" data-aos-delay="0">
                <img src="{{ asset('assets/images/person_4.jpg') }}" alt="Image" class="mb-3 img-fluid w-50 rounded-circle">
                <h5 class="text-black">William Anderson</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            </div>
            <div class="mb-4 text-center col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('assets/images/person_5.jpg') }}" alt="Image" class="mb-3 img-fluid w-50 rounded-circle">
                <h5 class="text-black">Julie Harvey</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            </div>
            <div class="mb-4 text-center col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('assets/images/person_2.jpg') }}" alt="Image" class="mb-3 img-fluid w-50 rounded-circle">
                <h5 class="text-black">Shana Clarkson</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            </div>
        </div>

    </div>
</div>



<div class="section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="mb-4 col-lg-7 mb-lg-0">
                <img src="{{ asset('assets/images/person_2.jpg') }}" alt="Image" class="rounded img-fluid ">
            </div>
            <div class="col-lg-4 ps-lg-2">
                <div class="mb-5">
                    <h2 class="text-black h4">Publishing platform for professional bloggers</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="mb-3 d-flex service-alt">
                    <div>
                        <span class="bi-wallet-fill me-4"></span>
                    </div>
                    <div>
                        <h3>Building your blog</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>

                <div class="mb-3 d-flex service-alt">
                    <div>
                        <span class="bi-pie-chart-fill me-4"></span>
                    </div>
                    <div>
                        <h3>Resources and insights</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>

                <div class="mb-3 d-flex service-alt">
                    <div>
                        <span class="bi-bag-check-fill me-4"></span>
                    </div>
                    <div>
                        <h3>Blog just for you</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>



@endsection

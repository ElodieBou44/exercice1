@extends('master')
@section('title', 'Contact')
<!-- Contenu -->
@section('content')
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-5">
                                <span class="section-heading-upper">Come On &</span>
                                <span class="section-heading-lower">Tell us what's on your mind</span>
                            </h2>
                            <!-- <form method="post" action="contact" class="list-unstyled list-hours mb-5 text-left mx-auto">
                                @csrf
                                <label class="list-unstyled-item list-hours-item c-flex">
                                    <input type="text"  placeholder="Your name">
                                </label>
                                <label class="list-unstyled-item list-hours-item c-flex">
                                    <input type="text"  placeholder="Your phone number">
                                </label>
                                <label class="list-unstyled-item list-hours-item c-flex">
                                    <input type="text"  placeholder="Your email">
                                </label>
                                <label class="list-unstyled-item list-hours-item c-flex">
                                    <input type="textarea" class="textarea" placeholder="Your message">
                                </label>
                                <button class="btn btn-primary text-uppercase" type="submit">Send</button>
                            </form> -->
                            @isset($data)
                            <p class="address mb-5"><em>Thank you <strong> {{ $data->name }} </strong> for your message!</em></p>
                            Here are the informations you gave us: <br>
                            <strong>Phone: </strong> {{ $data->phone }} <br>
                            <strong>Email: </strong> {{ $data->email }} <br>
                            <strong>Message: </strong> {{ $data->message }} 
                            <!-- Pour faire un sinon: {{ $data->name ?? '' }} -->
                            <br><br>
                            We will get back to you as soon as possible! :) 
                            <br><br><br>

                            @else
                            <form method="post" action="contact" class="mb-5 text-left mx-auto">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" id="name" placeholder="Your name" name="name">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" id="phone" placeholder="Your phone number" name="phone">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="email" class="form-control" id="email" placeholder="Your email" name="email">
                                </div>
                                <div class="form-group mb-3">
                                    <textarea class="form-control" id="message" rows="4" placeholder="Your message" name="message"></textarea>
                                </div>
                                <button class="btn btn-primary text-uppercase" type="submit">Send</button>
                            </form>
                            @endisset
                            <p class="address mb-5">
                                <em>
                                    <strong>1116 Orchard Street</strong>
                                    <br />
                                    Golden Valley, Minnesota
                                </em>
                            </p>
                            <p class="mb-0">
                                <small><em>Call Anytime</em></small>
                                <br />
                                (317) 585-8468
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section about-heading">
            <div class="container">
                <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="assets/img/about.jpg" alt="..." />
                <div class="about-heading-content">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 mx-auto">
                            <div class="bg-faded rounded p-5">
                                <h2 class="section-heading mb-4">
                                    <span class="section-heading-upper">Strong Coffee, Strong Roots</span>
                                    <span class="section-heading-lower">About Our Cafe</span>
                                </h2>
                                <p>Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.</p>
                                <p class="mb-0">
                                    We guarantee that you will fall in
                                    <em>lust</em>
                                    with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
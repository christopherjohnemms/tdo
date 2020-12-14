@extends('layouts.site')

@section('content')

    <div class="page" style="min-height: 700px;">


        <div class="welcome-block " style="padding-left:0 !important; padding-right:0px !important;">
            <div class="flex-container tiger-row">
                <div class="left">
                    <h2 class="aboutHead">Cannock Tae Kwon Do </h2>

                    <p style="margin-bottom:0;">
                        <span style="font-weight:700;">Classes Every Tuesday & Thursday</span><br />

                        Cannock Chase High School<br />

                        Upper School Gym<br />

                        Calving Hill<br />

                        Cannock<br />

                        Staffordshire<br />

                        WS11 1JS<br /><br />

                        Find Cannock Tae Kwon Do on social media
                    </p>
                    <div class="socials" style="margin-bottom: 20px;">
                        <a href="https://www.facebook.com/groups/46632409696/" target="_blank"><img src="{{ url('images/contact/facebook-logo.png') }}" style="border:none !important; width:45px;"/> </a>
                        <a href="https://twitter.com/taekwondo_bc" target="_blank"><img src="{{ url('images/contact/twitter-logo.png') }}" style="border:none !important; width:45px;"/></a>
                        <a href="https://www.instagram.com/bctaekwondo/" target="_blank"><img src="{{ url('images/contact/instagram-logo.png') }}" style="border:none !important; width:45px;"/></a>
                    </div>
                    <a class="button-black" href="#contact">
                        Contact Us >
                    </a>
                </div>
                <div class="right" style="flex: 0 0 359px !important;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d19344.976478368782!2d-2.026415!3d52.69389!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x682fc18dd64c5b97!2sCannock%20Chase%20High%20School!5e0!3m2!1sen!2sus!4v1606824690767!5m2!1sen!2sus" width="100%" height="360" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>

            <div class="flex-container tiger-row reverse">
                <div class="left">
                    <h2 class="aboutHead">Burntwood Tae Kwon Do </h2>

                    <p style="margin-bottom:0;">
                        <span style="font-weight:700;">Classes Every Monday & Wednesday</span><br />

                        Erasmus Darwin Academy<br />

                        Pool Road<br />

                        Burntwood<br />

                        Staffordshire<br />

                        WS7 3QW <br /><br />

                        Find Burntwood Tae Kwon Do on social media
                    </p>
                    <div class="socials" style="margin-bottom: 20px;">
                        <a href="https://www.facebook.com/groups/46632409696/" target="_blank"><img src="{{ url('images/contact/facebook-logo.png') }}" style="border:none !important; width:45px;"/> </a>
                        <a href="https://twitter.com/taekwondo_bc" target="_blank"><img src="{{ url('images/contact/twitter-logo.png') }}" style="border:none !important; width:45px;"/></a>
                        <a href="https://www.instagram.com/bctaekwondo/" target="_blank"><img src="{{ url('images/contact/instagram-logo.png') }}" style="border:none !important; width:45px;"/></a>
                    </div>
                    <a class="button-black" href="#contact">
                        Contact Us >
                    </a>

                </div>
                <div class="right" style="flex: 0 0 359px !important;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d19356.465207786412!2d-1.9369009999999998!3d52.667958!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x38fbd81d5752bf56!2sErasmus%20Darwin%20Academy!5e0!3m2!1sen!2sus!4v1606824932132!5m2!1sen!2sus" width="100%" height="359" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>                </div>
            </div>

            <div class="flex-container tiger-row">
                <div class="left">
                    <h2 class="aboutHead">Want to know more
                        about Burntwood & Cannock
                        Tae Kwon Do?</h2>

                    <p style="">
                        For more information on either the Burntwood Tae Kwon Do Club or the Cannock Tae Kwon Do Club, feel free to call Sean Hardwick on<br />
                        <span style="font-size: 28px; line-height: 38px; font-weight:700"> 07773 901281</span>


                    </p>
                    <p>
                        Alternatively you can get in touch by filling in the form below.

                        We’ll get back to you as soon as we can.
                    </p>
                    <form>
                        <div class="row">
                            <label for="name">Name</label>
                            <input type="text" name="name"/>
                        </div>
                        <div class="row">
                            <label for="email">Email</label>
                            <input type="email" name="email"/>
                        </div>
                        <div class="row">
                            <label for="message">Message</label>
                            <textarea rows="8" name="message"></textarea>
                        </div>
                        <div class="row">
                            <input class="wrapped-input" type="checkbox" spellcheck="false"  name="agree" value="1">
                            <span style="font-size:14px; font-weight:600;">I agree to the <a style="color: red !important;" href="{{ url('privacy-policy') }}">Privacy Policy</a></span>
                        </div>
                        <button class="button-black" style="min-width:180px !important;">Send > </button>
                    </form>

                </div>
                <div class="right" style="flex: 0 0 359px !important;">
                    <div class="schedule" style="">
                        <h3 class="headingPromo" style="margin-top:10px;">Class Schedule</h3>
                        <div class="schedule-table">
                            <div class="schedule-row">
                                <p>
                                    Burntwood Club<br />Monday &amp; Wednesday<br><br />
                                    Cannock Club<br />Tuesday &amp; Thursday
                                </p>
                            </div>

                            <div class="schedule-row">
                                <p>
                                    5.30pm – 6.15pm <br />Tigers Beginners
                                </p>
                            </div>

                            <div class="schedule-row">
                                <p>
                                    6.15pm – 7.00pm<br /> Tigers Advanced
                                </p>
                            </div>

                            <div class="schedule-row">
                                <p>
                                    7.00pm – 8.00pm<br /> Adults Mixed Ability
                                </p>
                            </div>
                            <div class="schedule-row">
                                <p>
                                    8.00pm – 8.30pm<br /> Extra Training / Sparring
                                </p>
                            </div>
                        </div>
                    </div>                </div>
            </div>


            <img src="{{ url('images/home/burntwood-cannock-taekwondo-affiliate-logos.png') }}" style="width:100%; display: block; margin:10px auto;" />

        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('.home-slider').slick({
            infinite: true,
            dots:false,
            arrows:true
        });
    </script>
@endsection

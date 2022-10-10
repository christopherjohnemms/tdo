@extends('layouts.site')

@section('footerchoice', 'yellow')
@section('title', 'Starting')
@section('meta', 'Information for people interested in beginning Taekwondo classes with Burntwood and Cannock Taekwondo, the number 1 Taekwondo club in Staffordshire and the West Midlands')

@section('content')

    <div class="page" style="min-height: 700px;">


        <div class="welcome-block">
            <div class="flex-container">
                <div class="left">
                    <h1>
                        Frequently asked questions when starting Tae Kwon Do
                    </h1>
                    <div class="faq-row">
                        <h2>Do I need to be fit to start Tae Kwon Do? </h2>
                        <p>
                            No! All the training is targeted to work to the individuals own level of fitness, this method will help you progress quickly and soon after starting Tae Kwon Do you will see personal improvements in fitness and flexibility.
                        </p>
                    </div>
                    <div class="faq-row">
                        <h2>Will I need a suit to start Tae Kwon Do?</h2>
                        <p>
                            I do not push my students into buying suits (doboks) until I am sure they are going to stay about 10 weeks into the classes.
                        </p>
                    </div>
                    <div class="faq-row">
                        <h2>What do I wear if not a suit?</h2>
                        <p>
                            Something loose you can move about in, tracksuit, jogging bottoms or shorts and a T-shirt will be fine.
                        </p>
                    </div>
                    <div class="faq-row">
                        <h2>Do I have to pay a membership fee?</h2>
                        <p>
                            No. Eventually you will need a licence, as this is a legal requirement and your own insurance cover.
                        </p>
                    </div>
                    <div class="faq-row">
                        <h2>What age do I need to be to start
                            training in Tae Kwon Do?</h2>
                        <p>
                            You can start from about 5 years of age, my oldest student is 63.
                        </p>
                    </div>
                    <div class="faq-row">
                        <h2>Will I get hurt?</h2>
                        <p>
                            No. All the sparring is semi contact in Tae Kwon Do which means the kicks and punches are pulled to make them safe, all the self defence moves are strictly controlled as they are very effective.
                        </p>
                    </div>
                    <div class="faq-row">
                        <h2>How much will it cost? </h2>
                        <p>
                            Per Lesson <span style="font-size:19px; font-weight:700;">£7.00</span><br />
                            Monthly Membership <span style="font-size:19px; font-weight:700;">£35.00</span><br />
                            <span style="font-size: 12px;">(payment by cash or cheque)</span>
                        </p>
                    </div>
                    <div class="faq-row">
                        <h2>How often should I train?</h2>
                        <p>
                            To get the most from your Tae Kwon Do training, it is recommended you train at least twice per week.
                        </p>
                    </div>
                </div>
                <div class="right">
                    <div class="schedule">
                        <h3 class="headingPromo">Class Schedule</h3>
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
                    </div>
                    <div class="childrens schedule-childrens" style="">
                        <h3 class="headingPromo">Childrens Classes</h3>
                        <a href="{{ url('/tigers') }}">
                            <div class="tigers-bg"></div>
                        </a>
                    </div>

                    <div class="pack schedule-pack" >
                        <h3 class="headingPromo">Beginner's pack</h3>
                        <a href="{{ url('/pdf/EP067_TKD_Beginner_Pack_Sep22_AW_singles.pdf') }}" target="_blank">
                            <img src="{{ url('images/starting/beginners-pack.jpg?v=1') }}" style="width:100%; display: block;" alt="Beginners Pack"/>
                        </a>
                        <a href="{{ url('/pdf/EP067_TKD_Beginner_Pack_Sep22_AW_singles.pdf') }}" target="_blank">
                            <div class="d-l-pack-start"></div>
                        </a>
                    </div>
                </div>
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

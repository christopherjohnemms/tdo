@extends('layouts.site')

@section('footerchoice', 'yellow')

@section('content')

    <div class="page" style="min-height: 700px;">

        <div class="home-slider">
            <div>
                <img src="{{ url('images/home/hero-panel-taekwondo-expert-tuition.jpg') }}"  style="display:block; width:100%;"/>
            </div>
            <div>
                <img src="{{ url('images/home/hero-panel-taekwondo-high-level.jpg') }}"  style="display:block; width:100%;"/>
            </div>
            <div>
                <img src="{{ url('images/home/hero-panel-taekwondo-martial-arts.jpg') }}"  style="display:block; width:100%;"/>
            </div>
            <div>
                <img src="{{ url('images/home/hero-panel-taekwondo-self-defence.jpg') }}"  style="display:block; width:100%;"/>
            </div>
        </div>

        <div class="welcome-block">
            <div class="flex-container">
                <div class="left">
                    <h1>
                        Welcome to Burntwood
                        and Cannock Tae Kwon Do
                    </h1>
                    <ul>
                        <li>
                            Britain’s No.1 Tae Kwon Do Club
                        </li>
                        <li>
                            You don’t need to be fit to start training
                        </li>
                        <li>
                            Tae Kwon Do is suitable for men & women of all ages
                        </li>
                        <li>
                            Improve your confidence, fitness and flexibility!
                        </li>
                        <li>
                            Tae Kwon Do is an Olympic sport
                        </li>
                        <li>
                            Member of the TAGB
                        </li>
                        <li>
                            The UK’s largest Tae Kwon Do Association
                        </li>
                    </ul>
                </div>
                <div class="right">
                    <img src="{{ url('images/home/sean-hardwick-kicking-pose.jpg') }}" alt=""/>
                </div>
            </div>

            <div class="flex-container secondary-box">
                <div class="childrens">
                    <h3 class="headingPromo">Childrens Classes</h3>
                    <a href="#">
                        <div class="tigers-bg"></div>
                    </a>
                </div>
                <div class="schedule">
                    <h3 class="headingPromo">Class Schedule</h3>
                    <div class="schedule-table">
                        <div class="schedule-row">
                            <p>
                                Burntwood Club: Monday & Wednesday<br />
                                Cannock Club: Tuesday & Thursday
                            </p>
                        </div>

                        <div class="schedule-row">
                            <p>
                                5.30pm – 6.15pm: Tigers Beginners
                            </p>
                        </div>

                        <div class="schedule-row">
                            <p>
                                6.15pm – 7.00pm: Tigers Advanced
                            </p>
                        </div>

                        <div class="schedule-row">
                            <p>
                                7.00pm – 8.00pm: Adults Mixed Ability
                            </p>
                        </div>
                        <div class="schedule-row">
                            <p>
                                8.00pm – 8.30pm: Extra Training / Sparring
                            </p>
                        </div>
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

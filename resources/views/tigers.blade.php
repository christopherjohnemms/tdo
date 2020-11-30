@extends('layouts.site')

@section('content')

    <div class="page" style="min-height: 700px;">

       <a href="#" class="tiger-hero">
           <div class="tiger-div">
               <img src="{{ url('images/tigers/taekwondo-tigers-header.png') }}" style="width:100%; display: block; margin:0 auto; max-width:1160px;" />
               <img src="{{ url('images/tigers/download-tigers-beginners-pack-button-normal.png') }}" class="welcome" />
           </div>
       </a>

        <div class="welcome-block tigers-welcome" style="padding-left:0 !important; padding-right:0px !important;">
            <div class="flex-container tiger-row">
                <div class="left">
                    <div class="imghead">
                        <img src="{{ url('images/tigers/intro.png') }}"/>
                    </div>

                    <p>
                        My name is Sean Hardwick and I am the Chief Instructor of the club. I have been involved in Tae Kwon Do for the past 32 years and currently hold the grade of 6th Degree Black Belt Master. I have been teaching Tae Kwon Do for 20 years and have been running childrens Tigers classes for 14 years.

                    </p>
                    <p>

                        I am a fully qualified instructor with my qualifications being recognised by the British Sports Council, the British Tae Kwon Do Council and the

                        Tae Kwon Do Association of Great Britain. I have also been advanced screened by the CRB (Criminal Records Bureau).
                    </p>
                </div>
                <div class="right">
                    <img src="{{ url('images/tigers/taekwondo-tigers-teaching.jpg') }}" alt=""/>
                </div>
            </div>

            <div class="flex-container tiger-row reverse">
                <div class="left">
                    <div class="imghead">
                        <img src="{{ url('images/tigers/intro.png') }}"/>
                    </div>

                    <p>
                        My name is Sean Hardwick and I am the Chief Instructor of the club. I have been involved in Tae Kwon Do for the past 32 years and currently hold the grade of 6th Degree Black Belt Master. I have been teaching Tae Kwon Do for 20 years and have been running childrens Tigers classes for 14 years.

                    </p>
                    <p>

                        I am a fully qualified instructor with my qualifications being recognised by the British Sports Council, the British Tae Kwon Do Council and the

                        Tae Kwon Do Association of Great Britain. I have also been advanced screened by the CRB (Criminal Records Bureau).
                    </p>
                </div>
                <div class="right">
                    <img src="{{ url('images/tigers/taekwondo-tigers-teaching.jpg') }}" alt=""/>
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

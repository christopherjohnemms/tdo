@extends('layouts.site')

@section('content')

    <div class="page" style="min-height: 700px;">

       <a href="#" class="tiger-hero">
           <div class="tiger-div">
               <img src="{{ url('images/tigers/taekwondo-tigers-header.png') }}" style="width:100%; display: block; margin:0 auto; max-width:1160px;" />
               <div class="d-l-pack"></div>
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
                        <img src="{{ url('images/tigers/what-is.png') }}"/>
                    </div>

                    <p>Tae Kwon Do is the Korean art of Kick Fighting, used by Korean Special Armed Forces for unarmed combat.</p>

                    <p>
                    Tae Kwon Do Tigers is a childrens’ class offering energetic, exciting activities that aim to put the fun back into physical fitness and flexibility through regular participation in Tae Kwon Do Tigers.
                    </p>

                    <p>
                    They will also learn how their bodies work and how important it is to be active. We hope to encourage a positive attitude through martial arts that will benefit children throughout their adult lives.
                    </p>

                    <p>
                        Activities in Tigers include games and martial arts training to keep children motivated and having fun.
                    </p>
                </div>
                <div class="right">
                    <img src="{{ url('images/tigers/taekwondo-tigers-training.jpg') }}" alt=""/>
                </div>
            </div>

            <div class="flex-container tiger-row">
                <div class="left">
                    <div class="imghead">
                        <img src="{{ url('images/tigers/first.png') }}"/>
                    </div>
                    <p>
                    Firstly you must remove your shoes and socks and sit at the side of the room until I call you all out to start. The lesson will start by lining up and bowing to me.
                    </p>

                    <p>
                        You will then be given instructions on the warming up and strengthening exercises. Certain Tae Kwon Do moves will then be taught.
                    </p>
                    <p>
                        You will be finishing the lesson by playing a speed game. At the end of the lesson you must line up and bow to finish.
                    </p>
                </div>
                <div class="right">
                    <img src="{{ url('images/tigers/taekwondo-tigers-class.jpg') }}" alt=""/>
                </div>
            </div>

            <div class="flex-container tiger-row reverse">
                <div class="left">
                    <div class="imghead">
                        <img src="{{ url('images/tigers/safe.png') }}"/>
                    </div>

                    <p>
                        Everything taught is safe and will be done under supervision by myself and senior grade Tiger coaches.

                    </p>
                    <p>

                        We teach in a fun but disciplined environment with no mischievous behaviour allowed.
                    </p>
                </div>
                <div class="right">
                    <img src="{{ url('images/tigers/taekwondo-tigers-tournament-winners.jpg') }}" alt=""/>
                </div>
            </div>

            <div class="flex-container tiger-row">
                <div class="left">
                    <div class="imghead">
                        <img src="{{ url('images/tigers/training.png') }}"/>
                    </div>

                    <p>
                        As a parent myself, I always like to know how much my child’s activities will cost not only in the short term, but also as they become more established.
                    </p>
                    <p>
                        Due to this, I am listing below all of the expenses before you and your child start training in Tae Kwon Do, as I have always conducted the running of my club in a very professional manner.
                    </p>

                    <p style="margin-bottom:0;background: #FFCB27; padding:3px; font-weight:700; font-size:22px;">LESSON FEES: £32 <span style="font-size:16px">per month</span></p>
                    <p style="margin-top:5px;">
                    £32 per month by standing order OR £6.50 per lesson.
<br />
                    Paying monthly gives unlimited training – NO contracts.
                    </p>


                    <p style="margin-bottom:0;background: #FFCB27; padding:3px; font-weight:700; font-size:22px;">SUIT: £40</p>
                    <p style="margin-top:5px;">
                    Please note I do not advise you to buy a suit,<br />
                    until your child has been training for a minimum of 6 weeks.
                    </p>


                    <p style="margin-bottom:0;background: #FFCB27; padding:3px; font-weight:700; font-size:22px;">GRADING: £30 <span style="font-size:16px">per grade</span></p>

                    <p>
                        Grading, or taking belts, takes place three times per year. However, I will not allow students to enter into a grading until I am sure that they are ready.
                    </p>


                    <p style="margin-bottom:0;background: #FFCB27; padding:3px; font-weight:700; font-size:22px;">LICENSES:  <span style="font-size:16px">£40 per year</span></p>

                    <p>
                        To progress to the first level of Tae Kwon Do, all students have to possess a martial arts license. This is a legal requirement due to the nature of the art they are learning.
                    </p>

                </div>
                <div class="right">
                    <img src="{{ url('images/tigers/taekwondo-tigers-winning-team.jpg') }}" alt=""/>
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

@extends('layouts.site')

@section('content')

    <div class="page" style="min-height: 700px;">


        <div class="welcome-block " style="padding-left:0 !important; padding-right:0px !important;">
            <div class="flex-container tiger-row">
                <div class="left">
                   <h2 class="aboutHead">What is the TAGB? </h2>

                    <p>
                        The Tae Kwon Do Association of Great Britain was formed in 1983 from a variety of different Tae Kwon Do groups in the UK.  The TAGB contains some of the worlds top martial arts performers, with several World, European and British champions.
                    </p>
                    <div class="about-tabg">
                        <img src="{{ url('images/about/tagb-logo.jpg') }}" alt="TAGB" style="border:none !important;">
                        <a class="button-black" href="http://www.tagb.biz/" target="_blank">
                            Visit TAGB >
                        </a>
                    </div>

                </div>
                <div class="right">
                    <img src="{{ url('images/about/tagb-commitee.jpg') }}" alt="" style="border:none !important; padding:0;"/>
                </div>
            </div>

            <div class="flex-container tiger-row reverse">
                <div class="left">
                    <h2 class="aboutHead">About Tae Kwon Do                     </h2>
                    <p>
                        Tae Kwon Do is a Korean phrase made from three parts:

                    </p>
                    <p>

                        Tae means <span style="font-weight:800; font-style: italic;">foot</span> (as in to destroy with)
<br />
                        Kwon means <span style="font-weight:800; font-style: italic;">fist</span>
<br />
                        Do means <span style="font-weight:800; font-style: italic;">way</span> (in the sense of path you should follow)
                    </p>

                    <p>

                        So Tae Kwon Do means:<br />

                        <span style="font-weight:800; font-style: italic;">Way of the Foot & Fist</span>
                    </p>

<p>
                        Tae Kwon Do refers to a Korean fighting system which uses the hands and feet to deliver high energy impact techniques to the opponent. These techniques take the form of punches, strikes, kicks and blocks.
</p>

<p>
                        Tae Kwon Do is rightly called a ‘martial art’ because it actually has been employed by the Korean military, to show their soldiers how to engage the enemy in hand-to-hand combat and has been proven effective.
</p>

<p>
                        Tae Kwon Do is also an exciting combat sport in which skills are tested in a rigorously controlled competition. Contestants wear safety padding on fists and feet, and impacts are ‘pulled’ to avoid injury. One form of Tae Kwon Do has now been accepted into the Olympic Games. Tae Kwon Do is a healthy, fitness-promoting activity for persons of all ages, encouraging through its regular practice both self-respect and self-discipline.
                    </p>

                </div>
                <div class="right">
                    <img src="{{ url('images/about/taekwondo-self-defence.jpg') }}" alt="" style="border:none;  padding:0;"/>
                </div>
            </div>

            <div class="flex-container tiger-row">
                <div class="left">
                    <h2 class="aboutHead">History of Tae Kwon Do </h2>

                    <p>
                        Tae Kwon Do was developed in the Korean peninsula and several different sources contributed towards the art as it is practiced today. Earliest of these sources is the Korean martial tradition itself. This developed in response to the many wars and battles which featured in Korea’s long history. Another early source is probably Chinese, that country being Korea’s nearest neighbour. from earliest times, the Chinese developed and refined forms of combat by Buddhist monks and military attaches.
                    </p>

                    <p>
                        The most recent source is Japanese. For the military of that country invaded Korea in 1907 and remained in occupation until 1945.
                        The Japanese taught their fighting systems to Koreans in an effort to raise the latters martial spirit.
                    </p>

                    <p>
                        Though Tae Kwon Do owes something to all these sources, what we now practice is a new system that reflects a truly unique blend of characteristics. Tae Kwon Do kicking techniques are widely regarded as the most sophisticated in the martial world, and followers of other disciplines come to Tae Kwon Do to study them.
                    </p>
                </div>
                <div class="right">
                    <img src="{{ url('images/about/korean-taekwondo-team.jpg') }}" alt=""/>
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

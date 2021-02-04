@extends('layouts.site')
@section('title', 'Instructor')
@section('meta', 'A biography of Master Sean Hardwick, instructor of Burntwood and Cannock Taekwondo, the number 1 Taekwondo club in Staffordshire and the West Midlands')
@section('content')

    <div class="page" style="min-height: 700px;">


        <div class="welcome-block " style="padding-left:0 !important; padding-right:0px !important;">
            <div class="flex-container tiger-row">
                <div class="left">
                    <h1 class="aboutHead" style="margin-bottom:20px;">About your
                        Tae Kwon Do Instructor </h1>
                    <h2 class="aboutHeadSmall">
                        World Master Sean Hardwick, 7th Degree Black Belt, is a highly experienced
                        martial artist, who has trained in several disciplines since 1975…
                    </h2>
                    <p>
                        When he started the Japanese art of Judo, gaining the grade of 7th Kyu at Bridgtown Judo Club, Sean, then aged 12 started Shotokan Karate with Sensei Jacks, but got bored very quickly. So at the age of 14 launched into ABA Boxing firstly at the Edwards Street Gym, Cannock and then at the Wolverhampton ABA on Willenhall Road where he stayed until 1984.
                    </p>
                </div>
                <div class="right">
                    <img src="{{ url('images/instructor/teaching-taekwondo.jpg') }}" alt="" style="border:none !important; padding:0;"/>
                </div>
            </div>

            <div class="flex-container tiger-row reverse">
                <div class="left">
                    <h2 class="aboutHeadSmall">
                        Sean finally found Tae Kwon Do in 1983,
                        and went on to train with the British squad, and other legendary fighters…
                    </h2>
                    <p>
                        Tae Kwon Do became a reality for Sean back in Cannock in 1983 when his friend Julian Smith encouraged him to go to a beginners class at Lyncroft Centre with Instructor Nigel Banks. At first Sean was not impressed with Tae Kwon Do but carried on for a second month as per his membership agreement. He became hooked and has never looked back.
                    </p>
                    <p>
                        When Sean got to Blue Belt he started training with the British Squad at Hinckley and Derby, fighting along side Kenny Walton, Kim Stones,

                        Jackson White, Mark Weir and 3 times World Champion Tony Sewell to name a few of the legendary fighters who trained at these sessions.

                        This is where Sean began to evolve as a fighter and soon went on to win National Tournaments.
                    </p>

                    <p>
                        After passing his Black Belt in 1988, Sean started training at Warwick with Master Dave Oliver. Then, when living in Wolverhampton, became a member of the Wolverhampton Club with Master Paul Donnelly. Some of Sean’s best times were spent at this club. During this time Sean also studied other Martial Arts such as Lau Gar Kung Fu with Vince Lewis in Aston, Birmingham and Muay Thai at Trojan Gym Wolverhampton.
                    </p>

                </div>
                <div class="right">
                    <img src="{{ url('images/instructor/sean-hardwick-taekwondo-stance.jpg') }}" alt="" style="border:none;  padding:0;"/>
                </div>
            </div>

            <div class="flex-container tiger-row">
                <div class="left">
                    <h2 class="aboutHeadSmall">
                        Since 1997, Sean has been teaching
                        Tae Kwon Do to others, taking many students on to Black Belts & National Championships…
                    </h2>

                    <p>
                        Sean was by this time already experienced at teaching in class, but after qualifying as an instructor he opened the Brownhills and Burntwood

                        Tae Kwon Do clubs in 1995. In 1997 he took control of the Cannock Club from his former instructor, Nigel Banks.
                    </p>

                    <p>
                        Sean has been a full time instructor and coach since then, taking many students to Black Belt and National Titles. Sean has travelled and fought around the world, capturing many National and International Titles … and still competes to this day, however in his forties, Sean competes in the executive division.
                    </p>

                    <p>
                        Though Tae Kwon Do owes something to all these sources, what we now practice is a new system that reflects a truly unique blend of characteristics. Tae Kwon Do kicking techniques are widely regarded as the most sophisticated in the martial world, and followers of other disciplines come to Tae Kwon Do to study them.
                    </p>
                </div>
                <div class="right">
                    <img src="{{ url('images/members/instructor.png') }}" alt=""/>
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

@extends('layouts.site')
@section('title', 'Privacy Policy')
@section('meta', 'General information on Taekwondo and the history of Taekwondo for people interested in beginning Taekwondo classes with Burntwood and Cannock Taekwondo')
@section('content')

    <div class="page" style="min-height: 700px;">


        <div class="welcome-block " style="padding-left:0 !important; padding-right:0px !important;">
            <div class="flex-container tiger-row">
                <div class="left">
                    <h2 class="aboutHead">Privacy Policy </h2>

                    <p>
                        This privacy policy tells you about the information we collect from you when you use our website. In collecting this information, we are acting as a data controller and, by law, we are required to provide you with information about us, about why and how we use your data, and about the rights you have over your data.
                    </p>
                    <p style="font-size:16px; font-weight:600;">Who are we?</p>
                    <p>
                        We are Tae Kwon Do Club. Our address is Burntwood Tae Kwon Do Club Erasmus Darwin Academy Pool Road, Burntwood, Staffordshire, WS1 3QW. You can contact us by post at the above address, by email at sean@taekwondo.uk.net or by telephone on 01543 570036
                    </p>
                    <p style="font-size:16px; font-weight:600;">When you use our website</p>
                    <p> We do not use cookies on our website.</p>

                    <p style="font-size:16px; font-weight:600;"> When you submit an enquiry via our website</p>
                    <p>When you submit an enquiry via our website, we ask you for your name & Email address.</p>

                        <p>We use this information to respond to your query, including providing you with any requested information about our products and services.
                            We may also email you several times after your enquiry in order to follow up on your interest and
                            ensure that we have answered your it to your satisfaction. We will do this based on our legitimate
                            interest in providing accurate information prior to a sale</p>

                    <p style="font-size:16px; font-weight:600;">Your right to complain</p>
                        <p>If you have a complaint about our use of your information, we would prefer you to contact us directly in the first instance so that we can address your complaint. However, you can also contact the Information Commissioner’s Office via their website at www.ico.org.uk/concerns or write to them at:
                        </p>
                        <p>Information Commissioner's Office<br />
                        Wycliffe House<br />
                        Water Lane<br />
                        Wilmslow<br />
                        Cheshire<br />
                            SK9 5AF</p>
                    <p style="font-size:16px; font-weight:600;">Updates to this privacy policy</p>
                       <p> We regularly review and, if appropriate, update this privacy policy from time to time,
                           and as our services and use of personal data evolves. If we want to make use of your personal data in
                           a way that we haven’t previously identified, we will contact you to provide information about this and, if necessary, to ask for your consent.</p>

                       <p> We will update the version number and date of this document each time it is changed.
                    </p>
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

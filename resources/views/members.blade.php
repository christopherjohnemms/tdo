@extends('layouts.site')

@section('content')

    <div class="page" style="min-height: 700px;">


        <div class="welcome-block " style="padding-left:0 !important; padding-right:0px !important;">
            <div class="flex-container tiger-row">
                <div class="left">
                    <div class="members-heading">
                        <h2 class="aboutHead">Burntwood & Cannock Tae Kwon Do
                            Calendar of Events 2016 </h2>
                        <div class="key">
                            <ul>
                                <li>Holidays</li>
                                <li>Club Gradings</li>
                                <li>Competitions</li>
                                <li>TAGB Courses</li>
                            </ul>
                        </div>
                    </div>


                    <p>
                        Click the month to see the dates
                    </p>

{{--                    <div class="calendar-list">--}}
{{--                        <div class="calendar-row">--}}
{{--                            <a href="#" class="calendar-nav" data-tab="january">January <img src="{{ url('images/contact/dropdown-arrow.png') }}" style="margin-left:10px;border:0; padding:0;" alt=""></a>--}}
{{--                            <div class="calendar-content">--}}
{{--                                <table>--}}
{{--                                    <tr class="TAGB">--}}
{{--                                        <td >23rd</td>--}}
{{--                                        <td>Umpires Course Part 1</td>--}}
{{--                                        <td>Willenhall Community Centre, 19 Gomer Street, Willenhall WV13 2NS </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr class="competitions">--}}
{{--                                        <td >31st</td>--}}
{{--                                        <td>Midlands Championships</td>--}}
{{--                                        <td>Kettering Arena, Thurston Drive, Kettering, Northamptonshire NN15 6PB  </td>--}}
{{--                                    </tr>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="calendar-row">--}}
{{--                            <a href="#" class="calendar-nav" data-tab="February">February <img src="{{ url('images/contact/dropdown-arrow.png') }}" style="margin-left:10px;border:0; padding:0;" alt=""></a>--}}
{{--                            <div class="calendar-content">--}}
{{--                                <table>--}}
{{--                                    <tr class="TAGB">--}}
{{--                                        <td >6th</td>--}}
{{--                                        <td>Referees Course Part 1 & 2</td>--}}
{{--                                        <td>Willenhall Community Centre, 19 Gomer Street, Willenhall WV13 2NS </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr class="TAGB">--}}
{{--                                        <td>7th</td>--}}
{{--                                        <td>Umpires Course Part 2</td>--}}
{{--                                        <td>Willenhall Community Centre, 19 Gomer Street, Willenhall WV13 2NS </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr class="TAGB">--}}
{{--                                        <td >27th</td>--}}
{{--                                        <td>Umpires Course Part 1 & 2</td>--}}
{{--                                        <td>TAGB Tae Kwon Do Centre, 194B Cowbridge Road, East Canton, Cardiff CF5 1GW</td>--}}
{{--                                    </tr>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="calendar-row">--}}
{{--                            <a href="#" class="calendar-nav" data-tab="March">March <img src="{{ url('images/contact/dropdown-arrow.png') }}" style="margin-left:10px;border:0; padding:0;" alt=""></a>--}}
{{--                            <div class="calendar-content">--}}
{{--                                <table>--}}
{{--                                    <tr class="competitions">--}}
{{--                                        <td>13th</td>--}}
{{--                                        <td>English Championships</td>--}}
{{--                                        <td>University of Worcester Arena, Hylton Road, Worcester WR2 5JN </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr class="TAGB">--}}
{{--                                        <td>27th</td>--}}
{{--                                        <td>Referees Course Part 1 & 2</td>--}}
{{--                                        <td>TAGB Tae Kwon Do Centre, 194B Cowbridge Road, East Canton, Cardiff CF5 1GW</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr class="holidays">--}}
{{--                                        <td>28th/29th</td>--}}
{{--                                        <td colspan="2">Closed for Easter Bank Holiday and Tuesday</td>--}}
{{--                                    </tr>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="calendar-row">--}}
{{--                            <a href="#" class="calendar-nav" data-tab="April">April <img src="{{ url('images/contact/dropdown-arrow.png') }}" style="margin-left:10px;border:0; padding:0;" alt=""></a>--}}
{{--                            <div class="calendar-content">--}}
{{--                                <table>--}}
{{--                                    <tr class="TAGB">--}}
{{--                                        <td>22nd–24th</td>--}}
{{--                                        <td>Black Belt Grading</td>--}}
{{--                                        <td>Bristol Academy, 163a Church Road, Redfield, Bristol BS5 9LA</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr class="club-gradings">--}}
{{--                                        <td>28th</td>--}}
{{--                                        <td>Burntwood/Cannock Grading</td>--}}
{{--                                        <td>Cannock Chase High School, Calving Hill, Cannock WS11 1JS (Start 5.30pm)</td>--}}
{{--                                    </tr>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="calendar-row">--}}
{{--                            <a href="#" class="calendar-nav" data-tab="May">May <img src="{{ url('images/contact/dropdown-arrow.png') }}" style="margin-left:10px;border:0; padding:0;" alt=""></a>--}}
{{--                            <div class="calendar-content">--}}
{{--                                <table>--}}
{{--                                    <tr class="holidays">--}}
{{--                                        <td>2nd</td>--}}
{{--                                        <td colspan="2">Closed for May Day Bank Holiday</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr class="competitions">--}}
{{--                                        <td>7th</td>--}}
{{--                                        <td>Lincolnshire Championships</td>--}}
{{--                                        <td>Grantham Meres Leisure Centre, Trent Road, Grantham NG31 7XQ</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr class="TAGB">--}}
{{--                                        <td>7th</td>--}}
{{--                                        <td>Umpire’s Course Part 1 & 2</td>--}}
{{--                                        <td>Willenhall Community Centre, 19 Gomer Street, Willenhall WV13 2NS</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr class="competitions">--}}
{{--                                        <td>22nd</td>--}}
{{--                                        <td>Welsh Championships</td>--}}
{{--                                        <td>Cyncoed Campus, Cardiff Arena, Cyncoed Road, Cardiff CF23 6XD</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr class="holidays">--}}
{{--                                        <td>30th/31st</td>--}}
{{--                                        <td colspan="2">Closed for Spring Bank Holiday Monday and Tuesday</td>--}}
{{--                                    </tr>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="calendar-row">--}}
{{--                            <a href="#" class="calendar-nav" data-tab="June">June <img src="{{ url('images/contact/dropdown-arrow.png') }}" style="margin-left:10px;border:0; padding:0;" alt=""></a>--}}
{{--                            <div class="calendar-content">--}}
{{--                                <table>--}}
{{--                                    <tr class="TAGB">--}}
{{--                                        <td >11th–12th</td>--}}
{{--                                        <td>Instructors Course Part 1</td>--}}
{{--                                        <td>Bristol Academy, 163a Church Road, Redfield, Bristol BS5 9LA</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr class="TAGB">--}}
{{--                                        <td >25th</td>--}}
{{--                                        <td>Referees Course Part 1 & 2</td>--}}
{{--                                        <td>Willenhall Community Centre, 19 Gomer Street, Willenhall WV13 2NS </td>--}}
{{--                                    </tr>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                        <div class="calendar-row">--}}
{{--                            <a href="#" class="calendar-nav" data-tab="July">July <img src="{{ url('images/contact/dropdown-arrow.png') }}" style="margin-left:10px;border:0; padding:0;" alt=""></a>--}}
{{--                            <div class="calendar-content">--}}
{{--                                <table>--}}
{{--                                    <tr class="competitions">--}}
{{--                                        <td>15th-17th</td>--}}
{{--                                        <td>World Championships</td>--}}
{{--                                        <td>Barclaycard Arena, King Edwards Road, Birmingham B1 2AA</td>--}}
{{--                                    </tr>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="calendar-row">--}}
{{--                            <a href="#" class="calendar-nav" data-tab="August">August <img src="{{ url('images/contact/dropdown-arrow.png') }}" style="margin-left:10px;border:0; padding:0;" alt=""></a>--}}
{{--                            <div class="calendar-content">--}}
{{--                                <table>--}}
{{--                                    <tr class="holidays">--}}
{{--                                        <td>29th–30th</td>--}}
{{--                                        <td colspan="2">Closed for Summer Bank Holiday Monday and Tuesday</td>--}}
{{--                                    </tr>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="calendar-row">--}}
{{--                            <a href="#" class="calendar-nav" data-tab="September">September <img src="{{ url('images/contact/dropdown-arrow.png') }}" style="margin-left:10px;border:0; padding:0;" alt=""></a>--}}
{{--                            <div class="calendar-content">--}}
{{--                                <table>--}}
{{--                                    <tr class="competitions">--}}
{{--                                        <td >4th</td>--}}
{{--                                        <td>South East Championships</td>--}}
{{--                                        <td>Surrey Sports Park, Richard Meyjes Road, Guildford, Surrey GU2 7AD</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr class="competitions">--}}
{{--                                        <td >10th</td>--}}
{{--                                        <td>Scottish Championships</td>--}}
{{--                                        <td>Ravenscraig Regional Sports Facility, O‘Donnell Way, Motherwell ML1 2TZ</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr class="club-gradings">--}}
{{--                                        <td >14th</td>--}}
{{--                                        <td>Burntwood & Cannock Grading</td>--}}
{{--                                        <td>Erasmus Darwin Academy, Pool Road, Burntwood WS7 8QW  (Start 5.30pm)</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr class="TAGB">--}}
{{--                                        <td >24th</td>--}}
{{--                                        <td>Umpires Course Part 1 & 2</td>--}}
{{--                                        <td>TAGB Tae Kwon Do Centre, 194B Cowbridge Road, East Canton, Cardiff CF5 1GW</td>--}}
{{--                                    </tr>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="calendar-row">--}}
{{--                            <a href="#" class="calendar-nav" data-tab="October">October <img src="{{ url('images/contact/dropdown-arrow.png') }}" style="margin-left:10px;border:0; padding:0;" alt=""></a>--}}
{{--                            <div class="calendar-content">--}}
{{--                                <table>--}}
{{--                                    <tr class="TAGB">--}}
{{--                                        <td>14th–16th</td>--}}
{{--                                        <td>Black Belt Grading</td>--}}
{{--                                        <td>Bristol Academy, 163a Church Road, Redfield, Bristol BS5 9LA</td>--}}
{{--                                    </tr>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="calendar-row">--}}
{{--                            <a href="#" class="calendar-nav" data-tab="November">November <img src="{{ url('images/contact/dropdown-arrow.png') }}" style="margin-left:10px;border:0; padding:0;" alt=""></a>--}}
{{--                            <div class="calendar-content">--}}
{{--                                <table>--}}
{{--                                    <tr class="TAGB">--}}
{{--                                        <td>5th/6th</td>--}}
{{--                                        <td>Instructors Course Part 2</td>--}}
{{--                                        <td>Bristol Academy, 163a Church Road, Redfield, Bristol BS5 9LA</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr class="TAGB">--}}
{{--                                        <td>12th</td>--}}
{{--                                        <td>Referees Course Part 1 & 2</td>--}}
{{--                                        <td>TAGB Tae Kwon Do Centre, 194B Cowbridge Road, East Canton, Cardiff CF5 1GW</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr class="competitions">--}}
{{--                                        <td>20th</td>--}}
{{--                                        <td>British Championships</td>--}}
{{--                                        <td>Derby Arena, Royal Way, Pride Park, Derby DE24 8AN</td>--}}
{{--                                    </tr>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                        <div class="calendar-row">--}}
{{--                            <a href="#" class="calendar-nav" data-tab="December">December <img src="{{ url('images/contact/dropdown-arrow.png') }}" style="margin-left:10px;border:0; padding:0;" alt=""></a>--}}
{{--                            <div class="calendar-content">--}}
{{--                                <table>--}}
{{--                                    <tr class="competitions">--}}
{{--                                        <td>15th</td>--}}
{{--                                        <td>Burntwood & Cannock Grading</td>--}}
{{--                                        <td>Cannock Chase High School, Calving Hill, Cannock WS11 1JS  (Start 5.30pm)</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr class="TAGB">--}}
{{--                                        <td>16th</td>--}}
{{--                                        <td>Christmas Disco</td>--}}
{{--                                        <td>St Marys Social Club, Hallcourt Lane, Cannock WS11 0AA  (7pm till late)</td>--}}
{{--                                    </tr>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                        </div>--}}




{{--                    </div>--}}
                    <div class="calendar-list">
                        <div class="calendar-row">
                            <a href="#" class="calendar-nav" data-tab="january">January <img src="{{ url('images/contact/dropdown-arrow.png') }}" style="margin-left:10px;border:0; padding:0;" alt=""></a>
                            <div class="calendar-content">
                                <table>

                                    @foreach($january as $row)
                                        <tr class="{{ $row->type }}">
                                            <td >{{ $row->day }}</td>
                                            <td>{{ $row->event_title }}</td>
                                            <td>{{ $row->event_location }}</td>
                                        </tr>
                                    @endforeach

                                </table>
                            </div>
                        </div>

                        <div class="calendar-row">
                            <a href="#" class="calendar-nav" data-tab="February">February <img src="{{ url('images/contact/dropdown-arrow.png') }}" style="margin-left:10px;border:0; padding:0;" alt=""></a>
                            <div class="calendar-content">
                                <table>
                                    @foreach($february as $row)
                                        <tr class="{{ $row->type }}">
                                            <td >{{ $row->day }}</td>
                                            <td>{{ $row->event_title }}</td>
                                            <td>{{ $row->event_location }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>

                        <div class="calendar-row">
                            <a href="#" class="calendar-nav" data-tab="March">March <img src="{{ url('images/contact/dropdown-arrow.png') }}" style="margin-left:10px;border:0; padding:0;" alt=""></a>
                            <div class="calendar-content">
                                <table>
                                    @foreach($march as $row)
                                        <tr class="{{ $row->type }}">
                                            <td >{{ $row->day }}</td>
                                            <td>{{ $row->event_title }}</td>
                                            <td>{{ $row->event_location }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>

                        <div class="calendar-row">
                            <a href="#" class="calendar-nav" data-tab="April">April <img src="{{ url('images/contact/dropdown-arrow.png') }}" style="margin-left:10px;border:0; padding:0;" alt=""></a>
                            <div class="calendar-content">
                                <table>
                                    @foreach($april as $row)
                                        <tr class="{{ $row->type }}">
                                            <td >{{ $row->day }}</td>
                                            <td>{{ $row->event_title }}</td>
                                            <td>{{ $row->event_location }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>

                        <div class="calendar-row">
                            <a href="#" class="calendar-nav" data-tab="May">May <img src="{{ url('images/contact/dropdown-arrow.png') }}" style="margin-left:10px;border:0; padding:0;" alt=""></a>
                            <div class="calendar-content">
                                <table>
                                    @foreach($may as $row)
                                        <tr class="{{ $row->type }}">
                                            <td >{{ $row->day }}</td>
                                            <td>{{ $row->event_title }}</td>
                                            <td>{{ $row->event_location }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>

                        <div class="calendar-row">
                            <a href="#" class="calendar-nav" data-tab="June">June <img src="{{ url('images/contact/dropdown-arrow.png') }}" style="margin-left:10px;border:0; padding:0;" alt=""></a>
                            <div class="calendar-content">
                                <table>
                                    @foreach($june as $row)
                                        <tr class="{{ $row->type }}">
                                            <td >{{ $row->day }}</td>
                                            <td>{{ $row->event_title }}</td>
                                            <td>{{ $row->event_location }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>


                        <div class="calendar-row">
                            <a href="#" class="calendar-nav" data-tab="July">July <img src="{{ url('images/contact/dropdown-arrow.png') }}" style="margin-left:10px;border:0; padding:0;" alt=""></a>
                            <div class="calendar-content">
                                <table>
                                    @foreach($july as $row)
                                        <tr class="{{ $row->type }}">
                                            <td >{{ $row->day }}</td>
                                            <td>{{ $row->event_title }}</td>
                                            <td>{{ $row->event_location }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>

                        <div class="calendar-row">
                            <a href="#" class="calendar-nav" data-tab="August">August <img src="{{ url('images/contact/dropdown-arrow.png') }}" style="margin-left:10px;border:0; padding:0;" alt=""></a>
                            <div class="calendar-content">
                                <table>
                                    @foreach($august as $row)
                                        <tr class="{{ $row->type }}">
                                            <td >{{ $row->day }}</td>
                                            <td>{{ $row->event_title }}</td>
                                            <td>{{ $row->event_location }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>

                        <div class="calendar-row">
                            <a href="#" class="calendar-nav" data-tab="September">September <img src="{{ url('images/contact/dropdown-arrow.png') }}" style="margin-left:10px;border:0; padding:0;" alt=""></a>
                            <div class="calendar-content">
                                <table>
                                    @foreach($september as $row)
                                        <tr class="{{ $row->type }}">
                                            <td >{{ $row->day }}</td>
                                            <td>{{ $row->event_title }}</td>
                                            <td>{{ $row->event_location }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>

                        <div class="calendar-row">
                            <a href="#" class="calendar-nav" data-tab="October">October <img src="{{ url('images/contact/dropdown-arrow.png') }}" style="margin-left:10px;border:0; padding:0;" alt=""></a>
                            <div class="calendar-content">
                                <table>
                                    @foreach($october as $row)
                                        <tr class="{{ $row->type }}">
                                            <td >{{ $row->day }}</td>
                                            <td>{{ $row->event_title }}</td>
                                            <td>{{ $row->event_location }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>

                        <div class="calendar-row">
                            <a href="#" class="calendar-nav" data-tab="November">November <img src="{{ url('images/contact/dropdown-arrow.png') }}" style="margin-left:10px;border:0; padding:0;" alt=""></a>
                            <div class="calendar-content">
                                <table>
                                    @foreach($november as $row)
                                        <tr class="{{ $row->type }}">
                                            <td >{{ $row->day }}</td>
                                            <td>{{ $row->event_title }}</td>
                                            <td>{{ $row->event_location }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>


                        <div class="calendar-row">
                            <a href="#" class="calendar-nav" data-tab="December">December <img src="{{ url('images/contact/dropdown-arrow.png') }}" style="margin-left:10px;border:0; padding:0;" alt=""></a>
                            <div class="calendar-content">
                                <table>
                                    @foreach($december as $row)
                                        <tr class="{{ $row->type }}">
                                            <td >{{ $row->day }}</td>
                                            <td>{{ $row->event_title }}</td>
                                            <td>{{ $row->event_location }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>




                    </div>

                </div>
            </div>

            <div class="flex-container tiger-row reverse" style="    align-items: center; justify-content: space-evenly;">
                <div>
                    <h2 class="aboutHead" style="text-align: center;">Upcoming Tae Kwon Do Events in 2016</h2>
                    
                    <img src="{{ url('images/members/tagb-world-champioships-2016.jpg') }}" alt="" style="width:80%; max-width:400px; margin:40px auto; display: block;"/>
                </div>
            </div>

            <div class="flex-container tiger-row">
                <div class="left">
                        <h2 class="aboutHead">Grading Sheets for Burntwood & Cannock Tae Kwon Do Members</h2>
                        <div class="grading" style="display: flex; margin-top:30px;">
                            <div>
                                <h3 >Grading Theory Sheets</h3>
                                <ul>
                                    <li>
                                        <a href="{{ url('pdf/Grading_Theory_Sheets/grading-theory-10th-kup-white-belt.pdf') }}" target="_blank">10th Kup White Belt</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pdf/Grading_Theory_Sheets/grading-theory-9th-kup-yellow-stripe.pdf') }}" target="_blank">9th Kup Yellow Stripe</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pdf/Grading_Theory_Sheets/grading-theory-8th-kup-yellow-belt.pdf') }}" target="_blank">8th Kup Yellow Belt</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pdf/Grading_Theory_Sheets/grading-theory-7th-kup-green-stripe.pdf') }}" target="_blank">7th Kup Green Stripe</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pdf/Grading_Theory_Sheets/grading-theory-6th-kup-green-belt.pdf') }}" target="_blank">6th Kup Green Belt</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pdf/Grading_Theory_Sheets/grading-theory-5th-kup-blue-stripe.pdf') }}" target="_blank">5th Kup Blue Stripe</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pdf/Grading_Theory_Sheets/grading-theory-4th-kup-blue-belt.pdf') }}" target="_blank">4th Kup Blue Belt</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pdf/Grading_Theory_Sheets/grading-theory-3rd-kup-red-stripe.pdf') }}" target="_blank">3rd Kup Red Stripe</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pdf/Grading_Theory_Sheets/grading-theory-2nd-kup-red-belt.pdf') }}" target="_blank">2nd Kup Red Belt</a>
                                    </li>
                                </ul>
                            </div>

                            <div>
                                <h3 style="color:red;">Tigers Grading Sheets</h3>
                                <ul>
                                    <li>
                                        <a href="{{ url('pdf/Tigers_Grading_Sheets/taekwondo-tigers-10th-kup-white-belt.pdf') }}" target="_blank">10th Kup White Belt</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pdf/Tigers_Grading_Sheets/taekwondo-tigers-9th-kup-yellow-stripe.pdf') }}" target="_blank">9th Kup Yellow Stripe</a>
                                    </li>
                                    <li>
                                       <a href="{{ url('pdf/Tigers_Grading_Sheets/taekwondo-tigers-8th-kup-yellow-belt.pdf') }}" target="_blank">8th Kup Yellow Belt</a>
                                    </li>
                                    <li>
                                       <a href="{{ url('pdf/Tigers_Grading_Sheets/taekwondo-tigers-7th-kup-green-stripe.pdf') }}" target="_blank">7th Kup Green Stripe</a>
                                    </li>
                                    <li>
                                       <a href="{{ url('pdf/Tigers_Grading_Sheets/taekwondo-tigers-6th-kup-green-belt.pdf') }}" target="_blank">6th Kup Green Belt</a>
                                    </li>
                                    <li>
                                       <a href="{{ url('pdf/Tigers_Grading_Sheets/taekwondo-tigers-5th-kup-blue-stripe.pdf') }}" target="_blank">5th Kup Blue Stripe</a>
                                    </li>
                                    <li>
                                       <a href="{{ url('pdf/Tigers_Grading_Sheets/taekwondo-tigers-4th-kup-blue-belt.pdf') }}" target="_blank">4th Kup Blue Belt</a>
                                    </li>
                                    <li>
                                       <a href="{{ url('pdf/Tigers_Grading_Sheets/taekwondo-tigers-3rd-kup-red-stripe.pdf') }}" target="_blank">3rd Kup Red Stripe</a>
                                    </li>
                                </ul>
                            </div>

                            <div>
                                <h3 style="color:red;">Pattern Sheets</h3>
                                <ul>
                                    <li>
                                       <a href="{{ url('pdf/Pattern_Sheets/pattern-chon-ji.pdf') }}" target="_blank">Chon-Ji Pattern</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pdf/Pattern_Sheets/pattern-dan-gun.pdf') }}" target="_blank">Dan-Gun Pattern</a>
                                    </li>
                                    <li>
                                         <a href="{{ url('pdf/Pattern_Sheets/pattern-do-san.pdf') }}" target="_blank">Do-San Pattern</a>
                                    </li>
                                    <li>
                                         <a href="{{ url('pdf/Pattern_Sheets/pattern-won-hyo.pdf') }}" target="_blank">Won-Hyo Pattern</a>
                                    </li>
                                    <li>
                                         <a href="{{ url('pdf/Pattern_Sheets/pattern-yul-gok.pdf') }}" target="_blank">Yul-Gok Pattern</a>
                                    </li>
                                    <li>
                                         <a href="{{ url('pdf/Pattern_Sheets/pattern-joong-gun.pdf') }}" target="_blank">Joong-Gun Pattern</a>
                                    </li>
                                    <li>
                                         <a href="{{ url('pdf/Pattern_Sheets/pattern-toi-gye.pdf') }}" target="_blank">Toi-Gye Pattern</a>
                                    </li>
                                    <li>
                                         <a href="{{ url('pdf/Pattern_Sheets/pattern-hwa-rang.pdf') }}" target="_blank">Hwa-Rang Pattern</a>
                                    </li>
                                    <li>
                                         <a href="{{ url('pdf/Pattern_Sheets/pattern-choong-moo.pdf') }}" target="_blank">Choong-Moo Pattern</a>
                                    </li>
                                </ul>
                            </div>

                            <div>
                                <h3 style="color:red;">Black Belt Syllabus </h3>
                                <ul>
                                    <li>
                                        <a href="{{ url('pdf/Black_Belt_Syllabus/black-belt-syllabus-sheet-1.pdf') }}" target="_blank">Black Belt Syllabus Sheet 1</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pdf/Black_Belt_Syllabus/black-belt-syllabus-sheet-2.pdf') }}" target="_blank">Black Belt Syllabus Sheet 12</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pdf/Black_Belt_Syllabus/black-belt-syllabus-sheet-3.pdf') }}" target="_blank">Black Belt Syllabus Sheet 3</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pdf/Black_Belt_Syllabus/black-belt-syllabus-sheet-4.pdf') }}" target="_blank">Black Belt Syllabus Sheet 4</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pdf/Black_Belt_Syllabus/black-belt-syllabus-sheet-5.pdf') }}" target="_blank">Black Belt Syllabus Sheet 5</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pdf/Black_Belt_Syllabus/black-belt-syllabus-sheet-6.pdf') }}" target="_blank">Black Belt Syllabus Sheet 6</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pdf/Black_Belt_Syllabus/black-belt-syllabus-sheet-7.pdf') }}" target="_blank">Black Belt Syllabus Sheet 7</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pdf/Black_Belt_Syllabus/black-belt-syllabus-sheet-8.pdf') }}" target="_blank">Black Belt Syllabus Sheet 8</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pdf/Black_Belt_Syllabus/black-belt-syllabus-sheet-9.pdf') }}" target="_blank">Black Belt Syllabus Sheet 9</a>
                                    </li>

                                </ul>
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

        $('.calendar-list .calendar-nav').on('click', function (e) {
            e.preventDefault();
            $('.calendar-nav').removeClass('active');
            $('.calendar-content').slideUp();

            var content = $(this).parent().find('.calendar-content');
            content.slideToggle();
            $(this).addClass('active');
        })
    </script>
@endsection


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Learnalot</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="/learners/public/css/calendar/evo-calendar.css"/>
        <link rel="stylesheet" type="text/css" href="/learners/public/css/calendar/evo-calendar.midnight-blue.css"/>

        <link rel="stylesheet" href="/learners/public/css/style.css">
        <style>

            .add-event{
                text-align:right;
                padding:15px 0px;
            }
            .form-row{
                width:100%;
            }
            .table-row{
                width:100%;
            }
            .add-event-form{
                padding:50px 180px;
                border: 1px solid #E7E8E8 ;
                background-color:#E7E8E8;
            }
            .add-block{
                padding:200px 250px;
            }
            .event-save-block{
                text-align:right;
                padding:5px;
            }
        </style>
    </head>
    <body>

        <div id="colorlib-page">
            <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
            <aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
                <img src="/learners/public/images/logo.jpg" style="border-radius: 50%;"alt="Girl in a jacket" width="150" height="150">
                <nav id="colorlib-main-menu" class="navagation-button" role="navigation">
                    <ul>
                        <li><a href="{{url('/')}}">Profile</a></li>
                        <li class="colorlib-active"><a href="{{url('calendar')}}">Calendar</a></li>
                        <li><a href="{{url('student')}}">Student Management</a></li>
                        <li><a href="{{url('attendance')}}">Student Attendance</a></li>
                        <li><a href="{{url('my-payment')}}">My Payment</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>


            </aside> <!-- END COLORLIB-ASIDE -->
            <div id="colorlib-main">
                <div class="main-navigation"><div class="text-right"><a class="right" href="{{url('logout')}}" data-toggle="tooltip" title="logout"><i class="fa fa-sign-out" style="font-size:30px;color:black;"></i></a></div></div>
                <div style="padding:10px 80px;">
                    <div class="main-calendar">
                        <div class="add-event"><button type="button" id="add-event">Add Event</button></div>
                        <div id="calendar"></div>
                    </div>
                </div>
                <div class="add-block">
                <div class="add-event-form">
                        <form>
                            <table width="100">
                                <tr>
                                    <td><label for="event-name">Event Namerrrrrrrrr</label></td>
                                    <td><input type="text" name="event-name" id="event-name" class="table-row"></td>
                                </tr>
                                <tr>
                                    <td><label for="event-type">Event Type</label></td>
                                    <td><input type="text" name="event-type" id="event-type" class="table-row"></td>
                                </tr>
                                <tr>
                                    <td><label for="event-date">Event Date</label></td>
                                    <td><input type="date" name="event-date" id="event-date" class="table-row"></td>
                                </tr>
                            </table>
                           <div class="event-save-block"> <input type="button" id="event-save" value="Save"/></div>
                        </form>
                    </div>
                    </div>
                <section class="ftco-section">
                    <div class="container">
                    </div>
                </section>

            </div><!-- END COLORLIB-MAIN -->
        </div><!-- END COLORLIB-PAGE -->

        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


        <script src="/learners/public/js/main/jquery.min.js"></script>
        <script src="/learners/public/js/main/jquery-migrate-3.0.1.min.js"></script>
        <script src="/learners/public/js/mainpopper.min.js"></script>
        <script src="/learners/public/js/main/bootstrap.min.js"></script>
       <!-- <script src="js/jquery.easing.1.3.js"></script>-->
       <!--<script src="js/jquery.waypoints.min.js"></script>-->
        <script src="/learners/public/js/main/jquery.stellar.min.js"></script>
        <!--<script src="js/owl.carousel.min.js"></script>-->
        <!--<script src="js/jquery.magnific-popup.min.js"></script>-->
        <script src="/learners/public/js/main/aos.js"></script>
        <!--<script src="js/jquery.animateNumber.min.js"></script>-->
        <!--<script src="js/bootstrap-datepicker.js"></script>-->
        <!--<script src="js/jquery.timepicker.min.js"></script>-->
        <!--<script src="js/scrollax.min.js"></script>-->
        <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>-->
        <!--<script src="js/google-map.js"></script>-->
        <script src="/learners/public/js/main/main.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="/learners/public/js/calendar/evo-calendar.js"></script>
        <script>
            //$("#calendar").evoCalendar();
            $("#calendar").evoCalendar({
                calendarEvents: [
                    {
                        id: 'bHay68s', // Event's ID (required)
                        name: "Class Date", // Event name (required)
                        date: "July/5/2020", // Event date (required)
                        type: "holiday", // Event type (required)
                        everyYear: true // Same event every year (optional)
                    },
                    {
                        id: 'bHay68s', // Event's ID (required)
                        name: "Class Date", // Event name (required)
                        date: "July/6/2020", // Event date (required)
                        type: "holiday", // Event type (required)
                        everyYear: true // Same event every year (optional)
                    },
                    {
                        id: 'bHay68s', // Event's ID (required)
                        name: "Class Date", // Event name (required)
                        date: "July/12/2020", // Event date (required)
                        type: "holiday", // Event type (required)
                        everyYear: true // Same event every year (optional)
                    },
                    {
                        id: 'bHay68s', // Event's ID (required)
                        name: "Class Date", // Event name (required)
                        date: "July/13/2020", // Event date (required)
                        type: "holiday", // Event type (required)
                        everyYear: true // Same event every year (optional)
                    },
                    {
                        id: 'bHay68s', // Event's ID (required)
                        name: "Class Date", // Event name (required)
                        date: "July/19/2020", // Event date (required)
                        type: "holiday", // Event type (required)
                        everyYear: true // Same event every year (optional)
                    },
                    {
                        id: 'bHay68s', // Event's ID (required)
                        name: "Class Date", // Event name (required)
                        date: "July/20/2020", // Event date (required)
                        type: "holiday", // Event type (required)
                        everyYear: true // Same event every year (optional)
                    },
                    {
                        id: 'bHay68s', // Event's ID (required)
                        name: "Class Date", // Event name (required)
                        date: "July/26/2020", // Event date (required)
                        type: "holiday", // Event type (required)
                        everyYear: true // Same event every year (optional)
                    },
                    {
                        id: 'bHay68s', // Event's ID (required)
                        name: "Class Date", // Event name (required)
                        date: "July/27/2020", // Event date (required)
                        type: "holiday", // Event type (required)
                        everyYear: true // Same event every year (optional)
                    },
                    {
                        id: 'bHayss', // Event's ID (required)
                        name: "Assignment", // Event name (required)
                        date: "July/14/2020", // Event date (required)
                        type: "birthday", // Event type (required)
                        everyYear: true, // Same event every year (optional)
                        color: '#000'
                    },
                    {
                        id: 'bHay68u', // Event's ID (required)
                        name: "Assignment", // Event name (required)
                        date: "July/20/2020", // Event date (required)
                        type: "event", // Event type (required)
                        everyYear: true // Same event every year (optional)
                    }
                ]
            });

            $(document).ready(function () {
                $(".add-event-form").hide()
                $("#add-event").click(function () {
                    $(".main-calendar").hide()
                    $(".add-event-form").show()
                });
            });
        </script>

    </body>
</html>
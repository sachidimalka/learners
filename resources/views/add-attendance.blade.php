
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Learnalot</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
   

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/learners/public/css/calendar/evo-calendar.css"/>
        <link rel="stylesheet" type="text/css" href="/learners/public/css/calendar/evo-calendar.midnight-blue.css"/>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="/learners/public/css/style.css">
    <style>
        .group-select{
            width:100%;
            padding:10px;
        }
        .date-select{
          width:100%;
          padding:10px 0px 10px 0px;
        }
        .add-attendance{
            text-align:right;
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
					<li><a href="{{url('calendar')}}">Calendar</a></li>
					<li><a href="{{url('student')}}">Student Management</a></li>
					<li class="colorlib-active"><a href="{{url('attendance')}}">Student Attendance</a></li>
					<li><a href="{{url('my-payment')}}">My Payment</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</nav>

			
		</aside> <!-- END COLORLIB-ASIDE -->
		<div id="colorlib-main">
                    <div class="main-navigation"><div class="text-right"><a class="right" href="{{url('logout')}}" data-toggle="tooltip" title="logout"><i class="fa fa-sign-out" style="font-size:30px;color:black;"></i></a></div></div>
                            <div style="padding:50px;"><div>
                                    <table class="table">
                                    <tr>
                                    <td>Group Name </td>
                                    <td>{{$data['group_name']}}</td>
                                    </tr>
                                    <td>Date</td>
                                    <td>{{$data['class_date']}}</td>
                                    </table>
                            
                                   <table class="table table-striped table-bordered table-hover" id="emp_list">
                <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>Attendance</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data['data'] as $key => $sudent)
                    <tr>
                        <td>{{ $sudent['first_name']}} {{ $sudent['last_name']}}</td>
                        <td>
                            <select name="attendance-mark" id="attendance-mark" class="group-select">
                                        <option value="Mark Attendance" selected="true" disabled="disabled">Mark Attendance</option>
                                        <option value="Presence">Presence</option>
                                        <option value="Absence">Absence</option>
                                    </select>
                        </td>                   
                    </tr>
                @endforeach
                </tbody>
            </table> 
                 <div class="add-attendance">
                                        <input type="submit" name="group-submit" id="group-submit" value="Save">
                                        </div>                 
                        </div></div>
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
  <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script>
   $(function() {
   $('#emp_list').DataTable();
 });
</script>
    
  </body>
</html>
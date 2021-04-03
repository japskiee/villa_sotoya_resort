<!doctype html>
<html lang="en">

  <head>
    <title>Villa Sotoya Resort Fan Room</title>
    <link rel="shortcut icon" type="image/png" href="images/favicon2.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Rubik:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
	
	<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css">
	
	<script>
	</script>
	
    <script>
      function onClick() {
        var showPass = document.getElementById("password");
        if (showPass.type === "password") {
          showPass.type = "text";
        } else {
          showPass.type = "password";
        }
      }

    </script>

    <script>
      function checkPasswordMatch() {
        var password = $("#password").val();
        var password2 = $("#password2").val();
        if (password != password2)
          $("#CheckPasswordMatch").html("Password does not match!");
        else
          $("#CheckPasswordMatch").html("Passwords match.");
      }
      $(document).ready(function() {
        $("#password2").keyup(checkPasswordMatch);
      });

    </script>
    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
    <header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <div class="container">
          <img src="images/logo.png" height="30px" width="30px"> &nbsp;&nbsp;&nbsp;
          <a class="navbar-brand" href="index.html">Villa Sotoya Resort</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="room.html">Room</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="events.html">Events</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="login.html">Login</a>
              </li>
              <li class="nav-item cta">
                <a class="nav-link active" href="booknow.html"><span>Book Your Stay</span></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/room_page.jpg);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-12 text-center">
            <div class="mb-5 element-animate">
              <h1>Reservation</h1>
              <p>Here at sotoya, we make you feel better and cozy comfort.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section">
      <div class="container">
        <div class="row">
          <div align="center">
            <div align="left" class="col-md-9">
              <h2 class="mb-5">Select Room</h2>
              <div class="media d-block room mb-0">

                <figure>
                  <img src="images/room1.jpg" alt="Generic placeholder image" class="img-fluid">
                  <div class="overlap-text">
                    <span>Featured Room
                      <span class="ion-ios-star"></span>
                      <span class="ion-ios-star"></span>
                      <span class="ion-ios-star"></span>
                    </span>
                  </div>
                </figure>

                <div class="media-body">
                  <h3 class="mt-0">Fan Bedroom</h3>
                  <div class="row">
                    <br>
                    <ul>
                      <h4 class="rates">Inclusives</h4>
                      <p align="justify">Our Sotoya Fan Room offers supreme indulgence. Its an apartment-style country house, decorated with earth-toned furniture foe a homey feel. Its balcony comes with a relaxing view of coconut trees.</p>
                      <h4 class="rates">Condition</h4>
                      <p align="justify">Our Sotoya Fan Room offers supreme indulgence. Its an apartment-style country house, decorated with earth-toned furniture foe a homey feel. Its balcony comes with a relaxing view of coconut trees.</p>
                    </ul>
                    <ul></ul>
                    <ul class="room-specs" required>
                      <p class="rates_title"><b>Number of pax</b></p>
                      <input type="radio" id="pax2" name="paxTwo" value="TwoPax" required="required">
                      <label for="pax2">for 2pax - ₱ 800</label><br>
                      <input type="radio" id="pax6" name="paxSix" value="SixPax" required="required">
                      <label for="pax6">for 6pax - ₱ 1500</label><br>
                      <input type="radio" id="pax15" name="paxFifteen" value="FifteenPax" required="required">
                      <label for="pax15">for 15pax - ₱ 3500</label><br>
                    </ul>
                    <ul></ul>
                    <ul></ul>
                    <ul></ul>
                    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
                    <script type="text/javascript">
                      $(function() {
                        $("input[name='Discount']").click(function() {
                          if ($("#w_discount").is(":checked")) {
                            $("#id_number").removeAttr("disabled");
                            $("#id_number").focus();
                            $("#name").removeAttr("disabled");
                            $("#name").focus();
                          } else {
                            $("#id_number").attr("disabled", "disabled");
                            $("#name").attr("disabled", "disabled");
                          }
                        });
                      });

                    </script>
                    <ul class="room-specs" required>
                      <p class="rates_title"><b>Discount</b></p>
                      <input type="radio" id="wo_discount" name="without-discount" value="Without" required="required">
                      <label for="wo_discount">Without</label><br>
                      <input type="radio" id="w_discount" name="with-discount" value="PWD/Senior" required="required">
                      <label for="w_discount">With PWD/Senior</label><br>
                    </ul>
                    <ul></ul>
                    <ul></ul>
                    <ul class="col-md-3 form-group">
                      <label for="id_number">Enter ID number</label>
                      <input type="number" id="id_number" class="form-control" min="0">
                      <label for="name">Name</label>
                      <input type="text" id="name" class="form-control" min="0">
                    </ul>
                  </div>

                  <div class="row">
                    <ul></ul>
                    <ul>
                      <p class="rates_title"><b>Additional Services</b></p>
                      <form method="POST" action="#">
                        <div class="row">
                          <div class="col-md-2">
                            <label for="pillow">Pillow ₱ 10</label>
                            <input type="number" name="pillow" class="form-control" min="0">
                          </div>
                          <div class="col-md-2">
                            <label for="fan">Fan ₱ 20</label>
                            <input type="number" name="fan" class="form-control" min="0">
                          </div>
                          <div class="col-md-2">
                            <label for="soap">Soap ₱ 30</label>
                            <input type="number" name="soap" class="form-control" min="0">
                          </div>
                          <div class="col-md-2">
                            <label for="towel">Towel ₱ 40</label>
                            <input type="number" name="towel" class="form-control" min="0">
                          </div>
                          <div class="col-md-2">
                            <label for="blanket">Blanket ₱ 50</label>
                            <input type="number" name="blanket" class="form-control" min="0">
                          </div>
                        </div>
                        <br />
                        <div>
                          <input type="submit" value="Add" class="add-button">
                        </div>

                        <table border="1" cellpadding="20" style="border-collapse:collapse" align="center">
                          <?php
													if(isset($_POST['pillow']) || isset($_POST['fan']) || isset($_POST['soap']) || isset($_POST['towel']) || isset($_POST['blanket'])){
														$pillow = $_POST['pillow'];
														$fan = $_POST['fan'];
														$soap = $_POST['soap'];
														$towel = $_POST['towel'];
														$blanket = $_POST['blanket'];
													}
												?>
                          <thead>
                            <tr>
                              <th colspan="3">Additional Services</th>
                              <th colspan="2">Price</th>
                              <th colspan="2">Qty</th>
                              <th colspan="3">Amount</th>
                            </tr>
                          </thead>

                          <body>
                            <tr>
                              <td colspan="3">
                                <?php
																if(empty($_POST['pillow'])){
																	echo "";
																}
																else{
																	echo "Pillow";
																	echo "<br/>";
																}
																if(empty($_POST['fan'])){
																	echo "";
																}
																else{
																	echo "Fan";
																	echo "<br/>";
																}
																if(empty($_POST['soap'])){
																	echo "";
																}
																else{
																	echo "Soap";
																	echo "<br/>";
																}
																if(empty($_POST['towel'])){
																	echo "";
																}
																else{
																	echo "Towel";
																	echo "<br/>";
																}
																if(empty($_POST['blanket'])){
																	echo "";
																}
																else{
																	echo "Blanket";
																	echo "<br/>";
																}
															?>
                              </td>

                              <td colspan="3" align="left">
                                <?php
																if(empty($_POST['pillow'])){
																	echo "";
																}
																else{
																	$pillow = 10;
																	echo "₱&nbsp$pillow";
																	echo "<br/>";
																}
																if(empty($_POST['fan'])){
																	echo "";
																}
																else{
																	$fan = 20;
																	echo "₱&nbsp$fan";
																	echo "<br/>";
																}
																if(empty($_POST['soap'])){
																	echo "";
																}
																else{
																	$soap = 30;
																	echo "₱&nbsp$soap";
																	echo "<br/>";
																}
																if(empty($_POST['towel'])){
																	echo "";
																}
																else{
																	$towel = 40;
																	echo "₱&nbsp$towel";
																	echo "<br/>";
																}
																if(empty($_POST['blanket'])){
																	echo "";
																}
																else{
																	$blanket = 50;
																	echo "₱&nbsp$blanket";
																	echo "<br/>";
																}
															?>
                              </td>

                              <td align="left">
                                <?php
																$itemArray = array();
																$orderCtr = 0;
																
																if(empty($_POST['pillow'])){
																	echo "";
																}
																else{
																	$pillow = $_POST['pillow'];
																	echo $itemArray[] = "$pillow";
																	$orderCtr += 1;
																	echo "<br/>";
																}
																if(empty($_POST['fan'])){
																	echo "";
																}
																else{
																	$fan = $_POST['fan'];
																	echo $itemArray[] = "$fan";
																	$orderCtr += 1;
																	echo "<br/>";
																}
																if(empty($_POST['soap'])){
																	echo "";
																}
																else{
																	$soap = $_POST['soap'];
																	echo $itemArray[] = "$soap";
																	$orderCtr += 1;
																	echo "<br/>";
																}
																if(empty($_POST['towel'])){
																	echo "";
																}
																else{
																	$towel = $_POST['towel'];
																	echo $itemArray[] = "$towel";
																	$orderCtr += 1;
																	echo "<br/>";
																}
																if(empty($_POST['blanket'])){
																	echo "";
																}
																else{
																	$blanket = $_POST['blanket'];
																	echo $itemArray[] = "$blanket";
																	$orderCtr += 1;
																	echo "<br/>";
																}
															?>
                              </td>

                              <td colspan="4" align="left">
                                <?php
															if(isset($_POST['pillow']) || isset($_POST['fan']) || isset($_POST['soap']) || isset($_POST['towel']) || isset($_POST['blanket'])){
																$pillow = $_POST['pillow'];
																$fan = $_POST['fan'];
																$soap = $_POST['soap'];
																$towel = $_POST['towel'];
																$blanket = $_POST['blanket'];
															}
															if(empty($_POST['pillow'])){
																echo "";
															}
															else{
																$pillow = $pillow * 10;
																echo "₱&nbsp$pillow";
																echo "<br/>";
															}
															if(empty($_POST['fan'])){
																echo "";
															}
															else{
																$fan = $fan * 20;
																echo "₱&nbsp$fan";
																echo "<br/>";
															}
															if(empty($_POST['soap'])){
																echo "";
															}
															else{
																$soap = $soap * 30;
																echo "₱&nbsp$soap";
																echo "<br/>";
															}
															if(empty($_POST['towel'])){
																echo "";
															}
															else{
																$towel = $towel * 40;
																echo "₱&nbsp$towel";
																echo "<br/>";
															}
															if(empty($_POST['blanket'])){
																echo "";
															}
															else{
																$blanket = $blanket * 50;
																echo "₱&nbsp$blanket";
																echo "<br/>";
															}
														?>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="7">
                                <?php
																echo "<b>Total:</b>";
															?>
                              </td>
                              <td colspan="4">
                                <?php
																if(!empty($_POST['pillow']) || !empty($_POST['fan']) || !empty($_POST['soap']) || !empty($_POST['towel']) || !empty($_POST['blanket'])){
																	
																	$total = ((int)$pillow + (int)$fan + (int)$soap + (int)$towel + (int)$blanket);
																	echo "<b>₱</b>&nbsp<b>$total</b>";
																}
															?>
                              </td>
                            </tr>
                          </body>
                        </table>
                      </form>
                    </ul>
                  </div>
                </div>
              </div>

              <br><br>

              <div class="col-md-12">
                <h2 class="mb-5">Reservation Form</h2>
                <form action="booking-confirmation.php" method="post">
                  <div class="row">
                    <div class="col-sm-6 form-group">
                      <label for="">Arrival Date</label>
                      <div style="position: relative;">
                        <span class="fa fa-calendar icon" style="position: absolute; right: 10px; top: 10px;"></span>
                        <input type="text" class="form-control" name="arrivalDate" id="arrival_date" required />
                      </div>
                    </div>

                    <div class="col-sm-6 form-group">
                      <label for="">Departure Date</label>
                      <div style="position: relative;">
                        <span class="fa fa-calendar icon" style="position: absolute; right: 10px; top: 10px;"></span>
                        <input type="text" class="form-control" name="departureDate" id="departure_date" required />
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="firstname">First Name</label>
                      <input type="text" id="firtname" name="fname" class="form-control" required>
                    </div>

                    <div class="col-md-6 form-group">
                      <label for="lastname">Last Name</label>
                      <input type="text" id="lastname" name="lname" class="form-control" required>
                    </div>

                    <div class="col-md-6 form-group">
                      <label for="age">Age</label>
                      <input type="number" id="age" name="age" class="form-control" min="1" required>
                    </div>

                    <div class="col-md-6 form-group">
                      <label for="contact">Contact</label>
                      <input type="tel" id="contact" name="contact" class="form-control" pattern="[0]{1}[0-9]{3}[0-9]{3}[0-9]{4}" required>
                    </div>
					
					<div class="col-md-6 form-group">
                      <label for="pillow">Pillow</label>
                      <input type="hidden" id="pillow" name="pillow" class="form-control" value="<?php echo $pillow ?? ''; ?>">
                    </div>
                  </div>

                  <div class="row"></div>

                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="email">Email</label>
                      <input type="email" id="email" name="email" class="form-control" required>
                    </div>

                    <div class="col-md-6 form-group"></div>

                    <div class="col-md-6 form-group">
                      <label for="password">Password</label>
                      <input type="password" id="password" class="form-control" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more
											characters" required>
                      <input type="checkbox" onclick="onClick()"> Show Password
                    </div>

                    <div class="col-md-6 form-group"></div>

                    <div class="col-md-6 form-group">
                      <label for="re-enterpassword">Re-enter Password</label>
                      <input type="password" id="re-enterpassword" class="form-control" name="re-enterpass" required>
                      <script type="text/javascript">
                        var password = document.getElementById("password"),
                          re - enterpassword = document.getElementById("re-enterpassword");

                        function validatePassword() {
                          if (password.value != re - enterpassword.value) {
                            re - enterpassword.setCustomValidity("Passwords Don't Match");
                          } else {
                            re - enterpassword.setCustomValidity('');
                          }
                        }

                        password.onchange = validatePassword;
                        re - enterpassword.onkeyup = validatePassword;

                      </script>
                    </div>
                  </div>

                  <br><br>

                  <div class="row">
                    <form method="POST">
                      <div class="col-md-6 form-group">
                        <a href="booknow.html" class="btn btn-primary">Back</a>&nbsp;&nbsp;&nbsp;
                        <input type="submit" value="Reserve Now" class="btn btn-primary reserve" />
                      </div>
                    </form>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <!-- END section -->

    <footer class="site-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            <h3>Phone Support</h3>
            <p>Contact us now.</p>
            <p>0917-8937-354</p>
            <p>(049) 5393639</p>
            <p>sotoyaneri2002@yahoo.com</p>
          </div>
          <div class="col-md-4">
            <h3>Connect With Us</h3>
            <p>We are socialized. Follow us</p>
            <p>
              <a href="https://www.facebook.com/Villa-Sotoya-Resort-183114358382537" class="pl-0 p-3" target="newTab"><span class="fa fa-facebook"></span></a>
              <a href="https://twitter.com/nerisa888" class="p-3" target="newTab"> <span class="fa fa-twitter"></span></a>
              <a href="https://mail.google.com/mail/u/0/#inbox" class="p-3" target="newTab"> <span class="ion-social-google"></span></a>
              <a href="https://www.instagram.com/nerisacapistrano/" class="p-3" target="newTab"> <span class="fa fa-instagram"></span></a>
            </p>
          </div>
          <div class="col-md-4">
            <h3>Address</h3>
            <p>Brgy. Banago, Nagcarian, Laguna 4002 Nagcarian, Philippines</p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">RESERVATION POLICY | PRIVACY POLICY | RESORT POLICY<br>&copy; Copyright &copy;
            <script>
              document.write(new Date().getFullYear());

            </script> - Villa Sotoya Resort
          </div>
        </div>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214" /></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>


    <script src="js/main.js"></script>

</html>
</body>

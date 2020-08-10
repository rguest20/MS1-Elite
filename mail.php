<?php
  $name = $_POST["yourname"];
  $email = $_POST["email"];
  $whichpage = $_POST["whichpage"];
  $whatwrong = $_POST["whatwedid"];
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "info@r-guest-developer.world";
    $to = $email . ", info@r-guest-developer.world";
    $subject = "HINTWIZ request for update recieved";
    $message = "Dear " . $name . ", \r\n Thank you for your message. We have received the following information from you and will review your update request soon.\r\n Page request for: " . $whichpage . "\r\n Request as follows:" . $whatwrong . "\r\n \r\n \r\n HINTWIZ";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
?>

<!DOCTYPE html>
<html lang="en">
<!--header section-->

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-173045056-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-173045056-1');
  </script>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=0.7" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
  <link href="jqueryui/jquery-ui.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
  <title>Thank you for your feedback</title>
</head>

<body>
  <!--background image-->
  <div id="backdrop" class="row">
    <img src="./assets/pics/shipinflight.png" alt="Ship in flight" class="col-12" id="backdrop-pic">
  </div>
  <!--navbar-->
  <div class="row">
    <nav class="navbar navbar-transparent navbar-expand-xl navbar-light col-12">
      <a class="navbar-brand" href="index.html"><img src="./assets/pics/elitelogo.png" id="logo" alt="Hintwiz logo"></a><span id="subtitle"> ELITE: DANGEROUS</span>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!--navbar links-->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="eliteindex.html">Review </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Walkthrough
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="shipinside.html">Inside your ship</a>
              <a class="dropdown-item" href="combat.html">Combat</a>
              <a class="dropdown-item" href="mining.html">Mining</a>
              <a class="dropdown-item" href="ships.html">Early Ships</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="submit.html">Submit a Correction</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <!--spacer to ensure that content appears below navbar-->
  <div class="spacer">
  </div>
  <!--thank you message-->
  <div class="row" id="thanks">
    <div class="col-12">
      <h1>Thank you</h1>
      <p>We have recieved your request and will review it soon. A copy of the request has been sent to the email you provided.</p>
      <p>The page will redirect to the review page in <span id="timer">10 seconds</span>.  If this redirect does not work, please click <a href="eliteindex.html">here</a></p>
    </div>
  </div>
  <!--footer section-->
  <footer class="row justify-content-center">
    <div class="col-6" id="madeby">
      <p>Please follow HINTWIZ on our social media accounts: <a href="https://twitter.com/" target="_blank" id="twittericon"><i class="fab fa-twitter-square fa-lg"></i></a><a href="https://www.facebook.com/" target="_blank" id="facebookicon"><i
            class="fab fa-facebook-square fa-lg"></i></a></p>
    </div>
    <!-- Button trigger modal -->
    <div class="col-6">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#legalModal" id="legalinfo">
        Legal Information
      </button>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="legalModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">
              Legal Bit
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h5>Disclaimer</h5>
            <p>This site was created for educational purposes and I claim no ownership over any of the images used within. These images are used in accordance with the Fair Use laws in the US (used for review/critique) and Fair Dealing laws in the
              UK
              (used for educational purposes). In the event of any copyright claim, please email <a href="mailto:copyright@r-guest-developer.world?subject=Copyright Take Down Request">HERE</a>
            <h5>Credit for images to:</h5>
            <p>Elite:Dangerous - Frontier Developments PLC</p>
            <p>https://www.retrogamer.net/retro_games80/</p>
            <h5>Credit for extra code to:</h5>
            <p>Stack Overflow User: Knightkiddo</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">
              Close
            </button>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script>
    var timeleft = 10;
    var downloadTimer = setInterval(function() {
      if (timeleft <= 0) {
        clearInterval(downloadTimer);
        document.getElementById("timer").innerHTML = "Finished";
        window.location.replace("eliteindex.html");
      } else {
        document.getElementById("timer").innerHTML = timeleft + " seconds";
      }
      timeleft -= 1;
    }, 1000);
  </script>
</body>
</html>

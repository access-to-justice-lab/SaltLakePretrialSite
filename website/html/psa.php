
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico"> -->

    <title>PSA and Questions</title>

    <!-- Bootstrap core CSS -->
    <link href="resources/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="resources/form-validation.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="resources/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  </head>

  <body class="bg-light">
  <script>
    function createMonths(){
        for(x=0;x<=12;x++){
            document.write("<option value='" + x + "'>" + x + "</option>");
        }
    }
    function createYears(){
        for(x=0;x<=99;x++){
            document.write("<option value='" + x + "'>" + x + "</option>");
        }
    }
    </script>
    	<script>
  //FTA Scale Slider
  $( function() {
		$( "#slider-ageatarrest" ).slider({
			range: "max",
			min: 10,
			max: 100,
			value: 1,
			slide: function( event, ui ) {
				$( "#ageatarrest" ).val( ui.value );
			}
		});
		$( "#ageatarrest" ).val( $( "#slider-ageatarrest" ).slider( "value" ) );
  } );

	</script>
    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="resources/a2jlogo2.gif" alt="">
        <h2>PSA & Answers</h2>
        <p class="lead">Enter the PSA scores and the answers to the pretrial questions.</p>
      </div>

      <div class="row">
        <div class="col-md-6">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">PSA</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div class = 'row'>
              <div class = 'col-md-6'>
                <h6 class="my-0">Age At Arrest</h6>
              </div>
              <div class='col-md-6'>
                <p>
                    <input type="text" id="ageatarrest" style="border:0; color:#f6931f; font-weight:bold;">
                </p>
                <div id="slider-ageatarrest"></div>
            </div>
            </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Current Violent Offense</h6>
              </div>
              <input type = 'radio' name='currentviolentoffense' value='yes' id='cvoyes'><label for='cvoyes'>Yes</label>
              <input type = 'radio' name='currentviolentoffense' value='no' id='cvono'><label for='cvono'>No</label>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Pending Charge at the Time of the Offense</h6>
              </div>
              <input type = 'radio' name='pendngcharge' value='yes' id='pendngchargeyes'><label for='pendngchargeyes'>Yes</label>
              <input type = 'radio' name='pendngcharge' value='no' id='pendngchargeno'><label for='pendngchargeno'>No</label>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Prior Misdemeanor Conviction</h6>
              </div>
              <input type = 'radio' name='priormisdmeanor' value='yes' id='priormisdmeanoryes'><label for='priormisdmeanoryes'>Yes</label>
              <input type = 'radio' name='priormisdmeanor' value='no' id='priormisdmeanorno'><label for='priormisdmeanorno'>No</label>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Prior Felony Conviction</h6>
              </div>
              <input type = 'radio' name='priorfelony' value='yes' id='priorfelonyyes'><label for='priorfelonyyes'>Yes</label>
              <input type = 'radio' name='priorfelony' value='no' id='priorfelonyno'><label for='priorfelonyno'>No</label>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Prior Violent Offense</h6>
              </div>
              <input type = 'radio' name='priorviolentoffense' value='yes' id='priorviolentoffenseyes'><label for='priorviolentoffenseyes'>Yes</label>
              <input type = 'radio' name='priorviolentoffense' value='no' id='priorviolentoffenseno'><label for='priorviolentoffenseno'>No</label>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Prior FTA in Past 2 Years</h6>
              </div>
              <input type = 'radio' name='ftalessthan2yearsold' value='yes' id='ftalessthan2yearsoldyes'><label for='ftalessthan2yearsoldyes'>Yes</label>
              <input type = 'radio' name='ftalessthan2yearsold' value='no' id='ftalessthan2yearsoldno'><label for='ftalessthan2yearsoldno'>No</label>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Prior FTA Older than 2 Years</h6>
              </div>
              <input type = 'radio' name='fta2yearsold' value='yes' id='fta2yearsoldyes'><label for='fta2yearsoldyes'>Yes</label>
              <input type = 'radio' name='fta2yearsold' value='no' id='fta2yearsoldno'><label for='fta2yearsoldno'>No</label>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Prior Sentence to Incarceration</h6>
              </div>
              <input type = 'radio' name='priorsentence' value='yes' id='priorsentenceyes'><label for='priorsentenceyes'>Yes</label>
              <input type = 'radio' name='priorsentence' value='no' id='priorsentenceno'><label for='priorsentenceno'>No</label>
            </li>
          </ul>
        </div>
        <div class="col-md-6">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Questions & Answers</span>
          </h4>
          <ul class="list-group mb-3">
          <!-- Question 1 -->
            <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div class='row'>
                <div class='col-md-6'>
                    <h6 class="my-0">How long have you lived in Salt Lake City or Salt Lake County?</h6>
                </div>
              <div class='col-md-3'>
                Years
                <select name="years">
                <script>
                    createYears();
                </script>
                </select>
              </div>
                <div class='col-md-3'>
                    Months
                    <select name="months">
                    <script>
                        createMonths();
                    </script>
                    </select>
                </div>
            </div>
            </li>
            <!-- Question 2 -->
            <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div class='row'>
            <div class='col-md-6'>
                <h6>Do you have any friends, family, or other people close to you who also live in Salt Lake City or Salt Lake County?</h6>
              </div>
              <div class='col-md-6'>
                <input type = 'radio' name='family' value='yes' id='familyyes'><label for='familyyes'>Yes</label>
                <br>
                <input type = 'radio' name='family' value='no' id='familyno'><label for='familyno'>No</label>
              </div>
            </div>
            </li>
            <!-- Question 3 -->
            <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div class='row'>
                <div class='col-md-6'>
                <h6 class="my-0">How long have you known those individuals?</h6>
              </div>
              <div class='col-md-3'>
              Years
              <select name="years">
              <script>
                createYears();
              </script>
            </select>
            </div>
              <div class='col-md-3'>
              Months
            <select name="months">
            <script>
                createMonths();
              </script>
            </select>
            </div>
            </div>
            </li>
            <!-- Question 4 -->
            <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div class='row'>
                <div class='col-md-6'>
                <h6 class="my-0">Are you currently employed?</h6>
              </div>
              <div class='col-md-6'>
              <input type = 'radio' name='currentlyemployed' value='yes' id='currentlyemployedyes'><label for ='currentlyemployedyes'>Yes</label>
              <br>
              <input type = 'radio' name='currentlyemployed' value='no' id='currentlyemployedno'><label for='currentlyemployedno'>No</label>
              </div>
              </div>
            </li>
            <!-- Question 5 -->
            <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div class='row'>
                <div class='col-md-6'>
                <h6 class="my-0">How long have you been employed?</h6>
                </div>
              <div class='col-md-3'>
              <select name="years">
              <script>
                createYears();
              </script>
                </select>
                </div>
              <div class='col-md-3'>
            <select name="months">
            <script>
                createMonths();
              </script>
            </select>
            </div>
            </div>
            </li>
            <!-- Question 6 -->
            <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div class='row'>
                <div class='col-md-6'>
                <h6 class="my-0">Are you working full-time, part-time, or in some other capacity?</h6>
              </div>
              <div class='col-md-6'>
              <input type = 'radio' name='working' value='fulltime' id='workingft'><label for='workingft'>Full-Time</label>
              <br>
              <input type = 'radio' name='working' value='parttime' id='workingpt'><label for='workingpt'>Part-Time</label>
              <br>
              <input type = 'radio' name='working' value='othercapcity' id='workingoc'><label for='workingoc'>Other Capacity</label>
                </div>
                </div>
            </li>
             </ul>
        </div>
    </div>
    <div class="container">
    
      <div class='col text-center'>
      <h3 class = 'text-success' id='submittext' style="display:none">Information Submitted</h3>

      <button type="button" class="btn-lg btn-success" id='submitbutton'>Submit</button>
      </div>
      </div>
    </div>
    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">Call A2J Lab if you have questions.</p>
        <ul class="list-inline">
        </ul>
      </footer>
      <script>
  //AJAX Submit

  $( "#submitbutton" ).click(function() {
    $("#submittext").fadeIn("slow");
    $("#submitbutton").fadeOut("slow");
    console.log("Clicked");
    setTimeout(function(){ location.reload()}, 3000);
  });

      </script>
  </body>
</html>

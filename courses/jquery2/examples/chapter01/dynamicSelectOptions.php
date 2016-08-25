<?php
/**
 * @file   dynamicSelectOptions.php
 *
 * @brief  Change dropdown list dynamically
 * @author Fred R. McClurg
 * @since  May 26, 2012
 */

   include_once( '../../../../common/php/geshiFunct.inc.php' );
   include_once( '../../../../common/geshi/geshi.php' );
   
   $title = "Location Replace via dropdown onChange Event";
   $description = "Location redirection via dropdown onChange event";
?>
<!DOCTYPE html>
<html>
<head>
   <title><?= $title ?></title>
</head>
   
<?php
	$headCode = <<< ENDCODE
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script> -->
<!-- <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery/jquery-1.7.2.min.js"></script> -->
<!-- <script type="text/javascript" src="jquery/jquery-1.7.2.min.js"></script> -->

<script type="text/javascript">
var vehicles = {"Cars": {
            "Ford" : [ "Fiesta", "Focus", "Fusion"], 
            "Chevy": [ "Malibu", "Corvette", "Tahoe"],
            },
 "Motorcycles": {
      "Honda": ["model 1", "model 2", "model 3"],
      "Yamaha": ["model 1", "model 2", "model 3", "model 4"]
    }
};


$(document).ready(function() {
  var vehiclesList = $("#qmt-vehicle");
  var manufList = $("#qmt-manufacturer");
  var modelList = $("#qmt-model");
  var selectedType = null
  var selectedManuf = null;
  $.each(vehicles, function(key, vehicle) {
    vehiclesList.append($("</option>", {value:key,text:key}));
  });

  vehiclesList.bind("change", function() {
    selectedType = $(this).val();
    if (selectedType && vehicles[selectedType]) {
      var manufacturers = vehicles[selectedType];
       $("#qmt-manufacturer option").not(":first").remove();
      $("#qmt-model option").not(":first").remove();
      $.each(manufacturers, function(key, manufacturer) {
         manufList.append($("</option>", { value: key, text: key}));
      });
    }
  });

 manufList.bind("change", function() {
    var selectedManuf = $(this).val();
     $("#qmt-model option").not(":first").remove();
    if (selectedManuf  && vehicles[selectedType] && vehicles[selectedType][selectedManuf]) {
      var models = vehicles[selectedType][selectedManuf];      
      $.each(models, function(key, model) {
         modelList.append($("</option>", { value: model, text: model}));
      });
    }
  });

 });
</script>
</head>
ENDCODE;
	
	printf( "%s", $headCode );
?>
	
<body>

<h1 style="text-align: center;">
   <?= $title ?>
</h1>

<h2>
   Purpose
</h2>

<p>
   <?= $description ?>
</p>

<?php
	$bodyCode = <<< ENDCODE
	<form>
		<label for="qmt-vehicle">Vehicle:</label>
		<select id="qmt-vehicle" name="vehicle">
		    <option></option>
		</select>
		
		<br>
		
		<label for="qmt-manufacturer">Manufacturer:</label>
		<select id="qmt-manufacturer" name="manufacturer">
		  <option></option>
		</select>
		
		<br>
		
		<label for="qmt-model">Model:</label>
		<select id="qmt-model" name="model">
		  <option></option>
	</select>
</form>
ENDCODE;

	printf( "%s", $bodyCode );
	
	printf( "<br><br><br><hr>" );
	printf( "<h2>Code Snippet</h2>" );
	PrintCodeSyntaxSnippet( $headCode, "javascript" );

	printf( "<br><br>" );
	PrintCodeSyntaxSnippet( $bodyCode, "html" );
?>

</body>
</html>
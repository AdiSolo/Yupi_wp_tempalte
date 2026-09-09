<?php
/*
Template Name: Weather-Template
*/



$config = array(
    "uri"             => $uri,              // yr.no http URI for forecast.xml / varsel.xml
    "tmp"             => null,              // cache dir; null => use system temp dir (usually "/tmp")
    "timeout"         => 1800,              // cache time to live (in seconds); 1800 => 30 minutes
    "timezone"        => "Europe/Chisinau",
    "img"             => "http://meteo.yupi.md/symb",
    "date_format"     => "l.m.Y",
); 

$i=0;
$uri = "http://www.yr.no/place/Moldova/Chisinau/Chisinau/forecast.xml";
        $sx =  new SimpleXMLElement($uri, LIBXML_NOERROR, true);

    foreach ($sx->forecast->tabular->time as $forecast) {
		   setlocale(LC_TIME, array('ro.utf-8', 'ro_RO.UTF-8', 'ro_RO.utf-8', 'ro', 'ro_RO', 'ro_RO.ISO8859-2'));
		  $from_unix = strtotime( (string) $forecast["from"]); 
		  $from_hour = date("H", $from_unix);
		

		 $search = array("17", "23" ,"05","20","11","14","02","08","15","09","21","03","06","12","18","00");
          $replace = array("Deseară", "Noaptea", "Dimineața","Seara","Ziua","Ziua","Noaptea","Dimineața","Ziua","Dimineata","Seara","Noaptea","Dimineata","Ziua","Seara","Noaptea");  
		  $time = str_replace($search, $replace, $from_hour); 
		 $symbol = $forecast->symbol["number"];
        $file = str_pad($symbol, 2, "0", STR_PAD_LEFT);
		 if ((int) $symbol <= 8 && $symbol != 4) {
            if($from_hour >= 6 && $from_hour <= 17 ){$file .="d";} else {$file .="n";}
        }
        $file .= ".png";
		  
		  if($i<4){ ?>
		  <li><img src="<?php echo $config["img"] .'/'. $file .'" alt="'. $forecast->symbol["name"] .'"width="30" height="30" />';?><span class=" <?php echo ($forecast->temperature["value"] <= 0) ? "minus" : "pluss"; ?>"><?php echo $forecast->temperature["value"]; ?>°<p><?php echo $time ?> </p></span></li>
			<?php 
			
		$wpdb->update( 
	'wp_weather', 
	array( 
		'period' => $time,	
		'temperature' => $forecast->temperature["value"],
		'img' => $file
	), 
	array( 'ID' => $i+1 )
	
);

	$i++;
		 
	};}; ?>


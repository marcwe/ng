<?php

echo "<center>start</center>";
echo date (' h:i:s A'),"<BR>";
$fname="phppages.txt";
$fname = "http://mobi-1.pcom.edu/content/fund-pcom";
echo $fname ,"<BR>";
$foutput = "phpdata_a.txt";
$fhoutput = fopen($foutput, 'w') or die('cant open file output');
fwrite($fhoutput, date (' h:i:s A') . "\n" );


$list = fopen("phppages.html", "r") or exit("Unable to open file!");
//$list = fopen("http://127.0.0.1/phppages.html", "r") or exit("Unable to open file!");
//$list = fopen($fname, "r") or exit("Unable to open file!");


$flogout = "logphp_a.txt";
$fhlogout = fopen($flogout, 'w') or die('cant open file out');




while (!feof($list)){

 

	$line = fgets($list);

	echo $line ,"<br>";
	$linea = rtrim($line);
	echo $linea ,"<br>";
	fwrite($fhoutput, $linea . "??");



	$listinner = fopen($linea, "r") or exit("Unable to open file!");

	while (!feof($listinner)){

 

		$lineinner = fgets($listinner);
		

		if (preg_match("/content=\"node\/\d+\"/", $lineinner, $matches)){
			echo $matches[0], "matches 0<BR>";
			$pagenme = $matches[0];
			$pagenme = preg_replace("/content=\"/", "", $pagenme);
			$pagenme = preg_replace("/\"/", "", $pagenme);
			fwrite($fhoutput, $pagenme . "??" . "\n");
			echo $matches[1], "matches 1<BR>";
			echo $matches, "<BR>";
			print_r($matches, "<BR>");
			

		}

		elseif (preg_match("/node-.+/", $lineinner, $matches)){
			echo $matches[0], "matches 0<BR>";
			$pagenme = $matches[0];
			$pagenme = preg_replace("/content=\"/", "", $pagenme);
			$pagenme = preg_replace("/\"/", "", $pagenme);
			fwrite($fhoutput, $pagenme . "??" . "\n");
			echo $matches[1], "matches 1<BR>";
			echo $matches, "<BR>";
			print_r($matches, "<BR>");
			

		}

/*		if (preg_match("/div class=\"field field-name-body field-type-text-with-summary field-label-hidden\"/", $lineinner, $matches)){
			echo $matches[0], "matches 0 <BR>";
			fwrite($fhoutput, $matches[0] . "??");
			echo $matches[1], "matches 1 <BR>";
			echo $matches, "<BR>";
			print_r($matches, "<BR>");
			
		}

		if (preg_match("/<a href=\"http:\/\/main-1.pcom.edu\/node\/\d+\" target=\"_blank\">.<\/a>/", $lineinner, $matches)){
			echo $matches[0], "matches 0 <BR>";
			fwrite($fhoutput, $matches[0] . "??" . "\n");
			echo $matches[1], "matches 1 <BR>";
			echo $matches, "<BR>";
			print_r($matches, "<BR>");

			//<a href="http://main-1.pcom.edu/node/414" target="_blank">.</a>
			
		}
*/
		fwrite($fhlogout, $lineinner);


	//	echo $lineinner ,"<br>";
	//	echo $pagenme, "=pagenme in loop <br>";

	}
	// echo $pagenme, "=pagenme before close<br>";
			
	

		echo $pagenme, "=pagenme after close<br>";


	//	$pagenme = preg_replace("/content=\"/", "", $pagenme);
	//	$pagenme = preg_replace("/\"/", "", $pagenme);
		echo $pagenme, "=pagenme after replace<br>";


/*
 $basenme = "http://mobi-1.pcom.edu/";
// echo $basenme;
$srcnme =  $basenme . $pagenme;
// echo $srcnme;





		$search_imgsrc = 'src="/sites/default';
// update below		$rep_imgsrc = 'src="http://10.9.11.4/sites/default';
		$rep_imgsrc = 'src="http://main-1.pcom.edu/sites/default';
// test			echo $search_imgsrc."<br />";
// test			echo $rep_imgsrc."<br />";
		$wrstart = 0;
		$wrend = 100;
		
$file = fopen($srcnme, "r") or exit("Unable to open file!");
//Output a line of the file until the end is reached
while(!feof($file))
  {
		$lne = fgets($file);
// test		echo $lne."<br />";
		
		if (preg_match("/<body/", $lne, $matches))
			{
				$wrstart = 100;
				$lne = fgets($file);
			}
	
// test		echo $wrstart. "wrstart <br />";
	
		if (preg_match("/<\/body/", $lne, $matches))
			{
				$wrend = 0;
			}
			
// test		echo $wrend. "wrend <br />";
	
		if ($wrstart == 100  && $wrend == 100) 
			{
// test				echo $lne. "echo <br />";

// test					if (preg_match($search_imgsrc, $lne)) {echo "match <br />";}
// test					if (preg_match("/src=\"\/sites\/default/", $lne)) {echo "src match <br />";}
				$lne = preg_replace("/src=\"\/sites\/default/", "src=\"http://main-1.pcom.edu/sites/default", $lne);
				echo $lne;
			}
		
  //echo fgets($file). "<br />";
	//echo stripos(fgets($file),"<body");
// test	echo stripos($lne,"<body");
// test	echo "stripos body<br />";
  
// test  echo stripos($lne,"</body");
// test	echo "stripos end body<br />";
  
  
  }
fclose($file);
echo '<br />';echo '<br />';  */
 
	







		//close($listinner);
}

//array $list($filename);
 //echo array;
close($fhoutput);
close($fhlogout);
close($list);
?>

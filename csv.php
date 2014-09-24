<? php
$row=1;
//ini_set('auto_detect_line_endings',TREU);
if (($handle = fopen("test.csv", "r")) !==FALSE){
	while(($data =fgetcsv($hanld, 1000, ","
	  print_r($data);
	}
	fclose($handle);
}
?>


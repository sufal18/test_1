<?php
#side star
#	for ($i = 1 ; $i <=10 ; $i++){

#		echo str_repeat("*", $i).PHP_EOL;
#	}


#Rectangle Star
#for ($i=10,$j=1 ; $i>=0 ; $i--,$j+=2){
#echo str_repeat(" ", $i);
#echo str_repeat("*", $j).PHP_EOL;
#}

#Single variable Rectangle draw
#for ($i=10 ; $i>=0 ; $i--) { 
#	echo str_repeat(" ",$i);
#	echo str_repeat("*", (((10-$i)*2)-1)).PHP_EOL;
#}

#string str_repeat function 
#function repeat($input , $number){
#	for ($i=0; $i<=$number; $i++) { 
#		echo "$input".PHP_EOL;
#	}
#}

#repeat("5",5);



#Take input from user & make a triangle
// $put = $argv[1];		#this will take 2nd input if i run this program... 
// if (isset($put)) {
// 	for ($i=10 ; $i>=0 ; $i--) { 
// 	echo str_repeat(" ",$i);
// 	echo str_repeat("$put", (((10-$i)*2)-1)).PHP_EOL;
// }
// }
// else {
// 	for ($i=10 ; $i>=0 ; $i--) { 
// 	echo str_repeat(" ",$i);
// 	echo str_repeat("*", (((10-$i)*2)-1)).PHP_EOL;
// }
// }

#To run this command: filename.php [any charecter(exam: 7,&)]

#Calculator Program
// $x = $argv[1];
// $y = $argv[2];
// $function = $argv[3];

// if ($argc == '4') {

// 	if ($function == '1') {
// 		echo "Adding these two number".PHP_EOL;
// 		$sum = $x + $y;
// 		echo $sum.PHP_EOL;
// 	}

// 	elseif ($function == '2') {
// 		echo "Substracting these two number!".PHP_EOL;
// 		$Substract = $x - $y;
// 		echo $Substract.PHP_EOL;
// 	}

// 	elseif ($function == '3') {
// 		echo "Multiplying these two numbers!".PHP_EOL;
// 		$multiply = $x * $y;
// 		echo $multiply.PHP_EOL;
// 	}

// 	elseif ($function == '4') {
// 		echo "Dividing these two number!".PHP_EOL;
// 		$divide = $x / $y;
// 		echo $divide.PHP_EOL;
// 	}

// 	else {
// 		echo "Your input is Wrong.".PHP_EOL;
// 	}
// }

// else {
// 	echo("You have to put 4 number!").PHP_EOL;
// }
#-----------------------------
// $i= $argv[1];

// if($i<(int)50){
// $j=((int)$i)*3;
// echo "Your Bill is "."$j".PHP_EOL;
// }
// else{
// $j=((int)$i)*5;
// echo "Your Bill is "."$j".PHP_EOL;
// }



// $i= $argv[1];

// if($i<50){
// $j=$i*3;
// echo "Your Bill is ".$j.PHP_EOL;
// }
// else{
// $j=$i*5;
// echo "Your Bill is ".$j.PHP_EOL;
// }

#CSV create and data import
// $headers = array('Name','Age','Adress','Qualification','Father');

// $data = array(
// 	array(
// 		'Name' => 'Sufal Addya',
// 		'Age' => '24',
// 		'Adress' => 'Serampore',
// 		'Qualification' => 'BE',
// 		'Father' => 'Sudam Addya',
// 			),
// 	array(
// 		'Name' => 'Debodaya Bag',
// 		'Age' => '26',
// 		'Adress' => 'Sheoraphully',
// 		'Qualification' => 'Technition',
// 		'Father' => 'Uday Bag',
// 	),
//  );

// $fh = fopen("new.csv", "w");	# w+ for not to overwrite

// fputcsv($fh,$headers);

// foreach ($data as $fields) {
// 	fputcsv($fh, $fields);
// }

// fclose($fh);

#Descriptor printing using fgetcsv
// $i = fopen("new.csv", "r");


// while(($j = fgetcsv($i)) !== FALSE) {

// print_r($j);
// }

// fclose($i);


#Database Connection

// $host = 'localhost';
// $user = 'root';
// $password = 'Agrud@12345';

// try {
//  		$conn = new PDO("mysql:host=$host", $user, $password);
//  		echo "Connected at $host Successfully.".PHP_EOL;
//  	}

//  catch (PDOException $pe) {
//  	die("Could not connect to the database $dbname: ".$pe -> getMassege());
//  }

// $s = file_get_contents('https://en.wikipedia.org/wiki/Bantu_languages');
// print_r($s);

// $v = explode('\n',$s);
// print_r($v);

// $c = strip_tags($s,'<br>');
// print_r($c);


// /* connect to gmail*/
// $hostname = '{imap.gmail.com:993/imap/ssl}INBOX';
// $username = 'sufal.addya@agrud.com';
// $password = 'Sufal@18295';
// /* try to connect */
// $inbox = imap_open($hostname,$username,$password) or die('Cannot connect to Gmail: ' . imap_last_error());
// print_r(imap_errors());
// /*grab emails*/
// $emails = imap_search($inbox,'ALL');
// /* if emails are returned, cycle through each... */
// if($emails) {        
//        /* begin output var */
//         $output = '';        
//         /* put the newest emails on top */
//         rsort($emails);        
//         /* for every email... */
//         foreach($emails as $email_number) {                
//                /* get information specific to this email */
//                 $overview = imap_fetch_overview($inbox,$email_number,0);
//                 $message = imap_fetchbody($inbox,$email_number,2);                
//                 /* output the email header information */
//                 $output.= '<div class="toggler '.($overview[0]->seen ? 'read' : 'unread').'">';
//                 $output.= '<span class="subject">'.$overview[0]->subject.'</span> ';
//                 $output.= '<span class="from">'.$overview[0]->from.'</span>';
//                 $output.= '<span class="date">on '.$overview[0]->date.'</span>';
//                 $output.= '</div>';
                
//                /* output the email body */
//                 $output.= '<div class="body">'.$message.'</div>';
//         }        
//         echo $output;
// }
// $fh = fopen("scraped.txt", "w");
// fwrite($fh,$output);
// fclose($fh);

// imap_close($inbox);


$g = fopen("scraped.txt", "r");
$new_scraped = fopen("new.txt", "w");
$without_tags = strip_tags("$g");
fwrite($new_scraped, $without_tags);
fclose($g);
fclose($new_scraped);

// echo "$without_tags";

























?>

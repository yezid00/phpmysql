<?php

include 'db.php';


CONST PIE = 3.142 ;

$radius = 7;

$area = PIE * $radius * $radius;

// echo $area;






$number1 = 20;
$number2 = 30;

$name = "Esther Idowu";
// $age = "35";
// $nationality = "Nigerian";

// echo "My name is ".$name.", I am ".$age." years old. I am a ".$nationality.".";

// $sum = $number2 + $number1;
// $product = $number1 * $number2;
// $difference = $number1 - $number2;
// $quotient = $number1 / $number2;

// echo "The sum is ".$sum.", The product is ".$product.", the difference is ".$difference.", The quotient is ".$quotient;

// //condtional statements
// 2 == 2.0

// 2 === 2.0

// abubakar == Abubakar

// abubakar === Abubakar

// $i++ = $i + 1

// $i-- = $i - 1
 
// && = AND 

// || = OR

// ++ = Increment

// -- = decrement

// ==  comparision operator 

// ===   


// true && true = true
// true && false = false
// false && true = false
// false && false = false

// true || true = true
//false || true = true
//true || false = true
//false || false = false

// Two of the many comparison operators used by PHP are '==' (i.e. equal) and '===' (i.e. identical).

$a = "22";
$b = 22;

// if($a == $b){
//     echo "A is equal to B";
// }


// echo $a + $b;



// if ($a === $b || $a == $b) {

// 	echo " A and B are identical";

// }elseif ($a == $b) {

//     echo "A is equal to B";

// }else{

// 	echo "A is not equal to B and they are not identical";
// }


//what is an array?

//array types

//the index of an array starts from zero;

//Indexed array

// $students = ["Esther", "yezid"];

// $students_alt = array("Esther", "Yezid");

// echo $students_alt[0];

//associative array

// $student_info = ["name"=>"Esther Idowu", "age"=>"25", "gender"=>"Female", "occupation"=>"Software developer"];

// echo "My name is ".$student_info["name"].", I am ".$student_info["age"].". I am a ".$student_info["gender"];

//associative array

$students =  array(
						array(
							"name"=>"Esther Idowu",
							"age"=>"25",
							"gender"=>"Female",
							"occupation"=>"Software developer"
						),
		               array(
			               	"name"=>"Yezid",
							"age"=>"30",
							"gender"=>"Male",
							"occupation"=>"Software developer"
		               )
	             );

// echo $students[1]["name"];

// echo count($students);
// 
// $esther_age = 105;


// $storey = "My name is Abubakar Musa Bala";

// $data = explode(" ", $storey);


// explode(delimiter, string);

// var_dump($data);




// function Add($a, $b=10){

//   $sum = $a + $b;
//   return $sum;

// }


// function getAllEvenNumbers($start, $end){



// }


// echo Add(4,5);

?>


<!DOCTYPE html>
<html>
<head>
	<title><?php echo "Welcome to PHPMYSQL Class"; ?></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<!-- <h1 id="bigheader">This is the index page</h1>
	<h2 class="yezid">this is the index page</h2>
	<h3 class="yezid">this is the index page</h3>
	<p class="yezid">welcome to bincom academy</p>
	<br>
	<p>I am abubakar musa bala</p>
	<hr>
	<p>I am a programmer</p>
	

    <h2>Student registration</h2>
	<form>
		<input type="text" name="name" required>
		<input type="email" name="zipcode">
		<input type="checkbox" name="rice">

		<input type="radio" name="female">
		<input type="submit" name="login" value="LOGIN">
	</form>

	<table>
		<thead>
			<th>Name</th>
            <th>AGe</th>
            <th>Address</th>
		</thead>
		<tbody>
			<tr>
				<td>
					Abubakar Musa 
				</td>
				<td>
				     15
			    </td>
			    <td>
			    	Agege Lagos
			    </td>
			</tr>
			<tr>
				<td>Daniel Okoye</td>
				<td>26</td>
				<td>Victoria Island Lagos</td>
			</tr>
		</tbody>

	</table>



	<div style="text-align: center;" >
		
    <h1>This is the index page</h1>
	<h2>this is the index page</h2>
	<h3>this is the index page</h3>
	<p>welcome to bincom academy</p>
	<p>i am happy</p>
	<br>
	<p>I am abubakar musa bala</p>
	<hr>
	<p>I am a programmer</p>


	</div>

	<h1>List of Students</h1>

	<ol>
	 <li>Abubakar Musa </li>	
     <li>Yezid</li>
     <li>Esther</li>
	</ol>

	<ul>
		 <li>Abubakar Musa </li>	
	     <li>Yezid</li>
	     <li>Esther</li>
	</ul>
 -->



   <ul class="students">
		 <li><a class="active" href="index.php"> <?= $students[1]["age"]   ?></a></li>	
	     <li><a href="about.php"><?php echo "Welcome Yezid";  ?></a></li>
	     <li><a href="contact.php">Contact</a></li>
	</ul>
	<br>
	<div class="gallery">
  <a target="_blank" href="img_5terre.jpg">
    <img src="https://www.w3schools.com/css/img_5terre.jpg" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_forest.jpg">
    <img src="https://www.w3schools.com/css/img_forest.jpg" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_lights.jpg">
    <img src="https://www.w3schools.com/css/img_lights.jpg" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="https://www.w3schools.com/css/img_mountains.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>
	<!-- <a href="#" class="link-tag">My link</a>
	 <div class="box-model">
 	<p>Testing the box model</p>
 </div>
<input class="form-control" type="text" name="name">
 -->
 <table>
 	<thead>
 		<th>Name</th>
 		<th>Age</th>
 		<th>Gender</th>
 		<th>Occupation</th>
 	</thead>
 	<tbody>
 		<?php for ($i=0; $i < count($students) ; $i++):?>
 			<tr>
 				<td><?=$students[$i]["name"] ?></td>
 				<td><?=$students[$i]["age"] ?></td>
 				<td><?=$students[$i]["gender"] ?></td>
 				<td><?=$students[$i]["occupation"] ?></td>
                
 			</tr>
 		<?php endfor; ?>

 	</tbody>
 </table>

 <h2>Using foreach Loop</h2>

  <table>
 	<thead>
 		<th>Name</th>
 		<th>Age</th>
 		<th>Gender</th>
 		<th>Occupation</th>
 	</thead>
 	<tbody>
 		<?php foreach ($students as $student) {  ?>
 			<tr>
 				<td><?=$student["name"] ?></td>
 				<td><?=$student["age"] ?></td>
 				<td><?=$student["gender"] ?></td>
 				<td><?=$student["occupation"] ?></td>
                
 			</tr>

 		<?php } ?>

 	</tbody>
 </table>

</body>
</html>
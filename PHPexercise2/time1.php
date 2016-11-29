<!DOCTYPE html>
<html>
<head>
<title> <?php print  date(AGi) ?> </title>
<link rel='stylesheet' href='http://www.w3schools.com/lib/w3.css'>
</head>
<body>

<!-- <h1>The time is 10:13!</h1> -->

<?php 

print "<p>Hello ".$_GET['firstname']." ".$_GET['lastname']."!</p>\n";

if ( isset( $_GET['firstname']) && isset( $_GET['lastname'])) {
  print "<p>Hello ".$_GET['firstname']." ".$_GET['lastname']."!</p>\n";
} else {
  print "<p>You didn't tell me your first and last names!</p>\n";
}


// print "<h1>The time is ";
// print time();
// print "!</h1>";

// print date( "r", time());

//print just the time as hours and minutes
// print date(A:G:i);


print "<h2>Are you feeling ";
print "?</h2>\n";
    $background = array ('000000', '999999', '444444', '555555' ); 
    $number = rand($background[0], $background[2] );  
     
    echo "<body bgcolor=\"#"; 
    echo "$number\">";


print timestable(7);
// code to print out all twelve times tables
print "<table class='w3-table-all'>\n";
print "<tr>\n";
print "<td>".timestable(1)."</td>\n";
print "<td>".timestable(2)."</td>\n";
print "<td>".timestable(3)."</td>\n";
print "<td>".timestable(4)."</td>\n";
print "<td>".timestable(5)."</td>\n";
print "<td>".timestable(6)."</td>\n";
print "</tr>\n";
print "<tr>\n";
print "<td>".timestable(7)."</td>\n";
print "<td>".timestable(8)."</td>\n";
print "<td>".timestable(9)."</td>\n";
print "<td>".timestable(10)."</td>\n";
print "<td>".timestable(11)."</td>\n";
print "<td>".timestable(12)."</td>\n";
print "</tr>\n";
print "</table>\n";

// // code to print out LOTS of times tables
print "<table class='w3-table-all'>\n";
for( $i = 1; $i < 1000; $i += 6) {
  print "<tr>\n";
  for( $j = 0; $j < 7; $j++) {
    print "<td>".timestable($i + $j)."</td>\n";
  }
  print "</tr>\n";
}
print "</table>\n";


?>
<a href="http://daydream.lsbu.ac.uk/myweb/batistum/time1.php"></a> 

</body>
</html>

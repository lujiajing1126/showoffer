<?php
$schools = array(
0=>array(
"Princeton University",
"Harvard College",
"Yale University",
"Columbia University",
"Stanford University",
"The University of Chicago",
"Duke University",
"Massachusetts Institute of Technology",
"University of Pennsylvania",
"California Institute of Technology",
"Dartmouth College"),
1=>array(
"Johns Hopkins University",
"Northwestern University",
"Brown University",
"Washington Univ. in St. Louis",
"Cornell University",
"Vanderbilt University",
"Rice University",
"University of Notre Dame",
"Emory University",
"Georgetown University",
"Univ. of California--Berkeley",
"Carnegie Mellon University"),
2=>array(
"Univ. of California--Los Angeles",
"University of Southern California",
"University of Virginia",
"Wake Forest University",
"Tufts University",
"Univ. of Michigan--Ann Arbor",
"Univ. of North Carolina--Chapel Hill",
"Boston College"),
3=>array(
"Brandeis University",
"College of William and Mary",
"New York University",
"University of Rochester",
"Georgia Institute of Technology",
"Case Western Reserve University",
"Pennsylvania State University",
"Univ. of California--Davis",
"Univ. of California--San Diego",
"Boston University"),
4=>array(
"Lehigh University",
"Rensselaer Polytechnic Institute",
"Univ. of California--Santa Barbara",
"UIUC",
"University of Wisconsin--Madison",
"University of Miami",
"Yeshiva University",
"Northeastern University",
"Univ. of California--Irvine",
"University of Florida",
"George Washington University"),
5=>array(
"Ohio State University",
"Tulane University",
"University of Texas--Austin",
"University of Washington",
"Fordham University",
"Pepperdine University",
"University of Connecticut",
"Southern Methodist University",
"University of Georgia"));
if(isset($_GET["rank"]))  {
	switch((int)$_GET["rank"])  {
		case 0:
			echo json_encode($schools[0]);break;
		case 1:
			echo json_encode($schools[1]);break;
		case 2:
			echo json_encode($schools[2]);break;
		case 3:
			echo json_encode($schools[3]);break;
		case 4:
			echo json_encode($schools[4]);break;
		case 5:
			echo json_encode($schools[5]);break;
		default:
			echo json_encode($schools);
	}
}
else  {
	echo json_encode($schools);
}
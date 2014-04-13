<?php
$schools = array(
0=>array(
array("Princeton University",0),
array("Harvard College",1),
array("Yale University",2),
array("Columbia University",3),
array("Stanford University",4),
array("The University of Chicago",5),
array("Duke University",6),
array("Massachusetts Institute of Technology",7),
array("University of Pennsylvania",8),
array("California Institute of Technology",9),
array("Dartmouth College",10)),
1=>array(
array("Johns Hopkins University",11),
array("Northwestern University",12),
array("Brown University",13),
array("Washington Univ. in St. Louis",14),
array("Cornell University",15),
array("Vanderbilt University",16),
array("Rice University",17),
array("University of Notre Dame",18),
array("Emory University",19),
array("Georgetown University",20),
array("Univ. of California--Berkeley",21),
array("Carnegie Mellon University",22)),
2=>array(
array("Univ. of California--Los Angeles",23),
array("University of Southern California",24),
array("University of Virginia",25),
array("Wake Forest University",26),
array("Tufts University",27),
array("Univ. of Michigan--Ann Arbor",28),
array("Univ. of North Carolina--Chapel Hill",29),
array("Boston College",30)),
3=>array(
array("Brandeis University",31),
array("College of William and Mary",32),
array("New York University",33),
array("University of Rochester",34),
array("Georgia Institute of Technology",35),
array("Case Western Reserve University",36),
array("Pennsylvania State University",37),
array("Univ. of California--Davis",38),
array("Univ. of California--San Diego",39),
array("Boston University",40)),
4=>array(
array("Lehigh University",41),
array("Rensselaer Polytechnic Institute",42),
array("Univ. of California--Santa Barbara",43),
array("UIUC",44),
array("University of Wisconsin--Madison",45),
array("University of Miami",46),
array("Yeshiva University",47),
array("Northeastern University",48),
array("Univ. of California--Irvine",49),
array("University of Florida",50),
array("George Washington University",51)),
5=>array(
array("Ohio State University",52),
array("Tulane University",53),
array("University of Texas--Austin",54),
array("University of Washington",55),
array("Fordham University",56),
array("Pepperdine University",57),
array("University of Connecticut",58),
array("Southern Methodist University",59),
array("University of Georgia",60)));
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
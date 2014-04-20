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
array("University of Georgia",60)),
6=>array(
array("Williams College",61),
array("Amherst College",62),
array("Swarthmore College",63),
array("Bowdoin College",64),
array("Middlebury College",65),
array("Pomona College",66),
array("Carleton College",67),
array("Wellesley College",68),
array("Claremont McKenna College",69),
array("Davidson College",70),
array("Haverford College",71)),
7=>array(
array("United States Naval Academy",72),
array("Vassar College",73),
array("Hamilton College",74),
array("Washington and Lee University",75),
array("Harvey Mudd College",76),
array("Grinnell College",77),
array("United States Military Academy",78),
array("Wesleyan University",79),
array("Colgate University",80),
array("Smith College",81)),
8=>array(
array("Bates College",82),
array("Colby College",83),
array("Macalester College",84),
array("College of the Holy Cross",85),
array("Oberlin College",86),
array("Scripps College",87),
array("United States Air Force Academy",88),
array("University of Richmond",89),
array("Bryn Mawr College",90)),
9=>array(
array("Colorado College",91),
array("Barnard College",92),
array("Bucknell University",93),
array("Kenyon College",94),
array("Pitzer College",95),
array("Lafayette College",96),
array("Trinity College",97),
array("Bard College",98),
array("Mount Holyoke College",99),
array("Sewanee--University of the South",100)),
10=>array(
array("Occidental College",101),
array("Soka University of America",102),
array("Union College",103),
array("Whitman College",104),
array("Connecticut College",105),
array("Dickinson College",106),
array("Franklin and Marshall College",107),
array("Skidmore College",108),
array("Centre College",109),
array("Denison University",100),
array("Gettysburg College",101)),
11=>array(
array("Furman University",102),
array("St. Olaf College",103),
array("DePauw University",104),
array("Rhodes College",105),
array("St. Lawrence University",106),
array("Wabash College",107),
array("Wheaton College",108),
array("Beloit College",109),
array("Lawrence University",110)));
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
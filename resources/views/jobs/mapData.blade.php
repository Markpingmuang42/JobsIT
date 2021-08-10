<?php
	$locations=array(); 
    $uname="root";
    $pass="";
    $servername="localhost";
    $dbname="location";
    $db=new mysqli($servername,$uname,$pass,$dbname);
    $query =  $db->query("SELECT * FROM location");
    $resultArray = array();
    
    while($row = $query->fetch_assoc()) {
        $id = $row['ID'];
        $NameCompany = $row['NameCompany'];
        $lat = $row['lat'];
        $lng = $row['lng'];
        $JopType= $row['JopType'];
        array_push($resultArray,[$id,$NameCompany,$lat,$lng,$JopType]);
    }

    echo json_encode($resultArray);
?>
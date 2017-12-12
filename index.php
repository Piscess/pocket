<?php
require('init.php');
$sql="SELECT title,price,house_hall,house_room,space FROM";
$sql.=" re_house LIMIT 8";
$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
$all=array();
for($j=0;$j<count($rows);$j++){
    for ($i=0;$i<count($rows);$i++){
        $price=ceil($rows[$i]['price']);
        $title=substr($rows[$i]['title'],0,48);
        $output=[
            "title"=>$title,//标题
            "price"=>$price,//价格
            "house_hall"=>$rows[$i]['house_hall'],//室
           "house_room"=>$rows[$i]['house_room'],//厅
            "space"=>$rows[$i]['space']//面积
       ];
       $all[$j][$i]=$output;
    }
}echo print_r($all);
echo json_encode($all);
//var_dump($rows);

?>
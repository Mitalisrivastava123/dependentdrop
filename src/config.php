<?php

$products = array(
    "Electronics" => array(
        "Television" => array(
            array(
                "id" => "PR001",
                "name" => "MAX-001",
                "brand" => "Samsung"
            ),
            array(
                "id" => "PR002",
                "name" => "BIG-301",
                "brand" => "Bravia"
            ),
            array(
                "id" => "PR003",
                "name" => "APL-02",
                "brand" => "Apple"
            )
        ),
        "Mobile" => array(
            array(
                "id" => "PR004",
                "name" => "GT-1980",
                "brand" => "Samsung"
            ),
            array(
                "id" => "PR005",
                "name" => "IG-5467",
                "brand" => "Motorola"
            ),
            array(
                "id" => "PR006",
                "name" => "IP-8930",
                "brand" => "Apple"
            )
        )
    ),
    "Jewelry" => array(
        "Earrings" => array(
            array(
                "id" => "PR007",
                "name" => "ER-001",
                "brand" => "Chopard"
            ),
            array(
                "id" => "PR008",
                "name" => "ER-002",
                "brand" => "Mikimoto"
            ),
            array(
                "id" => "PR009",
                "name" => "ER-003",
                "brand" => "Bvlgari"
            )
        ),
        "Necklaces" => array(
            array(
                "id" => "PR010",
                "name" => "NK-001",
                "brand" => "Piaget"
            ),
            array(
                "id" => "PR011",
                "name" => "NK-002",
                "brand" => "Graff"
            ),
            array(
                "id" => "PR012",
                "name" => "NK-003",
                "brand" => "Tiffany"
            )
        )
    )
);
$json1 = json_encode($products);

if(isset($_POST["id"])){

    $category = $_POST["id"];
    // echo $category;
    foreach($products as $k4 => $v4){
        // echo $k4;
        foreach($v4 as $k1 => $v1){
            // echo $k1; 
                  if($k4 == $category)
                  {
                  echo "<option value='$k1'>$k1</option>"; 
                  }     
                }
            } 
}
                
if(isset($_POST["id1"])){
    $subCategory = $_POST["id1"];
//  echo $subCategory;
    foreach($products as $k){
        foreach($k as $k1 => $v1){
            // echo $k1;
        
            foreach($v1 as $k2 => $v2){
            if($k1 == $subCategory)
            {
                echo "<option value=".$v2["id"].">".$v2["id"]."</option>"; 
            }
            }
        }
    }
}
if(isset($_POST["id2"])){
    $subCategory1 = $_POST["id2"];
    // echo $subCategory1;
    foreach($products as $k){
        // echo $k;
        foreach($k as $k1 => $v1){
            // echo $k1;
            foreach($v1 as $k2 => $v2){
                // echo $v2;
                foreach($v2 as $k3 => $v3)
                {
                 // echo $v3;
              if($v3 == $subCategory1)
              {
          
                echo "<tr><td>".$v2["id"]."</td>"; 
                echo "<td>".$v2["name"]."</td>"; 
                echo "<td>".$v2["brand"]."</td>"; 
              }
                
            }
        }
        }
    }
}
            
        
    



?>



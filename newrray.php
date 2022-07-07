<?php
/*$inexedarray = array(
  "taha";
  "mhamad";
  "email";
  "password"
  "taha"
)
$indexedarray[]="search";
echo "</pre>"
print_r($indexedarray)
foreach($indexedarray as $val){
    echo $val ."<br>"
}
$saleries = array(
    "taha";
    "mhamad";
    "email";
    "password"
    "taha"
  )
  $saleries[]="search";
  echo "</pre>"
  print_r($saleries)
  foreach($saleries as $person){
      echo $val ."<br>"
  }
  $diet = array(
      "Day1"=>array{"banana","apple","emo"}
      "day2"=>array{"banana","apple","emo"}
      "Day3"=>array{"banana","apple","emo"}
    print_r($diet)
      )
      foreach($diet as $day => $food){
          echo $day
          echo "<h2>".$day."</h2>";
          foreach($food as $item){
              echo "".$item.""
          }
      }
      */
      $array= array{
          "html";
          "css";
          "js";
          "php";
          "sal"
      }
      if (in_array("php",$array,true)){
          echo "yes if it array make it so easier"
      }
      if(array_key_exists(2,$array)){
          echo "yes its found"
      }
      //array seacrh
      $langs = = array_search("css",$array,true)
      echo "yes its found in exist".$langs;
      echo "and its item";

      ech
?>
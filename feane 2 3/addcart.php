<?php
  header("Content-Type: application/json");
  session_start();
  require "./db.php" ;

  if ( !isset($_GET["id"])) {
      echo json_encode(["session" => $_SESSION]);
      exit ;
  }
  
  $id = $_GET["id"];
  $add = $_GET["add"] ;
  
  $_SESSION["items"] = $_SESSION["items"] ?? [] ;
  
  $stmt = $db->prepare("select * from ilac where id = ?") ;
  $stmt->execute([$id]) ;
  $item = $stmt->fetch(PDO::FETCH_ASSOC);
  
  // Check if the item added before
  $found = -1 ;
  for ( $i=0 ; $i<count($_SESSION["items"]); $i++) {
      if ( $_SESSION["items"][$i]["id"] == $id) $found = $i ;
  }
  
  if ( $found == -1) {
      array_push($_SESSION["items"], ["id" => $id, 
                                      "name" => $item["name"],
                                      "image" => $item["image"],
                                      "price" => $item["price"],
                                      "quantity" => 1
                                     ]);
  } else {
      $_SESSION["items"][$found]["quantity"] += $add ;
      if ( $_SESSION["items"][$found]["quantity"] <= 0) {
        array_splice($_SESSION["items"], $found, 1) ;
      }
  }
  
  
  $count = 0 ;
  foreach( $_SESSION["items"] as $item) {
      $count += $item["quantity"] ;
  }
  $_SESSION["count"] = $count ;
  
  echo json_encode(["session" => $_SESSION]);
  
  
  
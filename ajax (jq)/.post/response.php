<?php
       $selection = $_POST['selection'];
       if (empty($selection) == false) {
              if ($selection == '1') { 
                     echo "Is this";
              }
              else if ($selection == '2') { 
                     echo "the";
              }
              else if ($selection == '3'){ 
                     echo "car?";
              } 
         } 
       else {
               echo "這就是車嗎"; 
       }
?>
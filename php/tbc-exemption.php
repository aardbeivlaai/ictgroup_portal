
<?php 

require_once("session.php");

$tbc = array("Albania","Algeria","Andorra","Antigua and Barbuda","Argentina","Armenia","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Barbados","Belarus","Belgium","Belize","Benin", "Bosnia and Herzegovina","Brazil","Brunei", "Bulgaria","Burkina Faso" ,"Canada","Chile","China","Colombia","Comoros","Costa Rica","Croatia","Cuba","Cyprus","Czech Republic","Denmark","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Estonia","Fiji","Finland","France","Galapagos Islands","Georgia","Germany","Greece","Grenada","Guatemala","Guyana","Honduras","Hong Kong","Hungary","Iceland","Iran","Iraq","Ireland","Israel","Italy","Jamaica", "Japan","Yemen","Jordan","Kazakhstan", "Kosovo","Kuwait","Latvia","Lebanon","Libya","Liechtenstein", "Lithuania","Luxembourg","Macau", "Malaysia","Maldives","Mali","Malta","Mauritius","Mexico","Monaco","Montenegro","Netherlands","New Hebrides","New Zealand","Nicaragua", "Niger","Niue","North-Macedonia","Norway","Oman","Panama","Paraguay","Poland","Portugal","Qatar","Romania","Russia","Rwanda","Samoa","San Marino","Saudi Arabia","Serbia","Seychelles","Singapore","Slovakia","Slovenia","Solomon Islands","South-Korea","Spain" ,"Sri Lanka","St Kitts & Nevis", "St Lucia","St Vincent and the Grenadines","Suriname","Sweden","Switzerland","Syria","Tadjikistan", "Taiwan","Togo","Tonga","Trinidad and Tobago","Tunisia","Turkey","Turkmenistan" ,"United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Venezuela"); 
  
if (in_array($_SESSION["COUNTRY"], $tbc)) 
  { 
  //echo "found";
  $_SESSION['Medic'] = "No";  
  } 
else
  { 
  //echo "not found"; 
  $_SESSION['Medic'] = "Yes";  
  } 
?> 



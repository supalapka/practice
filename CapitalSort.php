<?php

$countries = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
"Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
"Finland"=>"Helsinki", "France" => "Paris",
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" =>
"Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
"Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon",
"Spain"=>"Madrid", "Sweden"=>"Stockholm", "United
Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
"Czech Republic"=>"Prague", "Estonia"=>"Tallinn",
"Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valletta",
"Austria" => "Vienna", "Poland"=>"Warsaw");


asort($countries); 


foreach($countries as $key => $value)
{
echo "<pre>";
echo "The capital of $key  is  $value";
}

?>
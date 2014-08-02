<html>
<body>




<?php

#list out the array with the values

$hashTable = array(
	"foo" => "bar",
	"bar" => "foo",
	
);

function displayRN() {
	if (

}




$length = $_POST["vessel_length"];
$propulsion = $_POST["vessel_propulsion"];
$tonnage = $_POST["vessel_net_tonnage"];
$speed = $_POST["vessel_speed"];

echo "testing ";
#echo $length;
#echo $propulsion;
#echo $tonnage;
#echo $speed;

$hashKey = $length . $propulsion . $tonnage . $speed ;
echo $hashKey;

?>

<table id="reqitems" border="1" style="width:300px" >
    <tr>
       <th>&nbsp;&nbsp;</th>
       <th>Item</th>
       <th>Requirements</th>
       <th>Need It?</th>
    </tr>
    <tr>
       <td></td>
       <td>Registration Numbers</td>
       <td><?php echo "function call here" ; ?> </td>
       <td></td>
    </tr>
    <tr>
    	<td></td>
        <td>Registration</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
    	<td></td>
        <td>Documentation</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
    	<td></td>
        <td>Personal Flotation Device</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
    	<td></td>
        <td>Visual Distress Signals</td>
        <td></td>
        <td></td>
	</tr>
    <tr>
   		<td></td>
        <td>Fire Extinguisher</td>
        <td></td>
        <td></td>
	</tr>
    <tr>
    	<td></td>
        <td>Ventilation</td>
        <td></td>
        <td></td>
	</tr>
    <tr>
    	<td></td>
        <td>Backfire Flame Control</td>
        <td></td>
        <td></td>
	</tr>
    <tr>
    	<td></td>
        <td>Sound Producing Devices</td>
        <td></td>
        <td></td>
	</tr>
    <tr>
    	<td></td>
        <td>Navigation Lights</td>
        <td></td>
        <td></td>
	</tr>
    <tr>
    	<td></td>
        <td>Pollution (Oily Waste) Placard</td>
        <td></td>
        <td></td>
	</tr>
    <tr>
    	<td></td>
        <td>MARPOL Trash Placard</td>
        <td></td>
        <td></td>
	</tr>
    <tr>
    	<td></td>
        <td>Marine Sanitation Devices</td>
        <td></td>
        <td></td>
	</tr>
    <tr>
    	<td></td>
        <td>Trash Placard</td>
        <td></td>
        <td></td>
	</tr>
    <tr>
    	<td></td>
        <td>Navigation Rules</td>
        <td></td>
        <td></td>
	</tr>
    <tr>
    	<td></td>
        <td>State Requirements</td>
        <td></td>
        <td></td>
    </tr>
  </table>


</body>
</html>
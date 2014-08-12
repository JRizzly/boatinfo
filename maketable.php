<html>
<body>




<?php
    
    #list out the array with the values
    
    $hashTable = array(
                       "L1P1N1S1"  =>  "R2*PFD1V1FE1VS1BF1SP1NL2OW1TP1MSD1NR1",
                       "L1P1N1S2"  =>  "R2*PFD1V1FE1VS1BF1SP1NL2OW1TP1MSD1NR1",
                       "L1P1N2S1"  =>  "R1*PFD1V1FE1VS1BF1SP1NL2OW1TP1MSD1NR1",
                       "L1P1N2S2"  =>  "R1*PFD1V1FE1VS1BF1SP1NL2OW1TP1MSD1NR1",
                       "L1P2N1S1"  =>  "R2*PFD1V1FE2VS2BF2SP1NL3OW1TP1MSD1NR1",
                       "L1P2N1S2"  =>  "R2*PFD1V1FE2VS2BF2SP1NL3OW1TP1MSD1NR1",
                       "L1P2N2S1"  =>  "R1*PFD1V1FE2VS2BF2SP1NL3OW1TP1MSD1NR1",
                       "L1P2N2S2"  =>  "R1*PFD1V1FE2VS2BF2SP1NL3OW1TP1MSD1NR1",
                       "L1P3N1S1"  =>  "R2*PFD1V1FE1VS1BF1SP1NL3OW1TP1MSD1NR1",
                       "L1P3N1S2"  =>  "R2*PFD1V1FE1VS1BF1SP1NL3OW1TP1MSD1NR1",
                       "L1P3N2S1"  =>  "R1*PFD1V1FE1VS1BF1SP1NL3OW1TP1MSD1NR1",
                       "L1P3N2S2"  =>  "R1*PFD1V1FE1VS1BF1SP1NL3OW1TP1MSD1NR1",
                       "L1P4N1S1"  =>  "R2*PFD1V1FE2VS2BF2SP1NL4OW1TP1MSD1NR1",
                       "L1P4N1S2"  =>  "R2*PFD1V1FE2VS2BF2SP1NL5OW1TP1MSD1NR1",
                       "L1P4N2S1"  =>  "R1*PFD1V1FE2VS2BF2SP1NL4OW1TP1MSD1NR1",
                       "L1P4N2S2"  =>  "R1*PFD1V1FE2VS2BF2SP1NL5OW1TP1MSD1NR1",
                       "L1P5N1S1"  =>  "R2*PFD1V1FE1VS1BF1SP1NL4OW1TP1MSD1NR1",
                       "L1P5N1S2"  =>  "R2*PFD1V1FE1VS1BF1SP1NL5OW1TP1MSD1NR1",
                       "L1P5N2S1"  =>  "R1*PFD1V1FE1VS1BF1SP1NL4OW1TP1MSD1NR1",
                       "L1P5N2S2"  =>  "R1*PFD1V1FE1VS1BF1SP1NL5OW1TP1MSD1NR1",
                       "L1P6N1S1"  =>  "R2*PFD1V1FE1VS1BF1SP1NL1OW1TP1MSD1NR1",
                       "L1P6N1S2"  =>  "R2*PFD1V1FE1VS1BF1SP1NL1OW1TP1MSD1NR1",
                       "L1P6N2S1"  =>  "R1*PFD1V1FE1VS1BF1SP1NL1OW1TP1MSD1NR1",
                       "L1P6N2S2"  =>  "R1*PFD1V1FE1VS1BF1SP1NL1OW1TP1MSD1NR1",
                       "L2P1N1S1"  =>  "R2*PFD2V2FE1VS1BF1SP1NL2OW1TP1MSD1NR1",
                       "L2P1N1S2"  =>  "R2*PFD2V2FE1VS1BF1SP1NL2OW1TP1MSD1NR1",
                       "L2P1N2S1"  =>  "R1*PFD2V2FE1VS1BF1SP1NL2OW1TP1MSD1NR1",
                       "L2P1N2S2"  =>  "R1*PFD2V2FE1VS1BF1SP1NL2OW1TP1MSD1NR1",
                       "L2P2N1S1"  =>  "R2*PFD2V2FE2VS2BF2SP1NL3OW1TP1MSD1NR1",
                       "L2P2N1S2"  =>  "R2*PFD2V2FE2VS2BF2SP1NL3OW1TP1MSD1NR1",
                       "L2P2N2S1"  =>  "R1*PFD2V2FE2VS2BF2SP1NL3OW1TP1MSD1NR1",
                       "L2P2N2S2"  =>  "R1*PFD2V2FE2VS2BF2SP1NL3OW1TP1MSD1NR1",
                       "L2P3N1S1"  =>  "R2*PFD2V2FE1VS1BF1SP1NL3OW1TP1MSD1NR1",
                       "L2P3N1S2"  =>  "R2*PFD2V2FE1VS1BF1SP1NL3OW1TP1MSD1NR1",
                       "L2P3N2S1"  =>  "R1*PFD2V2FE1VS1BF1SP1NL3OW1TP1MSD1NR1",
                       "L2P3N2S2"  =>  "R1*PFD2V2FE1VS1BF1SP1NL3OW1TP1MSD1NR1",
                       "L2P4N1S1"  =>  "R2*PFD2V2FE2VS2BF2SP1NL4OW1TP1MSD1NR1",
                       "L2P4N1S2"  =>  "R2*PFD2V2FE2VS2BF2SP1NL5OW1TP1MSD1NR1",
                       "L2P4N2S1"  =>  "R1*PFD2V2FE2VS2BF2SP1NL4OW1TP1MSD1NR1",
                       "L2P4N2S2"  =>  "R1*PFD2V2FE2VS2BF2SP1NL5OW1TP1MSD1NR1",
                       "L2P5N1S1"  =>  "R2*PFD2V2FE1VS1BF1SP1NL4OW1TP1MSD1NR1",
                       "L2P5N1S2"  =>  "R2*PFD2V2FE1VS1BF1SP1NL5OW1TP1MSD1NR1",
                       "L2P5N2S1"  =>  "R1*PFD2V2FE1VS1BF1SP1NL4OW1TP1MSD1NR1",
                       "L2P5N2S2"  =>  "R1*PFD2V2FE1VS1BF1SP1NL5OW1TP1MSD1NR1",
                       "L2P6N1S1"  =>  "R2*PFD2V2FE1VS1BF1SP1NL1OW1TP1MSD1NR1",
                       "L2P6N1S2"  =>  "R2*PFD2V2FE1VS1BF1SP1NL1OW1TP1MSD1NR1",
                       "L2P6N2S1"  =>  "R1*PFD2V2FE1VS1BF1SP1NL1OW1TP1MSD1NR1",
                       "L2P6N2S2"  =>  "R1*PFD2V2FE1VS1BF1SP1NL1OW1TP1MSD1NR1",
                       "L3P1N1S3"  =>  "R2*PFD2V2FE1VS1BF1SP1NL6OW1TP1MSD1NR1",
                       "L3P1N2S3"  =>  "R1*PFD2V2FE1VS1BF1SP1NL6OW1TP1MSD1NR1",
                       "L3P2N1S3"  =>  "R2*PFD2V2FE2VS2BF2SP1NL7OW1TP1MSD1NR1",
                       "L3P2N2S3"  =>  "R1*PFD2V2FE2VS2BF2SP1NL7OW1TP1MSD1NR1",
                       "L3P3N1S3"  =>  "R2*PFD2V2FE1VS1BF1SP1NL7OW1TP1MSD1NR1",
                       "L3P3N2S3"  =>  "R1*PFD2V2FE1VS1BF1SP1NL7OW1TP1MSD1NR1",
                       "L3P4N1S3"  =>  "R2*PFD2V2FE2VS2BF2SP1NL5OW1TP1MSD1NR1",
                       "L3P4N2S3"  =>  "R1*PFD2V2FE2VS2BF2SP1NL5OW1TP1MSD1NR1",
                       "L3P5N1S3"  =>  "R2*PFD2V2FE1VS1BF1SP1NL5OW1TP1MSD1NR1",
                       "L3P5N2S3"  =>  "R1*PFD2V2FE1VS1BF1SP1NL5OW1TP1MSD1NR1",
                       "L3P6N1S3"  =>  "R2*PFD2V2FE1VS1BF1SP1NL5OW1TP1MSD1NR1",
                       "L3P6N2S3"  =>  "R1*PFD2V2FE1VS1BF1SP1NL5OW1TP1MSD1NR1",
                       "L4P1N3S3"  =>  "R2*PFD2V2FE1VS1BF1SP1NL6OW2TP2MSD1NR1",
                       "L4P2N3S3"  =>  "R2*PFD2V2FE3VS2BF2SP1NL7OW2TP2MSD1NR1",
                       "L4P3N3S3"  =>  "R2*PFD2V2FE3VS1BF1SP1NL7OW2TP2MSD1NR1",
                       "L4P4N3S3"  =>  "R2*PFD2V2FE3VS2BF2SP1NL5OW2TP2MSD1NR1",
                       "L4P5N3S3"  =>  "R2*PFD2V2FE3VS1BF1SP1NL5OW2TP2MSD1NR1",
                       "L5P1N3S3"  =>  "R2*PFD2V2FE1VS1BF1SP2NL6OW2TP2MSD1NR2",
                       "L5P2N3S3"  =>  "R2*PFD2V2FE3VS2BF2SP2NL7OW2TP2MSD1NR2",
                       "L5P3N3S3"  =>  "R2*PFD2V2FE3VS1BF1SP2NL7OW2TP2MSD1NR2",
                       "L5P4N3S3"  =>  "R2*PFD2V2FE3VS2BF2SP2NL8OW2TP2MSD1NR2",
                       "L5P5N3S3"  =>  "R2*PFD2V2FE3VS1BF1SP2NL8OW2TP2MSD1NR2",
                       "L6P1N3S3"  =>  "R2*PFD2V2FE1VS1BF1SP2NL10OW2TP2MSD2NR2",
                       "L6P2N3S3"  =>  "R2*PFD2V2FE4VS2BF2SP2NL11OW2TP2MSD2NR2",
                       "L6P3N3S3"  =>  "R2*PFD2V2FE4VS1BF1SP2NL11OW2TP2MSD2NR2",
                       "L6P4N3S3"  =>  "R2*PFD2V2FE4VS2BF2SP2NL9OW2TP2MSD2NR2",
                       "L6P5N3S3"  =>  "R2*PFD2V2FE4VS1BF1SP2NL9OW2TP2MSD2NR2",
                       "L7P1N3S3"  =>  "R2*PFD2V2FE1VS1BF1SP2NL13OW2TP2MSD2NR2",
                       "L7P2N3S3"  =>  "R2*PFD2V2FE4VS2BF2SP2NL14OW2TP2MSD2NR2",
                       "L7P3N3S3"  =>  "R2*PFD2V2FE4VS1BF1SP2NL14OW2TP2MSD2NR2",
                       "L7P4N3S3"  =>  "R2*PFD2V2FE4VS2BF2SP2NL12OW2TP2MSD2NR2",
                       "L7P5N3S3"  =>  "R2*PFD2V2FE4VS1BF1SP2NL12OW2TP2MSD2NR2",
                       );
    
    
    
    
    
    
    
    function displayR( $KEY ) {
        
		switch ( true ) {
			case ( is_numeric( strpos($KEY, 'R1*') ) ) :
				echo "Check with State";
				break;
			case ( is_numeric ( strpos($KEY, 'R2*') ) ) :
				echo "Yes with USCG; Check with State" ;
				break;
			default:
				echo "Make sure you selected somthing OR This Combination Does Not Exist";
		}
    }
    
    function displayPFD( $KEY ) {
        
		switch ( true ) {
			case ( is_numeric( strpos($KEY, 'PFD1') ) ) :
				echo "1 Per Person; Throwable: No";
				break;
			case ( is_numeric ( strpos($KEY, 'PFD2') ) ) :
				echo "1 Per Person; Throwable: Yes (Type IV)" ;
				break;
			default:
				echo "Make sure you selected somthing OR This Combination Does Not Exist";
		}
    }
    
    function displayV( $KEY ) {
        
		switch ( true ) {
			case ( is_numeric( strpos($KEY, 'V1') ) ) :
				echo "Between Sunset and Sunrise";
				break;
			case ( is_numeric ( strpos($KEY, 'V2') ) ) :
				echo "Yes" ;
				break;
			default:
				echo "Make sure you selected somthing OR This Combination Does Not Exist";
		}
    }
    
    function displayFE( $KEY ) {
        
		switch ( true ) {
			case ( is_numeric( strpos($KEY, 'FE1') ) ) :
				echo "No";
				break;
			case ( is_numeric ( strpos($KEY, 'FE2') ) ) :
				echo "Yes, Type: 1 B-1" ;
				break;
			case ( is_numeric ( strpos($KEY, 'FE3') ) ) :
				echo "Yes, Type: 2xB-1, Alternate: 1xB-11 " ;
				break;
			case ( is_numeric ( strpos($KEY, 'FE4') ) ) :
				echo "Yes, Type: 3xB-1, Alternate: 1xB-11 and 1xB-1" ;
				break;
			default:
				echo "Make sure you selected somthing OR This Combination Does Not Exist";
		}
    }
    
    function displayVS( $KEY ) {
        
		switch ( true ) {
			case ( is_numeric( strpos($KEY, 'VS1') ) ) :
				echo "No";
				break;
			case ( is_numeric ( strpos($KEY, 'VS2') ) ) :
				echo "Yes" ;
				break;
			default:
				echo "Make sure you selected somthing OR This Combination Does Not Exist";
		}
    }
    
    function displayBF( $KEY ) {
        
		switch ( true ) {
			case ( is_numeric( strpos($KEY, 'BF1') ) ) :
				echo "No";
				break;
			case ( is_numeric ( strpos($KEY, 'BF2') ) ) :
				echo "Yes" ;
				break;
			default:
				echo "Make sure you selected somthing OR This Combination Does Not Exist";
		}
    }
    
    function displaySP( $KEY ) {
        
		switch ( true ) {
			case ( is_numeric( strpos($KEY, 'SP1') ) ) :
				echo "1, Horn or Whistle";
				break;
			case ( is_numeric ( strpos($KEY, 'SP2') ) ) :
				echo "2, Bell and Horn" ;
				break;
			default:
				echo "Make sure you selected somthing OR This Combination Does Not Exist";
		}
    }
    
    #Need to put in function for Nav Lights
    
    function displayOW( $KEY ) {
        
		switch ( true ) {
			case ( is_numeric( strpos($KEY, 'OW1') ) ) :
				echo "No";
				break;
			case ( is_numeric ( strpos($KEY, 'OW2') ) ) :
				echo "Yes" ;
				break;
			default:
				echo "Make sure you selected somthing OR This Combination Does Not Exist";
		}
    }
    
    function displayTP( $KEY ) {
        
		switch ( true ) {
			case ( is_numeric( strpos($KEY, 'TP1') ) ) :
				echo "No";
				break;
			case ( is_numeric ( strpos($KEY, 'TP2') ) ) :
				echo "Yes" ;
				break;
			default:
				echo "Make sure you selected somthing OR This Combination Does Not Exist";
		}
    }
    
    function displayMSD( $KEY ) {
        
		switch ( true ) {
			case ( is_numeric( strpos($KEY, 'MSD1') ) ) :
				echo "If Toilet Installed, Type I, II, or III";
				break;
			case ( is_numeric ( strpos($KEY, 'MSD2') ) ) :
				echo "If Toilet Installed, Type II or III" ;
				break;
			default:
				echo "Make sure you selected somthing OR This Combination Does Not Exist";
		}
    }
    
    function displayNR( $KEY ) {
        
		switch ( true ) {
			case ( is_numeric( strpos($KEY, 'NR1') ) ) :
				echo "No";
				break;
			case ( is_numeric ( strpos($KEY, 'NR2') ) ) :
				echo "Yes" ;
				break;
			default:
				echo "Make sure you selected somthing OR This Combination Does Not Exist";
		}
    }
    
    function displayNL( $KEY ) {
        
		switch ( true ) {
			case ( is_numeric( strpos($KEY, 'NL1') ) ) :
				echo " Masthead Light <br> ";
				break;
			case ( is_numeric ( strpos($KEY, 'NL2') ) ) :
				echo "Yes" ;
				break;
			default:
				echo "Make sure you selected somthing OR This Combination Does Not Exist";
		}
    }
    
    
    $length = $_POST["vessel_length"];
    $propulsion = $_POST["vessel_propulsion"];
    $tonnage = $_POST["vessel_net_tonnage"];
    $speed = $_POST["vessel_speed"];
    
    $input = $length . $propulsion . $tonnage . $speed ;
    #echo $input;
    $KEY = $hashTable[$input]; //$KEY is the Result of the input
    #echo $KEY ;
    #echo $hashTable['L5P2N3S3'];
    
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
<td>Yes </td>
<td> Link </td>
</tr>
<tr>
<td></td>
<td>Registration and Documentation</td>
<td><?php displayR($KEY) ; ?> </td>
<td> Link </td>
</tr>
<tr>
<td></td>
<td>Documentation</td>
<td> <?php displayR($KEY) ; ?> </td>
<td> Link </td>
</tr>
<tr>
<td></td>
<td>Personal Flotation Device</td>
<td><?php displayPFD($KEY) ; ?></td>
<td></td>
</tr>
<tr>
<td></td>
<td>Visual Distress Signals</td>
<td><?php displayV($KEY) ; ?> </td>
<td></td>
</tr>
<tr>
<td></td>
<td>Fire Extinguisher</td>
<td><?php displayFE($KEY) ; ?></td>
<td></td>
</tr>
<tr>
<td></td>
<td>Ventilation</td>
<td><?php displayVS($KEY) ; ?></td>
<td></td>
</tr>
<tr>
<td></td>
<td>Backfire Flame Control</td>
<td><?php displayBF($KEY) ; ?></td>
<td></td>
</tr>
<tr>
<td></td>
<td>Sound Producing Devices</td>
<td><?php displaySP($KEY) ; ?></td>
<td></td>
</tr>
<tr>
<td></td>
<td>Navigation Lights</td>
<td> <?php displayNL($Key); ?>  In progress  </td>
<td></td>
</tr>
<tr>
<td></td>
<td>Pollution (Oily Waste) Placard</td>
<td><?php displayOW($KEY) ; ?></td>
<td></td>
</tr>
<tr>
<td></td>
<td>MARPOL Trash Placard</td>
<td><?php displayTP($KEY) ; ?></td>
<td></td>
</tr>
<tr>
<td></td>
<td>Marine Sanitation Devices</td>
<td><?php displayMSD($KEY) ; ?></td>
<td></td>
</tr>
<tr>
<td></td>
<td>Trash Placard</td>
<td><?php displayTP($KEY) ; ?></td>
<td></td>
</tr>
<tr>
<td></td>
<td>Navigation Rules</td>
<td><?php displayNR($KEY) ; ?></td>
<td></td>
</tr>
<tr>
<td></td>
<td>State Requirements</td>
<td>Data for this needs to be added to spreadsheet </td>
<td></td>
</tr>
</table>


</body>
</html>
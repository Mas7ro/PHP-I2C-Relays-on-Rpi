<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>PHP I2C Relays Control Panel</title>
</head>
<body>
	<?php
	function zerificabinario( $rel ) 
	{ //function to add one or more 0 to the beginning of the binary
		$caratteriBin = strlen( $rel );
		$diff = 8 - $caratteriBin;
		if ( $diff > 0 ) {
			for ( $c = 1; $c <= $diff; $c++ ) {
				$rel = "0" . $rel;
			};
		};
		return ( $rel );
	}

	function caricastatorelays() 
	{ //function to load relays status
		global $arrRelays;
		$statorele = shell_exec( '/usr/sbin/i2cget -y 1 0x23' ); //read the status
		$relays = zerificabinario( base_convert( $statorele, 16, 2 ) ); //convert into a binary and add necessary zeroes
		$arrRelays = str_split( $relays ); //Split binary in an Array
		return ( $arrRelays );
	}
	echo( "<br>" );
	caricastatorelays(); //first of all load status of the relays
	if ( isset( $_POST[ "ID" ] ) ) 
	{// if a button has been clicked
		$toggle = $_POST[ "ID" ]; //wich relays?
		$toggle = ( substr( $toggle, -1, 1 ) ) - 1; 
		$changedValue = ( 0 == $arrRelays[ $toggle ] ) ? '1' : '0'; //find new value of realay
		$arrRelays = array_replace( [], $arrRelays, [ $toggle => $changedValue ] ); //invert state of the relay
		$newrelaystatus = base_convert(implode( $arrRelays ), 2, 16 ); //convert binary to hex
		// !!!!! change 0x23 with I2C addres of your relays board
		shell_exec( 'i2cset -y 1 0x23 0x' . $newrelaystatus );  //command to relays !!!!! change 0x23 with I2C addres of your relays board
		// !!!!! change 0x23 with I2C addres of your relays board
		caricastatorelays(); // reload status of relays
		header( 'Location: ' . $_SERVER[ 'PHP_SELF' ] ); // make a redirect to empty post data. in case of reload of the page i don't wont to re-toggle last action
		//for debugging you have to comment header()
	}
	?>
	<br>
	<?php
	foreach ( $arrRelays as $key => $valore ) 
	{   //create a form for every relay and his button
		echo( "<p><form  method='post' style='width: 300px;margin: 0px;'>" );
		$color = ( 0 == $valore ) ? '#f009' : '#fff';
		echo( '<input type="submit" name="ID" id="' . $key . '" style="background-color:' . $color . '" value="Relay ' . ( $key + 1 ) . '">' );
		echo( "</form></p>" );
	}
	?>
	<br>
</body>
</html>

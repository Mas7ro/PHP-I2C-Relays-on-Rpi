<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>Documento senza titolo</title>
</head>
<body>
	<?php
	function zerificabinario( $rel ) {
		$caratteriBin = strlen( $rel );
		$diff = 8 - $caratteriBin;
		if ( $diff > 0 ) {
			for ( $c = 1; $c <= $diff; $c++ ) {
				$rel = "0" . $rel;
			};
		};
		return ( $rel );
	}

	function caricastatorelays() {
		global $arrRelays;
		$statorele = shell_exec( '/usr/sbin/i2cget -y 1 0x23' );
		$relays = zerificabinario( base_convert( $statorele, 16, 2 ) );
		$arrRelays = str_split( $relays );
		return ( $arrRelays );
	}
	echo( "<br>" );
	caricastatorelays();
	if ( isset( $_POST[ "ID" ] ) ) {
		$toggle = $_POST[ "ID" ];
		$toggle = ( substr( $toggle, -1, 1 ) ) - 1;
		$changedValue = ( 0 == $arrRelays[ $toggle ] ) ? '1' : '0';
		$arrRelaysToggle = array_replace( [], $arrRelays, [ $toggle => $changedValue ] );
		$newrelaystatus = implode( $arrRelaysToggle );
		$newrelaystatus = base_convert( $newrelaystatus, 2, 16 );
		shell_exec( 'i2cset -y 1 0x23 0x' . $newrelaystatus );
		caricastatorelays();
		header( 'Location: ' . $_SERVER[ 'PHP_SELF' ] );
	}
	?>
	<br>
	<?php
	foreach ( $arrRelays as $key => $valore ) {
		echo( "<p><form  method='post' style='width: 300px;margin: 0px;'>" );
		$color = ( 0 == $valore ) ? '#f009' : '#fff';
		echo( '<input type="submit" name="ID" id="' . $key . '" style="background-color:' . $color . '" value="Relay ' . ( $key + 1 ) . '">' );
		echo( "</form></p>" );
	}
	?>
	<br>
</body>
</html>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>Documento senza titolo</title>
</head>
<body>
        <?php
        function zerificabinario( $rel )
        { //function to add a 0 to the beginning of the binary
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
                $statorele = shell_exec( '/usr/sbin/i2cget -y 1 0x23' );
                if (empty($statorele)) {

                        die("<h1>La multipresa sembra scollegata!</h1>");
                        }
                $relays = zerificabinario( base_convert( $statorele, 16, 2 ) );
                $arrRelays = str_split( $relays );
                return ( $arrRelays );
        }
        echo( "<br>" );
        caricastatorelays();
        if ( isset( $_POST[ "ID" ] ) )
        {
                $toggle = $_POST[ "ID" ];
                if ($toggle == "OnAll") shell_exec( 'i2cset -y 1 0x23 0x00' );
                if ($toggle == "OffAll") shell_exec( 'i2cset -y 1 0x23 0xff' );
                if (($toggle != "OnAll") && ($toggle != "OffAll"))
                {
                $toggle = ( substr( $toggle, -1, 1 ) ) - 1;
                $changedValue = ( 0 == $arrRelays[ $toggle ] ) ? '1' : '0';
                $arrRelays = array_replace( [], $arrRelays, [ $toggle => $changedValue ] );
                $newrelaystatus = base_convert(implode( $arrRelays ), 2, 16 );
                shell_exec( 'i2cset -y 1 0x23 0x' . $newrelaystatus );
                }
                // !!!!! change 0x23 with I2C addres of your relays board
                caricastatorelays();
                header( 'Location: ' . $_SERVER[ 'PHP_SELF' ] ); // make a redirect to empty post data. in case of reload of the page i don't wont to re-toggle last action
        }
        ?>
        <br>
<table>
<tr>
        <td>

        <?php

        foreach ( $arrRelays as $key => $valore )
        {   //create a form for every relay and his button
                echo( "<p><form  method='post' style='width: 300px;margin: 0mx;'>" );
                $color = ( 0 == $valore ) ? '#f009' : '#fff';
                echo( '<input type="submit" name="ID" id="' . $key . '" style="background-color:' . $color . '" value="Relay ' . ( $key + 1 ) . '">' );
                echo( "</form></p>" );
        }
?>
</td>
<td>
<p><form  method='post' style='width: 300px;margin: 0mx;'>
<input type="submit" name="ID" id="" style="background-color:''" value="OnAll">
</form></p>
<p><form  method='post' style='width: 300px;margin: 0mx;'>
<input type="submit" name="ID" id="" style="background-color:''" value="OffAll">
</form></p>

</td>
</tr>
        <br>
</body>
</html>

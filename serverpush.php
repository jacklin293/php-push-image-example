<?php
$boundary = 'thisIsTheBoundary';

header( "Content-Type: multipart/x-mixed-replace; boundary=\"$boundary\"\r\n" );

echo "--$boundary\n" ;

for( $i=1 ; $i<= 10 ; $i++ )
{
        echo 'Content-Type: image/jpeg'."\n\n";

        echo file_get_contents( "images/$i.jpg" );

        echo "\n--$boundary\n" ;

        flush();
        sleep(1);
}
?>

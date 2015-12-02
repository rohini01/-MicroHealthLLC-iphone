<?php
	$connection = mysql_connect("localhost", "siliconw_micro", "modem123silicon");
	$db = mysql_select_db("siliconw_micro", $connection);
  	$query = sprintf( 'SELECT * FROM user' );
  	$result = mysql_query( $query, $link ) or die( mysql_error( $link ) );
    header( 'Content-Type: text/csv' );
  	header( 'Content-Disposition: attachment;filename=exportusers.csv' );
    $row = mysql_fetch_assoc( $result );
  	if ( $row )
  	{
    echocsv( array_keys( $row ) );
  	}
  
  while ( $row )
  {
    echocsv( $row );
    $row = mysql_fetch_assoc( $result );
  }
  
  function echocsv( $fields )
  {
    $separator = '';
    foreach ( $fields as $field )
    {
      if ( preg_match( '/\\r|\\n|,|"/', $field ) )
      {
        $field = '"' . str_replace( '"', '""', $field ) . '"';
      }
      echo $separator . $field;
      $separator = ',';
    }
    echo "\r\n";
  }
?>


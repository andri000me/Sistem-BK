<?php
include '../konek.php';
$nisn = $_GET['nisn'];
mysql_query("DELETE FROM login WHERE nisn='$nisn'")or die(mysql_error());
mysql_query("DELETE FROM bio WHERE nisn='$nisn'")or die(mysql_error());
mysql_query("DELETE FROM smt1 WHERE nisn='$nisn'")or die(mysql_error());
mysql_query("DELETE FROM smt2 WHERE nisn='$nisn'")or die(mysql_error());
mysql_query("DELETE FROM smt3 WHERE nisn='$nisn'")or die(mysql_error());
mysql_query("DELETE FROM smt4 WHERE nisn='$nisn'")or die(mysql_error());
mysql_query("DELETE FROM smt5 WHERE nisn='$nisn'")or die(mysql_error());

?>

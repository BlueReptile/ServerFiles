<?php
$gotIt;
$file = "updatepls.bat";
exec( $file, $gotIt );
echo implode("<br>",$gotIt);
?>

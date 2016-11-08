<?php
require_once('contentManagement.php');
$query = contentManagement::getRole();




foreach($query as $test ){
echo $test['roleName'];
echo "<br/>";

}

?>
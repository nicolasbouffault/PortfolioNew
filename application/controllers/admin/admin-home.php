<?php
//admin-home controller

//restrict access to the admin pages
probeAdmin();



//include files
include(VIEWS.'header.php');
include(VIEWS.'admin/admin-home.php');
include(VIEWS.'footer.php');


?>
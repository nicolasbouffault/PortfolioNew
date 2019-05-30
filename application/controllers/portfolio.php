<?php
//portfolio controller

include(DATA.'portfolio.php');

//get infos from portfolio
$portfolio = getPortfolio();






//include files
include(VIEWS.'header.php');
include(VIEWS.'portfolio.php');
include(VIEWS.'footer.php');

?>
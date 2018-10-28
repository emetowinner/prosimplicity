<?php
require_once('../../private/initialize.php');
$page_title = "admin_homepage";
include_once(SHARED_PATH .'/admin_header.php');

?>

    <div id="content">
    	<div id="main-menu">
    		<h1>Main Menu</h1>
    			<ul>
    				<li><a href="subjects/index.php" >Subjects</a></li>
    				<li><a href="pages/index.php" >Pages</a></li>
    				<li><a href="view.php" >contact</a></li>
    			</ul>
    	</div>
    </div>

<?php include_once(SHARED_PATH .'/admin_footer.php');?>
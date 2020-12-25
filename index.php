<?php
    include_once 'td_includes.php';
?>
<!DOCTYPE html>
<html>
<head>
	<?php
    	include_once 'main_title.php';
       	include_once 'pluggins_header.php';        
    ?>
</head>
<body>
	<?php
	    include_once 'header.php';
    ?>
    <?php
    	if ($_GET['page']=="home" || $_GET['page']=="") {
	    		include_once 'view/mvps_home.php';

	    	}elseif ($_GET['page']=="about-us") {
	    		include_once 'view/mvps_about_us.php';

	    	}elseif ($_GET['page']=="gallery") {
	    		include_once 'view/mvps_gallery.php';

	    	}elseif ($_GET['page']=="annual-function") {
	    		include_once 'view/mvps_gallery_annual_function.php';

	    	}elseif ($_GET['page']=="independence-day") {
	    		include_once 'view/mvps_gallery_independence_day.php';

	    	}elseif ($_GET['page']=="republic-day") {
	    		include_once 'view/mvps_gallery_republic_day.php';

	    	}elseif ($_GET['page']=="school-activities") {
	    		include_once 'view/mvps_gallery_school_activities.php';

	    	}elseif ($_GET['page']=="school-picnic") {
	    		include_once 'view/mvps_gallery_school_picnic.php';

	    	}elseif ($_GET['page']=="science-exibition") {
	    		include_once 'view/mvps_gallery_science_exibition.php';

	    	}elseif ($_GET['page']=="sports-day") {
	    		include_once 'view/mvps_gallery_sports_day.php';

	    	}elseif ($_GET['page']=="parents-section") {
	    		include_once 'view/mvps_parents_page.php';

	    	}elseif ($_GET['page']=="admission") {
	    		include_once 'view/mvps_admissions.php';

	    	}elseif ($_GET['page']=="overview") {
	    		include_once 'view/mvps_overview.php';

	    	}elseif ($_GET['page']=="parents-section") {
	    		include_once 'view/mvps_parents_section.php';

	    	}elseif ($_GET['page']=="downloads") {
	    		include_once 'view/mvps_downloads.php';

	    	}elseif ($_GET['page']=="contact-us") {
	    		include_once 'view/mvps_contact_us.php';

	    	}
	    	else{
	    		include_once 'view/mvps_error_404.php';
	    	}

	    	include_once 'footer.php';
	    	?>
		<?php
			include_once 'pluggins_footer.php';
		?>
</body>
</html>
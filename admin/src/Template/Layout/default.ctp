<?php
$this->append('script');

$urls = [
    'getStates' => $this->Url->build(['controller'=>'States','action'=>'getStates']),
    'getCities' => $this->Url->build(['controller'=>'Cities','action'=>'getCities']),
    'getAreas'  => $this->Url->build(['controller'=>'Areas' ,'action'=>'getAreas']),
];

// Create the Gobal GEOLIC JS Object To pass various Information to client Side JS
$geolic = array(
    'URL'   => $urls
);
?>
<script type="text/javascript">
    GEOLIC = <?php echo json_encode($geolic); ?>
</script>
<?php
$this->end();

?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		
	</title>
	<?php
		echo $this->Html->meta('icon');
                echo $this->Html->meta('viewport'   ,'width=device-width, initial-scale=1.0');

		echo $this->Html->css(array(
                    'bootstrap.min',
                    '/js/jquery-ui/jquery-ui-1.10.1.custom.min',
                    '/js/bootstrap-datepicker/css/datepicker.css',
                    'bootstrap-reset',
                    'font-awesome.min',
                    '/js/jvector-map/jquery-jvectormap-1.2.2',
                    'clndr',
                    '/js/css3clock/css/style',
                    '/js/morris-chart/morris',
                    '/js/iCheck/skins/square/square.css',
                    '/js/jquery-tags-input/jquery.tagsinput.css',
                    '/js/select2/select2.css',
                    'jquery.stepsc4ca.css',
                    'style',
                    'style-responsive',
                    'custom',
                ));
        
                echo $this->Html->script(array(
                    'jquery',
                    'jquery-ui/jquery-ui-1.10.1.custom.min',
                    'jquery-tags-input/jquery.tagsinput.js',
                    'select2/select2.js',
                    'bootstrap.min',
                    'jquery.dcjqaccordion.2.7', // Accordian Menu @ Sidbar 
                   // 'https://maps.googleapis.com/maps/api/js',
                    'iCheck/jquery.icheck.js',
                    'jquery-steps/jquery.steps.js',
                    'jquery.validate.min.js',
                    //'bootstrap-datepicker/js/bootstrap-datepicker.js',
                    //'bootstrap-datetimepicker/js/bootstrap-datetimepicker.js',
                    'scripts',
                ));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
<section id="container">
    <?php echo $this->Element('header'); // Include the Header ?>
    <?php 
        /**
         * 
         * Render the Proper side bar for the User
         */
       
        switch($current_user['role']){
            case 'agent':
                echo $this->Element('sidebar/agent_sidebar');
                break;
            case 'do':
                echo $this->Element('sidebar/do_sidebar');
                break;
            case 'admin':
            case 'super_admin':
                echo $this->Element('sidebar/admin_sidebar');
                break;
        }
    ?>
    <section id="main-content">
    <section class="wrapper">
        <?= $this->Flash->render(); ?>
        <?php 
            if($showBreadcrumb && count($breadcrumbs)>0)
                echo $this->Element('breadcrumb',$breadcrumbs);
        ?>
        <?php echo $this->fetch('content'); ?>
    </section>
    </section>
    <?php //echo $this->element('sql_dump'); ?>
</section>
<div id="exe"></div>
</body>
</html>

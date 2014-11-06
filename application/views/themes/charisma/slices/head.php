    <meta charset="UTF-8">
    <title><?php if (!empty($title)) echo $title.' | '; ?> Admin</title>
    
    <?php echo view_port(); ?>
    <?php echo $meta; ?>

    <!-- The styles -->
    <link id="bs-css" href="<?php echo base_url();?>assets/charisma/css/bootstrap-cerulean.min.css" rel="stylesheet">

    <?php echo add_css(
        array(
            'charisma/css/charisma-app',
            'charisma/bower_components/fullcalendar/dist/fullcalendar',
            'charisma/bower_components/fullcalendar/dist/fullcalendar.print',
            'charisma/bower_components/chosen/chosen.min',
            'charisma/bower_components/colorbox/example3/colorbox',
            'charisma/bower_components/responsive-tables/responsive-tables',
            'charisma/bower_components/bootstrap-tour/build/css/bootstrap-tour.min',
            'charisma/css/jquery.noty',
            'charisma/css/noty_theme_default',
            'charisma/css/elfinder.min',
            'charisma/css/elfinder.theme',
            'charisma/css/jquery.iphone.toggle',
            'charisma/css/uploadify',
            'charisma/css/animate.min'
        )
    ); 
    ?>
  
    <?php echo $css; ?>

    <!-- jQuery -->
    <?php echo add_js('charisma/bower_components/jquery/jquery.min'); ?>
    

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/charisma/img/favicon.ico">
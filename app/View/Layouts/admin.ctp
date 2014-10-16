<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CRM | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <?php
			echo $this->Html->css('bootstrap.min.css');
			echo $this->Html->css('font-awesome.min.css');
			echo $this->Html->css('ionicons.min.css');
			echo $this->Html->css('morris.css');
			echo $this->Html->css('jquery-jvectormap-1.2.2.css');
			echo $this->Html->css('datepicker3.css');
			echo $this->Html->css('daterangepicker-bs3.css');
			echo $this->Html->css('bootstrap3-wysihtml5.min.css');
			echo $this->Html->css('AdminLTE.css');
			echo $this->Html->css('dataTables.bootstrap.css');
			
        ?>
     

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <?php require_once('top_header.ctp');?>
        <div class="wrapper row-offcanvas row-offcanvas-left">
           
           <!--Left Side bar -->
			<?php require_once("left_sidebar.ctp");?>
           <!--Left Side bar end -->

            <!-- Right side column. Contains the navbar and content of the page -->
            <?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->

		<?php
			echo $this->Html->script('themejs/jquery.min.js');
			echo $this->Html->script('themejs/bootstrap.min.js');
			echo $this->Html->script('themejs/raphael-min.js');
			echo $this->Html->script('themejs/jquery-ui-1.10.3.min.js');
			echo $this->Html->script('themejs/morris.min.js');
			echo $this->Html->script('themejs/jquery.sparkline.min.js');
			echo $this->Html->script('themejs/jquery-jvectormap-1.2.2.min.js');
			echo $this->Html->script('themejs/jquery-jvectormap-world-mill-en.js');
			echo $this->Html->script('themejs/jquery.knob.js');
			echo $this->Html->script('themejs/daterangepicker.js');
			echo $this->Html->script('themejs/bootstrap-datepicker.js');
			echo $this->Html->script('themejs/bootstrap3-wysihtml5.all.min.js');
			echo $this->Html->script('themejs/icheck.min.js');
			echo $this->Html->script('themejs/app.js');
			echo $this->Html->script('themejs/dashboard.js');
			
		?>


    </body>
</html>

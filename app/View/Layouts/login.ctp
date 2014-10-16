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
        ?>
     

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">

			
			<?php echo $this->fetch('content'); ?>
		
	
</body>
</html>

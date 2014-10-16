<?php
/** CSS for Datatable **/
echo $this->Html->css('datatable/jquery.dataTables');

/** Jquery and JS for Datatable **/
echo $this->Html->script('datatable/jquery');
echo $this->Html->script('datatable/jquery.dataTables');
echo $this->Html->script('datatable/shCore');
echo $this->Html->script('datatable/demo');
?>
<aside class="right-side">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Company Management
        <small>Company panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
    
    
</section>


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">
                    Company List
                    </h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                    
    <?php
    $show_company = array();
    $sr = 0;
    foreach($companies as $company) {
        $show_company[$sr] = array($company['Usermeta']['firstname'].' '.$company['Usermeta']['lastname'],
                                   $company['Usermeta']['address_lineone']. ' '.$company['Usermeta']['address_linetwo'], 
                                   $company['Usermeta']['contact_number']
                                );
    }
    ?>
    <script>
    var j = jQuery.noConflict();
        j(document).ready(function() {
            j('#show_companies').html( '<table cellpadding="0" cellspacing="0" border="0" class="display" id="company"></table>' );
            j('#company').dataTable( {
                    "data": <?php echo json_encode($show_company,true);?>,
                    "columns": [
                            { "title": "Owner Name" },
                            { "title": "Address" },
                            { "title": "Contact Number" },
                    ]
            } );	
    } );
    </script>
<div id="show_companies"></div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

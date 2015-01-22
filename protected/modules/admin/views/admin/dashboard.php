<div class="container-fluid">
	<div class="page-header">
	    <div class="pull-left">
	        <h1>Dashboard</h1>
	    </div>
	</div>
	<div class="breadcrumbs">
	    <ul>
	        <li><?php echo CHtml::link('Home',Yii::app()->baseUrl.'/admin');?></li>
	    </ul>
	    <div class="close-bread"><a href="#"><i class="icon-remove"></i></a></div>
	</div>
	<div class="row-fluid">
	    <div class="span12">
	        <div class="box box box-color box-bordered">
	            <div class="box-title">
	                <h3><i class="icon-table"></i>Last Login Details</h3>
	            </div>
	            <div class="box-content nopadding">
	                <table class="table table-hover table-nomargin table-bordered">
	                    <thead>
	                        <tr>                            
	                            <th>Login</th>
	                            <th>Logout</th>
	                            <th class="hidden-350">IP</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                        <tr> 
	                        	<?php if(is_object($accessLog)){?>                           
		                            <td><?php echo date("M d, Y  h:i:s A",strtotime($accessLog->adminAccessLoginTime));?></td>
		                            <td><?php if($accessLog->adminAccessLogoutTime != '0000-00-00 00:00:00'){echo date("M d, Y  h:i:s A",strtotime($accessLog->adminAccessLogoutTime));}else{echo "N/A";}?></td>
		                            <td class="hidden-350"><?php echo $accessLog->adminAccessLoginIP;?></td>
	                            <?php }else{ ?>
	                            	<td colspan="3">No record found.</td>
	                            <?php } ?>
	                        </tr>
	                    </tbody>
	                </table>
	            </div>
	        </div>
	    </div>
	</div>                
</div>
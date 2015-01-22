<div class="short-pagination">
    <ul>
        <li>Search Result: <a href="#"><?php if(isset($_GET['location'])){echo $_GET['location'];}elseif(isset($_GET['category'])){ echo $_GET['category'];}?></a></li>
        <li>
            <span>Sort By</span>    
            <div class="drop_outer">    
                <div class="drop1">     
                    <?php echo CHtml::dropDownList('sortBy','',array('featured'=>'Featured','popular'=>'Most Popular'),array('class'=>'select-cat sortBy'));?>
                </div>
            </div>
        </li>
        <li>
            <span>Show</span>   
            <div class="drop_outer1">   
                <div class="drop1">
                    <?php echo CHtml::dropDownList('perPage','',array('3'=>'3','6'=>'6','9'=>'9','12'=>'12','15'=>'15','18'=>'18','27'=>'27','36'=>'36'),array('class'=>'select-cat perPage'));?>
                </div>
            </div>
        </li>
        <li class="spcl">
            <div class="pager-outer">
                <?php 
                    $pager = $this->widget('CLinkPager', array(
                          'pages'=>$pages,
                          'header'=>'<span>per page</span>',
                          'maxButtonCount'=>2,
                          'prevPageLabel'=>'<',
                          'nextPageLabel'=>'>',
                          'htmlOptions'=>array(
                                'class'=>'pagination'
                            ),
                    ));
                ?>
            </div>
        </li>
    </ul>
</div>
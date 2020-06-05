<div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu Begin -->

    <div class="panel-heading"><!-- panel-heading Begin -->

        <h3 class="panel-title"><strong>By Price</strong></h3>

    </div><!-- panel-heading Finish -->

    <div class="panel-body"><!-- panel-body Begin -->

        <div align="center">  
            <input type="range" min="1" max="100" step="5" value="1" id="min_price" name="min_price" />  
            <span id="price_range"></span>  
        </div>  

    </div><!-- panel-body Finish -->

    <div class="panel-heading"><!-- panel-heading Begin -->

        <h3 class="panel-title"><strong>By Device</strong></h3>
    
    </div><!-- panel-heading Finish -->

    <div class="panel-body"><!-- panel-body Begin -->
        
        <ul class="nav nav-pills nav-stacked category-menu"><!-- nav nav-pills nav-stacked category-menu Begin -->

            <?php getDevices(); ?>
        
        </ul><!-- nav nav-pills nav-stacked category-menu Finish -->
    
    </div><!-- panel-body Finish -->
    
    <div class="panel-heading"><!-- panel-heading Begin -->

        <h3 class="panel-title"><strong>By Types</strong></h3>
    
    </div><!-- panel-heading Finish -->
    
    <div class="panel-body"><!-- panel-body Begin -->
        
        <ul class="nav nav-pills nav-stacked category-menu"><!-- nav nav-pills nav-stacked category-menu Begin -->

            <?php getTypes(); ?>
            
        </ul><!-- nav nav-pills nav-stacked category-menu Finish -->
    
    </div><!-- panel-body Finish -->

</div><!-- panel panel-default sidebar-menu Finish -->

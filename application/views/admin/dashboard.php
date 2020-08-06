start: Content -->
<div id="content" class="span10">


    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="<?php echo base_url('dashoard')?>">Home</a> 
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Dashboard</a></li>
    </ul>

    <div class="row-fluid hideInIE8 circleStats">

        <div class="span2" onTablet="span4" onDesktop="span2">
            <div class="circleStatsItemBox yellow">
                <div class="header">No of Users</div>
                <!-- <span class="percent">percent</span> -->
                <div class="circleStat">
                    <input type="text" value="<?php echo $users_number; ?>" class="whiteCircle" />
                </div>		
            </div>
        </div>

        <div class="span2" onTablet="span4" onDesktop="span2">
            <div class="circleStatsItemBox green">
                <div class="header">No of Products</div>
                <!-- <span class="percent">percent</span> -->
                <div class="circleStat">
                    <input type="text" value="<?php echo $products_number; ?>" class="whiteCircle" />
                </div>
            </div>
        </div>

    </div>		<!--/row-->



</div><!--/.fluid-container-->

<!-- end: Content
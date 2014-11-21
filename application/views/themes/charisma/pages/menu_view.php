<div >
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            Menu Master
        </li>
</div>

  
 <div class="row">
    <?php
    if($menu != null):
    $i = 1;
    foreach($menu as $row):
    ?>
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-original-title="<?php echo $row->name;?>" data-toggle="tooltip" title="" class="well top-block" href="<?php echo site_url ($row->path); ?>">
		    <i class="<?php echo $row->icon;?> blue"></i>
            <div><?php echo $row->name;?></div>
        </a>
    </div>
    <?php
    if($i%4 == 0):
        echo "</div><div class='row'>";
    endif;
    ++$i;
    endforeach;
    else:
        echo "<h3>No Menu Selected";
    endif;
    ?>
</div>
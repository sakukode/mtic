<div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">
                        
                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <?php
                        $menu = menu_group();
                        if($menu !=null):
                        foreach($menu as $m):
                        ?>
                        <li>
                            <a class="ajax-link" href="<?php echo site_url($m->path);?>"><i
                            class="<?php echo $m->icon;?>"></i><span> <?php echo $m->group_name;?></span></a>
                        </li>
                        <?php
                        endforeach;
                        endif;
                        ?>                     
                    </ul>
                    
                </div>
            </div>
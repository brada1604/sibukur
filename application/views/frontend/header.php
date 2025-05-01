
<div class="container-fluid nav-bar bg-transparent">
    <nav class="main-nav navbar navbar-expand-lg bg-white navbar-light py-0">
        <div class="container px-4">
            <a href="<?php echo site_url();?>" class="logo navbar-brand">
                <img src="<?php echo base_url().'theme/images/'.$logo;?>" alt="logo kampung pegat bukur" style="height: 100%;">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="clearlist navbar-nav ms-auto">
                    		
							<?php 
                                $query = $this->db->get_where('tbl_navbar', array('navbar_parent_id' => 0));
                                if($query->num_rows() > 0):
                            ?>	
                            <?php foreach ($query->result() as $row):?>
                            <?php 
                                    $nav_id=$row->navbar_id;
                                    $query2 = $this->db->get_where('tbl_navbar', array('navbar_parent_id' => $nav_id));
                            ?>
                            <?php if($query2->num_rows() > 0):?>
                                <li class="nav-item dropdown">
                                    <a href="<?php echo site_url($row->navbar_slug);?>" class="menu-down nav-link dropdown-toggle"><?php echo $row->navbar_name;?> </a>
                
                                    <!-- Sub -->
                                    <ul class="nav-sub dropdown-menu rounded-0 m-0">
                                        <?php foreach ($query2->result() as $row2):?>
                                        <li>
                                            <a href="<?php echo site_url($row2->navbar_slug);?>" class="dropdown-item"><?php echo $row2->navbar_name;?></a>	
                                        </li>
                                        <?php endforeach;?>
                                    </ul>
                                    <!-- End Sub -->
                                    
                                </li>
                                <?php else:?>
                                <li>
                                    <a href="<?php echo site_url($row->navbar_slug);?>" class="nav-item nav-link"><?php echo $row->navbar_name;?></a>	
                                </li>
                                <?php endif;?>
                            <?php endforeach;?>
                            <?php else:?>
                            <li>
                                <a href="#">Belum ada menu</a>		
                            </li>
                            <?php endif;?>

                </ul>
            </div>
        </div>
    </nav>
</div>
                


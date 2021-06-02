
        <li>
          <a href="<?php echo base_url()?>index.php/welcome">
            <i class="fa fa-home"></i> <span>Beranda</span>
          </a>
        </li>



        <?php 
        if($this->session->userdata('level')=='1')//admin
        {
        ?>

        <li>
          <a href="#" onclick="eksekusi_controller('<?php echo base_url()?>index.php/admin/data_admin','Master Admin');return false;">
            <i class="fa fa-lock"></i> <span>Master Admin</span>
          </a>
        </li>

        
        <li>
          <a href="#" onclick="eksekusi_controller('<?php echo base_url()?>index.php/semua/data_guru','Master Guru');return false;">
            <i class="fa fa-lock"></i> <span>Master Guru</span>
          </a>
        </li>




        <?php 
          }

          if($this->session->userdata('level')=='2')//kadis
        {
          ?>



        
        <li class="treeview">
          
          <a href="#"><i class="fa fa-files-o"></i> <span>Data Usulan</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>

          <ul class="treeview-menu">

            
            <li>
              <a href="#" onclick="eksekusi_controller('<?php echo base_url()?>index.php/semua/data_usulan/<?php echo date('Y')?>',' Upload Dokumen <?php echo date('Y')?>');return false;">
                  <i class="fa fa-file-o"></i> <?php echo date('Y')?>
              </a>
            </li>

            <li>
              <a href="#" onclick="eksekusi_controller('<?php echo base_url()?>index.php/semua/data_usulan/<?php echo date('Y')-1?>',' Upload Dokumen <?php echo date('Y')-1?>');return false;">
                  <i class="fa fa-file-o"></i> <?php echo date('Y')-1?>
              </a>
            </li>

            <li>
              <a href="#" onclick="eksekusi_controller('<?php echo base_url()?>index.php/semua/data_usulan/<?php echo date('Y')-2?>',' Upload Dokumen <?php echo date('Y')-2?>');return false;">
                  <i class="fa fa-file-o"></i> <?php echo date('Y')-2?>
              </a>
            </li>


            
          </ul>
        </li>


        
        <li class="treeview">
          
          <a href="#"><i class="fa fa-files-o"></i> <span>Usulan Selesai</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>

          <ul class="treeview-menu">

            
            <li>
              <a href="#" onclick="eksekusi_controller('<?php echo base_url()?>index.php/semua/data_usulan_siap_cetak/<?php echo date('Y')?>',' Upload Dokumen <?php echo date('Y')?>');return false;">
                  <i class="fa fa-file-o"></i> <?php echo date('Y')?>
              </a>
            </li>

            <li>
              <a href="#" onclick="eksekusi_controller('<?php echo base_url()?>index.php/semua/data_usulan_siap_cetak/<?php echo date('Y')-1?>',' Upload Dokumen <?php echo date('Y')-1?>');return false;">
                  <i class="fa fa-file-o"></i> <?php echo date('Y')-1?>
              </a>
            </li>

            <li>
              <a href="#" onclick="eksekusi_controller('<?php echo base_url()?>index.php/semua/data_usulan_siap_cetak/<?php echo date('Y')-2?>',' Upload Dokumen <?php echo date('Y')-2?>');return false;">
                  <i class="fa fa-file-o"></i> <?php echo date('Y')-2?>
              </a>
            </li>


            
          </ul>
        </li>


      <?php 
          }

          if($this->session->userdata('level')=='3')//sekdis
        {
          ?>


        
        <li class="treeview">
          
          <a href="#"><i class="fa fa-files-o"></i> <span>Data Usulan</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>

          <ul class="treeview-menu">

            
            <li>
              <a href="#" onclick="eksekusi_controller('<?php echo base_url()?>index.php/semua/data_usulan/<?php echo date('Y')?>',' Upload Dokumen <?php echo date('Y')?>');return false;">
                  <i class="fa fa-file-o"></i> <?php echo date('Y')?>
              </a>
            </li>

            <li>
              <a href="#" onclick="eksekusi_controller('<?php echo base_url()?>index.php/semua/data_usulan/<?php echo date('Y')-1?>',' Upload Dokumen <?php echo date('Y')-1?>');return false;">
                  <i class="fa fa-file-o"></i> <?php echo date('Y')-1?>
              </a>
            </li>

            <li>
              <a href="#" onclick="eksekusi_controller('<?php echo base_url()?>index.php/semua/data_usulan/<?php echo date('Y')-2?>',' Upload Dokumen <?php echo date('Y')-2?>');return false;">
                  <i class="fa fa-file-o"></i> <?php echo date('Y')-2?>
              </a>
            </li>


            
          </ul>
        </li>

  <li class="treeview">
          
          <a href="#"><i class="fa fa-files-o"></i> <span>Usulan Selesai</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>

          <ul class="treeview-menu">

            
            <li>
              <a href="#" onclick="eksekusi_controller('<?php echo base_url()?>index.php/semua/data_usulan_siap_cetak/<?php echo date('Y')?>',' Upload Dokumen <?php echo date('Y')?>');return false;">
                  <i class="fa fa-file-o"></i> <?php echo date('Y')?>
              </a>
            </li>

            <li>
              <a href="#" onclick="eksekusi_controller('<?php echo base_url()?>index.php/semua/data_usulan_siap_cetak/<?php echo date('Y')-1?>',' Upload Dokumen <?php echo date('Y')-1?>');return false;">
                  <i class="fa fa-file-o"></i> <?php echo date('Y')-1?>
              </a>
            </li>

            <li>
              <a href="#" onclick="eksekusi_controller('<?php echo base_url()?>index.php/semua/data_usulan_siap_cetak/<?php echo date('Y')-2?>',' Upload Dokumen <?php echo date('Y')-2?>');return false;">
                  <i class="fa fa-file-o"></i> <?php echo date('Y')-2?>
              </a>
            </li>


            
          </ul>
        </li>


      <?php 
          }

          if($this->session->userdata('level')=='4')//tim teknis
        {
          ?>


        
        <li class="treeview">
          
          <a href="#"><i class="fa fa-files-o"></i> <span>Data Usulan</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>

          <ul class="treeview-menu">

            
            <li>
              <a href="#" onclick="eksekusi_controller('<?php echo base_url()?>index.php/semua/data_usulan/<?php echo date('Y')?>',' Upload Dokumen <?php echo date('Y')?>');return false;">
                  <i class="fa fa-file-o"></i> <?php echo date('Y')?>
              </a>
            </li>

            <li>
              <a href="#" onclick="eksekusi_controller('<?php echo base_url()?>index.php/semua/data_usulan/<?php echo date('Y')-1?>',' Upload Dokumen <?php echo date('Y')-1?>');return false;">
                  <i class="fa fa-file-o"></i> <?php echo date('Y')-1?>
              </a>
            </li>

            <li>
              <a href="#" onclick="eksekusi_controller('<?php echo base_url()?>index.php/semua/data_usulan/<?php echo date('Y')-2?>',' Upload Dokumen <?php echo date('Y')-2?>');return false;">
                  <i class="fa fa-file-o"></i> <?php echo date('Y')-2?>
              </a>
            </li>


            
          </ul>
        </li>

  <li class="treeview">
          
          <a href="#"><i class="fa fa-files-o"></i> <span>Usulan Selesai</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>

          <ul class="treeview-menu">

            
            <li>
              <a href="#" onclick="eksekusi_controller('<?php echo base_url()?>index.php/semua/data_usulan_siap_cetak/<?php echo date('Y')?>',' Upload Dokumen <?php echo date('Y')?>');return false;">
                  <i class="fa fa-file-o"></i> <?php echo date('Y')?>
              </a>
            </li>

            <li>
              <a href="#" onclick="eksekusi_controller('<?php echo base_url()?>index.php/semua/data_usulan_siap_cetak/<?php echo date('Y')-1?>',' Upload Dokumen <?php echo date('Y')-1?>');return false;">
                  <i class="fa fa-file-o"></i> <?php echo date('Y')-1?>
              </a>
            </li>

            <li>
              <a href="#" onclick="eksekusi_controller('<?php echo base_url()?>index.php/semua/data_usulan_siap_cetak/<?php echo date('Y')-2?>',' Upload Dokumen <?php echo date('Y')-2?>');return false;">
                  <i class="fa fa-file-o"></i> <?php echo date('Y')-2?>
              </a>
            </li>


            
          </ul>
        </li>


      <?php 
          }

          if($this->session->userdata('level')=='5')//guru
        {
          ?>


        
        <li class="treeview">
          
          <a href="#"><i class="fa fa-files-o"></i> <span>Upload Dokumen</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>

          <ul class="treeview-menu">

            
            <li>
              <a href="#" onclick="eksekusi_controller('<?php echo base_url()?>index.php/semua/data_dokumen/<?php echo date('Y')?>',' Upload Dokumen <?php echo date('Y')?>');return false;">
                  <i class="fa fa-file-o"></i> <?php echo date('Y')?>
              </a>
            </li>

            <li>
              <a href="#" onclick="eksekusi_controller('<?php echo base_url()?>index.php/semua/data_dokumen/<?php echo date('Y')-1?>',' Upload Dokumen <?php echo date('Y')-1?>');return false;">
                  <i class="fa fa-file-o"></i> <?php echo date('Y')-1?>
              </a>
            </li>

            <li>
              <a href="#" onclick="eksekusi_controller('<?php echo base_url()?>index.php/semua/data_dokumen/<?php echo date('Y')-2?>',' Upload Dokumen <?php echo date('Y')-2?>');return false;">
                  <i class="fa fa-file-o"></i> <?php echo date('Y')-2?>
              </a>
            </li>


            
          </ul>
        </li>


          <?php 
        }
          
          ?>

            

            

            

        
        
        <li>
          <a href="#">
             &nbsp;
          </a>
        </li>


            
           
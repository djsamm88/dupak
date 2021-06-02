
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 id="judul">
        Selamat datang 
        
      </h1>      
    </section>

    <!-- Main content -->
    <section class="content container-fluid" id="t4_isi">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->    
      
    
    <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Sistem Informasi Manajemen PAK </h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>


        

        <div class="box-body">
              
              <?php
              echo "Anda login sebagai : ".level($this->session->userdata('level'))."<br>";

              if($this->session->userdata('level')==5)//guru
              {
                $NIP = $this->session->userdata('user_admin');
                $q = $this->db->query("SELECT * FROM master_guru WHERE NIP='$NIP'");
                $dok=$q->result();
                ?>
                  <table class="table table-bordered table-striped" border="1">
                  <tr >
                    <td width="40%">Nama</td> <td><?php echo @$dok[0]->nama?></td>
                  </tr>

                  <tr>
                    <td>NIP,NUPTK</td> <td><?php echo @$dok[0]->NIP?>,<?php echo @$dok[0]->NUPTK?></td>
                  </tr>

                  <tr>
                    <td>Tempat dan Tanggal Lahir</td> <td><?php echo @$dok[0]->tempat_lahir?>,<?php echo @tanggalindo($dok[0]->tanggal_lahir)?></td>
                  </tr>

                  <tr>
                    <td>Jenis Kelamin</td> <td><?php echo @$dok[0]->jenis_kelamin?></td>
                  </tr>

                  <tr>
                    <td>Pendidikan yang telah diperhitungkan angka kreditnya</td> <td><?php echo @$dok[0]->pendidikan_ytdak?></td>
                  </tr>

                  <tr>
                    <td>Pangkat / Golongan Ruang / TMT</td> <td><?php echo @$dok[0]->pangkat?>/<?php echo @$dok[0]->golongan?>/<?php echo @$dok[0]->tmt_pangkat?></td>
                  </tr>

                  <tr>
                    <td>Jabatan Fungsional / TMT</td> <td><?php echo @$dok[0]->jabatan_fungsional?>/<?php echo @$dok[0]->tmt_jabatan?></td>
                  </tr>

                  <tr>
                    <td>Masa kerja golongan Lama</td> <td><?php echo @$dok[0]->masa_kerja_golongan_lama?></td>
                  </tr>


                  <tr>
                    <td>Masa kerja golongan Baru</td> <td><?php echo @$dok[0]->masa_kerja_golongan_baru?></td>
                  </tr>


                  <tr>
                    <td>Jenis Guru, Tugas</td> <td><?php echo @$dok[0]->jenis_guru_tugas?></td>
                  </tr>


                  <tr>
                    <td>Sertifikasi Guru sebagai</td> <td><?php echo @$dok[0]->sertifikasi_guru_sebagai?></td>
                  </tr>



                  <tr>
                    <td>Alamat Rumah</td> <td><?php echo @$dok[0]->alamat_rumah?></td>
                  </tr>



                  <tr>
                    <td>Alamat Sekolah</td> <td><?php echo @$dok[0]->alamat_sekolah?></td>
                  </tr>

                  
                </table>
                <?php 
              }else{
                echo "<pre>";
                print_r($this->session->userdata());

                echo "</pre>";
              }

              ?>


        </div>
        
      </div>
      <!-- /.box -->



</section>
    <!-- /.content -->

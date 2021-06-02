<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aplikasi Komoditi</title>
    <link rel='shortcut icon' href='//humbanghasundutankab.go.id/old/wp-content/uploads/favicon.ico' />
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url()?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="<?php echo base_url()?>dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>plugins/pace/pace.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/jqueryui.css">

  <link rel="stylesheet" href="<?php echo base_url()?>assets/datetimepicker/datetimepicker.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/toastr/toastr.min.css">

  <link rel="shortcut icon" type="image/x-icon" href="https://pakpakbharatkab.go.id/portal/icon.png" />

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

<style type="text/css">
  @media (min-width: 768px) {
    .modal-lg {
      width: 90%;
     max-width:1200px;
    }
  }
</style>

</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition login-page">
 <div class="login-logo">
    <a href=""><b>Sistem Informasi Komoditi<br></b>Kabupaten Pakpak Bharat</a>
</div>

    <section class="content container-fluid" id="">

<!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Harga terupdate</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
<div class="table-responsive" >
<table id="tgl_harga" class="table  table-striped table-bordered"  cellspacing="0" width="100%" >
      <thead>
        <tr>
              
              <th width="50px">No</th>
              <th width="200px">Kecamatan</th>                         
              <th width="200px">Kategori</th>                         
              <th>Komoditi</th>                                       
              <th>Harga</th>                         
              <th>Tanggal</th>                         
              <th>Action</th>                         
                             
              
        </tr>
      </thead>
      <tbody>
        <?php         
        $no = 0;
        foreach($all_harga as $x)
        {
          
          $no++;
          $btn = "<button id='detail' class='btn btn-primary btn-xs' onclick='modal_detail($x->id_kecamatan,$x->id_sub_kategori)'>Detail</button>";
          
            echo (" 
              
              <tr>
                <td>$no</td>
                <td>$x->nama_kecamatan</td>
                <td>$x->kategori</td>
                <td>$x->sub_kategori</td>
                <td>".rupiah($x->harga)."</td>
                <td>".tanggalindo($x->tanggal)."</td>
                <td>$btn</td>
              </tr>
          ");
          
        }
        
        
        ?>
      </tbody>
  </table>
</div>

</div>
</div>
</section>








    <!-- Main content -->
    <section class="content container-fluid" id="">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->    
      
    
    <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Sistem Informasi Manajemen Komoditi </h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>


        

        <div class="box-body">
              

              <div class="row">
              <div class="col-sm-6">
                <!-- small box -->
                <div class="small-box bg-blue">
                  <div class="inner text-center">
                    <h3>Termahal Terbaru</h3>

                  <p>
                      <?php echo strtoupper($m_terbaru_termahal[0]->sub_kategori)?> -
                      Rp.<?php echo rupiah($m_terbaru_termahal[0]->harga)?>/Kg <br>
                      <?php echo strtoupper($m_terbaru_termahal[0]->nama_kecamatan)?> <br>
                    <?php echo tanggalindo($m_terbaru_termahal[0]->tgl_update)?> 
                  </p>

                  </div>
                  <div class="icon">
                    <i class="fa fa-dollar"></i>
                  </div>                  
                </div>
              </div>
              <!-- ./col -->
              <div class="col-sm-6">
                <!-- small box -->
                <div class="small-box bg-green">
                  <div class="inner text-center">
                      <h3>Terluas Terbaru</h3>

                  <p>
                      <?php echo strtoupper($m_terbaru_terluas[0]->sub_kategori)?> -
                      <?php echo rupiah($m_terbaru_terluas[0]->luas_tanam)?> Ha <br>
                      <?php echo strtoupper($m_terbaru_terluas[0]->nama_kecamatan)?> <br>
                      <?php echo tanggalindo($m_terbaru_terluas[0]->tgl_update)?> 
                  </p>
                  
                  </div>
                  <div class="icon">
                    <i class="fa fa-dollar"></i>
                  </div>                  
                </div>
              </div>
              

              <!-- ./col -->
              <div class="col-sm-12">
                <!-- small box -->
                <div class="small-box bg-aqua">
                  <div class="inner text-center">
                     <h3>Terbanyak Terbaru</h3>

                  <p>
                      <?php echo strtoupper($m_terbaru_terbanyak_produksi[0]->sub_kategori)?> -
                      <?php echo rupiah($m_terbaru_terbanyak_produksi[0]->produksi)?> Ton <br>
                      <?php echo strtoupper($m_terbaru_terbanyak_produksi[0]->nama_kecamatan)?> <br>
                      <?php echo tanggalindo($m_terbaru_terbanyak_produksi[0]->tgl_update)?> 
                  </p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-dollar"></i>
                  </div>
                  
                </div>
              </div>
              <!-- ./col -->
            </div>


            


 <div class="row">
              <div class="col-sm-6">
                <!-- small box -->
                <div class="small-box bg-purple">
                  <div class="inner text-center">
                    <h4>Termahal Sepanjang Masa</h4>

                  <p>
                      <?php echo strtoupper($m_termahal_sepanjang_masa[0]->sub_kategori)?> -
                      Rp.<?php echo rupiah($m_termahal_sepanjang_masa[0]->harga)?>/Kg <br>
                      <?php echo strtoupper($m_termahal_sepanjang_masa[0]->nama_kecamatan)?> <br>
                    <?php echo tanggalindo($m_termahal_sepanjang_masa[0]->tgl_update)?> 
                  </p>

                  </div>
                  <div class="icon">
                    <i class="fa fa-dollar"></i>
                  </div>                  
                </div>
              </div>
              <!-- ./col -->
              <div class="col-sm-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                  <div class="inner text-center">
                      <h4>Terluas Sepanjang Masa</h4>

                  <p>
                      <?php echo strtoupper($m_terluas_sepanjang_masa[0]->sub_kategori)?> -
                      <?php echo rupiah($m_terluas_sepanjang_masa[0]->luas_tanam)?> Ha <br>
                      <?php echo strtoupper($m_terluas_sepanjang_masa[0]->nama_kecamatan)?> <br>
                      <?php echo tanggalindo($m_terluas_sepanjang_masa[0]->tgl_update)?> 
                  </p>
                  
                  </div>
                  <div class="icon">
                    <i class="fa fa-dollar"></i>
                  </div>                  
                </div>
              </div>
              

              <!-- ./col -->
              <div class="col-sm-12">
                <!-- small box -->
                <div class="small-box bg-red">
                  <div class="inner text-center">
                     <h4>Terbanyak Sepanjang Masa</h4>

                  <p>
                      <?php echo strtoupper($m_terbanyak_produksi_sepanjang_masa[0]->sub_kategori)?> -
                      <?php echo rupiah($m_terbanyak_produksi_sepanjang_masa[0]->produksi)?> Ton <br>
                      <?php echo strtoupper($m_terbanyak_produksi_sepanjang_masa[0]->nama_kecamatan)?> <br>
                      <?php echo tanggalindo($m_terbanyak_produksi_sepanjang_masa[0]->tgl_update)?> 
                  </p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-dollar"></i>
                  </div>
                  
                </div>
              </div>
              <!-- ./col -->
            </div>


            




        </div>
        
      </div>
      <!-- /.box -->



</section>
    <!-- /.content -->





<section class="content container-fluid" id="">


    
    <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">-</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>


        
          <div class="box-body">
              

<center>
  Copyright 2021 - <?php echo date('Y')?> Diskominfo Pakpak Bharat<br>
  <a href='<?php echo base_url()?>index.php/login'>Login</a>

</center>

</div>
</div>
</section>







<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Detail</h4>
      </div>
      <div class="modal-body" id="t4_isi">
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>




</body>
<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="<?php echo base_url()?>assets/jQuery/jquery-2.2.3.min.js"></script>
<script src="<?php echo base_url()?>assets/jqueryui.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->



<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="<?php echo base_url()?>bower_components/chart.js/Chart.js"></script>

<script src="<?php echo base_url()?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>


<!-- AdminLTE App -->
<script src="<?php echo base_url()?>dist/js/adminlte.min.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>bower_components/PACE/pace.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
<script type="text/javascript">
  var BASE_PATH = "<?php echo base_url()?>";
</script>
<script type="text/javascript" src="<?php echo base_url()?>js/notify.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/custom.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/dataTables.bootstrap.js"></script>


<script type="text/javascript" src="<?php echo base_url()?>assets/datetimepicker/datetimepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/datetimepicker/datetimepicker.pt-BR.js"></script>


<script type="text/javascript" src="<?php echo base_url()?>assets/toastr/toastr.min.js"></script>

<style type="text/css">
  .modal-ku {
    width: 750px;
    margin: auto;
  }
</style>
<script type="text/javascript">
  
$(document).ready(function(){

  $('#tgl_harga').dataTable();

});


function modal_detail(id_kecamatan,id_sub_kategori)
{
  console.log(id_sub_kategori);
  $.get("<?php echo base_url()?>index.php/luar/tbl_detail_by_id_kec_id_sub",{id_kecamatan:id_kecamatan,id_sub_kategori:id_sub_kategori},function(e){
    console.log(e);
    $("#t4_isi").html(e);
    $("#myModal").modal('show');
  })
}
</script>

</body>
</html>
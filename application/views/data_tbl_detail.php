
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 id="judul">
        ---
      </h1>      
    </section>

    <!-- Main content -->
    <section class="content container-fluid" >

      <!--------------------------
        | Your Page Content Here |
        -------------------------->    
<!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Aplikasi</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
              <button class="btn btn-primary" id="tambah_data"  onclick="tambah_tbl_detail()">Tambah Data</button><div class="table-responsive"> 
      <table id="tbl_newsnya" class="table  table-striped table-bordered"  cellspacing="0" width="100%">
      <thead>
        <tr>
              
              <th>No</th>
              <th>Kategori</th>           
              <th>Komoditi</th>                         
              <th>Kecamatan</th>                         
              <th>Desa</th>                                                       
              <th>Luas</th>                         
              <th>Masa Tanam</th>                         
              <th width="100px">Pupuk/Sak</th>                         
              <th>Produksi</th>                         
              <th>Tgl Update</th>                         
              <th>Gambar</th>
              <th>Action</th>
              
        </tr>
      </thead>
      <tbody>
        <?php         
        $no = 0;
        foreach($all_tbl_detail as $x)
        {
          $btn = "<button class='btn btn-warning btn-xs' onclick='edit($x->id);return false;'>Edit</button>
                  <button class='btn btn-danger btn-xs' onclick='hapus($x->id);return false;'>Hapus</button>    ";
          $no++;

          $all_pupuk_detail = $this->m_semua->m_pupuk_detail_by($x->id);

          $print_pupuk = "<div class='row'>";

          foreach ($all_pupuk_detail as $xx) {
            $print_pupuk .="<div class='col-sm-4'>$xx->nama_pupuk </div> <div class='col-xs-8'>$xx->jumlah Sak</div>";
          }
          $print_pupuk .= "</div>";

            echo (" 
              
              <tr>
                <td>$no</td>
                <td>$x->kategori</td>
                <td>$x->sub_kategori</td>
                <td>$x->nama_kecamatan</td>
                <td>$x->nama_desa</td>                
                <td>".rupiah($x->luas_tanam)." Ha</td>
                <td>Bulan ".rupiah($x->masa_tanam)."</td>
                <td>$print_pupuk</td>
                <td>".rupiah($x->produksi)." Ton</td>
                <td>$x->tgl_update</td>
                <td><img src='".base_url()."uploads/$x->gambar_detail' width='50px' height='50px'></td>
                <td>
                  $btn
                </td>
              </tr>
          ");
          
        }
        
        
        ?>
      </tbody>
  </table>
</div>

        </div>
        
      </div>
      <!-- /.box -->

</section>
    <!-- /.content -->




<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah</h4>
      </div>
      <div class="modal-body">
          <form id="form_tambah_admin">
            <input type="hidden" name="id" id="id" class="form-control" readonly="readonly">
            

            <div class="col-sm-4">Kategori</div>
            <div class="col-sm-8">
              <select name="id_kategori" id="id_kategori" class="form-control">
                  <option value=""> --- pilih Kategori --- </option>
                  <?php 
                    foreach ($all_kategori as $kat) {
                      echo '<option value="'.$kat->id.'"> '.$kat->kategori.' </option>';
                    }
                  ?>
              </select>
            </div>



            <div style="clear: both;"></div><br>

            <div class="col-sm-4">Sub Kategori</div>
            <div class="col-sm-8">
              <select name="id_sub_kategori" id="id_sub_kategori" class="form-control">
                  <option value=""> --- pilih Sub_Kategori --- </option>
                  <?php 
                    foreach ($all_sub_kategori as $sub_kat) {
                      echo '<option value="'.$sub_kat->id.'"> '.$sub_kat->sub_kategori.' </option>';
                    }
                  ?>
              </select>
            </div>
            <div style="clear: both;"></div><br>


             <div class="col-sm-4">Kecamatan</div>
            <div class="col-sm-8">
              <select name="id_kecamatan" id="id_kecamatan" class="form-control">
                  <option value=""> --- pilih Kecamatan --- </option>
                  <?php 
                    foreach ($all_kecamatan as $kec) {
                      echo '<option value="'.$kec->kode.'"> '.$kec->nama_kecamatan.' </option>';
                    }
                  ?>
              </select>
            </div>
            <div style="clear: both;"></div><br>


            <div class="col-sm-4">Desa</div>
            <div class="col-sm-8">
              <select name="id_desa" id="id_desa" class="form-control">
                  <option value=""> --- pilih Desa --- </option>
                  <?php 
                    foreach ($all_desa as $des) {
                      echo '<option value="'.$des->id_desa.'"> '.$des->nama_desa.' </option>';
                    }
                  ?>
              </select>
            </div>
            <div style="clear: both;"></div><br>


            <div class="col-sm-4">Luas Tanah/Ha</div>
            <div class="col-sm-8"><input type="text" name="luas_tanam" id="luas_tanam" required="required" class="form-control nomor" placeholder="luas tanah"></div>
            <div style="clear: both;"></div><br>


            <div class="col-sm-4">Masa Tanam (Bulan)</div>
            <div class="col-sm-8"><input type="text" name="masa_tanam" id="masa_tanam" required="required" class="form-control nomor" placeholder="masa_tanam"></div>
            <div style="clear: both;"></div><br>


            <div class="col-sm-4">pupuk</div>
            <div class="col-sm-8">
              
                  <?php 
                    foreach ($all_pupuk as $pup) {
                        echo '<div class="checkbox">
                              <div class="row">
                              <div class="col-sm-4">
                              <label>
                                <input type="checkbox" name="id_pupuk[]" value="'.$pup->id.'">'.$pup->nama_pupuk.'</label> 
                                </div>
                                <div class="col-sm-8">
                              <input name="jumlah[]" class="form-control" type="number">
                              </div>
                              </div>
                            </div>';
                    }
                  ?>
              
            </div>
            <div style="clear: both;"></div><br>

            <div class="col-sm-4">Produksi/ton</div>
            <div class="col-sm-8"><input type="text" name="produksi" id="produksi" required="required" class="form-control nomor" placeholder="produksi"></div>
            <div style="clear: both;"></div><br>




          <div class="col-sm-4">Gambar/Lampiran</div>
            <div class="col-sm-8">
              <input class="form-control" name="gambar_detail" id="gambar_detail" type="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps">
            </div>
            <div style="clear: both;"></div><br>

            <div id="t4_info_form"></div>
            <button type="submit" class="btn btn-primary"> Simpan </button>
          </form>

          <div style="clear: both;"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<script>
$('.datepicker').datepicker({
  autoclose: true,
  format: 'yyyy-mm-dd' 
})

hanya_nomor(".nomor");


$(document).ready(function(){

  $('#tbl_newsnya').dataTable();

});

$("#id_kategori").on("change",function(){
  var id = $(this).val();
  $.get("<?php echo base_url()?>index.php/semua/data_sub_kategori_by_id_kategori/"+id,function(e){
    //console.log(e);
    $("#id_sub_kategori").empty();
    $.each(e,function(a,b){
      console.log(b);
      $("#id_sub_kategori").append("<option value='"+b.id+"'>"+b.sub_kategori+"</option>");

    })
  }) 
})



$("#id_kecamatan").on("change",function(){

  var id = $(this).val();
  //alert("<?php echo base_url()?>index.php/semua/data_desa_by_id_kecamatan/"+id)
  $.get("<?php echo base_url()?>index.php/semua/data_desa_by_id_kecamatan/"+id,function(e){
    console.log("<?php echo base_url()?>index.php/semua/data_desa_by_id_kecamatan/"+id);
    $("#id_desa").empty();
    $.each(e,function(a,b){
      console.log(b);
      $("#id_desa").append("<option value='"+b.id_desa+"'>"+b.nama_desa+"</option>");

    })
  }) 
})


function edit(id)
{
  $.get("<?php echo base_url()?>index.php/semua/data_tbl_detail_by_id/"+id,function(e){
    //console.log(e[0].id_desa);
    $("#id").val(e[0].id);
    $("#tbl_detail").val(e[0].tbl_detail);
    $("#id_kategori").val(e[0].id_kategori);
    $("#id_sub_kategori").val(e[0].id_sub_kategori);
    $("#id_kecamatan").val(e[0].id_kecamatan);
    $("#id_desa").val(e[0].id_desa);    
    $("#luas_tanam").val(e[0].luas_tanam);
    $("#masa_tanam").val(e[0].masa_tanam);
    $("#pupuk").val(e[0].pupuk);
    $("#produksi").val(e[0].produksi);
    

  })
  $("#myModal").modal('show');
}

function tambah_tbl_detail()
{
  $("#id").val('');
  $("#tbl_detail").val('');
  
  $("#myModal").modal('show');
}

function hapus(id)
{
  if(confirm("Anda yakin menghapus?"))
  {
    $.get("<?php echo base_url()?>index.php/semua/hapus_tbl_detail_by_id/"+id,function(e){
      eksekusi_controller('<?php echo base_url()?>index.php/semua/data_tbl_detail');
    })  
  }
  
}


$("#form_tambah_admin").on("submit",function(){
  $("#t4_info_form").html('Loading...');
  

  var ser = $(this).serialize();

      $.ajax({
            url: "<?php echo base_url()?>index.php/semua/simpan_tbl_detail",
            type: "POST",
            contentType: false,
            processData:false,
            data:  new FormData(this),
            beforeSend: function(){
                //alert("sedang uploading...");
            },
            success: function(e){
                console.log(e);
                $("#t4_info_form").html("<div class='alert alert-success'>Berhasil.</div>").fadeIn().delay(3000).fadeOut();
                  setTimeout(function(){
                    $("#myModal").modal('hide');
                  },3000);

                
            },
            error: function(er){
                $("#t4_info_form").html("<div class='alert alert-warning'>Ada masalah! "+er+"</div>");
            }           
       });
  return false;
})



$("#myModal").on("hidden.bs.modal", function () {
  eksekusi_controller('<?php echo base_url()?>index.php/semua/data_tbl_detail','Data Komoditi');
});
</script>

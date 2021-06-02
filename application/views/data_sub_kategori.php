
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
              <button class="btn btn-primary" id="tambah_data"  onclick="tambah_sub_kategori()">Tambah Data</button> 
      <table id="tbl_newsnya" class="table  table-striped table-bordered"  cellspacing="0" width="100%">
      <thead>
        <tr>
              
              <th>No</th>
              <th>Kategori</th>           
              <th>Komoditi</th>                         
              <th>Gambar</th>
              <th>Action</th>
              
        </tr>
      </thead>
      <tbody>
        <?php         
        $no = 0;
        foreach($all_sub_kategori as $x)
        {
          $btn = "<button class='btn btn-warning btn-xs' onclick='edit($x->id);return false;'>Edit</button>
                  <button class='btn btn-danger btn-xs' onclick='hapus($x->id);return false;'>Hapus</button>    ";
          $no++;

            echo (" 
              
              <tr>
                <td>$no</td>
                <td>$x->kategori</td>
                <td>$x->sub_kategori</td>
                <td><img src='".base_url()."uploads/$x->gambar' width='50px' height='50px'></td>
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

            <div class="col-sm-4">Sub kategori/ Komoditi</div>
            <div class="col-sm-8"><input type="text" name="sub_kategori" id="sub_kategori" required="required" class="form-control" placeholder="Nama sub_kategori"></div>
            <div style="clear: both;"></div><br>


          <div class="col-sm-4">Gambar</div>
            <div class="col-sm-8">
              <input class="form-control" name="gambar" id="gambar" type="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps">
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


$(document).ready(function(){

  $('#tbl_newsnya').dataTable();

});

function edit(id)
{
  $.get("<?php echo base_url()?>index.php/semua/data_sub_kategori_by_id/"+id,function(e){
    //console.log(e[0].id_desa);
    $("#id").val(e[0].id);
    $("#sub_kategori").val(e[0].sub_kategori);
    $("#id_kategori").val(e[0].id_kategori);

  })
  $("#myModal").modal('show');
}

function tambah_sub_kategori()
{
  $("#id").val('');
  $("#sub_kategori").val('');
  
  $("#myModal").modal('show');
}

function hapus(id)
{
  if(confirm("Anda yakin menghapus?"))
  {
    $.get("<?php echo base_url()?>index.php/semua/hapus_sub_kategori_by_id/"+id,function(e){
      eksekusi_controller('<?php echo base_url()?>index.php/semua/data_sub_kategori');
    })  
  }
  
}


$("#form_tambah_admin").on("submit",function(){
  $("#t4_info_form").html('Loading...');
  

  var ser = $(this).serialize();

      $.ajax({
            url: "<?php echo base_url()?>index.php/semua/simpan_sub_kategori",
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
  eksekusi_controller('<?php echo base_url()?>index.php/semua/data_sub_kategori','Data Komoditi');
});
</script>

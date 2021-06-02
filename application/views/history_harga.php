
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
          <h3 class="box-title">Harga</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
<div class="table-responsive">
<table id="tbl_newsnya" class="table  table-striped table-bordered"  cellspacing="0" width="100%">
      <thead>
        <tr>
              
              <th width="50px">No</th>
              <th width="200px">Kecamatan</th>                         
              <th>Komoditi</th>                                       
              <th>Harga</th>                         
              <th>Tanggal</th>                         
                             
              
        </tr>
      </thead>
      <tbody>
        <?php         
        $no = 0;
        foreach($all_harga as $x)
        {
          
          $no++;

          
            echo (" 
              
              <tr>
                <td>$no</td>
                <td>$x->nama_kecamatan</td>
                <td>$x->sub_kategori</td>
                <td>".rupiah($x->harga)."</td>
                <td>".tanggalindo($x->tanggal)."</td>
                
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
            
            <div style="clear: both;"></div><br>

            <div class="col-sm-4">Update harga</div>
            <div class="col-sm-8"><input type="text" name="harga" id="harga" required="required" class="form-control nomor" placeholder="Nama harga"></div>
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

function gas_harga(ini)
{
  console.log(ini.parent().parent().html());
  var harga = ini.parent().parent().find("#harga").val();
  ini.parent().parent().find("#t4_harga").html(formatRupiah(harga));
  ini.parent().parent().find("#harga").val("");

  var id_kecamatan = ini.parent().parent().find("#id_kecamatan").val();
  var id_sub_kategori = ini.parent().parent().find("#id_sub_kategori").val();

  var ser = {
              id_kecamatan:id_kecamatan,
              id_sub_kategori:id_sub_kategori,
              harga:harga
            };
  $.post("<?php echo base_url()?>index.php/semua/simpan_harga",ser,function(){

  })


  return false;
}

function formatRupiah(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

$(document).ready(function(){

  $('#tbl_newsnya').dataTable();

});

function edit(id)
{
  $.get("<?php echo base_url()?>index.php/semua/data_harga_by_id/"+id,function(e){
    //console.log(e[0].id_desa);
    $("#id").val(e[0].id);
    $("#harga").val(e[0].harga);

  })
  $("#myModal").modal('show');
}

function tambah()
{
  $("#id").val('');
  $("#harga").val('');
  
  $("#myModal").modal('show');
}

function hapus(id)
{
  if(confirm("Anda yakin menghapus?"))
  {
    $.get("<?php echo base_url()?>index.php/semua/hapus_harga_by_id/"+id,function(e){
      eksekusi_controller('<?php echo base_url()?>index.php/semua/data_harga');
    })  
  }
  
}

$("#form_tambah_admin").on("submit",function(){
  $("#t4_info_form").html('Loading...');
  
  var ser = $(this).serialize();

  $.post("<?php echo base_url()?>index.php/semua/simpan_harga",ser,function(x){
    console.log(x);
    if(x==0)
    {
      $("#t4_info_form").html("<div class='alert alert-warning'>Ada masalah.</div>").fadeIn().delay(3000).fadeOut();
    }else if(x=='1')
    {
      $("#t4_info_form").html("<div class='alert alert-success'>Berhasil.</div>").fadeIn().delay(3000).fadeOut();

      setTimeout(function(){
        $("#myModal").modal('hide');
      },3000);
    }
  })

  return false;
})


$("#myModal").on("hidden.bs.modal", function () {
  eksekusi_controller('<?php echo base_url()?>index.php/semua/data_harga','Data harga');
});
</script>


<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 id="judul">
        Selamat datang di Sistem Informasi 
        
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
          <h3 class="box-title" id="judul2"></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
              
<div class="table-responisve">
<table id="tbl_datanya" class="table  table-striped table-bordered"  cellspacing="0" width="100%">
      <thead>
        <tr>
              
              <th>No</th>              
              <th>NIP</th>                     
              <th>Nama</th>                     
              <th>Tahun</th>                                   
              <th>Dokumen</th>                     
              <th>Action</th>                     
              
              
        </tr>
      </thead>
      <tbody>
        <?php         
        $no = 0;
        foreach($all as $x)
        {
          
          $no++;
          
            echo (" 
              
              <tr>
                <td>$no</td>
                <td>$x->NIP</td>
                <td>$x->nama</td>                
                <td>$x->tahun</td>    
                <td>
                  <button class='btn btn-info btn-xs' id='' onclick='btn_dok($x->tahun,".'"'.$x->NIP.'"'.")'>Lihat Dokumen</button>
                </td>                                           
                <td>
                  <button class='btn btn-primary btn-xs' id='' onclick='penilaian($x->tahun,".'"'.$x->NIP.'"'.")'>Preview</button>

                  <button class='btn btn-primary btn-xs' id='' onclick='download($x->tahun,".'"'.$x->NIP.'"'.")'>Download</button>

                </td>
              </tr>
          ");
          
        }
        
        
        ?>
      </tbody>
  </table>
</div>
<?php
    if ($this->session->userdata('level') == '1') {
    ?>
<a href="<?php echo(base_url())?>index.php/barang/data_xl" target="blank" class="btn btn-primary">Excel</a>
<?php } ?>

        </div>
        
      </div>
      <!-- /.box -->

</section>
    <!-- /.content -->




<!-- Modal -->
<div id="myModal_dokumen" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Dokumen Penilaian</h4>
      </div>
      <div class="modal-body" id="t4_konten">
        

          <div style="clear: both;"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<script>
console.log("<?php echo $this->router->fetch_class();?>");
var classnya = "<?php echo $this->router->fetch_class();?>";


hanya_nomor(".nomor");
function btn_dok(tahun,NIP)
{
  
  $.get("<?php echo base_url()?>index.php/semua/data_dokumen_by_nip",{tahun:tahun,NIP:NIP},function(e){
    $("#t4_konten").html(e);
  })
  $("#myModal_dokumen").modal('show');
}

function penilaian(tahun,NIP)
{
  
  $.get("<?php echo base_url()?>index.php/semua/preview_cetak",{tahun:tahun,NIP:NIP},function(e){
    $("#t4_konten").html(e);
  })
  $("#myModal_dokumen").modal('show');
}


function download(tahun,NIP)
{
  
  var url="<?php echo base_url()?>index.php/semua/preview_cetak_xl/?tahun="+tahun+"&NIP="+NIP;
  window.open(url);

}



function tambah()
{
    $("#id").val('');
    
    
  $("#myModal").modal('show');
}

function hapus(id)
{
  if(confirm("Anda yakin menghapus?"))
  {
    $.get("<?php echo base_url()?>index.php/"+classnya+"/hapus/"+id,function(e){
      eksekusi_controller('<?php echo base_url()?>index.php/'+classnya+'/data',document.title);
    })  
  }
  
}

$("#form_tambah_admin").on("submit",function(){
  $("#t4_info_form").html('Loading...');
  if($("#pass_admin").val() != $("#conf_pass_admin").val())
  {
    
    $("#t4_info_form").html("<div class='alert alert-warning'>Password dan Confirm Password tidak sama.</div>").fadeIn().delay(3000).fadeOut();
    return false;
  }

  var ser = $(this).serialize();

      $.ajax({
            url: "<?php echo base_url()?>index.php/"+classnya+"/simpan_form",
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
  eksekusi_controller('<?php echo base_url()?>index.php/'+classnya+'/data',document.title);
});

$(document).ready(function(){

  $('#tbl_datanya').dataTable();

});
$("#judul2").html("DataTable "+document.title);
</script>


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
          <h3 class="box-title">Upload dokumen</h3>

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
<form id="go_satu_persatu">
<table id="" class="table  table-striped table-bordered"  cellspacing="0" width="100%">
      <tr class="warning">
        <td>Tahun </td> <td><input type="text" class="form-control" name="tahun" id="tahun" value="<?php echo $tahun?>" readonly> Perhatian!! Pastikan tahun benar!!</td>
      </tr>

      <tr class="warning">
        <td>NIP </td> <td><input type="text" class="form-control" name="NIP" id="NIP" value="<?php echo $this->session->userdata('user_admin')?>" readonly></td>
      </tr>


    <tr>
  <td class="besarkan">surat_pengantar</td>
  <td>
    <input class="form-control" name="surat_pengantar" type="file" id="surat_pengantar">
    <small><a href="<?php echo base_url()?>uploads/<?php echo @$dok[0]->surat_pengantar?>" target="blank" ><?php echo @$dok[0]->surat_pengantar?></a></small>
    </td>
</tr>
<tr>
  <td class="besarkan">rekomendasi</td>
  <td>
    <input class="form-control" name="rekomendasi" type="file" id="rekomendasi">
    <small><a href="<?php echo base_url()?>uploads/<?php echo @$dok[0]->rekomendasi?>" target="blank" ><?php echo @$dok[0]->rekomendasi?></a></small>
    </td>
</tr>
<tr>
  <td class="besarkan">dupak</td>
  <td>
    <input class="form-control" name="dupak" type="file" id="dupak">
    <small><a href="<?php echo base_url()?>uploads/<?php echo @$dok[0]->dupak?>" target="blank" ><?php echo @$dok[0]->dupak?></a></small>
    </td>
</tr>
<tr>
  <td class="besarkan">sk_pangkat</td>
  <td>
    <input class="form-control" name="sk_pangkat" type="file" id="sk_pangkat">
    <small><a href="<?php echo base_url()?>uploads/<?php echo @$dok[0]->sk_pangkat?>" target="blank" ><?php echo @$dok[0]->sk_pangkat?></a></small>
    </td>
</tr>
<tr>
  <td class="besarkan">sk_jabatan_guru</td>
  <td>
    <input class="form-control" name="sk_jabatan_guru" type="file" id="sk_jabatan_guru">
    <small><a href="<?php echo base_url()?>uploads/<?php echo @$dok[0]->sk_jabatan_guru?>" target="blank" ><?php echo @$dok[0]->sk_jabatan_guru?></a></small>
    </td>
</tr>
<tr>
  <td class="besarkan">skp</td>
  <td>
    <input class="form-control" name="skp" type="file" id="skp">
    <small><a href="<?php echo base_url()?>uploads/<?php echo @$dok[0]->skp?>" target="blank" ><?php echo @$dok[0]->skp?></a></small>
    </td>
</tr>
<tr>
  <td class="besarkan">sk_pembagian_tugas</td>
  <td>
    <input class="form-control" name="sk_pembagian_tugas" type="file" id="sk_pembagian_tugas">
    <small><a href="<?php echo base_url()?>uploads/<?php echo @$dok[0]->sk_pembagian_tugas?>" target="blank" ><?php echo @$dok[0]->sk_pembagian_tugas?></a></small>
    </td>
</tr>
<tr>
  <td class="besarkan">sk_tugas_tambahan</td>
  <td>
    <input class="form-control" name="sk_tugas_tambahan" type="file" id="sk_tugas_tambahan">
    <small><a href="<?php echo base_url()?>uploads/<?php echo @$dok[0]->sk_tugas_tambahan?>" target="blank" ><?php echo @$dok[0]->sk_tugas_tambahan?></a></small>
    </td>
</tr>
<tr>
  <td class="besarkan">ijazah_setifikat_pendidik</td>
  <td>
    <input class="form-control" name="ijazah_setifikat_pendidik" type="file" id="ijazah_setifikat_pendidik">
    <small><a href="<?php echo base_url()?>uploads/<?php echo @$dok[0]->ijazah_setifikat_pendidik?>" target="blank" ><?php echo @$dok[0]->ijazah_setifikat_pendidik?></a></small>
    </td>
</tr>
<tr>
  <td class="besarkan">sttpl_prajabatan</td>
  <td>
    <input class="form-control" name="sttpl_prajabatan" type="file" id="sttpl_prajabatan">
    <small><a href="<?php echo base_url()?>uploads/<?php echo @$dok[0]->sttpl_prajabatan?>" target="blank" ><?php echo @$dok[0]->sttpl_prajabatan?></a></small>
    </td>
</tr>
<tr>
  <td class="besarkan">surat_pernyataan_tidak_dihukum</td>
  <td>
    <input class="form-control" name="surat_pernyataan_tidak_dihukum" type="file" id="surat_pernyataan_tidak_dihukum">
    <small><a href="<?php echo base_url()?>uploads/<?php echo @$dok[0]->surat_pernyataan_tidak_dihukum?>" target="blank" ><?php echo @$dok[0]->surat_pernyataan_tidak_dihukum?></a></small>
    </td>
</tr>
<tr>
  <td class="besarkan">pkg</td>
  <td>
    <input class="form-control" name="pkg" type="file" id="pkg">
    <small><a href="<?php echo base_url()?>uploads/<?php echo @$dok[0]->pkg?>" target="blank" ><?php echo @$dok[0]->pkg?></a></small>
    </td>
</tr>
<tr>
  <td class="besarkan">surat_pernyataan_melaksanakan_tugas</td>
  <td>
    <input class="form-control" name="surat_pernyataan_melaksanakan_tugas" type="file" id="surat_pernyataan_melaksanakan_tugas">
    <small><a href="<?php echo base_url()?>uploads/<?php echo @$dok[0]->surat_pernyataan_melaksanakan_tugas?>" target="blank" ><?php echo @$dok[0]->surat_pernyataan_melaksanakan_tugas?></a></small>
    </td>
</tr>
<tr>
  <td class="besarkan">surat_pernyataan_profesi</td>
  <td>
    <input class="form-control" name="surat_pernyataan_profesi" type="file" id="surat_pernyataan_profesi">
    <small><a href="<?php echo base_url()?>uploads/<?php echo @$dok[0]->surat_pernyataan_profesi?>" target="blank" ><?php echo @$dok[0]->surat_pernyataan_profesi?></a></small>
    </td>
</tr>
<tr>
  <td class="besarkan">surat_pernyataan_tugas_penunjang</td>
  <td>
    <input class="form-control" name="surat_pernyataan_tugas_penunjang" type="file" id="surat_pernyataan_tugas_penunjang">
    <small><a href="<?php echo base_url()?>uploads/<?php echo @$dok[0]->surat_pernyataan_tugas_penunjang?>" target="blank" ><?php echo @$dok[0]->surat_pernyataan_tugas_penunjang?></a></small>
    </td>
</tr>
<tr>
  <td class="besarkan">akta_tidak_linear</td>
  <td>
    <input class="form-control" name="akta_tidak_linear" type="file" id="akta_tidak_linear">
    <small><a href="<?php echo base_url()?>uploads/<?php echo @$dok[0]->akta_tidak_linear?>" target="blank" ><?php echo @$dok[0]->akta_tidak_linear?></a></small>
    </td>
</tr>
<tr>
  <td class="besarkan">sk_pemberhentian_sementara</td>
  <td>
    <input class="form-control" name="sk_pemberhentian_sementara" type="file" id="sk_pemberhentian_sementara">
    <small><a href="<?php echo base_url()?>uploads/<?php echo @$dok[0]->sk_pemberhentian_sementara?>" target="blank" ><?php echo @$dok[0]->sk_pemberhentian_sementara?></a></small>
    </td>
</tr>
<tr>
  <td class="besarkan">sk_pengangkatan_kembali</td>
  <td>
    <input class="form-control" name="sk_pengangkatan_kembali" type="file" id="sk_pengangkatan_kembali">
    <small><a href="<?php echo base_url()?>uploads/<?php echo @$dok[0]->sk_pengangkatan_kembali?>" target="blank" ><?php echo @$dok[0]->sk_pengangkatan_kembali?></a></small>
    </td>
</tr>
<tr>
  <td class="besarkan">laporan_penelitian</td>
  <td>
    <input class="form-control" name="laporan_penelitian" type="file" id="laporan_penelitian">
    <small><a href="<?php echo base_url()?>uploads/<?php echo @$dok[0]->laporan_penelitian?>" target="blank" ><?php echo @$dok[0]->laporan_penelitian?></a></small>
    </td>
</tr>

  </table>
  <div id="t4_info_form"></div>
<button type="submit" class="btn btn-primary"> Simpan </button>
</form>
</div>


        </div>
<!--
        <a href="<?php echo(base_url())?>index.php/semua/data_guru_xl" target="blank" class="btn btn-primary">Excel</a>
-->
      </div>
      <!-- /.box -->

</section>
    <!-- /.content -->





<script>
$('.datepicker').datepicker({
  autoclose: true,
  format: 'yyyy-mm-dd' 
})

$('#tbl_newsnya th').each(function() {
    var $this = $(this);

    $this.text($this.text().replace(/_/g, ' ').toUpperCase());

});


$('.besarkan').each(function() {
    var $this = $(this);

    $this.text($this.text().replace(/_/g, ' ').toUpperCase());

});


$(document).ready(function(){

  $('#tbl_newsnya').dataTable();

});

function edit(id)
{
  
  
  $("#myModal").modal('show');
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
    $.get("<?php echo base_url()?>index.php/semua/hapus_guru_by_id/"+id,function(e){
      eksekusi_controller('<?php echo base_url()?>index.php/semua/data_guru');
    })  
  }
  
}


$("#go_satu_persatu").on("submit",function(){
  $("#t4_info_form").html('Loading...');
  

  var ser = $(this).serialize();

      $.ajax({
            url: "<?php echo base_url()?>index.php/semua/simpan_dokumen",
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
  eksekusi_controller('<?php echo base_url()?>index.php/semua/data_guru','Data guru');
});
</script>

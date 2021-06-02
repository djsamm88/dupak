
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
              <button class="btn btn-primary" id="tambah_data"  onclick="tambah()">Tambah Data</button> 
<div class="table-responsive">
<table id="tbl_newsnya" class="table  table-striped table-bordered"  cellspacing="0" width="100%">
      <thead>
        <tr>
              
              <th>No</th>
              <th>id</th>
              <th>nama</th>
              <th>NIP,NUPTK</th>              
              <th>jenis_kelamin</th>
              <th>tempat dan tanggal_lahir</th>              
              <th>Pendidikan yang telah diperhitungkan angka kreditnya</th>
              <th>pangkat/golongan/tmt_pangkat</th>              
              <th>jabatan_fungsional/tmt_jabatan</th>
              
              <th>masa_kerja_golongan_lama</th>
              <th>masa_kerja_golongan_baru</th>
              <th>jenis_guru_tugas</th>
              <th>sertifikasi_guru_sebagai</th>
              <th>alamat_rumah</th>
              <th>alamat_sekolah</th>
              <th>Password</th>

              <th>Action</th>
              
        </tr>
      </thead>
      <tbody>
        <?php         
        $no = 0;
        foreach($all_guru as $x)
        {
          $btn = "<button class='btn btn-warning btn-xs' onclick='edit($x->id);return false;'>Edit</button>
                  <button class='btn btn-danger btn-xs' onclick='hapus($x->id);return false;'>Hapus</button>    ";
          $no++;

            echo (" 
              
              <tr>
                <td>$no</td>
                <td>$x->id</td>
                <td>$x->nama</td>
                <td>$x->NIP,$x->NUPTK</td>                
                <td>$x->jenis_kelamin</td>
                <td>$x->tempat_lahir $x->tanggal_lahir</td>
                                
                <td>$x->pendidikan_ytdak</td>
                <td>$x->pangkat/$x->golongan/$x->tmt_pangkat</td>                
                <td>$x->jabatan_fungsional/$x->tmt_jabatan</td>                
                <td>$x->masa_kerja_golongan_lama</td>
                <td>$x->masa_kerja_golongan_baru</td>
                <td>$x->jenis_guru_tugas</td>
                <td>$x->sertifikasi_guru_sebagai</td>
                <td>$x->alamat_rumah</td>
                <td>$x->alamat_sekolah</td>
                <td>$x->password</td>
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
        <a href="<?php echo(base_url())?>index.php/semua/data_guru_xl" target="blank" class="btn btn-primary">Excel</a>

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
           <div class="col-sm-4 besarkan">id</div>
<div class="col-sm-8">
<input type="text" class="form-control" name="id" id="id" placeholder="id" readonly="">
</div>
<div style="clear:both"></div><br>

<div class="col-sm-4 besarkan">nama</div>
<div class="col-sm-8">
<input type="text" class="form-control" name="nama" id="nama" placeholder="nama" required>
</div>
<div style="clear:both"></div><br>

<div class="col-sm-4 besarkan">NIP</div>
<div class="col-sm-8">
<input type="text" class="form-control" name="NIP" id="NIP" placeholder="NIP" required>
</div>
<div style="clear:both"></div><br>

<div class="col-sm-4 besarkan">NUPTK</div>
<div class="col-sm-8">
<input type="text" class="form-control" name="NUPTK" id="NUPTK" placeholder="NUPTK" required>
</div>
<div style="clear:both"></div><br>

<div class="col-sm-4 besarkan">tempat_lahir</div>
<div class="col-sm-8">
<input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="tempat_lahir" required>
</div>
<div style="clear:both"></div><br>

<div class="col-sm-4 besarkan">jenis_kelamin</div>
<div class="col-sm-8">
<input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" placeholder="jenis_kelamin" required>
</div>
<div style="clear:both"></div><br>

<div class="col-sm-4 besarkan">tanggal_lahir</div>
<div class="col-sm-8">
<input type="text" class="form-control datepicker" name="tanggal_lahir" id="tanggal_lahir" placeholder="tanggal_lahir" required>
</div>
<div style="clear:both"></div><br>

<div class="col-sm-4 besarkan">Pendidikan yang telah diperhitungkan angka kreditnya                                     </div>
<div class="col-sm-8">
<input type="text" class="form-control" name="pendidikan_ytdak" id="pendidikan_ytdak" placeholder="pendidikan_ytdak" required>
</div>
<div style="clear:both"></div><br>

<div class="col-sm-4 besarkan">pangkat</div>
<div class="col-sm-8">
<input type="text" class="form-control" name="pangkat" id="pangkat" placeholder="pangkat" required>
</div>
<div style="clear:both"></div><br>

<div class="col-sm-4 besarkan">golongan</div>
<div class="col-sm-8">
<input type="text" class="form-control" name="golongan" id="golongan" placeholder="golongan" required>
</div>
<div style="clear:both"></div><br>

<div class="col-sm-4 besarkan">tmt_pangkat</div>
<div class="col-sm-8">
<input type="text" class="form-control" name="tmt_pangkat" id="tmt_pangkat" placeholder="tmt_pangkat" required>
</div>
<div style="clear:both"></div><br>

<div class="col-sm-4 besarkan">jabatan_fungsional</div>
<div class="col-sm-8">
<input type="text" class="form-control" name="jabatan_fungsional" id="jabatan_fungsional" placeholder="jabatan_fungsional" required>
</div>
<div style="clear:both"></div><br>

<div class="col-sm-4 besarkan">tmt_jabatan</div>
<div class="col-sm-8">
<input type="text" class="form-control" name="tmt_jabatan" id="tmt_jabatan" placeholder="tmt_jabatan" required>
</div>
<div style="clear:both"></div><br>

<div class="col-sm-4 besarkan">masa_kerja_golongan_lama</div>
<div class="col-sm-8">
<input type="text" class="form-control" name="masa_kerja_golongan_lama" id="masa_kerja_golongan_lama" placeholder="masa_kerja_golongan_lama" required>
</div>
<div style="clear:both"></div><br>

<div class="col-sm-4 besarkan">masa_kerja_golongan_baru</div>
<div class="col-sm-8">
<input type="text" class="form-control" name="masa_kerja_golongan_baru" id="masa_kerja_golongan_baru" placeholder="masa_kerja_golongan_baru" required>
</div>
<div style="clear:both"></div><br>

<div class="col-sm-4 besarkan">jenis_guru_tugas</div>
<div class="col-sm-8">
<input type="text" class="form-control" name="jenis_guru_tugas" id="jenis_guru_tugas" placeholder="jenis_guru_tugas" required>
</div>
<div style="clear:both"></div><br>

<div class="col-sm-4 besarkan">sertifikasi_guru_sebagai</div>
<div class="col-sm-8">
<input type="text" class="form-control" name="sertifikasi_guru_sebagai" id="sertifikasi_guru_sebagai" placeholder="sertifikasi_guru_sebagai" required>
</div>
<div style="clear:both"></div><br>

<div class="col-sm-4 besarkan">alamat_rumah</div>
<div class="col-sm-8">
<input type="text" class="form-control" name="alamat_rumah" id="alamat_rumah" placeholder="alamat_rumah" required>
</div>
<div style="clear:both"></div><br>

<div class="col-sm-4 besarkan">alamat_sekolah</div>
<div class="col-sm-8">
<input type="text" class="form-control" name="alamat_sekolah" id="alamat_sekolah" placeholder="alamat_sekolah" required>
</div>

<div class="col-sm-4 besarkan">Password</div>
<div class="col-sm-8">
<input type="text" class="form-control" name="password" id="password" placeholder="password" required>
</div>
<div style="clear:both"></div><br>



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
  $.get("<?php echo base_url()?>index.php/semua/data_guru_by_id/"+id,function(e){
    //console.log(e[0].id_desa);
    $("#id").val(e[0].id);
    $("#nama").val(e[0].nama);
    $("#NIP").val(e[0].NIP);
    $("#NUPTK").val(e[0].NUPTK);
    $("#tempat_lahir").val(e[0].tempat_lahir);
    $("#tanggal_lahir").val(e[0].tanggal_lahir);
    $("#jenis_kelamin").val(e[0].jenis_kelamin);
    $("#pendidikan_ytdak").val(e[0].pendidikan_ytdak);
    $("#pangkat").val(e[0].pangkat);
    $("#golongan").val(e[0].golongan);
    $("#tmt_pangkat").val(e[0].tmt_pangkat);
    $("#jabatan_fungsional").val(e[0].jabatan_fungsional);
    $("#tmt_jabatan").val(e[0].tmt_jabatan);
    $("#masa_kerja_golongan_lama").val(e[0].masa_kerja_golongan_lama);
    $("#masa_kerja_golongan_baru").val(e[0].masa_kerja_golongan_baru);
    $("#jenis_guru_tugas").val(e[0].jenis_guru_tugas);
    $("#sertifikasi_guru_sebagai").val(e[0].sertifikasi_guru_sebagai);
    $("#alamat_rumah").val(e[0].alamat_rumah);
    $("#alamat_sekolah").val(e[0].alamat_sekolah);
    $("#password").val(e[0].password);
    

  })
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

$("#form_tambah_admin").on("submit",function(){
  $("#t4_info_form").html('Loading...');
  
  var ser = $(this).serialize();

  $.post("<?php echo base_url()?>index.php/semua/simpan_guru",ser,function(x){
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
  eksekusi_controller('<?php echo base_url()?>index.php/semua/data_guru','Data guru');
});
</script>

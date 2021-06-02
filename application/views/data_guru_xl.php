<table id="tbl_newsnya" class="table  table-striped table-bordered"  cellspacing="0" width="100%" border="1">
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
                
              </tr>
          ");
          
        }
        
        
        ?>
      </tbody>
  </table>
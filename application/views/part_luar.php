<div class="table-responsive"> 
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
              
              
        </tr>
      </thead>
      <tbody>
        <?php         
        $no = 0;
        foreach($all as $x)
        {
          
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
                
              </tr>
          ");
          
        }
        
        
        ?>
      </tbody>
  </table>
</div>
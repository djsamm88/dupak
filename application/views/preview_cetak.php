<b>
<center>
	PENETAPAN ANGKA KREDIT 									
</center>
</b>
<br>

TAHUN <?php echo $tahun?> <br>

<b>KETERANGAN PERORANGAN</b>
<table class="table table-bordered table-striped" border="1">
	<tr>
		<td>Nama</td> <td><?php echo @$dok[0]->nama?></td>
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
		<td>Masa kerja golongan	Lama</td> <td><?php echo @$dok[0]->masa_kerja_golongan_lama?></td>
	</tr>


	<tr>
		<td>Masa kerja golongan	Baru</td> <td><?php echo @$dok[0]->masa_kerja_golongan_baru?></td>
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


<b>PENETAPAN ANGKA KREDIT</b>
<table class="table table-bordered" border="1">
	  
      
     

<tr>
	<td class="besarkan">UNSUR UTAMA</td>
	<td>
		<b>LAMA</b>
		
	</td>
	<td>
		<b>BARU</b>
		
	</td>

	<td>
		<b>JUMLAH</b>
		
	</td>
	
</tr>


<tr>
	<td class="besarkan">Pendidikan Sekolah</td>
	<td>
		<?php echo @$dok[0]->pendidikan_sekolah_lama?>
		
	</td>
	<td>
		<?php echo @$dok[0]->pendidikan_sekolah_baru?>
		
	</td>

	<td>
		<?php echo $dok[0]->pendidikan_sekolah_lama+$dok[0]->pendidikan_sekolah_baru?>
		
	</td>
	
</tr>


<tr>
	<td class="besarkan">Diklat Prajabatan</td>
	<td>
		<?php echo @$dok[0]->diklat_prajabatan_lama?>
		
	</td>
	<td>
		<?php echo @$dok[0]->diklat_prajabatan_baru?>
		
	</td>

	<td>
		<?php echo $dok[0]->diklat_prajabatan_lama+$dok[0]->diklat_prajabatan_baru?>
		
	</td>
	
</tr>



<tr>
	<td class="besarkan">Proses Pembelajaran</td>
	<td>
		<?php echo @$dok[0]->proses_pembelajaran_lama?>
		
	</td>
	<td>
		<?php echo @$dok[0]->proses_pembelajaran_baru?>
		
	</td>

	<td>
		<?php echo $dok[0]->proses_pembelajaran_lama+$dok[0]->proses_pembelajaran_baru?>
		
	</td>
	
</tr>




<tr>
	<td class="besarkan">Proses Bimbingan</td>
	<td>
		<?php echo @$dok[0]->proses_bimbingan_lama?>
		
	</td>
	<td>
		<?php echo @$dok[0]->proses_bimbingan_baru?>
		
	</td>

	<td>
		<?php echo $dok[0]->proses_bimbingan_lama+$dok[0]->proses_bimbingan_baru?>
		
	</td>
	
</tr>


<tr>
	<td class="besarkan">Tugas lain yang relevan dengan fungsi Sekolah   		</td>
	<td>
		<?php echo @$dok[0]->tugas_lain_lama?>
		
	</td>
	<td>
		<?php echo @$dok[0]->tugas_lain_baru?>
		
	</td>

	<td>
		<?php echo $dok[0]->tugas_lain_lama+$dok[0]->tugas_lain_baru?>
		
	</td>
	
</tr>



<tr>
	<td class="besarkan">Pengembangan Diri</td>
	<td>
		<?php echo @$dok[0]->pengembangan_diri_lama?>
		
	</td>
	<td>
		<?php echo @$dok[0]->pengembangan_diri_baru?>
		
	</td>

	<td>
		<?php echo $dok[0]->pengembangan_diri_lama+$dok[0]->pengembangan_diri_baru?>
		
	</td>
	
</tr>



<tr>
	<td class="besarkan">Publikasi Ilmiah</td>
	<td>
		<?php echo @$dok[0]->publikasi_ilmiah_lama?>
		
	</td>
	<td>
		<?php echo @$dok[0]->publikasi_ilmiah_baru?>
		
	</td>

	<td>
		<?php echo $dok[0]->publikasi_ilmiah_lama+$dok[0]->publikasi_ilmiah_baru?>
		
	</td>
	
</tr>



<tr>
	<td class="besarkan">Karya Inovatif</td>
	<td>
		<?php echo @$dok[0]->karya_inovatif_lama?>
		
	</td>
	<td>
		<?php echo @$dok[0]->karya_inovatif_baru?>
		
	</td>

	<td>
		<?php echo $dok[0]->karya_inovatif_lama+$dok[0]->karya_inovatif_baru?>
		
	</td>
	
</tr>



<tr>
	<td class="besarkan"><b>JUMLAH UNSUR UTAMA</td>
	<td>
		<?php echo 
					@$dok[0]->pendidikan_sekolah_lama+
					@$dok[0]->diklat_prajabatan_lama+
					@$dok[0]->proses_pembelajaran_lama+
					@$dok[0]->proses_bimbingan_lama+
					@$dok[0]->tugas_lain_lama+
					@$dok[0]->pengembangan_diri_lama+
					@$dok[0]->publikasi_ilmiah_lama+
					@$dok[0]->karya_inovatif_lama
			?>
		
	</td>
	<td>
		<?php echo 
					@$dok[0]->pendidikan_sekolah_baru+
					@$dok[0]->diklat_prajabatan_baru+
					@$dok[0]->proses_pembelajaran_baru+
					@$dok[0]->proses_bimbingan_baru+
					@$dok[0]->tugas_lain_baru+
					@$dok[0]->pengembangan_diri_baru+
					@$dok[0]->publikasi_ilmiah_baru+
					@$dok[0]->karya_inovatif_baru
			?>
		
	</td>

	<td>
		<?php echo 
					@$dok[0]->pendidikan_sekolah_lama+
					@$dok[0]->diklat_prajabatan_lama+
					@$dok[0]->proses_pembelajaran_lama+
					@$dok[0]->proses_bimbingan_lama+
					@$dok[0]->tugas_lain_lama+
					@$dok[0]->pengembangan_diri_lama+
					@$dok[0]->publikasi_ilmiah_lama+
					@$dok[0]->karya_inovatif_lama

					+

					@$dok[0]->pendidikan_sekolah_baru+
					@$dok[0]->diklat_prajabatan_baru+
					@$dok[0]->proses_pembelajaran_baru+
					@$dok[0]->proses_bimbingan_baru+
					@$dok[0]->tugas_lain_baru+
					@$dok[0]->pengembangan_diri_baru+
					@$dok[0]->publikasi_ilmiah_baru+
					@$dok[0]->karya_inovatif_baru


		?>
		
	</td>
	
</tr>



  
     

<tr>
	<td class="besarkan">UNSUR PENUNJANG</td>
	<td>
		<b>LAMA</b>
		
	</td>
	<td>
		<b>BARU</b>
		
	</td>

	<td>
		<b>JUMLAH</b>
		
	</td>
	
</tr>



<tr>
	<td class="besarkan">Ijazah yang tidak sesuai</td>
	<td>
		<?php echo @$dok[0]->ijazah_tidak_sesuai_lama?>
		
	</td>
	<td>
		<?php echo @$dok[0]->ijazah_tidak_sesuai_baru?>
		
	</td>

	<td>
		<?php echo $dok[0]->ijazah_tidak_sesuai_lama+$dok[0]->ijazah_tidak_sesuai_baru?>
		
	</td>
	
</tr>



<tr>
	<td class="besarkan">Pendukung tugas tertentu</td>
	<td>
		<?php echo @$dok[0]->pendukung_tugas_lama?>
		
	</td>
	<td>
		<?php echo @$dok[0]->pendukung_tugas_baru?>
		
	</td>

	<td>
		<?php echo $dok[0]->pendukung_tugas_lama+$dok[0]->pendukung_tugas_baru?>
		
	</td>
	
</tr>


<tr>
	<td class="besarkan"><b>JUMLAH UNSUR UTAMA DAN UNSUR PENUNJANG</td>
	<td>
		<?php echo 
					@$dok[0]->pendidikan_sekolah_lama+
					@$dok[0]->diklat_prajabatan_lama+
					@$dok[0]->proses_pembelajaran_lama+
					@$dok[0]->proses_bimbingan_lama+
					@$dok[0]->tugas_lain_lama+
					@$dok[0]->pengembangan_diri_lama+
					@$dok[0]->publikasi_ilmiah_lama+
					@$dok[0]->karya_inovatif_lama+

					@$dok[0]->ijazah_tidak_sesuai_lama+
					@$dok[0]->pendukung_tugas_lama

			?>
		
	</td>
	<td>
		<?php echo 
					@$dok[0]->pendidikan_sekolah_baru+
					@$dok[0]->diklat_prajabatan_baru+
					@$dok[0]->proses_pembelajaran_baru+
					@$dok[0]->proses_bimbingan_baru+
					@$dok[0]->tugas_lain_baru+
					@$dok[0]->pengembangan_diri_baru+
					@$dok[0]->publikasi_ilmiah_baru+
					@$dok[0]->karya_inovatif_baru+

					@$dok[0]->ijazah_tidak_sesuai_baru+
					@$dok[0]->pendukung_tugas_baru
			?>
		
	</td>

	<td>
		<?php echo 
					@$dok[0]->pendidikan_sekolah_lama+
					@$dok[0]->diklat_prajabatan_lama+
					@$dok[0]->proses_pembelajaran_lama+
					@$dok[0]->proses_bimbingan_lama+
					@$dok[0]->tugas_lain_lama+
					@$dok[0]->pengembangan_diri_lama+
					@$dok[0]->publikasi_ilmiah_lama+
					@$dok[0]->karya_inovatif_lama+
					@$dok[0]->ijazah_tidak_sesuai_lama+
					@$dok[0]->pendukung_tugas_lama

					+

					@$dok[0]->pendidikan_sekolah_baru+
					@$dok[0]->diklat_prajabatan_baru+
					@$dok[0]->proses_pembelajaran_baru+
					@$dok[0]->proses_bimbingan_baru+
					@$dok[0]->tugas_lain_baru+
					@$dok[0]->pengembangan_diri_baru+
					@$dok[0]->publikasi_ilmiah_baru+
					@$dok[0]->karya_inovatif_baru+
					@$dok[0]->ijazah_tidak_sesuai_baru+
					@$dok[0]->pendukung_tugas_baru


		?>
		
	</td>
	
</tr>





</table>



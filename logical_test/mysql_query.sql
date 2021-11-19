SELECT tb_mahasiswa.mhs_nama, MAX(tb_mahasiswa_nilai.nilai) as Nilai, tb_matakuliah.mk_kode 
FROM tb_matakuliah,tb_mahasiswa_nila,tb_mahasiswa 
WHERE tb_mahasiswa.mhs_id = tb_mahasiswa_nilai.mhs_id 
    AND tb_matakuliah.mk_id = tb_mahasiswa_nilai.mk_id 
    AND tb_mahasiswa.mhs_nama='Sari';
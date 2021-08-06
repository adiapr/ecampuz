SELECT tb_mahasiswa.mhs_nama, MAX(tb_mahasiswa_nilai.nilai) 
FROM tb_matakuliah,tb_mahasiswa_nilai,tb_mahasiswa 
WHERE tb_mahasiswa.mhs_id = tb_mahasiswa_nilai.mhs_id AND tb_matakuliah.mk_id = tb_mahasiswa_nilai.mk_id;
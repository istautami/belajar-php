-- membuat database fakultas
CREATE DATABASE fakultas;

-- buat table jurusan
CREATE TABLE jurusan (
    id INTEGER PRIMARY KEY AUTO_INCREMENT, 
    kode CHAR(4) NOT NULL,
    nama VARCHAR(50) NOT NULL
);

-- membuat table mahasiswa
CREATE TABLE mahasiswa (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    id_jurusan INTEGER NOT NULL,
    nim CHAR(8) NOT NULL,
    nama VARCHAR(50) NOT NULL,
    jenis_kelamin enum ('laki-laki', 'perempuan') NOT NULL,
    tempat_lahir VARCHAR(50) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    alamat VARCHAR(255) NOT NULL,
    FOREIGN KEY (id_jurusan) REFERENCES jurusan(id)
);

-- memasukan data jurusan
insert into jurusan (kode,nama) values ('ABCD','Manajemen');
insert into jurusan (kode,nama) values ('AKTS','Akutansi');

-- memasukkan data mahasiswa
 insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat) 
 values (1, '20220001', 'Ayu', 'perempuan', 'Malang', '2000-01-01', 'Jl. Soekarno Hatta No. 1');
 insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat) 
 values (1, '20220002', 'Bagus', 'laki-laki', 'Malang', '2000-01-02', 'Jl. Soekarno Hatta No. 2');
 insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat)
 values (1,'20220003', 'Agus', 'laki-laki', 'Malang', '2000-01-03', 'Jl. Soekarno Hatta');

 -- update data
update jurusan set kode = "MNJM" where id = 1;
update jurusan set nama = "Akuntansi" where id = 2;

-- delete data
delete from mahaiswa where id = 3;




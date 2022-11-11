CREATE DATABASE fakultas;

CREATE TABLE jurusan (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    kode CHAR (4) NOT NULL,
    nama VARCHAR(50) NOT NULL
);


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

-- insert jurusan
insert into jurusan(kode, nama) values ("PTIF", "Pendidikan Teknik Informatika");
Query OK, 1 row affected (0.171 sec)

-- insert mahasiswa
insert into mahasiswa(id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat) values (1, "20210028", "indi", "perempuan", "Mamasa", "2002-08-28", "Asrama A mahasiswa unima");

-- update mahasiswa
update mahasiswa set tempat_lahir = "makassar";

-- delete mahasiswa
delete from mahasiswa where id = 1;



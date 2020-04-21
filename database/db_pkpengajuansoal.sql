--
-- PostgreSQL database dump
--

-- Dumped from database version 12.2
-- Dumped by pg_dump version 12.2

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: tik; Type: SCHEMA; Schema: -; Owner: postgres
--

CREATE SCHEMA tik;


ALTER SCHEMA tik OWNER TO postgres;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: jadwal_kul; Type: TABLE; Schema: tik; Owner: postgres
--

CREATE TABLE tik.jadwal_kul (
    kodejdwl double precision NOT NULL,
    matakuliah_kodemk character varying(7) NOT NULL,
    kelas_kodeklas smallint NOT NULL,
    staff_nip numeric(20,0) NOT NULL,
    wkt_kuliah_kode_jam smallint NOT NULL,
    ruangan_namaruang character varying(5) NOT NULL,
    thn_akad_thn_akad_id double precision NOT NULL
);


ALTER TABLE tik.jadwal_kul OWNER TO postgres;

--
-- Name: jns_kls; Type: TABLE; Schema: tik; Owner: postgres
--

CREATE TABLE tik.jns_kls (
    nama_jnskls character varying(20) NOT NULL
);


ALTER TABLE tik.jns_kls OWNER TO postgres;

--
-- Name: jurusan; Type: TABLE; Schema: tik; Owner: postgres
--

CREATE TABLE tik.jurusan (
    kodejur double precision NOT NULL,
    namajur character varying(20) NOT NULL
);


ALTER TABLE tik.jurusan OWNER TO postgres;

--
-- Name: kelas; Type: TABLE; Schema: tik; Owner: postgres
--

CREATE TABLE tik.kelas (
    kodeklas smallint NOT NULL,
    namaklas character varying(7) NOT NULL,
    jns_kls_nama_jnskls character varying(20) NOT NULL,
    prodi_prodi_id double precision NOT NULL
);


ALTER TABLE tik.kelas OWNER TO postgres;

--
-- Name: kurikulum; Type: TABLE; Schema: tik; Owner: postgres
--

CREATE TABLE tik.kurikulum (
    namakur smallint NOT NULL,
    tgl_berlaku timestamp(0) without time zone NOT NULL,
    learn_out_prodi text NOT NULL,
    prodi_prodi_id double precision NOT NULL,
    thn_akad_thn_akad_id double precision NOT NULL
);


ALTER TABLE tik.kurikulum OWNER TO postgres;

--
-- Name: matakuliah; Type: TABLE; Schema: tik; Owner: postgres
--

CREATE TABLE tik.matakuliah (
    kodemk character varying(7) NOT NULL,
    namamk character varying(50) NOT NULL,
    sks_prak smallint NOT NULL,
    jam_prak smallint NOT NULL,
    sks_teori smallint NOT NULL,
    jam_teori smallint NOT NULL,
    cp_mk text NOT NULL,
    kurikulum_namakur smallint NOT NULL,
    semesterke smallint NOT NULL
);


ALTER TABLE tik.matakuliah OWNER TO postgres;

--
-- Name: pengurus_uts_uas; Type: TABLE; Schema: tik; Owner: postgres
--

CREATE TABLE tik.pengurus_uts_uas (
    kode_pengurus_utsuas bigint NOT NULL,
    bagian character varying(50),
    pengurus_utsuas_nip integer
);


ALTER TABLE tik.pengurus_uts_uas OWNER TO postgres;

--
-- Name: prodi; Type: TABLE; Schema: tik; Owner: postgres
--

CREATE TABLE tik.prodi (
    namaprod character varying(20) NOT NULL,
    jenprod character varying(2) NOT NULL,
    jurusan_kodejur double precision,
    prodi_id double precision NOT NULL
);


ALTER TABLE tik.prodi OWNER TO postgres;

--
-- Name: ruangan; Type: TABLE; Schema: tik; Owner: postgres
--

CREATE TABLE tik.ruangan (
    namaruang character varying(5) NOT NULL,
    kapasitas smallint NOT NULL,
    lokasi_gedung character varying(5) NOT NULL,
    status character(1) NOT NULL
);


ALTER TABLE tik.ruangan OWNER TO postgres;

--
-- Name: semester; Type: TABLE; Schema: tik; Owner: postgres
--

CREATE TABLE tik.semester (
    semester_nm smallint NOT NULL
);


ALTER TABLE tik.semester OWNER TO postgres;

--
-- Name: soal_uts_uas; Type: TABLE; Schema: tik; Owner: postgres
--

CREATE TABLE tik.soal_uts_uas (
    kode_soal integer NOT NULL,
    file "char",
    jenis_ujian character varying(20),
    jenis_soal character varying(20),
    status character varying(20),
    note character varying(255),
    create_at date,
    update_at date,
    uts_uas_kodejdwl double precision
);


ALTER TABLE tik.soal_uts_uas OWNER TO postgres;

--
-- Name: staff; Type: TABLE; Schema: tik; Owner: postgres
--

CREATE TABLE tik.staff (
    nip numeric(20,0) NOT NULL,
    nama character varying(50) NOT NULL,
    alamat character varying(50) NOT NULL,
    kec_staff character varying(20) NOT NULL,
    kel_staff character varying(20) NOT NULL,
    kota_staff character varying(20) NOT NULL,
    tlp_staff bigint NOT NULL,
    email_staff character varying(30) NOT NULL,
    usr_name character varying(20) NOT NULL,
    password character varying(12) NOT NULL,
    prodi_prodi_id double precision NOT NULL
);


ALTER TABLE tik.staff OWNER TO postgres;

--
-- Name: thn_akad; Type: TABLE; Schema: tik; Owner: postgres
--

CREATE TABLE tik.thn_akad (
    tahun_akad character varying(10),
    thn_akad_id double precision NOT NULL,
    semester_semester_nm smallint NOT NULL
);


ALTER TABLE tik.thn_akad OWNER TO postgres;

--
-- Name: wkt_kuliah; Type: TABLE; Schema: tik; Owner: postgres
--

CREATE TABLE tik.wkt_kuliah (
    kode_jam smallint NOT NULL,
    jam_mulai timestamp(0) without time zone NOT NULL,
    jam_selesai timestamp(0) without time zone NOT NULL
);


ALTER TABLE tik.wkt_kuliah OWNER TO postgres;

--
-- Data for Name: jadwal_kul; Type: TABLE DATA; Schema: tik; Owner: postgres
--

COPY tik.jadwal_kul (kodejdwl, matakuliah_kodemk, kelas_kodeklas, staff_nip, wkt_kuliah_kode_jam, ruangan_namaruang, thn_akad_thn_akad_id) FROM stdin;
1	PNJ1400	1	12345	1	AA301	1
2	TIF1401	1	12345	1	AA302	1
3	TIK1402	1	12345	1	AA303	1
\.


--
-- Data for Name: jns_kls; Type: TABLE DATA; Schema: tik; Owner: postgres
--

COPY tik.jns_kls (nama_jnskls) FROM stdin;
Reguler
\.


--
-- Data for Name: jurusan; Type: TABLE DATA; Schema: tik; Owner: postgres
--

COPY tik.jurusan (kodejur, namajur) FROM stdin;
1	TIK
\.


--
-- Data for Name: kelas; Type: TABLE DATA; Schema: tik; Owner: postgres
--

COPY tik.kelas (kodeklas, namaklas, jns_kls_nama_jnskls, prodi_prodi_id) FROM stdin;
1	TI 1A	Reguler	1
\.


--
-- Data for Name: kurikulum; Type: TABLE DATA; Schema: tik; Owner: postgres
--

COPY tik.kurikulum (namakur, tgl_berlaku, learn_out_prodi, prodi_prodi_id, thn_akad_thn_akad_id) FROM stdin;
1	2015-08-15 00:00:00	test	1	1
\.


--
-- Data for Name: matakuliah; Type: TABLE DATA; Schema: tik; Owner: postgres
--

COPY tik.matakuliah (kodemk, namamk, sks_prak, jam_prak, sks_teori, jam_teori, cp_mk, kurikulum_namakur, semesterke) FROM stdin;
PNJ1400	Pendidikan Kewarganegaraan	0	0	2	3	test	1	1
TIF1401	Algoritma & Pemrograman	2	5	1	1	test	1	1
TIF2401	Aljabar Linier	1	3	1	1	test	1	2
TIF2402	Struktur Data	2	5	1	1	test	1	2
TIF2403	Pemrograman Web 1	2	5	1	1	test	1	2
TIF2404	Basis  Data 1	1	3	2	2	test	1	2
TIK1401	Matematika Diskrit	1	3	1	1	test	1	1
TIK1402	Pengantar Teknologi Informasi & Komunikasi	1	3	1	1	test	1	1
TIK1403	Pendidikan Agama dalam TIK	0	0	2	3	test	1	1
TIK1404	Bahasa Inggris untuk TIK 1	1	3	1	1	test	1	1
TIK1405	Sistem operasi	2	5	1	1	test	1	1
TIK1406	Pengantar Multimedia 	2	5	1	1	test	1	1
TIK2401	Bahasa Indonesia untuk TIK	1	3	1	1	test	1	2
\.


--
-- Data for Name: pengurus_uts_uas; Type: TABLE DATA; Schema: tik; Owner: postgres
--

COPY tik.pengurus_uts_uas (kode_pengurus_utsuas, bagian, pengurus_utsuas_nip) FROM stdin;
\.


--
-- Data for Name: prodi; Type: TABLE DATA; Schema: tik; Owner: postgres
--

COPY tik.prodi (namaprod, jenprod, jurusan_kodejur, prodi_id) FROM stdin;
Teknik Informatika	D4	1	1
\.


--
-- Data for Name: ruangan; Type: TABLE DATA; Schema: tik; Owner: postgres
--

COPY tik.ruangan (namaruang, kapasitas, lokasi_gedung, status) FROM stdin;
AA301	30	AA	1
AA302	30	AA	1
AA303	30	AA	1
AA304	30	AA	1
AA305	30	AA	1
\.


--
-- Data for Name: semester; Type: TABLE DATA; Schema: tik; Owner: postgres
--

COPY tik.semester (semester_nm) FROM stdin;
1
2
\.


--
-- Data for Name: soal_uts_uas; Type: TABLE DATA; Schema: tik; Owner: postgres
--

COPY tik.soal_uts_uas (kode_soal, file, jenis_ujian, jenis_soal, status, note, create_at, update_at, uts_uas_kodejdwl) FROM stdin;
\.


--
-- Data for Name: staff; Type: TABLE DATA; Schema: tik; Owner: postgres
--

COPY tik.staff (nip, nama, alamat, kec_staff, kel_staff, kota_staff, tlp_staff, email_staff, usr_name, password, prodi_prodi_id) FROM stdin;
12345	Alvin	Jalan Tipar	Pasar Rebo	Pekayon	Jakarta Timur	878282	a@gmail.com	alvin	12345	1
\.


--
-- Data for Name: thn_akad; Type: TABLE DATA; Schema: tik; Owner: postgres
--

COPY tik.thn_akad (tahun_akad, thn_akad_id, semester_semester_nm) FROM stdin;
2017	1	1
\.


--
-- Data for Name: wkt_kuliah; Type: TABLE DATA; Schema: tik; Owner: postgres
--

COPY tik.wkt_kuliah (kode_jam, jam_mulai, jam_selesai) FROM stdin;
1	2020-04-19 10:00:00	2020-04-19 13:00:00
\.


--
-- Name: jadwal_kul jadwal_kul_pk; Type: CONSTRAINT; Schema: tik; Owner: postgres
--

ALTER TABLE ONLY tik.jadwal_kul
    ADD CONSTRAINT jadwal_kul_pk PRIMARY KEY (kodejdwl);


--
-- Name: jns_kls jns_kls_pk; Type: CONSTRAINT; Schema: tik; Owner: postgres
--

ALTER TABLE ONLY tik.jns_kls
    ADD CONSTRAINT jns_kls_pk PRIMARY KEY (nama_jnskls);


--
-- Name: jurusan jurusan_pk; Type: CONSTRAINT; Schema: tik; Owner: postgres
--

ALTER TABLE ONLY tik.jurusan
    ADD CONSTRAINT jurusan_pk PRIMARY KEY (kodejur);


--
-- Name: kelas kelas_pk; Type: CONSTRAINT; Schema: tik; Owner: postgres
--

ALTER TABLE ONLY tik.kelas
    ADD CONSTRAINT kelas_pk PRIMARY KEY (kodeklas);


--
-- Name: kurikulum kurikulum_pk; Type: CONSTRAINT; Schema: tik; Owner: postgres
--

ALTER TABLE ONLY tik.kurikulum
    ADD CONSTRAINT kurikulum_pk PRIMARY KEY (namakur);


--
-- Name: matakuliah matakuliah_pk; Type: CONSTRAINT; Schema: tik; Owner: postgres
--

ALTER TABLE ONLY tik.matakuliah
    ADD CONSTRAINT matakuliah_pk PRIMARY KEY (kodemk);


--
-- Name: pengurus_uts_uas pengurus_uts_uas_pk; Type: CONSTRAINT; Schema: tik; Owner: postgres
--

ALTER TABLE ONLY tik.pengurus_uts_uas
    ADD CONSTRAINT pengurus_uts_uas_pk PRIMARY KEY (kode_pengurus_utsuas);


--
-- Name: prodi prodi_pk; Type: CONSTRAINT; Schema: tik; Owner: postgres
--

ALTER TABLE ONLY tik.prodi
    ADD CONSTRAINT prodi_pk PRIMARY KEY (prodi_id);


--
-- Name: ruangan ruangan_pk; Type: CONSTRAINT; Schema: tik; Owner: postgres
--

ALTER TABLE ONLY tik.ruangan
    ADD CONSTRAINT ruangan_pk PRIMARY KEY (namaruang);


--
-- Name: semester semester_pk; Type: CONSTRAINT; Schema: tik; Owner: postgres
--

ALTER TABLE ONLY tik.semester
    ADD CONSTRAINT semester_pk PRIMARY KEY (semester_nm);


--
-- Name: soal_uts_uas soal_uts_uas_pk; Type: CONSTRAINT; Schema: tik; Owner: postgres
--

ALTER TABLE ONLY tik.soal_uts_uas
    ADD CONSTRAINT soal_uts_uas_pk PRIMARY KEY (kode_soal);


--
-- Name: staff staff_pk; Type: CONSTRAINT; Schema: tik; Owner: postgres
--

ALTER TABLE ONLY tik.staff
    ADD CONSTRAINT staff_pk PRIMARY KEY (nip);


--
-- Name: thn_akad thn_akad_pk; Type: CONSTRAINT; Schema: tik; Owner: postgres
--

ALTER TABLE ONLY tik.thn_akad
    ADD CONSTRAINT thn_akad_pk PRIMARY KEY (thn_akad_id);


--
-- Name: wkt_kuliah wkt_kuliah_pk; Type: CONSTRAINT; Schema: tik; Owner: postgres
--

ALTER TABLE ONLY tik.wkt_kuliah
    ADD CONSTRAINT wkt_kuliah_pk PRIMARY KEY (kode_jam);


--
-- Name: fki_pengurus_uts_uas_nip_fk; Type: INDEX; Schema: tik; Owner: postgres
--

CREATE INDEX fki_pengurus_uts_uas_nip_fk ON tik.pengurus_uts_uas USING btree (pengurus_utsuas_nip);


--
-- Name: fki_soal_uts_uas_kodejdwl_fk; Type: INDEX; Schema: tik; Owner: postgres
--

CREATE INDEX fki_soal_uts_uas_kodejdwl_fk ON tik.soal_uts_uas USING btree (uts_uas_kodejdwl);


--
-- Name: jadwal_kul jadwal_kul_kelas_fk; Type: FK CONSTRAINT; Schema: tik; Owner: postgres
--

ALTER TABLE ONLY tik.jadwal_kul
    ADD CONSTRAINT jadwal_kul_kelas_fk FOREIGN KEY (kelas_kodeklas) REFERENCES tik.kelas(kodeklas);


--
-- Name: jadwal_kul jadwal_kul_matakuliah_fk; Type: FK CONSTRAINT; Schema: tik; Owner: postgres
--

ALTER TABLE ONLY tik.jadwal_kul
    ADD CONSTRAINT jadwal_kul_matakuliah_fk FOREIGN KEY (matakuliah_kodemk) REFERENCES tik.matakuliah(kodemk);


--
-- Name: jadwal_kul jadwal_kul_ruangan_fk; Type: FK CONSTRAINT; Schema: tik; Owner: postgres
--

ALTER TABLE ONLY tik.jadwal_kul
    ADD CONSTRAINT jadwal_kul_ruangan_fk FOREIGN KEY (ruangan_namaruang) REFERENCES tik.ruangan(namaruang);


--
-- Name: jadwal_kul jadwal_kul_staff_fk; Type: FK CONSTRAINT; Schema: tik; Owner: postgres
--

ALTER TABLE ONLY tik.jadwal_kul
    ADD CONSTRAINT jadwal_kul_staff_fk FOREIGN KEY (staff_nip) REFERENCES tik.staff(nip);


--
-- Name: jadwal_kul jadwal_kul_thn_akad_fk; Type: FK CONSTRAINT; Schema: tik; Owner: postgres
--

ALTER TABLE ONLY tik.jadwal_kul
    ADD CONSTRAINT jadwal_kul_thn_akad_fk FOREIGN KEY (thn_akad_thn_akad_id) REFERENCES tik.thn_akad(thn_akad_id);


--
-- Name: jadwal_kul jadwal_kul_wkt_kuliah_fk; Type: FK CONSTRAINT; Schema: tik; Owner: postgres
--

ALTER TABLE ONLY tik.jadwal_kul
    ADD CONSTRAINT jadwal_kul_wkt_kuliah_fk FOREIGN KEY (wkt_kuliah_kode_jam) REFERENCES tik.wkt_kuliah(kode_jam);


--
-- Name: kelas kelas_jns_kls_fk; Type: FK CONSTRAINT; Schema: tik; Owner: postgres
--

ALTER TABLE ONLY tik.kelas
    ADD CONSTRAINT kelas_jns_kls_fk FOREIGN KEY (jns_kls_nama_jnskls) REFERENCES tik.jns_kls(nama_jnskls);


--
-- Name: kelas kelas_prodi_fk; Type: FK CONSTRAINT; Schema: tik; Owner: postgres
--

ALTER TABLE ONLY tik.kelas
    ADD CONSTRAINT kelas_prodi_fk FOREIGN KEY (prodi_prodi_id) REFERENCES tik.prodi(prodi_id);


--
-- Name: kurikulum kurikulum_prodi_fk; Type: FK CONSTRAINT; Schema: tik; Owner: postgres
--

ALTER TABLE ONLY tik.kurikulum
    ADD CONSTRAINT kurikulum_prodi_fk FOREIGN KEY (prodi_prodi_id) REFERENCES tik.prodi(prodi_id);


--
-- Name: kurikulum kurikulum_thn_akad_fk; Type: FK CONSTRAINT; Schema: tik; Owner: postgres
--

ALTER TABLE ONLY tik.kurikulum
    ADD CONSTRAINT kurikulum_thn_akad_fk FOREIGN KEY (thn_akad_thn_akad_id) REFERENCES tik.thn_akad(thn_akad_id);


--
-- Name: matakuliah matakuliah_kurikulum_fk; Type: FK CONSTRAINT; Schema: tik; Owner: postgres
--

ALTER TABLE ONLY tik.matakuliah
    ADD CONSTRAINT matakuliah_kurikulum_fk FOREIGN KEY (kurikulum_namakur) REFERENCES tik.kurikulum(namakur);


--
-- Name: pengurus_uts_uas pengurus_uts_uas_nip_fk; Type: FK CONSTRAINT; Schema: tik; Owner: postgres
--

ALTER TABLE ONLY tik.pengurus_uts_uas
    ADD CONSTRAINT pengurus_uts_uas_nip_fk FOREIGN KEY (pengurus_utsuas_nip) REFERENCES tik.staff(nip);


--
-- Name: prodi prodi_jurusan_fk; Type: FK CONSTRAINT; Schema: tik; Owner: postgres
--

ALTER TABLE ONLY tik.prodi
    ADD CONSTRAINT prodi_jurusan_fk FOREIGN KEY (jurusan_kodejur) REFERENCES tik.jurusan(kodejur) ON DELETE SET NULL;


--
-- Name: soal_uts_uas soal_uts_uas_kodejdwl_fk; Type: FK CONSTRAINT; Schema: tik; Owner: postgres
--

ALTER TABLE ONLY tik.soal_uts_uas
    ADD CONSTRAINT soal_uts_uas_kodejdwl_fk FOREIGN KEY (uts_uas_kodejdwl) REFERENCES tik.jadwal_kul(kodejdwl);


--
-- Name: staff staff_prodi_fk; Type: FK CONSTRAINT; Schema: tik; Owner: postgres
--

ALTER TABLE ONLY tik.staff
    ADD CONSTRAINT staff_prodi_fk FOREIGN KEY (prodi_prodi_id) REFERENCES tik.prodi(prodi_id);


--
-- Name: thn_akad thn_akad_semester_fk; Type: FK CONSTRAINT; Schema: tik; Owner: postgres
--

ALTER TABLE ONLY tik.thn_akad
    ADD CONSTRAINT thn_akad_semester_fk FOREIGN KEY (semester_semester_nm) REFERENCES tik.semester(semester_nm);


--
-- PostgreSQL database dump complete
--


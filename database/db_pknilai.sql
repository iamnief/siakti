--
-- PostgreSQL database dump
--

-- Dumped from database version 12.1
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

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: MAHASISWA; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."MAHASISWA" (
    nim character varying(13) NOT NULL,
    nama_mhs character varying(50) NOT NULL,
    add_mhs character varying(50) NOT NULL,
    add_kel_mhs character varying(20) NOT NULL,
    add_kec_mhs character varying(20) NOT NULL,
    add_kota_mhs character varying(20) NOT NULL,
    bpk_mhs character varying(50) NOT NULL,
    add_bpk_mhs character varying(50),
    kel_bpk character varying(20),
    kec_bpk character varying(20),
    kota_bpk character varying(20),
    ibu_mhs character varying(50) NOT NULL,
    add_ibu_mhs character varying(50),
    kel_ibu character varying(20),
    kec_ibu character varying(20),
    kota_ibu character varying(20),
    tlp_mhs character varying(13) NOT NULL,
    tlp_bpk character varying(13) NOT NULL,
    tlp_ibu character varying(13) NOT NULL,
    profesi_bpk character varying(50) NOT NULL,
    profesi_ibu character varying(50) NOT NULL,
    penghasilan_bpk integer NOT NULL,
    email_mhs character varying(30) NOT NULL,
    email_ortu character varying(30) NOT NULL,
    kelas_kodeklas integer NOT NULL,
    thn_akad_thn_akad_id integer NOT NULL,
    usr_name character varying(15) NOT NULL,
    password character varying(15) NOT NULL,
    prodi_prodi_id integer NOT NULL
);


ALTER TABLE public."MAHASISWA" OWNER TO postgres;

--
-- Name: MATAKULIAH; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."MATAKULIAH" (
    kodemk character varying(7) NOT NULL,
    namamk character varying(25) NOT NULL,
    sks_prak integer NOT NULL,
    jam_prak integer NOT NULL,
    sks_teori integer NOT NULL,
    jam_teori integer NOT NULL,
    cp_mk oid NOT NULL,
    kurikulum_namakur integer NOT NULL,
    semesterke integer NOT NULL
);


ALTER TABLE public."MATAKULIAH" OWNER TO postgres;

--
-- Name: NILAI; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."NILAI" (
    latihan integer NOT NULL,
    uts integer NOT NULL,
    uas integer NOT NULL,
    staff_nip bigint NOT NULL,
    mahasiswa_nim character varying(13) NOT NULL,
    kodejdwl integer NOT NULL,
    total_nilai real NOT NULL,
    angka_nilai character(2) NOT NULL,
    matakuliah_kodemk character varying(7) NOT NULL,
    id_nilai integer NOT NULL
);


ALTER TABLE public."NILAI" OWNER TO postgres;

--
-- Name: STAFF; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."STAFF" (
    nip bigint NOT NULL,
    nama character varying(50) NOT NULL,
    alamat character varying(50) NOT NULL,
    kel_staff character varying(20) NOT NULL,
    kec_staff character varying(20) NOT NULL,
    kota_staff character varying(20) NOT NULL,
    tlp_staff character varying(13) NOT NULL,
    email_staff character varying(30) NOT NULL,
    usr_name character varying(20) NOT NULL,
    password character varying(20) NOT NULL,
    prodi_prodi_id integer NOT NULL
);


ALTER TABLE public."STAFF" OWNER TO postgres;

--
-- Data for Name: MAHASISWA; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public."MAHASISWA" (nim, nama_mhs, add_mhs, add_kel_mhs, add_kec_mhs, add_kota_mhs, bpk_mhs, add_bpk_mhs, kel_bpk, kec_bpk, kota_bpk, ibu_mhs, add_ibu_mhs, kel_ibu, kec_ibu, kota_ibu, tlp_mhs, tlp_bpk, tlp_ibu, profesi_bpk, profesi_ibu, penghasilan_bpk, email_mhs, email_ortu, kelas_kodeklas, thn_akad_thn_akad_id, usr_name, password, prodi_prodi_id) FROM stdin;
4617010036	Muhammad Ridwan Ramadhan	Jl. Pendidikan No.26 RT 011 RW 009	Pekayon	Pasar Rebo	Jakarta Timur	Sugiyono	Jl. Pendidikan No.26 RT 011 RW 009	Pekayon	Pasar Rebo	Jakarta Timur	Siti Marpuah	Jl. Pendidikan No.26 RT 011 RW 009	Pekayon	Pasar Rebo	Jakarta Timur	82110883990	811988265	81213654830	Karyawan Swasta	Ibu Rumah Tangga	10000000	ridwan@web.id	sugiyono@web.id	1	1	ridwanramadhan	admin123	1
4617010016	Harun	Jl. xxx	mekarsari	cimanggis	depok	budi	jl. xxx	mekarsari	cimanggis	depok	ani	jl. xxx	mekarsari	cimanggis	depok	089615160238	089615160238	089615160238	karyawan swasta	ibu rumah tangga	10000000	harun@web.id	budi@web.id	1	1	harunarrsyd	harun123	1
4617010025	Arifah Fariza	Jl. xxx	srengseng sawah	jagakarsa	jakarta selatan	budi	jl. xxx	srengseng sawah	jagakarsa	jakarta selatan	ani	jl. xxx	srengseng sawah	jagakarsa	jakarta selatan	085843020340	085843020340	085843020340	karyawan swasta	ibu rumah tangga	10000000	arifah@web.id	budi@web.id	1	1	arifahfrz	arifah123	1
4617010029	Nely Febrianita	Jl. xxx	srengseng sawah	jagakarsa	jakarta selatan	budi	jl. xxx	srengseng sawah	jagakarsa	jakarta selatan	ani	jl. xxx	srengseng sawah	jagakarsa	jakarta selatan	089655101514	089655101514	089655101514	karyawan swasta	ibu rumah tangga	10000000	nely@web.id	budi@web.id	1	1	nelyfbrnt	nely123	1
\.


--
-- Data for Name: MATAKULIAH; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public."MATAKULIAH" (kodemk, namamk, sks_prak, jam_prak, sks_teori, jam_teori, cp_mk, kurikulum_namakur, semesterke) FROM stdin;
1	Proyek Kekhususan	3	3	3	3	1	2015	6
2	Pemrograman Web 3	3	3	3	3	1	2015	6
3	Algoritma dan Pemrograman	3	3	3	3	1	2015	1
4	Data Warehouse	2	2	2	2	1	2015	4
5	Pemrograman Web 3	3	3	3	3	1	2015	6
\.


--
-- Data for Name: NILAI; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public."NILAI" (latihan, uts, uas, staff_nip, mahasiswa_nim, kodejdwl, total_nilai, angka_nilai, matakuliah_kodemk, id_nilai) FROM stdin;
80	80	80	123456789	4617010036	1	3.5	B 	1	1
100	90	90	123456789	4617010016	1	3.8	A-	1	2
\.


--
-- Data for Name: STAFF; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public."STAFF" (nip, nama, alamat, kel_staff, kec_staff, kota_staff, tlp_staff, email_staff, usr_name, password, prodi_prodi_id) FROM stdin;
123456789	Anggi	Jl. Nangka	Sukmajaya	Cilodong	Bogor	85227622664	anggi@web.id	anggi	anggi123	1
987654321	Iklima	jl. persatuab	duren sawit	tebet	jakarta selatan	081287393851	iklima@web.id	iklimaaaa	iklima123	1
\.


--
-- Name: NILAI NILAI_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."NILAI"
    ADD CONSTRAINT "NILAI_pkey" PRIMARY KEY (id_nilai);


--
-- Name: MATAKULIAH TIK.MATAKULIAH_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."MATAKULIAH"
    ADD CONSTRAINT "TIK.MATAKULIAH_pkey" PRIMARY KEY (kodemk);


--
-- Name: MAHASISWA mahasiswa_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."MAHASISWA"
    ADD CONSTRAINT mahasiswa_pk PRIMARY KEY (nim);


--
-- Name: STAFF staff_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."STAFF"
    ADD CONSTRAINT staff_pk PRIMARY KEY (nip);


--
-- Name: NILAI nilai_mahasiswa_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."NILAI"
    ADD CONSTRAINT nilai_mahasiswa_fk FOREIGN KEY (mahasiswa_nim) REFERENCES public."MAHASISWA"(nim);


--
-- Name: NILAI nilai_matakuliah_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."NILAI"
    ADD CONSTRAINT nilai_matakuliah_fk FOREIGN KEY (matakuliah_kodemk) REFERENCES public."MATAKULIAH"(kodemk) NOT VALID;


--
-- Name: NILAI nilai_staff_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."NILAI"
    ADD CONSTRAINT nilai_staff_fk FOREIGN KEY (staff_nip) REFERENCES public."STAFF"(nip) NOT VALID;


--
-- PostgreSQL database dump complete
--


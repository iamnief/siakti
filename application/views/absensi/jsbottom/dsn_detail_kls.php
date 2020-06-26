<script type="text/javascript">
    $(document).ready(function() {
        $('#absen_mahasiswa').DataTable({
            "ajax": {
                "url": "<?php echo site_url("absensi_dosen/absen_kelas/") ?>" + $('#kode').val()
            },
            "columns": [{
                "data": "nama_mhs"
            }, {
                "data": "mahasiswa_nim"
            }, {
                "data": "status"
            }],
            "processing": true,
            "serverSide": true,
        })
    });
</script>
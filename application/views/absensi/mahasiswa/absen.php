<!-- Content Header (Page header) -->


<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Absen QR Code</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Absensi</a></li>
          <li class="breadcrumb-item active">Absen QR Code</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div style="text-align: center; margin:0;">
  <a id="btn-scan-qr" style="
        height: 10em;
        width: 10em;
        margin-left: auto;
        margin-right: auto;">
    <img src="<?php echo base_url(); ?>assets/dist/img/scanqr.png" style="
        height: 10em;
        width: 10em;
        padding: 5px 5px 0px 5px;
        background: white;
        cursor: pointer;
      ">
  </a>
  <canvas style="
      margin: auto;
      width: calc(100% - 20px);
      max-width: 400px;
    " hidden="" id="qr-canvas">
  </canvas>
  <br>
  <input id="btn-cancel-scan" type="button" style="margin-top: 0px;" value="Cancel" hidden="" />
  <div id="qr-result" hidden="" style="background-color: white; padding:15px; margin-top:10px">
    <input id="outputData" hidden></input>
    <b>Pesan:</b> <span id="message"></span>
  </div>
</div>

<!-- <input id="qrCodeValue" type="hidden" value="tes" />
<div style="
        width: 100%;
      ">
  <div id="qrCode" style="
          width:350px; 
          height:350px;
          margin-top: 10vh;
          margin-left: auto;
          margin-right: auto;
        ">
  </div>
</div> -->
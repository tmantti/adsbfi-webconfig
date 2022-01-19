<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/bootstrap.bundle.min.js"></script>
<style>  
.btn-margin-bottom{
    margin-bottom: 5px !important;
}
body {
  background-color: #343434;
  color: #FFF;
}
.adsbx-green {
 color: #FFF;
}
.container-margin {
        padding: 10px 20px !important;
}

.logo-margin {
        padding: 10px 0px !important;
}

.btn-primary {
    color: #fff;
    border-color: #545454;
    background-color: #828282;
}

.alert-success {
    color: #686868;
    font-weight: 900;
    background-color: #29d682;
    border-color: #828282;
}
</style>

</head>
<body class="container-margin">
<div class="container-sm">
<div class="d-grid gap-1 col-0 mx-auto">
        <h4 class="adsbx-green logo-margin"><img src="img/adsbx-svg.svg" width="35px"/>  ADSBexchange.com</h4>
        <h6>Custom Receiver Software<br /><br />Main Menu</h6>
        <?php
        $receivername=file_get_contents("/tmp/webconfig/name");
        $location = file_get_contents("/tmp/webconfig/location");
        ?>
        Receiver Name:<br /><div class="alert alert-success" role="alert"><?php echo $receivername ?></div>
        Approximate Configured Location:<br /><div class="alert alert-success" role="alert"><?php echo $location ?></div>

        <a class="btn btn-primary" href="/wifi"/>Configure WiFi<a/>
        <a class="btn btn-primary" href="/config"/>Configure Receiver/Location<a/>
        <a class="btn btn-primary" href="/sdr-assign"/>Assign SDRs to services <br />(for multiple SDR Installs)</a>
        <a class="btn btn-primary" href="/auth"/>Authentication and System Tools<a/>
        <a class="btn btn-primary" href="/info"/>System Info<a/>
        <a class="btn btn-primary" href="/tar1090"/>1090 map (default)<a/>
        <a class="btn btn-primary" href="/978"/>978 map (if enabled, US only)<a/>
        <a class="btn btn-primary" href="/tar1090/?pTracks"/>8 hours of tracks<a/>
        <a class="btn btn-primary" href="/graphs1090"/>graphs1090<a/>
        <a class="btn btn-primary" href="/" onclick="javascript:event.target.port=3000"/>Grafana Dashboard<a/>
        <a class="btn btn-primary" href="https://www.adsbexchange.com/myip/"/>ADSBexchange Status<a/>
</div>
</div>
</body>
</html>





























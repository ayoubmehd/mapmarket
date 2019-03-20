<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
   integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
   crossorigin=""/>
    <link rel="stylesheet" href="<?php echo base_url('assets')?>/css/linearicons.css">
	<link rel="stylesheet" href="<?php echo base_url('assets')?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url('assets')?>/css/themify-icons.css">
	<link rel="stylesheet" href="<?php echo base_url('assets')?>/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url('assets')?>/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo base_url('assets')?>/css/nice-select.css">
	<link rel="stylesheet" href="<?php echo base_url('assets')?>/css/nouislider.min.css">
	<link rel="stylesheet" href="<?php echo base_url('assets')?>/css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="<?php echo base_url('assets')?>/css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="<?php echo base_url('assets')?>/css/magnific-popup.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.default.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.css">
	<link rel="stylesheet" href="<?php echo base_url('assets')?>/css/main.css">
	
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
   integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
   crossorigin=""/>
   <style>
        #map {
            width:100%;
            height:100%;
            margin:0;
        }
   </style>
    <title>Home</title>
</head>
<body>
    <div id="map" class="mapBox"></div>
        
    
    <script src="<?php echo base_url('assets')?>/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
            crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets')?>/js/vendor/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets')?>/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo base_url('assets')?>/js/jquery.nice-select.min.js"></script>
    <script src="<?php echo base_url('assets')?>/js/jquery.sticky.js"></script>
    <script src="<?php echo base_url('assets')?>/js/nouislider.min.js"></script>
    <script src="<?php echo base_url('assets')?>/js/countdown.js"></script>
    <script src="<?php echo base_url('assets')?>/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url('assets')?>/js/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/selectize.min.js"></script>
    <script src="<?php echo base_url('assets')?>/js/costom.js"></script>

    <!-- Ajax -->
    <script src="<?php echo base_url('js')?>/ajax.js"></script>

    <!-- Map -->
    <script src="<?php echo base_url('assets')?>/js/gmaps.min.js"></script>
    <script src="<?php echo base_url('assets')?>/js/main.js"></script>
    <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
    integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
    crossorigin=""></script>
    <script>

        var map = L.map('map').setView([33.5731, -7.5898], 6);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var marker = L.marker([33.5731, -7.5898]).addTo(map)
            .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
            .openPopup();
    
    </script>
</body>
</html>
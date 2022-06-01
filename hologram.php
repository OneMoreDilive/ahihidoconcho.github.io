﻿<html>
    <head>
        <script src="nui://game/ui/jquery.js" type="text/javascript"></script>
        <script src="js/main.js" type="text/javascript"></script>
    </head>
    <body>
		<div class="speedometer">
			<div class="geardisplay">Sốx <span>1</span></div>
			<div class="speeddisplay"><span class="gray int1">0</span><span class="gray int2">0</span><span class="gray int3">0</span></div>
			<div class="unitdisplay">KM/H</div>
			<div class="abs"><span class="gray">ABS</span></div>
			<div class="handbrake"><span class="gray">HBK</span></div>
			<div class="rpmbg"><div class="rpm"></div></div>
		</div>
    </body>
	<script type="text/javascript">
	var hashData = decodeURIComponent(window.location.hash).substr(1,);
	if(hashData != "") {
		try {
			var json = JSON.parse(hashData);
			if(json.unit != undefined && json.unit != null) {
				$(".unitdisplay").html(json.unit);
			}
			if(json.nve != undefined && json.nve != null) {
				if(json.nve) {
					$("head").append('<link href="css/main-nve.css" rel="stylesheet" type="text/css" />');
				} else {
					$("head").append('<link href="css/main.css" rel="stylesheet" type="text/css" />');
				}
			} else {
				$("head").append('<link href="css/main-nve.css" rel="stylesheet" type="text/css" />');
			}
		} catch(e) {
			$("head").append('<link href="css/main.css" rel="stylesheet" type="text/css" />');
		}
	}
	</script>
</html>

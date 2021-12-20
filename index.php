
<html>
<head>
<link rel="shortcut icon" type="image/png" href="assets/images/logo2.png">
<title>VALLOUREC SINGAPORE - PORTAL </title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="CLARA-Q  Portal" />

	 <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

   <!-- Bootstrap -->
   <link href="assets/bootstrap/css/bootstrap-grid.css" rel="stylesheet" type="text/css" media="all" />
   <link href="assets/bootstrap/css/bootstrap-grid.css.map" rel="stylesheet" type="text/css" media="all" />
   <link href="assets/bootstrap/css/bootstrap-grid.min.css" rel="stylesheet" type="text/css" media="all" />
   <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
   <link href="assets/bootstrap/css/bootstrap.css.map" rel="stylesheet" type="text/css" media="all" />
   <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
   <link href="assets/bootstrap/css/bootstrap.min.css.map" rel="stylesheet" type="text/css" media="all" />
   <!-- //Bootstrap -->

	<!-- Custom Theme files -->
	<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //Custom Theme files -->

	<!-- web font -->
	<link href="assets/css/font2.css" rel="stylesheet">
	<!-- //web font -->

</head>
<body>

<!-- main -->
<div class="w3layouts-main">
	<div class="bg-layer">
		<h1>VALLOUREC SINGAPORE - PORTAL</h1>
		<div class="header-main" style="max-width: none;">
			<div class="main-icon">

				<ul>
					<div class="row">

						<div class="col-md-3 apps" style="color: white; margin-bottom: 30px; margin-top: 30px;" id="bria" data-name="Department Employee">
							<img src="assets/images/department_employee.png" style="width: 120px; height: 120px; cursor: pointer;" onclick="gourl('https://hrd.citratubindo.com/hr_program/vapc/employee')">
							<p style="cursor: pointer;" onclick="gourl('https://hrd.citratubindo.com/hr_program/vapc/employee')">Department Employee</p>
						</div>

						<div class="col-md-3 apps" style="color: white; margin-bottom: 30px; margin-top: 30px;" id="bria" data-name="NIKITA">
							<img src="assets/images/individual_perform.png" style="width: 120px; height: 120px; cursor: pointer;" onclick="gourl('https://hrd.citratubindo.com/hr_program/nikita_vapc')">
							<p style="cursor: pointer;" onclick="gourl('https://hrd.citratubindo.com/hr_program/nikita_vapc')">NIKITA</p>
						</div>

						<div class="col-md-3 apps" style="color: white; margin-bottom: 30px; margin-top: 30px;" id="bria" data-name="BoP for Vapc">
							<img src="assets/images/opinion.png" style="width: 120px; height: 120px; cursor: pointer;" onclick="gourl('https://bop-vapc.citratubindo.com')">
							<p style="cursor: pointer;" onclick="gourl('https://bop-vapc.citratubindo.com')">Bank of Point (BoP)</p>
						</div>

						<div class="col-md-3 apps" style="color: white; margin-bottom: 30px; margin-top: 30px;" id="bria" data-name="Clara Q VAPC">
							<img src="assets/images/clara.png" style="width: 120px; height: 120px; cursor: pointer;" onclick="gourl('https://hrd.citratubindo.com/hr_program/vapc/clara')">
							<p style="cursor: pointer;" onclick="gourl('https://hrd.citratubindo.com/hr_program/vapc/clara')">CLARA Q</p>
						</div>





				</ul>
			</div>
		</div>

		<!-- copyright -->
		<div class="copyright">
			<p>© PTCT - HR <?=date('Y')?> . All rights reserved
				<!--  | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts --></a></p>
		</div>
		<!-- //copyright -->
	</div>
</div>

</body>
</html>

<script src="assets/js/jquery-3.3.1.min.js"></script>

<script>
	function myFunction(){
		var input = document.getElementById("search");
		var filter = input.value.toLowerCase();
		var nodes = document.getElementsByClassName('apps');

		for (i = 0; i < nodes.length; i++) {
		    if (nodes[i].innerText.toLowerCase().includes(filter)) {
		      nodes[i].style.display = "block";
		    } else {
		      nodes[i].style.display = "none";
		    }
		}
	}

	function gourl(myurl){
		window.open(myurl,'_blank');
	}
</script>

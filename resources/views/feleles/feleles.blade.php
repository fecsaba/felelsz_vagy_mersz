<!DOCTYPE html>
<html>
<head>
	<title>FVM</title>

	<link href="https://fonts.googleapis.com/css?family=Amatic+SC|Major+Mono+Display&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href={{asset("css/feleles.css")}}>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<meta charset="UTF-8">
	<meta http-equiv="X-UA_Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Oldal leírás helye">
</head>

<body>
	<div class="test">
		<div class="cim">
			<div class="cim_div">
		 		<a href="/nehezseg" id="vissza"><i class="fa fa-angle-left"></i> Vissza</a>
			</div>
			<div class="cim_div">
				<div class="cim_div_bg">
					Felelsz
				</div>
			</div>
			<div class="cim_div">

			</div>
		</div>
		<div class="kerdes">
			{{$data['question']}}
		</div>
		<div class="terkoz">
		 	<a href="/valassz/{{$data['szint']}}" id="nav_gomb">Következő <i class="fa fa-angle-right"></i></a>
		</div>
	</div>
</body>


<!DOCTYPE html>

<head>
	<link rel="stylesheet" href="../Weather/Assets/css/style.css">
	<link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<link rel="stylesheet" href=
"https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
	<title>weather app</title>
</head>
<style>
   
</style>
<body>
	<div class="container">
		<div class="weatherapp">
		<div class="weatherheading">
			<h3>Weather App</h3>
		</div>
			<input type="text" id="city-input"
				placeholder="Enter city name">
			<button id="city-input-btn"
					onclick="weatherFn($('#city-input').val())">
					Get Weather
			</button>
			<div id="weather-info"
				class="animate__animated animate__fadeIn">
				<h3 id="city-name"></h3>
				<p id="date"></p>
				<img id="weather-icon" src="assets/images" alt="Weather Icon">
				<p id="temperature"></p>
				<p id="description"></p>
			</div>
		</div>
	</div>
	<script src=
"https://code.jquery.com/jquery-3.6.0.min.js">
	</script>
	<script src=
"https://momentjs.com/downloads/moment.min.js">
	</script>
	<script src="../Weather/Assets/js/script.js"></script>

</body>
</html>
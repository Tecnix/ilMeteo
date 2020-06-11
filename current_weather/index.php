<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Weather app</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div class="container">
  <div style="text-align:right">
		<form action="../logout/logout.php">
			<button type="submit">LOGOUT</button>
		</form>
	</div>
    <header>
      <input type="text" autocomplete="off" class="search-box" placeholder="Inserisci la città da cercare..." />
    </header>
    <main>
      <section class="location">
        <div class="city">Roma, IT</div>
        <div class="date">Giovedì 11 Giugno 2020</div>
      </section>
      <div class="current">
        <div class="temp">16<span>°c</span></div>
        <div class="weather">Pioggia</div>
        <div class="hi-low">13°c / 22°c</div>
      </div>
    </main>
  </div>
  <script src="main.js"></script>
</body>
</html>
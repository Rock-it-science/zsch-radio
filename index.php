<!DOCTYPE html>
<meta charset="utf-8"/>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div class='title-bar'>
      <img src="img/zschtext.png" />
    </div>
    <div class='container'>
      <!--player-->
      <div class='player-div'>
        <!-- Now playing info -->
        <div class='now-playing'>
          <H2>Now playing</H2>
          <p id='nowPlaying'>Now loading... If this persists, stream is likely offline</p>
					<script>
					setInterval(function() {
	    			var request = new XMLHttpRequest();
	    			request.onreadystatechange = function() {
		         	if (request.readyState == 4 && request.status == 200) {
								document.getElementById('nowPlaying').innerHTML = request.responseText;
		         	}
		      	}
				    request.open('GET', 'radiodj/getNowPlaying.php', true);
				    request.send();
					}, 5000);
					</script>
        </div>
        <audio controls src="http://3.135.130.105:8000/stream.mp3"></audio>
      </div>
    </div>

      <div class="footer">
        <a href='dynamicYoutube/index_old.html'>Dynamic YouTube embed (old version)</a>
        <a href='about.html'>about</a>
      </div>
  </body>
</html>

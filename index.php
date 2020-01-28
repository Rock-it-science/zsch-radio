<!DOCTYPE html>
<meta charset="utf-8"/>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style/style.css">
  </head>
  <body>
    <div class='title-bar'>
      <img src="img/zschtext.png" />
    </div>
    <div class='nav-bar'>
      <a href='index_old.html'>Dynamic YouTube embed (old version)</a>
      <a href='about.html'>about</a>
    </div>
    <div class='container'>

      <!--player-->
      <div class='player-div'>
        <audio controls src="http://3.135.130.105:8000/stream.mp3"></audio>
        <!-- Now playing info -->
        <div class='now playing'>
          <H2>Now playing</H2>
          <p id='nowPlaying'></p>
					<script>
					setInterval(function() {
	    			var request = new XMLHttpRequest();
	    			request.onreadystatechange = function() {
		         	if (request.readyState == 4 && request.status == 200) {
								document.getElementById('nowPlaying').innerHTML = request.responseText;
		         	}
		      	}
				    request.open('GET', 'getNowPlaying.php', true);
				    request.send();
					}, 5000);
					</script>
        </div>
      </div>

      <!-- Schedule -->
      <div class='schedule'>
        <table>
          <col width = 40%>
          <col width = 60%>
          <tr>
            <th colspan=2><b>Schedule</b></th>
          </tr>
          <tr>
            <td>
              Album of the Week
            </td>
            <td>
              Mon-Fri @ 5pm
            </td>
          </tr>
          <tr>
            <td>
              EP of the Weekend
            </td>
            <td>
              Sat-Sun @ 5pm
            </td>
          </tr>
            <td>
              Radio Shows
            </td>
            <td>
              Premieres on Saturday morning-afternoon<br />
              Replays daily
            </td>
          </tr>
        </table>
      </div>
    </div>
  </body>
</html>

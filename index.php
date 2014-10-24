<?php
require('auth.inc.php');

?>
<html>
<head>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lobster+Two:400,700italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/default.css">
</head>
<body>
	<center>
	<div id="content">
	<div id="personalbar">
		1 Gruszka, Gregor (TW), SPIELER, TRAINER [Logout]
	</div>
	<div id="upcoming">
	<table>
		<tr>
			<th>Datum</th>
			<th>Tag</th>
			<th>Treffpunkt</th>
			<th>Gegner</th>
			<th>Zusagen</th>
			<th>Mein Status</th>
			<th>Typ</th>
			<th>Ort</th>
		</tr>
		<tr>
			<td>10.Nov</td>
			<td>Sonntag</td>
			<td>11:00</td>
			<td><a href="http://www.royalbavarianliga.de/teaminfo.php?teamid=o1283">1.FC St. Fouli</a></td>
			<td><span class="good">14</span></td>
			<td><span class="good">ZUSAGE</span></td>
			<td>Friendly</td>
			<td>Papinstraße 22</td>
		</tr>
		<tr>
			<td>17.Nov</td>
			<td>Sonntag</td>
			<td>8:00</td>
			<td><a href="http://www.royalbavarianliga.de/teaminfo.php?teamid=o1283">Kickinesen</a></td>
			<td><span class="ok">11</span></td>
			<td><span class="bad">ABSAGE</span></td>
			<td>Friendly</td>
			<td>Papinstraße 22</td>
		</tr>
				<tr>
			<td>24.Nov</td>
			<td>Sonntag</td>
			<td>10:00</td>
			<td><a href="http://www.royalbavarianliga.de/teaminfo.php?teamid=o1283">Dynamo Tresen</a></td>
			<td><span class="bad">5</span></td>
			<td><span class="good">ZUSAGE</span></td>
			<td>Liga</td>
			<td>Aubingerstr. 22</td>
		</tr>
	</table>
	</div>
	<div id="matchday">
		<div id="playercount">
			<div class="iconbox accpted good"><div class="icontitle">Zugesagt</div>14</div>
			<div class="iconbox notsure ok"><div class="icontitle">Unsicher</div>2</div>
			<div class="iconbox reject bad"><div class="icontitle">Abgesagt</div>3</div>
			<div class="iconbox absence bad"><div class="icontitle">Abwesend</div>3</div>
			<div class="iconbox injured bad"><div class="icontitle">Verletzt</div>1</div>
			<div class="iconbox open ok"><div class="icontitle">Offen</div>8</div>
		</div>
		<table id="matchinfo">
			<tr><td>SPIELART:</td><td>Freundschaftsspiel</td></tr>
			<tr><td>DATUM:</td><td>Sonntag, 13. Oktober 2013</td></tr>
			<tr><td>TREFFPUNKT:</td><td>10:20 Uhr</td></tr>
			<tr><td>ANPFIFF:</td><td>11:00 Uhr</td></tr>
			<tr><td>ORT:</td><td>Papinstr. 22, in 81243 München</td></tr>
			<tr><td>GEGNER:</td><td>FC Pele Olé</td></tr>
			<tr><td>PLATZART:</td><td>Naturrasen</td></tr>
			<tr><td>SCHIEDSRICHTER:</td><td>Heiko Mundry (Qualifizierter Verbandsschiedsrichter mit über 60 Einsätze letztes Jahr in der RBL)</td></tr>
			<tr><td colspan=2 class="infotext">Der Druck steigt!!!
Die letzten drei Hürden stehen vor der Tür und in den nächsten 3 Wochen entscheidet sich ob der LUMENTUS F.C. wieder zur 2.Liga gehört oder in der guten alten 3. Liga bleibt.
Bisher haben sich LUMENTUS und der FC Pelé Olé erst in 2 Freundschaftsspielen (vor vier Jahren) getroffen. Die zwei Spielberichte findet ihr unter folgendem Link.
http://www.royalbavarianliga.de/spielinfo.php?saison=2009&spielid=o20451
http://www.royalbavarianliga.de/spielinfo.php?saison=2009&spielid=o20448
 
Noch etwas zur Tabellsituation:
Die Habibs Winners müssten heuer noch 5 Spiele absolvieren um die "75%-Regel" zu erreichen. Das bedeutet, daß wenn die Habibs Winners im Oktober nicht insgesamt auf 10 Spiele kommen, aus der Wertung fallen werden. Dies hätte zur Folge, daß Dynamo Tresen und die LAP Grashoppers die 3 bereits erhaltenen Punkte verlieren würden. Matadores würde die Tabelle mit 22 Punkten abschließen. Wir hingegen würden nur einen Punkt verlieren, weil wir im Blitz-und-Hagel-Spiel 1:1 gespielt haben.  
Somit könnten wir durch 3 Siege sogar Meister der 3.Liga C werden. Vorausgesetzt wir schlagen Dynamo Tresen, welche ich eine Stufe stärker als Matadores einschätze.
In der Praxis sind 3 Siege in den letzten 3 Spielen zwar möglich aber zugleich auch eine rießige Überraschung wenn diese Kombination wirklich eintreffen sollte. Vielleicht leistet aber Deportivo Sudamerica Schützenhilfe am kommenden Samstag im Spiel gegen Dynamo Tresen(?)
Wir werden sehen.</td></tr>
		</table>
		<div id="playerlist">
			<table>
				<tr>
					<th colspan="4">Zugesagt</th>
				</tr>
				<tr><td>1</td><td class="username">Gregor Gruszka</td><td>TW</td><td class="good">ZUSAGE</td></tr>
				<tr><td>4</td><td class="username">Patrick Cerchi</td><td>MF</td><td class="good">ZUSAGE</td></tr>
				<tr><td>5</td><td class="username">Alexander Dehghani</td><td>DF,MF</td><td class="good">ZUSAGE</td></tr>
				<tr><td>7</td><td class="username">Markus Hofmann</td><td>DF</td><td class="good">ZUSAGE</td></tr>
				<tr><td>12</td><td class="username">Julian Gruner</td><td>TW,DF</td><td class="good">ZUSAGE</td></tr>
				<tr>
					<th colspan="4">Unsicher</th>
				</tr>
				<tr><td>10</td><td class="username">Alexander Kommeter</td><td>MF</td><td class="ok">UNSICHER</td></tr>
				<tr><td>3</td><td class="username">Thomas Lehmann</td><td>MF</td><td class="ok">UNSICHER</td></tr>
				<tr>
					<th colspan="4">Abgesagt</th>
				</tr>
				<tr><td>7</td><td class="username">Florian Maruhn</td><td>MF,AT</td><td class="bad">ABGESAGT</td></tr>
				<tr><td>44</td><td class="username">Christopher Schötz</td><td>MF</td><td class="bad">ABGESAGT</td></tr>
			</table>
		</div>
		<div id="messagebox">
			<div class="message">
				<img style="width:50px" src="gfx/player/2.jpg"/>
				<div class="headline">Patrick Cerchi <span class="date">09.Nov 23:49 Uhr</span></div>
				<div class="text">Sportzeug nicht vergessen! Nicht das wie beim letzten mal vier Leute Barfuss spielen müssen!</div>
				<div class="clearleft"/>
			</div>
			<div class="message">
				<img style="width:50px" src="gfx/player/1.jpg"/>
				<div class="headline">Gregor Gruszka <span class="date">09.Nov 14:49 Uhr</span></div>
				<div class="text">Hey Leute, werde es nicht ganz zum Treffpunkt schaffen. Muss noch Duschen und bin spät drann. Ich beeile mich aber und sollte vor Anpfiff da sein!</div>
				<div class="clearleft"/>
			</div>
		</div>
		<div style="clear:both"/>
	</div>
	</div>
	</center>
</body>
</html>

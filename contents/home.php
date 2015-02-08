<?php

$projekte = array( 
	0 => array( 
		'link' => 'http://www.camp-firefox.de',
		'dllink' => 'https://www.mozilla.org/de/firefox/new/',
		'title' => 'Firefox',
		'img' => 'firefox',
		'text' => 'Firefox ist ein anpassbarer und sicherer Browser mit vielen Erweiterungen, der zur Förderung von Offenheit und Innovation im Internet beiträgt.'),
	1 => array( 
		'link' => 'https://www.thunderbird-mail.de',
		'dllink' => 'https://www.mozilla.com/de/thunderbird/',
		'title' => 'Thunderbird',
		'img' => 'thunderbird',
		'text' => 'Thunderbird, das E-Mail-Pendant zum Browser Firefox, lässt sich mittels zahlreicher Add-ons ganz leicht den eigenen Bedürfnissen anpassen.'),
	2 => array( 
		'link' => 'https://seamonkey.at/',
		'dllink' => 'https://seamonkey.at/download/',
		'title' => 'SeaMonkey',
		'img' => 'seamonkey',
		'text' => 'SeaMonkey ist ein nützliches und vielfältiges Gesamtpaket, welches aus Browser, E-Mail, Newsgroups, Webseiten-Editor und Chat besteht.'),
	3 => array( 
		'link' => 'http://www.sunbird-kalender.de',
		'dllink' => 'http://www.sunbird-kalender.de/downloads.php',
		'title' => 'Lightning',
		'img' => 'lightning',
		'text' => 'Lightning, entwickelt vom Mozilla Kalenderprojekt, erweitert Thunderbird und SeaMonkey um eine umfangreiche Termin- und Aufgabenverwaltung.'),		
	4 => array( 
		'link' => 'http://kompozer-web.de/',
		'dllink' => 'http://kompozer.net/download.php',
		'title' => 'KompoZer',
		'img' => 'kompozer',
		'text' => 'KompoZer, der intuitive Webeditor mit grafischer Benutzeroberfläche und Echtzeitvorschau zum Erstellen von Internetseiten.')
);

?><img id="com" src="com22.jpg" alt="Gruppenfoto"/>
			<div id="sachen"><div class="aktivitaet">Im Internet surfen...</div> <div class="aktivitaet">E-Mails schreiben...</div> <div class="aktivitaet">Termine verwalten...</div> <div class="aktivitaet">Webseiten erstellen...</div></div>
			<p class="pic">Täglich verwenden Millionen<br>Nutzer Anwendungen der<br>weltweiten Mozilla-Community – auch im deutschsprachigen Raum.</p>
			<div id="projects-column">
			<section class="projects-block" id="apps">
        	<h2>Programme</h2>	
  <p class="intro">Auf den Seiten der Übersetzungsprojekte finden sich alle Informationen. Dort besteht auch die Möglichkeit, sich in Foren auszutauschen.</p>
    	<ul>
		  <?php
		  foreach($projekte as $val) {
		  ?>
		  <li>
	        <h3>
		      
	            <img src="img/logos/<?=$val['img']; ?>.png" width="50" height="50" alt="<?=$val['title']; ?>-Logo" />
				<a href="<?=$val['link']; ?>"><span class="programme"><?=$val['title']; ?></span>
			  </a>
			</h3>
	        <p class="programm_text"><?=$val['text']; ?></p>
	        <a class="button" href="<?=$val['dllink']; ?>">Download</a>
	      </li>
		  <?php } ?>
      </ul>
    </section>
</div>

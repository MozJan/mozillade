			<h2 style="margin-top:-12px;">Auf den Projektseiten fündig geworden?</h2>
			<div class="intro" style="width:700px; margin-top:22px; color:rgb(51,51,51);">
				<p>Schön, wenn wir ein Problem lösen oder eine Frage beantworten konnten. All diese Angebote sind Ergebnis der Arbeit von freiwilligen Helfern.
				Sie arbeiten in ihrer Freizeit daran, das deutschsprachige Informationsangebot rund um Mozilla auszubauen und zu verbessern - 
				ein wertvoller Service für Millionen von Nutzern!</p>
			</div>
			<h3 style="font-weight:300; font-family:'Open Sans Light',sans-serif; margin-top:132px; font-size:22px;">Lust, dabei zu sein?</h3>
			<p style="margin-top:-22px; color:rgb(51,51,51); margin-left:260px; width:424px;">Unsere Projekte bieten einige vielfältige Möglichkeiten, wie sich wirklich <span style="text-decoration: underline">jeder</span> aktiv einbringen kann:</p>
			<div id="mitmachenul">
			<?php

			$projects = array( 
				0 => array( 
					'name' => 'Firefox', 
					'desc' => 'Die deutsche Firefox-Community wird zu 100% von Freiwilligen vorangetrieben. Wir übersetzen den Browser, Hilfedokumente und Online-Kampagnen,
					und bieten persönliche Hilfe im Forum für über 30 Millionen deutschsprachige Anwender. Wir suchen jederzeit nach engagierten Firefox-Anwendern,
					die mithelfen möchten und freuen uns über jeden Beitrag <a href="http://www.camp-firefox.de/forum/viewforum.php?f=2">Forum</a>.',
					'url' => 'http://www.camp-firefox.de'),		
				1 => array(
					'name' => 'Thunderbird',
					'desc' => 'Die deutsche Thunderbird-Community verfügt über ein exzellentes Forum und eine ebenso gelungene Dokumentation. 
				Beides beruht vollständig auf der Arbeit von Freiwilligen, lebt also vom Feedback und der Mitarbeit von interessierten Thunderbird-Anwendern.
				Das Team freut sich daher über jeden Beitrag, der <a href="http://www.thunderbird-mail.de/forum/">ins Forum</a> gestellt wird.',
					'url' => 'http://www.thunderbird-mail.de'),
				2 => array(
					'name' => 'SeaMonkey',
					'desc' => 'Das SeaMonkey-Projekt besteht aus freiwilligen Helfern, die sich engagieren, um das Internet-Paket weiter zu entwickeln.
					Wir suchen immer Verstärkung für diese Gemeinschaft und jeder Handgriff zählt - sei es, verschiedene Versionen zu testen,
				anderen bei Fragen zu helfen, Fehler zu melden oder einfach
				<a href="http://seamonkey.at/">SeaMonkey weiter zu empfeh- len</a>. Es gibt für jeden eine Möglichkeit zu helfen - auch für Dich!', 
					'url' => 'http://seamonkey.at'),
				3 => array(
					'name' => 'Lightning',
					'desc' => 'Das <a href="http://www.sunbird-kalender.de">deutsche Übersetzungsprojekt von Lightning</a> freut sich immer über Hilfe!
				Ob Mitarbeit im Forum, Vorschläge zur Übersetzung, Aktualisierung der FAQ oder Vorantreiben der Dokumentations- bemühungen - wir bieten viele Chancen zur Beteiligung.
				Interesse? Jeder ist eingeladen, <a href="http://www.sunbird-kalender.de/forum/">im Forum</a> mitzuhelfen, Lightning für deutschsprachige Nutzer
				noch besser zu machen!',
					'url' => 'http://www.sunbird-kalender.de'),
				4 => array(
					'name' => 'SUMO',
					'desc' => 'SUMO ist die Abkürzung von SUpport.MOzilla.com. Die Aufgabe des SUMO-Projekts ist es, Firefox-Nutzern bei Problemen
 					und Fragen weiterzuhelfen. Es werden besonders Übersetzer benötigt, die die Wissensdatenbank übersetzen und vorhandene Inhalte aktuell halten möchten.
				  	Der aktuelle Stand kann in der <a href="http://support.mozilla.com/de/localization">Übersetzungsübersicht</a> eingesehen werden.',
					'url' => 'http://support.mozilla.com/de/'),
				5 => array(
					'name' => 'MDN',
					'desc' => 'Das <a href="http://developer.mozilla.org/de/">Mozilla Developer Network</a> unterstützt die Entwicklung von Firefox und dem Web mit reichhaltiger, 
					sorgfältiger und aktueller Dokumentation über Firefox, Mozilla und vielen Webtechnologien. Das Wiki ermöglicht es jedem, dabei zu helfen, die Seiten aktuell zu halten und ins Deutsche zu übersetzen.',
					'url' => 'http://developer.mozilla.org/de/'),
				6 => array(
					'name' => 'BabelZilla',
					'desc' => '<a href="http://www.babelzilla.org/">BabelZilla</a> versteht sich als Schnittstelle zwischen Entwicklern und Übersetzern von Erweiterungen für Anwendungen aus der Mozilla-Familie.
 				Freiwillige aus aller Welt helfen dabei, möglichst viele Erweiterungen zu übersetzen. Selbstverständlich haben wir auch ein deutschsprachiges
				Forum und freuen uns über neue Freiwillige zum Übersetzen oder Korrekturlesen von Übersetzungen.',
					'url' => 'http://www.babelzilla.org/'),
				7 => array(
					'name' => 'KompoZer',
					'desc' => 'Die deutschsprachige KompoZer-Gemeinschaft leistet Hilfestellung bei allen Fragen rund um die Webseitenerstellung mit KompoZer.
				Auf <a href="http://kompozer-web.de/">kompozer-web.de</a> findet ihr Informationen, Screenshots und Links zu aktuellen und zukünftigen Versionen.
				Neben Hilfestellung für Anfänger und Fortgeschrittene werden im Forum auch kostenlose Kurse angeboten. 
				Wir freuen uns über Beiträge!',
					'url' => 'http://kompozer-web.de/'),
				);
			
			shuffle($projects);			

			foreach ($projects as $val) {	
			
			?>

			<ul class="mitmachen clearfix" id="<?=strtolower($val['name']); ?>">
				<li>
				<h3><a href="<?=$val['url']; ?>"><img src="/img/logos/<?=strtolower($val['name']); ?>.png" alt="<?=$val['name']; ?>-Logo" />
				<h3 style="font-weight:300; font-family:'Open Sans Light',sans-serif; margin-top:-6px; font-size:22px; color:rgb(175,50,50);"><?=$val['name']; ?></h3>
				</a></h3>
					<p id="lah"><?=$val['desc']; ?></p>
				</li>
			</ul>
			<?php
			}
			?>
</div>

	<section id="pllt">
	<div id="plnt">
		<aside id="sidebar" style="margin-top:-1754px;">
<?php require_once("planet2.php"); ?>
		</aside> 
			</section>
	</div>
	
	<footer>
		<div id="footer-wrapper">
		<a href="http://mozilla.de/" class="footer-logo"><img src="http://www.mozilla.org/media/img/sandstone/footer-mozilla.png" alt="mozilla"></a>
			<p class="text">Auch mozilla.de ist <a href="https://github.com/mozjan/mozillade">quelloffen</a>.
			Sofern nicht anders vermerkt, steht der Inhalt dieser Seite unter der <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution Share-Alike License v3.0</a> oder einer späteren Version. Mozilla®, mozilla.org®, Thunderbird®, SeaMonkey® und das Mozilla-Logo™ sind <a href="http://www.mozilla.org/foundation/trademarks/list.html">eingetragene Markenzeichen</a> der Mozilla Foundation.
			<br><br><a href="?site=impressum">Impressum</a></p>
			<p class="space">    </p>
		</div>
		<script src="tabzilla.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/
jquery/1.4.4/jquery.min.js"></script>
	</footer>
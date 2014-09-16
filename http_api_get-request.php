<?php

/*Dieses Beispiel zeigt, wie Sie einfach eine HTTP Abfrage auf unsere API Schnittstelle
 * durchführen können und im Webbrowser anzeigen können.
 * Für die Anfrage wird die PHP GET Methode verwendet. 
 * Das Ergebnis wird anschließend in einer Array ausgegeben, welche durch "~" gentrennt ist.
 * 
 * Dieser Quellcode ist Open Source und kann für beliebeige Zwecke ohne Quellenangebe verwendet werden.
 */
$weatherstation = "00439500003";  //Seriennummer der Wetterstation

$dataarray = file_get_contents("http://api.alpscapesmeteo.com/api.php?stn=$weatherstation"); //HTTP Request auf API

$weatherarry = split ("\~", $dataarray);  //HTTP Request in Array Speichern und Splitten

print "Standort: $weatherarry[0] <br />";
print "Wetterdaten von: $weatherarry[1] / $weatherarry[2]<br />" ;
print "Statuscode: $weatherarry[3]   (100 = OK) <br />"  ;
print "Temperatur: $weatherarry[4] °C <br />";
print "Luftdruck: $weatherarry[5] H/Pa<br />";
print "Feuchtigkeit: $weatherarry[6] %<br />";
print "Windgeschwindigkeit: $weatherarry[7] Km/h<br />";
print "Sonneneinstrahlung: $weatherarry[8] %<br />";
print "Schneehöhe: $weatherarry[9] cm<br />";
print "Windchill: $weatherarry[10] °C<br />";
print "Schneefallgrenze: $weatherarry[11] m<br />";
print "Sonnenwinkel: $weatherarry[12] °<br />";
print "Taupunkt: $weatherarry[13] °C<br />";
print "Luftdichte: $weatherarry[14] Kg/³<br />";
?>

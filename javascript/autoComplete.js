//this file contains the autocomple function that is used to create a auto complete drop down under the textbox as the user types
$(function() {
		var cities = ["Warwick","Leamington Spa","London","Birmingham","Leeds","Glasgow","Sheffield","Bradford","Edinburgh","Liverpool","Manchester","Bristol","Wakefield","Cardiff","Coventry","Nottingham","Leicester","Sunderland","Belfast","Newcastle upon Tyne","Brighton","Hull","Plymouth","Stoke-on-Trent","Wolverhampton","Derby","Swansea","Southampton","Salford","Aberdeen","Westminster","Portsmouth","York","Peterborough","Dundee","Lancaster","Oxford","Newport","Preston","St Albans","Norwich","Chester","Cambridge","Salisbury","Exeter","Gloucester","Lisburn","Chichester","Winchester","Londonderry","Carlisle","Worcester","Bath","Durham","Lincoln","Hereford","Armagh","Inverness","Stirling","Canterbury","Lichfield","Newry","Ripon","Bangor","Truro","Ely","Wells","St Davids"];//this is the array of locations that are listed in the drop down
		cities.sort();//sorts the array into alphibetical order
$( "#tags1, #tags2" ).autocomplete({//calls he autocomplete function from jquery. its also add tags1 and tags2 so it will work with the textboxs with that as the id
	source: cities//gets the array of locations 
	});
});

/**
 * @file
 */

// Google maps.
var marcadores = [];

function initMap() {

  var localidades = [
    ['Clinica Ciudad del Valle', 21.4885671, -104.8862154],
    ['Clinica Xalisco', 21.4454143, -104.900583]
  ];

  var mapa = new google.maps.Map(document.getElementById('mapa'), {
    zoom: 7,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  var limites = new google.maps.LatLngBounds();

  var infowindow = new google.maps.InfoWindow();

  var marcador, i;

  for (i = 0; i < localidades.length; i++) {

    marcador = new google.maps.Marker({
      position: new google.maps.LatLng(localidades[i][1], localidades[i][2]),
      map: mapa
    });

    marcadores.push(marcador);

    limites.extend(marcador.position);

    google.maps.event.addListener(marcador, 'click', (function (marcador, i) {
      return function () {
        infowindow.setContent(localidades[i][0]);
        infowindow.open(mapa, marcador);
      }
    })(marcador, i));
  }

  mapa.fitBounds(limites);

}

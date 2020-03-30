@extends('layouts.master')

@section('content')
    @include('partials._message')

    <div class="row">
        <div class="col-md-12">
            <div id="map"></div>
            <script async defer
                    src="//maps.googleapis.com/maps/api/js?key={{ config('app.google_map_api_key') }}&callback=initMap">
            </script>
        </div>
    </div>

    <script type="text/javascript">
        const customLabel = {
            restaurant: {
                label: 'Quarantined',
            },
            bar: {
                label: 'Non-Quarantined',
            },
        };

        function initMap() {
            let map = new google.maps.Map(document.getElementById('map'), {
                center: new google.maps.LatLng(23.6804711, 87.8162446),
                zoom: 6,
            });
            let infoWindow = new google.maps.InfoWindow;

            // Change this depending on the name of your PHP or XML file
            downloadUrl('http://ecfinder.local:8888/map.xml', function(data) {
                let xml = data.responseXML;
                let markers = xml.documentElement.getElementsByTagName('marker');
                Array.prototype.forEach.call(markers, function(markerElem) {
                    let id = markerElem.getAttribute('id');
                    let name = markerElem.getAttribute('name');
                    let address = markerElem.getAttribute('address');
                    let type = markerElem.getAttribute('type');
                    let point = new google.maps.LatLng(
                        parseFloat(markerElem.getAttribute('lat')),
                        parseFloat(markerElem.getAttribute('lng')),
                    );

                    let infowincontent = document.createElement('div');
                    let strong = document.createElement('strong');
                    strong.textContent = name;
                    infowincontent.appendChild(strong);
                    infowincontent.appendChild(document.createElement('br'));

                    let text = document.createElement('text');
                    text.textContent = address;
                    infowincontent.appendChild(text);
                    let icon = customLabel[type] || {};
                    let marker = new google.maps.Marker({
                        map: map,
                        position: point,
                        label: icon.label,
                    });

                    marker.addListener('click', function() {
                        infoWindow.setContent(infowincontent);
                        infoWindow.open(map, marker);
                    });
                });
            });
        }

        function downloadUrl(url, callback) {
            let request = window.ActiveXObject ?
                new ActiveXObject('Microsoft.XMLHTTP') :
                new XMLHttpRequest;

            request.onreadystatechange = function() {
                if (request.readyState == 4) {
                    request.onreadystatechange = doNothing;
                    callback(request, request.status);
                }
            };

            request.open('GET', url, true);
            request.send(null);
        }

        function doNothing() {
        }
    </script>
@endsection

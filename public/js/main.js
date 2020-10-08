

                        var mymap = L.map('mapid').setView([4.04, 9.70], 5);    
                            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                            maxZoom: 18,
                            id: 'mapbox/streets-v11',
                            tileSize: 512,
                            zoomOffset: -1,
                            accessToken: 'your.mapbox.access.token'
                        }).addTo(mymap);

                        var searchControl = L.esri.Geocoding.geosearch().addTo(mymap);


                        var results = L.layerGroup().addTo(mymap);

                        searchControl.on('results', function (data) {
                          results.clearLayers();
                          for (var i = data.results.length - 1; i >= 0; i--) {
                            results.addLayer(L.marker(data.results[i].latlng));
                          }
                        });
                
                        function geoFindMe() {
                
                        const status = document.querySelector('#status');
                        const mapLink = document.querySelector('#map-link');
                
                        mapLink.href = '';
                        mapLink.textContent = '';
                
                        function success(position) {
                        const latitude  = position.coords.latitude;
                        const longitude = position.coords.longitude;
                
                        status.textContent = '';
                        mapLink.href =`https://www.openstreetmap.org/#map=18/${latitude}/${longitude}`;
                        mapLink.textContent = `Latitude: ${latitude} °, Longitude: ${longitude} °`;
                        var marker = L.marker([latitude, longitude]).addTo(mymap).bindPopup(position.address).openPopup();
                        }
                
                        function error() {
                            status.textContent = 'impossible de trouver votre localisation';
                        }
                
                        if(!navigator.geolocation) {
                            status.textContent = 'Geolocation is not supported by your browser';
                        } else {
                            status.textContent = 'Locating…';
                            navigator.geolocation.getCurrentPosition(success, error);
                        }
                
                        }
                        document.querySelector('#find-me').addEventListener('click', geoFindMe);
                        //geoFindMe();
                        document.getElementById('print').addEventListener('click', () => {
                            print(); 
                        });
                        var mymap = L.map('mapid').setView([4.04, 9.70], 5);    
                        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                            maxZoom: 18,
                            id: 'mapbox/streets-v11',
                            tileSize: 512,
                            zoomOffset: -1,
                            accessToken: 'your.mapbox.access.token'
                        }).addTo(mymap);

                        var searchControl = L.esri.Geocoding.geosearch().addTo(mymap);


                        var results = L.layerGroup().addTo(mymap);

                        searchControl.on('results', function (data) {
                          results.clearLayers();
                          for (var i = data.results.length - 1; i >= 0; i--) {
                            results.addLayer(L.marker(data.results[i].latlng));
                          }
                        });
                
                        function geoFindMe() {
                
                            const status = document.querySelector('#status');
                            const mapLink = document.querySelector('#map-link');
                    
                            mapLink.href = '';
                            mapLink.textContent = '';
                    
                            function success(position) {
                                const latitude  = position.coords.latitude;
                                const longitude = position.coords.longitude;
                        
                                status.textContent = '';
                                mapLink.href =`https://www.openstreetmap.org/#map=18/${latitude}/${longitude}`;
                                mapLink.textContent = `Latitude: ${latitude} °, Longitude: ${longitude} °`;
                                var marker = L.marker([latitude, longitude]).addTo(mymap).bindPopup(position.address).openPopup();
                            }
                    
                            function error() {
                                status.textContent = 'impossible de trouver votre localisation';
                            }
                    
                            if(!navigator.geolocation) {
                                status.textContent = 'Geolocation is not supported by your browser';
                            } else {
                                status.textContent = 'Locating…';
                                navigator.geolocation.getCurrentPosition(success, error);
                            }
                
                        }

                        
                        document.querySelector('#find-me').addEventListener('click', geoFindMe);
                        //geoFindMe();
                        document.getElementById('print').addEventListener('click', () => {
                            print(); 
                        });
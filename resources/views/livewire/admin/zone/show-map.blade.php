<div>
    <section class="content">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        
                        <button id = "find-me"> {{ ('ma position') }}</button>
                        
                        <button id = "print">{{ ('imprimer') }}</button>
                      
                    </div>
  
                    <div class="card-body">
                        @if (session('status'))
                            <div class= "alert alert-success role"="alert">
                                {{ session('status') }}
                            </div>
                        @endif
  
                        <p id = "status"></p>
                        <a id = "map-link" target="_blank"></a>
                    
                      
                        <div id="mapid"  style="height: 500px; border: 2px solid red;">
                        </div>
                        
                        <script src="/js/main.js"></script>
                        <script>
                            document.addEventListener('livewire:load', function(){
                                 var datazone = @this;
                                console.log(' Hello', datazone);  
                                alert('eezezfzef');
                            })

                        
                            console.log(' Hello 22');

                            var area = L.polygon([[4.6, 9.3], [3.9, 9.1], [4, 9.9]],{
                              fillColor: 'red'
                            }).addTo(mymap);

                            area.bindPopup("surface accessible")
                        </script>
  
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
      </section>
</div>

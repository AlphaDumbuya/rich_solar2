@extends('layout')
@section('content')
     <!-- Start of Products Section -->
     <section id="products" class="products">

        <!-- solar parnels -->
         <!-- parnel 1 -->
         <h2>Solar Parnels</h2>
         
        
                @foreach($panels as $panel)
                    <div class="products-card">
                    <div class="products-content">
                        <h3>{{$panel->name}}</h3>
                        <p>
                            Maximum <span class="power">Power :</span> {{$panel->wattage}}
                        </p>
    
                        <p>
                            Maximum <span class="power">Power <span class="c">Voltage:</span> <span class="voltage"><Voltage:span> <span class="volt">{{$panel->voltage}}</span></Voltage:span></span></span>
                        </p>
    
                        <p>
                            Maximum <span class="power">Power <span class="c">Current:</span><span class="voltage"> <span class="volt">{{$panel->current}}</span></span></span>
                        </p>
    
                        <p>Size: {{$panel->size}}</p>
                        <p>price: {{$panel->price}}</p>
    
                    </div>
                    <div class="products-image">
                        <img class="img" src="{{ asset('storage/' . $panel->picture)  }}" alt="inverter">
                    </div>
                    </div>
                @endforeach
        

        <!-- Batteries -->
        <h2>Solar Batteries</h2>

        <!-- battery1 -->
            @foreach($batteries as $battery)
                <div class="products-card inverter">
                    <div class="products-image">
                        <img class="img" src="{{ asset('storage/' . $battery->picture)  }}" alt="battery">
                    </div>
                    <div class="products-content">
                        <h3>{{$battery->type}}</h3>
                        <!-- battery1 -->
                        <h4 class="battery">{{$battery->name}}</h4>
                        <p>Amount of electricity that canbe stored：{{$battery->electricity_stored}}</p>
                        <p>amount of electricity that can be released：{{$battery->electricity_released}}</p>
                        <p>Price: {{$battery->price}}</p>
                    </div>
                </div>
            @endforeach
        
        <h2>Solar Fans</h2>
         <!-- fan 1 -->

            @foreach($fans as $fan)
                <div class="products-card">
                    <div class="products-content">
                        <h3>{{$fan->name}}</h3>
                        <p>Price: {{$fan->price}}</p>
                    </div>
                    <div class="products-image">
                        <img class="img" src="{{ asset('storage/' . $fan->picture)  }}" alt="fan">
                    </div>
                </div>
            @endforeach


        <h2>Solar Freezers</h2>
         <!-- freezer 1 -->

        @foreach($freezers as $freezer)
            <div class="products-card inverter">
                <div class="products-image">
                    <img class="img" src="{{ asset('storage/' . $freezer->picture)  }}" alt="freezer">
                </div>
                <div class="products-content">
                    <p>{{$freezer->comment}}</p>
                    <h3>{{$freezer->litres}}</h3>
                    <p>Size: {{$freezer->size}}</p>
                    <p>Power: {{$freezer->power}}</p>
                    <p>Work <span>12 hours:</span> <span>：{{$freezer['12_hours_work']}}</span> </p>
                    <p>Work <span>24 hours:</span> <span>：{{$freezer['24_hours_work']}}</span> </p>
                    <p>{{$freezer->materials}}</p>
                    <p>Solar panel：<span>{{$freezer->solar_panel}}</span></p>
                    <p>Battery：12V 150AH*1pcs Controller：{{$freezer->battery}}</p>
                    <p>Price: {{$freezer->price}}}</p>
                </div>
            </div>
   
        @endforeach



        <!-- inverters -->
        <h2>Inverters</h2>
        <!-- inverter 1 -->
        @foreach($inverters as $inverter)
            <div class="products-card inverter">
                <div class="products-image">
                    <img class="img" src="{{ asset('storage/' . $inverter->picture)  }}" alt="inverter">
                </div>
                <div class="products-content">
                    <h3>{{$inverter->name}}</h3>
                    <p>
                        Battery output voltage:<span class="power">{{$inverter->output_voltage}}</span>
                    </p>

                    <p>
                        Maximum output current of the battery: <span class="power"> <span class="voltage"><Voltage:span> <span class="volt">{{$inverter->output_current}}</span></Voltage:span></span></span>
                    </p>

                    <p>
                        Batter to inverter wire:<span class="power"> <span class="voltage"> <span class="volt">{{$inverter->battery_wire}}</span></span></span>
                    </p>
                    <p >Price: {{$inverter->price}}</p>

                </div>
            </div>
        @endforeach












   
        <!-- end of inverters -->
        
         
        <!-- power Controllers -->
         <!-- controller 1 -->
        
        <h2>Power Controllers</h2>
        @foreach($controllers as $controller)
            <div class="products-card">
                <div class="products-content">
                    <h3>{{$controller->name}}</h3>
                    <p>One {{$controller->solar_panel}} Solar Panel</p>
                    <p>Max Solar Voltage: <span>{{$controller->voltage}}</span></p>
                    <p>Price: {{$controller->price}}</p>
                </div>
                <div class="products-image">
                    <img class="img" src="{{ asset('storage/' . $controller->picture)  }}" alt="Solar-light">
                </div>
        </div>
        @endforeach


     
        <!-- Solar lights -->
          <!-- Light 1 -->
        
        <h2 class="h2">Solar Lights</h2>
        @foreach($lights as $light)
            <div class="products-card">
                <div class="products-image">
                    <img class="img" src="{{ asset('storage/' . $light->picture)  }}" alt="Solar-light">
                </div>
                <div class="products-content">
                    <h3>{{$light->name}}</h3>
                    <p>Solar Panel: {{$light->solar_panel}}</p>
                    <p>Lithium Battery: {{$light->battery}}</p>
                    <p>Price = {{$light->price}}</p>
                </div>
            </div>
        @endforeach

        
        
        </div>
    </section>
    <!-- End of Products Section -->
    <script src="/categories/script.
    @endsection
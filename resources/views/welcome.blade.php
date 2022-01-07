<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Nissei</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/minValues.js') }}" type="text/javascript"></script>


        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" type="image/x-icon" href="https://www.casanissei.com/media/favicon/stores/1/ELS-ORIGINAL.png">


        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <script>  
        window.onload = valueValidation;
        </script>

    </head>
    <body class="body">

        {{-- navbar --}}
        <nav class="navbar fixed-top navbar-white bg-white">
            <!-- Navbar content -->
            <div class="col-12 col-md-3 col-lg-3 col-logo">
                <div class="menu-logo">
                    <h1 class="logo text-hide">
                        <img class="img-fluid" src="{{ asset('images/LOGO-ROJO.png') }}" alt="Casa Nissei" width="100">
                    </h1>
                </div>
            </div>
        </nav>
        
    
    
        {{-- Tabla --}}
        <section id="cotizaciones_section" style="padding-top: 140px">
            <div class="container cotizaciones">
                <h1>COTIZACIONES</h1>

                <div id="cotizacion-list-row" class="row" style="padding-top: 10px">
                    <div class="col-md-3" style="background-color: white">
                        <div class="card-body">
                            <div class="table-responsive-md-3">
                                <table class="table">
                                    <div class="card-header">
                                        La Moneda
                                    </div>
                                    <thead class="thead-dark">
                                        <tr>
                                          <th scope="col"></th>
                                          <th scope="col">Compra</th>
                                          <th scope="col">Venta</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                            @foreach ($LM_cotizaciones as $LM_cotizacion)
                                                <tr>
                                                    <th scope="row"><img class="img-fluid" src="{{ asset('images/bandera'.$LM_cotizacion->{'id_moneda'}.'.jpg') }}" alt="bandera" width="30"></th>
                                                    <td class="row-value">{{ $LM_cotizacion->{'compra'} }}</td>
                                                    <td class="row-value">{{ $LM_cotizacion->{'venta'} }}</td>
                                                </tr>
                                            @endforeach
                                      </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="background-color: white">
                        <div class="card-body">
                            <div class="table-responsive-md-3">
                                <table class="table">
                                    <div class="card-header">
                                        Cambios Chaco
                                    </div>
                                    <thead class="thead-dark">
                                        <tr>
                                          <th scope="col"></th>
                                          <th scope="col">Compra</th>
                                          <th scope="col">Venta</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                            @foreach ($CC_cotizaciones as $CC_cotizacion)
                                                <tr>
                                                    <th scope="row"><img class="img-fluid" src="{{ asset('images/bandera'.$CC_cotizacion->{'id_moneda'}.'.jpg') }}" alt="bandera" width="30"></th>
                                                    <td class="row-value">{{ $CC_cotizacion->{'compra'} }}</td>
                                                    <td class="row-value">{{ $CC_cotizacion->{'venta'} }}</td>
                                                </tr>
                                            @endforeach
                                      </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="background-color: white">
                        <div class="card-body">
                            <div class="table-responsive-md-3">
                                <table class="table">
                                    <div class="card-header">
                                        Maxi Cambios
                                    </div>
                                    <thead class="thead-dark">
                                        <tr>
                                          <th scope="col"></th>
                                          <th scope="col">Compra</th>
                                          <th scope="col">Venta</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                            @foreach ($MC_cotizaciones as $MC_cotizacion)
                                                <tr>
                                                    <th scope="row"><img class="img-fluid" src="{{ asset('images/bandera'.$MC_cotizacion->{'id_moneda'}.'.jpg') }}" alt="bandera" width="30"></th>
                                                    <td class="row-value">{{ $MC_cotizacion->{'compra'} }}</td>
                                                    <td class="row-value">{{ $MC_cotizacion->{'venta'} }}</td>
                                                </tr>
                                            @endforeach
                                      </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="background-color: white">
                        <div class="card-body">
                            <div class="table-responsive-md-3">
                                <table class="table">
                                    <div class="card-header">
                                        Bonanza Cambios
                                    </div>
                                    <thead class="thead-dark">
                                        <tr>
                                          <th scope="col"></th>
                                          <th scope="col">Compra</th>
                                          <th scope="col">Venta</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                            @foreach ($BC_cotizaciones as $BC_cotizacion)
                                                <tr>
                                                    <th scope="row"><img class="img-fluid" src="{{ asset('images/bandera'.$BC_cotizacion->{'id_moneda'}.'.jpg') }}" alt="bandera" width="30"></th>
                                                    <td class="row-value">{{ $BC_cotizacion->{'compra'} }}</td>
                                                    <td class="row-value">{{ $BC_cotizacion->{'venta'} }}</td>
                                                </tr>
                                            @endforeach
                                      </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div id="cotizacion-grid-row" class="row">
                    <div class="col-md-6" style="background-color: white">
                        <div class="card-body">
                            <div class="table-responsive-md-3">
                                <div class="card-header">
                                    La Moneda
                                </div>
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                          <th scope="col"></th>    
                                          <th scope="col">Moneda</th>
                                          <th scope="col">Compra</th>
                                          <th scope="col">Venta</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                          @foreach ($LM_cotizaciones as $LM_cotizacion)
                                          <tr>
                                            <th scope="row"><img class="img-fluid" src="{{ asset('images/bandera'.$LM_cotizacion->{'id_moneda'}.'.jpg') }}" alt="bandera" width="50"></th>
                                            @foreach ($monedas as $moneda)
                                            @if ($moneda->{'id'} === $LM_cotizacion->{'id_moneda'})
                                            <td class="row-value">
                                                {{ $moneda->{'name'} }}
                                            </td>
                                            @endif
                                            @endforeach
                                            <td class="row-value">{{ $LM_cotizacion->{'compra'} }}</td>
                                            <td class="row-value">{{ $LM_cotizacion->{'venta'} }}</td>
                                          </tr>
                                          @endforeach
                                      </tbody>
                                </table>
                            </div>

                            <div class="table-responsive-md-3">
                                <div class="card-header">
                                    Cambios Chaco
                                </div>
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                          <th scope="col"></th>    
                                          <th scope="col">Moneda</th>
                                          <th scope="col">Compra</th>
                                          <th scope="col">Venta</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                          @foreach ($CC_cotizaciones as $CC_cotizacion)
                                          <tr>
                                            <th scope="row"><img class="img-fluid" src="{{ asset('images/bandera'.$CC_cotizacion->{'id_moneda'}.'.jpg') }}" alt="bandera" width="50"></th>
                                            @foreach ($monedas as $moneda)
                                            @if ($moneda->{'id'} === $CC_cotizacion->{'id_moneda'})
                                            <td class="row-value">
                                                {{ $moneda->{'name'} }}
                                            </td>
                                            @endif
                                            @endforeach
                                            <td class="row-value">{{ $CC_cotizacion->{'compra'} }}</td>
                                            <td class="row-value">{{ $CC_cotizacion->{'venta'} }}</td>
                                          </tr>
                                          @endforeach
                                      </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="background-color: white; padding-top: 20px">
                        <div class="table-responsive-md-3">
                            <div class="card-header">
                                Maxi Cambios
                            </div>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                      <th scope="col"></th>    
                                      <th scope="col">Moneda</th>
                                      <th scope="col">Compra</th>
                                      <th scope="col">Venta</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($MC_cotizaciones as $MC_cotizacion)
                                      <tr>
                                        <th scope="row"><img class="img-fluid" src="{{ asset('images/bandera'.$MC_cotizacion->{'id_moneda'}.'.jpg') }}" alt="bandera" width="50"></th>
                                        @foreach ($monedas as $moneda)
                                        @if ($moneda->{'id'} === $MC_cotizacion->{'id_moneda'})
                                        <td class="row-value">
                                            {{ $moneda->{'name'} }}
                                        </td>
                                        @endif
                                        @endforeach
                                        <td class="row-value">{{ $MC_cotizacion->{'compra'} }}</td>
                                        <td class="row-value">{{ $MC_cotizacion->{'venta'} }}</td>
                                      </tr>
                                      @endforeach
                                  </tbody>
                            </table>
                        </div>
                
                        <div class="table-responsive-md-3">
                            <div class="card-header">
                                Bonanza Cambios
                            </div>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                      <th scope="col"></th>    
                                      <th scope="col">Moneda</th>
                                      <th scope="col">Compra</th>
                                      <th scope="col">Venta</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($BC_cotizaciones as $BC_cotizacion)
                                      <tr>
                                        <th scope="row"><img class="img-fluid" src="{{ asset('images/bandera'.$BC_cotizacion->{'id_moneda'}.'.jpg') }}" alt="bandera" width="50"></th>
                                        @foreach ($monedas as $moneda)
                                        @if ($moneda->{'id'} === $BC_cotizacion->{'id_moneda'})
                                        <td class="row-value">
                                            {{ $moneda->{'name'} }}
                                        </td>
                                        @endif
                                        @endforeach
                                        <td class="row-value">{{ $BC_cotizacion->{'compra'} }}</td>
                                        <td class="row-value">{{ $BC_cotizacion->{'venta'} }}</td>
                                      </tr>
                                      @endforeach
                                  </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </section>        




        <section>
            <div class="container arbitrajes" style="padding-top: 30px">
                <h1>ARBITRAJES</h1>
                <div id="arbitraje-list-row" class="row" style="padding-top: 10px">
                    <div class="col-md-3" style="background-color: white">
                        <div class="card-body">
                            <div class="table-responsive-md-3">
                                <table class="table">
                                    <div class="card-header">
                                        La Moneda
                                    </div>
                                    <thead class="thead-dark">
                                        <tr>
                                          <th scope="col"></th>
                                          <th scope="col">Compra</th>
                                          <th scope="col">Venta</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                            @foreach ($LM_arbitrajes as $LM_arbitraje)
                                                <tr>
                                                    <th scope="row"><img class="img-fluid" src="{{ asset('images/bandera'.$LM_arbitraje->{'id_moneda'}.'.jpg') }}" alt="bandera" width="30"></th>
                                                    <td class="row-value">{{ $LM_arbitraje->{'compra'} }}</td>
                                                    <td class="row-value">{{ $LM_arbitraje->{'venta'} }}</td>
                                                </tr>
                                            @endforeach
                                      </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="background-color: white">
                        <div class="card-body">
                            <div class="table-responsive-md-3">
                                <table class="table">
                                    <div class="card-header">
                                        Cambios Chaco
                                    </div>
                                    <thead class="thead-dark">
                                        <tr>
                                          <th scope="col"></th>
                                          <th scope="col">Compra</th>
                                          <th scope="col">Venta</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                            @foreach ($CC_arbitrajes as $CC_arbitraje)
                                                <tr>
                                                    <th scope="row"><img class="img-fluid" src="{{ asset('images/bandera'.$CC_arbitraje->{'id_moneda'}.'.jpg') }}" alt="bandera" width="30"></th>
                                                    <td class="row-value">{{ $CC_arbitraje->{'compra'} }}</td>
                                                    <td class="row-value">{{ $CC_arbitraje->{'venta'} }}</td>
                                                </tr>
                                                
                                            @endforeach
                                      </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="background-color: white">
                        <div class="card-body">
                            <div class="table-responsive-md-3">
                                <table class="table">
                                    <div class="card-header">
                                        Maxi Cambios
                                    </div>
                                    <thead class="thead-dark">
                                        <tr>
                                          <th scope="col"></th>
                                          <th scope="col">Compra</th>
                                          <th scope="col">Venta</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                            @foreach ($MC_arbitrajes as $MC_arbitraje)
                                                <tr>
                                                    <th scope="row"><img class="img-fluid" src="{{ asset('images/bandera'.$MC_arbitraje->{'id_moneda'}.'.jpg') }}" alt="bandera" width="30"></th>
                                                    <td class="row-value">{{ $MC_arbitraje->{'compra'} }}</td>
                                                    <td class="row-value">{{ $MC_arbitraje->{'venta'} }}</td>
                                                </tr>
                                            @endforeach
                                      </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="background-color: white">
                        <div class="card-body">
                            <div class="table-responsive-md-3">
                                <table class="table">
                                    <div class="card-header">
                                        Bonanza Cambios
                                    </div>
                                    <thead class="thead-dark">
                                        <tr>
                                          <th scope="col"></th>
                                          <th scope="col">Compra</th>
                                          <th scope="col">Venta</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                            @foreach ($BC_arbitrajes as $BC_arbitraje)
                                                <tr>
                                                    <th scope="row"><img class="img-fluid" src="{{ asset('images/bandera'.$BC_arbitraje->{'id_moneda'}.'.jpg') }}" alt="bandera" width="30"></th>
                                                    <td class="row-value">{{ $BC_arbitraje->{'compra'} }}</td>
                                                    <td class="row-value">{{ $BC_arbitraje->{'venta'} }}</td>
                                                </tr>
                                            @endforeach
                                      </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>


                <div id="arbitraje-grid-row" class="row" >
                    <div class="col-md-6" style="background-color: white">
                        <div class="card-body">
                            <div class="table-responsive-md-3">
                                <div class="card-header">
                                    La Moneda
                                </div>
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                          <th scope="col"></th>    
                                          <th scope="col">Moneda</th>
                                          <th scope="col">Compra</th>
                                          <th scope="col">Venta</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                          @foreach ($LM_arbitrajes as $LM_arbitraje)
                                          <tr>
                                            <th scope="row"><img class="img-fluid" src="{{ asset('images/bandera'.$LM_arbitraje->{'id_moneda'}.'.jpg') }}" alt="bandera" width="50"></th>
                                            @foreach ($monedas as $moneda)
                                            @if ($moneda->{'id'} === $LM_arbitraje->{'id_moneda'})
                                            <td class="row-value">
                                                {{ $moneda->{'name'} }}
                                            </td>
                                            @endif
                                            @endforeach
                                            <td class="row-value">{{ $LM_arbitraje->{'compra'} }}</td>
                                            <td class="row-value">{{ $LM_arbitraje->{'venta'} }}</td>
                                          </tr>
                                          @endforeach
                                      </tbody>
                                </table>
                            </div>

                            <div class="table-responsive-md-3">
                                <div class="card-header">
                                    Cambios Chaco
                                </div>
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                          <th scope="col"></th>    
                                          <th scope="col">Moneda</th>
                                          <th scope="col">Compra</th>
                                          <th scope="col">Venta</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                          @foreach ($CC_arbitrajes as $CC_arbitraje)
                                          <tr>
                                            <th scope="row"><img class="img-fluid" src="{{ asset('images/bandera'.$CC_arbitraje->{'id_moneda'}.'.jpg') }}" alt="bandera" width="50"></th>
                                            @foreach ($monedas as $moneda)
                                            @if ($moneda->{'id'} === $CC_arbitraje->{'id_moneda'})
                                            <td class="row-value">
                                                {{ $moneda->{'name'} }}
                                            </td>
                                            @endif
                                            @endforeach
                                            <td class="row-value">{{ $CC_arbitraje->{'compra'} }}</td>
                                            <td class="row-value">{{ $CC_arbitraje->{'venta'} }}</td>
                                          </tr>
                                          @endforeach
                                      </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="background-color: white; padding-top: 20px">
                        <div class="table-responsive-md-3">
                            <div class="card-header">
                                Maxi Cambios
                            </div>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                      <th scope="col"></th>    
                                      <th scope="col">Moneda</th>
                                      <th scope="col">Compra</th>
                                      <th scope="col">Venta</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($MC_arbitrajes as $MC_arbitraje)
                                      <tr>
                                        <th scope="row"><img class="img-fluid" src="{{ asset('images/bandera'.$MC_arbitraje->{'id_moneda'}.'.jpg') }}" alt="bandera" width="50"></th>
                                        @foreach ($monedas as $moneda)
                                        @if ($moneda->{'id'} === $MC_arbitraje->{'id_moneda'})
                                        <td class="row-value">
                                            {{ $moneda->{'name'} }}
                                        </td>
                                        @endif
                                        @endforeach
                                        <td class="row-value">{{ $MC_arbitraje->{'compra'} }}</td>
                                        <td class="row-value">{{ $MC_arbitraje->{'venta'} }}</td>
                                      </tr>
                                      @endforeach
                                  </tbody>
                            </table>
                        </div>
                
                        <div class="table-responsive-md-3">
                            <div class="card-header">
                                Bonanza Cambios
                            </div>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                      <th scope="col"></th>    
                                      <th scope="col">Moneda</th>
                                      <th scope="col">Compra</th>
                                      <th scope="col">Venta</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($BC_arbitrajes as $BC_arbitraje)
                                      <tr>
                                        <th scope="row"><img class="img-fluid" src="{{ asset('images/bandera'.$BC_arbitraje->{'id_moneda'}.'.jpg') }}" alt="bandera" width="50"></th>
                                        @foreach ($monedas as $moneda)
                                        @if ($moneda->{'id'} === $BC_arbitraje->{'id_moneda'})
                                        <td class="row-value">
                                            {{ $moneda->{'name'} }}
                                        </td>
                                        @endif
                                        @endforeach
                                        <td class="row-value">{{ $BC_arbitraje->{'compra'} }}</td>
                                        <td class="row-value">{{ $BC_arbitraje->{'venta'} }}</td>
                                      </tr>
                                      @endforeach
                                  </tbody>
                            </table>
                        </div>

                        <div id="minValues"class="table-responsive-md-3" hidden="True">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                      <th scope="col">Compra</th>
                                      <th scope="col">Venta</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($lower_values as $lower_value)
                                      <tr>
                                        <td>{{ $lower_value->{'compra'} }}</td>
                                        <td>{{ $lower_value->{'venta'} }}</td>
                                      </tr>
                                      @endforeach
                                  </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>

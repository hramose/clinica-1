@extends('layouts.app')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">weekend</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Pacientes</p>
                                    <h3 class="card-title">184</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-danger">warning</i>
                                        <a href="#pablo">Get More Space...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="rose">
                                    <i class="material-icons">equalizer</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Reservas</p>
                                    <h3 class="card-title">75.521</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">local_offer</i> Tracked from Google Analytics
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="green">
                                    <i class="material-icons">store</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Total Consultas</p>
                                    <h3 class="card-title">$34,245</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> Last 24 Hours
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                    <i class="fa fa-twitter"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Citas del Día</p>
                                    <h3 class="card-title">+245</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Just Updated
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="green">
                        <i class="material-icons">language</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Global Sales by Top Locations</h4>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="table-responsive table-sales">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="flag">
                                                       <a href="#">16.447.779-7</a> 
                                                    </div>
                                                </td>
                                                <td>Rafael Echeverria Reyes</td>
                                                <td class="text-right">
                                                    2.920
                                                </td>
                                                <td class="text-right">
                                                    53.23%
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="flag">
                                                        <img src="../assets/img/flags/DE.png">
                                                    </div>
                                                </td>
                                                <td>Camila Pineda Bastias</td>
                                                <td class="text-right">
                                                    1.300
                                                </td>
                                                <td class="text-right">
                                                    20.43%
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="flag">
                                                        <img src="../assets/img/flags/AU.png">
                                                    </div>
                                                </td>
                                                <td>Australia</td>
                                                <td class="text-right">
                                                    760
                                                </td>
                                                <td class="text-right">
                                                    10.35%
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="flag">
                                                        <img src="../assets/img/flags/GB.png">
                                                    </div>
                                                </td>
                                                <td>United Kingdom</td>
                                                <td class="text-right">
                                                    690
                                                </td>
                                                <td class="text-right">
                                                    7.87%
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="flag">
                                                        <img src="../assets/img/flags/RO.png">
                                                    </div>
                                                </td>
                                                <td>Romania</td>
                                                <td class="text-right">
                                                    600
                                                </td>
                                                <td class="text-right">
                                                    5.94%
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="flag">
                                                        <img src="../assets/img/flags/BR.png">
                                                    </div>
                                                </td>
                                                <td>Brasil</td>
                                                <td class="text-right">
                                                    550
                                                </td>
                                                <td class="text-right">
                                                    4.34%
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6 col-md-offset-1">
                                <div id="worldMap" class="map"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
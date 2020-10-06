
@extends('plantilla/plantilla')


@section('content')

<div class="container" id="titular_elisa">
    
<div class="col-sm">
<h1  style="color:black;">Titular del Centro de Atención y</h1>
<h1  style="color:black;">Cuidado Infantil</h1>

    <img src="./media/logos/Elisa_Tamara.jpg" 
    class="img-fluid"  alt="Responsive Image" 
    width="30%"  /> 



        <h1 class="kt-widget3__text"  style="color:black;">Elisa Tamara Prado Viveros</h1><br>
    


</div>



<a href="{{route('luz_maria.index')}}"     type="button" class="btn yellow"  style="color: #fff;
    background-color:  #2ea44f;!important;
    border-color: none">Regresar</a><br>


</div><br>



@endsection








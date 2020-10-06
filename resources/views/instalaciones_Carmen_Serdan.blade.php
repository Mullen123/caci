
@extends('plantilla/plantilla')


@section('content')


<div class="container">

   <label style="color:#777777; font-size: 40px; text-align: left; ">Instalaciones</label>
   <div class="col-sm">


    <div class="row">

        <!--seccion de imagenes del centro-->
    


        <!--seccion de imagenes del centro-->
        <div class="col-md-4" id="instalaciones_carmen">

            <div class="col-sm">



             
                    <img src="https://aplicaciones.finanzas.cdmx.gob.mx/caciadmin/public/img/CACI_Carmen/4.jpg" class="img-fluid"  alt="Responsive Image"  width="100%">
              
            </div><br>

                    <h2 style="color:black;">Actividades Pedagógicas</h2>




        </div><!--termina el col-md-->


        <!--seccion de imagenes del centro-->
        <div class="col-md-4" id="instalaciones_carmen">

            <div class="col-sm">



                    <img src="https://aplicaciones.finanzas.cdmx.gob.mx/caciadmin/public/img/CACI_Carmen/3.jpg"  class="img-fluid"  alt="Responsive Image"  width="100%">
             

            </div><br>


            <h2 style="color:black;">Instalaciones</h2>






            <div class="col-sm">



             
                    <img src="https://aplicaciones.finanzas.cdmx.gob.mx/caciadmin/public/img/CACI_Eva/4.jpg" class="img-fluid"  alt="Responsive Image"  width="100%">
              

            </div><br>


            <h2 style="color:black;">Capacitación de Personal</h2>



        </div><!--termina el col-md-->

    </div><!--Termina el col md-->



<a   href="{{route('centros_carmen.index')}}"  type="button" class="btn yellow"  style="color: #fff;
    background-color:  #2ea44f;!important;
    border-color: none">Regresar</a><br>


</div><br><!--fin del row-->










@endsection

















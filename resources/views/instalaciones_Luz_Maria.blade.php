
@extends('plantilla/plantilla')


@section('content')


<div class="container" id="instalaciones_luz">

   <label style="color:#777777; font-size: 40px; text-align: left; ">Instalaciones</label>
   <div class="col-sm">


    <div class="row">

        <!--seccion de imagenes del centro-->
        <div class="col-md-4" >

            <div class="col-sm">



         
                    <img src="https://aplicaciones.finanzas.cdmx.gob.mx/caciadmin/public/img/CACI_1/6.jpg" class="img-fluid"  alt="Responsive Image"  width="100%">
             

            </div><br>


            <h2 style="color:black;">Actividades Extracurriculares</h2>


        </div><!--termina el col-md-->



        <!--seccion de imagenes del centro-->
        <div class="col-md-4" >

            <div class="col-sm">



                    <img src="https://aplicaciones.finanzas.cdmx.gob.mx/caciadmin/public/img/CACI_1/2.jpg" class="img-fluid"  alt="Responsive Image"  width="100%">
              

            </div><br>

                    <h2 style="color:black;">Actividades Pedagógicas</h2>




        </div><!--termina el col-md-->


        <!--seccion de imagenes del centro-->
        <div class="col-md-4" >

            <div class="col-sm">



                    <img src="https://aplicaciones.finanzas.cdmx.gob.mx/caciadmin/public/img/CACI_1/4.jpg" class="img-fluid"  alt="Responsive Image"  width="100%">
             

            </div><br>


            <h2 style="color:black;">Instalaciones</h2>




        </div><!--termina el col-md-->

    </div><!--Termina el col md-->

<!--<a href="{{route('luz_maria.index')}}"  class="btn btn-success" style=" width: 10%; background-color: #2ea44f;!important" >Regresar</a><br>-->


<a href="{{route('luz_maria.index')}}"     type="button" class="btn yellow"  style="color: #fff;
    background-color:  #2ea44f;!important;
    border-color: none">Regresar</a>


</div><!--fin del row--><br>
</div>





@endsection

















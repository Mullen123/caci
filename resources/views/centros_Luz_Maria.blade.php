
@extends('plantilla/plantilla')


@section('content')


<div class="container">


   <div class="col-sm">


    <img src="./media/logos/caci-2.png" 
    class="img-fluid"  alt="Responsive Image" 
    width="100%" /> 

</div><br>

<div class="row">


  <div class="col-md-4">


    <div class="kt-widget3__body">
        <h2 style=" font-weight:bold; text-align: center; color:#777777;">Nuestro CACI-SAF</h2>
    </div><br>


    <div class="accordion accordion-solid accordion-toggle-svg" id="accordionExample8">


        <div class="card">
            <div class="card-header" id="headingNine8">
                <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseNine8" aria-expanded="false" aria-controls="collapseNine8">
                    <h2 style="color: #777777;">Luz María Gómez Pezuela</h2>

                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon id="Shape" points="0 0 24 0 24 24 0 24"/>
                            <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" id="Path-94" fill="#000000" fill-rule="nonzero"/>
                            <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" id="Path-94" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "/>
                        </g>
                    </svg>                  </div>
                </div>
                <div id="collapseNine8" class="collapse" aria-labelledby="headingNine8" data-parent="#accordionExample8">
                    <div class="card-body" style="color: black">
                         <p>Dr. Claudio Bernard No.123 </p><p>Col.Doctores C.P. 07620</p>
                     <p>Del. Cuauhtémoc</p>
                     <p>Tel: 55-88-33-20</p>  
                     <p>Tel. 51-34-25-50</p>   
                    </div>
                </div>
                <div class="card-header" id="headingOne8">
                   <div class="card-title" >

                     <a href="{{route('luz_maria.index')}}"  style="text-align: right; color:#00b140; font-size: 15px">
                     
                        <h2> Ver información </h2></a>
                    </div>
                </div>
            </div> <!--Termina el card-->

        <div class="card">
            <div class="card-header" id="headingTwo8">
                <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo8" aria-expanded="false" aria-controls="collapseTwo8">
                    <h2 style="color: #777777;">Mtra. Eva Moreno Sánchez</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon id="Shape" points="0 0 24 0 24 24 0 24"/>
                            <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" id="Path-94" fill="#000000" fill-rule="nonzero"/>
                            <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" id="Path-94" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "/>
                        </g>
                    </svg>                  </div>
                </div>
                <div id="collapseTwo8" class="collapse" aria-labelledby="headingTwo8" data-parent="#accordionExample8">
                    <div class="card-body" style="color: black">
                        <p>Dr. Lavista No. 54 </p>
                        <p>Col.Doctores C.P. 06720</p>
                        <p>Del. Cuauhtémoc</p>
                        <p>Tel: 55-78-76-76</p>
                    </div>
                </div>
                <div class="card-header" id="headingOne8">
                   <div class="card-title" >

                  <a href="{{route('eva_moreno.index')}}"  style="text-align: right; color:#00b140; font-size: 15px">
                        <h2> Ver información </h2></a>
                    </div>
                </div>
            </div> <!--Termina el card-->


            <div class="card">
                <div class="card-header" id="headingThree8">
                    <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree8" aria-expanded="false" aria-controls="collapseThree8">
                     <h2 style="color: #777777;">Bertha Von Glümer Leyva</h2>
                     <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon id="Shape" points="0 0 24 0 24 24 0 24"/>
                            <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" id="Path-94" fill="#000000" fill-rule="nonzero"/>
                            <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" id="Path-94" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "/>
                        </g>
                    </svg>                  </div>
                </div>
                <div id="collapseThree8" class="collapse" aria-labelledby="headingThree8" data-parent="#accordionExample8">
                    <div class="card-body"  style="color: black">
                        <p>Jesús García No. 63</p>
                        <p>Col. Buenavista C.P. 06350</p>
                        <p>Del. Cuauhtémoc</p>
                        <p>Tel. 55-92-70-98</p>
                        <p>Tel. 55-66-19-29</p>
                    </div>
                </div>
                <div class="card-header" id="headingOne8">
                   <div class="card-title" >
                   <a href="{{route('bertha.index')}}"  style="text-align: right; color:#00b140; font-size: 15px">
                        
                        <h2> Ver información </h2></a>
                    </div>
                </div>
            </div><!--Termina el card-->


            <div class="card">
                <div class="card-header" id="headingFour8">
                    <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseFour8" aria-expanded="false" aria-controls="collapseFour8">
                        <h2 style="color: #777777;">Carolina Agazzi</h2>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon id="Shape" points="0 0 24 0 24 24 0 24"/>
                                <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" id="Path-94" fill="#000000" fill-rule="nonzero"/>
                                <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" id="Path-94" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "/>
                            </g>
                        </svg>                  </div>
                    </div>
                    <div id="collapseFour8" class="collapse" aria-labelledby="headingFour8" data-parent="#accordionExample8">
                        <div class="card-body"  style="color: black">
                         <p>Oriente 42 No. 360 entre Lorenzo Boturini y Avenida del Taller</p>
                         <p>Col. 24 de Abril C.P. 15980</p>
                         <p>Del. Venustiano Carranza</p>
                         <p>Tel. 57-64-40-36</p>
                         <p>Tel. 55-52-03-63</p>
                     </div>
                 </div>
                 <div class="card-header" id="headingOne8">
                   <div class="card-title" >
                     
                <a  href="{{route('carolina.index')}}"  style="text-align: right; color:#00b140; font-size: 15px">
                        <h2> Ver información </h2></a>
                    </div>
                </div>



            </div><!--Termina el card-->




            <div class="card">
                <div class="card-header" id="headingFive8">
                    <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseFive8" aria-expanded="false" aria-controls="collapseFive8">
                      <h2 style="color: #777777;">Carmen Serdán</h2> 
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon id="Shape" points="0 0 24 0 24 24 0 24"/>
                            <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" id="Path-94" fill="#000000" fill-rule="nonzero"/>
                            <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" id="Path-94" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "/>
                        </g>
                    </svg>                  </div>
                </div>
                <div id="collapseFive8" class="collapse" aria-labelledby="headingFive8" data-parent="#accordionExample8">
                    <div class="card-body"  style="color: black">
                        <p>Plaza Benito Juárez No. 10</p>
                        <p>Col. Ramos Millán C.P. 08000</p>
                        <p>Del. Iztacalco</p>
                        <p>Tel. 56-57-26-89</p>
                        <p>Tel. 56-34-38-58</p>
                    </div>
                </div>


                <div class="card-header" id="headingOne8">
                   <div class="card-title" >
                        <a href="{{route('centros_carmen.index')}}"  style="text-align: right; color:#00b140; font-size: 15px">
                        <h2> Ver información </h2></a>
                    </div>
                </div>
            </div><!--termina el card-->

        </div><br><!--fin del acordion-->
    </div><!--fin del col sm-4-->



    <!--seccion de imagenes del centro-->
    <div class="col-md-4"  id="centro_Luz">

      <div class="col-sm">
        <a href="{{route('mapas')}}" target="_blank">
            <img src="./media/logos/ubicacion.png" 
            class="img-fluid"  alt="Responsive Image" 
            width="100%" /> 


        </a>

    </div><br>

    <div class="col-sm">
        <a href="{{route('titular_Elisa.show_titular')}}" >
            <img src="./media/logos/responsable.jpg" 
            class="img-fluid"  alt="Responsive Image" 
            width="100%" /> 


        </a>

    </div><br>

    <div class="col-sm">

        <img src="./media/logos/tramites.jpg" 
        class="img-fluid"  alt="Responsive Image" 
        width="100%"  style="align-items: center !important;"  /> 
    </div> 

</div><!--termina el col-md-->



<!--seccion de las imagenes de la derecha-->
<div class="col-md-4" id="centro_Luz">


    <div class="card card-custom card-fit card-border" style="text:align:center; padding: 30px; height: 210px;" >

     <h2 style=" font-weight: bold; color:#777777;">Centro de Atención y Cuidado Infantil</h2>
     <h2 style="font-weight: bold; color:#00B140;">Luz María Gómez Pezuela</h2>
 </div><br>


 <div class="col-sm">
         <a href="{{route('instalaciones_luz_Maria.show_instalaciones')}}" >
    <img src="./media/logos/instalaciones.jpg" 
    class="img-fluid"  alt="Responsive Image" 
    width="100%"  style="align-items: center !important;"  /> 
</div> <br>

 <div class="col-sm">

        <img src="./media/logos/civil.jpg" 
        class="img-fluid"  alt="Responsive Image" 
        width="100%"  style="align-items: center !important;"  /> 
    </div> 



</div><!--Termina el col md-->




</div><!--fin del row-->






@endsection









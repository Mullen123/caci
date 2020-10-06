@extends('plantilla/plantilla')


@section('content')

<div class="container">
  
  <!--begin::Portlet-->
  <div class="kt-portlet">
   
    <!--begin::Form-->
    <form class="kt-form">
      <div class="kt-portlet__body">
        <div class="kt-section kt-section--first">
          <div class="form-group">
            <h2 style="color:#777777; text-align: center;">Preinscripción</h2>
            
            <label style="color:#054a41; font-size: 24px; text-align: center; ">Para iniciar el proceso de preinscripción, proporciona el siguiente dato</label>
            
            <input type="text" class="form-control" placeholder="RFC de la persona trabajadora" id="input_rfc" maxlength="13" pattern="^([A-ZÑ\x26]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))([A-Z\d]{3})?$" required=""  ><br>




            <button type="sumbit"class="btn btn-primary" >Validar RFC</button>


            
            
          </div>
        </div>
      </div>

    </form>
    <!--end::Form-->
  </div>
  <!--end::Portlet-->

</div>



@endsection
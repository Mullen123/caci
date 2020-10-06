@extends('plantilla/plantilla')


@section('content')

<div class="container">



 

  <!--begin::Portlet-->
  <div class="kt-portlet">
   
    <!--begin::Form-->
    <form class="kt-form">
      <div class="kt-portlet__body">
        <div class="kt-section kt-section--first">
          <div class="form-group" >


            <div class="col-sm">
             

              <img src="./media/logos/caci.png" 
              class="img-fluid"  alt="Responsive Image" 
              width="80%" /> 

            </div>

            <label  for="usuario" style="color:black; "> Nombre:</label>

            <input id="input_login_name" type="text" class="form-control"  placeholder="Nombre de usuario" name="name"  required="" ><br>

            <label  for="password" style="color:black;">Contraseña:</label>

            <input id="input_login_password" type="password" class="form-control" placeholder="Contraseña" name="password"  required=""  ><br>

            <button type="submit">Entrar</button>
            
          </div>
        </div>
      </div>

    </form>
    <!--end::Form-->
  </div>
  <!--end::Portlet-->












  




</div>



@endsection
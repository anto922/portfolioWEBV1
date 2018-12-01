<div class="modal fade" id="loginAdmin" tabindex="-1" role="dialog"  aria-hidden="true">
	<form id="login-form">
		@csrf
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Panel Administrador</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">       
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Usuario:</label>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Password:</label>
               <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>			  
          </div>    
      </div>
      <div class="modal-footer">
        <button id="loginButton" type="button" class="btn btn-primary">Entrar</button>
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>		  
      </div>
		<div class="container errorLogin" style='display:none'></div>
    </div>
  </div>
  </form>
</div>
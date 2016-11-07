<div role="tabpanel">
    <!-- Nav tabs -->
    <ul class="nav nav-pills nav-justified" role="tablist">
        <li role="presentation" class="active">
            <a href="#login" aria-controls="login" role="tab" data-toggle="tab"><span class="fa fa-login"></span> Connexion</a>
        </li>
        <li role="presentation">
            <a href="#register" aria-controls="register" role="tab" data-toggle="tab"><span class="fa fa-user"></span> Créer un Compte</a>
        </li>
    </ul>

	<hr>
    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="login">

        	@include('auth.form-login')

        </div>
        <div role="tabpanel" class="tab-pane" id="register">

        	@include('auth.form-register')

        </div>
    </div>
</div>
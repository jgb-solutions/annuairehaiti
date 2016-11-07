@extends('pages.page-full')

@section('title')
	Inscrivez votre entreprise dans l'Annuaire du pays
@stop

@section('page-full')

    <div class="col-sm-12">
        <h2 class="text-center">Inscrivez votre entreprise dans l'Annuaire du pays</h2>
        <hr>
    </div>

    <div class="col-sm-5 col-sm-push-7">

        <p>
            ** Il est important de noter que tous les champs avec un star près de leur titre sont obligatoires.**
        </p>

        <p>
            Après que vous aurez rempli la forme et l'aurez soumise, vous serez diriger sur une page vous permettant de choisir une méthode de paiement.
        </p>

        <p>
            Si la forme ne fonctionne pas ou si vous voulez nous contacter directement, appelez-nous.
        </p>

        <address>
            Port-au-Prince, Haiti<br>
            <abbr>Tel:</abbr> <a href="tel:+50936478199">(+509) 3647 8199</a><br>
            </address>
            <address>
            <strong>L'équipe AH</strong><br>
            <a href="mailto:contact@annuairehaiti.com">contact@AnnuaireHaiti.com</a>
        </address>
    </div>

    <div class="col-sm-7 col-sm-pull-5">

        @include('inc.errors')

        <form method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="entreprise">Nom de l'entreprise <span class="text-danger">*</span></label>
                <input
                    name="name"
                    type="text"
                    class="form-control"
                    id="entreprise"
                    placeholder="Nom de l'entreprise"
                    required="required"
                    value="{{old('name')}}">
            </div>

            <div class="form-group">
                <label for="telephone">Téléphone <span class="text-danger">*</span></label>
                <input
                    name="telephone"
                    type="tel"
                    class="form-control"
                    id="telephone"
                    placeholder="Téléphone"
                    required="required"
                    value="{{old('telephone')}}">
            </div>

            <div class="form-group">
                <label for="fax">Fax</label>
                <input
                    name="fax"
                    type="tel"
                    class="form-control"
                    id="fax"
                    placeholder="Fax"
                    value="{{old('fax')}}">
            </div>

            <div class="form-group">
                <label for="email">E-mail <span class="text-danger">*</span></label>
                <input
                    name="email"
                    type="email"
                    class="form-control"
                    id="email"
                    placeholder="Entrez l'e-mail de l'entreprise"
                    required="required"
                    value="{{old('email')}}">
            </div>

            <div class="form-group">
                <label for="website">Site Web</label>
                <input
                    name="website"
                    type="url"
                    class="form-control"
                    id="website"
                    placeholder="Entrez l'adresse web de l'entreprise"
                    value="{{old('website')}}">
            </div>

            <div class="form-group">
                <label for="address">Adresse <span class="text-danger">*</span></label>
                <textarea
                    name="address"
                    id="address"
                    class="form-control"
                    rows="3"
                    required="required"
                    placeholder="Entrez l'addresse de l'entreprise"
                    value="{{old('address')}}"></textarea>
            </div>


            <div class="form-group">
                <label for="category">Catégorie <span class="text-danger">*</span></label>
                <select name="category_id" id="category" class="form-control" required="required">
                    <option value="">Choisissez une catégorie...</option>

                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach

                </select>
            </div>

            <div class="form-group">
                <label for="department">Département <span class="text-danger">*</span></label>
                <select name="department_id" id="department" class="form-control" required="required">
                    <option value="">Choisissez un département...</option>
                    @foreach($departments as $department)

                    <option value="{{ $department->id }}">{{ $department->name }}</option>

                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="city">Ville <span class="text-danger">*</span></label>
                <select name="city_id" id="city" class="form-control" required="required">
                    <option value="">Choisissez une ville...</option>

                    @foreach( $villes as $ville )

                    <option value="{{ $ville->id }}">{{ $ville->name }}</option>

                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="town">Commune <span class="text-danger">*</span></label>
                <select name="town_id" id="town" class="form-control" required="required">
                    <option value="">Choisissez une commune...</option>

                    @foreach( $towns as $town )

                    <option value="{{ $town->id }}">{{ $town->name }}</option>

                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="map">Position Géographique</label>
                <textarea name="map" id="map" class="form-control" rows="3" required="required" placeholder="Entrez le code de la position géographique"></textarea>
            </div>

            <div class="form-group">
                <label for="details">Détails de l'entreprise <span class="text-danger">*</span></label>
                <textarea name="details" id="details" class="form-control" rows="6" required="required" placeholder="Veuillez entrer quelques détails concernant votre entreprise. Vous pouvez détailler aussi longuement ou brièvement que vous voulez"></textarea>
            </div>

            <div class="form-group">
                <label for="logo">Logo ( Carré. Au moins 500px x 500px ) <span class="text-danger">*</span></label>
                <input name="logo" type="file" class="form-control" id="logo" required="required">
            </div>

            <div class="form-group">
                <label for="img_entete">Image d'entête ( Taille 768px x 317px ) <span class="text-danger">*</span></label>
                <input name="img_entete" type="file" class="form-control" id="img_entete" required="required">
            </div>

            <div class="form-group">
                <label for="facebook">Facebook</label>
                <input name="facebook" type="url" class="form-control" id="facebook" placeholder="Adresse web de la page Facebook de l'entreprise">
            </div>

            <div class="form-group">
                <label for="twitter">Twitter</label>
                <input name="twitter" type="url" class="form-control" id="twitter" placeholder="Adresse web de la page Twitter de l'entreprise">
            </div>

            <div class="form-group">
                <label for="google">Google</label>
                <input name="google" type="url" class="form-control" id="google" placeholder="Adresse web de la page Google de l'entreprise">
            </div>

            <button type="submit" class="btn btn-primary btn-lg">
            <i class="fa fa-paper-plane"></i> Envoyer</button>

        </form>

    </div>

@stop
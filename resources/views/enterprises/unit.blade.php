<a href="{{ $enterprise->url }}">
    <img
        width="319"
        height="319"
        src="{{ $enterprise->logoUrl }}"
        class="img-rounded img-bordered img-responsive"
        alt="{{ $enterprise->name }}"
        title="Voir l&#039;Entreprise {{ $enterprise->name }}" />
</a>

<h4 class="text-center overflow">
    {{ $enterprise->name }}
    <br>
    <small>
        <a href="{{ $enterprise->category->url }}" class="overflow" 
            title="Naviguer la Catégorie d'Entreprises: {{ $enterprise->category->name }}">
            <i class="fa fa-th"></i> {{ $enterprise->category->name }}
        </a>
    </small>
</h4>
<p>
    <a href="{{ $enterprise->url }}"
        class="btn btn-block btn-yellow btn-lg">
        @lang('text.enterprises.seeDetails')
    </a>
</p>
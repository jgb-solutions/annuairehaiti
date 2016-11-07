<a href="{{ $city->url }}">
    {{-- <img
        width="319"
        height="319"
        src="{{ $city->logoUrl }}"
        class="img-rounded img-bordered img-responsive"
        alt="{{ $city->name }}"
        title="Voir l&#039;Entreprise {{ $city->name }}" /> --}}
        <i class="fa fa-th fa-5x"></i>
</a>

<h4 class="text-center overflow">
    ({{ $city->enterprises_count}}) {{ $city->name }}
</h4>
<p>
    <a href="{{ $city->url }}"
        class="btn btn-block btn-yellow btn-lg">
        @lang('text.cities.listEnterprises')
    </a>
</p>
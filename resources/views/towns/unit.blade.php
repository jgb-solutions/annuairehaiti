<a href="{{ $town->url }}">
    {{-- <img
        width="319"
        height="319"
        src="{{ $town->logoUrl }}"
        class="img-rounded img-bordered img-responsive"
        alt="{{ $town->name }}"
        title="Voir l&#039;Entreprise {{ $town->name }}" /> --}}
        <i class="fa fa-th fa-5x"></i>
</a>

<h4 class="text-center overflow">
    ({{ $town->enterprises_count}}) {{ $town->name }}
</h4>
<p>
    <a href="{{ $town->url }}"
        class="btn btn-block btn-yellow btn-lg">
        @lang('text.categories.listEnterprises')
    </a>
</p>
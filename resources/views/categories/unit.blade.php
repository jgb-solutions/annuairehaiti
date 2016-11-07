<a href="{{ $category->url }}">
    {{-- <img
        width="319"
        height="319"
        src="{{ $category->logoUrl }}"
        class="img-rounded img-bordered img-responsive"
        alt="{{ $category->name }}"
        title="Voir l&#039;Entreprise {{ $category->name }}" /> --}}
        <i class="fa fa-th fa-5x"></i>
</a>

<h4 class="text-center overflow">
    ({{ $category->enterprises_count}}) {{ $category->name }}
</h4>
<p>
    <a href="{{ $category->url }}"
        class="btn btn-block btn-yellow btn-lg">
        @lang('text.categories.listEnterprises')
    </a>
</p>
<div class="row">
    <hr>
    <div class="col-sm-12">
        <div class="row">
            <h3 class="text-center">@lang('text.enterprises.category.same')</h3>
                <br>
                @foreach ($related as $enterprise)
                    <div class="col-sm-4 col-xs-4">
                        @include('enterprises.unit')
                    </div>
                @endforeach
        </div>
    </div>
</div>
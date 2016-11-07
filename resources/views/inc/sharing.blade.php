<p>
    <a class="btn btn-primary"
        target="_blank"
        title="@lang('text.shareOn') Facebook"
        href="http://www.facebook.com/sharer.php?u={{urlencode($enterprise->url)}}&amp;t={{$enterprise->name}}">
        <strong>
            <i class="fa fa-facebook fb"></i>
            <span class="fab">Facebook</span>
        </strong>
    </a>

    <a
        class="btn btn-info"
        target="_blank"
        title="@lang('text.shareOn') Twitter"
        href="http://twitter.com/share?url={{urlencode($enterprise->url)}}&amp;text={{$enterprise->name}}&amp;via={{config('site.twitter')}}">
        <strong>
            <i class="fa fa-twitter tw"></i>
            <span class="fab">Twitter</span>
        </strong>
    </a>

    <a
        class="btn btn-success"
        target="_blank"
        title="@lang('text.shareOn') WhatsApp"
        href="whatsapp://send?text={{$enterprise->name}} {{urlencode($enterprise->url)}} via {{ '@' . config('site.twitter')}}">
        <strong>
            <i class="fa fa-whatsapp wa"></i>
            <span class="fab">WhatsApp</span>
        </strong>
    </a>

    <a
        class="btn btn-danger"
        target="_blank"
        title="@lang('text.shareOn') Google Plus"
        href="https://plus.google.com/share?url={{urlencode($enterprise->url)}}">
        <strong>
            <i class="fa fa-google-plus google"></i>
            <span class="fab">Google+</span>
        </strong>
    </a>
</p>
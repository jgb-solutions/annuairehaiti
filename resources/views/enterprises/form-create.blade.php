<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="entreprise">
            @lang('form.enterprise.name.label')
            <span class="text-danger">*</span>
        </label>
        <input
            name="name"
            type="text"
            class="form-control"
            id="entreprise"
            placeholder="@lang('form.enterprise.name.placeholder')"
            required="required"
            value="{{old('name')}}">
    </div>

    <div class="form-group">
        <label for="telephone">
            @lang('form.enterprise.telephone.label')
            <span class="text-danger">*</span>
        </label>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon3">+509</span>
            <input
                name="telephone"
                type="tel"
                class="form-control"
                id="telephone"
                placeholder="@lang('form.enterprise.telephone.placeholder')"
                required="required"
                value="{{old('telephone')}}">
        </div>
    </div>

    <div class="form-group">
        <label for="fax">Fax</label>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon3">+509</span>
            <input
                name="fax"
                type="tel"
                class="form-control"
                id="fax"
                placeholder="@lang('form.enterprise.fax.placeholder')"
                value="{{old('fax')}}">
        </div>
    </div>

    <div class="form-group">
        <label for="email">E-mail <span class="text-danger">*</span></label>
        <input
            name="email"
            type="email"
            class="form-control"
            id="email"
            placeholder="@lang('form.enterprise.email.placeholder')"
            required="required"
            value="{{old('email')}}">
    </div>

    <div class="form-group">
        <label for="website">@lang('form.enterprise.website.label')</label>
        <input
            name="website"
            type="url"
            class="form-control"
            id="website"
            placeholder="@lang('form.enterprise.website.placeholder')"
            value="{{old('website')}}">
    </div>

    <div class="form-group">
        <label for="address">
            @lang('form.enterprise.address.label')
            <span class="text-danger">*</span>
        </label>
        <textarea
            name="address"
            id="address"
            class="form-control"
            rows="3"
            required="required"
            placeholder="@lang('form.enterprise.address.placeholder')"
            value="{{old('address')}}"></textarea>
    </div>


    <div class="form-group">
        <label for="category">
            @lang('form.enterprise.category.label')
            <span class="text-danger">*</span>
        </label>
        <select name="category_id" id="category" class="form-control" required="required">
            <option value="">@lang('form.enterprise.category.placeholder')</option>

            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach

        </select>
    </div>

    <div class="form-group">
        <label for="department">
            @lang('form.enterprise.department.label')
            <span class="text-danger">*</span>
        </label>
        <select name="department_id" id="department" class="form-control" required="required">
            <option value="">@lang('form.enterprise.department.placeholder')</option>
            @foreach($departments as $department)

            <option value="{{ $department->id }}">{{ $department->name }}</option>

            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="city">
            @lang('form.enterprise.city.label')
            <span class="text-danger">*</span>
        </label>
        <select name="city_id" id="city" class="form-control" required="required">
            <option value="">@lang('form.enterprise.city.placeholder')</option>

            @foreach( $cities as $city )

            <option value="{{ $city->id }}">{{ $city->name }}</option>

            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="town">
            @lang('form.enterprise.town.label')
            <span class="text-danger">*</span>
        </label>
        <select name="town_id" id="town" class="form-control" required="required">
            <option value="">@lang('form.enterprise.town.placeholder')</option>

            @foreach( $towns as $town )

            <option value="{{ $town->id }}">{{ $town->name }}</option>

            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="map">@lang('form.enterprise.map.label')</label>
        <textarea name="map" id="map"
            class="form-control"rows="3"
            required="required"
            placeholder="@lang('form.enterprise.map.placeholder')"></textarea>
    </div>

    <div class="form-group">
        <label for="details">
            @lang('form.enterprise.details.label')
            <span class="text-danger">*</span>
        </label>
        <textarea name="details" id="details"
            class="form-control" rows="6"
            required="required"
            placeholder="@lang('form.enterprise.details.placeholder')"></textarea>
    </div>

    <div class="form-group">
        <label for="logo">
            @lang('form.enterprise.logo.label')
            <span class="text-danger">*</span>
        </label>
        <input name="logo" type="file" class="form-control" id="logo" required="required" accept=".jpg, .jpeg, .png, .gif">
    </div>

    <div class="form-group">
        <label for="header_image">
            @lang('form.enterprise.header_image.label')
            <span class="text-danger">*</span>
        </label>
        <input name="header_image" type="file" class="form-control" id="header_image" required="required">
    </div>

    <div class="form-group">
        <label for="facebook">Facebook</label>
        <input name="facebook" type="url"
            class="form-control" id="facebook"
            placeholder="@lang('form.enterprise.facebook.placeholder')">
    </div>

    <div class="form-group">
        <label for="twitter">Twitter</label>
        <input name="twitter" type="url"
            class="form-control"
            id="twitter"
            placeholder="@lang('form.enterprise.twitter.placeholder')">
    </div>

    <div class="form-group">
        <label for="google">Google</label>
        <input name="google" type="url"
            class="form-control" id="google"
            placeholder="@lang('form.enterprise.google.placeholder')">
    </div>

    <button type="submit" class="btn btn-primary btn-lg">
        <i class="fa fa-plus"></i> @lang('form.enterprise.submit.create')
    </button>

    {{ csrf_field() }}
</form>
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
            value="{{$enterprise->name}}">
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
                value="{{$enterprise->telephone}}">
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
                value="{{$enterprise->fax}}">
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
            value="{{$enterprise->email}}">
    </div>

    <div class="form-group">
        <label for="website">@lang('form.enterprise.website.label')</label>
        <input
            name="website"
            type="url"
            class="form-control"
            id="website"
            placeholder="@lang('form.enterprise.website.placeholder')"
            value="{{$enterprise->website}}">
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
            placeholder="@lang('form.enterprise.address.placeholder')">{{$enterprise->address}}</textarea>
    </div>


    <div class="form-group">
        <label for="category">
            @lang('form.enterprise.category.label')
            <span class="text-danger">*</span>
        </label>
        <select name="category_id"
            id="category"
            class="form-control"
            required="required">

            @foreach($categories as $category)
                <option value="{{ $category->id }}"
                    {{$category->id == $enterprise->category_id ? 'selected' : ''}}>
                    {{ $category->name }}
                </option>
            @endforeach

        </select>
    </div>

    <div class="form-group">
        <label for="department">
            @lang('form.enterprise.department.label')
            <span class="text-danger">*</span>
        </label>
        <select name="department_id" id="department" class="form-control" required="required">
            @foreach($departments as $department)
                <option value="{{ $department->id }}"
                    {{$department->id == $enterprise->department_id ? 'selected' : ''}}>
                    {{ $department->name }}
                    </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="city">
            @lang('form.enterprise.city.label')
            <span class="text-danger">*</span>
        </label>
        <select name="city_id" id="city" class="form-control" required="required">
            @foreach( $cities as $city )
                <option value="{{ $city->id }}"
                    {{$city->id == $enterprise->city_id ? 'selected' : ''}}>
                    {{ $city->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="town">
            @lang('form.enterprise.town.label')
            <span class="text-danger">*</span>
        </label>
        <select name="town_id" id="town" class="form-control" required="required">
        @foreach($towns as $town)
            <option value="{{ $town->id }}"
               {{$town->id == $enterprise->town_id ? 'selected' : ''}}>
               {{ $town->name }}
            </option>
        @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="map">@lang('form.enterprise.map.label')</label>
        <textarea name="map" id="map"
            class="form-control"rows="3"
            required="required"
            placeholder="@lang('form.enterprise.map.placeholder')">{{$enterprise->map}}</textarea>
    </div>

    <div class="form-group">
        <label for="details">
            @lang('form.enterprise.details.label')
            <span class="text-danger">*</span>
        </label>
        <textarea name="details" id="details"
            class="form-control" rows="6"
            required="required"
            placeholder="@lang('form.enterprise.details.placeholder')">{{$enterprise->details}}</textarea>
    </div>

   <div class="form-group">
      <label for="logo">
         @lang('form.enterprise.logo.label')
         <span class="text-danger">*</span>
      </label>
      <input name="logo" type="file"
         class="form-control"
         id="logo"
         accept=".jpg, .jpeg, .png, .gif">
   </div>

   <div class="form-group">
      <label for="header_image">
         @lang('form.enterprise.header_image.label')
         <span class="text-danger">*</span>
      </label>
      <input name="header_image" type="file"
         class="form-control"
         id="header_image"
         accept=".jpg, .jpeg, .png, .gif">
    </div>

    <div class="form-group">
        <label for="facebook">Facebook</label>
        <input name="facebook" type="url"
            class="form-control" id="facebook"
            placeholder="@lang('form.enterprise.facebook.placeholder')"
            value="{{$enterprise->facebook}}">
    </div>

    <div class="form-group">
        <label for="twitter">Twitter</label>
        <input name="twitter" type="url"
            class="form-control"
            id="twitter"
            placeholder="@lang('form.enterprise.twitter.placeholder')"
            value="{{$enterprise->twitter}}">
    </div>

    <div class="form-group">
        <label for="google">Google</label>
        <input name="google" type="url"
            class="form-control" id="google"
            placeholder="@lang('form.enterprise.google.placeholder')"
            value="{{$enterprise->google}}">
    </div>

   <div class="form-group">
      <label for="featured">@lang('form.enterprises.featured')</label>
      <input
         name="featured"
         type="checkbox"
         id="featured"
         {{ $enterprise->featured ? 'checked' : ''}}>
   </div>

    <button type="submit" class="btn btn-primary btn-lg">
        <i class="fa fa-plus"></i> @lang('form.enterprise.submit.edit')
    </button>

    {{ csrf_field() }}
    {{ method_field('PUT') }}
</form>
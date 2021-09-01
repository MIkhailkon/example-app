<form method="POST" action="{{ route('application_store') }}" enctype="multipart/form-data">
    @csrf

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                   value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone number') }}</label>

        <div class="col-md-6">
            <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone"
                   value="{{ old('phone') }}" required autocomplete="phone">

            @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="company" class="col-md-4 col-form-label text-md-right">{{ __('Company') }}</label>

        <div class="col-md-6">
            <input id="company" type="text" class="form-control @error('company') is-invalid @enderror" name="company"
                   value="{{ old('company') }}" required autocomplete="company">

            @error('company')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="application" class="col-md-4 col-form-label text-md-right">{{ __('Application name') }}</label>

        <div class="col-md-6">
            <input id="application" type="text" class="form-control @error('application') is-invalid @enderror"
                   name="application" value="{{ old('application') }}" required autocomplete="application">

            @error('application')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="message" class="col-md-4 col-form-label text-md-right">{{ __('Message') }}</label>

        <div class="col-md-6">
            <input id="message" type="text" class="form-control @error('message') is-invalid @enderror" name="message"
                   value="{{ old('message') }}" required autocomplete="message">

            @error('message')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="message" class="col-md-4 col-form-label text-md-right">{{ __('File') }}</label>

        <div class="col-md-6">
            <input name="image" type="file" class="form-control">
            @error('file')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Send') }}
            </button>
        </div>
    </div>
</form>

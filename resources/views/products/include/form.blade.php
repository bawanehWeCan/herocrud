<div class="row mb-2">
    <div class="col-md-6">
        <div class="form-group">
            <label for="name">{{ __('Name') }}</label>
            <input type="date" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ isset($product) && $product->name ? $product->name->format('Y-m-d') : old('name') }}" placeholder="{{ __('Name') }}" required />
            @error('name')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
</div>
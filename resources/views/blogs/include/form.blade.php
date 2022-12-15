<div class="row mb-2">
    <div class="col-md-6">
        <div class="form-group">
            <label for="title">{{ __('Title') }}</label>
            <textarea name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="{{ __('Title') }}" required>{{ isset($blog) ? $blog->title : old('title') }}</textarea>
            @error('title')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
</div>
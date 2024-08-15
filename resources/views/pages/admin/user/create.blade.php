error('password')
<span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>

<div class="form-group row">
<label for="password-confirm" class="col-md-3 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

<div class="col-md-7">
    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
        autocomplete="new-password">
</div>
</div>

<div class="form-group row">
<label for="role_id" class="col-md-3 col-form-label text-md-right">{{ __('Role') }}</label>

<div class="col-md-7">
    <select name="role_id" id="role_id" class="form-control @error('role_id') is-invalid @enderror">
        @if (count($roles))
            @foreach ($roles as $role)
                <option value="{{ $role->id }}">{{ $role->display_name }}</option>
            @endforeach
        @endif
    </select>

    @error('role_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
</div>

<div class="form-group row mb-0">
<div class="col-md-7 offset-md-3">
    <button type="submit" class="btn btn-primary">
        {{ __('Register') }}
    </button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection

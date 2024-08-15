@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Permissions') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.permission.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name"
                                    class="col-md-3 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-7">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name"
                                        placeholder="permission-name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="display_name"
                                    class="col-md-3 col-form-label text-md-right">{{ __('Display Name') }}</label>

                                <div class="col-md-7">
                                    <input id="display_name" type="text"
                                        class="form-control @error('display_name') is-invalid @enderror" name="display_name"
                                        value="{{ old('display_name') }}" required autocomplete="display_name">

                                    @error('display_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description"
                                    class="col-md-3 col-form-label text-md-right">{{ __('Description') }}</label>

                                <div class="col-md-7">
                                    <input id="description" type="text"
                                        class="form-control @error('description') is-invalid @enderror" name="description"
                                        value="{{ old('description') }}" required autocomplete="description">

                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-7 offset-md-3">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Submit') }}
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

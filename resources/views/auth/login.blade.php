@extends('layouts.auth')

@section('content')
    <div class="card card-panel">
        <div class="card-body card-auth">
            <div class="panel-header">
                <h1>Логин</h1>
            </div>

            <div class="auth-content">

                @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <form class="form-area" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-2">
                        <input type="text"
                               class="form-control input-field auth-input @error('username') is-invalid @enderror"
                               name="username" placeholder="Потребителско име..." value="{{ old('username') }}"
                               required autofocus autocomplete="username">
                    </div>
                    <div class="mb-2">
                        <input type="password"
                               class="form-control input-field auth-input @error('password') is-invalid @enderror"
                               name="password" placeholder="Парола ..."
                               required>
                    </div>

                    <div class="mb-2">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>

                    <div class="mb-2">
                        <input type="submit" class="form-control" class="btn btn-default" value="Вход">

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>

                </form>

            </div>

        </div>
    </div>
@endsection

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
                        <input type="submit" class="form-control" class="btn btn-default" value="Вход">
                    </div>
                </form>

            </div>

        </div>
    </div>
@endsection

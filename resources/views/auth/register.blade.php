@extends('layouts.auth')

@section('content')
<div class="card card-panel">
    <div class="card-body card-auth">
        <div class="panel-header">
            <h1>Регистрация</h1>
        </div>

        <div class="auth-content">

            @if($errors->any())
                @foreach ($errors->all() as $error)
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $error }}</strong>
                    </span>
                @endforeach
            @endif

            <form class="form-area" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-2">
                    <input type="text" class="form-control  @error('username') is-invalid @enderror input-field auth-input" name="username" value="{{ old('username') }}" placeholder="Потребителско име..."
                           required autocomplete="username">
                </div>
                <div class="mb-2">
                    <input type="email" class="form-control  @error('email') is-invalid @enderror input-field auth-input" name="email" value="{{ old('email') }}" placeholder="E-mail адрес..."
                            autocomplete="password">
                </div>
                <div class="mb-2">
                    <input type="password" class="form-control  @error('passowrd') is-invalid @enderror input-field auth-input" name="password" placeholder="Парола ..."
                           required autocomplete="new-password">
                </div>
                <div class="mb-2">
                    <input type="password" id="password-confirm" class="form-control input-field auth-input" name="password_confirmation"
                           placeholder="Повтори парола ..." required autocomplete="new-password">
                </div>
                <div class="mb-2">
                    <input type="submit" class="form-control" class="btn btn-default" value="Регистрация">
                </div>
            </form>

        </div>

    </div>
</div>
@endsection

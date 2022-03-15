@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">HOME</div>
                @if (Route::has('login'))
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    @auth
                        <ul>
                            <li>
                                <a href="{{ route('register') }}" class="btn btn-primary">社員登録</a>
                            </li>
                            <li>
                                <a href="{{ url('/management') }}" class="btn btn-primary">管理</a>
                            </li>
                            <li>
                                <a href="{{ url('/board') }}" class="btn btn-primary">報告</a>
                            </li>
                            <li>
                                <a href="{{ url('/work') }}" class="btn btn-primary">材料登録</a>
                            </li>
                            <li>
                                <a href="{{ url('/product') }}" class="btn btn-primary">納品</a>
                            </li>
                        </ul>
                    @endauth
                    
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

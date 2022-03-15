@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul>
                <li>
                    <a href="{{ route('posts.create') }}" class="btn btn-primary">社員登録</a>
                </li>
                <li>
                    <a href="{{ route('posts.create') }}" class="btn btn-primary">管理</a>
                </li>
                <li>
                    <a href="{{ route('posts.create') }}" class="btn btn-primary">報告</a>
                </li>
                <li>
                    <a href="{{ route('posts.create') }}" class="btn btn-primary">材料登録</a>
                </li>
                <li>
                    <a href="{{ route('posts.create') }}" class="btn btn-primary">納品</a>
                </li>
            </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

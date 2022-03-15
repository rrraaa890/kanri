@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                    <ul>
                <li>
                    <a href="">社員登録</a>
                </li>
                <li>
                    <a href="">管理</a>
                </li>
                <li>
                    <a href="">報告</a>
                </li>
                <li>
                    <a href="">材料登録</a>
                </li>
                <li>
                    <a href="">納品</a>
                </li>
            </ul>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

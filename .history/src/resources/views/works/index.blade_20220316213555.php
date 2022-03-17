@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
              <div class="header">
                <h1>材料登録</h1>
              </div>

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
                        <a href="{{ url('/managements') }}" class="btn btn-primary">管理</a>
                    </li>
                    <li>
                        <a href="{{ url('/boards') }}" class="btn btn-primary">報告</a>
                    </li>
                    <li>
                        <a href="{{ route('works.index') }}" class="btn btn-primary">材料登録</a>
                    </li>
                    <li>
                        <a href="{{ route('products.index') }}" class="btn btn-primary">生産</a>
                    </li>
                </ul>
                  @endauth
              </div>
        </div>
    </div>
</div>
@endsection
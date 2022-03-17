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
                          <a href="{{ route('register') }}" class="btn btn-primary"></a>
                  @endauth
              </div>
        </div>
    </div>
</div>
@endsection
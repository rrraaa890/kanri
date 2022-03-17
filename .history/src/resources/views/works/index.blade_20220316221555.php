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
                  <form class="form-inline" action="{{url('')}}" method="GET">
                    <div class="form-group">
                    <input type="text" name="keyword" value="@if (isset( $keyword )) $keyword @endif"
                    placeholder="タイトル名を入力">
                    <input type="submit" value="検索" >
                    </div>
                  </form>
                    <a href="{{ route('works.create') }}" class="btn btn-primary">材料登録</a>
                  @endauth
              </div>
        </div>
    </div>
</div>
@endsection
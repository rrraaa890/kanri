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
                  <form class="form-inline my-2 my-lg-0 ml-2">
                    <div class="form-group">
                    <input type="search" class="form-control mr-sm-2" name="search"  value="{{request('search')}}" placeholder="キーワードを入力" aria-label="検索...">
                    </div>
                    <input type="submit" value="検索" class="btn btn-info">
                  </form>
                    <a href="{{ route('register') }}" class="btn btn-primary">材料登録</a>
                  @endauth
              </div>
        </div>
    </div>
</div>
@endsection
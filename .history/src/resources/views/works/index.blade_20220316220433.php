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
                    <form >
                      <div class="form-group" action="{{}}">
                      <input type="search" name="search"  value="{{request('search')}}" placeholder="キーワードを入力" aria-label="検索...">
                      </div>
                      <input type="submit" value="検索"class="btn btn-primary">
                    </form>
                    <a href="{{ route('works.create') }}" class="btn btn-primary">材料登録</a>

                    <div class="d-flex justify-content-center ">
                      @if (!empty($articles))
                        {{ $articles->links() }}
                      @endif  
                    </div>
                  @endauth
              </div>
        </div>
    </div>
</div>
@endsection
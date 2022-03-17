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
                  <form class="form-inline" action="{{url('works.index')}}" method="GET">
                    <div class="form-group">
                    <input type="text" name="keyword" value="{{$keyword}}"
                    placeholder="タイトル名を入力">
                    <input type="submit" value="検索" >
                    </div>
                  </form>
                    <a href="{{ route('works.create') }}" class="btn btn-primary">材料登録</a>

                    <table class="table table-striped">
                    <tr>
                        <th>H/No</th>
                        <th>表面肌</th>
                        <th>材質</th>     
                        <th>機種</th>     
                        <th>板厚</th>     
                        <th>日付</th>     
                        <th>日付</th>     
                    </tr>
                    <tr>
                    @foreach($blogs as $blog)
                        <td>{{ $blog->id }}</td>
                        <td><a href="/blog/{{ $blog->id }}">{{ $blog->title }}</a></td>
                        <td>{{ $blog->updated_at }}</td>
                        </tr>
                    @endforeach
                    </table>
                    {{ $blogs->links() }}
                    <br>
                  @endauth
              </div>
        </div>
    </div>
</div>
@endsection
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
                    placeholder="キーワードを入力">
                    <input type="submit" value="検索" >
                    </div>
                  </form>
                    <a href="{{ route('works.create') }}" class="btn btn-primary">材料登録</a>
                  @if(!empty('$keyword'))
                    <table class="table">
                    <tr>
                        <th>H/No</th>
                        <th>表面肌</th>
                        <th>材質</th>     
                        <th>機種</th>     
                        <th>板厚</th>     
                        <th>枚数</th>     
                        <th>補足</th>     
                    </tr>
                    <tr>
                    @foreach($works as $work)
                        <td>{{ $work->h_no }}</td>
                        <td><{{ $work->surface }}/td>
                        <td>{{ $work->material }}</td>
                        <td>{{ $work->model }}</td>
                        <td>{{ $work->plate_thickness }}</td>
                        <td>{{ $work->number_of_sheets }}</td>
                        <td>{{ $work->supplement }}</td>
                        </tr>
                    @endforeach
                    </table>
                    <br>
                  @e 
                  @endauth
              </div>
        </div>
    </div>
</div>
@endsection
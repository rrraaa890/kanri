@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="header">
                <h1>生産</h1>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('flash_message'))
            <div class="flash_message">
                <h2>
                    {{ session('flash_message') }}
                </h2>
            </div>
            @endif
            <form action="{{url('')}}" method="GET">
              <p><input type="text" name="keyword" value="{{$keyword}}"></p>
              <button type="submit" class="btn btn-primary">検索</button>
            </form>
        </div>
    </div>
</div>
@endsection
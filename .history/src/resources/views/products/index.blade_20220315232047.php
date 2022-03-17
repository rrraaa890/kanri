@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="header">
                <h1>材料登録</h1>
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
            <form action="{{route('works.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label>H/No</label>
                    <input type="text" name="h_no" id="">
                </div>
                <div class="form-group">
                    <label>材質</label>
                    <select  name="material" id="">
                    <option value="444">444</option>
                    <option value="329J4L">329J4L</option>
                    <option value="304">304</option>
                    <option value="304A">304A</option>
                    <option value="アルミ">アルミ</option>
                </select>
                </div>
                <div class="form-group">
                    <label>機種</label>
                    <input type="text" name="model" id="">
                </div>
                <div class="form-group">
                    <label>板厚</label>
                    <select  name="plate_thickness" id="">
                        <option value="0.8t">0.8t   </option>
                        <option value="1.5t">1.5t   </option>
                        <option value="2.0t">2.0t   </option>
                        <option value="2.5t">2.5t   </option>
                        <option value="3.0t">3.0t    </option>
                        <option value="4.0t">4.0t</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">検索</button>
            </form>
        </div>
    </div>
</div>
@endsection
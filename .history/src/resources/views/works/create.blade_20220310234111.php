@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">材料登録</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{route('work.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>H/No</label>
                            <input type="text" name="" id="">
                        </div>
                        <div class="form-group">
                            <label>材質</label>
                            <select  name="" id="">
                            <option value="444">444</option>
                            <option value="329J4L">329J4L</option>
                            <option value="304">304</option>
                            <option value="304A">304A</option>
                            <option value="アルミ">アルミ</option>
                        </select>
                        </div>
                        <div class="form-group">
                            <label>機種</label>
                            <input type="text" name="" id="">
                        </div>
                        <div class="form-group">
                            <label>板厚</label>
                            <select  name="" id="">
                                <option value="0.8t">0.8t   </option>
                                <option value="1.5t">1.5t   </option>
                                <option value="2.0t">2.0t   </option>
                                <option value="2.5t">2.5t   </option>
                                <option value="3.0t">3.0t</option>
                                <option value="4.0t">4.0t</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>枚数</label>
                            <input type="text" name="" id="">
                        </div>
                        <div class="form-group">
                        <label>補足</label>
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">登録</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
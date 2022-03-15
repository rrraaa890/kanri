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
                            <input type="text" name="" id="">
                            <datalist id="list">
                            <option value="444">
                            <option value="329J4L">
                            <option value="304">
                            <option value="304A">
                            <option value="アルミ">
                            </datalist>
                        </div>
                        <div class="form-group">
                            <label>機種</label>
                            <input type="text" name="" id="">
                            <datalist id="list">
                            <option value="2A">
                            <option value="2AB">
                            <option value="2AD">
                            <option value="2B">
                            <option value="2AB-B1">
                            <option value="">
                            <option value="">
                            <option value="">
                            <option value="">
                            <option value="">
                            <option value="">
                            <option value="">
                            </datalist>
                        </div>
                        <div class="form-group">
                            <label>板厚</label>
                            <input type="text" name="" id="">
                            <datalist id="list">
                            <option value="サッカー">
                            <option value="野球">
                            <option value="テニス">
                            </datalist>
                        </div>
                        <div class="form-group">
                            <label>枚数</label>
                            <input type="text" name="" id="">
                        </div>
                        <div class="form-group">
                            <label></label>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                        </div>
                    </form>
                    aaaa
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
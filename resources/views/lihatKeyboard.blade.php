@extends('master')

@section('title', 'keyboard')

@section('konten')

<style>
    .box {
        width: 300px;
        height: 400px;
        background-color: rgb(136, 213, 239);
        margin-top: 20px;
        border-radius: 10px;
    }
</style>

	<h3>View Data keyboard</h3>
    <br>
    <div class="row">
        <div class="col-5">
            <div class="box mx-auto">
            </div>
        </div>

        <div class="col-7 d-flex">
            @foreach($keyboard as $p)
            <form action="/keyboard/update" method="post" class="form-horizontal w-100 my-auto">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $p->kodekeyboard }}"><br/>

                <div class="form-group row">
                    <label for="Merk" class="col-sm-3 col-form-label"><b>Merk keyboard</b></label>
                    <label for="Merk" class="col-sm-1 col-form-label"><b>:</b></label>
                    <label class="col-sm-8 col-form-label" name="Merk">{{ $p->merkkeyboard }}</label>
                </div>

                <div class="form-group row">
                    <label for="Stok" class="col-sm-3 col-form-label"><b>Stok keyboard</b></label>
                    <label for="Stok" class="col-sm-1 col-form-label"><b>:</b></label>
                    <label class="col-sm-8 col-form-label" name="Stok">{{ $p->stockkeyboard }}</label>
                </div>

                <br>

                <a class="btn btn-danger px-5" href="/keyboard">OK</a>

            </form>
            @endforeach
        </div>
    </div>

    <br/>
    <br/>

@endsection
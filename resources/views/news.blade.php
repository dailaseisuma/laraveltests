@extends('layouts/layout')
@section('title','Kontakti')
@section('asideLeft')
    <p>Raksti:</p>
@stop
@section('content')
    <form method="post" action="/news">
        <div class="form-group">
            {{csrf_field()}}
            <label for="title">Nosaukums:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
        </div>
        <div class="form-group">
            {{csrf_field()}}
            <label for="text">Teksts:</label>
            <input type="text" class="form-control" id="text" name="text" value="{{old('text')}}">
        </div>
        <button type="submit" class="btn btn-success save" id="subjectSave">Sūtīt</button>
    </form>
@stop
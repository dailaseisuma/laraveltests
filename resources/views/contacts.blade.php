@extends('layouts/layout')
@section('title','Kontakti')
@section('asideLeft')
    <p>Saziņa:</p>
@stop
@section('content')
    <form method="post" action="/contacts">
        <div class="form-group">
            {{csrf_field()}}
            <label for="title">Teksts:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
        </div>
        <button type="submit" class="btn btn-success save" id="subjectSave">Sūtīt</button>
    </form>
@stop
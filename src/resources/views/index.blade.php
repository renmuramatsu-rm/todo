@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/sanitize.css')}}" />
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />

@endsection

@section('content')
<form class="form">
    <div class=form__group>
        <div class="form__group-content">
            <input type="text" name="title" value="" />
        </div>
        <button class="button">
            <input type="submit" value="作成" />
        </button>
    </div>
    <div class="form__group-title">
        Todo
        <div class="form__group-list">
            <input type="text" name="test" value="test" />
        </div>
        <button class="button__update">
            <input type="submit" value="更新" />
        </button>
        <button class="button__delete">
            <input type="submit" value="削除" />
        </button>
        <div class="form__group-list">
            <input type="text" name="test2" value="test2" />
        </div>
        <button class="button__update">
            <input type="submit" value="更新" />
        </button>
        <button class="button__delete">
            <input type="submit" value="削除" />
        </button>
    </div>
</form>

@endsection

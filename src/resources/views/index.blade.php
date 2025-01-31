@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/sanitize.css')}}" />
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />

@endsection

@section('content')
<div class="todo__alert">
    <div class="todo__alert--succsess">
        Todoを作成しました
    </div>
</div>

<div class="todo__content">
    <form class="form">
        <div class=form__group>
            <div class="form__group-content">
                <input type="text" name="title" value="" />
            </div>
            <button class="button" type="submit" value="作成"></button>
        </div>
    </form>
    <div class="form__group-list">
        <table class="todo__table>
            <tr class="todo__table-inner>
            <th class="todo__table-header>Todo</th>
    </div>
@endsection

@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/sanitize.css')}}" />
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />

@endsection


@section('content')
<div class="todo__alert">
    <div class="todo__alert--success">
        {{ session('message') }}
    </div>
    <!-- コントローラーのWITHメソッドでセクションに保存された変数を取り出す -->
     @error('content')
    <div class="todo__alert--false">
        {{ ('message') }}
    </div>
    @enderror
</div>



<div class="todo__content">
    <form class="create-form" action="/todos" method="post">
        @csrf
        <div class="create-form__item">
            <input class="create-form__item-input" type="text" name="content">
        </div>
        <div class="create-form__button">
            <button class="create-form__button-submit" type="submit">作成</button>
        </div>
    </form>
    <div class="todo-table">
        <table class="todo-table__inner">
            <tr class="todo-table__row">
                <th class="todo-table__header">Todo</th>
            </tr>
            <tr class="todo-table__row">
                <td class="todo-table__item">
                    <form class="update-form">
                        <div class="update-form__item">
                            <input class="update-form__item-input" type="text" name="content" value="test">
                        </div>
                        <div class="update-form__button">
                            <button class="update-form__button-submit" type="text" name="update">更新</button>
                        </div>
                    </form>
                </td>
                <td class="todo__table-item">
                    <form class="delete-form">
                        <div class="delete-form__button">
                            <button class="delete-form__button-submit" type="text" name="delete">削除</button>
                        </div>
                    </form>
                </td>
            </tr>
            <tr class="todo-table__row">
                <td class="todo-table__item">
                    <form class="update-form">
                        <div class="update-form__item">
                            <input class="update-form__item-input" type="text" name="content" value="test">
                        </div>
                        <div class="update-form__button">
                            <button class="update-form__button-submit" type="text" name="update">更新</button>
                        </div>
                    </form>
                </td>
                <td class="todo__table-item">
                    <form class="delete-form">
                        <div class="delete-form__button">
                            <button class="delete-form__button-submit" type="text" name="delete">削除</button>
                        </div>
                    </form>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection
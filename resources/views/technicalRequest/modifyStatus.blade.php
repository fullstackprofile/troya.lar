@extends('layouts.main')

@section('content')
    <div class="right-bar clients-requests-content">
        <div class="breadcrumbs">
            <a href="/">Главная</a>
            <a href="/psrequests">Запрос на техническое решение</a>
            <a href="/psrequests/my/">Мои запросы</a>
            <a href="javascript:void(0)">Редактировать статус</a>
        </div>
        <div class="tabs">
            <div class="top">
                    <h1>Редактировать статус</h1>
                    <div class="projectService">
                        <div class="projectService-label">Статус:</div>
                        <div class="projectService-content width-50">
                            <select class="w-50">
                                <option>Новый запрос</option>
                                <option>Новый запрос</option>
                                <option>Новый запрос</option>
                                <option>Новый запрос</option>
                                <option>Новый запрос</option>
                            </select>
                        </div>
                    </div>
                    <div class="projectService">
                        <div class="projectService-label">Комментарий</div>
                        <div class="projectService-content">
                            <textarea placeholder="Создан новый запрос" class="w-50"></textarea>
                        </div>
                    </div>
                    <div class="filter-object-btns">
                        <a href="#" class="btn">Сохранить</a>
                        <a href="filter_object.html" class="btn">Назад</a>
                    </div>
                </div>
        </div>
    </div>
@endsection

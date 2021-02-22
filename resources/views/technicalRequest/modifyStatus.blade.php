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
                <form method="POST" action="{{ '/psrequests/my/update-status/'.$reqStatus->id }}">
                    @csrf
                    <h1>Редактировать статус</h1>
                    <div class="projectService">
                        <div class="projectService-label">Статус:</div>
                        <div class="projectService-content width-50">
                            <select class="w-50" name="status-id" required>
                                <option value="">[Не выбрано]</option>
                                @foreach($statuses as $status)
                                    <option value="{{$status->id}}"
                                        {{(isset($reqStatus) && isset($reqStatus['status']) &&
                                            intval($reqStatus['status']) === $status->id) ? 'selected' : ''}}
                                    >{{$status->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="projectService">
                        <div class="projectService-label">Комментарий</div>
                        <div class="projectService-content">
                            <textarea placeholder="Создан новый запрос" class="w-50" name="status-comment" required
                            >{{$reqStatus['comment'] ? $reqStatus['comment'] : ""}}</textarea>
                        </div>
                        <input type="hidden" name="id" value="{{$reqStatus['id']}}">
                    </div>
                    @if (\Session::has('success'))
                        <div class="alert alert-success">
                            <ul>
                                <li>{!! \Session::get('success') !!}</li>
                            </ul>
                        </div>
                    @endif
                    <div class="filter-object-btns">
                        <button type="submit" class="btn update-req-status">
                            Сохранить
                        </button>
                        <a href="{{route('psRequests.clients')}}" class="btn">Назад</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

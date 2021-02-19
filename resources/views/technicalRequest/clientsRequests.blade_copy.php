@extends('layouts.main')

@section('content')
    <div class="right-bar clients-requests-content del-active">
        <div class="breadcrumbs">
            <a href="/">Главная</a>
            <a href="/">Запрос на техническое решение</a>
            <a href="/psrequests/my/clients">Запросы клиентов</a>
        </div>
        <div class="tabs">
            <div class="top">
                <h1>Запросы клиентов</h1>
                <div class="tabs-navigation">
                    <ul>
                        <li class="active"><a data-target="tabs1">Список запросов</a></li>
                        <li class=""><a data-target="tabs2">Фильтры</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tabs-con display-none" id="tabs1">
            <div class="tableAdaptive overfloww-auto">
                <table class="my-requests-tbody">
                    <tbody>
                    <tr class="gray">
                        <th width="118px">Карточка объекта </th>
                        <th>ПМ</th>
                        <th>МПО</th>
                        <th>ИПС</th>
                        <th>Регион объекта</th>
                        <th>Название объекта</th>
                        <th>Дата установки статуса</th>
                        <th>Плановая дата выдачи материала</th>
                        <th>Статус</th>
                    </tr>
                    @foreach($clientsReq as $req)
                        <tr style="background-color:{{$req->color}};" onclick="location.href='/psrequests/my/show-{{$req->ps_id}}/'">
                            <td data-label="Карточка клиента">
                                <div class="tableGreen">РМ000{{$req->ps_id}}</div>
                            </td>
                            <td data-label="Клиент">
                                {{$req->user_name}}
                            </td>
                            <td data-label="Ответственный менеджер">
                                {{$req->manager_name}}
                            </td>
                            <td data-label="ИПС">
                                {{$req->designer_name}}
                            </td>
                            <td data-label="Регион объекта">
                                {{$req->region_title}}
                            </td>
                            <td data-label="Название объекта">
                                {{$req->object_name}}
                            </td>
                            <td data-label="Дата установки статуса">
                                {{$req->date_status}}
                            </td>
                            <td data-label="Плановая дата выдачи материала">
                                {{$req->date_execution}}
                            </td>
                            <td data-label="Статус">
                                {{$req->title}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{-- Pagination --}}
                {{ $clientsReq->links() }}
            </div>
        </div>
        <div class="tabs-con display-none" id="tabs2">
            <form action="/psrequests/my/clients/" method="post" id="psrequests2_filters_form">
                <div class="projectServices">
                    <div class="projectService">
                        <div class="projectService-label">Карточка объекта: </div>
                        <div class="projectService-content">
                            <input type="text" class="short" name="psrequests2[filters][object_number]">
                        </div>
                    </div>
                    <div class="projectService">
                        <div class="projectService-label">Ответсвенный менеджер:</div>
                        <div class="projectService-content select-wrapper">
                            <select id="responsible-manager" name="psrequests2[filters][pm_id]">
                                <option></option>
                                @foreach($managers as $manager)
                                    <option value="{{$manager->id}}">{{$manager->user_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="projectService engineers-content">
                    <div class="projectService-label">Ответсвенный инженер:</div>
                    <div class="projectService-content">
                        <div class="row">
                            <div class="checkbox medium">
                                <input type="checkbox" id="check-all-eng">
                                <label for="check-all-eng">Выбрать всех</label>
                            </div>
                        </div>
                        @for($i = 0, $set = false; $i < count($engineers); $i++)
                            @if($i != 0 && ($i+4)%4 == 0)
                                @php($set = false)
                                </div>
                            @endif
                            @if($i%4 == 0)
                                @php($set = true)
                                <div class="column">
                            @endif
                                <div class="checkbox">
                                    <input type="checkbox" class="checkbox-eng" id="engineers-{{$engineers[$i]->id}}"
                                           name="psrequests2[filters][engineer_id][]" value="{{$engineers[$i]->id}}">
                                    <label for="engineers-{{$engineers[$i]->id}}">{{$engineers[$i]->user_name}}</label>
                                </div>
                            @if($i == count($engineers)-1 && $set)
                                </div>
                            @endif
                        @endfor
                    </div>
                </div>
                <div class="projectService">
                    <div class="projectService-label">Регион объекта:</div>
                    <div class="projectService-content region-select select-wrapper">
                        <select name="psrequests2[filters][region_id]">
                            <option></option>
                            @foreach($ruRegions as $region)
                                <option value="{{$region->id}}">{{$region->region_title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="projectService">
                    <div class="projectService-label">Название объекта:</div>
                    <div class="projectService-content">
                        <input type="text" name="psrequests2[filters][object_name]">
                    </div>
                </div>
                <div class="projectService">
                    <div class="projectService-label">Типология обекта:</div>
                    <div class="projectService-content">
                        <select name="psrequests2[filters][top_id][]" multiple="multiple">
                            <option>[Не выбрано]</option>
                            @foreach($tops as $top)
                                <option value="{{$top->id}}">{{$top->item_title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="projectService">
                    <div class="projectService-label">Статус:</div>
                    <div class="projectService-content proj-state">
                        @for($i = 0, $set = false; $i < count($statuses); $i++)
                            @if($i != 0 && ($i+3)%3 == 0)
                                @php($set = false)
                                </div>
                            @endif
                            @if($i%3 == 0)
                                @php($set = true)
                                <div class="column">
                            @endif
                                <div class="checkbox">
                                    <input type="checkbox" class="checkbox-status" id="statuses-{{$statuses[$i]->id}}"
                                           name="psrequests2[filters][status][]" value="{{$statuses[$i]->id}}">
                                    <label for="statuses-{{$statuses[$i]->id}}">{{$statuses[$i]->title}}</label>
                                </div>
                            @if($i == count($statuses)-1 && $set)
                                </div>
                            @endif
                        @endfor
                    </div>
                </div>
                <div class="projectService">
                    <div class="projectService-label">Товарные группы в запросе:</div>
                    <div class="projectService-content proj-state">
                        @for($i = 0, $set = false; $i < count($groups); $i++)
                            @if($i != 0 && ($i+2)%2 == 0)
                                @php($set = false)
                                </div>
                            @endif
                            @if($i%2 == 0)
                                @php($set = true)
                                <div class="column">
                            @endif
                                <div class="checkbox group-checkbox">
                                    <input type="checkbox" class="checkbox-groups" id="groups-{{$groups[$i]->id}}"
                                           name="psrequests2[filters][psgroups_checked][]" value="{{$groups[$i]->id}}">
                                    <label for="groups-{{$groups[$i]->id}}">{{$groups[$i]->title}}</label>
                                </div>
                            @if($i == count($groups)-1 && $set)
                                </div>
                            @endif
                        @endfor
                    </div>
                </div>
                <div class="projectService">
                    <div class="projectService-label long">
                        Задания инженеру:
                    </div>
                    <div class="projectService-content engineers-tasks">
                        <select class="short" name="psrequests2[filters][tech_task_filter]">
                            <option>[Не выбрано]</option>
                            <option value="1">Заполнено</option>
                            <option value="2">Не заполнено</option>
                        </select>
                    </div>
                </div>
                <div class="projectService">
                    <div class="projectService-label long">
                        Плановая дата выдачи материала:
                    </div>
                    <div class="projectService-content">
                        <div class="form-to">
                            <div>
                                От
                                <input type="text" name="psrequests2[filters][date_execution1]" class="date getDate set-datepicker"
                                       maxlength="10" size="10">
                            </div>
                            <div>
                                До
                                <input type="text" name="psrequests2[filters][date_execution2]" class="date getDate set-datepicker"
                                       maxlength="10" size="10">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="projectService">
                    <div class="projectService-label long">
                        Дата установки статуса:
                    </div>
                    <div class="projectService-content">
                        <div class="form-to">
                            <div>
                                От
                                <input type="text" name="psrequests2[filters][date_status1]" class="date getDate set-datepicker"
                                       maxlength="10" size="10">
                            </div>
                            <div>
                                До
                                <input type="text" name="psrequests2[filters][date_status2]" class="date getDate set-datepicker"
                                       maxlength="10" size="10">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="projectService-btns">
                    <button  type="submit">Поиск</button>
                    <button  type="button" value="Refresh Page" onClick="location='/psrequests/my/clients'">Очистить</button>
                </div>
            </form>
        </div>
    </div>
@endsection

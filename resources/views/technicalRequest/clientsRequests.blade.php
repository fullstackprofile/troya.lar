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
                                <div class="tableGreen">{{$req->ps_id}}</div>
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
            <form action="/psrequests/my/clients" method="get" id="psrequests2_filters_form">
                @csrf
                <div class="projectServices">
                    <div class="projectService">
                        <div class="projectService-label">Карточка объекта: </div>
                        <div class="projectService-content">
                            <input type="text" class="short" name="psrequests2[filters][object_number]"
                                value="{{isset($psFilters) && isset($psFilters['object_number']) ? $psFilters['object_number'] : ""}}">
                        </div>
                    </div>
                    <div class="projectService">
                        <div class="projectService-label">Ответсвенный менеджер:</div>
                        <div class="projectService-content select-wrapper">
                            <select id="responsible-manager" name="psrequests2[filters][pm_id]">
                                <option></option>
                                @foreach($managers as $manager)
                                    <option value="{{$manager->id}}"
                                        {{(isset($psFilters) && isset($psFilters['pm_id']) &&
                                        intval($psFilters['pm_id']) === $manager->id) ? 'selected' : ''}}
                                    >{{$manager->user_name}}</option>
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
                        @for($i = 0; $i < count($engineers); $i+=4)
                            <div class="column">
                                @for($j = 0; $j < 4; $j++)
                                        @if(isset($engineers[$i+$j]))
                                            <div class="checkbox">
                                                <input type="checkbox" class="checkbox-eng" id="engineers-{{$engineers[$i+$j]->id}}"
                                                       name="psrequests2[filters][engineer_id][]" value="{{$engineers[$i+$j]->id}}"
                                                    {{(isset($psFilters) && isset($psFilters['engineer_id']) &&
                                                    in_array($engineers[$i+$j]->id, $psFilters['engineer_id'])) ? 'checked' : ''}}
                                                >
                                                <label for="engineers-{{$engineers[$i+$j]->id}}">{{$engineers[$i+$j]->user_name}}</label>
                                            </div>
                                        @endif
                                @endfor
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="projectService">
                    <div class="projectService-label">Регион объекта:</div>
                    <div class="projectService-content region-select select-wrapper">
                        <select name="psrequests2[filters][region_id]">
                            <option></option>
                            @foreach($ruRegions as $region)
                                <option value="{{$region->id}}"
                                    {{(isset($psFilters) && isset($psFilters['region_id']) &&
                                    intval($psFilters['region_id']) === $region->id) ? 'selected' : ''}}
                                >{{$region->region_title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="projectService">
                    <div class="projectService-label">Название объекта:</div>
                    <div class="projectService-content">
                        <input type="text" name="psrequests2[filters][object_name]"
                               value="{{isset($psFilters) && isset($psFilters['object_name']) ? $psFilters['object_name'] : ""}}">
                    </div>
                </div>
                <div class="projectService">
                    <div class="projectService-label">Типология обекта:</div>
                    <div class="projectService-content">
                        <select name="psrequests2[filters][top_id][]" multiple="multiple">
                            <option value="{{null}}">[Не выбрано]</option>
                            @foreach($tops as $top)
                                <option value="{{$top->id}}"
                                    {{(isset($psFilters) && isset($psFilters['top_id']) &&
                                        in_array(intval($top->id), $psFilters['top_id'])) ? 'selected' : ''}}
                                >{{$top->item_title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="projectService">
                    <div class="projectService-label">Статус:</div>
                    <div class="projectService-content proj-state">
                        @for($i = 0; $i < count($statuses); $i+=3)
                            <div class="column">
                                @for($j = 0; $j < 3; $j++)
                                    @if(isset($statuses[$i+$j]))
                                        <div class="checkbox">
                                            <input type="checkbox" class="checkbox-status" id="statuses-{{$statuses[$i+$j]->id}}"
                                                   name="psrequests2[filters][status][]" value="{{$statuses[$i+$j]->id}}"
                                                {{(isset($psFilters) && isset($psFilters['status']) &&
                                                in_array($statuses[$i+$j]->id, $psFilters['status'])) ? 'checked' : ''}}
                                            >
                                            <label for="statuses-{{$statuses[$i+$j]->id}}">{{$statuses[$i+$j]->title}}</label>
                                        </div>
                                    @endif
                                @endfor
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="projectService">
                    <div class="projectService-label">Товарные группы в запросе:</div>
                    <div class="projectService-content proj-state">
                        @for($i = 0; $i < count($groups); $i+=2)
                            <div class="column">
                                @for($j = 0; $j < 2; $j++)
                                    @if(isset($groups[$i+$j]))
                                        <div class="checkbox group-checkbox">
                                            <input type="checkbox" class="checkbox-groups" id="groups-{{$groups[$i+$j]->id}}"
                                                   name="psrequests2[filters][psgroups_checked][]" value="{{$groups[$i+$j]->id}}"
                                                {{(isset($psFilters) && isset($psFilters['psgroups_checked']) &&
                                                    in_array($groups[$i+$j]->id, $psFilters['psgroups_checked'])) ? 'checked' : ''}}
                                            >
                                            <label for="groups-{{$groups[$i+$j]->id}}">{{$groups[$i+$j]->title}}</label>
                                        </div>
                                    @endif
                                @endfor
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="projectService">
                    <div class="projectService-label long">
                        Задания инженеру:
                    </div>
                    <div class="projectService-content engineers-tasks">
                        <select class="short" name="psrequests2[filters][tech_task_filter]">
                            <option value="{{null}}">[Не выбрано]</option>
                            <option value="1" {{(isset($psFilters) && isset($psFilters['tech_task_filter']) &&
                                    $psFilters['tech_task_filter'] == '1') ? 'selected' : ''}}>Заполнено</option>
                            <option value="2" {{(isset($psFilters) && isset($psFilters['tech_task_filter']) &&
                                    $psFilters['tech_task_filter'] == '2') ? 'selected' : ''}}>Не заполнено</option>
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
                                <input type="text" name="psrequests2[filters][date_execution1]" class="date getDate set-datepicker" maxlength="10" size="10"
                                       value="{{isset($psFilters) && isset($psFilters['date_execution1']) ? $psFilters['date_execution1'] : ""}}"
                                >
                            </div>
                            <div>
                                До
                                <input type="text" name="psrequests2[filters][date_execution2]" class="date getDate set-datepicker" maxlength="10" size="10"
                                       value="{{isset($psFilters) && isset($psFilters['date_execution2']) ? $psFilters['date_execution2'] : ""}}"
                                >
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
                                <input type="text" name="psrequests2[filters][date_status1]" class="date getDate set-datepicker" maxlength="10" size="10"
                                       value="{{isset($psFilters) && isset($psFilters['date_status1']) ? $psFilters['date_status1'] : ""}}"
                                >
                            </div>
                            <div>
                                До
                                <input type="text" name="psrequests2[filters][date_status2]" class="date getDate set-datepicker" maxlength="10" size="10"
                                       value="{{isset($psFilters) && isset($psFilters['date_status2']) ? $psFilters['date_status2'] : ""}}"
                                >
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

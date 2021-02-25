@extends('layouts.main')

@section('content')
    <div class="right-bar clients-requests-content view-request">
        <div class="breadcrumbs">
            <a href="/">Главная</a>
            <a href="/psrequests">Запрос на техническое решение</a>
            <a href="/psrequests/my/clients/">Запросы клиентов</a>
            <a href="javascript:void(0)">Просмотр</a>
        </div>
        <div class="tabs">
            <div class="top">
                @if($clientReq && isset($clientReq->object_number_linked))
                    <h1>{{$clientReq->object_number_linked}}</h1>
                @else
                    <h1>{{$reqId}}</h1>
                @endif
                <div class="tabs-navigation">
                    <ul>
                        <li><a data-target="tabs1">Объект</a></li>
                        <li class="active"><a data-target="tabs2">События</a></li>
                        <li><a data-target="tabs3">Техническое решение</a></li>
                        <li><a data-target="tabs4">Расчеты</a></li>
                        <li><a data-target="tabs5">Техническое задание</a></li>
                    </ul>
                </div>
            </div>
            @if($errors->any())
                <div class="alert alert-danger w-50" role="alert">
                    <h3>{{$errors->first()}}</h3>
                </div>
            @endif
            @if(!empty($clientReq))
                <div class="tabs-con" id="tabs1">
                    <div class="filterObject-table">
                        @if($clientReq->object_number || $clientReq->object_number_linked)
                            <div class="row">
                                <div>Карточка объекта:</div>
                                <div>
                                    @if($clientReq->object_number)
                                        {{$clientReq->object_number}}
                                    @elseif($clientReq->object_number_linked)
                                        {{$clientReq->object_number_linked}}
                                    @endif
                                </div>
                            </div>
                        @endif
                        <div class="row">
                            <div>Название объекта:</div>
                            <div>{{$clientReq->object_name}}</div>
                        </div>
                        <div class="row">
                            <div>Регион объекта:</div>
                            <div>{{$clientReq->region_title}}</div>
                        </div>
                        <div class="row">
                            <div>ПМ:</div>
                            <div>
                                <a href="javascript:void(0)" class="link"
                                   data-toggle="tooltip" title="{{$clientReq->user_email." , ".$clientReq->user_phone}}"
                                >{{$clientReq->user_name}}</a>
                            </div>
                        </div>
                        @if($clientReq->manager_name)
                            <div class="row">
                                <div>МПО:</div>
                                <div>
                                    <a href="javascript:void(0)" class="link"
                                       data-toggle="tooltip" title="{{$clientReq->manager_email." , ".$clientReq->manager_phone}}"
                                    >{{$clientReq->manager_name}}</a>
                                </div>
                            </div>
                        @endif
                        @if($clientReq->designer_name)
                            <div class="row">
                                <div>ИПС:</div>
                                <div>
                                    <a href="javascript:void(0)" class="link"
                                       data-toggle="tooltip" title="{{$clientReq->designer_email." , ".$clientReq->designer_phone}}"
                                    >{{$clientReq->designer_name}}</a>
                                </div>
                            </div>
                        @endif
                        <div class="row">
                            <div>Типология объекта:</div>
                            <div>{{$clientReq->item_title}}</div>
                        </div>
                        <div class="row">
                            <div>Дата создания объекта:</div>
                            <div>{{$clientReq->date_status}}</div>
                        </div>
                        <div class="filterObject-table__bottom">
                            <a href="#" class="btn">Удалить</a>
                        </div>
                    </div>
                </div>
                <div class="tabs-con" id="tabs2">
                    <div class="tableAdaptive eventsTable">
                        <table class="show-event-table">
                            <tr class="gray">
                                <th>Дата установки</th>
                                <th align="center">Пользователь</th>
                                <th align="center">Статус</th>
                                <th align="center">Время, затраченное на ТР, ч</th>
                                <th>Комментарий</th>
                                <th>Файл</th>
                                <th></th>
                            </tr>
                            @if($events && count($events))
                                @foreach($events as $event)
                                    <tr style="background-color: {{$event->color}}">
                                        <td data-label="Дата установки">
                                            {{$event->formatted_date}}
                                        </td>
                                        <td data-label="Пользователь" align="center">{{$event->user_name}}</td>
                                        <td data-label="Статус" align="center">{{$event->title}}</td>
                                        <td data-label="Время, затраченное на ТР, ч" align="center">{{$event->hours_spent}}</td>
                                        <td data-label="Комментарий">{{$event->comment}}</td>
                                        <td data-label="Файл"></td>
                                        <td data-label="">
                                            <div class="eventsTable-btns">
                                                <a href="/psrequests/my/modify_status-{{$event->id}}/">
                                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5.29561 13.1238L1.89335 9.72151L10.1223 1.49255L13.5246 4.89481L5.29561 13.1238ZM1.57533 10.3208L4.6963 13.4418L0.0170898 15L1.57533 10.3208ZM14.571 3.85287L13.9809 4.44299L10.5741 1.03623L11.1643 0.446104C11.7587 -0.148702 12.7227 -0.148702 13.3171 0.446104L14.571 1.70001C15.1611 2.29643 15.1611 3.25662 14.571 3.85287Z"/>
                                                    </svg>
                                                </a>
                                                <a href="/psrequests/my/delete-status/{{$event->id}}/">
                                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M14.7902 1.33199L13.754 0.308137C13.4736 0.0277635 13.0104 0.0277635 12.7178 0.308137L7.54922 5.47665L2.28319 0.210616C2.00269 -0.0698798 1.53947 -0.0698798 1.24702 0.210616L0.21086 1.24678C-0.0696356 1.52715 -0.0696356 1.99038 0.21086 2.28294L5.46482 7.53691L0.308381 12.7177C0.0280076 12.9981 0.0280076 13.4613 0.308381 13.7539L1.34455 14.7901C1.62492 15.0704 2.08815 15.0704 2.38071 14.7901L7.54922 9.62142L12.7178 14.7901C12.9982 15.0704 13.4614 15.0704 13.754 14.7901L14.7902 13.7539C15.0705 13.4735 15.0705 13.0103 14.7902 12.7177L9.60935 7.5491L14.778 2.38059C15.0705 2.08778 15.0705 1.62455 14.7902 1.33199Z"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </table>
                    </div>
                    <div class="events-bottom event-client-request-content">
                        <a href="#" class="btn">Экспорт в Excel</a>
                        <div class="events-bottom__title">Установка нового статуса запроса</div>
                        <div class="projectService">
                            <div class="projectService-label">Выбор статуса:</div>
                            <div class="projectService-content">
                                <div class="requiered">
                                    <select class="event-select-status">
                                        <option></option>
                                        @foreach($statuses as $status)
                                            @foreach($stAllowed as $allowed)
                                                @if($status->id == $allowed)
                                                    <option value="{{$status->id}}">{{$status->title}}</option>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <form action="{{`/psrequests/my/update_state-$reqId`}}" method="post" id="psrequests2_show/statuses_form" enctype="multipart/form-data">
                            <div id="psrequest_status_new_form">
                                <fieldset>
                                    <div class="status-custom status-3 status-4 status-7 status-8 status-45 status-9"
                                         style="display: none;">
                                        <div id="row_psrequests2_item_status_comment"
                                             class="field-row ui-helper-clearfix textarea required">
                                            <div>
                                                <label for="psrequests2_item_status_comment">
                                                    <span class="field-title">Комментарий:</span>
                                                </label>
                                            </div>
                                            <div>
                                        <span class="field">
                                            <textarea name="psrequests2[item][status_comment]"
                                                      class="textarea field-status-comment"
                                                      id="psrequests2_item_status_comment" cols="80" rows="4"
                                                      disabled=""></textarea>
                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="status-custom status-2 status-5 status-6" style="display: none;">
                                        <div id="row_psrequests2_item_status_comment_optional"
                                             class="field-row ui-helper-clearfix textarea">
                                            <label for="psrequests2_item_status_comment_optional">
                                                <span class="field-title">Комментарий:</span>
                                            </label>
                                            <span class="field">
                                        <textarea name="psrequests2[item][status_comment_optional]"                                                               class="textarea field-status-comment-optional"
                                                  id="psrequests2_item_status_comment_optional" cols="80" rows="4"></textarea>
                                    </span>
                                        </div>
                                    </div>
                                    <div class="status-custom status-4" style="display: none;">
                                        <div id="row_psrequests2_item_date_execution" class="field-row ui-helper-clearfix date required">
                                            <label for="psrequests2_item_date_execution">
                                                <span class="field-title">Плановая дата выдачи материала:</span>
                                            </label>
                                            <span class="field">
                                        <input type="text" name="psrequests2[item][date_execution]"
                                               class="date field-date-execution set-datepicker"
                                               id="psrequests2_item_date_execution" value="" size="10"
                                               maxlength="10">
                                    </span>
                                        </div>
                                    </div>
                                    <div class="status-custom status-3 status-7 status-8" style="display: none;">
                                        <div class="">
                                            <input type="hidden" name="psrequests2[item][status_files]"
                                                   id="psrequests2_item_status_files" value="" disabled="">
                                        </div>
                                        <div id="field_row_psfiles_list_status_1_data" class="field-row field-row-file">
                                            <label for="psfiles_list_status_1_data">Прикрепить файл материалов 1:</label>
                                            <span class="field">
                                        <select class="select-upload-option" id="psfiles_list_status_1_data">
                                            <option value="1">Прикрепить ссылку на файлообменник</option>
                                            <option value="2">Загрузить файл (если меньше 20мб)</option>
                                        </select>
                                        <span class="file-option file-option-1" style="display:none;">
                                            <input type="text" size="50" class="text field-file-url"
                                                   name="psfiles[list][status_1][file_url]" id="psfiles_list_status_1_file_url" value=""
                                                   maxlength="255" disabled="">
                                        </span>
                                        <span class="file-option file-option-2" style="">
                                            <input type="file" class="file field-file-upload" name="psfiles[list][status_1][file_upload]"
                                                   id="psfiles_list_status_1_file_upload" value="">
                                        </span>
                                    </span>
                                        </div>
                                        <div id="field_row_psfiles_list_status_2_data" class="field-row field-row-file">
                                            <label for="psfiles_list_status_2_data">Прикрепить файл материалов 2:</label>
                                            <span class="field">
                                        <select class="select-upload-option" id="psfiles_list_status_2_data">
                                            <option value="1">Прикрепить ссылку на файлообменник</option>
                                            <option value="2">Загрузить файл (если меньше 20мб)</option>
                                        </select>
                                        <span class="file-option file-option-1" style="display:none;">
                                            <input type="text" size="50" class="text field-file-url"
                                                   name="psfiles[list][status_2][file_url]" id="psfiles_list_status_2_file_url"
                                                   value="" maxlength="255" disabled="">
                                        </span>
                                        <span class="file-option file-option-2" style="">
                                            <input type="file" class="file field-file-upload" name="psfiles[list][status_2][file_upload]"
                                                   id="psfiles_list_status_2_file_upload" value="">
                                        </span>
                                    </span>
                                        </div>
                                        <div id="field_row_psfiles_list_status_3_data" class="field-row field-row-file"><label
                                                for="psfiles_list_status_3_data">Прикрепить файл материалов 3:</label><span
                                                class="field">
                                        <select class="select-upload-option" id="psfiles_list_status_3_data">
                                            <option value="1">Прикрепить ссылку на файлообменник</option>
                                            <option value="2">Загрузить файл (если меньше 20мб)</option>
                                        </select>
                                        <span class="file-option file-option-1" style="display:none;">
                                            <input type="text" size="50" class="text field-file-url" name="psfiles[list][status_3][file_url]"
                                                   id="psfiles_list_status_3_file_url" value="" maxlength="255" disabled="">
                                        </span>
                                        <span class="file-option file-option-2" style="">
                                            <input type="file" class="file field-file-upload" name="psfiles[list][status_3][file_upload]"
                                                   id="psfiles_list_status_3_file_upload" value="">
                                        </span>
                                    </span>
                                        </div>
                                        <div id="field_row_psfiles_list_status_4_data" class="field-row field-row-file">
                                            <label for="psfiles_list_status_4_data">Прикрепить файл материалов 4:</label>
                                            <span class="field">
                                        <select class="select-upload-option" id="psfiles_list_status_4_data">
                                            <option value="1">Прикрепить ссылку на файлообменник</option>
                                            <option value="2">Загрузить файл (если меньше 20мб)</option>
                                        </select>
                                        <span class="file-option file-option-1" style="display:none;">
                                            <input type="text" size="50" class="text field-file-url" name="psfiles[list][status_4][file_url]"
                                                   id="psfiles_list_status_4_file_url" value="" maxlength="255" disabled="">
                                        </span>
                                        <span class="file-option file-option-2" style="">
                                            <input type="file" class="file field-file-upload" name="psfiles[list][status_4][file_upload]"
                                                   id="psfiles_list_status_4_file_upload" value="">
                                        </span>
                                    </span>
                                        </div>
                                        <div id="field_row_psfiles_list_status_5_data" class="field-row field-row-file">
                                            <label for="psfiles_list_status_5_data">Прикрепить файл материалов 5:</label>
                                            <span class="field">
                                        <select class="select-upload-option" id="psfiles_list_status_5_data">
                                            <option value="1">Прикрепить ссылку на файлообменник</option>
                                            <option value="2">Загрузить файл (если меньше 20мб)</option>
                                        </select>
                                        <span class="file-option file-option-1" style="">
                                            <input type="text" size="50" class="text field-file-url" name="psfiles[list][status_5][file_url]"
                                                   id="psfiles_list_status_5_file_url" value="" maxlength="255">
                                        </span>
                                        <span class="file-option file-option-2" style="display:none;">
                                            <input type="file" class="file field-file-upload" name="psfiles[list][status_5][file_upload]"
                                                   id="psfiles_list_status_5_file_upload" value="">
                                        </span>
                                    </span>
                                        </div>
                                    </div>
                                    <div class="status-custom status-7 status-8" style="display: none;">
                                        <div id="row_psrequests2_item_confirm_files_attached" class="field-row ui-helper-clearfix checkbox required">
                                            <div class="checkbox">
                                                <input type="checkbox" id="row_psrequests2_item_confirm_files_attached1"
                                                       name="psrequests2[item][confirm_files_attached]">
                                                <label for="row_psrequests2_item_confirm_files_attached1"> :Подтверждаю, что все требуемые файлы приложены</label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <button type="submit">Сохранить</button>
                        </form>
                    </div>
                </div>
                <div class="tabs-con" id="tabs3">
                    <div class="group-btns">
                        <a href="javascript:void(0)" class="btn toggle-create-directory">Создать папку</a>
                        <a href="javascript:void(0)" class="btn toggle-upload-file">Загрузить файл</a>
                    </div>
                    <div class="new-directory w-50">
                        <div class="new-directory-title">
                            Создать папку
                        </div>
                        <form method="POST" action="{{'/create-cloud-path'}}">
                            @csrf
                            <input type="hidden" name="user-name" value="{{$user->user_name}}">
                            <input type="hidden" name="cloud-path" value="{{$clientReq->cloud_path}}">
                            <label for="dir-name" class="dir-name-label">Имя папки:</label>
                            <input id="dir-name" type="text" name="directory-name" class="w-50">
                            <button class="btn" type="submit">
                                Создать папку
                            </button>
                        </form>
                        <hr>
                    </div>
                    <div class="project_files_form w-50">
                        <form enctype="multipart/form-data" method="post"
                              action="/upload-file-in-directory">
                            @csrf
                            <div class="new-directory-title">
                                Загрузить файл
                            </div>
                            <input type="hidden" name="cloud-path" value="{{$clientReq->cloud_path}}">
                            <input type="hidden" name="user-name" value="{{$user->user_name}}">
                            <input type="hidden" id="project_files_form_dir_name" name="dir_name" value="Create auto  (Developer)">
                            <label for="project_files_form_name" class="dir-name-label">Выберите файл: </label>
                            <input name="file" type="file" size="50" value="" id="project_files_form_name" class="text">
                            <button class="btn" type="submit">Загрузить</button>
                        </form>
                        <hr>
                    </div>
                    <div class="files">
                        <div class="files-title">Файлы проекта</div>
                        <div class="tabs">
                            <div class="tabs-navigation files-nav">
                                <ul>
                                    <li class="active"><a data-target="tabs11">16.12.2020-ПВ (Иванов)</a></li>
                                    <li><a data-target="tabs12">КП внутренних поставщиков</a></li>
                                    <li><a data-target="tabs13">Материалы для ИПС</a></li>
                                </ul>
                            </div>
                            <div class="files-content tabs-con active" id="tabs11">
                                <div class="files-content__title">
                                    Содержимое папки 16.12.2020-ПВ (Иванов)
                                </div>
                                <div class="files-content__links">
                                    <a href="#">Загрузить файл16.12.2020-Марий Эл-Строительство автодороги Ирнур-Нижний Осиял-ПВ.zip </a>
                                </div>
                            </div>
                            <div class="files-content tabs-con" id="tabs12">
                                КП внутренних поставщиков
                            </div>
                            <div class="files-content tabs-con" id="tabs13">
                                3
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tabs-con"id="tabs4">
                    <div class="calculations">
                        @if(count($groups))
                            @foreach($groups as $key => $group)
                                @if(isset($allCalcs[$group->position]))
                                    <div class="calculations inner-calc">
                                        <div class="calculations-title">{{$group->title}}</div>
                                        <ul>
                                            @foreach($allCalcs[$group->position] as $link)
                                                <li>
                                                    <a href="{{$link["url"]}}">{{$link["title"]}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                        <div class="calculations-table-title">Мои расчеты</div>
                        <div class="tableAdaptive clients-request-calc-table">
                            <table class="table-p">
                                <tr class="gray">
                                    <th>Название объекта</th>
                                    <th>Тип расчета</th>
                                    <th>Регион объекта</th>
                                    <th>Дата создания</th>
                                </tr>
                                @foreach($myCalcs as $calc)
                                    <tr class="green" onclick="location.href='/calcs-trays/show-{{$calc->id}}/'">
                                        <td data-label="Название объекта">
                                            {{$calc->title}}
                                        </td>
                                        <td data-label="Тип расчета">
                                            @lang('calc2/calcs_trays/etc/calcs_trays.'.$calc->calc_model)
                                        </td>
                                        <td data-label="Регион объекта">
                                            {{$calc->region_title}}
                                        </td>
                                        <td data-label="Дата создания">
                                            {{$calc->created_date}}
                                        </td>
                                    </tr>
                                @endforeach
                                @if(count($myCalcs) === 0)
                                    <tr>
                                        <td>
                                            <div class="alert alert-danger" role="alert">
                                                Нет результатов.!
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tabs-con"id="tabs5">
                    <div class="projectService">
                        <div class="projectService-label">
                            <div class="greenBold">Задание по объекту, описать:</div>
                            <a href="#">Требуемые исходные данные</a>
                        </div>
                        <div class="projectService-content max-width">
                            {{$clientReq->tech_task_description}}
                        </div>
                    </div>
                    <div class="projectService-title">
                        Файлы материалов
                    </div>
                    @if($attachFiles && is_object($attachFiles))
                        @foreach($attachFiles as $key => $file)
                            <div class="projectService">
                                <div class="projectService-label long">
                                    Прикрепить файлы материалов {{$key + 1}}
                                </div>
                                <div class="projectService-content">
                                    <a href="#">{{$file->file_name}}</a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <div class="projectService">
                        <div class="projectService-label long">
                            Прикрепить файлы материалов 1
                        </div>
                        <div class="projectService-content group">
                            <select>
                                <option>Загрузить файл (если меньше 20 мб)</option>
                                <option>Загрузить файл (если меньше 20 мб)</option>
                                <option>Загрузить файл (если меньше 20 мб)</option>
                                <option>Загрузить файл (если меньше 20 мб)</option>
                                <option>Загрузить файл (если меньше 20 мб)</option>
                            </select>
                            <div class="downloadLabel">
                                <input type="file" id="file1">
                                <label for="file1">Выберите файл</label>
                            </div>
                        </div>
                    </div>
                    <div class="projectService">
                        <div class="projectService-label long">
                            Прикрепить файлы материалов 1
                        </div>
                        <div class="projectService-content group">
                            <select>
                                <option>Прикрепить ссылку на файлообменник</option>
                                <option>Загрузить файл (если меньше 20 мб)</option>
                                <option>Загрузить файл (если меньше 20 мб)</option>
                                <option>Загрузить файл (если меньше 20 мб)</option>
                                <option>Загрузить файл (если меньше 20 мб)</option>
                            </select>
                            <input type="text">
                        </div>
                    </div>
                    <div class="projectService-title">
                        <div class="checkbox">
                            <input type="radio" id="fd" name="one">
                            <label for="fd">Подтверждаю, что все требуемые файлы приложены</label>
                        </div>
                    </div>
                    <div class="projectService-title">
                        Назначение ответсвенных
                    </div>
                    <div class="projectService">
                        <div class="projectService-label">
                            ИПС
                        </div>
                        <div class="projectService-content">
                            <select>
                                <option></option>
                                <option></option>
                                <option></option>
                                <option></option>
                            </select>
                        </div>
                    </div>
                </div>
            @else
                <div>
                    Запрос не найден!
                </div>
            @endif
        </div>
    </div>
@endsection

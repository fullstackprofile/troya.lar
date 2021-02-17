@extends('layouts.main')

@section('content')
    <div class="right-bar my-requests-content del-active">
        <div class="breadcrumbs">
            <a href="/">Главная</a>
            <a href="/">Запрос на техническое решение</a>
            <a href="/psrequests/my/">Мои запросы</a>
        </div>
        <div class="tabs">
            <div class="top">
                <h1>Мои запросы</h1>
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
                    <tr class="green">
                        <td data-label="Карточка клиента">
                            <div class="tableGreen">РМ0002516</div>
                        </td>
                        <td data-label="Клиент">
                            Евдокимов Павел
                        </td>
                        <td data-label="Ответственный менеджер">
                            Костырский Антон
                        </td>
                        <td data-label="ИПС">
                            Кургенова Дарья
                        </td>
                        <td data-label="Регион объекта">
                            Калининградская  область
                        </td>
                        <td data-label="Название объекта">
                            Плоскостная парковка, ул. Декабристов 15 (уч. 1 и уч.2)
                        </td>
                        <td data-label="Дата установки статуса">
                            16.12.2020<br>
                            15:10
                        </td>
                        <td data-label="Плановая дата выдачи материала">
                            16.12.2020
                        </td>
                        <td data-label="Статус">
                            Запрос выполнен
                        </td>
                    </tr>
                    <tr class="red">
                        <td data-label="Карточка клиента">
                            <div class="tableGreen">РМ0002516</div>
                        </td>
                        <td data-label="Клиент">
                            Евдокимов Павел
                        </td>
                        <td data-label="Ответственный менеджер">
                            Костырский Антон
                        </td>
                        <td data-label="ИПС">
                            Кургенова Дарья
                        </td>
                        <td data-label="Регион объекта">
                            Калининградская  область
                        </td>
                        <td data-label="Название объекта">
                            Плоскостная парковка, ул. Декабристов 15 (уч. 1 и уч.2)
                        </td>
                        <td data-label="Дата установки статуса">
                            16.12.2020<br>
                            15:10
                        </td>
                        <td data-label="Плановая дата выдачи материала">
                            16.12.2020
                        </td>
                        <td data-label="Статус">
                            Запрос выполнен
                        </td>
                    </tr>
                    <tr class="lightGreen">
                        <td data-label="Карточка клиента">
                            <div class="tableGreen">РМ0002516</div>
                        </td>
                        <td data-label="Клиент"></td>
                        <td data-label="Ответственный менеджер">
                            Костырский Антон
                        </td>
                        <td data-label="ИПС">
                            Кургенова Дарья
                        </td>
                        <td data-label="Регион объекта">
                            Калининградская  область
                        </td>
                        <td data-label="Название объекта">
                            Плоскостная парковка, ул. Декабристов 15 (уч. 1 и уч.2)
                        </td>
                        <td data-label="Дата установки статуса">
                            16.12.2020<br>
                            15:10
                        </td>
                        <td data-label="Плановая дата выдачи материала">
                            16.12.2020
                        </td>
                        <td data-label="Статус">
                            Запрос выполнен
                        </td>
                    </tr>
                    <tr class="orange">
                        <td data-label="Карточка клиента">
                            <div class="tableGreen">РМ0002516</div>
                        </td>
                        <td data-label="Клиент">
                            Евдокимов Павел
                        </td>
                        <td data-label="Ответственный менеджер">
                            Костырский Антон
                        </td>
                        <td data-label="ИПС">
                            Кургенова Дарья
                        </td>
                        <td data-label="Регион объекта">
                            Московская  область
                        </td>
                        <td data-label="Название объекта">
                            Плоскостная парковка, ул. Декабристов 15 (уч. 1 и уч.2)
                        </td>
                        <td data-label="Дата установки статуса">
                            16.12.2020<br>
                            15:10
                        </td>
                        <td data-label="Плановая дата выдачи материала">
                            16.12.2020
                        </td>
                        <td data-label="Статус">
                            Запрос выполнен
                        </td>
                    </tr>
                    <tr class="green">
                        <td data-label="Карточка клиента">
                            <div class="tableGreen">РМ0002516</div>
                        </td>
                        <td data-label="Клиент"></td>
                        <td data-label="Ответственный менеджер">
                            Костырский Антон
                        </td>
                        <td data-label="ИПС">
                            Кургенова Дарья
                        </td>
                        <td data-label="Регион объекта">
                            Калининградская  область
                        </td>
                        <td data-label="Название объекта">
                            Плоскостная парковка, ул. Декабристов 15 (уч. 1 и уч.2)
                        </td>
                        <td data-label="Дата установки статуса">
                            16.12.2020<br>
                            15:10
                        </td>
                        <td data-label="Плановая дата выдачи материала">
                            16.12.2020
                        </td>
                        <td data-label="Статус">
                            Запрос выполнен
                        </td>
                    </tr>
                    <tr class="red">
                        <td data-label="Карточка клиента">
                            <div class="tableGreen">РМ0002516</div>
                        </td>
                        <td data-label="Клиент">
                            Евдокимов Павел
                        </td>
                        <td data-label="Ответственный менеджер">
                            Костырский Антон
                        </td>
                        <td data-label="ИПС">
                            Кургенова Дарья
                        </td>
                        <td data-label="Регион объекта">
                            Калининградская  область
                        </td>
                        <td data-label="Название объекта">
                            Плоскостная парковка, ул. Декабристов 15 (уч. 1 и уч.2)
                        </td>
                        <td data-label="Дата установки статуса">
                            16.12.2020<br>
                            15:10
                        </td>
                        <td data-label="Плановая дата выдачи материала">
                            16.12.2020
                        </td>
                        <td data-label="Статус">
                            Запрос выполнен
                        </td>
                    </tr>
                    <tr class="orange">
                        <td data-label="Карточка клиента">
                            <div class="tableGreen">РМ0002516</div>
                        </td>
                        <td data-label="Клиент">
                            Евдокимов Павел
                        </td>
                        <td data-label="Ответственный менеджер">
                            Костырский Антон
                        </td>
                        <td data-label="ИПС">
                            Кургенова Дарья
                        </td>
                        <td data-label="Регион объекта">
                            Калининградская  область
                        </td>
                        <td data-label="Название объекта">
                            Плоскостная парковка, ул. Декабристов 15 (уч. 1 и уч.2)
                        </td>
                        <td data-label="Дата установки статуса">
                            16.12.2020<br>
                            15:10
                        </td>
                        <td data-label="Плановая дата выдачи материала">
                            16.12.2020
                        </td>
                        <td data-label="Статус">
                            Запрос выполнен
                        </td>
                    </tr>
                    <tr class="orange">
                        <td data-label="Карточка клиента">
                            <div class="tableGreen">РМ0002516</div>
                        </td>
                        <td data-label="Клиент"></td>
                        <td data-label="Ответственный менеджер">
                            Костырский Антон
                        </td>
                        <td data-label="ИПС">
                            Кургенова Дарья
                        </td>
                        <td data-label="Регион объекта">
                            Калининградская  область
                        </td>
                        <td data-label="Название объекта">
                            Плоскостная парковка, ул. Декабристов 15 (уч. 1 и уч.2)
                        </td>
                        <td data-label="Дата установки статуса">
                            16.12.2020<br>
                            15:10
                        </td>
                        <td data-label="Плановая дата выдачи материала">
                            16.12.2020
                        </td>
                        <td data-label="Статус">
                            Запрос выполнен
                        </td>
                    </tr>
                    <tr class="lightGreen">
                        <td data-label="Карточка клиента">
                            <div class="tableGreen">РМ0002516</div>
                        </td>
                        <td data-label="Клиент"></td>
                        <td data-label="Ответственный менеджер">
                            Костырский Антон
                        </td>
                        <td data-label="ИПС">
                            Кургенова Дарья
                        </td>
                        <td data-label="Регион объекта">
                            Калининградская  область
                        </td>
                        <td data-label="Название объекта">
                            Плоскостная парковка, ул. Декабристов 15 (уч. 1 и уч.2)
                        </td>
                        <td data-label="Дата установки статуса">
                            16.12.2020<br>
                            15:10
                        </td>
                        <td data-label="Плановая дата выдачи материала">
                            16.12.2020
                        </td>
                        <td data-label="Статус">
                            Запрос выполнен
                        </td>
                    </tr>
                    <tr class="orange">
                        <td data-label="Карточка клиента">
                            <div class="tableGreen">РМ0002516</div>
                        </td>
                        <td data-label="Клиент">
                            Евдокимов Павел
                        </td>
                        <td data-label="Ответственный менеджер">
                            Костырский Антон
                        </td>
                        <td data-label="ИПС">
                            Кургенова Дарья
                        </td>
                        <td data-label="Регион объекта">
                            Московская  область
                        </td>
                        <td data-label="Название объекта">
                            Плоскостная парковка, ул. Декабристов 15 (уч. 1 и уч.2)
                        </td>
                        <td data-label="Дата установки статуса">
                            16.12.2020<br>
                            15:10
                        </td>
                        <td data-label="Плановая дата выдачи материала">
                            16.12.2020
                        </td>
                        <td data-label="Статус">
                            Запрос выполнен
                        </td>
                    </tr>
                    <tr class="green">
                        <td data-label="Карточка клиента">
                            <div class="tableGreen">РМ0002516</div>
                        </td>
                        <td data-label="Клиент"></td>
                        <td data-label="Ответственный менеджер">
                            Костырский Антон
                        </td>
                        <td data-label="ИПС">
                            Кургенова Дарья
                        </td>
                        <td data-label="Регион объекта">
                            Калининградская  область
                        </td>
                        <td data-label="Название объекта">
                            Плоскостная парковка, ул. Декабристов 15 (уч. 1 и уч.2)
                        </td>
                        <td data-label="Дата установки статуса">
                            16.12.2020<br>
                            15:10
                        </td>
                        <td data-label="Плановая дата выдачи материала">
                            16.12.2020
                        </td>
                        <td data-label="Статус">
                            Запрос выполнен
                        </td>
                    </tr>
                    <tr class="red">
                        <td data-label="Карточка клиента">
                            <div class="tableGreen">РМ0002516</div>
                        </td>
                        <td data-label="Клиент">
                            Евдокимов Павел
                        </td>
                        <td data-label="Ответственный менеджер">
                            Костырский Антон
                        </td>
                        <td data-label="ИПС">
                            Кургенова Дарья
                        </td>
                        <td data-label="Регион объекта">
                            Калининградская  область
                        </td>
                        <td data-label="Название объекта">
                            Плоскостная парковка, ул. Декабристов 15 (уч. 1 и уч.2)
                        </td>
                        <td data-label="Дата установки статуса">
                            16.12.2020<br>
                            15:10
                        </td>
                        <td data-label="Плановая дата выдачи материала">
                            16.12.2020
                        </td>
                        <td data-label="Статус">
                            Запрос выполнен
                        </td>
                    </tr>
                    <tr class="orange">
                        <td data-label="Карточка клиента">
                            <div class="tableGreen">РМ0002516</div>
                        </td>
                        <td data-label="Клиент">
                            Евдокимов Павел
                        </td>
                        <td data-label="Ответственный менеджер">
                            Костырский Антон
                        </td>
                        <td data-label="ИПС">
                            Кургенова Дарья
                        </td>
                        <td data-label="Регион объекта">
                            Калининградская  область
                        </td>
                        <td data-label="Название объекта">
                            Плоскостная парковка, ул. Декабристов 15 (уч. 1 и уч.2)
                        </td>
                        <td data-label="Дата установки статуса">
                            16.12.2020<br>
                            15:10
                        </td>
                        <td data-label="Плановая дата выдачи материала">
                            16.12.2020
                        </td>
                        <td data-label="Статус">
                            Запрос выполнен
                        </td>
                    </tr>
                    <tr class="orange">
                        <td data-label="Карточка клиента">
                            <div class="tableGreen">РМ0002516</div>
                        </td>
                        <td data-label="Клиент"></td>
                        <td data-label="Ответственный менеджер">
                            Костырский Антон
                        </td>
                        <td data-label="ИПС">
                            Кургенова Дарья
                        </td>
                        <td data-label="Регион объекта">
                            Калининградская  область
                        </td>
                        <td data-label="Название объекта">
                            Плоскостная парковка, ул. Декабристов 15 (уч. 1 и уч.2)
                        </td>
                        <td data-label="Дата установки статуса">
                            16.12.2020<br>
                            15:10
                        </td>
                        <td data-label="Плановая дата выдачи материала">
                            16.12.2020
                        </td>
                        <td data-label="Статус">
                            Запрос выполнен
                        </td>
                    </tr>
                    </tbody></table>
            </div>
        </div>
        <div class="tabs-con display-none" id="tabs2">
            <div class="projectServices">
                <div class="projectService">
                    <div class="projectService-label">Карточка объекта: </div>
                    <div class="projectService-content">
                        <input type="text" class="short">
                    </div>
                </div>
                <div class="projectService">
                    <div class="projectService-label">Ответсвенный менеджер:</div>
                    <div class="projectService-content">
                        <div class="jq-selectbox jqselect"><select>
                                <option></option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select><div class="jq-selectbox__select"><div class="jq-selectbox__select-text placeholder" style="width: 65.4688px;">Выберите...</div><div class="jq-selectbox__trigger"><div class="jq-selectbox__trigger-arrow"></div></div></div><div class="jq-selectbox__dropdown" style="display: none;"><ul><li class="selected sel" style="display: none;"></li><li style="">1</li><li style="">2</li><li style="">3</li><li style="">4</li><li style="">5</li></ul></div></div>
                    </div>
                </div>
            </div>
            <div class="projectService">
                <div class="projectService-label">Ответсвенный инженер:</div>
                <div class="projectService-content">
                    <div class="row">
                        <div class="checkbox medium">
                            <input type="checkbox" id="ch1">
                            <label for="ch1">Выбрать всех</label>
                        </div>
                    </div>
                    <div class="column">
                        <div class="checkbox">
                            <input type="checkbox" id="ch21">
                            <label for="ch21">Иван Иванов</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="ch31">
                            <label for="ch31">Сергей Васильев</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="ch41">
                            <label for="ch41">Никита Новиков</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="ch51">
                            <label for="ch51">Евгений Дмитриев</label>
                        </div>
                    </div>
                    <div class="column">
                        <div class="checkbox">
                            <input type="checkbox" id="ch22">
                            <label for="ch22">Иван Иванов</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="ch32">
                            <label for="ch32">Сергей Васильев</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="ch42">
                            <label for="ch42">Никита Новиков</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="ch52">
                            <label for="ch52">Евгений Дмитриев</label>
                        </div>
                    </div>
                    <div class="column">
                        <div class="checkbox">
                            <input type="checkbox" id="ch22">
                            <label for="ch23">Иван Иванов</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="ch32">
                            <label for="ch33">Сергей Васильев</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="ch42">
                            <label for="ch43">Никита Новиков</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="ch52">
                            <label for="ch53">Евгений Дмитриев</label>
                        </div>
                    </div>
                    <div class="column">
                        <div class="checkbox">
                            <input type="checkbox" id="ch22">
                            <label for="ch24">Иван Иванов</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="ch32">
                            <label for="ch34">Сергей Васильев</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="ch42">
                            <label for="ch44">Никита Новиков</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="ch52">
                            <label for="ch54">Евгений Дмитриев</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="projectService">
                <div class="projectService-label">Регион объекта:</div>
                <div class="projectService-content">
                    <div class="jq-selectbox jqselect"><select>
                            <option></option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select><div class="jq-selectbox__select"><div class="jq-selectbox__select-text placeholder" style="width: 65.4688px;">Выберите...</div><div class="jq-selectbox__trigger"><div class="jq-selectbox__trigger-arrow"></div></div></div><div class="jq-selectbox__dropdown" style="display: none;"><ul><li class="selected sel" style="display: none;"></li><li style="">1</li><li style="">2</li><li style="">3</li><li style="">4</li></ul></div></div>
                </div>
            </div>
            <div class="projectService">
                <div class="projectService-label">Название объекта:</div>
                <div class="projectService-content">
                    <input type="text">
                </div>
            </div>
            <div class="projectService">
                <div class="projectService-label">Типология обекта:</div>
                <div class="projectService-content">
                    <div class="jq-select-multiple jqselect"><select multiple="multiple">
                            <option>[Не выбрано]</option>
                            <option>Автодороги</option>
                            <option>АЗС</option>
                            <option>Аэрозольный комплекс</option>
                            <option>Аэродромы ИВПП</option>
                            <option>Военная инфраструктура</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                        </select><ul style="height: 56px;"><li>[Не выбрано]</li><li>Автодороги</li><li>АЗС</li><li>Аэрозольный комплекс</li><li>Аэродромы ИВПП</li><li>Военная инфраструктура</li><li>7</li><li>8</li><li>9</li><li>10</li><li>11</li><li>12</li><li>13</li><li>14</li></ul></div>
                </div>
            </div>
            <div class="projectService">
                <div class="projectService-label">Статус:</div>
                <div class="projectService-content">
                    <div class="column">
                        <div class="checkbox">
                            <input type="checkbox" id="2ch11">
                            <label for="2ch11">Новый запрос</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="2ch12">
                            <label for="2ch12">Запрос принят в работу</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="2ch13">
                            <label for="2ch13">Необходима корректировка</label>
                        </div>
                    </div>
                    <div class="column">
                        <div class="checkbox">
                            <input type="checkbox" id="2ch21">
                            <label for="2ch21">Запросы передан инженеру</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="2ch22">
                            <label for="2ch22">Запрос выполнен</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="2ch23">
                            <label for="2ch23">Дополнительные исходные данные к запросу</label>
                        </div>
                    </div>
                    <div class="column">
                        <div class="checkbox">
                            <input type="checkbox" id="2ch31">
                            <label for="2ch31">Требуются дополнительные исходные данные</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="2ch32">
                            <label for="2ch32">ТР на согласовании у клиента</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="2ch33">
                            <label for="2ch33">Евгений Дмитриев</label>
                        </div>
                    </div>
                    <div class="column">
                        <div class="checkbox">
                            <input type="checkbox" id="2ch41">
                            <label for="2ch41">ТР согласовано с клиентом</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="2ch42">
                            <label for="2ch42"> Обратная связь</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="projectService">
                <div class="projectService-label long">
                    Задания инженеру:
                </div>
                <div class="projectService-content">
                    <div class="jq-selectbox jqselect short"><select class="short">
                            <option>[Не выбрано]</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                        </select><div class="jq-selectbox__select"><div class="jq-selectbox__select-text">[Не выбрано]</div><div class="jq-selectbox__trigger"><div class="jq-selectbox__trigger-arrow"></div></div></div><div class="jq-selectbox__dropdown" style="display: none;"><ul><li class="selected sel" style="">[Не выбрано]</li><li style="">2</li><li style="">3</li><li style="">4</li><li style="">5</li><li style="">6</li></ul></div></div>
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
                            <input type="text">
                        </div>
                        <div>
                            До
                            <input type="text">
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
                            <input type="text">
                        </div>
                        <div>
                            До
                            <input type="text">
                        </div>
                    </div>
                </div>
            </div>
            <div class="projectService-btns">
                <button>Поиск</button>
                <button>Очистить</button>
            </div>
        </div>
    </div>
@endsection

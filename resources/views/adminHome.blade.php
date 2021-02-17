@extends('layouts.app')

@section('content')
    <div class="right-bar">
        <div class="breadcrumbs">
            <a href="#">Главная</a>
            <a href="#">Администрирование</a>
        </div>
        <div class="top">
            <h1>АДМИНИСТРИРОВАНИЕ</h1>
        </div>
        <div class="statistica-group">
            <div class="statistica-group_title">Структура ТС</div>
            <div class="statistica">
                <div class="statistic">
                    <a href="#">Регионы ТС</a>
                </div>
                <div class="statistic">
                    <a href="#">Офисы ТС</a>
                </div>
                <div class="statistic">
                    <a href="#">Регионы страны</a>
                </div>
                <div class="statistic">
                    <a href="#">Населеные пункты</a>
                </div>
                <div class="statistic">
                    <a href="#">Список ТОП</a>
                </div>
                <div class="statistic">
                    <a href="#">Группы ТОП</a>
                </div>
                <div class="statistic">
                    <a href="#">Офисы ТП</a>
                </div>
            </div>
        </div>
        <div class="statistica-group">
            <div class="statistica-group_title">Пользователи</div>
            <div class="statistica">
                <div class="statistic">
                    <a href="#">Внутренние<br> пользователи</a>
                </div>
                <div class="statistic">
                    <a href="#">Проектировщики</a>
                </div>
                <div class="statistic">
                    <a href="#">Дилеры</a>
                </div>
            </div>
        </div>
        <div class="statistica-group">
            <div class="statistica-group_title">Расчеты</div>
            <div class="statistica">
                <div class="statistic">
                    <a href="#">Перечень изделий ПВ</a>
                </div>
                <div class="statistic">
                    <a href="#">Перечень изделий<br> SteelMax</a>
                </div>
                <div class="statistic">
                    <a href="#">Перечень изделий<br> Inoxpark</a>
                </div>
                <div class="statistic">
                    <a href="#">Материалы лотков</a>
                </div>
                <div class="statistic">
                    <a href="#">Комментарии<br> к расчетам</a>
                </div>
            </div>
        </div>
        <div class="statistica-group">
            <div class="statistica-group_title">Запросы</div>
            <div class="statistica">
                <div class="statistic">
                    <a href="#">Статусы</a>
                </div>
                <div class="statistic">
                    <a href="#">Файлы запросов</a>
                </div>
                <div class="statistic">
                    <a href="#">Уведомления о статусах</a>
                </div>
            </div>
        </div>
        <div class="statistica-group">
            <div class="statistica-group_title">Статистика</div>
            <div class="statistica">
                <div class="statistic">
                    <a href="#">Рабочее время</a>
                </div>
                <div class="statistic">
                    <a href="#">Обновление статистики</a>
                </div>
            </div>
        </div>
        <div class="statistica-group">
            <div class="statistica-group_title">Тестирование</div>
            <div class="statistica">
                <div class="statistic">
                    <a href="#">Уведомления</a>
                </div>
                <div class="statistic">
                    <a href="#">Настройки отчетов<br> инженеров</a>
                </div>
                <div class="statistic">
                    <a href="#">Отчеты инженеров</a>
                </div>
            </div>
        </div>
    </div>
@endsection

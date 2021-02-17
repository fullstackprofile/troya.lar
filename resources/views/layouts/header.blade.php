<header>
    <div class="logo">
        <a href="/">
            <img src="/images/logo.svg" alt="">
        </a>
        <span>ПРОЕКТНЫЙ СЕРВИС</span>
    </div>
    <div class="search">
        <form>
            <input type="text" placeholder="Строка для поиска....">
            <button>
                <img src="/images/icons/search.svg" alt="">
            </button>
        </form>
    </div>
    <div class="header-right">
        <a href="#" class="notification">
            <span>1</span>
        </a>
        <div class="name">
            Сотрудник (МПО): <a href="#">{{$user->user_name}}</a>
        </div>
        <a href="#" class="log-out">
            <img src="/images/icons/log-out.svg" alt="">
            Выйти
        </a>
    </div>
</header>

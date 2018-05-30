<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <div id="basket">
            <table id="bascets">
                <tbody>
                <tr style="display: none;" class="hPb">
                    <td>Выбрано:</td>
                    <td><span id="totalGoods">0</span> товаров</td>
                    <td>Сумма: &asymp; </td>
                    <td><span id="totalPrice">0</span> руб.</td>
                </tr>
                <tr style="display: table-row;" class="hPe">
                    <td colspan="2">Корзина пуста</td>
                </tr>
                <tr>
                    <td><a style="display: none;" id="clearBasket" href="#">Очистить</a></td>
                    <td><a style="display: none;" id="checkOut" href="{{asset('basket')}}">Оформить</a></td>
                </tr>
                </tbody>
            </table>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{asset('home')}}">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{asset('about')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{asset('services')}}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{asset('contacts')}}">Contacts</a>
                </li>
                @include('templates.auth')
            </ul>
        </div>
    </div>
</nav>
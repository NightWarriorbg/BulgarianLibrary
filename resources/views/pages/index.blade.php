@extends('layouts.app')
@section('title', 'Твоята виртуална библиотека')
@section('content')
    <!-- ROW START -->
    <div class="row">

        <!-- RIGHT SIDE -->
        <div class="col-lg-9">

            <!-- NEWEST BOOKS -->
            <div class="card card-panel">
                <div class="card-body">
                    <div class="panel-header">
                        <h1>Най-нови книги</h1>
                        <div class="view-more">
                            <a href="#">Виж още <img src="{{ asset('img/ic_keyboard_arrow_right_black_24dp_1x.png') }}"
                                                     alt="View more"></a>
                        </div>
                    </div>
                    <div class="books-content d-flex flex-row flex-wrap">
                        <div class="books-item">
                            <a href="#"><img src="{{ asset('img/tempBooks/book1/Book%20%231.png') }}" alt="book 1"></a>
                        </div>

                        <div class="books-item">
                            <a href="#"><img src="{{ asset('img/tempBooks/book1/Book%20%232.png') }}" alt="book 2"></a>
                        </div>

                        <div class="books-item">
                            <a href="#"><img src="{{ asset('img/tempBooks/book1/Book%20%233.png') }}" alt="book 3"></a>
                        </div>

                        <div class="books-item">
                            <a href="#"><img src="{{ asset('img/tempBooks/book1/Book%20%234.png') }}" alt="book 4"></a>
                        </div>

                        <div class="books-item">
                            <a href="#"><img src="{{ asset('img/tempBooks/book1/Book%20%235.png') }}" alt="book 5"></a>
                        </div>

                        <div class="books-item">
                            <a href="#"><img src="{{ asset('img/tempBooks/book2/Book%20%231.png') }}" alt="book 6"></a>
                        </div>

                        <div class="books-item">
                            <a href="#"><img src="{{ asset('img/tempBooks/book2/Book%20%232.png') }}" alt="book 7"></a>
                        </div>

                        <div class="books-item">
                            <a href="#"><img src="{{ asset('img/tempBooks/book2/Book%20%233.png') }}" alt="book 8"></a>
                        </div>

                        <div class="books-item">
                            <a href="#"><img src="{{ asset('img/tempBooks/book2/Book%20%234.png') }}" alt="book 9"></a>
                        </div>

                        <div class="books-item">
                            <a href="#"><img src="{{ asset('img/tempBooks/book2/Book%20%235.png') }}" alt="book 10"></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- THE MOST POPULAR BOOKS AT THE MOMENT -->
            <div class="card card-panel">
                <div class="card-body">
                    <div class="panel-header">
                        <h1>Най популярни в момента</h1>
                        <div class="view-more">
                            <a href="#">Виж още <img src="{{ asset('img/ic_keyboard_arrow_right_black_24dp_1x.png') }}"
                                                     alt="View more"></a>
                        </div>
                    </div>
                    <div class="books-content d-flex flex-row flex-wrap">
                        <div class="books-item">
                            <a href="#"><img src="{{ asset('img/tempBooks/book3/Book%20%231.png') }}" alt="book 1"></a>
                        </div>

                        <div class="books-item">
                            <a href="#"><img src="{{ asset('img/tempBooks/book3/Book%20%232.png') }}" alt="book 2"></a>
                        </div>

                        <div class="books-item">
                            <a href="#"><img src="{{ asset('img/tempBooks/book3/Book%20%233.png') }}" alt="book 3"></a>
                        </div>

                        <div class="books-item">
                            <a href="#"><img src="{{ asset('img/tempBooks/book3/Book%20%234.png') }}" alt="book 4"></a>
                        </div>

                        <div class="books-item">
                            <a href="#"><img src="{{ asset('img/tempBooks/book3/Book%20%235.png') }}" alt="book 5"></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- THE BOOKS WITH HIGHEST RATING -->
            <div class="card card-panel">
                <div class="card-body">
                    <div class="panel-header">
                        <h1>Най-висок рейтинг</h1>
                        <div class="view-more">
                            <a href="#">Към класацията <img src="{{ asset('img/ic_keyboard_arrow_right_black_24dp_1x.png') }}"
                                                            alt="View more"></a>
                        </div>
                    </div>
                    <div class="books-content d-flex flex-row flex-wrap">
                        <div class="books-item">
                            <a href="#"><img src="{{ asset('img/tempBooks/book4/Book%20%231.png') }}" alt="book 1"></a>
                        </div>

                        <div class="books-item">
                            <a href="#"><img src="{{ asset('img/tempBooks/book4/Book%20%232.png') }}" alt="book 2"></a>
                        </div>

                        <div class="books-item">
                            <a href="#"><img src="{{ asset('img/tempBooks/book4/Book%20%233.png') }}" alt="book 3"></a>
                        </div>

                        <div class="books-item">
                            <a href="#"><img src="{{ asset('img/tempBooks/book4/Book%20%234.png') }}" alt="book 4"></a>
                        </div>

                        <div class="books-item">
                            <a href="#"><img src="{{ asset('img/tempBooks/book4/Book%20%235.png') }}" alt="book 5"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- RIGHT SIDE END-->

        <!-- LEFT SIDE-->
        <div class="col-lg-3">

            <!-- SEARCH BAR-->
            <div class="panel card-panel">
                <div class="card-body">
                    <div class="panel-header">
                        <h1>Търсачка</h1>
                    </div>
                    <div class="panel-content text-center">
                        <form>
                            <div class="search-bar">
                                <input type="text" class="form-control input-field" placeholder="Заглавие на книга...">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- GENRES-->
            <div class="panel card-panel">
                <div class="card-body">
                    <div class="panel-header">
                        <h1>Жанрове</h1>
                    </div>
                    <div class="panel-content">
                        <div class="genres">
                            <ul>
                                <li><a href="#">Художествена литература</a></li>
                                <li><a href="#">Криминални романи</a></li>
                                <li><a href="#">Бизнес и Икономика</a></li>
                                <li><a href="#">Техническа литература</a></li>
                                <li><a href="#">Поезия</a></li>
                                <li><a href="#">Детска литература</a></li>
                            </ul>

                            <div class="link-see-all"><a href="#">Виж всички категории ></a></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RANDOM BOOK-->
            <div class="panel card-panel">
                <div class="card-body">
                    <div class="panel-header">
                        <h1>Случайна книга</h1>
                    </div>
                    <div class="panel-content">
                        <div class="random-book">
                            <a href="#"><img src="{{ asset('img/demorand.png') }}" alt="Random book"></a>

                            <div class="random-book-actions">
                                <div class="random-book-action">
                                    <a href="#"><img src="{{ asset('img/refresh.png') }}" alt="refresh"></a>
                                </div>
                                <div class="random-book-action">
                                    <a href="#"><img src="{{ asset('img/fav-normal.png') }}" alt="Favorite" class="heart"></a>
                                </div>
                                <div class="random-book-action">
                                    <a href="#"><img src="{{ asset('img/read-later.png') }}" alt="Read later" class="read"></a>
                                </div>
                                <div class="random-book-action">
                                    <a href="#"><img src="{{ asset('img/dots.png') }}" alt="Dots"></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- END OF ROW-->
@stop

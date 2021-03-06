@extends('layouts.default')

@section('title', 'Welcome')

@section('content')
    <main>
        <div class="hero_home version_2">
            <div class="content">
                <h3>Find a specialiste!</h3>
                <p>

                </p>
                <form method="post" action="list.html">
                    <div id="custom-search-input">
                        <div class="input-group">
                            <input type="text" class=" search-query" placeholder="Ex. Name, Specialization ....">
                            <input type="submit" class="btn_search" value="Search">
                        </div>
                        <ul>
                            <li>
                                <input type="radio" id="all" name="radio_search" value="all" checked>
                                <label for="all">All</label>
                            </li>
                            <li>
                                <input type="radio" id="doctor" name="radio_search" value="doctor">
                                <label for="doctor">Specialiste</label>
                            </li>
                            <li>
                                <input type="radio" id="clinic" name="radio_search" value="clinic">
                                <label for="clinic">Clinic</label>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>

        </div>
    </main>
    <!-- /main content -->
@endsection
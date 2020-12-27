@extends('layouts/master')

@section('title')
    add new book
@endsection

@section('content')

    <div class="wrapper">
        <!-- Sidebar  -->

    @include('partials/header')

    <!-- Page Content  -->
        <div id="content">

            @include('partials/topnav')

            <h2>Add a new Book to the library</h2>
            <div class="line"></div>


            <div class="container">
                <div class="row">
                    <form style="width: 100%">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Book name</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="roman from the idea">
                            </div>
                        </div>


                        <div class="col-6">

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">select book's auther</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>

                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect2">select book's category</label>
                                <select multiple class="form-control" id="exampleFormControlSelect2">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-6">
                            <button class="btn btn-success">add book</button>
                        </div>


                    </form>
                </div>
            </div>

        </div>
    </div>


@endsection

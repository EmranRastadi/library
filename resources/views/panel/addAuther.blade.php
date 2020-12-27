@extends('layouts/master')

@section('title')
    add new auther
@endsection

@section('content')

    <div class="wrapper">
        <!-- Sidebar  -->

    @include('partials/header')

    <!-- Page Content  -->
        <div id="content">

            @include('partials/topnav')

            <h2>Add a new auther</h2>
            <div class="line"></div>


            <div class="container">
                <div class="row">
                    <form style="width: 100%">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">auther name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="write auther name">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Date of birth</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="write auther birth day">
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

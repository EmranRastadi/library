@extends('layouts/master')

@section('title')
    add new category
@endsection

@section('content')

    <div class="wrapper">
        <!-- Sidebar  -->

    @include('partials/header')

    <!-- Page Content  -->
        <div id="content">

            @include('partials/topnav')

            <h2>Add a new category </h2>
            <div class="line"></div>


            <div class="container">
                <div class="row">
                    <form style="width: 100%">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">category name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="roman from the idea">
                            </div>
                        </div>


                        <div class="col-6">
                            <button class="btn btn-success">add category</button>
                        </div>


                    </form>
                </div>
            </div>

        </div>
    </div>


@endsection



@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });

            $('#example').modal()
        });


    </script>
@endsection

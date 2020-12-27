@extends('layouts/master')

@section('title')
    user dashboard
@endsection


@section('style')

@endsection

@section('content')

    <div class="wrapper">
        <!-- Sidebar  -->


    @include('partials/header')

    <!-- Page Content  -->
        <div id="content">

            @include('partials/topnav')

            <h2>The following books are available in the library</h2>
            <div class="line"></div>

            <div class="container">
                <div class="row">
                    <div class="col-12">


                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Book name</th>
                                <th scope="col">auther</th>
                                <th scope="col">status</th>
                                <th scope="col">Release time</th>
                                <th scope="col">Borrower</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>

                                    <span class="badge badge-warning">unavailable</span>

                                </td>

                                <td>
                                    20/11/98
                                </td>
                                <td>
                                    emran rastadi
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>


                                    <button type="button" class="btn btn-primary " data-toggle="modal"
                                            data-target="#releaseid_1">Open Modal
                                    </button>

                                    <div class="modal fade" id="releaseid_1" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Book name</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container">
                                                        <div class="row">
                                                            <form>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label for="date_back" class="col-form-label">returning
                                                                            time </label>
                                                                        <input type="text" disabled class="form-control"
                                                                               id="date_back" value="10/19/1395"/>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label for="stuid" class="col-form-label">student
                                                                            id </label>
                                                                        <input type="text" name="student_id"
                                                                               class="form-control"
                                                                               id="stuid" placeholder="enter student id ..."/>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12">
                                                                    <button class="btn btn-success">register</button>
                                                                </div>

                                                            </form>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                                        Close
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                </td>
                                <td>
                                    <span class="badge badge-warning">nothing</span>
                                </td>
                                <td>
                                    <span class="badge badge-warning">nothing</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
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

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
                        <div class="container row">
                            <form style="width: 100%" method="get" action="{{route('index')}}">


                                <input class="form-control" type="text" name="search"
                                       placeholder="write book name for search and press enter ..."/>

                            </form>

                        </div>


                    </div>
                    <div class="line"></div>
                    <div class="col-12">
                        <table class="table responsive">
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
                            @foreach($data as $key => $item)

                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>
                                        {{$item->name}}
                                    </td>
                                    <td>
                                        {{$item->auther->name}} {{$item->auther->family}}
                                    </td>
                                    <td>
                                        @if($item->student_id == 0)
                                            <button type="button" class="btn btn-primary " data-toggle="modal"
                                                    data-target="#releaseid_{{$item->id}}">lending
                                            </button>
                                            <div class="modal fade" id="releaseid_{{$item->id}}" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content"
                                                         style="background-color:#0d1c2f !important ">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">{{$item->name}}</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <form style="width: 100%" method="get"
                                                                          action="{{route('lending')}}"
                                                                          id="lending_book">
                                                                        <div class="col-12">
                                                                            <div class="form-group"
                                                                                 style="display: none">
                                                                                <label for="date_back"
                                                                                       class="col-form-label">returning
                                                                                    time </label>
                                                                                <input type="text"
                                                                                       class="form-control"
                                                                                       id="date_back"
                                                                                       name="date_returning"
                                                                                       value="{{date('d-m-Y' , strtotime(date('d-m-Y').'+ 7 days'))}}"/>

                                                                            </div>
                                                                            <input type="text" hidden
                                                                                   class="form-control"
                                                                                   name="book_id"
                                                                                   value="{{$item->id}}"/>

                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="form-group">
                                                                                <label for="stuid"
                                                                                       class="col-form-label">student
                                                                                    id </label>
                                                                                <input type="text" name="student_id"
                                                                                       class="form-control"
                                                                                       id="stuid"
                                                                                       placeholder="enter student id ..."/>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-12">
                                                                            <button id="btn_lend"
                                                                                    type="submit"
                                                                                    {{--                                                                                    onclick="return submitForm(event ,{{$item->id}})"--}}
                                                                                    class="btn btn-success">lending
                                                                            </button>
                                                                        </div>

                                                                    </form>

                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default"
                                                                    data-dismiss="modal">
                                                                Close
                                                            </button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        @else
                                            <span class="badge badge-warning">unavailable</span>
                                        @endif
                                    </td>
                                    <td>
                                        {{$item->realse_time}}
                                    </td>
                                    <td>
                                        @if($item->student)
                                            {{$item->student->name}}
                                            {{$item->student->family}}
                                        @else
                                            <span class="badge badge-warning">no body</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$data->links()}}
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

            $('#example').modal();


            // $("form#lending_book").on('submit',function ()
            // {
            //     var dataform = new FormData(this);
            //     var form_attr = $(this) ,
            //         url  = form_attr.attr('action'),
            //         method = form_attr.attr('method');
            //
            //     form_attr.find('[name]').each(function (){
            //         var now_input = $(this),
            //             index_i = now_input.attr('name'),
            //             value_i = now_input.val();
            //         dataform.append(index_i , value_i);
            //     })
            //
            //     $.ajax({
            //         url : url,
            //         type : method,
            //         data : dataform,
            //         cache: false,
            //         contentType: false,
            //         processData: false,
            //         success : function (msg){
            //             console.log(msg)
            //         }
            //     })
            //
            //     return false;
            //
            // })

            // $("#btn_lend").click(function (e)
            // {
            //     e.preventDefault();
            //     var id = $(this).attr('id_form');
            //     alert(id);
            // })
        });

        function submitForm(event, id) {

            event.preventDefault();
            // var form = 'form#lending_book_' + id;
            // var student_id = form.find('input[name:student_id]').val();
            var stuid = $('input[name=student_id_' + id + ']').val();
            var date = $('input[name=date_returning]').val();
            // var data = [];
            // data.push(stuid, date);


            $.ajax({
                url: 'lending',
                type: 'POST',
                data: {stuid, date},
                cache: false,
                contentType: false,
                processData: false,
                success: function (msg) {
                    alert(msg);
                }
            })


        }


    </script>
@endsection

@extends('layouts/master')

@section('title')
    login page
@endsection

@section('content')

    <div class="wraper_login">
        <div id="form-content">
            <div id="top_icon">
                <i class="fa fa-sign-in-alt"></i>
            </div>

            <div class="line"></div>

            <div class="container">
                <div class="row">
                    <form action="" style="width: 100%">

                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control"
                                       placeholder="Enter your Email ..."/>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="password" name="password" class="form-control"
                                       placeholder="Enter your password ..."/>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <button type="submit" name="sub_form" class="form-control btn btn-success">Login
                                </button>
                            </div>
                        </div>

                    </form>
                    <br/>
                    <div class="col-lg-12">
                        <p>Have you not registered? &nbsp;&nbsp;<a
                                style="cursor:pointer;border-bottom: 1px dashed green;color: green">Register</a></p>
                        <p>forget your password? &nbsp;&nbsp;<a
                                style="cursor:pointer;border-bottom: 1px dashed green;color: green">recovery
                                password</a></p>

                    </div>


                </div>
            </div>

        </div>
    </div>

@endsection

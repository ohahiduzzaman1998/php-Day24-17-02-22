@extends('master')

@section('title')
    Home page
@endsection

@section('body')

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">Full Name </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('full-name')}}">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="first_name"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="last_name"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Full Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{isset($result) ? $result : ''}}"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-block btn-outline-success" value="submit"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

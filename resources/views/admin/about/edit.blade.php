@extends('admin.admin_master')


@section('admin')
    

    <div class="py-12">
        <div class="container">
            <div class="row">
               

            <div class="col-md-12">
                <div class="card">
                    @if(Session::has('message'))
                            <div class="alert alert-success">
                                {{Session::get('message')}}
                            </div>
                    @endif
                    <div class="card-header">edit About</div>
                    <div class="card-body">
                    <form action="{{route('about.update', [$about->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                   
                        <div class="form-group">
                            <label for="exampleFormControlInput1">About title</label>
                            <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="slider title" 
                        value="{{$about->title}}">
                            
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Short Descrptions</label>
                        <textarea class="form-control" name="short_dis" id="exampleFormControlTextarea1" rows="3">{{$about->short_dis}}</textarea>
                        </div>
                            <!-- image -->
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Long Descrptions</label>
                                <textarea class="form-control" name="long_dis" id="exampleFormControlTextarea1" rows="3">{{$about->long_dis}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">List 1</label>
                                <input type="text" class="form-control" name="l1" id="exampleFormControlInput1" placeholder="list 1" 
                            value="{{$about->l1}}">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">List 2</label>
                                <input type="text" class="form-control" name="l2" id="exampleFormControlInput1" placeholder="list 2" 
                            value="{{$about->l2}}">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">List 3</label>
                                <input type="text" class="form-control" name="l3" id="exampleFormControlInput1" placeholder="list 3" 
                            value="{{$about->l3}}">

                            
                            <button type="submit" class="btn btn-primary">Update about</button>
                          </form>
                    </div>
                    
                </div>
            </div>                    

            </div>
        </div>
    </div>
    @endsection 

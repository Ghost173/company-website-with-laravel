@extends('admin.admin_master')


@section('admin')


<div class="content-wrapper">

<div class="content">	
<div class="col-lg-12">   	

    <div class="card card-default">
        @if(Session::has('message'))
        <div class="alert alert-success">
            {{Session::get('message')}}
        </div>
        @endif
        <div class="card-header card-header-border-bottom">
            <h2>Create Slider</h2>
        </div>
        <div class="card-body">
        <form action="{{route('store.slider')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">slider title</label>
                    <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="slider title">
                    
                </div>
                     
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Descrptions</label>
                    <textarea class="form-control" name="dec" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">file input</label>
                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
    
</div>
</div>
</div>




@endsection
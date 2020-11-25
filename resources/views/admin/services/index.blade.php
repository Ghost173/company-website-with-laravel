@extends('admin.admin_master')


@section('admin')

<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2>Services Deatils</h2>
    </div>
    <div class="card-body">
    <form class="form-pill" action="{{route('services.update',[$services->id])}}" method="POST" >
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput3">main title</label>
            <input type="text" class="form-control" name="mtitle" value="{{$services->mtitle}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput3">Service card title 1</label>
                <input type="text" class="form-control" name="ctitle1"  value="{{$services->ctitle1}}">
            </div>
            
            <div class="form-group">
                <label for="exampleFormControlInput3">Service card title 2</label>
                <input type="text" class="form-control" name="ctitle2"  value="{{$services->ctitle2}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput3">Service card title 3</label>
                <input type="text" class="form-control" name="ctitle3"  value="{{$services->ctitle3}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput3">Service card title 4</label>
                <input type="text" class="form-control" name="ctitle4"  value="{{$services->ctitle4}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput3">Service card title 5</label>
                <input type="text" class="form-control" name="ctitle5"  value="{{$services->ctitle5}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput3">Service card title 6</label>
                <input type="text" class="form-control" name="ctitle6"  value="{{$services->ctitle6}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput3">Service card Descption 1</label>
                <input type="text" class="form-control" name="cdsc1"  value="{{$services->cdsc1}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput3">Service card Descption 2</label>
                <input type="text" class="form-control" name="cdsc2"  value="{{$services->cdsc2}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput3">Service card Descption 3</label>
                <input type="text" class="form-control" name="cdsc3"  value="{{$services->cdsc3}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput3">Service card Descption 4</label>
                <input type="text" class="form-control" name="cdsc4"  value="{{$services->cdsc4}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput3">Service card Descption 5</label>
                <input type="text" class="form-control" name="cdsc5"  value="{{$services->cdsc5}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput3">Service card Descption 6</label>
                <input type="text" class="form-control" name="cdsc6"  value="{{$services->cdsc6}}">
            </div>
            <div class="form-footer pt-4 pt-5 mt-4 border-top">
                <button type="submit" class="btn btn-primary btn-default">Update</button>
            </div>
        </form>
    </div>
</div>


@endsection
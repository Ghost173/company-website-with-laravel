@extends('admin.admin_master')


@section('admin')

<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2>Services Deatils</h2>
    </div>
    <div class="card-body">
    <form class="form-pill" action="{{route('social.update',[$social->id])}}" method="POST" >
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput3">Facebook</label>
            <input type="text" class="form-control" name="fb" value="{{$social->fb}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput3">twitter</label>
                <input type="text" class="form-control" name="tw" value="{{$social->tw}}" >
            </div>
            
            <div class="form-group">
                <label for="exampleFormControlInput3">Linkedin</label>
                <input type="text" class="form-control" name="ln" value="{{$social->ln}}"  >
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput3">Insta</label>
                <input type="text" class="form-control" name="ins" value="{{$social->ins}}" >
            </div>

            
            <div class="form-footer pt-4 pt-5 mt-4 border-top">
                <button type="submit" class="btn btn-primary btn-default">Update</button>
            </div>
        </form>
    </div>
</div>



@endsection
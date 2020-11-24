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
            <h2>Create Contact</h2>
        </div>
        <div class="card-body">
        <form action="{{route('contact.update',[$contacts->id])}}" method="POST" >
            @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Contact address</label>
                <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3">{{$contacts->address}}</textarea>
                                      
                </div>
                     
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Contact Email</label>
                <input type="email" class="form-control" name="email" id="exampleFormControlInput1" value="{{$contacts->email}}">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Contact Phone</label>
                    <input type="text" class="form-control" name="phone" id="exampleFormControlInput1" value="{{$contacts->phone}}" >
                </div>
               
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Update</button>
                </div>
            </form>
        </div>
    </div>
    
</div>
</div>
</div>




@endsection
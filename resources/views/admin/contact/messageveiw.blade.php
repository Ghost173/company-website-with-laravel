@extends('admin.admin_master')


@section('admin')


<div class="content-wrapper">

<div class="content">	
<div class="col-lg-12">   	

    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Messagess</h2>
        </div>
        <div class="card-body">
       
                <div class="form-group">
                    <label for="exampleFormControlInput1">name</label>
                    <input type="text" class="form-control" name="email" id="exampleFormControlInput1" value="{{$messages->name}}">
                                      
                </div>
                     
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Email</label>
                    <input type="text" class="form-control" name="email" id="exampleFormControlInput1" value="{{$messages->email}}">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">subject</label>
                    <input type="text" class="form-control" name="phone" id="exampleFormControlInput1" value="{{$messages->subject}}">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">message</label>
                    <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3">{{$messages->message}}</textarea>
                                      
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">send date</label>
                    <input type="text" class="form-control" name="phone" id="exampleFormControlInput1" value="{{$messages->created_at}}">
                </div>

                <a href="{{route('message.delete',[$messages->id])}}" class="btn btn-danger">delete</a>

                <a href="{{route('contact.message')}}" class="btn btn-info">Back</a>
            
        </div>
    </div>
    
</div>
</div>
</div>




@endsection
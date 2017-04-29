@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
<!--
                    {!! Form::select('depertment',$depertments, null,['id'=>'depertment','class'=>'dept']) !!}
                    <br>
                    {!! Form::select('teachers',['placeholder'=>'Select Teacher'],null,['id'=>'teacher','class'=>'tcr']) !!}
-->
                    
                    <form method='POST' action='/posts'>
                       
                       {{ csrf_field() }}
                        <div class="form-group">

                            <label for="">Depertment</label>

                            <select name="depertment" id="depertment" class="form-control input-sm depertment">

                                 @foreach($depertments as $depertment)

                                  <option value="{{$depertment->id}}">{{$depertment->name}}</option>

                                 @endforeach
                       
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Teacher</label>
                            <select name="teacher" id="teacher" class="form-control input-sm">
                                <option value=""></option>
                            </select>
                        </div>
<!--
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Publish</button>
                        </div>
-->
                    </form>
                    
                
        
                    </div>
                
            </div>
        </div>
    </div>
</div>
@endsection


@section('script')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $("#depertment").change(function() {
            console.log($("#depertment").val());
            $.getJSON("/home/teacher/" + $("#depertment").val(), function(data) {
                var $teachers = $("#teacher");
                $teachers.empty();
                $.each(data, function(id, name) {
                    $teachers.append('<option value="' + id +'">' + name + '</option>');
                });
                $("#teacher").trigger("change"); /* trigger next drop down list not in the example */
            });
        });
    });
</script>
@endsection
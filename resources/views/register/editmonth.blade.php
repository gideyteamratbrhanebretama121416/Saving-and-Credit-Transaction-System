@extends('layouts.admin')

@section('content')
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">

</head>
<!-- Content Header (Page header) -->
    <div class="content-header">
    	<div class="container-fluid">
    		<div class="row mb-2">
    			<div class="col-sm-6">
    				<h1 class="m-0 text-dark">list of members</h1>

    			</div>
    			<div class="col-sm-6">
    				<ol class="breadcrumb float-sm-right">
    					<li class="breadcrumb-item"> <a href="{{url('/monthlyregister')}}">see the monthely depositors</a> </li>
    					<li class="breadcrumb-item active">members documentation</li>
    				</ol>
    			</div>
    		</div>
    	</div>

    </div>

    
<div class="box">
<div id="myTabContent" class="main_container" >

<section class="content">
    <div class="container">
    	
    		<form method="post" action="{{url('/monthlyupdate')}}/{{$edit->id}}">
          {{ csrf_field()}}
                <div class="col-md-5">
        <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">update the monthly deposite</h3>
        </div>
        @foreach($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
        <div class="box-body">
                  {{ csrf_field() }}
                       <div class="form-group">
                  <label class="control-label col-sm-3" for="month">code:<span class="text-danger">*</span></label>
              <div class="col-md-6">
                    <select class="form-control chosen" name="code" value="{{$edit->code}}" id="code" required="required">
                      <option selected disabled>~choose~</option>
                      @foreach($abalats as $abalat)
                      <option >{{$abalat->code}} </option>
                      @endforeach
                      
                </select>
                  </div>
              </div>
              <br>
              <br>
             <div class="form-group">
              <label class="col-md-3 control-label" for="total">amount</label>
              <div class="col-md-6">
                <input id="amount" name="amount" value="{{$edit->amount}}" type="text" placeholder="" class="form-control"></div>
              </div>
              <br>
              <br>
                <div class="form-group">
                  <label class="col-md-3 control-label" for="bank">bank deposited</label>
              <div class="col-md-6">
                    <select class="form-control chosen" name="bank" id="bank" value="{{$edit->bank}}" required="required">
                      <option selected disabled>~choose~</option>
               
                      <option >Lion</option>
                      <option >Awash</option>s
                      <option >Union</option>
                      <option >Berhan</option>
                      <option >Abyssinia</option>
                      <option >CBE</option>
                      <option >Wegagen</option>
                      <option >Dashen</option>
                      <option >Abay</option>
                    
                </select>
                  </div>
              </div>
                  <br>
                  <br>
              <!-- <div class="form-group">
              <label class="col-md-3 control-label" for="recipt">Recipt</label>
              <div class="col-md-6">
                <input id="recipt" name="recipt" value="{{$edit->recipt}}" type="text" placeholder="" class="form-control"></div>
              </div>
              <br>
              <br> -->
              <div class="form-group">
              <label class="col-md-3 control-label" for="sem">for director</label>
              <div class="col-md-6">
                <input id="sem1" name="sem1" type="text" value="{{$edit->sem1}}" placeholder="" class="form-control"></div>
              </div>
              <br>
              <br>
              <div class="form-group">
                  <label class="control-label col-sm-3" for="month">month:<span class="text-danger">*</span></label>
              <div class="col-md-6">
                    <select class="form-control chosen" name="month" value="{{$edit->month}}" id="month" required="required">
                      <option selected disabled>~choose~</option>
                     <option >September</option>
                      <option >October</option>
                      <option >November</option>
                      <option >December</option>
                      <option >January</option>
                      <option >February</option>
                      <option >March</option>
                      <option >April</option>
                      <option >May</option>
                      <option >June</option>
                      <option >July</option>
                      <option >Auguest</option>
                </select>
                  </div>
              </div>
                  <br>
                  <br>
               <div class="form-group">
                <label class="col-md-3 control-label" for="date">entry date</label>
                <div class="col-md-6">
                  <input id="entrydate" name="entrydate" value="{{$edit->entrydate}}" type="date" placeholder="" class="form-control" value=""></div>
                  <div class="fa fa-calendar"></div>
                </div>
                <br>
                <br>
                <div class="form-group">
                  <label class="control-label col-sm-3" for="status">type:<span class="text-danger">*</span></label>
              <div class="col-md-6">
                    <select class="form-control" name="type" value="{{$edit->type}}" id="type" required="required">
                      <option selected disabled>~choose~</option>
                      <option >child</option>
                      <option >mature</option>
                      
                </select>
                  </div>
              </div>
                <br>
                <br>
              
           <!-- <div class="form-group">
                  <label class="control-label col-sm-3" for="status">new or not:<span class="text-danger">*</span></label>
              <div class="col-md-6">
                    <select class="form-control" name="case1" value="{{$edit->case1}}" id="case1" required="required">
                      <option selected disabled>~choose~</option>
                      <option >0</option>
                      <option >1</option>
                      
                </select>
                  </div>
              </div>
                <br>
                <br> -->

                <div class="form-group">
                  <label class="control-label col-sm-3" for="status">status:<span class="text-danger">*</span></label>
              <div class="col-md-6">
                    <select class="form-control" name="status" value="{{$edit->status}}" id="status" required="required">
                      <option selected disabled>~choose~</option>
                      <option >0</option>
                      <option >1</option>
                      <option >2</option>
                </select>
                  </div>
              </div>
                <br>
                <br>

</div>


            </div>

        </div>

<div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-block btn-success">update</button>
                                </div>
                            </div>
    		</form>
        </div>
    		</section>	
    	</div>
  
</div>
    <script type="text/javascript">
     $(".chosen").chosen();
   </script> 
 @endsection
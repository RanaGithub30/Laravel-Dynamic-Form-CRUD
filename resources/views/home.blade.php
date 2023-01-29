@extends('commons.header')
@section('content')

@include('commons.validation_error')

<div class="container">
  <center><h2>Kidzee School Registration form</h2></center>

  <div>
      <a href="{{ route('view-user-lists') }}" id="view_user" target="_blank" class="btn btn-danger">View User's</a>
  </div>

  <form action="{{ route('post-registration') }}" method="post">
    @csrf

  <div>
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>

    <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="number" class="form-control" id="phone" placeholder="Enter phone No." min="10"  name="phone">
    </div>
    
    </div>

    <div>
        <center><h2> Pick-up Persons Details ( Max 6 )</h2></center>

      <div id="pickup_details0">
         <div>
               <h3> Pick up Persons </h3>
         </div>

        <div class="row" id="pickup_fields">
        <div class="form-group col-xs-4">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" placeholder="Enter Name" name="pickup_name[]">
        </div>

        <div class="form-group col-xs-4">
          <label for="relation">Relation:</label>
          <select name="pickup_relation[]" id="pickup_relation" class="form-control">
                   <option value="Select Relation">Select Relation</option>
                   <option value="Father">Father</option>
                   <option value="Mother">Mother</option>
                   <option value="Brother">Brother</option>
                   <option value="Sister">Sister</option>
                   <option value="Others">Others</option>
          </select>
        </div>

        <div class="form-group col-xs-4">
          <label for="phone">Phone:</label>
          <input type="number" class="form-control" id="phone" placeholder="Enter phone No." min="10"  name="pickup_phone[]">
        </div>

      </div>

      </div>
      </div>

    <div>
        <button type="button" id="add_more_btn" onclick="return duplicate_form()" class="btn btn-primary form-control">Add More</button>
    </div>

    <div id="rmv_btn">
      <button type="button" id="remove_btn" onclick="return remove_form()" class="btn btn-danger form-control">Remove</button>
    </div>

    <div>
        <button type="submit" id="submit_btn" class="btn btn-success form-control">Submit</button>
    </div>
  </form>
</div>

@endsection
@extends('commons.header')
@section('content')

<div class="container">
    <center><h2><u> User's Lists </u></h2></center>

<table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>phone</th>

        <th>Pick-up Person Name</th>
        <th>Pick-up Person Relation</th>
        <th>Pick-up Person Phone</th>
      </tr>
    </thead>
    <tbody>
    
    @foreach($details as $key => $detail)
    <tr>
        <td> {{ ($key+1) }} </td>
        <td> {{ $detail->user->name }} </td>
        <td>  {{ $detail->user->email }} </td>
        <td> {{ $detail->user->phone }} </td>

        <td> {{ $detail->pickup_name }} </td>
        <td>  {{ $detail->relation }} </td>
        <td> {{ $detail->pickup_phone }} </td>
    </tr>
    @endforeach
    
    </tbody>
  </table>
  </div>

  <div id="pagination">
       {{ $details->links() }}
  </div>

@endsection
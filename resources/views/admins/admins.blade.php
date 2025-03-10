@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
            @if(\Session::has("success"))
            <div class="alert alert-success">
              <p>  {!! \Session::get('success')!!}   </p>
            </div>
              @endif
          <h5 class="mb-4 card-title d-inline">Admins</h5>
         <a  href="{{ route('admins.create')  }}" class="float-right mb-4 text-center btn btn-primary">Create Admins</a>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Admin Name</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
                @foreach ( $admins as $admin )
                <tr>
                    <th scope="row">{{ $admin->id  }}</th>
                    <td>{{ $admin->name }}</td>
                    <td>{{$admin->email }}</td>

                  </tr>
                @endforeach


            </tbody>
          </table>
        </div>
      </div>
    </div>
@endsection

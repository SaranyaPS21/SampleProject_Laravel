@extends('layouts.adminmaster') @section('content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">
    <div class="card">
      <h5 class="card-header">Customer Details</h5>
      <div class="table-responsive text-nowrap">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Name</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Address</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0"> @foreach ($data as $customer) <tr>
              <td>
                <i class="fab fa-angular fa-lg text-danger me-3"></i>
                <strong>{{ $customer->name }}</strong>
              </td>
              <td>
                <i class="fab fa-angular fa-lg text-danger me-3"></i>
                <strong>{{ $customer->phone }}</strong>
              </td>
              <td>
                <i class="fab fa-angular fa-lg text-danger me-3"></i>
                <strong>{{ $customer->email }}</strong>
              </td>
              <td>
                <i class="fab fa-angular fa-lg text-danger me-3"></i>
                <strong>{{ $customer->contact }}</strong>
              </td>
              <td>
                <i class="fab fa-angular fa-lg text-danger me-3"></i>
                <strong>{{ $customer->address }}</strong>
              </td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{url('customerupdate',$customer->id)}}">
                      <i class="bx bx-edit-alt me-1"></i> Update </a>
                  </div>
                </div>
              </td>
            </tr> @endforeach </tbody>
        </table>
      </div>
    </div>
  </div>
</div> @endsection
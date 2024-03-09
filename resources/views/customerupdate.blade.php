@extends('layouts.adminmaster') @section('content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">
    <div class="col-xxl">
      <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="mb-0">Update Customer Details</h5>
        </div>
        <div class="card-body">
          <form action="{{url('updatedata',$customer->id)}}" method="POST"> @csrf <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="txtcusname" value="{{$customer->name}}" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-company">Contact Number</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="txtphno" value="{{$customer->phone}}" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-email">Email</label>
              <div class="col-sm-10">
                <div class="input-group input-group-merge">
                  <input type="email" class="form-control" name="txtemail" value="{{$customer->email}}" />
                </div>
                <div class="form-text">You can use letters, numbers & periods</div>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-message">Address</label>
              <div class="col-sm-10">
                <textarea class="form-control" name="txtaddress"> {{$customer->address}}</textarea>
              </div>
            </div>
            <div class="row justify-content-end">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" name="btnregister">Update</button>
                <button type="reset" class="btn btn-secondary" name="btncancel">Cancel</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div> @endsection
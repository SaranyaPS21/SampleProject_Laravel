@extends('layouts.adminmaster') @section('content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">
    <div class="col-xxl">
      <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="mb-0">Add Customer Invoices</h5>
        </div>
        <div class="card-body">
          <form action="{{url('http://127.0.0.1:8000/api/customerdata')}}" method="POST"> @csrf <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-name">Customer Name</label>
              <div class="col-sm-10">
                <select name="txtcusid" class="form-control">
                  <option value="0">Select Customer</option> @foreach ($data as $customer) <option value="{{ $customer->id }}">{{ $customer->name }}</option> @endforeach
                </select>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-email">Amount</label>
              <div class="col-sm-10">
                <div class="input-group input-group-merge">
                  <input type="number" class="form-control" name="txtamount" />
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-message">Status</label>
              <div class="col-sm-10">
                <select name="txtstatus" class="form-control">
                  <option value="0">Select Status</option>
                  <option value="Paid">Paid</option>
                  <option value="Unpaid">Unpaid</option>
                  <option value="Cancelled">Cancelled</option>
                </select>
              </div>
            </div>
            <div class="row justify-content-end">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" name="btnadd">Add</button>
                <button type="reset" class="btn btn-secondary" name="btncancel">Cancel</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div> @endsection
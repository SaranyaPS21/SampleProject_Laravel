<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Invoice;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminhome()
    {
        return view('adminhome');
    }

    public function customerreg()
    {
        return view('customerreg');
    }

    public function customerdata(Request $request)
    {
        if ($request->has('btnregister')) 
        {
            
            $customer = new Customer();
            $customer->name = $request->txtcusname;
            $customer->phone = $request->txtphno;
            $customer->email = $request->txtemail;
            $customer->address = $request->txtaddress;
            $customer->save();

            return response('
            <script>alert("Customer data inserted successfully"); window.location.href = "/customerreg";</script>');
        }

        if ($request->has('btnadd'))
        {
            

            $invoice = new Invoice();
            $invoice->customerid = $request->txtcusid;
            $invoice->invoicedate =date('Y-m-d');
            $invoice->amount = $request->txtamount;
            $invoice->status = $request->txtstatus;
            $invoice->save();

            return response('
            <script>alert("Invoice data inserted successfully"); window.location.href = "/invoicereg";</script>');  
        }   
    }

    public function customerview()
    {
        
    //      $data = Customer::all();
    //    return view('customerview', compact('data'));
    
    $customers = Customer::all();
    $invoices = Invoice::join('customers', 'invoices.customerid', '=', 'customers.id')
    ->get();

    return view('customerview', compact('customers', 'invoices'));

    }
    public function customerupdate($id)
    {
          $customer=Customer::find($id);
          return view('customerupdate',compact('customer'));
    }
    public function updatedata(Request $request,$id)
    {
        $customer=Customer::find($id);
        $customer->name=$request->txtcusname;
        $customer->phone=$request->txtphno;
        $customer->email=$request->txtemail;
        $customer->address=$request->txtaddress;
        
        $customer->save();
        return redirect("api/customerview");

    }
    public function invoicereg()
    {
      
        $data = Customer::all();
        return view('invoicereg', compact('data'));
    }
    public function invoiceview()
    {
       
            $data = Invoice::join('customers', 'invoices.customerid', '=', 'customers.id')
                           ->get();
            return view('invoiceview', compact('data')); 
    }
    public function invoiceupdate($id)
    {
          $invoice=Invoice::find($id);
          $data = Customer::all();
          return view('invoiceupdate',compact('invoice','data'));
    }

    public function updateinvoicedata(Request $request,$id)
    {
        $invoice=Invoice::find($id);
        $invoice->customerid=$request->selcusid;
        $invoice->amount=$request->txtamount;
        $invoice->status=$request->selstatus;
        
        $invoice->save();
        return redirect("api/invoiceview");

    }

}
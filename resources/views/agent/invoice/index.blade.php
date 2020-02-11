@extends('agent.master.header')
@section('content') 
        <div class="container-fluid">
          <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">All Transaction</h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3 justify-content-between row">
              <h6 class="m-0 font-weight-bold btn text-primary">All transactoin info</h6>
            {{-- <a href="{{route('bcontract.invoice.add',$bcontract->bcontract_id)}}" class="btn btn-primary">Add Transaction</a> --}}
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Invoice ID</th>
                      <th>Name</th>
                      <th>Property ID</th>
                      <th>Amount</th>
                      <th>Commission</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($invoices as $invoice)
                    <tr>
                      <td>{{$invoice->idinvoice}}</td>
                      <td>{{$invoice->bcontract()->first()->client()->first()->fullname}}</td>
                      <td>{{$invoice->bcontract()->first()->property_id}}</td>
                      <td>$ {{$invoice->amount}}</td>
                      <td>$ {{($invoice->amount)*0.1}}</td>
                      <td>{{$invoice->created_at}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
@endsection
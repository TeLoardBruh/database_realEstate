@extends('agent.master.header')

@section('content')
    
<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Add Transaction</h1>
              </div>
              <form class="user" method="post" action="{{route('bcontract.save',$pid)}}">
                @csrf
                <div class="form-group row">
                <input type="hidden" name="property_id" value="{{$pid}}">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" name="amount" value="{{$invoice->amount}}" readonly placeholder="Amount">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleLastName" name="phone_number" placeholder="Buyer's phone number">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Add Transaction
                </button>
                <hr>
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    </div>
@endsection
            
@extends('admin')
@section('content') 
        <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Agents</h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Agents Info</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Gender</th>
                      <th>Email</th>
                      <th>National ID Card</th>
                      <th>Date of Birth</th>
                      <th>Phone Number</th>
                      <th>Second Phone Number (optional)</th>
                      <th>Created At</th>
                    </tr>
                  </thead>
                  @foreach($agents as $agent)

                  <tbody>
                    <tr>
                      <td>{{$agent->agent_id}}</td>
                      <td>{{$agent->fullname}}</td>
                      <td>{{$agent->gender}}</td>
                      <td>{{$agent->email}}</td>
                      <td>{{$agent->gov_id}}</td>
                      <td>{{$agent->dob}}</td>
                      <td>{{$agent->phone_number}}</td>
                      <td>{{$agent->sec_phone_number}}</td>
                      <td>{{$agent->created_at}}</td>
                    </tr>
                    
                  </tbody>
                  @endforeach

                </table>

              </div>
            </div>
          </div>

        </div>
@endsection
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
                      <th>name</th>
                      <th>Position</th>
                      <th>Office</th>
                      <th>Age</th>
                      <th>Start date</th>
                      <th>Salary</th>
                    </tr>
                  </thead>
                  @foreach($agents as $agent)

                  <tbody>
                    <tr>
                      <td>{{$agent->name}}</td>
                      <td>{{$agent->email}}</td>
                      <td>Edinburgh</td>
                      <td>61</td>
                      <td>{{$agent->created_at}}</td>
                      <td>$320,800</td>
                    </tr>
                    
                  </tbody>
                  @endforeach

                </table>

              </div>
            </div>
          </div>

        </div>
@endsection
@extends('layouts.submaster')



@section('title')
    Registered Roles | Online Insurance
@endsection

@section('content')


<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Registered Roles </h4>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                    </div>
                @endif
              </div>
              <div class="card-body">
                <div class="table-responsive">


                  <table class="table">
                    <thead class=" text-primary">
                      <th>ID</th>
                      <th> Name</th>
                      <th> Phone </th>
                      <th> Email </th>
                      <th> UserType  </th>
                      <th> Edit </th>
                      <th> Delete </th>
                    </thead>
                    <tbody>
                      @foreach ($users as $row)
                        <tr>
                            <td> {{ $row->id }} </td>
                            <td> {{ $row->name }} </td>
                            <td> {{ $row->mobno }} </td>
                            <td> {{ $row->email  }} </td>
                              <td> {{ $row->usertype  }} </td>
                            <td>
                                <a href="{{url('/subrole-edit')}}/{{ $row->id }}" class="btn btn-success">Edit</a>
                             </td>
                            <td>

                                <form action="{{url('/subrole-delete')}}/{{ $row->id }}" method="POST">

                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger">DELETE</button>

                                </form>

                            </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>


                </div>
              </div>
            </div>
          </div>
        </div>

@endsection


@section('scripts')

@endsection

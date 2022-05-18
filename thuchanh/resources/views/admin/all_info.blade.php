@extends('home')

@section('content')
    <div class="row">
        <div class="col-xs-10">
            <h3>List user information</h3>
            <div class="box box-primary">
                <div class="box-header">
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="data-table table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Notes</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (isset($all_info)): ?>
                            <?php foreach ($all_info as $all_info): ?>
                            <tr>
                                <td>{{ $all_info->first_name }}</td>
                                <td>{{ $all_info->last_name }}</td>
                                <td>{{ $all_info->email }}</td>
                                <td>{{ $all_info->phone }}</td>
                                <td>{{ $all_info->notes }}</td>
                                <td>
                                    <a onclick="return confirm('Are you sure to delete?')" href="{{URL::to('/delete-info/'.$all_info->id)}}" class="btn btn-danger">
                                    Delete
                                    </a>
                                </td>
                                    

                                    
                            </tr>
                            <?php endforeach; ?>
                            <?php endif; ?>
                            </tbody>
                        </table>
                        <!-- /.box-body -->
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
    
@endsection
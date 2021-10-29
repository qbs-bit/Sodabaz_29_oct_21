@extends('layouts.master')

@section('content')
    @if (session('status'))

        {{ session('status') }}
    @endif


    <div class="content-body">
        <!-- Basic form layout section start -->
        <section id="basic-form-layouts">
            <div class="row match-height">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="basic-layout-form-center">Add Unit</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>  
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <form class="form" method="post" action="{{url('mills/save_unit')}}">
                                    @csrf
                                    <div class="row justify-content-md-center">
                                        <div class="col-md-6">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label for="eventInput1">Unit</label>
                                                    <input type="text" id="eventInput1" class="form-control" placeholder="Unit Name" name="unit">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label for="eventInput1">Unit Dimension</label>
                                                    <select class="form-control" id="unit_dimension" name="unit_dimension">
                                                        <option selected disabled>Select Dimension</option>
                                                        <option value="Length">Length</option>
                                                        <option value="Weight">Weight</option>
                                                        <option value="Count">Count</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content">
                                        <div class="col-md-6">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label for="eventInput1">Unit Description</label>
                                                    <textarea id="eventInput1" class="form-control" rows="4" placeholder="Unit Description" name="unit_description"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions center">
                                        <button type="submit" class="btn btn-info">
                                            <i class="la la-check-square-o"></i>Submit
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Units</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Unit</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $count = 1; ?>
                                    @foreach($unit as $units)
                                        <tr>
                                            <td>{{$count++}}</td>
                                            <td>{{$units->unit}}</td>

                                            @if($units->status=="Active")
                                            <td style="color: green;"><b>{{$units->status}}</b></td>

                                            @elseif($units->status=="Inactive")
                                            <td style="color: red;"><b>{{$units->status}}</b></td>
                                            @endif





                                            <td><button class="btn btn-info btn-sm" data-toggle="modal" data-target="#{{$units->id}}"><i class="la la-edit"></i> </button></td>
                                        </tr>
                                        <!-- Modal Start -->
                                    <div class="modal fade" id="{{$units->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Edit</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form method="post" action="{{url('mills/update_units')}}">
                                                    @csrf
                                                <div class="modal-body">
                                                    <input type="text" id="unit" class="form-control" placeholder="Unit Name" name="unit" value="{{$units->unit}}">

                                                    <select id="status" class="form-control" name="status">
                                                        @if($units->status=="Active")
                                                            <option value="{{$units->status}}">{{$units->status}}</option>
                                                            <option value="Inactive">Inactive</option>
                                                        @elseif($units->status=="Inactive")
                                                            <option value="{{$units->status}}">{{$units->status}}</option>
                                                            <option value="Active">Active</option>
                                                        @endif
                                                    </select>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="hidden" name="units_id" value="{{$units->id}}">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-info">Save changes</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal End -->
                                    @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- // Basic form layout section end -->
    </div>
    <div class="modal fade" id="edit_category" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-info">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('edit').click(function(){
                $("edit_category").modal('show');
            })
        })
    </script>
@endsection


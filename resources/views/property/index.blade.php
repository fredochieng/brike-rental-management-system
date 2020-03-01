@extends('layout.master')
@section('title', 'Property Listing')
@section('parentPageTitle', 'Property')


@section('content')

<div class="row clearfix">

    <div class="col-lg-12">
        <div class="card">

            <div class="body">
                <div class="table-responsive" style="font-size:13px">
                    <table class="table table-bordered table-hover dataTable js-exportable" style="font-size:13px">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Location</th>
                                <th>Caretaker Name</th>
                                <th>Phone</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($property as $count => $item)
                            <tr>
                                <td>{{ $count + 1 }}</td>
                                <td>{{ $item->prop_name}}</td>
                                <td>{{ $item->category_name}}</td>
                                <td>{{ $item->location}}</td>
                                <td>{{ $item->c_name}}</td>
                                <td>{{ $item->c_phone}}</td>
                                <td>{{ $item->prop_created_at}}</td>
                                <td>
                                    <div class="btn-group btn-group-sm role=" group">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <a class="dropdown-item"
                                                href="/property/manage/&id={{$item->property_id}}"><i
                                                    class="icon-eye"></i> View
                                                property</a>
                                            <a class="dropdown-item" href="/property/edit/&id={{$item->property_id}}"><i
                                                    class="icon-pencil"></i> Edit
                                                property</a>

                                            @if ($item->room_property_id == '')
                                            <a class="dropdown-item" href=""><i class="icon-trash"></i> Delete
                                                property</a>
                                            @else

                                            @endif
                                        </div>
                                    </div>
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
@stop
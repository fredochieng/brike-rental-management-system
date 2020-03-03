@extends('layout.master')
@section('title', 'Property Categories')
@section('parentPageTitle', 'Property')


@section('content')

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <a href="#addCategoryModal" data-toggle="modal" data-target="#addCategoryModal"
                    class="btn btn-info pull-right"><i class="icon-plus"></i> ADD CATEGORY
                </a>
            </div>
            <div class="body">
                <div class="table-responsive" style="font-size:13px">
                    <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($property_categories as $count => $item)
                            <tr>
                                <td>{{ $count + 1}}</td>
                                <td>{{ $item->category_name }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>
                                    <a class="btn btn-primary btn-sm" title="Edit " href="#" data-toggle="modal"
                                        disabled data-target="#editCategoryModal_{{$item->category_id}}"
                                        data-backdrop="static" data-keyboard="false"><i class="icon-pencil"></i></a>

                                    @if ($item->prop_cat_id == '')
                                    <a class="btn btn-danger btn-sm" title="Delete " href="#" data-toggle="modal"
                                        disabled data-target="#deleteCategory_{{$item->category_id}}"
                                        data-backdrop="static" data-keyboard="false"><i class="icon-trash"></i></a>
                                    @else

                                    @endif
                                </td>
                            </tr>
                            @include('property.categories.modals.modal-edit-category')
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('property.categories.modals.modal-add-category')
@stop
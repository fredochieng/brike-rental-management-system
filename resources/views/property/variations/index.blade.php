@extends('layout.master')
@section('title', 'Property Variations')
@section('parentPageTitle', 'Property')


@section('content')

<div class="row clearfix">

    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <a href="#addVariationModal" data-toggle="modal" data-target="#addVariationModal"
                    class="btn btn-info pull-right"><i class="icon-plus"></i> ADD VARIATION
                </a>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Variation Name</th>
                                <th>Variation Values</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($property_variations as $count => $item)
                            <tr>
                                <td>{{ $count + 1 }}</td>
                                <td>{{ $item->temp_name }}</td>
                                <td>{{ $item->name}}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>
                                    <a class="btn btn-primary btn-sm" title="Edit " href="#" data-toggle="modal"
                                        disabled data-target="#editVariationModal_{{$item->variation_id}}"
                                        data-backdrop="static" data-keyboard="false"><i class="icon-eye"></i></a>

                                    @if ($item->prop_var_id == '')
                                    <a class="btn btn-danger btn-sm" title="Delete " href="#" data-toggle="modal"
                                        disabled data-target="#deleteVariation_{{$item->variation_id}}"
                                        data-backdrop="static" data-keyboard="false"><i class="icon-trash"></i></a>
                                    @else

                                    @endif
                                </td>
                            </tr>
                            @include('property.variations.modals.modal-edit-variation')
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('property.variations.modals.modal-add-variation')
@stop
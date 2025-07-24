@extends('layouts.dashboard')
@section('title', __('supplier.title'))

@section('main')
    <div class="page-header">
        <div class="add-item d-flex">
            <div class="page-title">
                <h4>{{ __('supplier.heading') }}</h4>
                <h6>{{ __('supplier.subheading') }}</h6>
            </div>
        </div>
        <ul class="table-top-head">
            <li class="me-2">
                <a class="reload-btn" data-bs-toggle="tooltip" title="Refresh"><i class="ti ti-refresh"></i></a>
            </li>
            <li class="me-2">
                <a data-bs-toggle="tooltip" title="Collapse" id="collapse-header"><i class="ti ti-chevron-up"></i></a>
            </li>
        </ul>
        <div class="page-btn">
            <a href="#" id="button" class="btn btn-primary add-resource" data-bs-toggle="modal"
                data-bs-target="#add-supplier">
                <i class="ti ti-circle-plus me-1"></i>{{ __('supplier.add_button') }}
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
            <div class="search-set">
                <div class="search-input">
                    <span class="btn-searchset"><i class="ti ti-search fs-14 feather-search"></i></span>
                </div>
            </div>
        </div>


        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table datatable">
                    <thead class="thead-light">
                        <tr>
                            <th class="no-sort">
                                <label class="checkboxs">
                                    <input type="checkbox" id="select-all">
                                    <span class="checkmarks"></span>
                                </label>
                            </th>
                            <th>{{ __('supplier.table.code') }}</th>
                            <th>{{ __('supplier.table.name') }}</th>
                            <th>{{ __('supplier.table.email') }}</th>
                            <th>{{ __('supplier.table.phone') }}</th>
                            <th>{{ __('supplier.table.city') }}</th>
                            <th class="no-sort">{{ __('supplier.table.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($suppliers as $supplier)
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td>{{ $supplier->code }}</td>
                                <td>{{ $supplier->name }}</td>
                                <td>{{ $supplier->email }}</td>
                                <td>{{ $supplier->phone }}</td>
                                <td>{{ $supplier->city }}</td>
                                <td class="action-table-data">
                                    <div class="edit-delete-action">
                                        <a data-id="{{ $supplier->id }}" data-name="{{ $supplier->name }}"
                                            data-email="{{ $supplier->email }}" data-phone="{{ $supplier->phone }}"
                                            data-city="{{ $supplier->city }}" data-address="{{ $supplier->address }}"
                                            data-image="{{ asset('storage/' . $supplier->image) }}"
                                            data-shipping-address="{{ $supplier->shipping_address }}"
                                            class="me-2 p-2 edit-page-btn" href="javascript:void(0);" data-bs-toggle="modal"
                                            data-bs-target="#add-supplier">
                                            <i data-feather="edit" class="feather-edit"></i>
                                        </a>
                                        <a class="pe-20 delete-page-btn" data-id="{{ $supplier->id }}"
                                            href="javascript:void(0);" data-bs-toggle="modal"
                                            data-bs-target="#delete-modal">
                                            <i data-feather="trash-2" class="feather-trash-2"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('name', 'supplier')

@extends('layouts.dashboard')
@section('title', __('brand.title'))

@section('main')
    <div class="page-header">
        <div class="add-item d-flex">
            <div class="page-title">
                <h4>{{ __('brand.heading') }}</h4>
                <h6>{{ __('brand.subheading') }}</h6>
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
            <a href="#" class="btn btn-primary add-resource" data-bs-toggle="modal" data-bs-target="#add-brand">
                <i class="ti ti-circle-plus me-1"></i>{{ __('brand.add_button') }}
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
                            <th>{{ __('brand.table.name') }}</th>
                            <th class="no-sort">{{ __('brand.table.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($brands as $brand)
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td>{{ $brand->name }}</td>
                                <td class="action-table-data">
                                    <div class="edit-delete-action">
                                        <a data-id="{{ $brand->id }}" data-name="{{ $brand->name }}"
                                            class="me-2 p-2 edit-page-btn" href="javascript:void(0);" data-bs-toggle="modal"
                                            data-bs-target="#add-brand">
                                            <i data-feather="edit" class="feather-edit"></i>
                                        </a>
                                        <a class="pe-20 delete-page-btn" data-id="{{ $brand->id }}"
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

@section('name', 'brand')

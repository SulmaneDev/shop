@extends('layouts.dashboard')
@section('title', __('purchase.title'))
@section('main')
    <div class="page-header transfer">
        <div class="add-item d-flex">
            <div class="page-title">
                <h4 class="fw-bold">{{ __('purchase.heading') }}</h4>
                <h6>{{ __('purchase.subheading') }}</h6>
            </div>
        </div>
        <ul class="table-top-head">
            <li>
                <a class="reload-btn" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="{{ __('purchase.buttons.refresh') }}">
                    <i data-feather="rotate-ccw" class="feather-rotate-ccw"></i>
                </a>
            </li>
            <li>
                <a data-bs-toggle="tooltip" data-bs-placement="top" title="{{ __('purchase.buttons.collapse') }}"
                    id="collapse-header">
                    <i class="ti ti-chevron-up"></i>
                </a>
            </li>
        </ul>
        <div class="d-flex purchase-pg-btn">
            <div class="page-btn">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-purchase">
                    <i data-feather="plus-circle" class="me-1"></i>{{ __('purchase.buttons.add') }}
                </a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
            <div class="search-set">
                <div class="search-input">
                    <span class="btn-searchset"><i class="ti ti-search fs-14 feather-search"></i></span>
                </div>
            </div>
            <div class="d-flex table-dropdown my-xl-auto right-content align-items-center flex-wrap row-gap-3">
                <div class="dropdown">
                    <a href="javascript:void(0);"
                        class="dropdown-toggle btn btn-white btn-md d-inline-flex align-items-center"
                        data-bs-toggle="dropdown">
                        {{ __('purchase.filter.payment_status') }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end p-3">
                        <li><a href="javascript:void(0);"
                                class="dropdown-item rounded-1">{{ __('purchase.filter.paid') }}</a></li>
                        <li><a href="javascript:void(0);"
                                class="dropdown-item rounded-1">{{ __('purchase.filter.unpaid') }}</a></li>
                        <li><a href="javascript:void(0);"
                                class="dropdown-item rounded-1">{{ __('purchase.filter.overdue') }}</a></li>
                    </ul>
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
                            <th>{{ __('purchase.table.supplier_name') }}</th>
                            <th>{{ __('purchase.table.reference') }}</th>
                            <th>{{ __('purchase.table.date') }}</th>
                            <th>{{ __('purchase.table.status') }}</th>
                            <th>{{ __('purchase.table.total') }}</th>
                            <th class="no-sort">{{ __('purchase.table.actions') }}</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($purchases as $purchase)
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox" value="{{ $purchase->id }}">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td>{{ optional($purchase->supplier)->name ?? optional($purchase->customer)->name }}</td>
                                <td>PT{{ str_pad($purchase->id, 3, '0', STR_PAD_LEFT) }}</td>
                                <td>{{ $purchase->created_at->format('d M Y') }}</td>
                                <td>
                                    <span class="badges status-badge fs-10 p-1 px-2 rounded-1">
                                        {{ __('purchase.status.received') }}
                                    </span>
                                </td>
                                <td>{{ number_format($purchase->price + $purchase->tax + $purchase->shipping, 2) }}</td>
                                <td class="action-table-data">
                                    <div class="edit-delete-action">


                                        <a data-user-id="{{ $purchase->user_id }}" data-price="{{ $purchase->price }}"
                                            data-tax="{{ $purchase->tax }}" data-shipping="{{ $purchase->shipping }}"
                                            data-id="{{$purchase->id}}"
                                            data-description="{{ $purchase->description }}"
                                            data-supplier-id="{{ $purchase->supplier_id }}"
                                            data-customer-id="{{ $purchase->customer_id }}"
                                            data-tax="{{ $purchase->order_tax }}"
                                            data-brand-id="{{ $purchase->brand_id }}"
                                            data-supplier-id="{{ $purchase->supplier_id }}"
                                            data-customer-id="{{ $purchase->customer_id }}"
                                            data-product-id="{{ $purchase->product_id }}" data-qty="{{ $purchase->qty }}"
                                            class="edit-page-btn" data-bs-toggle="modal" data-bs-target="#add-purchase">
                                            <i data-feather="edit" class="feather-edit"
                                                title="{{ __('purchase.action.edit') }}"></i>
                                        </a>
                                        <a class="p-2 delete-page-btn" data-id="{{$purchase->id}}" data-bs-toggle="modal" data-bs-target="#delete-modal"
                                            data-id="{{ $purchase->id }}">
                                            <i data-feather="trash-2" class="feather-trash-2"
                                                title="{{ __('purchase.action.delete') }}"></i>
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

@section('name', 'purchase')

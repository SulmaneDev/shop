```html
<div class="sidebar" id="sidebar">
    <div class="sidebar-logo active">
        <a href="index.html" class="logo logo-normal">
            <img src="/assets/img/logo.svg" alt="{{ __('sidebar.logo.alt') }}">
        </a>
        <a href="index.html" class="logo logo-white">
            <img src="/assets/img/logo-white.svg" alt="{{ __('sidebar.logo.alt') }}">
        </a>
        <a href="index.html" class="logo-small">
            <img src="/assets/img/logo-small.png" alt="{{ __('sidebar.logo.alt') }}">
        </a>
        <a id="toggle_btn" href="javascript:void(0);">
            <i data-feather="chevrons-left" class="feather-16"></i>
        </a>
    </div>
    <div class="modern-profile p-3 pb-0">
        <div class="text-center rounded bg-light p-3 mb-4 user-profile">
            <div class="avatar avatar-lg online mb-3">
                <img src="/assets/img/customer/customer15.jpg" alt="{{ __('sidebar.logo.alt') }}" class="img-fluid rounded-circle">
            </div>
            <h6 class="fs-14 fw-bold mb-1">Dummy</h6>
            <p class="fs-12 mb-0">{{ __('sidebar.profile.role') }}</p>
        </div>
        <div class="sidebar-nav mb-3">
            <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified bg-transparent" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active border-0" href="#">{{ __('sidebar.nav_tabs.menu') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link border-0" href="chat.html">{{ __('sidebar.nav_tabs.chats') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link border-0" href="email.html">{{ __('sidebar.nav_tabs.inbox') }}</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="sidebar-header p-3 pb-0 pt-2">
        <div class="text-center rounded bg-light p-2 mb-4 sidebar-profile d-flex align-items-center">
            <div class="avatar avatar-md online">
                <img src="/assets/img/customer/customer15.jpg" alt="{{ __('sidebar.logo.alt') }}" class="img-fluid rounded-circle">
            </div>
            <div class="text-start sidebar-profile-info ms-2">
                <h6 class="fs-14 fw-bold mb-1">Dummy</h6>
                <p class="fs-12">{{ __('sidebar.profile.role') }}</p>
            </div>
        </div>
        <div class="d-flex align-items-center justify-content-between menu-item mb-3">
            <div>
                <a href="index.html" class="btn btn-sm btn-icon bg-light">
                    <i class="ti ti-layout-grid-remove"></i>
                </a>
            </div>
            <div>
                <a href="chat.html" class="btn btn-sm btn-icon bg-light">
                    <i class="ti ti-brand-hipchat"></i>
                </a>
            </div>
            <div>
                <a href="email.html" class="btn btn-sm btn-icon bg-light position-relative">
                    <i class="ti ti-message"></i>
                </a>
            </div>
            <div class="notification-item">
                <a href="activities.html" class="btn btn-sm btn-icon bg-light position-relative">
                    <i class="ti ti-bell"></i>
                    <span class="notification-status-dot"></span>
                </a>
            </div>
            <div class="me-0">
                <a href="general-settings.html" class="btn btn-sm btn-icon bg-light">
                    <i class="ti ti-settings"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">{{ __('sidebar.menu.main.header') }}</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="subdrop active">
                                <i class="ti ti-layout-grid fs-16 me-2"></i>
                                <span>{{ __('sidebar.menu.main.dashboard.title') }}</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="index.html" class="active">{{ __('sidebar.menu.main.dashboard.admin_dashboard') }}</a></li>
                                <li><a href="admin-dashboard.html">{{ __('sidebar.menu.main.dashboard.admin_dashboard_2') }}</a></li>
                                <li><a href="sales-dashboard.html">{{ __('sidebar.menu.main.dashboard.sales_dashboard') }}</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-user-edit fs-16 me-2"></i>
                                <span>{{ __('sidebar.menu.main.super_admin.title') }}</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="dashboard.html">{{ __('sidebar.menu.main.super_admin.dashboard') }}</a></li>
                                <li><a href="companies.html">{{ __('sidebar.menu.main.super_admin.companies') }}</a></li>
                                <li><a href="subscription.html">{{ __('sidebar.menu.main.super_admin.subscriptions') }}</a></li>
                                <li><a href="packages.html">{{ __('sidebar.menu.main.super_admin.packages') }}</a></li>
                                <li><a href="domain.html">{{ __('sidebar.menu.main.super_admin.domain') }}</a></li>
                                <li><a href="purchase-transaction.html">{{ __('sidebar.menu.main.super_admin.purchase_transaction') }}</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-brand-apple-arcade fs-16 me-2"></i>
                                <span>{{ __('sidebar.menu.main.application.title') }}</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="chat.html">{{ __('sidebar.menu.main.application.chat') }}</a></li>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);">{{ __('sidebar.menu.main.application.call.title') }}<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="video-call.html">{{ __('sidebar.menu.main.application.call.video_call') }}</a></li>
                                        <li><a href="audio-call.html">{{ __('sidebar.menu.main.application.call.audio_call') }}</a></li>
                                        <li><a href="call-history.html">{{ __('sidebar.menu.main.application.call.call_history') }}</a></li>
                                    </ul>
                                </li>
                                <li><a href="calendar.html">{{ __('sidebar.menu.main.application.calendar') }}</a></li>
                                <li><a href="contacts.html">{{ __('sidebar.menu.main.application.contacts') }}</a></li>
                                <li><a href="email.html">{{ __('sidebar.menu.main.application.email') }}</a></li>
                                <li><a href="todo.html">{{ __('sidebar.menu.main.application.todo') }}</a></li>
                                <li><a href="notes.html">{{ __('sidebar.menu.main.application.notes') }}</a></li>
                                <li><a href="file-manager.html">{{ __('sidebar.menu.main.application.file_manager') }}</a></li>
                                <li><a href="projects.html">{{ __('sidebar.menu.main.application.projects') }}</a></li>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);">{{ __('sidebar.menu.main.application.ecommerce.title') }}<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="products.html">{{ __('sidebar.menu.main.application.ecommerce.products') }}</a></li>
                                        <li><a href="orders.html">{{ __('sidebar.menu.main.application.ecommerce.orders') }}</a></li>
                                        <li><a href="customers.html">{{ __('sidebar.menu.main.application.ecommerce.customers') }}</a></li>
                                        <li><a href="cart.html">{{ __('sidebar.menu.main.application.ecommerce.cart') }}</a></li>
                                        <li><a href="checkout.html">{{ __('sidebar.menu.main.application.ecommerce.checkout') }}</a></li>
                                        <li><a href="wishlist.html">{{ __('sidebar.menu.main.application.ecommerce.wishlist') }}</a></li>
                                        <li><a href="reviews.html">{{ __('sidebar.menu.main.application.ecommerce.reviews') }}</a></li>
                                    </ul>
                                </li>
                                <li><a href="social-feed.html">{{ __('sidebar.menu.main.application.social_feed') }}</a></li>
                                <li><a href="search-list.html">{{ __('sidebar.menu.main.application.search_list') }}</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-layout-sidebar-right-collapse fs-16 me-2"></i>
                                <span>{{ __('sidebar.menu.main.layouts.title') }}</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="layout-horizontal.html">{{ __('sidebar.menu.main.layouts.horizontal') }}</a></li>
                                <li><a href="layout-detached.html">{{ __('sidebar.menu.main.layouts.detached') }}</a></li>
                                <li><a href="layout-two-column.html">{{ __('sidebar.menu.main.layouts.two_column') }}</a></li>
                                <li><a href="layout-hovered.html">{{ __('sidebar.menu.main.layouts.hovered') }}</a></li>
                                <li><a href="layout-boxed.html">{{ __('sidebar.menu.main.layouts.boxed') }}</a></li>
                                <li><a href="layout-rtl.html">{{ __('sidebar.menu.main.layouts.rtl') }}</a></li>
                                <li><a href="layout-dark.html">{{ __('sidebar.menu.main.layouts.dark') }}</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">{{ __('sidebar.menu.inventory.header') }}</h6>
                    <ul>
                        <li><a href="product-list.html"><i data-feather="box"></i><span>{{ __('sidebar.menu.inventory.products') }}</span></a></li>
                        <li><a href="add-product.html"><i class="ti ti-table-plus fs-16 me-2"></i><span>{{ __('sidebar.menu.inventory.create_product') }}</span></a></li>
                        <li><a href="expired-products.html"><i class="ti ti-progress-alert fs-16 me-2"></i><span>{{ __('sidebar.menu.inventory.expired_products') }}</span></a></li>
                        <li><a href="low-stocks.html"><i class="ti ti-trending-up-2 fs-16 me-2"></i><span>{{ __('sidebar.menu.inventory.low_stocks') }}</span></a></li>
                        <li><a href="category-list.html"><i class="ti ti-list-details fs-16 me-2"></i><span>{{ __('sidebar.menu.inventory.category') }}</span></a></li>
                        <li><a href="sub-categories.html"><i class="ti ti-carousel-vertical fs-16 me-2"></i><span>{{ __('sidebar.menu.inventory.sub_category') }}</span></a></li>
                        <li><a href="brand-list.html"><i class="ti ti-triangles fs-16 me-2"></i><span>{{ __('sidebar.menu.inventory.brands') }}</span></a></li>
                        <li><a href="units.html"><i class="ti ti-brand-unity fs-16 me-2"></i><span>{{ __('sidebar.menu.inventory.units') }}</span></a></li>
                        <li><a href="varriant-attributes.html"><i class="ti ti-checklist fs-16 me-2"></i><span>{{ __('sidebar.menu.inventory.variant_attributes') }}</span></a></li>
                        <li><a href="warranty.html"><i class="ti ti-certificate fs-16 me-2"></i><span>{{ __('sidebar.menu.inventory.warranties') }}</span></a></li>
                        <li><a href="barcode.html"><i class="ti ti-barcode fs-16 me-2"></i><span>{{ __('sidebar.menu.inventory.print_barcode') }}</span></a></li>
                        <li><a href="qrcode.html"><i class="ti ti-qrcode fs-16 me-2"></i><span>{{ __('sidebar.menu.inventory.print_qr_code') }}</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">{{ __('sidebar.menu.stock.header') }}</h6>
                    <ul>
                        <li><a href="manage-stocks.html"><i class="ti ti-stack-3 fs-16 me-2"></i><span>{{ __('sidebar.menu.stock.manage_stock') }}</span></a></li>
                        <li><a href="stock-adjustment.html"><i class="ti ti-stairs-up fs-16 me-2"></i><span>{{ __('sidebar.menu.stock.stock_adjustment') }}</span></a></li>
                        <li><a href="stock-transfer.html"><i class="ti ti-stack-pop fs-16 me-2"></i><span>{{ __('sidebar.menu.stock.stock_transfer') }}</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">{{ __('sidebar.menu.sales.header') }}</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-layout-grid fs-16 me-2"></i>
                                <span>{{ __('sidebar.menu.sales.sales.title') }}</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="online-orders.html">{{ __('sidebar.menu.sales.sales.online_orders') }}</a></li>
                                <li><a href="pos-orders.html">{{ __('sidebar.menu.sales.sales.pos_orders') }}</a></li>
                            </ul>
                        </li>
                        <li><a href="invoice.html"><i class="ti ti-file-invoice fs-16 me-2"></i><span>{{ __('sidebar.menu.sales.invoices') }}</span></a></li>
                        <li><a href="sales-returns.html"><i class="ti ti-receipt-refund fs-16 me-2"></i><span>{{ __('sidebar.menu.sales.sales_return') }}</span></a></li>
                        <li><a href="quotation-list.html"><i class="ti ti-files fs-16 me-2"></i><span>{{ __('sidebar.menu.sales.quotation') }}</span></a></li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-device-laptop fs-16 me-2"></i>
                                <span>{{ __('sidebar.menu.sales.pos.title') }}</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="pos.html">{{ __('sidebar.menu.sales.pos.pos_1') }}</a></li>
                                <li><a href="pos-2.html">{{ __('sidebar.menu.sales.pos.pos_2') }}</a></li>
                                <li><a href="pos-3.html">{{ __('sidebar.menu.sales.pos.pos_3') }}</a></li>
                                <li><a href="pos-4.html">{{ __('sidebar.menu.sales.pos.pos_4') }}</a></li>
                                <li><a href="pos-5.html">{{ __('sidebar.menu.sales.pos.pos_5') }}</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">{{ __('sidebar.menu.promo.header') }}</h6>
                    <ul>
                        <li><a href="coupons.html"><i class="ti ti-ticket fs-16 me-2"></i><span>{{ __('sidebar.menu.promo.coupons') }}</span></a></li>
                        <li><a href="gift-cards.html"><i class="ti ti-cards fs-16 me-2"></i><span>{{ __('sidebar.menu.promo.gift_cards') }}</span></a></li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-file-percent fs-16 me-2"></i>
                                <span>{{ __('sidebar.menu.promo.discount.title') }}</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="discount-plan.html">{{ __('sidebar.menu.promo.discount.discount_plan') }}</a></li>
                                <li><a href="discount.html">{{ __('sidebar.menu.promo.discount.discount') }}</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">{{ __('sidebar.menu.purchases.header') }}</h6>
                    <ul>
                        <li><a href="purchase-list.html"><i class="ti ti-shopping-bag fs-16 me-2"></i><span>{{ __('sidebar.menu.purchases.purchases') }}</span></a></li>
                        <li><a href="purchase-order-report.html"><i class="ti ti-file-unknown fs-16 me-2"></i><span>{{ __('sidebar.menu.purchases.purchase_order') }}</span></a></li>
                        <li><a href="purchase-returns.html"><i class="ti ti-file-upload fs-16 me-2"></i><span>{{ __('sidebar.menu.purchases.purchase_return') }}</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">{{ __('sidebar.menu.finance_accounts.header') }}</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-file-stack fs-16 me-2"></i>
                                <span>{{ __('sidebar.menu.finance_accounts.expenses.title') }}</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="expense-list.html">{{ __('sidebar.menu.finance_accounts.expenses.expenses') }}</a></li>
                                <li><a href="expense-category.html">{{ __('sidebar.menu.finance_accounts.expenses.expense_category') }}</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-file-pencil fs-16 me-2"></i>
                                <span>{{ __('sidebar.menu.finance_accounts.income.title') }}</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="income.html">{{ __('sidebar.menu.finance_accounts.income.income') }}</a></li>
                                <li><a href="income-category.html">{{ __('sidebar.menu.finance_accounts.income.income_category') }}</a></li>
                            </ul>
                        </li>
                        <li><a href="account-list.html"><i class="ti ti-building-bank fs-16 me-2"></i><span>{{ __('sidebar.menu.finance_accounts.bank_accounts') }}</span></a></li>
                        <li><a href="money-transfer.html"><i class="ti ti-moneybag fs-16 me-2"></i><span>{{ __('sidebar.menu.finance_accounts.money_transfer') }}</span></a></li>
                        <li><a href="balance-sheet.html"><i class="ti ti-report-money fs-16 me-2"></i><span>{{ __('sidebar.menu.finance_accounts.balance_sheet') }}</span></a></li>
                        <li><a href="trial-balance.html"><i class="ti ti-alert-circle fs-16 me-2"></i><span>{{ __('sidebar.menu.finance_accounts.trial_balance') }}</span></a></li>
                        <li><a href="cash-flow.html"><i class="ti ti-zoom-money fs-16 me-2"></i><span>{{ __('sidebar.menu.finance_accounts.cash_flow') }}</span></a></li>
                        <li><a href="account-statement.html"><i class="ti ti-file-infinity fs-16 me-2"></i><span>{{ __('sidebar.menu.finance_accounts.account_statement') }}</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">{{ __('sidebar.menu.peoples.header') }}</h6>
                    <ul>
                        <li><a href="customers.html"><i class="ti ti-users-group fs-16 me-2"></i><span>{{ __('sidebar.menu.peoples.customers') }}</span></a></li>
                        <li><a href="billers.html"><i class="ti ti-user-up fs-16 me-2"></i><span>{{ __('sidebar.menu.peoples.billers') }}</span></a></li>
                        <li><a href="suppliers.html"><i class="ti ti-user-dollar fs-16 me-2"></i><span>{{ __('sidebar.menu.peoples.suppliers') }}</span></a></li>
                        <li><a href="store-list.html"><i class="ti ti-home-bolt fs-16 me-2"></i><span>{{ __('sidebar.menu.peoples.stores') }}</span></a></li>
                        <li><a href="warehouse.html"><i class="ti ti-archive fs-16 me-2"></i><span>{{ __('sidebar.menu.peoples.warehouses') }}</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">{{ __('sidebar.menu.hrm.header') }}</h6>
                    <ul>
                        <li><a href="employees-grid.html"><i class="ti ti-user fs-16 me-2"></i><span>{{ __('sidebar.menu.hrm.employees') }}</span></a></li>
                        <li><a href="department-grid.html"><i class="ti ti-compass fs-16 me-2"></i><span>{{ __('sidebar.menu.hrm.departments') }}</span></a></li>
                        <li><a href="designation.html"><i class="ti ti-git-merge fs-16 me-2"></i><span>{{ __('sidebar.menu.hrm.designation') }}</span></a></li>
                        <li><a href="shift.html"><i class="ti ti-arrows-shuffle fs-16 me-2"></i><span>{{ __('sidebar.menu.hrm.shifts') }}</span></a></li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-user-cog fs-16 me-2"></i>
                                <span>{{ __('sidebar.menu.hrm.attendance.title') }}</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="attendance-employee.html">{{ __('sidebar.menu.hrm.attendance.employee') }}</a></li>
                                <li><a href="attendance-admin.html">{{ __('sidebar.menu.hrm.attendance.admin') }}</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-calendar fs-16 me-2"></i>
                                <span>{{ __('sidebar.menu.hrm.leaves.title') }}</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="leaves-admin.html">{{ __('sidebar.menu.hrm.leaves.admin_leaves') }}</a></li>
                                <li><a href="leaves-employee.html">{{ __('sidebar.menu.hrm.leaves.employee_leaves') }}</a></li>
                                <li><a href="leave-types.html">{{ __('sidebar.menu.hrm.leaves.leave_types') }}</a></li>
                            </ul>
                        </li>
                        <li><a href="holidays.html"><i class="ti ti-calendar-share fs-16 me-2"></i><span>{{ __('sidebar.menu.hrm.holidays') }}</span></a></li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-file-dollar fs-16 me-2"></i>
                                <span>{{ __('sidebar.menu.hrm.payroll.title') }}</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="employee-salary.html">{{ __('sidebar.menu.hrm.payroll.employee_salary') }}</a></li>
                                <li><a href="payslip.html">{{ __('sidebar.menu.hrm.payroll.payslip') }}</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">{{ __('sidebar.menu.reports.header') }}</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-chart-bar fs-16 me-2"></i>
                                <span>{{ __('sidebar.menu.reports.sales_report.title') }}</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="sales-report.html">{{ __('sidebar.menu.reports.sales_report.sales_report') }}</a></li>
                                <li><a href="best-seller.html">{{ __('sidebar.menu.reports.sales_report.best_seller') }}</a></li>
                            </ul>
                        </li>
                        <li><a href="purchase-report.html"><i class="ti ti-chart-pie-2 fs-16 me-2"></i><span>{{ __('sidebar.menu.reports.purchase_report') }}</span></a></li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-triangle-inverted fs-16 me-2"></i>
                                <span>{{ __('sidebar.menu.reports.inventory_report.title') }}</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="inventory-report.html">{{ __('sidebar.menu.reports.inventory_report.inventory_report') }}</a></li>
                                <li><a href="stock-history.html">{{ __('sidebar.menu.reports.inventory_report.stock_history') }}</a></li>
                                <li><a href="sold-stock.html">{{ __('sidebar.menu.reports.inventory_report.sold_stock') }}</a></li>
                            </ul>
                        </li>
                        <li><a href="invoice-report.html"><i class="ti ti-businessplan fs-16 me-2"></i><span>{{ __('sidebar.menu.reports.invoice_report') }}</span></a></li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-user-star fs-16 me-2"></i>
                                <span>{{ __('sidebar.menu.reports.supplier_report.title') }}</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="supplier-report.html">{{ __('sidebar.menu.reports.supplier_report.supplier_report') }}</a></li>
                                <li><a href="supplier-due-report.html">{{ __('sidebar.menu.reports.supplier_report.supplier_due_report') }}</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-report fs-16 me-2"></i>
                                <span>{{ __('sidebar.menu.reports.customer_report.title') }}</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="customer-report.html">{{ __('sidebar.menu.reports.customer_report.customer_report') }}</a></li>
                                <li><a href="customer-due-report.html">{{ __('sidebar.menu.reports.customer_report.customer_due_report') }}</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-report-analytics fs-16 me-2"></i>
                                <span>{{ __('sidebar.menu.reports.product_report.title') }}</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="product-report.html">{{ __('sidebar.menu.reports.product_report.product_report') }}</a></li>
                                <li><a href="product-expiry-report.html">{{ __('sidebar.menu.reports.product_report.product_expiry_report') }}</a></li>
                                <li><a href="product-quantity-alert.html">{{ __('sidebar.menu.reports.product_report.product_quantity_alert') }}</a></li>
                            </ul>
                        </li>
                        <li><a href="expense-report.html"><i class="ti ti-file-vector fs-16 me-2"></i><span>{{ __('sidebar.menu.reports.expense_report') }}</span></a></li>
                        <li><a href="income-report.html"><i class="ti ti-chart-ppf fs-16 me-2"></i><span>{{ __('sidebar.menu.reports.income_report') }}</span></a></li>
                        <li><a href="tax-reports.html"><i class="ti ti-chart-dots-2 fs-16 me-2"></i><span>{{ __('sidebar.menu.reports.tax_report') }}</span></a></li>
                        <li><a href="profit-and-loss.html"><i class="ti ti-chart-donut fs-16 me-2"></i><span>{{ __('sidebar.menu.reports.profit_and_loss') }}</span></a></li>
                        <li><a href="annual-report.html"><i class="ti ti-report-search fs-16 me-2"></i><span>{{ __('sidebar.menu.reports.annual_report') }}</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">{{ __('sidebar.menu.content_cms.header') }}</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-page-break fs-16 me-2"></i>
                                <span>{{ __('sidebar.menu.content_cms.pages.title') }}</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="pages.html">{{ __('sidebar.menu.content_cms.pages.pages') }}</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-wallpaper fs-16 me-2"></i>
                                <span>{{ __('sidebar.menu.content_cms.blog.title') }}</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="all-blog.html">{{ __('sidebar.menu.content_cms.blog.all_blog') }}</a></li>
                                <li><a href="blog-tag.html">{{ __('sidebar.menu.content_cms.blog.blog_tags') }}</a></li>
                                <li><a href="blog-categories.html">{{ __('sidebar.menu.content_cms.blog.blog_categories') }}</a></li>
                                <li><a href="blog-comments.html">{{ __('sidebar.menu.content_cms.blog.blog_comments') }}</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-map-pin fs-16 me-2"></i>
                                <span>{{ __('sidebar.menu.content_cms.location.title') }}</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="countries.html">{{ __('sidebar.menu.content_cms.location.countries') }}</a></li>
                                <li><a href="states.html">{{ __('sidebar.menu.content_cms.location.states') }}</a></li>
                                <li><a href="cities.html">{{ __('sidebar.menu.content_cms.location.cities') }}</a></li>
                            </ul>
                        </li>
                        <li><a href="testimonials.html"><i class="ti ti-star fs-16 me-2"></i><span>{{ __('sidebar.menu.content_cms.testimonials') }}</span></a></li>
                        <li><a href="faq.html"><i class="ti ti-help-circle fs-16 me-2"></i><span>{{ __('sidebar.menu.content_cms.faq') }}</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">{{ __('sidebar.menu.user_management.header') }}</h6>
                    <ul>
                        <li><a href="users.html"><i class="ti ti-shield-up fs-16 me-2"></i><span>{{ __('sidebar.menu.user_management.users') }}</span></a></li>
                        <li><a href="roles-permissions.html"><i class="ti ti-jump-rope fs-16 me-2"></i><span>{{ __('sidebar.menu.user_management.roles_permissions') }}</span></a></li>
                        <li><a href="delete-account.html"><i class="ti ti-trash-x fs-16 me-2"></i><span>{{ __('sidebar.menu.user_management.delete_account_request') }}</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">{{ __('sidebar.menu.pages.header') }}</h6>
                    <ul>
                        <li><a href="profile.html"><i class="ti ti-user-circle fs-16 me-2"></i><span>{{ __('sidebar.menu.pages.profile') }}</span></a></li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-shield fs-16 me-2"></i>
                                <span>{{ __('sidebar.menu.pages.authentication.title') }}</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);">{{ __('sidebar.menu.pages.authentication.login.title') }}<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="signin.html">{{ __('sidebar.menu.pages.authentication.login.cover') }}</a></li>
                                        <li><a href="signin-2.html">{{ __('sidebar.menu.pages.authentication.login.illustration') }}</a></li>
                                        <li><a href="signin-3.html">{{ __('sidebar.menu.pages.authentication.login.basic') }}</a></li>
                                    </ul>
                                </li>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);">{{ __('sidebar.menu.pages.authentication.register.title') }}<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="register.html">{{ __('sidebar.menu.pages.authentication.register.cover') }}</a></li>
                                        <li><a href="register-2.html">{{ __('sidebar.menu.pages.authentication.register.illustration') }}</a></li>
                                        <li><a href="register-3.html">{{ __('sidebar.menu.pages.authentication.register.basic') }}</a></li>
                                    </ul>
                                </li>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);">{{ __('sidebar.menu.pages.authentication.forgot_password.title') }}<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="forgot-password.html">{{ __('sidebar.menu.pages.authentication.forgot_password.cover') }}</a></li>
                                        <li><a href="forgot-password-2.html">{{ __('sidebar.menu.pages.authentication.forgot_password.illustration') }}</a></li>
                                        <li><a href="forgot-password-3.html">{{ __('sidebar.menu.pages.authentication.forgot_password.basic') }}</a></li>
                                    </ul>
                                </li>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);">{{ __('sidebar.menu.pages.authentication.reset_password.title') }}<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="reset-password.html">{{ __('sidebar.menu.pages.authentication.reset_password.cover') }}</a></li>
                                        <li><a href="reset-password-2.html">{{ __('sidebar.menu.pages.authentication.reset_password.illustration') }}</a></li>
                                        <li><a href="reset-password-3.html">{{ __('sidebar.menu.pages.authentication.reset_password.basic') }}</a></li>
                                    </ul>
                                </li>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);">{{ __('sidebar.menu.pages.authentication.email_verification.title') }}<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="email-verification.html">{{ __('sidebar.menu.pages.authentication.email_verification.cover') }}</a></li>
                                        <li><a href="email-verification-2.html">{{ __('sidebar.menu.pages.authentication.email_verification.illustration') }}</a></li>
                                        <li><a href="email-verification-3.html">{{ __('sidebar.menu.pages.authentication.email_verification.basic') }}</a></li>
                                    </ul>
                                </li>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);">{{ __('sidebar.menu.pages.authentication.two_step_verification.title') }}<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="two-step-verification.html">{{ __('sidebar.menu.pages.authentication.two_step_verification.cover') }}</a></li>
                                        <li><a href="two-step-verification-2.html">{{ __('sidebar.menu.pages.authentication.two_step_verification.illustration') }}</a></li>
                                        <li><a href="two-step-verification-3.html">{{ __('sidebar.menu.pages.authentication.two_step_verification.basic') }}</a></li>
                                    </ul>
                                </li>
                                <li><a href="lock-screen.html">{{ __('sidebar.menu.pages.authentication.lock_screen') }}</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-file-x fs-16 me-2"></i>
                                <span>{{ __('sidebar.menu.pages.error_pages.title') }}</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="error-404.html">{{ __('sidebar.menu.pages.error_pages.error_404') }}</a></li>
                                <li><a href="error-500.html">{{ __('sidebar.menu.pages.error_pages.error_500') }}</a></li>
                            </ul>
                        </li>
                        <li><a href="blank-page.html"><i class="ti ti-file fs-16 me-2"></i><span>{{ __('sidebar.menu.pages.blank_page') }}</span></a></li>
                        <li><a href="pricing.html"><i class="ti ti-currency-dollar fs-16 me-2"></i><span>{{ __('sidebar.menu.pages.pricing') }}</span></a></li>
                        <li><a href="coming-soon.html"><i class="ti ti-send fs-16 me-2"></i><span>{{ __('sidebar.menu.pages.coming_soon') }}</span></a></li>
                        <li><a href="under-maintenance.html"><i class="ti ti-alert-triangle fs-16 me-2"></i><span>{{ __('sidebar.menu.pages.under_maintenance') }}</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">{{ __('sidebar.menu.settings.header') }}</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-settings fs-16 me-2"></i>
                                <span>{{ __('sidebar.menu.settings.general_settings.title') }}</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="general-settings.html">{{ __('sidebar.menu.settings.general_settings.profile') }}</a></li>
                                <li><a href="security-settings.html">{{ __('sidebar.menu.settings.general_settings.security') }}</a></li>
                                <li><a href="notification.html">{{ __('sidebar.menu.settings.general_settings.notifications') }}</a></li>
                                <li><a href="connected-apps.html">{{ __('sidebar.menu.settings.general_settings.connected_apps') }}</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-world fs-16 me-2"></i>
                                <span>{{ __('sidebar.menu.settings.website_settings.title') }}</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="system-settings.html">{{ __('sidebar.menu.settings.website_settings.system_settings') }}</a></li>
                                <li><a href="company-settings.html">{{ __('sidebar.menu.settings.website_settings.company_settings') }}</a></li>
                                <li><a href="localization-settings.html">{{ __('sidebar.menu.settings.website_settings.localization') }}</a></li>
                                <li><a href="prefixes.html">{{ __('sidebar.menu.settings.website_settings.prefixes') }}</a></li>
                                <li><a href="preference.html">{{ __('sidebar.menu.settings.website_settings.preference') }}</a></li>
                                <li><a href="appearance.html">{{ __('sidebar.menu.settings.website_settings.appearance') }}</a></li>
                                <li><a href="social-authentication.html">{{ __('sidebar.menu.settings.website_settings.social_authentication') }}</a></li>
                                <li><a href="language-settings.html">{{ __('sidebar.menu.settings.website_settings.language') }}</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-device-mobile fs-16 me-2"></i>
                                <span>{{ __('sidebar.menu.settings.app_settings.title') }}</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);">{{ __('sidebar.menu.settings.app_settings.invoice.title') }}<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="invoice-settings.html">{{ __('sidebar.menu.settings.app_settings.invoice.invoice_settings') }}</a></li>
                                        <li><a href="invoice-template.html">{{ __('sidebar.menu.settings.app_settings.invoice.invoice_template') }}</a></li>
                                    </ul>
                                </li>
                                <li><a href="printer-settings.html">{{ __('sidebar.menu.settings.app_settings.printer') }}</a></li>
                                <li><a href="pos-settings.html">{{ __('sidebar.menu.settings.app_settings.pos') }}</a></li>
                                <li><a href="custom-fields.html">{{ __('sidebar.menu.settings.app_settings.custom_fields') }}</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-device-desktop fs-16 me-2"></i>
                                <span>{{ __('sidebar.menu.settings.system_settings.title') }}</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);">{{ __('sidebar.menu.settings.system_settings.email.title') }}<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="email-settings.html">{{ __('sidebar.menu.settings.system_settings.email.email_settings') }}</a></li>
                                        <li><a href="email-template.html">{{ __('sidebar.menu.settings.system_settings.email.email_template') }}</a></li>
                                    </ul>
                                </li>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);">{{ __('sidebar.menu.settings.system_settings.sms.title') }}<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="sms-settings.html">{{ __('sidebar.menu.settings.system_settings.sms.sms_settings') }}</a></li>
                                        <li><a href="sms-template.html">{{ __('sidebar.menu.settings.system_settings.sms.sms_template') }}</a></li>
                                    </ul>
                                </li>
                                <li><a href="otp-settings.html">{{ __('sidebar.menu.settings.system_settings.otp') }}</a></li>
                                <li><a href="gdpr-settings.html">{{ __('sidebar.menu.settings.system_settings.gdpr_cookies') }}</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-settings-dollar fs-16 me-2"></i>
                                <span>{{ __('sidebar.menu.settings.financial_settings.title') }}</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="payment-gateway-settings.html">{{ __('sidebar.menu.settings.financial_settings.payment_gateway') }}</a></li>
                                <li><a href="bank-settings-grid.html">{{ __('sidebar.menu.settings.financial_settings.bank_accounts') }}</a></li>
                                <li><a href="tax-rates.html">{{ __('sidebar.menu.settings.financial_settings.tax_rates') }}</a></li>
                                <li><a href="currency-settings.html">{{ __('sidebar.menu.settings.financial_settings.currencies') }}</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-settings-2 fs-16 me-2"></i>
                                <span>{{ __('sidebar.menu.settings.other_settings.title') }}</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="storage-settings.html">{{ __('sidebar.menu.settings.other_settings.storage') }}</a></li>
                                <li><a href="ban-ip-address.html">{{ __('sidebar.menu.settings.other_settings.ban_ip_address') }}</a></li>
                            </ul>
                        </li>
                        <li><a href="signin.html"><i class="ti ti-logout fs-16 me-2"></i><span>{{ __('sidebar.menu.settings.logout') }}</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">{{ __('sidebar.menu.ui_interface.header') }}</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-vector-bezier fs-16 me-2"></i>
                                <span>{{ __('sidebar.menu.ui_interface.base_ui.title') }}</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="ui-alerts.html">{{ __('sidebar.menu.ui_interface.base_ui.alerts') }}</a></li>
                                <li><a href="ui-accordion.html">{{ __('sidebar.menu.ui_interface.base_ui.accordion') }}</a></li>
                                <li><a href="ui-avatar.html">{{ __('sidebar.menu.ui_interface.base_ui.avatar') }}</a></li>
                                <li><a href="ui-badges.html">{{ __('sidebar.menu.ui_interface.base_ui.badges') }}</a></li>
                                <li><a href="ui-borders.html">{{ __('sidebar.menu.ui_interface.base_ui.border') }}</a></li>
                                <li><a href="ui-buttons.html">{{ __('sidebar.menu.ui_interface.base_ui.buttons') }}</a></li>
                                <li><a href="ui-buttons-group.html">{{ __('sidebar.menu.ui_interface.base_ui.button_group') }}</a></li>
                                <li><a href="ui-breadcrumb.html">{{ __('sidebar.menu.ui_interface.base_ui.breadcrumb') }}</a></li>
                                <li><a href="ui-cards.html">{{ __('sidebar.menu.ui_interface.base_ui.card') }}</a></li>
                                <li><a href="ui-carousel.html">{{ __('sidebar.menu.ui_interface.base_ui.carousel') }}</a></li>
                                <li><a href="ui-colors.html">{{ __('sidebar.menu.ui_interface.base_ui.colors') }}</a></li>
                                <li><a href="ui-dropdowns.html">{{ __('sidebar.menu.ui_interface.base_ui.dropdowns') }}</a></li>
                                <li><a href="ui-grid.html">{{ __('sidebar.menu.ui_interface.base_ui.grid') }}</a></li>
                                <li><a href="ui-images.html">{{ __('sidebar.menu.ui_interface.base_ui.images') }}</a></li>
                                <li><a href="ui-lightbox.html">{{ __('sidebar.menu.ui_interface.base_ui.lightbox') }}</a></li>
                                <li><a href="ui-media.html">{{ __('sidebar.menu.ui_interface.base_ui.media') }}</a></li>
                                <li><a href="ui-modals.html">{{ __('sidebar.menu.ui_interface.base_ui.modals') }}</a></li>
                                <li><a href="ui-offcanvas.html">{{ __('sidebar.menu.ui_interface.base_ui.offcanvas') }}</a></li>
                                <li><a href="ui-pagination.html">{{ __('sidebar.menu.ui_interface.base_ui.pagination') }}</a></li>
                                <li><a href="ui-popovers.html">{{ __('sidebar.menu.ui_interface.base_ui.popovers') }}</a></li>
                                <li><a href="ui-progress.html">{{ __('sidebar.menu.ui_interface.base_ui.progress') }}</a></li>
                                <li><a href="ui-placeholders.html">{{ __('sidebar.menu.ui_interface.base_ui.placeholders') }}</a></li>
                                <li><a href="ui-rangeslider.html">{{ __('sidebar.menu.ui_interface.base_ui.range_slider') }}</a></li>
                                <li><a href="ui-spinner.html">{{ __('sidebar.menu.ui_interface.base_ui.spinner') }}</a></li>
                                <li><a href="ui-sweetalerts.html">{{ __('sidebar.menu.ui_interface.base_ui.sweet_alerts') }}</a></li>
                                <li><a href="ui-nav-tabs.html">{{ __('sidebar.menu.ui_interface.base_ui.tabs') }}</a></li>
                                <li><a href="ui-toasts.html">{{ __('sidebar.menu.ui_interface.base_ui.toasts') }}</a></li>
                                <li><a href="ui-tooltips.html">{{ __('sidebar.menu.ui_interface.base_ui.tooltips') }}</a></li>
                                <li><a href="ui-typography.html">{{ __('sidebar.menu.ui_interface.base_ui.typography') }}</a></li>
                                <li><a href="ui-video.html">{{ __('sidebar.menu.ui_interface.base_ui.video') }}</a></li>
                                <li><a href="ui-sortable.html">{{ __('sidebar.menu.ui_interface.base_ui.sortable') }}</a></li>
                                <li><a href="ui-swiperjs.html">{{ __('sidebar.menu.ui_interface.base_ui.swiperjs') }}</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i data-feather="layers"></i>
                                <span>{{ __('sidebar.menu.ui_interface.advanced_ui.title') }}</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="ui-ribbon.html">{{ __('sidebar.menu.ui_interface.advanced_ui.ribbon') }}</a></li>
                                <li><a href="ui-clipboard.html">{{ __('sidebar.menu.ui_interface.advanced_ui.clipboard') }}</a></li>
                                <li><a href="ui-drag-drop.html">{{ __('sidebar.menu.ui_interface.advanced_ui.drag_drop') }}</a></li>
                                <li><a href="ui-rangeslider.html">{{ __('sidebar.menu.ui_interface.advanced_ui.range_slider') }}</a></li>
                                <li><a href="ui-rating.html">{{ __('sidebar.menu.ui_interface.advanced_ui.rating') }}</a></li>
                                <li><a href="ui-text-editor.html">{{ __('sidebar.menu.ui_interface.advanced_ui.text_editor') }}</a></li>
                                <li><a href="ui-counter.html">{{ __('sidebar.menu.ui_interface.advanced_ui.counter') }}</a></li>
                                <li><a href="ui-scrollbar.html">{{ __('sidebar.menu.ui_interface.advanced_ui.scrollbar') }}</a></li>
                                <li><a href="ui-stickynote.html">{{ __('sidebar.menu.ui_interface.advanced_ui.sticky_note') }}</a></li>
                                <li><a href="ui-timeline.html">{{ __('sidebar.menu.ui_interface.advanced_ui.timeline') }}</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-chart-infographic fs-16 me-2"></i>
                                <span>{{ __('sidebar.menu.ui_interface.charts.title') }}</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="chart-apex.html">{{ __('sidebar.menu.ui_interface.charts.apex_charts') }}</a></li>
                                <li><a href="chart-c3.html">{{ __('sidebar.menu.ui_interface.charts.chart_c3') }}</a></li>
                                <li><a href="chart-js.html">{{ __('sidebar.menu.ui_interface.charts.chart_js') }}</a></li>
                                <li><a href="chart-morris.html">{{ __('sidebar.menu.ui_interface.charts.morris_charts') }}</a></li>
                                <li><a href="chart-flot.html">{{ __('sidebar.menu.ui_interface.charts.flot_charts') }}</a></li>
                                <li><a href="chart-peity.html">{{ __('sidebar.menu.ui_interface.charts.peity_charts') }}</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-icons fs-16 me-2"></i>
                                <span>{{ __('sidebar.menu.ui_interface.icons.title') }}</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="icon-fontawesome.html">{{ __('sidebar.menu.ui_interface.icons.fontawesome') }}</a></li>
                                <li><a href="icon-feather.html">{{ __('sidebar.menu.ui_interface.icons.feather') }}</a></li>
                                <li><a href="icon-ionic.html">{{ __('sidebar.menu.ui_interface.icons.ionic') }}</a></li>
                                <li><a href="icon-material.html">{{ __('sidebar.menu.ui_interface.icons.material') }}</a></li>
                                <li><a href="icon-pe7.html">{{ __('sidebar.menu.ui_interface.icons.pe7') }}</a></li>
                                <li><a href="icon-simpleline.html">{{ __('sidebar.menu.ui_interface.icons.simpleline') }}</a></li>
                                <li><a href="icon-themify.html">{{ __('sidebar.menu.ui_interface.icons.themify') }}</a></li>
                                <li><a href="icon-weather.html">{{ __('sidebar.menu.ui_interface.icons.weather') }}</a></li>
                                <li><a href="icon-typicon.html">{{ __('sidebar.menu.ui_interface.icons.typicon') }}</a></li>
                                <li><a href="icon-flag.html">{{ __('sidebar.menu.ui_interface.icons.flag') }}</a></li>
                                <li><a href="icon-tabler.html">{{ __('sidebar.menu.ui_interface.icons.tabler') }}</a></li>
                                <li><a href="icon-bootstrap.html">{{ __('sidebar.menu.ui_interface.icons.bootstrap') }}</a></li>
                                <li><a href="icon-remix.html">{{ __('sidebar.menu.ui_interface.icons.remix') }}</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-input-search fs-16 me-2"></i>
                                <span>{{ __('sidebar.menu.ui_interface.forms.title') }}</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);">{{ __('sidebar.menu.ui_interface.forms.form_elements.title') }}<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="form-basic-inputs.html">{{ __('sidebar.menu.ui_interface.forms.form_elements.basic_inputs') }}</a></li>
                                        <li><a href="form-checkbox-radios.html">{{ __('sidebar.menu.ui_interface.forms.form_elements.checkbox_radios') }}</a></li>
                                        <li><a href="form-input-groups.html">{{ __('sidebar.menu.ui_interface.forms.form_elements.input_groups') }}</a></li>
                                        <li><a href="form-grid-gutters.html">{{ __('sidebar.menu.ui_interface.forms.form_elements.grid_gutters') }}</a></li>
                                        <li><a href="form-select.html">{{ __('sidebar.menu.ui_interface.forms.form_elements.form_select') }}</a></li>
                                        <li><a href="form-mask.html">{{ __('sidebar.menu.ui_interface.forms.form_elements.input_masks') }}</a></li>
                                        <li><a href="form-fileupload.html">{{ __('sidebar.menu.ui_interface.forms.form_elements.file_uploads') }}</a></li>
                                    </ul>
                                </li>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);">{{ __('sidebar.menu.ui_interface.forms.layouts.title') }}<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="form-horizontal.html">{{ __('sidebar.menu.ui_interface.forms.layouts.horizontal_form') }}</a></li>
                                        <li><a href="form-vertical.html">{{ __('sidebar.menu.ui_interface.forms.layouts.vertical_form') }}</a></li>
                                        <li><a href="form-floating-labels.html">{{ __('sidebar.menu.ui_interface.forms.layouts.floating_labels') }}</a></li>
                                    </ul>
                                </li>
                                <li><a href="form-validation.html">{{ __('sidebar.menu.ui_interface.forms.form_validation') }}</a></li>
                                <li><a href="form-select2.html">{{ __('sidebar.menu.ui_interface.forms.select2') }}</a></li>
                                <li><a href="form-wizard.html">{{ __('sidebar.menu.ui_interface.forms.form_wizard') }}</a></li>
                                <li><a href="form-pickers.html">{{ __('sidebar.menu.ui_interface.forms.form_picker') }}</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-table fs-16 me-2"></i>
                                <span>{{ __('sidebar.menu.ui_interface.tables.title') }}</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="tables-basic.html">{{ __('sidebar.menu.ui_interface.tables.basic_tables') }}</a></li>
                                <li><a href="data-tables.html">{{ __('sidebar.menu.ui_interface.tables.data_table') }}</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-map-pin-pin fs-16 me-2"></i>
                                <span>{{ __('sidebar.menu.ui_interface.maps.title') }}</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="maps-vector.html">{{ __('sidebar.menu.ui_interface.maps.vector') }}</a></li>
                                <li><a href="maps-leaflet.html">{{ __('sidebar.menu.ui_interface.maps.leaflet') }}</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">{{ __('sidebar.menu.help.header') }}</h6>
                    <ul>
                        <li><a href="javascript:void(0);"><i class="ti ti-file-text fs-16 me-2"></i><span>{{ __('sidebar.menu.help.documentation') }}</span></a></li>
                        <li><a href="javascript:void(0);"><i class="ti ti-exchange fs-16 me-2"></i><span>{{ __('sidebar.menu.help.changelog') }}</span><span class="badge bg-primary badge-xs text-white fs-10 ms-2">v2.0.9</span></a></li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-menu-2 fs-16 me-2"></i>
                                <span>{{ __('sidebar.menu.help.multi_level.title') }}</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="javascript:void(0);">{{ __('sidebar.menu.help.multi_level.level_1_1') }}</a></li>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);">{{ __('sidebar.menu.help.multi_level.level_1_2.title') }}<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="javascript:void(0);">{{ __('sidebar.menu.help.multi_level.level_1_2.level_2_1') }}</a></li>
                                        <li class="submenu submenu-two submenu-three">
                                            <a href="javascript:void(0);">{{ __('sidebar.menu.help.multi_level.level_1_2.level_2_2.title') }}<span class="menu-arrow inside-submenu inside-submenu-two"></span></a>
                                            <ul>
                                                <li><a href="javascript:void(0);">{{ __('sidebar.menu.help.multi_level.level_1_2.level_2_2.level_3_1') }}</a></li>
                                                <li><a href="javascript:void(0);">{{ __('sidebar.menu.help.multi_level.level_1_2.level_2_2.level_3_2') }}</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
```
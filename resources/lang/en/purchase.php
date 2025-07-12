<?php

return [
    'title' => 'Purchase - Dashboard',
    'heading' => 'Purchase',
    'subheading' => 'Manage your purchases',

    'buttons' => [
        'add' => 'Add Purchase',
        'refresh' => 'Refresh',
        'collapse' => 'Collapse',
        "cancel" => "Cancel",
        "submit" => "Submit",
    ],

    'filter' => [
        'payment_status' => 'Payment Status',
        'paid' => 'Paid',
        'unpaid' => 'Unpaid',
        'overdue' => 'Overdue',
    ],

    'table' => [
        'select_all' => 'Select All',
        'supplier_name' => 'Supplier Name',
        'reference' => 'Reference',
        'date' => 'Date',
        'status' => 'Status',
        'total' => 'Total',
        'paid' => 'Paid',
        'due' => 'Due',
        'payment_status' => 'Payment Status',
        'actions' => 'Actions',
    ],

    'status' => [
        'received' => 'Received',
        'pending' => 'Pending',
        'ordered' => 'Ordered',
    ],

    'payment_status' => [
        'paid' => 'Paid',
        'unpaid' => 'Unpaid',
        'overdue' => 'Overdue',
    ],

    'modals' => [
        'add_title' => 'Add Purchase',
        'edit_title' => 'Edit Purchase',
        'delete_title' => 'Delete Purchase',
        'close' => 'Close',
    ],

    'action' => [
        'view' => 'View',
        'edit' => 'Edit',
        'delete' => 'Delete',
    ],

    'form' => [
        'supplier' => [
            'label' => 'Supplier Name',
            'placeholder' => 'Select',
        ],
        "brand"=> [
            "label"=> "Brand"
        ],
        'date' => [
            'label' => 'Date',
            'placeholder' => 'dd/mm/yyyy',
        ],
        'reference' => [
            'label' => 'Reference',
        ],
        'product' => [
            'label' => 'Product',
            'placeholder' => 'Search Product',
        ],
        'order_tax' => [
            'label' => 'Order Tax',
        ],
        'discount' => [
            'label' => 'Discount',
        ],
        'shipping' => [
            'label' => 'Shipping',
        ],
        'status' => [
            'label' => 'Status',
            'placeholder' => 'Select',
        ],
        'description' => [
            'label' => 'Description',
            'hint' => 'Maximum 60 Words',
        ],
        "select_option" => "Select Customer or Supplier",
    ],
    'modal' => [
        'add_title' => 'Add Purchase',
        'edit_title' => 'Edit Purchase',
        'delete_title' => 'Delete Purchase',
        'delete_confirm' => 'Are you sure you want to delete purchase?',
        'cancel' => 'Cancel',
        'submit' => 'Submit',
        'confirm_delete' => 'Yes Delete',
        'close' => 'Close',
    ],
    'modal_table' => [
        'product' => 'Product',
        'qty' => 'Qty',
        'purchase_price' => 'Purchase Price($)',
        'discount' => 'Discount($)',
        'tax_percent' => 'Tax(%)',
        'tax_amount' => 'Tax Amount($)',
        'unit_cost' => 'Unit Cost($)',
        'total_cost' => 'Total Cost($)',
    ],
    'buttons' => [
        'add' => 'Add Purchase',
        'refresh' => 'Refresh',
        'collapse' => 'Collapse',
        'cancel' => 'Cancel',
        'submit' => 'Submit',
    ],

    'form' => [
        'supplier' => [
            'label' => 'Supplier Name',
            'placeholder' => 'Select',
        ],
        "brand"=> [
            "label"=> "Brand"
        ],
        'date' => [
            'label' => 'Date',
            'placeholder' => 'dd/mm/yyyy',
        ],
        'reference' => [
            'label' => 'Reference',
        ],
        'product' => [
            'label' => 'Product',
            'placeholder' => 'Search Product',
        ],
        'order_tax' => [
            'label' => 'Order Tax',
        ],
        'discount' => [
            'label' => 'Discount',
        ],
        'shipping' => [
            'label' => 'Shipping',
        ],
        'status' => [
            'label' => 'Status',
            'placeholder' => 'Select',
        ],
        'description' => [
            'label' => 'Description',
            'hint' => 'Maximum 60 Words',
        ],

        // **New / Missing terms**
        'image_upload' => 'Upload Image',
        'image_hint' => 'Upload an image to extract IMEIs via QR/OCR.',
        'imeis' => [
            'label' => 'IMEIs',
            'add' => 'Add IMEI Pair',
        ],
        'price' => [
            'label' => 'Price',
        ],
        'tax' => [
            'label' => 'Tax',
        ],
        'person_d' => [
            'label' => 'Person D',
        ],
        'select_option' => 'Select Customer or Supplier',
    ],

    'modals' => [
        'add_title' => 'Add Purchase',
        'edit_title' => 'Edit Purchase',
        'delete_title' => 'Delete Purchase',
        'close' => 'Close',
    ],

    // To keep consistent, if you use 'modal' key for cancel/submit also, you may merge or keep both
    'modal' => [
        'add_title' => 'Add Purchase',
        'edit_title' => 'Edit Purchase',
        'delete_title' => 'Delete Purchase',
        'delete_confirm' => 'Are you sure you want to delete purchase?',
        'cancel' => 'Cancel',
        'submit' => 'Submit',
        'confirm_delete' => 'Yes Delete',
        'close' => 'Close',
    ],

];

@php $modalName = trim($__env->yieldContent('name')); @endphp

@if (!empty($modalName))
    @include('modals.pos-' . $modalName)
@endif
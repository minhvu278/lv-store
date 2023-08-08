<table class="table table-bordered {{ $class ?? '' }}">
    {{ $slot }}
</table>
@if (isset($pagination))
    {{ $pagination->links('admin.components.table.pagination') }}
@endif

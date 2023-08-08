<div class="table-index col-12 mt-5">
    <div class="card">
        <div class="table-responsive">
            <table class="table table-striped" aria-describedby="pageTitle">
                {{ $slot }}
            </table>
        </div>
    </div>
</div>

@if (isset($pagination))
    {{ $pagination->links('admin.components.table.pagination') }}
@endif

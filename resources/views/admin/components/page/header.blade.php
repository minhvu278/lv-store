<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                @if (!empty($pageTitle))
                    <h1 class="m-0">{{ $pageTitle }}</h1>
                @endif
            </div>
            @if (!empty($slot))
                {{ $slot }}
            @endif
        </div>
    </div>
</div>

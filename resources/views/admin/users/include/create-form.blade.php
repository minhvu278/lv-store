<div class="row">
    <div class="col-lg-12">
        @component('admin.components.card.common')
            <div class="table-index bg-white col-12">
                <form action="{{ Route::is('admin.users.create') ? route('admin.users.store') : route('admin.users.update', $user) }}" method="post" class="mt-5 p-3">
                    @csrf
                    @if(Route::is('admin.users.edit'))
                        @method('PUT')
                    @endif
                    <div class="row mb-3">
                        <div class="col-xl-3 col-sm-12">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="{{ asset('/assets/images/admin/user-default.png') }}" alt="Logo">
                            </div>
                        </div>
                        <div class="col-xl-8 col-sm-12">
                            @include('admin.components.input.input_base', [
                               'label' => 'Username',
                               'inputType' => 'text',
                               'inputName' => 'username',
                               'inputValue' => $user->username ?? '',
                            ])
                            @include('admin.components.input.input_base', [
                               'label' => 'Email',
                               'inputType' => 'email',
                               'inputName' => 'email',
                               'inputValue' => $user->email ?? '',
                            ])
                            @include('admin.components.input.input_base', [
                               'label' => 'Password',
                               'inputType' => 'password',
                               'inputName' => 'password',
                               'inputValue' => $user->password ?? '',
                            ])
                            @include('admin.components.input.select', [
                               'label' => 'Status',
                               'selectName' => 'status',
                               'optionDefault' => '',
                               'options' => config('const.user_status'),
                               'selectValue' => $user->status ?? '',
                            ])
                            @include('admin.components.input.select', [
                               'label' => 'Role',
                               'selectName' => 'role_id',
                               'optionDefault' => '',
                               'options' => config('const.user_role'),
                               'selectValue' => $user->role_id ?? '',
                            ])
                        </div>

                        <div class="mt-3 d-flex flex-column-reverse">
                            <input class="btn btn-primary" type="submit" value="Submit">
                        </div>

                    </div>
                </form>
            </div>
        @endcomponent
    </div>
</div>

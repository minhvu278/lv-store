<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ config('const.user_role')[$user->role_id] ?? '' }}</td>
                            <td>{{ config('const.user_status')[$user->status] ?? '' }}</td>
                            <td class="text-center">
                                <a href="{{ route('admin.users.show', $user) }}" class="btn btn-primary">
                                    Show
                                </a>
                                <a href="{{ route("admin.users.edit", $user) }}" class="btn btn-info">
                                    Edit
                                </a>

                                <a type="button" class="btn btn-danger delete-btn"
                                   data-bs-toggle="modal"
                                   data-bs-target="#deleteUserModal"
                                   data-route="{{ route('admin.users.destroy', $user) }}"
                                >
                                    Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach

                    @component('admin.components.modal.confirm-delete', [
                            'modalId' => 'deleteUserModal',
                            'title' => 'Delete modal',
                            'message' => 'Are you sure'
                        ])
                    @endcomponent
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@section('script')
    @vite(['resources/js/admin/user/index.js'])
@endsection


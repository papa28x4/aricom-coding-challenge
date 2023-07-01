<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">*</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
                <th scope="col">Created On</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $loop->iteration + ($users->perPage() * ($users->currentPage() - 1)) }}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td class="{{$user->active ? 'text-primary' : 'text-danger'}}">{{$user->active ? 'Active' : 'Inactive'}}</td>
                <td>{{ date('jS M, Y, g:i a', strtotime($user->created_on()))}}</td>
                <td>
                    <a href="{{route('users.toggle', $user->id)}}">
                        <button class="btn {{$user->active ? 'btn-danger' : 'btn-primary'}} mr-2 action-btn">
                            {{$user->active ? 'Disable' : 'Activate'}}
                        </button>
                    </a>
                </td>     
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="pt-3 page-result">
    <span class="col-md result text-muted">{{ $users->firstItem() }} - {{ $users->lastItem() }} of {{ $users->total() }} results</span>
    {{ $users->links() }}
</div>
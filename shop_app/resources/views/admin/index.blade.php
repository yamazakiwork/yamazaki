<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <title>管理者機能</title>
  <link rel="stylesheet" href="{{ mix("css/userIndex.css") }}">
</head>

<body>
    <x-app-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                    <div class="flex">
                        <div class="flex-auto text-2xl mb-4">Users List</div>

                        <div class="flex-auto text-right mt-2">
                            <a href="{{ route('admin.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add new User</a>
                        </div>
                    </div>
                    <table class="w-full text-md rounded mb-4">
                        <thead>
                        <tr class="border-b">
                            <th class="text-left p-3 px-5">Username</th>
                            <th class="text-left p-3 px-5">updated-date</th>
                            <th class="text-left p-3 px-5">cerated-date</th>
                            @if(auth()->user()->admin_level === 2)
                            <th class="text-left p-3 px-5">Action</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr class="border-b hover:bg-orange-100">
                                <td class="p-3 px-5">
                                    {{$user->name}}
                                </td>
                                <td class="p-3 px-5">
                                    {{$user->updated_at}}
                                </td>
                                <td class="p-3 px-5">
                                    {{$user->created_at}}
                                </td>
                                <td class="p-3 px-5">
                                    @if ($user->id === auth()->user()->id)
                                    @continue
                                    @elseif(auth()->user()->admin_level === 2)
                                        <a href="{{ route('admin.edit', $user->id) }}" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</a>
                                        <form action="{{ route('admin.destroy', $user) }}" class="inline-block" method="post" >
                                            <button type="submit" name="delete" id="delete" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
                                            @csrf
                                            @method('Delete')
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <p class="paginate">{{ $users->onEachSide(5)->links() }}</p>
                </div>
            </div>
        </div>
    </x-app-layout>
    <script src="{{ mix('js/admin.js') }}"></script>
</body>
</html>

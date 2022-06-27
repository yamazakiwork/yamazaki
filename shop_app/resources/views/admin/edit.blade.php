<head>
    <link rel="stylesheet" href="{{ mix('css/adminEdit.css') }}">
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit User') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <form method="POST" action="{{ route('admin.update', $user->id) }}" onsubmit="return check()">
                    <div class="form-group">
                        <table>
                            <tr>
                                <th>名前</th>
                                <td><input type="text" name="name" value="{{ $user->name }}"></td>
                            </tr>
                            <tr>
                                <th>メールアドレス</th>
                                <td><input type="email" name="email" value="{{ $user->email }}"></td>
                            </tr>
                            <tr>
                                <th>パスワード書き換え</th>
                                <td><input type="password" name="password" id="password" placeholder="パスワード書き換え"></td>
                            </tr>
                            <tr>
                                <th>パスワード確認</th>
                                <td>
                                    <input type="password" id="password_confirm" >
                                    <p id="password_error_msg"></p>
                                </td>
                            </tr>
                            <tr>
                                <th>ユーザータイプ</th>
                                <td>
                                    @if($user->admin_level == 0)
                                    <select name="admin_level" id="admin_level" >
                                        <option value="0">一般ユーザー</option>
                                        <option value="1">管理者ユーザー</option>
                                    </select>
                                    @else
                                    <select name="admin_level" id="admin_level" >
                                        <option value="0">一般ユーザー</option>
                                        <option value="1" selected="selected">管理者ユーザー</option>
                                    </select>
                                    @endif
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" id="edit_finish" >Edit finish</button>
                    </div>
                    {{ csrf_field() }}
                    @csrf
                    @method('PATCH')
                </form>
            </div>
        </div>
    </div>
    <script src="{{ mix('js/adminEdit.js') }}"></script>
</x-app-layout>

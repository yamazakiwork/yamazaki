<head>
    <link rel="stylesheet" href="{{ mix('css/adminEdit.css') }}">
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add User') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <form method="POST" action="{{ route('admin.store') }}" onsubmit="return blank_check()">
                    <div class="form-group">
                        <table>
                            <tr>
                                <th>名前(必須)</th>
                                <td>
                                    <input class="input name" type="text" name="name" placeholder="ララベル 太郎">
                                </td>
                            </tr>
                            <tr>
                                <th>メールアドレス(必須)</th>
                                <td><input class="input email" type="email" name="email" placeholder="aaa@fff.com"></td>
                            </tr>
                            <tr>
                                <th>パスワード(必須)</th>
                                <td><input class="input password" type="password" name="password" id="password" placeholder="password"></td>
                            </tr>
                            <tr>
                                <th>パスワード確認(必須)</th>
                                <td>
                                    <input class="input password_confirm" type="password" id="password_confirm">
                                    <p id="password_error_msg" ></p>
                                </td>
                            </tr>
                            <tr>
                                <th>ユーザータイプ(必須)</th>
                                <td>
                                    <select name="admin_level" id="admin_level">
                                        <option value="0">一般ユーザー</option>
                                        <option value="1">管理者ユーザー</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" id="add_user_btn">Add User</button>
                    </div>
                    {{ csrf_field() }}
                    @csrf
                </form>
            </div>

        </div>
    </div>
    <script src="{{ asset('js/userCreate.js') }}"></script>
</x-app-layout>

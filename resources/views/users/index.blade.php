<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   <a href="{{ route('users.create') }}" class="btn btn-blue"> {{ __('Create User +') }}</a>
                    <table class="table-w100 striped" id="user-table">
                       <thead class="border-bottom border-bottom-1">
                       <tr>
                           <th>#</th>
                           <th>Name</th>
                           <th>Email</th>
                           <th>Type</th>
                           <th> </th>
                       </tr>
                       </thead>
                       <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>
                                        {{ $user->id }}
                                    </td>
                                    <td>
                                        {{ $user->name }}
                                    </td>
                                    <td>
                                        {{ $user->email }}
                                    </td>
                                    <td>
                                        {{ trans('subscriptions.'.$user->subscription->subscriptionType->name) }}
                                    </td>
                                    <td class="flex-end col-gap-12">
                                        @if(isset($user->active) && $user->active)
                                            <a href="{{ route('users.deactivate', ['user' => $user]) }}" class="btn btn-green">active</a>
                                        @else
                                            <a href="{{ route('users.activate', ['user' => $user]) }}" class="btn btn-gray">Inactive</a>
                                        @endif

                                        <a href="{{ route('users.edit', ['user' => $user]) }}" class="btn btn-blue">Edit</a>

                                            <form wire:submit="deleteUser">
                                                <input type="hidden" id="userId" wire:model="userId">

                                                <button type="submit"
                                                        class="btn btn-red"
                                                  >
                                                    Save
                                                </button>
                                            </form>

                                            <a href="{{ route('users.impersonate', ['user' => $user]) }}" class="btn btn-orange">Impersonate</a>

                                    </td>
                                </tr>
                           @endforeach
                       </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>

    {{--    <x-tw-modal>--}}
{{--        <x-slot:title> delete user</x-slot:title>--}}

{{--        <x-slot:type> delete</x-slot:type>--}}
{{--    </x-tw-modal>--}}

</x-app-layout>

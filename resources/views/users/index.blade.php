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
                   <span class="btn btn-blue"> {{ __('Create User +') }}</span>
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
                                    <td>
                                        @if(isset($user->active) && $user->active)
                                            <a href="#" class="btn btn-green">Active</a>
                                        @else
                                            <a href="#" class="btn btn-gray">Inactive</a>
                                        @endif

                                        <a href="{{ route('users.edit', ['user' => $user]) }}" class="btn btn-blue">Edit</a>
                                        <a href="#" class="btn btn-red">Delete</a>
                                    </td>
                                </tr>
                           @endforeach
                       </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

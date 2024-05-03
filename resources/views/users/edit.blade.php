<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User') .': '. __('edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card">
                <div class="p-6 text-gray-900">
                    {{ html()->form('PUT', route('users.update', compact('user')))->open() }}

                    @php
                        html()->model($user)
                    @endphp

                    <div class="mb-4">
                        {{ html()->label('Name')->for('name')->class('form-field-label') }}
                        {{ html()->text('name')->placeholder('Your name')->class('form-field-input') }}
                    </div>
                    <div class="mb-4">
                        {{ html()->label('Email')->for('email')->class('form-field-label') }}
                        {{ html()->email('email')->placeholder('Your e-mail address')->class('form-field-input') }}
                    </div>
                    <div class="mb-4">
                        {{ html()->label('Password')->for('password')->class('form-field-label') }}
                        {{ html()->password('password')->placeholder('Set new password')->class('form-field-input') }}
                    </div>
                    <div class="mb-4">
                        {{ html()->label('Active')->for('active')->class('form-field-label') }}
                        {{ html()->checkbox('active')->class('form-field-checkbox') }}
                    </div>

                    <div class="mb-4">
                        {{ html()->submit('Save')->class('btn btn-blue') }}
                    </div>

                    {{ html()->form()->close() }}
                </div>
            </div>
        </div>
    </div>

    @include('subscriptions.type')

    @include('subscriptions.mutations')

</x-app-layout>

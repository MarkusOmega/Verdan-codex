<div class="pb-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <span class="text-lg font-bold"> {{ trans('admin.subscription_type') }} </span>
                <p>{{ $user->subscription->subscriptionType->name }}<p>
            </div>
        </div>
    </div>
</div>
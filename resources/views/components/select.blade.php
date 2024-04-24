@props(['disabled' => false])

{{--<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!}>--}}

<select name="role" >
    @foreach(config('auth.user_roles') as $key => $role)
        <option value="{{ $role }}"> {{ $key }}</option>
    @endforeach
</select>

<div>
    <div wire:click="deleteConfirm" class="btn btn-red">{{ __('Delete') }}</div>

    @if($this->modalShow == true)
        <div class="overlay">
            <div class="modal">
                <div class="modal-header">
                    <h4>
                        {{ __('Delete user') }}
                    </h4>
                </div>
                <hr>
                <div class="modal-body">
                    @if($user)
                        {{ $user->name }}
                    @endif
                </div>
                <div class="modal-footer">
                    <div wire:click="deleteConfirm" class="btn btn-gray">{{ __('Cancel') }}</div>
                    <div wire:click="deleteUser({{$user}})" class="btn btn-red">{{ __('Delete') }}</div>
                </div>
            </div>
        </div>
    @endif
</div>

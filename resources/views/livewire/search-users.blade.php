<div>
    <x-jet-label for="search" value="{{ __('Search users by name') }} ({{ __('limited to 10') }})" />
    <x-jet-input wire:model="search" id="search" class="block w-full" type="text" placeholder="Search users..."/>
 
    @if($users)
        <ul class="mt-1">
            @foreach($users as $user)
                <li>{{ $user->name }} / {{ $user->email }}</li>
            @endforeach
        </ul>
    @endif
</div>
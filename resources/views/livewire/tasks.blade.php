<div>
    @if ($edit_task_state)
        @include('livewire.user-dashboard-layout.edit')
    @else
        @include('livewire.user-dashboard-layout.create')
    @endif

    @include('livewire.user-dashboard-layout.read')
</div>

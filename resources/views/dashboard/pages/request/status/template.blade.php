@switch($object->status)
    @case(1)
        @include('dashboard.pages.task.status.in-progress')
        @break

    @case(2)
        @include('dashboard.pages.task.status.completed')
        @break

    @default
        @include('dashboard.pages.task.status.pending')
@endswitch

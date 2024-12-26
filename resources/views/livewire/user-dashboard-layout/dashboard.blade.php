<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        {{ Auth::user()->name }}'s Dashboard
    </title>
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ 'Dear ' . Auth::user()->name . '!' . __(' Here the summary of your tasks') }}
            </h2>
        </x-slot>

        @include('livewire.user-dashboard-layout.create')

    </x-app-layout>
</body>

</html>

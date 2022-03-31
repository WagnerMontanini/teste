<!DOCTYPE html>
 <!--
    |****************************************************************************************************************
    |                               ⚡ PowerGrid Demo Table ⚡
    |****************************************************************************************************************
    | Table: App/Http/Livewire/PowerGridDemoTable.php
    | USAGE:
    | ➤ You must include Route::view('/powergrid', 'powergrid-demo'); in routes/web.php file.
    | ➤ Visit http://your-app/powergrid. Enjoy it!
    |****************************************************************************************************************
-->

<html lang="en">
    <head>
        <meta charset="UTF-8" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}
        <!-- Scripts -->
        @wireUiScripts
        <script src="{{ url(mix('js/app.js')) }}" defer></script>

        <title>⚡ PowerGrid Demo Table ⚡</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        @livewireStyles
        @powerGridStyles
    </head>
    <body class="antialiased px-10 py-8 bg-gray-50">
        <div class="p-6 bg-gray-50 mb-3 rounded-md shadow-md text-gray-700 border border-gray-400">
        Welcome to ⚡ PowerGrid ⚡,
        <br>
        <br>
        This is a demo table. You can click around and see how things behave.
        <br>
        Data is generated on the fly and changes will NOT be saved in your database.
        <br>
        Some features may require you to create a full PowerGrid component.
        <br><br>
        <p class="leading-loose">
        📚 Check our <a href="https://livewire-powergrid.com/" rel="nofollow" target="_blank" class="bg-gradient-to-r from-yellow-200 to-yellow-200 bg-growing-underline">Documentation</a> for more information.
        <br/>
        ⭐ Enjoying? Star our <a href="https://github.com/Power-Components/livewire-powergrid" rel="nofollow" target="_blank" class="bg-gradient-to-r from-yellow-200 to-yellow-200 bg-growing-underline">Repository</a>!
        </p>
        <br/>
        Thank you for downloading!
        </div>

        <div class="bg-white p-4 border border-gray-200 rounded">
            <livewire:power-grid-demo-table/>
        </div>

        <!-- Scripts -->
        @livewireScripts
        @powerGridScripts
        {{-- <script src="//unpkg.com/alpinejs" defer></script> --}}
        {{-- <x-modal.card title="Edit Customer" blur wire:model.defer="cardModal">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <x-input label="Name" placeholder="Your full name" />
                <x-input label="Phone" placeholder="USA phone" />

                <div class="col-span-1 sm:col-span-2">
                    <x-input label="Email" placeholder="example@mail.com" />
                </div>

                <div class="col-span-1 sm:col-span-2 cursor-pointer bg-gray-100 rounded-xl shadow-md h-72 flex items-center justify-center">
                    <div class="flex flex-col items-center justify-center">
                        <x-icon name="cloud-upload" class="w-16 h-16 text-blue-600" />
                        <p class="text-blue-600">Click or drop files here</p>
                    </div>
                </div>
            </div>

            <x-slot name="footer">
                <div class="flex justify-between gap-x-4">
                    <x-button flat negative label="Delete" wire:click="delete" />

                    <div class="flex">
                        <x-button flat label="Cancel" x-on:click="close" />
                        <x-button primary label="Save" wire:click="save" />
                    </div>
                </div>
            </x-slot>
        </x-modal.card> --}}
        <x-modal wire:model.defer="simpleModal">
            <x-card title="Consent Terms">
                <p class="text-gray-600">
                    Lorem Ipsum...
                </p>

                <x-slot name="footer">
                    <div class="flex justify-end gap-x-4">
                        <x-button flat label="Cancel" x-on:click="close" />
                        <x-button primary label="I Agree" />
                    </div>
                </x-slot>
            </x-card>
        </x-modal>
        <script>
            window.addEventListener('showAlert', event => {
                alert(event.detail.message);
            })
        </script>

        <script>
            window.addEventListener('openModal', event => {
                $openModal('cardModal')
            })
        </script>
    </body>
</html>

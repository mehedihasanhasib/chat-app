@extends('layouts.app', ['title' => 'Admin'])

@section('contacts')
    <!-- Contacts -->
    <div class="bg-grey-lighter flex-1 overflow-auto" id="contact-box">

    </div>
@endsection

@section('dropdown')
    <div class="hidden sm:flex sm:items-center sm:ml-6">
        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                <button
                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                    <div>{{ \Auth::guard('admin')->user()->name }}</div>
                    <div class="ml-1">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </button>
            </x-slot>

            <x-slot name="content">
                <x-dropdown-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-dropdown-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </x-slot>
        </x-dropdown>
    </div>
@endsection

@section('script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // load contacts
        $('document').ready(function(e) {
            $.ajax({
                url: `{{ url('/admin/contacts') }}`,
                type: "GET",
                success: function(res) {
                    const users = res.users;
                    users.forEach((element) => {
                        $('#contact-box').append(
                            `
                                <div class="px-3 flex items-center bg-grey-light cursor-pointer mb-1">
                                    <div>
                                        <img class="h-12 w-12 rounded-full"
                                            src="https://darrenjameseeley.files.wordpress.com/2014/09/expendables3.jpeg" />
                                    </div>
                                    <div class="ml-4 flex-1 border-b border-grey-lighter py-4">
                                        <div class="flex items-bottom justify-between" class="single-contact" data-user_id = "1">
                                            <p class="text-grey-darkest">
                                                ${element.name}
                                            </p>
                                            <p class="text-xs text-grey-darkest">
                                                12:45 pm
                                            </p>
                                        </div>
                                        <p class="text-grey-dark mt-1 text-sm">
                                            {{-- Get Andrés on this movie ASAP! --}}
                                        </p>
                                    </div>
                                </div>
                            `
                        )
                    });
                }
            })
        })

        // send message
        $('#message-form').on('submit', function(e) {
            e.preventDefault()
            $.ajax({
                url: `{{ url('send-message') }}`,
                type: "POST",
                dataType: "json",
                data: {
                    message: $('#inputField').val()
                },
                success: function(res) {
                    console.log(res);
                    if (res.status) {
                        $('#message-box').append(
                            `
                                    <div class="flex justify-end mb-2 mr-2">
                                        <div class="rounded pb-2 px-3 max-w-md" style="background-color: #E2F7CB">
                                            <p class="text-sm whitespace-pre-line">
                                               ${res.msg}
                                            </p>
                                            <p class="text-right text-xs text-grey-dark mt-1">
                                                12:45 pm
                                            </p>
                                        </div>
                                    </div>
                            `
                        )
                        $('#message-box').scrollTop($('#message-box')[0].scrollHeight);
                    }
                }
            });
            $('#inputField').val('')
            $('#inputField').css('height', '44px')
        });

        // listen msg
        setTimeout(() => {
            window.Echo.private('send-message')
                .listen('.App\\Events\\SendMessageEvent', (res) => {

                    if (res.user_id) {
                        $('#message-box').append(
                            `
                                <div class="flex mb-2 ml-2">
                                    <div class="rounded py-2 px-3" style="background-color: #F2F2F2">
                                        <p class="text-sm mt-1">
                                            ${res.message}
                                        </p>
                                        <p class="text-right text-xs text-grey-dark mt-1">
                                            12:45 pm
                                        </p>
                                    </div>
                                </div>
                        `
                        )

                        $('#message-box').scrollTop($('#message-box')[0].scrollHeight);
                    }
                })
        }, 500);
    </script>
@endsection

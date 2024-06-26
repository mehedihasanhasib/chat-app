<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://unpkg.com/tailwindcss@0.3.0/dist/tailwind.min.css" rel="stylesheet">
    <title>{{ $title }}</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    @vite(['resources/css/app.css'])
    <script src="{{ asset('build/assets/app-1b815d61.js') }}"></script>
</head>

<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
    <div class="w-full">
        <div class="w-full h-32" style="background-color: #449388"></div>

        <div class="container mx-auto" style="margin-top: -128px;">
            <div class="py-6 h-screen">
                <div class="flex border border-grey rounded shadow-lg h-full">

                    <!-- Left -->
                    <div class="w-1/3 border flex flex-col">

                        <!-- Header -->
                        <div class="py-2 px-3 bg-grey-lighter flex flex-row justify-between items-center">
                            <div>
                                <img class="w-10 h-10 rounded-full"
                                    src="https://darrenjameseeley.files.wordpress.com/2014/09/expendables3.jpeg" />
                            </div>

                            <div class="flex">
                                {{-- <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                        height="24">
                                        <path fill="#727A7E"
                                            d="M12 20.664a9.163 9.163 0 0 1-6.521-2.702.977.977 0 0 1 1.381-1.381 7.269 7.269 0 0 0 10.024.244.977.977 0 0 1 1.313 1.445A9.192 9.192 0 0 1 12 20.664zm7.965-6.112a.977.977 0 0 1-.944-1.229 7.26 7.26 0 0 0-4.8-8.804.977.977 0 0 1 .594-1.86 9.212 9.212 0 0 1 6.092 11.169.976.976 0 0 1-.942.724zm-16.025-.39a.977.977 0 0 1-.953-.769 9.21 9.21 0 0 1 6.626-10.86.975.975 0 1 1 .52 1.882l-.015.004a7.259 7.259 0 0 0-5.223 8.558.978.978 0 0 1-.955 1.185z">
                                        </path>
                                    </svg>
                                </div> --}}
                                {{-- <div class="ml-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                        height="24">
                                        <path opacity=".55" fill="#263238"
                                            d="M19.005 3.175H4.674C3.642 3.175 3 3.789 3 4.821V21.02l3.544-3.514h12.461c1.033 0 2.064-1.06 2.064-2.093V4.821c-.001-1.032-1.032-1.646-2.064-1.646zm-4.989 9.869H7.041V11.1h6.975v1.944zm3-4H7.041V7.1h9.975v1.944z">
                                        </path>
                                    </svg>
                                </div> --}}
                                {{-- <div class="ml-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                        height="24">
                                        <path fill="#263238" fill-opacity=".6"
                                            d="M12 7a2 2 0 1 0-.001-4.001A2 2 0 0 0 12 7zm0 2a2 2 0 1 0-.001 3.999A2 2 0 0 0 12 9zm0 6a2 2 0 1 0-.001 3.999A2 2 0 0 0 12 15z">
                                        </path>
                                    </svg>
                                </div> --}}
                                @yield('dropdown')
                            </div>
                        </div>

                        <!-- Search -->
                        <div class="py-2 px-2 bg-grey-lightest">
                            <input type="text" class="w-full px-2 py-2 text-sm"
                                placeholder="Search or start new chat" />
                        </div>

                        @yield('contacts')

                    </div>


                    <!-- Right -->
                    <div class="w-2/3 border flex flex-col">

                        <!-- Header -->
                        <div class="py-2 px-3 bg-grey-lighter flex flex-row justify-between items-center">
                            <div class="flex items-center">
                                <div>
                                    <img class="w-10 h-10 rounded-full"
                                        src="https://darrenjameseeley.files.wordpress.com/2014/09/expendables3.jpeg" />
                                </div>
                                <div class="ml-4">
                                    <p class="text-grey-darkest">
                                        New Movie! Expendables 4
                                    </p>
                                    <p class="text-grey-darker text-xs mt-1">
                                        Andrés, Tom, Harrison, Arnold, Sylvester
                                    </p>
                                </div>
                            </div>

                            <div class="flex">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                        height="24">
                                        <path fill="#263238" fill-opacity=".5"
                                            d="M15.9 14.3H15l-.3-.3c1-1.1 1.6-2.7 1.6-4.3 0-3.7-3-6.7-6.7-6.7S3 6 3 9.7s3 6.7 6.7 6.7c1.6 0 3.2-.6 4.3-1.6l.3.3v.8l5.1 5.1 1.5-1.5-5-5.2zm-6.2 0c-2.6 0-4.6-2.1-4.6-4.6s2.1-4.6 4.6-4.6 4.6 2.1 4.6 4.6-2 4.6-4.6 4.6z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="ml-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                        height="24">
                                        <path fill="#263238" fill-opacity=".5"
                                            d="M1.816 15.556v.002c0 1.502.584 2.912 1.646 3.972s2.472 1.647 3.974 1.647a5.58 5.58 0 0 0 3.972-1.645l9.547-9.548c.769-.768 1.147-1.767 1.058-2.817-.079-.968-.548-1.927-1.319-2.698-1.594-1.592-4.068-1.711-5.517-.262l-7.916 7.915c-.881.881-.792 2.25.214 3.261.959.958 2.423 1.053 3.263.215l5.511-5.512c.28-.28.267-.722.053-.936l-.244-.244c-.191-.191-.567-.349-.957.04l-5.506 5.506c-.18.18-.635.127-.976-.214-.098-.097-.576-.613-.213-.973l7.915-7.917c.818-.817 2.267-.699 3.23.262.5.501.802 1.1.849 1.685.051.573-.156 1.111-.589 1.543l-9.547 9.549a3.97 3.97 0 0 1-2.829 1.171 3.975 3.975 0 0 1-2.83-1.173 3.973 3.973 0 0 1-1.172-2.828c0-1.071.415-2.076 1.172-2.83l7.209-7.211c.157-.157.264-.579.028-.814L11.5 4.36a.572.572 0 0 0-.834.018l-7.205 7.207a5.577 5.577 0 0 0-1.645 3.971z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="ml-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                        height="24">
                                        <path fill="#263238" fill-opacity=".6"
                                            d="M12 7a2 2 0 1 0-.001-4.001A2 2 0 0 0 12 7zm0 2a2 2 0 1 0-.001 3.999A2 2 0 0 0 12 9zm0 6a2 2 0 1 0-.001 3.999A2 2 0 0 0 12 15z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Messages -->
                        <div class="flex-1 overflow-auto" style="background-color: #DAD3CC" id="message-box">
                            <div class="py-2 px-3">

                                <!-- CHAT SECTION -->

                            </div>
                        </div>

                        <!-- Input -->
                        <form class="bg-grey-lighter px-4 py-4 flex items-center" id="message-form">

                            <!-- imojie selector -->
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                    height="24">
                                    <path opacity=".45" fill="#263238"
                                        d="M9.153 11.603c.795 0 1.439-.879 1.439-1.962s-.644-1.962-1.439-1.962-1.439.879-1.439 1.962.644 1.962 1.439 1.962zm-3.204 1.362c-.026-.307-.131 5.218 6.063 5.551 6.066-.25 6.066-5.551 6.066-5.551-6.078 1.416-12.129 0-12.129 0zm11.363 1.108s-.669 1.959-5.051 1.959c-3.505 0-5.388-1.164-5.607-1.959 0 0 5.912 1.055 10.658 0zM11.804 1.011C5.609 1.011.978 6.033.978 12.228s4.826 10.761 11.021 10.761S23.02 18.423 23.02 12.228c.001-6.195-5.021-11.217-11.216-11.217zM12 21.354c-5.273 0-9.381-3.886-9.381-9.159s3.942-9.548 9.215-9.548 9.548 4.275 9.548 9.548c-.001 5.272-4.109 9.159-9.382 9.159zm3.108-9.751c.795 0 1.439-.879 1.439-1.962s-.644-1.962-1.439-1.962-1.439.879-1.439 1.962.644 1.962 1.439 1.962z">
                                    </path>
                                </svg>
                            </div>

                            <!-- input field -->
                            <div class="flex-1 mx-4">
                                <textarea rows="1" class="w-full h-11 overflow-y-hidden border rounded px-2 py-2 resize-none" type="text"
                                    name="inputField" id="inputField">
                                </textarea>
                            </div>

                            <!-- send button -->
                            <button type="submit" id="send-button" style="cursor: pointer;">
                                <svg width="28px" height="28px" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" stroke="#969ea2">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0" />
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M10.3009 13.6949L20.102 3.89742M10.5795 14.1355L12.8019 18.5804C13.339 19.6545 13.6075 20.1916 13.9458 20.3356C14.2394 20.4606 14.575 20.4379 14.8492 20.2747C15.1651 20.0866 15.3591 19.5183 15.7472 18.3818L19.9463 6.08434C20.2845 5.09409 20.4535 4.59896 20.3378 4.27142C20.2371 3.98648 20.013 3.76234 19.7281 3.66167C19.4005 3.54595 18.9054 3.71502 17.9151 4.05315L5.61763 8.2523C4.48114 8.64037 3.91289 8.83441 3.72478 9.15032C3.56153 9.42447 3.53891 9.76007 3.66389 10.0536C3.80791 10.3919 4.34498 10.6605 5.41912 11.1975L9.86397 13.42C10.041 13.5085 10.1295 13.5527 10.2061 13.6118C10.2742 13.6643 10.3352 13.7253 10.3876 13.7933C10.4468 13.87 10.491 13.9585 10.5795 14.1355Z"
                                            stroke="#969ea2" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('script')

    <script>
        $('#inputField').val($.trim($('#inputField').val()))

        $('#inputField').on('input', function(event) {
            $(this).css('height', '48px'); // Reset height to auto
            $(this).css('height', $(this)[0].scrollHeight + 'px'); // Set height to scroll height
            $(this).scrollTop($(this)[0].scrollHeight); // Scroll to the bottom
        });

        $('#inputField').on('keydown', function(event) {
            if (event.which == 13 && !event.shiftKey) { // If Enter key is pressed without Shift
                event.preventDefault(); // Prevent default Enter behavior (adding a new line)
                $('#message-form').submit();
            }
        });
    </script>
</body>

</html>

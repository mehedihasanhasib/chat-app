@extends('layouts.app', ['title' => 'Admin'])

@section('script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

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
                    // if (res.status) {
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
                    // }
                }
            });
            $('#inputField').val('')
            $('#inputField').css('height', '44px')
        });

        // listen broadcasted msg
        setTimeout(() => {
            window.Echo.channel('send-message')
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

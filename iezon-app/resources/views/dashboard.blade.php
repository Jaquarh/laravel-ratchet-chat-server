<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex pb-10">
                    <div class="p-4">
                        <div class="flex justify-between pt-4">
                            <div class="flex">
                                <button type="button"
                                        class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-purple-500 hover:bg-purple-600 hover:shadow-lg">
                                    <img class="w-5 h-5" src="https://img.icons8.com/ios/24/ffffff/camera--v1.png"/>
                                </button>
                                <button type="button"
                                        class="ml-2 focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-purple-500 hover:bg-purple-600 hover:shadow-lg">
                                    <img class="w-5 h-5" src="https://img.icons8.com/android/24/ffffff/microphone.png"/>
                                </button>
                            </div>
                            <p class="mr-4 pt-2">
                            </p>
                            <button type="button"
                                    class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-gray-50 hover:bg-gray-200 hover:shadow-lg">
                                <img class="w-5 h-5" src="{{ url()->to('/icons8-globe.gif') }}"/>
                            </button>
                        </div>
                        <video class="mt-6 border-b-2" width="750" height="300" autoplay></video>
                        <div id="participant-videos" class="flex">
                            <video class="border-r-2" width="150" height="150" autoplay></video>
                            <video class="border-r-2" width="150" height="150" autoplay></video>
                            <video class="" width="150" height="150" autoplay></video>
                        </div>
                        <div class="pt-4">
                            <div class="flex justify-center">
                                <p class="text-sm text-gray-400">{{ __('Participants') }}</p>
                            </div>
                            <section id="participants">
                                @foreach($participants as $user)
                                    <div class="flex justify-between">
                                        <p class="text-sm text-gray-400">{{ __('WELCOME-1') }}</p>
                                        <p class="text-sm text-gray-400">{{ $user }}</p>
                                    </div>
                                @endforeach
                            </section>
                        </div>
                        <div class="pt-4">
                            <div class="flex justify-between">
                                <button type="button"
                                        class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-green-500 hover:bg-green-600 hover:shadow-lg">
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/>
                                    </svg>
                                </button>
                                <button type="button"
                                        class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-red-500 hover:bg-red-600 hover:shadow-lg">
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016zM12 9v2m0 4h.01"/>
                                    </svg>
                                </button>
                                <button type="button"
                                        class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-purple-500 hover:bg-purple-600 hover:shadow-lg">
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="justify-center mt-20">
                            <p class="text-sm text-gray-400 mx-auto pl-2">{{ __('Hi,') }} {{ Auth::user()->name }}</p>
                            <img
                                src="https://ih1.redbubble.net/image.779045041.4269/st,small,845x845-pad,1000x1000,f8f8f8.u2.jpg"
                                alt="" class="mt-2 w-10 sm:w-16 h-10 sm:h-16 rounded-full">
                        </div>
                    </div>
                    <div class="pl-2 pt-2 w-full">
                        <div class="flex justify-center border-b-2 pb-2">
                            <img
                                src="https://scontent-lhr8-2.xx.fbcdn.net/v/t1.0-9/12540897_10208362656929478_3770779302929704700_n.jpg?_nc_cat=104&ccb=1-3&_nc_sid=174925&_nc_ohc=LP28QwWhi-YAX_nOcbp&_nc_ht=scontent-lhr8-2.xx&oh=9b3e5f376bcc9835a53bc53b7722224d&oe=607795FD"
                                alt="" class="w-10 sm:w-16 h-10 sm:h-16 rounded-full mx-auto">
                            <img
                                src="https://scontent-lhr8-1.xx.fbcdn.net/v/t1.0-9/80450402_976415492736100_1042524751857188864_o.jpg?_nc_cat=107&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=V-cz-aM3BY0AX8uZrBO&_nc_oc=AQnJdCTvj36iBdI-2AAsbhZVNMBGAQhq10a73nkHhISe1KJy-drPb6ts-ui05XjoNso&_nc_ht=scontent-lhr8-1.xx&oh=a6ab6851155a7e8d8f01fab796d30053&oe=60764AEB"
                                alt="" class="w-10 sm:w-16 h-10 sm:h-16 rounded-full mx-auto">
                            <img
                                src="https://ih1.redbubble.net/image.779045041.4269/st,small,845x845-pad,1000x1000,f8f8f8.u2.jpg"
                                alt="" class="w-10 sm:w-16 h-10 sm:h-16 rounded-full mx-auto">
                        </div>
                        <div id="chat-dialog" class="overflow-y-scroll h-3/4">
                            @forelse($chats as $chat)
                                @if($chat->author === Auth::user()->name)
                                    @if($loop->index === 0)
                                        <div class="p-4 float-right w-2/4">
                                            <div class="flex justify-between">
                                                <p class="text-sm text-gray-400">{{ __('You:') }}</p>
                                                <p class="text-sm text-gray-400">{{ __('Sent @') }} {{ $chat->stamp }}</p>
                                            </div>
                                            <p meta="{{ json_encode($chat) }}"
                                               class="bg-gray-100 p-2 rounded-lg">{!! $chat->text !!}</p>
                                            @while(isset($chats[++$loop->index]) && $chats[$loop->index]->author === $chat->author)
                                                <p meta="{{ json_encode($chats[$loop->index]) }}"
                                                   class="bg-gray-100 p-2 mt-1 rounded-lg">{!! $chats[$loop->index]->text !!}</p>
                                            @endwhile
                                        </div>
                                    @endif
                                    @if($loop->index !== 0 && $chats[$loop->index -1]->author !== Auth::user()->name)
                                        <div class="p-4 float-right w-2/4">
                                            <div class="flex justify-between">
                                                <p class="text-sm text-gray-400">{{ __('You:') }}</p>
                                                <p class="text-sm text-gray-400">{{ __('Sent @') }} {{ $chat->stamp }}</p>
                                            </div>
                                            <p meta="{{ json_encode($chat) }}"
                                               class="bg-gray-100 p-2 rounded-lg">{!! $chat->text !!}</p>
                                            @while(isset($chats[++$loop->index]) && $chats[$loop->index]->author === Auth::user()->name)
                                                <p meta="{{ json_encode($chats[$loop->index]) }}"
                                                   class="bg-gray-100 p-2 mt-1 rounded-lg">{!! $chats[$loop->index]->text !!}</p>
                                            @endwhile
                                        </div>

                                    @endif
                                @else
                                    @if($loop->index === 0)
                                        <div class="p-4 float-left w-3/5">
                                            <div class="flex justify-between">
                                                <p class="text-sm text-gray-400">{{ $chat->author }}</p>
                                                <p class="text-sm text-gray-400">{{ __('Sent @') }} {{ $chat->stamp }}</p>
                                            </div>
                                            <p meta="{{ json_encode($chat) }}"
                                               class="bg-gray-100 rounded-lg p-2">{!! $chat->text !!}</p>
                                            @while(isset($chats[++$loop->index]) && $chats[$loop->index]->author === $chat->author)
                                                <p meta="{{ json_encode($chats[$loop->index]) }}"
                                                   class="bg-gray-100 p-2 mt-1 rounded-lg">{!! $chats[$loop->index]->text !!}</p>
                                            @endwhile
                                        </div>
                                    @endif
                                    @if($loop->index !== 0 && $chats[$loop->index -1]->author !== $chat->author)
                                        <div class="p-4 float-left w-3/5">
                                            <div class="flex justify-between">
                                                <p class="text-sm text-gray-400">{{ $chat->author }}</p>
                                                <p class="text-sm text-gray-400">{{ __('Sent @') }} {{ $chat->stamp }}</p>
                                            </div>
                                            <p meta="{{ json_encode($chat) }}"
                                               class="bg-gray-100 rounded-lg p-2">{!! $chat->text !!}</p>
                                            @while(isset($chats[++$loop->index]) && $chats[$loop->index]->author === $chat->author)
                                                <p meta="{{ json_encode($chats[$loop->index]) }}"
                                                   class="bg-gray-100 p-2 mt-1 rounded-lg">{!! $chats[$loop->index]->text !!}</p>
                                            @endwhile
                                        </div>
                                    @endif
                                @endif
                            @empty
                                No Messages...
                            @endforelse
                        </div>
                        <div id="chat-box" class="flex justify-between bg-gray-100 w-full border-2 p-2 mt-8">
                            <input type="text" class="bg-gray-100 border-none focus:ring-0 w-full"
                                   placeholder="Type your message..."/>
                            <button type="button"
                                    class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-gray-500 hover:bg-gray-600 hover:shadow-lg">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <script>

                    class WebRTC {
                        socket;
                        constants;
                        timerId;

                        constructor(protocol, fqdns, port) {
                            this.constants = {
                                protocol: protocol,
                                fqdns: fqdns,
                                port: port
                            };

                            this.listenChanges();
                        }

                        listenChanges() {
                            this.socket = new WebSocket(`${this.constants.protocol}://${this.constants.fqdns}:${this.constants.port}`);

                            this.socket.onmessage = e => {
                                console.log(atob(e.data));
                            };

                            this.socket.onerror = () => {
                                this.socket.close();
                            };

                            this.socket.onopen = () => {
                                console.info('Connected to WebRTC Chat Server...');

                                this.socket.send(btoa(JSON.stringify({
                                    message: '{{ session()->getId() }}'
                                })));

                                clearInterval(this.timerId);

                                this.socket.onclose = () => {
                                    this.timerId = setInterval(() => {
                                        this.listenChanges();
                                    }, 1000);
                                };
                            };
                        }
                    }

                    new WebRTC('ws', '127.0.0.1', '8080');

                    let chatDialog = document.getElementById('chat-dialog');
                    let chatBox = document.querySelector('#chat-box input');
                    let chatBoxBtn = document.querySelector('#chat-box button');

                    document.querySelectorAll('p[meta]').forEach(dom => {
                        dom.classList.add('cursor-pointer');
                        dom.setAttribute('data', 'false');

                        const removeSeenAt = el => {
                            el.classList.add('hidden');
                            el.setAttribute('stamp', 'false');
                            el.parentElement.setAttribute('data', 'false');
                        };

                        dom.addEventListener('click', () => {
                            if (dom.getAttribute('data') === 'true') {
                                dom.querySelectorAll('p[stamp="true"]').forEach(el => {
                                    removeSeenAt(el);
                                });

                                return;
                            }

                            let node = document.createElement('p');
                            node.classList.add('text-sm');
                            node.classList.add('text-gray-400');
                            node.setAttribute('stamp', 'true');
                            node.innerText = '{{ __('Sent @') }} ' + JSON.parse(dom.getAttribute('meta')).stamp;

                            document.querySelectorAll('p[stamp="true"]').forEach(el => {
                                removeSeenAt(el);
                            });

                            dom.appendChild(node);
                            dom.setAttribute('data', 'true');
                        });
                    });

                    document.querySelectorAll('#participant-videos video').forEach(dom => {
                        dom.setAttribute('poster', 'https://suitabletech.com/images/HelpCenter/errors/Lenovo-Camera-Error.JPG');
                    });

                    window.onload = () => {
                        chatBox.focus();
                        chatDialog.scrollTop = chatDialog.scrollHeight;
                    };

                    chatBox.addEventListener('keyup', e => {
                        if (e.keyCode === 13) {
                            e.preventDefault();
                            chatBoxBtn.click();
                        }
                    });

                    chatBoxBtn.addEventListener('click', () => {
                        // TODO: Send To Server & Add To Chat Dialog
                        chatBox.value = '';
                    });

                    chatDialog.addEventListener('scroll', () => {
                        if (chatDialog.scrollTop === chatDialog.scrollHeight) // TODO: Add Check For Has Scroll To Bottom Icon
                        {
                            // TODO: Remove Go To Bottom Icon
                            return;
                        }

                        // TODO: Add Scroll To Bottom Icon
                    });

                    navigator.mediaDevices.enumerateDevices().then(d => {
                        console.log(d);
                    });

                    let el = document.querySelector('video');

                    navigator.mediaDevices.getUserMedia({
                        audio: true,
                        video: {width: '750px', height: '300px;'}
                    }).then(stream => {
                        el.srcObject = stream;
                        el.onloadedmetadata = () => {
                            el.play();
                        };
                    }).catch(err => {
                        el.setAttribute('poster', 'https://suitabletech.com/images/HelpCenter/errors/Lenovo-Camera-Error.JPG');
                    });
                </script>
            </div>
        </div>
    </div>
</x-app-layout>

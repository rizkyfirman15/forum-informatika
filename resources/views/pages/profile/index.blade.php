@extends('layouts.app', [
        'title' => $user->name . ' (@' . $user->username . ')',
        'footer' => true,
        'navbar' => true,
])

@section('content')
    <div class="flex w-full bg-cool-gray-200">
        <div class="block w-full px-6 lg:w-6/12 mx-auto mt-4 mb-10 justify-center" style="min-height: 80vh;">
 
            <!-- profile -->
            <div class="w-full mt-4 bg-white shadow-lg rounded p-8 text-center relative">
                
                @if (auth()->check() && auth()->user()->username == $user->username)
                <div class="absolute">
                    <a href="{{ route('setting') }}" class="bg-indigo-500 p-2 px-4 text-white hover:bg-indigo-600">
                        <i class="fa fa-edit"></i> Ubah Profil
                    </a>
                </div>                    
                @endif

                <div class="avatar block mb-4">
                    <img class="inline-block rounded-full" src="{{ asset('avatar/' . $user->avatar) }}" alt="Avatar" width="70" height="70">
                </div>
                <div class="mt-4 font-bold">{{ $user->name }}</div>
                <div class="mb-4 text-xs">{{ '@' . $user->username }}</div>
                <div>                    
                    <span class="p-2 text-white bg-red-300 rounded break-words">
                        {{ $user->email }}
                    </span>
                </div>
            </div>
            
            <!-- activity -->
            <div class="w-full mt-4 bg-white shadow-lg rounded p-8 text-left">
                <div class="font-bold text-lg text-gray-500">Aktivitas Pengguna</div>
                    <div class="bg-white mt-4">
                        <nav class="flex flex-col sm:flex-row">
                            <a href="?" class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none {{ (request()->get('activity', null) == null) ? 'text-blue-500 border-b-2 font-medium border-blue-500' : '' }}">
                                Diskusi
                            </a>
                            <a href="?activity=comment" class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none {{ request()->get('activity', null) == 'comment' ? 'text-blue-500 border-b-2 font-medium border-blue-500' : '' }}">
                                Komentar
                            </a>
                        </nav>
                    </div>
                    @if (count($activities) == 0)
                        <div class="text-center">
                            Tidak Ada Kegiatan
                        </div>
                    @else
                        <div class="relative w-10/12 m-8">
                            <div class="border-r-2 border-indigo-500 absolute h-full top-0" style="left: 15px"></div>
                            <ul class="list-none m-0 p-0">
                                @foreach ($activities as $activity)
                                    @php
                                        $title = '';
                                        $subtitle = '';
                                        $time = '';

                                        if ($activity instanceOf \App\Models\Discussion) {
                                            $title = 'Create Discussion';
                                            $subtitle = $activity->title;
                                            $link = route('discussion.show', $activity->slug);
                                            $time = $activity->created_at;
                                        }


                                        if ($activity instanceOf \App\Models\Comment) {
                                            if ($activity->commentable  instanceOf \App\Models\Discussion) {
                                                $discussion = $activity->commentable;
                                                $title = 'Reply on a discussion';
                                                $subtitle = 'in a discussion "'. $discussion->title .'"';
                                                $link = route('discussion.show', $discussion->slug);
                                                $time = $activity->created_at;
                                            }
                                        }
                                    @endphp
                                    <li class="mb-2">
                                        <div class="flex items-center mb-1">
                                            <div class="bg-indigo-500 rounded-full h-8 w-8"></div>
                                            <div class="flex-1 ml-4 font-medium">{{ $time }} - {{ $title }}</div>
                                        </div>
                                        <div class="ml-12 text-sm text-gray-400">
                                            @isset($link)
                                                <a href="{{ $link }}">{{ $subtitle }}</a>
                                            @else
                                                {{ $subtitle }}
                                            @endisset
                                        </div>
                                    </li>                            
                                @endforeach
                            </ul>
                        </div>
                    @endif
            </div>

        </div>
    </div>
@stop
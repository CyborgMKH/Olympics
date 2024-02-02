@extends('layout.master')
@section('content')
<section>
    <main class="w-screen min-h-screen flex flex-col">
        @foreach ($tickets as $ticket)
            
            <section class="w-full flex-grow bg-zinc-200 flex items-center justify-center p-4">
                <div class="flex w-full max-w-3xl text-zinc-50 h-64">
                    <div class="h-full bg-zinc-900 flex items-center justify-center px-8 rounded-l-3xl">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        width="140px" height="140px" viewBox="0 0 232 232" enable-background="new 0 0 232 232" xml:space="preserve">
                        <rect x="0" y="0" width="232" height="232" fill="#18181b" /><g transform="translate(16,16)"><g transform="translate(72,0) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(80,0) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(104,0) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(128,0) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(80,8) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(104,8) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(112,8) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(120,8) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(128,8) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(64,16) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(72,16) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(128,16) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(64,24) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(80,24) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(96,24) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(104,24) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(64,32) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(96,32) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(104,32) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(128,32) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(64,40) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(80,40) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(104,40) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(112,40) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(120,40) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(128,40) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(64,48) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(80,48) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(96,48) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(112,48) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(128,48) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(64,56) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(80,56) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(96,56) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(0,64) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(16,64) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(24,64) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(32,64) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(40,64) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(48,64) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(72,64) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(80,64) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(88,64) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(96,64) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(104,64) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(112,64) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(120,64) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(128,64) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(144,64) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(152,64) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(160,64) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(168,64) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(176,64) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(8,72) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(16,72) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(24,72) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(32,72) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(56,72) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(64,72) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(96,72) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(128,72) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(152,72) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(184,72) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(0,80) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(8,80) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(24,80) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(48,80) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(56,80) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(72,80) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(80,80) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(88,80) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(104,80) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(120,80) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(136,80) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(160,80) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(168,80) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(184,80) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(192,80) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(8,88) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(32,88) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(56,88) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(64,88) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(88,88) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(96,88) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(112,88) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(128,88) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(136,88) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(192,88) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(0,96) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(8,96) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(48,96) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(56,96) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(64,96) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(72,96) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(80,96) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(96,96) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(104,96) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(112,96) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(136,96) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(144,96) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(152,96) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(160,96) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(176,96) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(184,96) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(192,96) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(0,104) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(8,104) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(24,104) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(56,104) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(64,104) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(80,104) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(104,104) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(128,104) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(152,104) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(168,104) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(184,104) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(0,112) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(16,112) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(24,112) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(40,112) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(48,112) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(56,112) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(64,112) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(88,112) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(96,112) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(104,112) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(112,112) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(120,112) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(128,112) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(144,112) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(152,112) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(160,112) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(168,112) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(184,112) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(192,112) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(0,120) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(24,120) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(32,120) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(56,120) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(64,120) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(88,120) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(112,120) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(120,120) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(152,120) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(160,120) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(192,120) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(0,128) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(16,128) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(48,128) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(56,128) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(64,128) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(72,128) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(80,128) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(88,128) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(128,128) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(136,128) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(144,128) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(152,128) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(160,128) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(176,128) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(64,136) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(80,136) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(96,136) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(104,136) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(120,136) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(128,136) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(160,136) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(168,136) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(104,144) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(112,144) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(128,144) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(144,144) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(160,144) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(176,144) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(184,144) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(192,144) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(64,152) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(96,152) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(104,152) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(128,152) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(160,152) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(168,152) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(184,152) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(192,152) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(64,160) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(72,160) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(80,160) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(96,160) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(112,160) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(120,160) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(128,160) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(136,160) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(144,160) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(152,160) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(160,160) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(176,160) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(184,160) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(192,160) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(64,168) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(72,168) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(80,168) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(120,168) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(136,168) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(144,168) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(160,168) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(168,168) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(176,168) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(184,168) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(192,168) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(64,176) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(80,176) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(88,176) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(96,176) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(136,176) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(168,176) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(176,176) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(192,176) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(72,184) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(80,184) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(88,184) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(112,184) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(128,184) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(144,184) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(152,184) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(160,184) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(168,184) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(192,184) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(64,192) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(80,192) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(88,192) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(136,192) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(152,192) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(160,192) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(168,192) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(176,192) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(184,192) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(192,192) scale(0.08,0.08)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(0,0) scale(0.56, 0.56)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <g>
                            <rect x="15" y="15" style="fill:none;" width="70" height="70"/>
                            <path d="M85,0H15H0v15v70v15h15h70h15V85V15V0H85z M85,85H15V15h70V85z"/>
                        </g>
                        </g></g><g transform="translate(144,0) scale(0.56, 0.56)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <g>
                            <rect x="15" y="15" style="fill:none;" width="70" height="70"/>
                            <path d="M85,0H15H0v15v70v15h15h70h15V85V15V0H85z M85,85H15V15h70V85z"/>
                        </g>
                        </g></g><g transform="translate(0,144) scale(0.56, 0.56)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <g>
                            <rect x="15" y="15" style="fill:none;" width="70" height="70"/>
                            <path d="M85,0H15H0v15v70v15h15h70h15V85V15V0H85z M85,85H15V15h70V85z"/>
                        </g>
                        </g></g><g transform="translate(16,16) scale(0.24, 0.24)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(160,16) scale(0.24, 0.24)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g><g transform="translate(16,160) scale(0.24, 0.24)"><g transform="" style="fill: rgb(255, 255, 255);">
                        <rect width="100" height="100"/>
                        </g></g></g></svg>
                    </div>
                    <div class="relative h-full flex flex-col items-center border-dashed justify-between border-2 bg-zinc-900 border-zinc-50">
                        <div class="absolute rounded-full w-8 h-8 bg-zinc-200 -top-5"></div>
                        <div class="absolute rounded-full w-8 h-8 bg-zinc-200 -bottom-5"></div>
                    </div>
                    <div class="h-full py-8 px-10 bg-zinc-900 flex-grow rounded-r-3xl flex flex-col">
                        <div class="flex w-full justify-between items-center">
                            <div>
                                <h2 class="w-full text-2xl font-bold">
                                    {{$ticket->event->name}}
                                </h2>
                                <h2 class="w-full text-2xl font-bold">
                                    {{$ticket->event->schedule}}
                                </h2>
                            </div>
                        </div>
                        <div class="flex w-full mt-auto justify-between">
                            <div class="flex flex-col">
                                <span class="text-xs text-zinc-400">Date and time</span>
                                <span class="font-mono">{{$ticket->created_at}}</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-xs text-zinc-400">no of seats</span>
                                <span class="font-mono">{{$ticket->quantity}}</span>
                            </div>
                            
                            <div class="flex flex-col">
                                <span class="text-xs text-zinc-400">User Name</span>
                                <span class="font-mono">{{$ticket->user->name}}</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-xs text-zinc-400">Ticket no</span>
                                <span class="font-mono">{{$ticket->id}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
    </main>
</section>
@endsection

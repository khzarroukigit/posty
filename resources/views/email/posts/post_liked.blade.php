@component('mail::message')
# Introduction

{{$liker->username}} like your post

@component('mail::button', ['url' => route('posts.show',$post)])
Show Post
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

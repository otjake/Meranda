@component('mail::message')
# Introduction

The body of your message.
New Post: {{$justCreated->post_title}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

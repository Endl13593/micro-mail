@component('mail::message')
# Introduction

Você recebeu um novo comentário.

@component('mail::button', ['url' => config('api.url_frontend')])
Clique aqui e confira
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent

@component('mail::message')
# Bem-vindo ao VictorGram.

Esta é uma comunidade de desenvolvedores e nós estamos muito animados com a sua presença!

{{--@component('mail::button', ['url' => ''])--}}
{{--Button Text--}}
{{--@endcomponent--}}

Muito obrigado,<br>
{{ config('app.name') }}.
@endcomponent

<x-layout>
    <x-slot:title>
        {{ $title }} - site.com
        </x-slot>
Post consists of : {{ $post_text }}
Current timestamp: {{ time() }}
{{ count($arr) }}
{{ $year ?? date('Y') }}
{{-- По умолчанию оператор {{ }} автоматически обрабатывает данные через функцию htmlentities для предотвращения XSS-атак. Если вы не хотите экранировать данные, используйте такой синтаксис(ниже) и это комментарий --}}
{!! $arr[0].$arr[1] !!}
@if ($isAuth)
    вы авторизованы
@endif
</x-layout>

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
@if (!$isAuth)
    вы не авторизованы
@endif
@if ($isAuth)
    вы авторизованы
@else
    вы не авторизованы
@endif
        @if ($num > 0)
            больше нуля
        @elseif ($num === 0)
            ноль
        @else
            меньше нуля
        @endif

    @if (!$isAuth)
            вы еще не авторизованы
    @endif
    @unless ($isAuth)
            вы еще не авторизованы
    @endunless
        @if (count($arr) >= 1)
            в массиве есть записи
        @else
            в массиве нет записей
        @endif
        <ul>
            @foreach ($arr as $elem)
                <li>{{ $elem }}</li>
            @endforeach
        </ul>
</x-layout>

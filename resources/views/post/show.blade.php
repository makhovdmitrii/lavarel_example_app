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
    @foreach ($arr as $key => $elem)
        {{ $key + 1 }} {{ $elem }}
    @endforeach
        <ul>
            @foreach ($arr as $elem)
                @if ($elem > 0)
                    <li>{{ $elem }}</li>
                @endif
            @endforeach
        </ul>
        @if (count($arr) > 0)
            <ul>
                @foreach ($arr as $elem)
                    <li>{{ $elem }}</li>
                @endforeach
            </ul>
    @endif
    @foreach ($arr1 as $subArr)
        @foreach ($subArr as $elem)
            {{ $elem }}
        @endforeach
    @endforeach
        <ul>
            @foreach ($arr1 as $subArr)
                <li>
                    <ul>
                        @foreach ($subArr as $elem)
                            <li>{{ $elem }}</li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
        @forelse ($arr as $elem)
            <p>{{ $elem }}</p>
        @empty
            <p>в массиве нет элементов</p>
       @endforelse
        @foreach ($arr as $elem)
            @if ($loop->first)
                первая итерация
            @endif
            @if ($loop->last)
                последняя итерация
            @endif
            {{ $elem }}
        @endforeach
        @foreach ($arr as $elem)
            @if ($loop->odd)
                нечетная итерация
            @endif
            @if ($loop->even)
                четная итерация
            @endif
        {{ $elem }}
        @endforeach
        <br>
{{-- https://code.mu/ru/php/framework/laravel/book/prime/blade/variable-loop/ --}}
@foreach ($arr as $elem)
{{ $loop->index }}
{{ $elem }}
@endforeach
<br>
@foreach ($arr as $elem)
{{ $loop->iteration }}
{{ $elem }}
@endforeach
<br>
@foreach ($arr as $elem)
{{ $loop->remaining }}
{{ $elem }}
@endforeach
<br>
@foreach ($arr as $elem)
{{ $loop->count }}
{{ $elem }}
@endforeach
    @foreach ($arr as $elem)
        {{ $elem }}
        @if ($elem == 3)
            @break
        @endif
    @endforeach
    @foreach ($arr as $elem)
        {{ $elem }}
        @break($elem == 3)
    @endforeach
    @foreach ($arr as $elem)
        @if ($elem == 3)
            @continue
        @endif
        {{ $elem }}
    @endforeach
    @foreach ($arr as $elem)
        @continue($elem == 3)
        {{ $elem }}
    @endforeach
        @for ($i = 0; $i < 10; $i++)
            значение счетчика: {{ $i }}
        @endfor
    @php
        echo 123;
    @endphp
</x-layout>

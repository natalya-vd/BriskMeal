<a href="{{ route('catalog-test') }}">Каталог</a>
@if(count($recipes))
    @php
        $cartCost = 0;
    @endphp

    @foreach($recipes as $recipe)
        @php
            $cartCost = $cartCost + (($recipe->price) * ($recipe->pivot->quantity));
        @endphp
        <div style="margin-bottom: 30px">
            <p>Рецепт: {{ $recipe->name }}</p>
            <p>Цена: {{ $recipe->price }}</p>
            <p>Количество: {{ $recipe->pivot->quantity }}</p>
            <p>Стоимость: {{ ($recipe->price) * ($recipe->pivot->quantity) }}</p>
            <p>@dd($recipe->pivot)</p>

            <div style="display: flex">
                <form action="{{ route('cart-minus', $recipe) }}" method="post" style="margin-right: 3px">
                    @csrf
                    <button type="submit">-1</button>
                </form>

                <form action="{{ route('cart-plus', $recipe) }}" method="post" style="margin-right: 15px">
                    @csrf
                    <button type="submit">+1</button>
                </form>

                <form action="{{ route('cart-remove', $recipe) }}" method="post">
                    @csrf
                    <button type="submit">Удалить</button>
                </form>
            </div>
        </div>
        <hr>
    @endforeach
    <h3>Итого: {{ $cartCost }}</h3>
@else
    <p>Ваша корзина пуста</p>
@endif

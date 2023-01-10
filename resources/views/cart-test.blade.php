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

            <form action="{{ route('cart-delete', $recipe) }}" method="post">
                @csrf
                <button type="submit">Удалить</button>
            </form>
        </div>
        <hr>
    @endforeach
    <h3>Итого: {{ $cartCost }}</h3>
@else
    <p>Ваша корзина пуста</p>
@endif

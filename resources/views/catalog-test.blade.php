<a href="{{ route('cart-test') }}">Корзина</a>
@foreach($recipes as $recipe)
    <div style="margin-bottom: 30px">
        <p>Рецепт: {{ $recipe['name'] }}</p>
        <p>Цена: {{ $recipe['price'] }}</p>

        <form action="{{ route('cart-add', $recipe) }}" method="post">
        @csrf
        <!--<label for="input-quantity">Количество</label>-->
            <input type="text" name="quantity" id="input-quantity" value="1" hidden>
            <button type="submit" class="buy" data-id="{{ $recipe->id }}">Добавить в корзину</button>
        </form>
    </div>
    <hr>
@endforeach

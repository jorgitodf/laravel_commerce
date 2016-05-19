@extends('store.store')

@section('content')
    <section id="cart_items">
        <div class="container">
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="description">Descrição</td>
                        <td class="price">Valor</td>
                        <td class="price">Quantidade</td>
                        <td class="price">Total</td>
                        <td class="price"></td>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($cart->all() as $cod=>$item)
                        <tr>
                            <td class="cart_product">
                                <a href="{{ route('store.product', ['id'=>$cod]) }}">
                                    Imagem
                                </a>
                            </td>
                            <td class="cart_description">
                                <h4><a href="{{ route('store.product', ['id'=>$cod]) }}">{{ $item['name'] }}</a> </h4>
                                <p>Código: {{ $cod }}</p>
                            </td>
                            <td class="cart_price">
                                R$ {{ number_format($item['price'], 2, ',', '.') }}
                            </td>
                            <td class="cart_quantity">
                                {!! Form::open(['route'=>['cart.update', $cod], 'method'=>'put']) !!}
                                <div class="input-group" style="width: 120px">
                                    {!! Form::text('qtd', $item['qtd'], ['class'=>'form-control']) !!}
                                    <span class="input-group-btn">
                                        {!! Form::submit('Alterar', ['class'=>'btn btn-default']) !!}
                                      </span>
                                </div><!-- /input-group -->
                                {!! Form::close() !!}
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price"> R$ {{ $item['price'] * $item['qtd'] }}</p>
                            </td>
                            <td class="cart_delete">
                                <a href="{{ route('cart.destroy', ['id'=>$cod]) }}" class="cart_quantity_button">Delete</a>
                            </td>
                        </tr>

                    @empty
                        <tr>
                            <td colspan="6">
                                <p>Nenhum item encontrado</p>
                            </td>
                        </tr>

                    @endforelse

                    <tr class="cart_menu">
                        <td colspan="6">
                            <div class="pull-right">
                                <span style="margin-right: 80px">
                                    TOTAL: R$ {{ number_format($cart->getTotal(), 2, ',', '.') }}
                                </span>

                                <a href="{{ route('checkout.place') }}" class="btn btn-success">Fechar a conta</a>
                            </div>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
@stop
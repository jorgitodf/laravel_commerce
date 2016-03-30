<h1>Listagem de Produtos</h1>

<table style="width:40%">
    <tr>
        <td><b>Nome do Produto</b></td>
        <td><b>Tipo do Produto</b></td>
        <td><b>Preço do Produto</b></td>
    </tr>
    @foreach($products as $product)
    <tr>
        <td> {{ $product->name }} </td>
        <td> {{ $product->description }} </td>
        <td> R$ {{ $product->price }} </td>
    </tr>
    @endforeach
<table>
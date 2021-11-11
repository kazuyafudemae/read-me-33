@extends('layouts.helloapp')

@section('title', 'Items')

@section('menubar')
@parent
Itemページ
@endsection

@section('content')
<table>
<tr><th>商品名</th><th>商品説明</th><th>値段</th><th>在庫の有無</th></tr>
@foreach ($items as $item)
<tr>
<td><a href='{{route('item.index', ['id' => $item->id])}}'>{{$item->name}}</a></td>
<td>{{$item->explanation}}</td>
<td>{{$item->price}}</td>
@if ($item->stock >= 1)
<td>在庫あり</td>
@else
<td>在庫なし</td>
@endif
</tr>
@endforeach
</table>
@endsection

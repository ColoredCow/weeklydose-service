@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <h1>Reading Items</h1>
    <br><br>
    <table class="table table-striped table-bordered" id="reading_items_table">
        <tr>
            <th>Topic</th>
            <th>URL</th>
            <th>Recommended By</th>
            <th>Date</th>
        </tr>
        @foreach ($reading_items as $reading_item)
        <tr>
            <td>{{ $reading_item->topic }}</td>
            <td><a href="{{ $reading_item->url }}" target="_blank">{{ $reading_item->url }}</a></td>
            <td>{{ $reading_item->recommended_by }}</td>
            <td>{{ $reading_item->created_at }}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection

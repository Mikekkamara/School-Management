@extends('layouts.app')
@section('content')
    <div class="expireContainer">
        @if ($count == 0)
            <p class="stock">No products yet</p>
        @else
            <table>
                <tr>
                    <th>product name</th>
                    <th>days to expiry</th>
                    <th>status</th>
                    <th>action</th>
                </tr>
                @foreach ($items as $item )
                    <tr>
                        <td>{{ $item->productName }}</td>
                        <td>{{ $item->life }}</td>
                            {{-- Item Status --}}
                            @if ($item->life == null)
                                <td></td>
                            @elseif ($item->life == 0)
                                <td>Expiring today</td>
                            @elseif ($item->life < 0)
                                <td>Expired</td>
                            @else
                                <td>Safe</td>
                            @endif
                            {{-- Action --}}
                            @if($item->life >= 0)
                                <td>
                                    <a href="" class="rlinks">Update</a>
                                </td>
                            @elseif ($item->life < 0 )
                                <td>
                                    <a href="" class="rlinks" style="color: red">Remove</a>
                                </td>
                            @endif

                    </tr>
                @endforeach
            </table>

        @endif
    </div>
@endsection

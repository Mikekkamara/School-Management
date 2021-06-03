@extends('layouts.app')
@section('content')
    <div class="tableContainer">
        <p>items near expiry/expired <a href="{{ route('storeOptions')}}"><i class="fas fa-times"></i></a></p>
        @if ($count == 0)
            <span>No products yet</span>
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

@extends('template.template_dashboard')

@section('title', 'Lists Transaction')

@section('head')

@endsection

@section('content-back')
    <div class="card">
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Name Product</th>
                        <th>Qty - Price</th>
                        <th>Order</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($data['transactions'] as $transaction)
                        <tr>
                            <td>
                                <span class="fw-medium">{{ $loop->iteration }}</span>
                            </td>
                            
                           
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection

@extends('admin.admin-layout.master')

@section('title', 'Admin-Home')
@section('content')
    {{-- START Wrapper --}}

    {{-- Header --}}

    {{-- Right Sidebar --}}

    {{-- Sidebar Here --}}

    <!-- ==================================================== -->
    <!-- Start right Content here -->
    <!-- ==================================================== -->
    <div class="page-content">

        <!-- Start Container Fluid -->
        <div class="container-fluid">

            <!-- Start here.... -->
            <div class="row">
                <div class="col-xxl-5">
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-primary text-truncate mb-3" role="alert">
                                Monitor dashboard activities regularly to keep everything running smoothly.
                              </div>                              
                        </div>

                        <!-- Total Orders -->
                        <div class="col-md-6">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-md bg-soft-primary rounded">
                                                <iconify-icon icon="solar:cart-5-bold-duotone"
                                                    class="avatar-title fs-32 text-primary"></iconify-icon>
                                            </div>
                                        </div>
                                        <div class="col-6 text-end">
                                            <p class="text-muted mb-0 text-truncate">Total Orders</p>
                                            <h3 class="text-dark mt-1 mb-0">{{ number_format($totalOrders) }}</h3>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="card-footer py-2 bg-light bg-opacity-50 d-flex justify-content-between align-items-center">
                                    <span class="text-success"> <i class="bx bxs-up-arrow fs-12"></i>
                                        {{ $percentages['total'] }}%</span>
                                    {{-- <a href="#!" class="text-reset fw-semibold fs-12">View More</a> --}}
                                </div>
                            </div>
                        </div>

                        <!-- Confirmed Orders -->
                        <div class="col-md-6">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-md bg-soft-primary rounded">
                                                <i class="bx bx-award avatar-title fs-24 text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="col-6 text-end">
                                            <p class="text-muted mb-0 text-truncate">Confirmed Orders</p>
                                            <h3 class="text-dark mt-1 mb-0">{{ number_format($confirmedOrders) }}</h3>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="card-footer py-2 bg-light bg-opacity-50 d-flex justify-content-between align-items-center">
                                    <span class="text-success"> <i class="bx bxs-up-arrow fs-12"></i>
                                        {{ $percentages['confirmed'] }}%</span>
                                    {{-- <a href="#!" class="text-reset fw-semibold fs-12">View More</a> --}}
                                </div>
                            </div>
                        </div>

                        <!-- Pending Orders -->
                        <div class="col-md-6">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-md bg-soft-primary rounded">
                                                <i class="bx bxs-backpack avatar-title fs-24 text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="col-6 text-end">
                                            <p class="text-muted mb-0 text-truncate">Pending Orders</p>
                                            <h3 class="text-dark mt-1 mb-0">{{ number_format($pendingOrders) }}</h3>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="card-footer py-2 bg-light bg-opacity-50 d-flex justify-content-between align-items-center">
                                    <span class="text-danger"> <i class="bx bxs-down-arrow fs-12"></i>
                                        {{ $percentages['pending'] }}%</span>
                                    {{-- <a href="#!" class="text-reset fw-semibold fs-12">View More</a> --}}
                                </div>
                            </div>
                        </div>

                        <!-- Rejected Orders -->
                        <div class="col-md-6">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-md bg-soft-primary rounded">
                                                <i class="bx bx-dollar-circle avatar-title text-primary fs-24"></i>
                                            </div>
                                        </div>
                                        <div class="col-6 text-end">
                                            <p class="text-muted mb-0 text-truncate">Rejected Orders</p>
                                            <h3 class="text-dark mt-1 mb-0">{{ number_format($rejectedOrders) }}</h3>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="card-footer py-2 bg-light bg-opacity-50 d-flex justify-content-between align-items-center">
                                    <span class="text-danger"> <i class="bx bxs-down-arrow fs-12"></i>
                                        {{ $percentages['rejected'] }}%</span>
                                    {{-- <a href="#!" class="text-reset fw-semibold fs-12">View More</a> --}}
                                </div>
                            </div>
                        </div>
                    </div> <!-- end row -->
                </div> <!-- end col -->

                <div class="col-xxl-7">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="card-title">Performance</h4>
                                <div>
                                    <button type="button" id="btnAll" class="btn btn-sm btn-outline-light">ALL</button>
                                    <button type="button" id="btn1M" class="btn btn-sm btn-outline-light">1M</button>
                                    <button type="button" id="btn6M" class="btn btn-sm btn-outline-light">6M</button>
                                    <button type="button" id="btn1Y"
                                        class="btn btn-sm btn-outline-light active">1Y</button>
                                </div>
                            </div>

                            <div dir="ltr">
                                <div id="dash-performance-chart" class="apex-charts"></div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <h4 class="card-title">
                                    Recent Orders
                                </h4>

                                {{-- <a href="#!" class="btn btn-sm btn-soft-primary">
                                    <i class="bx bx-plus me-1"></i>Create Order
                                </a> --}}
                            </div>
                        </div>
                        <!-- end card body -->
                        <div class="table-responsive table-centered">
                            <table class="table mb-0">
                                <thead class="bg-light bg-opacity-50">
                                    <tr>
                                        <th class="ps-3">Order ID</th>
                                        <th>Date</th>
                                        <th>Product</th>
                                        <th>Customer Name</th>
                                        <th>Email ID</th>
                                        <th>Phone No.</th>
                                        <th>Address</th>
                                        <th>Payment Type</th>
                                        <th>Payment SS</th>
                                        <th>Status</th>
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td class="ps-3">
                                                <a
                                                    href="{{ route('admin.payment.confirm', $order->id) }}">#{{ $order->id }}</a>
                                            </td>
                                            <td>{{ $order->created_at->format('d M Y') }}</td>
                                            <td>
                                                @if ($order->items->isNotEmpty())
                                                    @php
                                                        $firstItem = $order->items->first();
                                                        $productImage =
                                                            $firstItem->product->image_front ?? 'default-image.jpg';
                                                    @endphp
                                                    <img src="{{ asset('storage/' . $productImage) }}"
                                                        alt="product-image" class="img-fluid avatar-sm">
                                                @else
                                                    <span>No product image</span>
                                                @endif
                                            </td>

                                            <td>
                                                <a href="javascript:void(0)">{{ $order->name }}</a>
                                            </td>
                                            <td>{{ $order->email }}</td>
                                            <td>{{ $order->phone }}</td>
                                            <td>{{ $order->address }}</td>
                                            <td>{{ ucfirst($order->payment_method) }}</td>
                                            <td>
                                                @if ($order->payment_screenshot)
                                                    <img src="{{ asset('storage/' . $order->payment_screenshot) }}"
                                                        alt="Payment Screenshot"
                                                        style="max-width: 50px; max-height: 50px;">
                                                @else
                                                    <span>No Screenshot</span>
                                                @endif
                                            </td>

                                            <td>
                                                @if ($order->status == 'awaiting_bank_transfer')
                                                    <span
                                                        class="badge bg-warning text-dark d-inline-flex align-items-center px-2 py-1 rounded-sm font-weight-normal"
                                                        style="width: 150px;">
                                                        <i class="bx bxs-circle me-1" style="font-size: 10px;"></i> Verify
                                                        Payment
                                                    </span>
                                                @elseif ($order->status == 'confirmed')
                                                    <span
                                                        class="badge bg-success text-white d-inline-flex align-items-center px-2 py-1 rounded-sm font-weight-normal"
                                                        style="width: 150px;">
                                                        <i class="bx bxs-circle me-1" style="font-size: 10px;"></i>
                                                        Payment Confirmed
                                                    </span>
                                                @elseif ($order->status == 'cash_on_delivery')
                                                    <span
                                                        class="badge bg-secondary text-white d-inline-flex align-items-center px-2 py-1 rounded-sm font-weight-normal"
                                                        style="width: 150px;">
                                                        <i class="bx bxs-circle me-1" style="font-size: 10px;"></i> Cash
                                                        on Delivery
                                                    </span>
                                                @else
                                                    <span
                                                        class="badge bg-danger text-white d-inline-flex align-items-center px-2 py-1 rounded-sm font-weight-normal"
                                                        style="width: 150px;">
                                                        <i class="bx bxs-circle me-1" style="font-size: 10px;"></i>
                                                        {{ ucfirst($order->status) }}
                                                    </span>
                                                @endif
                                            </td>

                                            <td>
                                                <a href="{{ route('admin.order.view', $order->id) }}"
                                                    class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken"
                                                        class="align-middle fs-18"></iconify-icon></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- table responsive -->

                        <div class="card-footer border-top">
                            <div class="row g-3">
                                <div class="col-sm">
                                    <div class="text-muted">
                                        Showing
                                        <span class="fw-semibold">{{ $orders->firstItem() }}</span>
                                        to
                                        <span class="fw-semibold">{{ $orders->lastItem() }}</span>
                                        of
                                        <span class="fw-semibold">{{ $orders->total() }}</span>
                                        orders
                                    </div>
                                </div>

                                <div class="col-sm-auto">
                                    <ul class="pagination m-0">
                                        <!-- Previous Page Link -->
                                        @if ($orders->onFirstPage())
                                            <li class="page-item disabled">
                                                <a href="#" class="page-link"><i
                                                        class="bx bx-left-arrow-alt"></i></a>
                                            </li>
                                        @else
                                            <li class="page-item">
                                                <a href="{{ $orders->previousPageUrl() }}" class="page-link"><i
                                                        class="bx bx-left-arrow-alt"></i></a>
                                            </li>
                                        @endif

                                        <!-- Page Number Links -->
                                        @foreach ($orders->getUrlRange(1, $orders->lastPage()) as $page => $url)
                                            <li class="page-item {{ $page == $orders->currentPage() ? 'active' : '' }}">
                                                <a href="{{ $url }}" class="page-link">{{ $page }}</a>
                                            </li>
                                        @endforeach

                                        <!-- Next Page Link -->
                                        @if ($orders->hasMorePages())
                                            <li class="page-item">
                                                <a href="{{ $orders->nextPageUrl() }}" class="page-link"><i
                                                        class="bx bx-right-arrow-alt"></i></a>
                                            </li>
                                        @else
                                            <li class="page-item disabled">
                                                <a href="#" class="page-link"><i
                                                        class="bx bx-right-arrow-alt"></i></a>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div> <!-- end row -->

        </div>
        <!-- End Container Fluid -->

        {{-- Footer --}}

    </div>
    <!-- ==================================================== -->
    <!-- End Page Content -->
    <!-- ==================================================== -->


    <!-- END Wrapper -->
@endsection
@push('scripts')
    <script>
        window.chartOrdersData = @json($monthlyOrders); // Pass PHP data to JavaScript
    </script>
@endpush

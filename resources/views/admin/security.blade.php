@extends('admin.layout.app')
@section('content')

    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Security</h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- Elements -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Change Password</h3>
                </div>
                <div class="block-content">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                    <!-- Form Inline - Default Style -->
                    <form action="{{ route('admin.change.password') }}" method="POST" >
                        @csrf
                        <div class="row mb-3">
                            <div class="col-10">
                                <label class="" for="example-if-name">Old Password<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="example-if-name" name="current_password">
                            </div>
                            <div class="col-10">
                                <label class="" for="example-if-password">New Password <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="example-if-password" name="new_password" >
                            </div>
                            <div class="col-10">
                                <label class="" for="example-if-password">Confirm New Password <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="example-if-password" name="new_confirm_password" >
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                    <!-- END Form Inline - Default Style -->
                    <br>
                </div>

            </div>
            <!-- END Elements -->
        </div>
        <!-- END Page Content -->
    </main>

@endsection

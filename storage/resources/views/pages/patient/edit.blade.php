@extends('layouts.app')
@section('title')
{{ 'Add Physician' }}
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="{{ route('physician.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card mb-4">
                    <h5 class="card-header">Add Physician</h5>
                    <div class="card-body">
                        <div class="mt-3">
                            <label for="title" class="form-label">Account No. <span class="required">*</span></label>
                            <input type="text" class="form-control" id="title" name="title"
                                aria-describedby="defaultFormControlHelp" value="{{ old('title') }}" />
                            @error('title')
                            <div class="form-text text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="title" class="form-label">Facility Name <span
                                            class="required">*</span></label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        aria-describedby="defaultFormControlHelp" value="{{ old('title') }}" />
                                    @error('title')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="status" class="form-label">Account Representative</label>
                                    <select class="form-select" id="status" aria-label="Default select example"
                                        name="status">
                                        <option value="" disabled {{ old('status') ? '' : 'selected' }}>select
                                        </option>
                                        <option value="published" {{ old('status')=='published' ? 'selected' : '' }}>
                                            jon
                                        </option>
                                        <option value="draft" {{ old('status')=='draft' ? 'selected' : '' }}>doe
                                        </option>
                                    </select>
                                    @error('status')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="title" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        aria-describedby="defaultFormControlHelp" value="{{ old('title') }}" />
                                    @error('title')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="title" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        aria-describedby="defaultFormControlHelp" value="{{ old('title') }}" />
                                    @error('title')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="title" class="form-label">PCP No. (IF ANY)</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        aria-describedby="defaultFormControlHelp" value="{{ old('title') }}" />
                                    @error('title')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="title" class="form-label">NPI No.</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        aria-describedby="defaultFormControlHelp" value="{{ old('title') }}" />
                                    @error('title')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="title" class="form-label">Street Address</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        aria-describedby="defaultFormControlHelp" value="{{ old('title') }}" />
                                    @error('title')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="title" class="form-label">City</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        aria-describedby="defaultFormControlHelp" value="{{ old('title') }}" />
                                    @error('title')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="title" class="form-label">State</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        aria-describedby="defaultFormControlHelp" value="{{ old('title') }}" />
                                    @error('title')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="title" class="form-label">Zip Code</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        aria-describedby="defaultFormControlHelp" value="{{ old('title') }}" />
                                    @error('title')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="title" class="form-label">Clinic Name</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        aria-describedby="defaultFormControlHelp" value="{{ old('title') }}" />
                                    @error('title')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="title" class="form-label">Office Name</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        aria-describedby="defaultFormControlHelp" value="{{ old('title') }}" />
                                    @error('title')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="title" class="form-label">Fax No</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        aria-describedby="defaultFormControlHelp" value="{{ old('title') }}" />
                                    @error('title')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="title" class="form-label">Mobile No</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        aria-describedby="defaultFormControlHelp" value="{{ old('title') }}" />
                                    @error('title')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="col-md-12 note note-info">
                        <h4 class="block">Info!</h4>
                        <p>
                            Our system is designed to send Alert Notification via Text Message to the referring
                            Physician such as PANIC VALUES. Please enter up to 2 Mobile Numbers where you want to Send
                            your Alert Notifications.
                        </p>
                    </div>
                    <div class="card-body">
                        <div class="mt-3">
                            <label for="TagifyBasic" class="form-label">
                                Alert Notification No. 1
                            </label>
                            <input type="text" class="form-control" id="title" name="title"
                                aria-describedby="defaultFormControlHelp" value="{{ old('title') }}" />
                            @error('keywords')
                            <div class="form-text text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label for="meta_desc" class="form-label">Alert Notification No. 2</label>
                            <input type="text" class="form-control" id="title" name="title"
                                aria-describedby="defaultFormControlHelp" value="{{ old('title') }}" />
                            @error('meta_desc')
                            <div class="form-text text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-0 mt-5">
                            <button class="btn btn-primary" type="submit">
                                <span class="align-middle">Submit</span>
                            </button>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</div>
@endsection

@section('style')
<link rel="stylesheet" href="{{ asset('dashboard/global/assets/vendor/libs/tagify/tagify.css') }}" />
<link href="{{ asset('dashboard/global/assets/summernote/summernote-bs4.min.css') }}" rel="stylesheet">
<style>
    .panel-heading.note-toolbar {
        background: #232432 !important;
    }

    .ck-content {
        height: 500px;
    }

    .note-info {
        border-color: #57b5e3;
    }

    .note {
        margin: 0 0 20px 0;
        padding: 15px 30px 15px 15px;
        border-left: 5px solid #57b5e3;
        border-radius: 0px 4px 4px 0;
    }

    .required {
        color: #e02222;
        font-size: 12px;
        padding-left: 2px;
    }
</style>
@endsection

@section('scripts')
<script src="{{ asset('dashboard/global/assets/vendor/libs/tagify/tagify.js') }}"></script>
<script src="{{ asset('dashboard/global/assets/js/forms-tagify.js') }}"></script>
<script src="{{ asset('dashboard/global/assets/summernote/popper.min.js') }}"></script>
<script src="{{ asset('dashboard/global/assets/summernote/bootstrap.min.js') }}"></script>
<script src="{{ asset('dashboard/global/assets/summernote/summernote-bs4.min.js') }}"></script>
<script>
    $(document).ready(function() {
            $('#desc').summernote({
                tabsize: 2,
                height: 500,
            });
        });
</script>
@endsection
@extends('layouts.app', ['page' => 'Create Account', 'pageSlug' => 'chartofaccount', 'section' => 'chartofaccount'])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Create Account</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('chartofaccounts.index') }}" class="btn btn-sm btn-primary">Back to List</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('clients.store') }}" autocomplete="off">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">Client Information</h6>
                            <!-- <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('Group_code_id') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-coa">Group Code</label>
                                    <select name="Group_code_id" id="input-coa" class="form-select form-control-alternative{{ $errors->has('Group_code_id') ? ' is-invalid' : '' }}" required>
                                        @foreach ($coas as $coa)
                                            @if($coa['id'] == old('coa'))
                                                <option value="{{$coa['id']}}" selected>{{$coa['id']}}</option>
                                            @else
                                                <option value="{{$coa['id']}}">{{$coa['id']}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @include('alerts.feedback', ['field' => 'Group_code_id'])
                                </div>
                                
                                <div class="form-group{{ $errors->has('Group_account_id') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-coa">Group Account</label>
                                    <select name="Group_account_id" id="input-coa" class="form-select form-control-alternative{{ $errors->has('Group_account_id') ? ' is-invalid' : '' }}" required>
                                        @foreach ($coas as $coa)
                                            @if($coa['id'] == old('coa'))
                                                <option value="{{$coa['id']}}" selected>{{$coa['id']}}</option>
                                            @else
                                                <option value="{{$coa['id']}}">{{$coa['id']}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @include('alerts.feedback', ['field' => 'Group_account_id'])
                                </div>
                                <div class="form-group{{ $errors->has('general_account_id') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-coa">General Account</label>
                                    <select name="general_account_id" id="input-coa" class="form-select form-control-alternative{{ $errors->has('general_account_id') ? ' is-invalid' : '' }}" required>
                                        @foreach ($coas as $coa)
                                            @if($coa['id'] == old('coa'))
                                                <option value="{{$coa['id']}}" selected>{{$coa['id']}}</option>
                                            @else
                                                <option value="{{$coa['id']}}">{{$coa['id']}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @include('alerts.feedback', ['field' => 'general_account_id'])
                                </div> -->
                                

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        new SlimSelect({
            select: '.form-select'
        })
        new SlimSelect({
            select: '.form-select2'
        })
    </script>
@endpush('js')

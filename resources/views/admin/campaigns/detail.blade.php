@extends('twill::layouts.free')

@section('customPageContent')
    <a17-campaign-detail :tabs="[
        { name: 'report', label: 'Report' },
        { name: 'list', label: 'List' },
        { name: 'intent', label: 'Intent' },
    ]">
    <div class="custom-tab custom-tab--report">
            <p>Report</p>
        </div>

        <div class="custom-tab custom-tab--list">
            <p>List</p>
        </div>

        <div class="custom-tab custom-tab--intent">
            <p>Intent</p>
        </div>
    </a17-campaign-detail>
@stop

@section('customstyle')

<style type="text/css">
    .custom-tabs {
        margin-top: 7px;
    }

    .custom-tab {
        display: none;
    }

    .custom-tab.is-active {
        display: initial;
    }
</style>
@stop
@extends('twill::layouts.free')

@section('customPageContent')
    <a17-campaign-detail :tabs="[
        { name: 'report', label: 'Report' },
        { name: 'list', label: 'List' },
        { name: 'intent', label: 'Intent' },
    ]">
        <div class="custom-tab custom-tab--report">
            <div class="block mb-5">
                <h3 class="text-lg font-bold">Report Analytic</h3>
                <div class="block">
                    <span class="text-gray-700">Campaign</span> <strong>/ 
                    {{ $detail->title }}</strong>
                </div>
            </div>
            <div class="block">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-[30px] mb-[30px]">
                    <div
                        class="block rounded-lg bg-white shadow-lg">
                        <div class="p-6">
                            <h5
                                class="mb-2 text-xl font-bold leading-tight text-neutral-800">
                                Positive Sentiment
                            </h5>
                            <p class="mb-4 text-base text-neutral-600">
                                Kacau Keren
                            </p>
                        </div>
                        <div
                        class="border-solid border-t border-neutral-400 py-3 px-6 flex justify-between">
                         <span>Positive Count:</span>
                         <span>23.04%</span>
                        </div>
                    </div>

                    <div
                        class="block rounded-lg bg-white shadow-lg">
                        <div class="p-6">
                            <h5
                                class="mb-2 text-xl font-bold leading-tight text-neutral-800">
                                Negative Sentiment
                            </h5>
                            <p class="mb-4 text-base text-neutral-600">
                                Kacau Keren
                            </p>
                        </div>
                        <div
                        class="border-solid border-t border-neutral-400 py-3 px-6 flex justify-between">
                         <span>Negative Count:</span>
                         <span>23.04%</span>
                        </div>
                    </div>
                </div>

                
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-[30px] mb-[30px]">
                    <div
                        class="block rounded-lg bg-white shadow-lg">
                        <div class="p-6">
                            <h5
                                class="mb-2 text-xl font-bold leading-tight text-neutral-800">
                                Total View
                            </h5>
                            <div class="block">
                                <p class="text-base text-neutral-600">
                                    This Week
                                </p>
                                <strong class="block text-[30px]">500</strong>
                            </div>
                        </div>
                        <div
                        class="border-solid border-t border-neutral-400 py-3 px-6 flex justify-between">
                         <span>New View: 125</span>
                         <span>23.04%</span>
                        </div>
                    </div>
                    
                    <div
                        class="block rounded-lg bg-white shadow-lg">
                        <div class="p-6">
                            <h5
                                class="mb-2 text-xl font-bold leading-tight text-neutral-800">
                                Total Comment
                            </h5>
                            <div class="block">
                                <p class="text-base text-neutral-600">
                                    This Week
                                </p>
                                <strong class="block text-[30px]">500</strong>
                            </div>
                        </div>
                        <div
                        class="border-solid border-t border-neutral-400 py-3 px-6 flex justify-between">
                         <span>New Comment: 125</span>
                         <span>23.04%</span>
                        </div>
                    </div>
                    
                    <div
                        class="block rounded-lg bg-white shadow-lg">
                        <div class="p-6">
                            <h5
                                class="mb-2 text-xl font-bold leading-tight text-neutral-800">
                                Analytics
                            </h5>
                            <div class="block">
                                <p class="text-base text-neutral-600">
                                    This Week
                                </p>
                                <strong class="block text-[30px]">500</strong>
                            </div>
                        </div>
                        <div
                        class="border-solid border-t border-neutral-400 py-3 px-6 flex justify-between">
                         <span>New Statistic: 125</span>
                         <span>23.04%</span>
                        </div>
                    </div>
                </div>

                
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-[30px] mb-[30px]">
                    <div
                        class="block rounded-lg bg-white shadow-lg lg:px-20 lg:py-10 lg:col-span-1">
                        <div class="pb-6">
                            <h5
                                class="mb-2 text-xl font-bold leading-tight text-neutral-800">
                                Most Commented Post
                            </h5>
                        </div>
                        <div
                        class="text-center flex flex-col">
                            <strong>@username</strong>
                            <span>Posted: 27/01/23 13:00</span>
                            <strong class="text-bold text-[30px]">125</strong>
                        </div>
                    </div>

                    <div
                        class="block rounded-lg bg-white shadow-lg lg:col-span-2">
                        <div class="pt-6 pb-2 px-6">
                            <h5
                                class="mb-6 text-xl font-bold leading-tight text-neutral-800">
                                Data Fetch
                            </h5>
                            <div class="grid grid-cols-6 gap-10 border-solid border-b border-neutral-500 py-4">
                                <div class="col-span-5 flex items-center">
                                    <strong>@username -</strong>
                                    <p>text</p>
                                </div>
                                <div class="col-span-1">
                                    <strong>18:03</strong>
                                </div>
                            </div>
                            <div class="grid grid-cols-6 gap-10 py-4">
                                <div class="col-span-5 flex items-center">
                                    <strong>@username -</strong>
                                    <p>text</p>
                                </div>
                                <div class="col-span-1">
                                    <strong>18:03</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="custom-tab custom-tab--list">
            <div class="block mb-5">
                <h3 class="text-lg font-bold">URL List</h3>
                <div class="block">
                    <span class="text-gray-700">Campaign</span> <strong>/ 
                    {{ $detail->title }}</strong>
                </div>
            </div>
            <div class="block">
                <div
                    class="block rounded-lg bg-white shadow-lg">
                    <div class="p-6 flex justify-between">
                        <div class="flex justify-center">
                            <div class="relative mb-3 xl:w-48" data-te-input-wrapper-init>
                                <input
                                type="text"
                                class="peer block min-h-[auto] w-full rounded border-solid border bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                id="exampleFormControlInput1"
                                placeholder="Example label" />
                                <label
                                for="exampleFormControlInput1"
                                class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none"
                                >Search Creator Name
                                </label>
                            </div>
                        </div>
                    </div>
                    <div
                    class="pb-6 px-6 block">
                        <table class="table-auto w-full">
                            <thead>
                                <tr class="font-bold">
                                    <th class="px-2 py-4">#</th>
                                    <th class="px-2 py-4">URL Preview</th>
                                    <th class="px-2 py-4">Creator</th>
                                    <th class="px-2 py-4">View</th>
                                    <th class="px-2 py-4">Like</th>
                                    <th class="px-2 py-4">Comment</th>
                                    <th class="px-2 py-4">ER</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($detail->urls as $each)
                                <tr class="border-dashed border-b border-neutral-200">
                                    <td class="px-2 py-3 text-center">{{ $loop->iteration }}</td>
                                    <td class="px-2 py-3 text-center">{{ $each->url }}</td>
                                    <td class="px-2 py-3"></td>
                                    <td class="px-2 py-3"></td>
                                    <td class="px-2 py-3"></td>
                                    <td class="px-2 py-3"></td>
                                    <td class="px-2 py-3"></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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
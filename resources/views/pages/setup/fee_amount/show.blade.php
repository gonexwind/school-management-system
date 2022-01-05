@extends('layouts.default')

@section('content')
    <div class="u-content">
        <div class="u-body">
            <section class="es-form-area">
                <div class="card">
                    <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                        <h2 class="text-white mb-0">{{ $details['0']['fee_category']['name'] }} Details</h2>
                    </header>

                    <div class="card-body">
                        <div class="attendances-list-wrap">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead class="bg-gradient">
                                    <tr>
                                        <th scope="col" class="text-white text-center">No.</th>
                                        <th scope="col" class="text-white text-center">Class Name</th>
                                        <th scope="col" class="text-white text-center">Amount</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($details as $key => $data)
                                        <tr>
                                            <td class="text-center">{{ $key+1 }}</td>
                                            <td class="text-center">{{ $data['student_class']['name'] }}</td>
                                            <td class="text-center">{{ $data->amount }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
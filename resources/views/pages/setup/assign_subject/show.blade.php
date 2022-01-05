@extends('layouts.default')

@section('content')
    <div class="u-content">
        <div class="u-body">
            <section class="es-form-area">
                <div class="card">
                    <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                        <h2 class="text-white mb-0">{{ $details['0']['student_class']['name'] }}
                            Details
                        </h2>
                    </header>

                    <div class="card-body">
                        <div class="attendances-list-wrap">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead class="bg-gradient">
                                    <tr>
                                        <th scope="col" class="text-white text-center">No.</th>
                                        <th scope="col" class="text-white text-center">Subject</th>
                                        <th scope="col" class="text-white text-center">Full Mark</th>
                                        <th scope="col" class="text-white text-center">Pass Mark</th>
                                        <th scope="col" class="text-white text-center">Subjective Mark</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($details as $key => $data)
                                        <tr>
                                            <td class="text-center">{{ $key+1 }}</td>
                                            <td class="text-center">{{ $data['school_subject']['name'] }}</td>
                                            <td class="text-center">{{ $data->full_mark }}</td>
                                            <td class="text-center">{{ $data->pass_mark }}</td>
                                            <td class="text-center">{{ $data->subjective_mark }}</td>
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
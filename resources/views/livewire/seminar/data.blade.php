<div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive users-table">
                <table class="table table-sm data-table">
                    <thead class="thead">
                        <style>
                            tr:nth-child(odd) {
                            background-color: #e4e4e4;
                            }

                            tr:nth-child(even) {
                            background-color: #ffffff;
                            }

                            tr:hover {
                            background-color: #dfdddd;
                            }
                        </style>
                        <tr>
                            <th width="5%">No.</th>
                            <th width="40%">Event Name</th>
                            <th width="15%">Event Date</th>
                            <th width="15%">Application Deadline</th>
                            <th width="20%">Turnitin Deadline</th>
                            <th width="10%">Seats left</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($events as $event)
                        <tr>
                            <td>{{ $numbering++ }}</td>
                            <td>
                                {{ $event->event_id }}
                                <br>
                                EE-Seminar  {{ \Carbon\Carbon::parse($event->event_name)->format('d F Y') }}
                            </td>
                            <td>{{ \Carbon\Carbon::parse($event->event_date)->format('l,') }}<br>
                                {{ \Carbon\Carbon::parse($event->event_date)->format('d F Y ') }}<br>
                                {{ \Carbon\Carbon::parse($event->event_date)->format('H:i ') }}<br>
                            </td>
                            <td> {{ \Carbon\Carbon::parse($event->application_deadline)->format('l,') }}<br>
                                {{ \Carbon\Carbon::parse($event->application_deadline)->format('d F Y ') }}<br>
                                {{ \Carbon\Carbon::parse($event->application_deadline)->format('H:i') }}<br>
                            </td>
                            <td>{{ \Carbon\Carbon::parse($event->draft_deadline )->format('l,') }}<br>
                                {{ \Carbon\Carbon::parse($event->draft_deadline )->format('d F Y ') }}<br>
                                {{ \Carbon\Carbon::parse($event->draft_deadline )->format('H:i') }}<br>
                            <td>{{ $event->quota }}</td>
                        </tr>
                        @endforeach
                     </tbody>
                </table>
            </div>
        </div>
    </div>
     <div class="text-center mt-4">
    <button class="btn btn-primary" wire:click="Sebelumnya "{{ $page > 1 ? '' : ' disabled' }}>Sebelumnya </button>
    <button class="btn btn-primary" wire:click="Selanjutnya"{{ count($events) < $perPage ? ' disabled' : '' }}>Selanjutnya</button>
    </div>
</div>

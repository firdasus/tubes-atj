<div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive users-table">
                <table class="table table-sm data-table">
                    <thead class="thead">
                        <style>
                            tr:nth-child(odd) {
                            background-color: #ffffff;
                            }

                            tr:nth-child(even) {
                            background-color: #f2f2f2;
                            }

                            tr:hover {
                            background-color: #f2f2f2;
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
                            <td>{{ $event->event_id }}</td>
                            <td>{{ $event->event_date }}</td>
                            <td>{{ $event->application_deadline }}</td>
                            <td>{{ $event->draft_deadline }}</td>
                            <td>{{ $event->quota }}</td>
                        </tr>
                        @endforeach
                     </tbody>
                </table>
            </div>
        </div>
    </div>
     <div class="text-center mt-4">
    <button class="btn btn-primary" wire:click="previousPage"{{ $page > 1 ? '' : ' disabled' }}>Previous Page</button>
    <button class="btn btn-primary" wire:click="nextPage"{{ count($events) < $perPage ? ' disabled' : '' }}>Next Page</button>
    </div>
</div>
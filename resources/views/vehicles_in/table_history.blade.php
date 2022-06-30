<table id="data_table" class="table" width="100%">
    <thead>
        <tr>
            <th>Id</th>
            <th>Reg #</th>
            <th>Nama Kendaraan</th>
            <th>Area Parkir</th>
            <th>Nomer Parkir</th>
            <th>Dibuat Pada</th>
            <th>Dibuat Oleh</th>
            <th class="nosort">Status</th>
            {{-- <th>Aksi</th> --}}
        </tr>
    </thead>
    <tbody>
        @foreach ($vehiclesIn_History as $key => $vehicleIn)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $vehicleIn->vehicle->registration_number }}</td>
            <td>{{ $vehicleIn->vehicle->name }}</td>
            <td>{{ $vehicleIn->parking_area }}</td>
            <td>{{ $vehicleIn->parking_number }}</td>
            <td>{{ $vehicleIn->created_at->format('Y/m/d H:i A') }}</td>
            <td>{{ $vehicleIn->user->name }}</td>
            <td><label for="" class="badge badge-danger">Kendaraan Keluar</label></td>
            {{-- <td>
                <div class="btn-group table-actions">
                    <a href="#"><i class="ik ik-eye"></i></a>
                    <a href="{{ route('vehiclesIn.edit', $vehicleIn->id) }}"><i class="ik ik-edit-2"></i></a>
                    <a href="#" onclick=" confirm('Are you sure you want to delete this?');
                    document.getElementById('delete-data').submit();"><i class="ik ik-trash-2"></i></a>

                     <form id="delete-data" action="{{ route('vehiclesIn.destroy', $vehicleIn->id) }}" method="POST" class="d-none">
                        @method('Delete')
                        @csrf
                    </form>
                </div>
            </td> --}}
            <td></td>
        </tr>
        @endforeach
    </tbody>
</table>

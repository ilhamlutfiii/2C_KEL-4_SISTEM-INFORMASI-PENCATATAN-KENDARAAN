<form action="{{ route('vehicles.store') }}" class="forms-sample" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail3">Nomer Pendaftaran</label>
                <input type="text" name="registration_number"
                    value="{{ isset($vehicle) ? $vehicle->registration_number : '' }}" class="form-control"
                    id="exampleInputEmail3" readonly placeholder="Nomer Pendaftaran">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputName1">Kategori</label>
                <select name="category_id" class="form-control">
                    <option value="">Pilih</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if (isset($vehicle))
                            {{ $vehicle->category_id == $category->id ? 'selected' : '' }}
                    @endif>
                    {{ $category->name }}</option>
                    @endforeach
                </select>
                @if (isset($vehicle))
                    <input type="hidden" name="vehicle_id" value="{{ $vehicle->id }}">
                @endif
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputName1">Nama Pengunjung</label>
                <select name="customer_id" class="form-control">
                    <option value="">Pilih</option>
                    @foreach ($customers as $customer)
                        <option value="{{ $customer->id }}" @if (isset($vehicle))
                            {{ $vehicle->customer_id == $customer->id ? 'selected' : '' }}
                    @endif>
                    {{ $customer->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail3">Nama Kendaraan</label>
                <input type="text" name="name" value="{{ isset($vehicle) ? $vehicle->name : '' }}"
                    class="form-control" id="exampleInputEmail3" placeholder="Nama Kendaraan">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail3">Plat Nomer Kendaraan</label>
                <input type="text" name="plat_number" value="{{ isset($vehicle) ? $vehicle->plat_number : '' }}"
                    class="form-control" id="exampleInputEmail3" placeholder="Plat Nomer Kendaraan">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail3">Durasi Parkir</label>
                <input type="number" name="duration" value="{{ isset($vehicle) ? $vehicle->duration : '' }}"
                    class="form-control" id="exampleInputEmail3" placeholder="Durasi Parkir (berapa kali masuk)">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="exampleInputEmail3">Biaya Parkir</label>
                <input type="number" min="1" name="packing_charge" value="{{ isset($vehicle) ? $vehicle->packing_charge : '' }}"
                    class="form-control" id="exampleInputEmail3" placeholder="Biaya Parkir (berapa kali masuk)">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="exampleInputEmail3">Status Kendaraan</label>
                <select name="status" class="form-control">
                    @foreach (getVehicleStatus() as $key =>  $status)
                        <option value="{{ $key }}" @if (isset($vehicle))
                            {{ $vehicle->status == $key ? 'selected' : '' }}
                    @endif>
                    {{ $status }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mr-2">Submit</button>
    <button class="btn btn-light">Kembali</button>
</form>

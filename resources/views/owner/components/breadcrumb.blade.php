<div class="d-flex justify-content-between align-items-center flex-wrap mb-5 gap-3">
    <div class="d-flex flex-column">
        <h3>Dashboard</h3>
        <p class="mb-0">Financial Dashboard</p>
    </div>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#setDefaultCooperativeModal">
        Default cooperative
    </button>
</div>

<div class="modal fade" id="setDefaultCooperativeModal" tabindex="-1" role="dialog" aria-labelledby="setDefaultCooperativeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="setDefaultCooperativeModalLabel">Select Default Cooperative</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    @foreach ($cooperatives as $cooperative)
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="defaultCooperative" value="{{ $cooperative->id }}" id="defaultCooperative{{ $cooperative->id }}">
                            <label class="form-check-label" for="defaultCooperative{{ $cooperative->id }}">
                                {{ $cooperative->name }}
                            </label>
                        </div>
                    @endforeach
                    <button type="button" class="btn btn-primary" id="saveDefaultCooperative">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>


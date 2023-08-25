<div class="d-flex justify-content-between align-items-center flex-wrap mb-5 gap-3">
    <div class="d-flex flex-column">
        <h3>Dashboard</h3>
        <p class="mb-0">Financial Dashboard</p>
    </div>
    <button type="button" class="btn btn-danger default-cooperative-button" data-bs-toggle="modal" data-bs-target="#setDefaultCooperativeModal">
        Set Default Cooperative
    </button>
</div>

<div class="modal fade" id="setDefaultCooperativeModal" tabindex="-1" role="dialog"
    aria-labelledby="setDefaultCooperativeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="setDefaultCooperativeModalLabel">Select Default Cooperative</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    @foreach ($ownerCooperatives as $cooperative)
                    <div class="form-check">
                        <input class="form-check-input form-check-input-lg" type="radio" name="defaultCooperative"
                               value="{{ $cooperative->id }}" id="defaultCooperative{{ $cooperative->id }}">
                        <label class="form-check-label fs-5 mb-3" for="defaultCooperative{{ $cooperative->id }}">
                            {{ $cooperative->name }}
                        </label>
                    </div>
                @endforeach



                    <button type="button" class="btn btn-primary mt-3" id="saveDefaultCooperative">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const storedDefaultCooperativeId = localStorage.getItem('defaultCooperativeId');

        if (storedDefaultCooperativeId) {
            const radioInput = document.getElementById(`defaultCooperative${storedDefaultCooperativeId}`);
            if (radioInput) {
                radioInput.checked = true;
            }
        }

        const defaultCooperativeButton = document.querySelector('.default-cooperative-button');
        const storedDefaultCooperativeName = localStorage.getItem('defaultCooperativeName');

        if (storedDefaultCooperativeName) {
            defaultCooperativeButton.textContent = storedDefaultCooperativeName;
        }

        const saveButton = document.getElementById('saveDefaultCooperative');
        saveButton.addEventListener('click', function() {
            const selectedCooperative = document.querySelector(
                'input[name="defaultCooperative"]:checked');
            if (selectedCooperative) {
                const cooperativeId = selectedCooperative.value;
                const cooperativeName = selectedCooperative.nextElementSibling.textContent.trim();

                localStorage.setItem('defaultCooperativeId', cooperativeId);
                localStorage.setItem('defaultCooperativeName', cooperativeName);

                alert('Default cooperative set.');
                location.reload();
            } else {
                alert('Please select a default cooperative.');
            }
        });
    });
</script>

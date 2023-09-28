<div class="d-flex justify-content-between align-items-center flex-wrap mb-5 gap-3">
    <div class="d-flex flex-column">
        @if (request()->is('owner/dashboard'))
            <h3>Dashboard</h3>
            <p class="mb-0">View cooperative analytical information</p>
        @elseif(request()->is('owner/cooperatives'))
            <h3>Cooperatives</h3>
            <p class="mb-0">Register and view your cooperatives information</p>
        @elseif(request()->is('owner/accounts'))
            <h3>Accounts</h3>
            <p class="mb-0">Register and manage your accounts</p>
        @elseif(request()->is('owner/categories'))
            <h3>Finance Categories</h3>
            <p class="mb-0">Register and manage your financial categories</p>
        @elseif(request()->is('owner/transactions'))
            <h3>Transactions</h3>
            <p class="mb-0">Record and manage your financial transactions in real-time</p>
        @elseif(request()->is('owner/audits'))
            <h3>Audit Report</h3>
            <p class="mb-0">View the audit report from RCA auditors</p>
        @else
            <h3>Dashboard</h3>
            <p class="mb-0">Manage the account</p>
        @endif
    </div>
    <button type="button" class="btn btn-warning default-cooperative-button" data-bs-toggle="modal"
        data-bs-target="#setDefaultCooperativeModal">
        Set Default Cooperative
    </button>

</div>
@if (session('no-cooperative'))
    <div class="alert alert-warning">
        {{ session('no-cooperative') }}
    </div>
@endif

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



                    <button type="button" class="btn btn-success mt-3" id="saveDefaultCooperative">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const defaultCooperativeButton = document.querySelector('.default-cooperative-button');
        const saveButton = document.getElementById('saveDefaultCooperative');

        // Load default cooperative data on page load
        fetch('/leader/default-cooperative/get')
            .then(response => response.json())
            .then(data => {
                if (data.defaultCooperativeId) {
                    const radioInput = document.getElementById(
                        `defaultCooperative${data.defaultCooperativeId}`);
                    if (radioInput) {
                        radioInput.checked = true;
                    }
                }

                if (data.defaultCooperativeName) {
                    defaultCooperativeButton.textContent = data.defaultCooperativeName;
                }
            });

        // Set default cooperative on button click
        saveButton.addEventListener('click', function() {
            const selectedCooperative = document.querySelector(
                'input[name="defaultCooperative"]:checked');
            if (selectedCooperative) {
                const cooperativeId = selectedCooperative.value;
                const cooperativeName = selectedCooperative.nextElementSibling.textContent.trim();

                fetch('/leader/default-cooperative/set', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        },
                        body: JSON.stringify({
                            cooperativeId,
                            cooperativeName
                        }),
                    })
                    .then(response => response.json())
                    .then(data => {
                        alert(data.message);
                        localStorage.setItem('defaultCooperativeId', cooperativeId);
                        localStorage.setItem('defaultCooperativeName', cooperativeName);
                        location.reload();
                    });
            } else {
                alert('Please select a default cooperative.');
            }
        });
    });
</script>

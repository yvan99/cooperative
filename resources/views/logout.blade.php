<script>
    localStorage.removeItem('defaultCooperativeId');
    localStorage.removeItem('defaultCooperativeName');
</script>
<p>You have been logged out. Redirecting to login page...</p>
<meta http-equiv="refresh" content="2; url={{ route('owner.login') }}">

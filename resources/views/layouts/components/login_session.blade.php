{{-- prompting success or fail msg --}}
<script>
    setTimeout(() => {
        const box = document.querySelector('.prompt');
        box.style.display = 'none';
    }, 2500);
</script>


@if (Session::has('fail'))
    <div class="prompt prompt-fail">
        <p>{{ Session::get('fail') }}</p>
    </div>
@endif
@if (Session::has('success'))
    <div class="prompt prompt-success">
        <p>{{ Session::get('success') }}</p>
    </div>
@endif

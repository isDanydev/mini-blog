<div class=" px-0">
    <nav class="navbar navbar-dark bg-dark navbar-expand-xl py-3 px-3 d-flex justify-content-center">
        <span class="text-light">2024 © Danydev</span>
    </nav>
</div>


<script src="http://localhost/mini-blog/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const postSelect = document.getElementById('postSelect');
        const postContent = document.getElementById('postContent');
        const postIdInput = document.getElementById('post_id');

        postSelect.addEventListener('change', function() {
            const selectedOption = this.options[this.selectedIndex];
            const content = selectedOption.getAttribute('data-content');

            postContent.style.padding = '1rem';
            postContent.style.backgroundColor = '#000';
            postContent.style.color = '#fff';
            postContent.innerHTML = content || 'Selecciona un post para ver su contenido.';
            postIdInput.value = selectedOption.value; // Actualiza el campo oculto con el ID del post
        });
    });
</script>
</body>


</html>
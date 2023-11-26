</div>
    
</body>
<script>
    // Mengatur perilaku tombol toggle
    const toggleSidebarButton = document.getElementById('toggleSidebar');
    const sidebar = document.getElementById('sidebar');

    toggleSidebarButton.addEventListener('click', () => {
        sidebar.classList.toggle('hidden');
    });
</script>
</html>
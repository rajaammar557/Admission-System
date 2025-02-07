@props(['message'])
@if ($message)
    <div id="delete-message"
        class="fixed bottom-5 right-5 bg-green-500 text-white px-4 py-3 rounded-lg shadow-lg flex items-center justify-between space-x-4 animate-slide-in">
        <span>{{ session('message') }}</span>
        <button onclick="closeMessage()" class="text-white hover:text-gray-200 focus:outline-none">
            ✖
        </button>
    </div>
@endif
<script>
    // Auto-hide message after 10 seconds
    setTimeout(() => closeMessage(), 30000);

    // Function to close the message manually
    function closeMessage() {
        let messageBox = document.getElementById('delete-message');
        if (messageBox) {
            messageBox.classList.add('opacity-0', 'transition-opacity', 'duration-500');
            setTimeout(() => messageBox.remove(), 500);
        }
    }
</script>

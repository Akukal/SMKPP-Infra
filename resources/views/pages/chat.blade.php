<!-- Chat Container -->
<div id="chatContainer" class="fixed bottom-5 right-5 z-50">
    <!-- Tombol Chat -->
    <button id="chatButton" class="bg-orange-600 text-white rounded-full w-16 h-16 text-2xl flex items-center justify-center shadow-lg hover:bg-orange-700 transition">💬</button>

    <!-- Kotak Chat -->
    <div id="chatBox" class="hidden w-80 bg-white rounded-2xl shadow-xl flex flex-col overflow-hidden max-h-[70vh]">
        <!-- Header -->
        <div class="bg-orange-600 text-white px-4 py-2 font-semibold flex items-center justify-between">
            Chat Asisten Sekolah
            <button id="closeChat" class="text-white hover:text-gray-200 font-bold">✕</button>
        </div>

        <!-- Messages -->
        <div id="chatMessages" class="flex flex-col p-3 space-y-2 overflow-y-auto">
            <div class="msg bot bg-gray-200 text-black p-3 rounded-xl max-w-[80%]">
                👋 Halo, saya asisten sekolah. Ada yang bisa dibantu?
            </div>
        </div>

        <!-- Input -->
        <div id="chatInput" class="flex border-t border-gray-200 p-2">
            <input id="message" type="text" placeholder="Ketik pesan..." class="flex-1 p-2 rounded-xl border border-gray-300 outline-none focus:ring-2 focus:ring-orange-500">
            <button id="sendBtn" class="ml-2 bg-orange-600 text-white px-4 py-2 rounded-xl hover:bg-orange-700 transition">✈️</button>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const chatButton = document.getElementById('chatButton');
    const chatBox = document.getElementById('chatBox');
    const closeChat = document.getElementById('closeChat');
    const sendBtn = document.getElementById('sendBtn');
    const messageInput = document.getElementById('message');
    const chatMessages = document.getElementById('chatMessages');

    // Toggle Chatbox
    chatButton.addEventListener('click', () => {
        chatBox.classList.remove('hidden');
        chatButton.classList.add('hidden'); // sembunyikan tombol
        scrollToBottom();
    });
    closeChat.addEventListener('click', () => {
        chatBox.classList.add('hidden');
        chatButton.classList.remove('hidden'); // tampilkan tombol lagi
    });

    // Kirim pesan
    sendBtn.addEventListener('click', sendMessage);
    messageInput.addEventListener('keypress', e => { if (e.key === 'Enter') sendMessage(); });

    function sendMessage() {
        const msg = messageInput.value.trim();
        if (!msg) return;

        addMessage(msg, 'user');
        messageInput.value = '';

        // Kirim ke API Laravel
        fetch("/api/chat", {
            method: "POST",
            headers: { "Content-Type": "application/json", "Accept": "application/json" },
            body: JSON.stringify({ message: msg })
        })
        .then(res => res.json())
        .then(data => {
            addMessage(data.reply, 'bot');
        })
        .catch(err => {
            addMessage('⚠️ Error koneksi', 'bot');
        });
    }

    function addMessage(text, type) {
        const msgDiv = document.createElement('div');
        msgDiv.className = type === 'user'
            ? 'msg user bg-orange-100 text-orange-900 p-3 rounded-xl max-w-[75%] ml-auto text-right'
            : 'msg bot bg-gray-200 text-black p-3 rounded-xl max-w-[80%]';
        msgDiv.textContent = text;
        chatMessages.appendChild(msgDiv);
        scrollToBottom();
        adjustChatHeight();
    }

    function scrollToBottom() {
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }

    function adjustChatHeight() {
        // Atur tinggi chatbox menyesuaikan isi pesan (max-height tetap)
        const contentHeight = chatMessages.scrollHeight + 100; // + header & input
        const maxHeight = window.innerHeight * 0.7;
        chatBox.style.height = Math.min(contentHeight, maxHeight) + 'px';
    }
});
</script>

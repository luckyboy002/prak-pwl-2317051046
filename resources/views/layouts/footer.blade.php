<footer>
    <div class="container">
        <p class="mb-0">
            &copy; {{ date('Y') }} <strong>Pemrograman Web Lanjut</strong> — Universitas Lampung  
            <br>
            <small>Developed with ❤️ by {{ auth()->user()->name ?? 'Mahasiswa' }}</small>
        </p>
    </div>
</footer>

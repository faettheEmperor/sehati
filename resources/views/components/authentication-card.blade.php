<div
    class="flex flex-col items-center justify-center min-h-screen py-12 pt-6 bg-gradient-to-r from-[#febd25] to-[#f59039]">
    <!-- Add the "Login" text here -->
    <div class="mb-1 text-3xl font-bold text-white ">
        Login
    </div>

    <div class="mb-6 text-3xl font-bold text-white ">
        SEHATI
    </div>

    <div class="mb-6">
        <div class="relative p-2 border-4 rounded-full border-white/20">
            <!-- Glowing effect -->
            <div class="absolute inset-0 border-4 rounded-full border-white/50 animate-glow-border"></div>
            <!-- Logo -->
            {{ $logo }}
        </div>
    </div>

    <div class="px-6 py-4 overflow-hidden bg-white shadow-md rounded-2xl sm:max-w-md sm:rounded-lg" style="width: 90%">
        {{ $slot }}
    </div>
</div>

<style>
    @keyframes glow-border {
        0% {
            border-color: rgba(255, 255, 255, 0.5);
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }

        50% {
            border-color: rgba(255, 255, 255, 0.9);
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.9);
        }

        100% {
            border-color: rgba(255, 255, 255, 0.5);
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }
    }

    .animate-glow-border {
        animation: glow-border 2s infinite;
    }
</style>

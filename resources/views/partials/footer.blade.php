
<footer class="bg-slate-900 text-white">
    <div class="max-w-7xl mx-auto px-6 py-10">

        <div class="flex flex-col md:flex-row justify-between
                    gap-8 border-b border-slate-700 pb-8">

            <div>
                <a href="/" class="text-2xl font-extrabold">
                    Task<span class="text-indigo-400">Flow</span>
                </a>

                <p class="text-slate-400 mt-3 max-w-sm leading-6">
                    A simpler way to organize your tasks, plan your day
                    and focus on what matters.
                </p>
            </div>

            <div>
                <h3 class="font-semibold mb-3">Quick Links</h3>

                <div class="flex flex-col gap-2 text-slate-400 text-sm">
                    <a href="/" class="hover:text-white">Home</a>
                    <a href="/login" class="hover:text-white">Login</a>
                    <a href="/register" class="hover:text-white">Sign Up</a>
                </div>
            </div>

        </div>

        <div class="pt-6 flex flex-col sm:flex-row
                    justify-between gap-3 text-sm text-slate-400">
            <p>© {{ date('Y') }} TaskFlow. All rights reserved.</p>
            <p>Made for a more productive day ✨</p>
        </div>

    </div>
</footer>

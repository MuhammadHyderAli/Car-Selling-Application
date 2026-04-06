@extends('layouts.app')

@section('content')
<div class="relative min-h-[80vh] flex items-center justify-center py-12 px-6 lg:px-8">
    
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-[#a8c0f0] opacity-[0.03] blur-[120px] rounded-full pointer-events-none"></div>

    <div class="w-full max-w-lg relative z-10">
        <div class="text-center mb-10">
            <h1 class="text-3xl font-bold uppercase tracking-tight text-zinc-900 dark:text-white mb-2">Create Account</h1>
            <p class="text-sm text-zinc-600 dark:text-gray-400">Join Kinetic Gallery to manage your automotive acquisitions.</p>
        </div>

        <div class="bg-white dark:bg-[#151518] border border-zinc-200 dark:border-white/5 rounded-2xl p-8 shadow-2xl">
            <form class="space-y-6">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-[10px] text-zinc-600 dark:text-gray-500 font-bold uppercase tracking-widest mb-2">First Name</label>
                        <input type="text" placeholder="First" class="w-full bg-[#fafafa] dark:bg-[#0f0f11] border border-zinc-200 dark:border-white/10 rounded-lg py-3.5 px-4 text-sm text-zinc-900 dark:text-white placeholder-gray-600 focus:outline-none focus:border-[#a8c0f0] transition">
                    </div>
                    <div>
                        <label class="block text-[10px] text-zinc-600 dark:text-gray-500 font-bold uppercase tracking-widest mb-2">Last Name</label>
                        <input type="text" placeholder="Last" class="w-full bg-[#fafafa] dark:bg-[#0f0f11] border border-zinc-200 dark:border-white/10 rounded-lg py-3.5 px-4 text-sm text-zinc-900 dark:text-white placeholder-gray-600 focus:outline-none focus:border-[#a8c0f0] transition">
                    </div>
                </div>

                <div>
                    <label class="block text-[10px] text-zinc-600 dark:text-gray-500 font-bold uppercase tracking-widest mb-2">Email Address</label>
                    <input type="email" placeholder="client@example.com" class="w-full bg-[#fafafa] dark:bg-[#0f0f11] border border-zinc-200 dark:border-white/10 rounded-lg py-3.5 px-4 text-sm text-zinc-900 dark:text-white placeholder-gray-600 focus:outline-none focus:border-[#a8c0f0] transition">
                </div>

                <div>
                    <label class="block text-[10px] text-zinc-600 dark:text-gray-500 font-bold uppercase tracking-widest mb-2">Password</label>
                    <input type="password" placeholder="••••••••" class="w-full bg-[#fafafa] dark:bg-[#0f0f11] border border-zinc-200 dark:border-white/10 rounded-lg py-3.5 px-4 text-sm text-zinc-900 dark:text-white placeholder-gray-600 focus:outline-none focus:border-[#a8c0f0] transition">
                </div>

                <div>
                    <label class="block text-[10px] text-zinc-600 dark:text-gray-500 font-bold uppercase tracking-widest mb-2">Confirm Password</label>
                    <input type="password" placeholder="••••••••" class="w-full bg-[#fafafa] dark:bg-[#0f0f11] border border-zinc-200 dark:border-white/10 rounded-lg py-3.5 px-4 text-sm text-zinc-900 dark:text-white placeholder-gray-600 focus:outline-none focus:border-[#a8c0f0] transition">
                </div>

                <div class="flex items-start mt-2">
                    <input type="checkbox" id="terms" class="appearance-none w-4 h-4 mt-0.5 border border-zinc-300 dark:border-white/20 rounded-[3px] bg-[#fafafa] dark:bg-[#0f0f11] checked:bg-[#a8c0f0] checked:border-[#a8c0f0] transition relative cursor-pointer after:content-[''] after:absolute after:hidden checked:after:block after:left-[4px] after:top-[1px] after:w-[6px] after:h-[10px] after:border-r-2 after:border-b-2 after:border-black after:rotate-45 shrink-0">
                    <label for="terms" class="ml-3 block text-xs text-zinc-600 dark:text-gray-400 cursor-pointer leading-relaxed">
                        I agree to the <a href="#" class="text-zinc-900 dark:text-white hover:text-[#a8c0f0] transition underline underline-offset-2">Terms of Service</a> and <a href="#" class="text-zinc-900 dark:text-white hover:text-[#a8c0f0] transition underline underline-offset-2">Privacy Policy</a>.
                    </label>
                </div>

                <button type="submit" class="w-full bg-zinc-900 text-white hover:bg-zinc-800 dark:bg-white dark:text-black dark:hover:bg-gray-200 font-bold uppercase tracking-widest text-xs py-4 rounded-lg transition mt-4">
                    Create Account
                </button>
            </form>
        </div>

        <p class="mt-8 text-center text-xs text-zinc-600 dark:text-gray-500">
            Already a client? 
            <a href="{{ route('login') }}" class="font-bold text-[#a8c0f0] hover:text-zinc-900 dark:hover:text-white transition uppercase tracking-widest ml-1">Sign In</a>
        </p>
    </div>

</div>
@endsection
<nav class="sticky top-0 bg-green-500 shadow-lg min-h-screen">  
    <div class="sticky top-0">
        <!-- Logo (centered) -->
        <div class="flex justify-center py-4">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </div>

        <!-- Links -->
        <ul class="p-4">
            <li class="mb-2">
                <!-- Dark green button around Dashboard link -->
                <div class="bg-green-900 rounded-md p-2">
                    <a class="text-white" href="{{ route('dashboard') }}">Dashboard</a>
                </div>
            </li>

            @if (Auth::check() && Auth::user()->role === 'parents')
            <li class="mb-2">
                <!-- Dark green button around Classroom Management link -->
                <div class="bg-green-900 rounded-md p-2">
                    <a class="text-white" href="{{ route('activity.getData') }}">Manage Activity</a>
                </div>
            </li>    
            <li class="mb-2">
                    <!-- Dark green button around Bulletin link -->
                    <div class="bg-green-900 rounded-md p-2">
                        <a class="text-white" href="{{ route('bulletins.show') }}">Bulletin</a>
                    </div>
                </li>
            @endif

            @if (Auth::check() && Auth::user()->role === 'admin')
                <li class="mb-2">
                    <!-- Dark green button around Student Result link -->
                    <div class="bg-green-900 rounded-md p-2">
                        <a class="text-white" href="{{ route('ManageStudentResult.searchExamList') }}">Student Result</a>
                    </div>
                </li>
                <li class="mb-2">
                    <!-- Dark green button around Profile link -->
                    <div class="bg-green-900 rounded-md p-2">
                        <a class="text-white" href="{{ route('profile.edit') }}">Manage Profile</a>
                    </div>
                </li>
                <li class="mb-2">
                    <!-- Dark green button around Settings link -->
                    <div class="bg-green-900 rounded-md p-2">
                        <a class="text-white" href="{{ route('activity.getDataAdmin') }}">Manage Activity</a>
                    </div>
                </li>
            @endif

            @if (Auth::check() && Auth::user()->role === 'teachers')
                <li class="mb-2">
                    <!-- Dark green button around Classroom Management link -->
                    <div class="bg-green-900 rounded-md p-2">
                        <a class="text-white" href="{{ route('activity.getData') }}">Manage Activity</a>
                    </div>
                </li>
                <li class="mb-2">
                    <!-- Dark green button around Lesson Plans link -->
                    <div class="bg-green-900 rounded-md p-2">
                        <a class="text-white" href="{{ route('bulletins.index') }}">Manage Bulletin</a>
                    </div>
                </li>
            @endif

            @auth
                <li class="mb-2">
                    <div class="bg-green-900 rounded-md p-2">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="text-white">Logout</button>
                        </form>
                    </div>
                </li>
            @endauth
        </ul>
    </div>
</nav>

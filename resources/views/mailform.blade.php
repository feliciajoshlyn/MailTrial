<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail Form</title>
    @vite('resources/css/app.css')
    <link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,600' rel='stylesheet'>
</head>
<body class="min-h-screen bg-gradient-to-br from-yellow-50 to-amber-50 flex items-center justify-center p-6 font-['Poppins']">
    
    <div class="w-full max-w-md">
        <form action="{{ route('send.mail.form') }}" method="POST" class="bg-white rounded-2xl shadow-sm border border-yellow-100 overflow-hidden">
            @csrf
            
            <!-- Header Section -->
            <div class="bg-gradient-to-r from-yellow-100 to-amber-100 px-8 py-8 text-center">
                <div class="inline-block p-3 bg-white rounded-xl mb-3 shadow-sm">
                    <svg class="w-8 h-8 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h2 class="text-2xl font-semibold text-gray-800">Register to Cloud Class</h2>
                <p class="text-gray-600 text-sm mt-1">Please fill in this form to register</p>
            </div>
            <!-- Form Body -->
            <div class="px-8 py-8 space-y-5">
                {{-- name --}}
                <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                    <input type="text" name="name" id="name" required 
                        class="w-full px-4 py-2.5 border border-gray-200 rounded-lg focus:border-amber-300 focus:ring-2 focus:ring-amber-100 transition-all outline-none bg-gray-50 focus:bg-white">
                </div>
                <!-- To Field -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Student Email</label>
                    <input type="email" name="email" id="email" required 
                        class="w-full px-4 py-2.5 border border-gray-200 rounded-lg focus:border-amber-300 focus:ring-2 focus:ring-amber-100 transition-all outline-none bg-gray-50 focus:bg-white">
                </div>
                {{-- password --}}
                <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                    <input type="password" name="password" id="password" required 
                        class="w-full px-4 py-2.5 border border-gray-200 rounded-lg focus:border-amber-300 focus:ring-2 focus:ring-amber-100 transition-all outline-none bg-gray-50 focus:bg-white">
                </div>
                {{-- confirm password --}}
                <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" required 
                        class="w-full px-4 py-2.5 border border-gray-200 rounded-lg focus:border-amber-300 focus:ring-2 focus:ring-amber-100 transition-all outline-none bg-gray-50 focus:bg-white">
                </div>
                {{-- birthdate --}}
                <div>
                <label for="birthdate" class="block text-sm font-medium text-gray-700   mb-2">Birthdate</label>
                    <input type="date" name="birthdate" id="birthdate" required 
                        class="w-full px-4 py-2.5 border border-gray-200 rounded-lg focus:border-amber-300 focus:ring-2 focus:ring-amber-100 transition-all outline-none bg-gray-50 focus:bg-white">
                </div>
                {{-- <!-- Subject Field -->
                <div>
                    <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                    <input type="text" name="subject" id="subject" required 
                        class="w-full px-4 py-2.5 border border-gray-200 rounded-lg focus:border-amber-300 focus:ring-2 focus:ring-amber-100 transition-all outline-none bg-gray-50 focus:bg-white">
                </div>

                <!-- Message Field -->
                <div>
                    <label for="body" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                    <textarea name="body" id="body" rows="5" required 
                        class="w-full px-4 py-2.5 border border-gray-200 rounded-lg focus:border-amber-300 focus:ring-2 focus:ring-amber-100 transition-all outline-none resize-none bg-gray-50 focus:bg-white"></textarea>
                </div> --}}

                <!-- Submit Button -->
                <button type="submit" 
                    class="w-full bg-amber-400 hover:bg-amber-500 text-gray-800 font-medium py-3 rounded-lg shadow-sm hover:shadow transition-all duration-200">
                    Send Email
                </button>
            </div>
        </form>
    </div>

</body>
</html>
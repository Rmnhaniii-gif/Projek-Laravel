<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Library - Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body class="bg-gray-100 font-[Poppins]">
    <header class="bg-white border-b border-b-gray-200 shadow-md px-4 py-3 flex justify-between items-center md:px-8">
        <div class="font-semibold text-gray-800">Admin Library</div>
        <button class="lg:hidden rounded-md focus:outline-none" id="menuButton">
            <i class="fas fa-bars text-gray-800"></i>
        </button>
        <div class="hidden lg:flex lg:items-center lg:gap-4">
            <p class="font-medium text-sm text-gray-800">Khen Cahyo</p>
            <div class="flex items-center justify-center w-10 h-10 rounded-full bg-gray-200">
                <span class="font-semibold text-gray-800">D</span>
            </div>
        </div>
    </header>

    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <nav class="bg-white border-r border-r-gray-200 text-gray-700 w-64 space-y-1 py-6 px-2 absolute inset-y-0 left-0 transform -translate-x-full lg:relative lg:translate-x-0 transition duration-200 ease-in-out md:px-4"
            id="sidebar">
            <a href="#"
                class="text-sm flex items-center gap-3 px-4 py-3 rounded transition-all duration-300 hover:bg-gray-200 hover:text-black">
                <i class="fas fa-home"></i>
                <span>Dashboard</span>
            </a>
            <a href="#"
                class="text-sm flex items-center gap-3 px-4 py-3 rounded transition-all duration-300 hover:bg-gray-200 hover:text-black">
                <i class="fas fa-gear"></i>
                <span>Settings</span>
            </a>
        </nav>

        <!-- Main content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 px-4 py-4 md:px-8 md:py-8">
                <div class="flex flex-col gap-1">
                    <h1 class="font-semibold md:text-lg text-gray-800">Dashboard</h1>
                    <div class="flex items-center gap-1">
                        <p class="text-xs text-gray-400 md:text-sm">Admin</p>
                        <p class="text-xs text-gray-400 md:text-sm">/</p>
                        <p class="text-xs text-gray-400 md:text-sm">Dashboard</p>
                    </div>
                </div>

                <div class="mt-6 grid grid-cols-2 gap-y-4 gap-x-2 md:grid-cols-4 md:gap-x-4">
                   <div class="card w-full bg-white shadow rounded-md">
    <div class="card-body">
        <h2 class="font-semibold text-sm md:text-base text-gray-800">Total Books</h2>
        <div class="divider my-0"></div>
        <p class="text-3xl font-semibold md:text-4xl text-gray-800">10</p>
    </div>
</div>
                    <div class="card w-full bg-white shadow rounded-md">
    <div class="card-body">
        <h2 class="font-semibold text-sm md:text-base text-gray-800">Total Books</h2>
        <div class="divider my-0"></div>
        <p class="text-3xl font-semibold md:text-4xl text-gray-800">10</p>
    </div>
</div>
                </div>
            </main>
        </div>
    </div>

    <script>
        document.getElementById('menuButton').addEventListener('click', () => {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('-translate-x-full');
        });
    </script>

</body>

</html><?php /**PATH D:\laragon\www\projekHani\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>